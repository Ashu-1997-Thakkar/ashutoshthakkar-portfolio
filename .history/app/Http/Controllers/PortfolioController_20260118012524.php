<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function skills()
    {
        return view('skills');
    }

    public function experience()
    {
        return view('experience');
    }

    public function projects()
    {
        return view('projects');
    }

    public function education()
    {
        return view('education');
    }

    public function certificates()
    {
        return view('certificates');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }

    /**
     * Handle contact form submission
     */
    public function contactSubmit(Request $request)
    {
        // IMPORTANT: Check if request expects JSON
        if (!$request->expectsJson() && !$request->ajax()) {
            // Force JSON response for AJAX requests
            $request->headers->set('Accept', 'application/json');
        }

        try {
            // Validate form data
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'nullable|string|max:20',
                'subject' => 'nullable|string|max:255',
                'message' => 'required|string|max:1000',
            ], [
                'name.required' => 'Please enter your name',
                'email.required' => 'Please enter your email',
                'email.email' => 'Please enter a valid email address',
                'message.required' => 'Please enter your message',
                'message.max' => 'Message cannot exceed 1000 characters',
            ]);

            // Prepare data
            $data = [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'] ?? 'Not provided',
                'subject' => $validated['subject'] ?? 'Contact Form Inquiry',
                'user_message' => $validated['message'],
                'submitted_at' => now()->format('d M Y, h:i A'),
            ];

            // Send Email to your email address (wrapped in try-catch to not break the flow)
            try {
                $this->sendEmail($data);
            } catch (\Exception $e) {
                Log::error('Email sending failed: ' . $e->getMessage());
            }

            // Send SMS to your phone number (wrapped in try-catch to not break the flow)
            try {
                $this->sendSMS($data);
            } catch (\Exception $e) {
                Log::error('SMS sending failed: ' . $e->getMessage());
            }

            // Always return JSON response
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your message has been sent successfully. I will get back to you within 24 hours.'
            ], 200, ['Content-Type' => 'application/json']);

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Return validation errors as JSON
            return response()->json([
                'success' => false,
                'message' => 'Please check your input and try again.',
                'errors' => $e->errors()
            ], 422, ['Content-Type' => 'application/json']);
            
        } catch (\Exception $e) {
            Log::error('Contact Form Error: ' . $e->getMessage());
            Log::error('Stack Trace: ' . $e->getTraceAsString());
            
            return response()->json([
                'success' => false,
                'message' => 'Sorry, something went wrong. Please try again or contact me directly via email or phone.',
                'error_details' => config('app.debug') ? $e->getMessage() : null
            ], 500, ['Content-Type' => 'application/json']);
        }
    }

    /**
     * Send email notification
     */
    private function sendEmail($data)
    {
        try {
            // Send notification to yourself
            Mail::html($this->getAdminEmailTemplate($data), function($message) use ($data) {
                $message->to('ashnandani123@gmail.com', 'Ashutosh Nandani')
                        ->subject('New Contact: ' . $data['subject'])
                        ->replyTo($data['email'], $data['name'])
                        ->from(config('mail.from.address'), config('mail.from.name'));
            });

            // Send auto-reply to user
            Mail::html($this->getUserEmailTemplate($data), function($message) use ($data) {
                $message->to($data['email'], $data['name'])
                        ->subject('Thank you for contacting me!')
                        ->from(config('mail.from.address'), config('mail.from.name'));
            });

            Log::info('Contact form emails sent successfully');
        } catch (\Exception $e) {
            Log::error('Email sending failed: ' . $e->getMessage());
            // Don't throw exception, just log it
        }
    }

    /**
     * Get admin email template
     */
    private function getAdminEmailTemplate($data)
    {
        return "
            <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;'>
                <div style='background: linear-gradient(135deg, #4F46E5, #7C3AED); color: white; padding: 30px; text-align: center;'>
                    <h1 style='margin: 0;'>📬 New Contact Form Submission</h1>
                </div>
                <div style='padding: 30px; background: #f9fafb;'>
                    <div style='background: white; padding: 20px; border-radius: 8px; margin-bottom: 20px;'>
                        <h2 style='color: #4F46E5; margin-top: 0;'>Contact Details</h2>
                        <table style='width: 100%; border-collapse: collapse;'>
                            <tr style='border-bottom: 1px solid #e5e7eb;'>
                                <td style='padding: 12px; font-weight: 600; color: #4F46E5;'>👤 Name:</td>
                                <td style='padding: 12px;'>{$data['name']}</td>
                            </tr>
                            <tr style='border-bottom: 1px solid #e5e7eb;'>
                                <td style='padding: 12px; font-weight: 600; color: #4F46E5;'>📧 Email:</td>
                                <td style='padding: 12px;'><a href='mailto:{$data['email']}'>{$data['email']}</a></td>
                            </tr>
                            <tr style='border-bottom: 1px solid #e5e7eb;'>
                                <td style='padding: 12px; font-weight: 600; color: #4F46E5;'>📱 Phone:</td>
                                <td style='padding: 12px;'>{$data['phone']}</td>
                            </tr>
                            <tr style='border-bottom: 1px solid #e5e7eb;'>
                                <td style='padding: 12px; font-weight: 600; color: #4F46E5;'>📝 Subject:</td>
                                <td style='padding: 12px;'>{$data['subject']}</td>
                            </tr>
                            <tr>
                                <td style='padding: 12px; font-weight: 600; color: #4F46E5;'>⏰ Time:</td>
                                <td style='padding: 12px;'>{$data['submitted_at']}</td>
                            </tr>
                        </table>
                    </div>
                    <div style='background: white; padding: 20px; border-radius: 8px;'>
                        <h3 style='color: #4F46E5; margin-top: 0;'>💬 Message:</h3>
                        <p style='line-height: 1.6; color: #333;'>{$data['user_message']}</p>
                    </div>
                    <div style='text-align: center; margin-top: 20px;'>
                        <a href='mailto:{$data['email']}' style='display: inline-block; padding: 12px 30px; background: linear-gradient(135deg, #4F46E5, #7C3AED); color: white; text-decoration: none; border-radius: 8px; font-weight: 600;'>Reply via Email</a>
                    </div>
                </div>
            </div>
        ";
    }

    /**
     * Get user email template
     */
    private function getUserEmailTemplate($data)
    {
        return "
            <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;'>
                <div style='background: linear-gradient(135deg, #10B981, #06B6D4); color: white; padding: 40px; text-align: center;'>
                    <h1 style='margin: 0; font-size: 28px;'>🙏 Thank You!</h1>
                    <p style='margin: 10px 0 0 0;'>I've received your message</p>
                </div>
                <div style='padding: 30px; background: #f9fafb;'>
                    <h3>Hi {$data['name']},</h3>
                    <p style='line-height: 1.6;'>Thank you for taking the time to contact me! I appreciate your interest and I'm excited to learn more about your project.</p>
                    
                    <div style='background: #eff6ff; border-left: 4px solid #10B981; padding: 15px; margin: 20px 0;'>
                        <p style='margin: 0; color: #1e40af;'><strong>✅ Your message has been received!</strong></p>
                        <p style='margin: 5px 0 0 0; color: #1e40af;'>I will respond within 24 hours.</p>
                    </div>
                    
                    <p style='line-height: 1.6;'>If your matter is urgent, feel free to reach out directly:</p>
                    <ul style='line-height: 1.8;'>
                        <li>📧 Email: ashnandani123@gmail.com</li>
                        <li>📱 Phone/WhatsApp: +91 74900 26191</li>
                    </ul>
                    
                    <p style='margin-top: 30px;'>Best regards,<br><strong style='color: #4F46E5;'>Ashutosh Nandani</strong><br><span style='color: #666;'>Full Stack Laravel Developer</span></p>
                </div>
                <div style='background: #1f2937; color: #9ca3af; padding: 20px; text-align: center; font-size: 12px;'>
                    <p style='margin: 0;'>This is an automated confirmation email.</p>
                </div>
            </div>
        ";
    }

    /**
     * Send SMS notification
     */
    private function sendSMS($data)
    {
        try {
            // Using Fast2SMS - Most recommended for India
            $this->sendViaFast2SMS($data);
            
            // Or use other services (uncomment one):
            // $this->sendViaTwilio($data);
            // $this->sendViaMSG91($data);
            // $this->sendViaTextLocal($data);

        } catch (\Exception $e) {
            Log::error('SMS sending failed: ' . $e->getMessage());
            // Don't throw exception, just log it
        }
    }

    /**
     * Send SMS via Fast2SMS (Recommended for India)
     */
    private function sendViaFast2SMS($data)
    {
        $apiKey = env('FAST2SMS_API_KEY');
        
        if (!$apiKey) {
            Log::warning('Fast2SMS API key not configured');
            return;
        }

        $mobile = '7490026191'; // Your phone number (without +91)

        $message = "📩 New Contact Form!\n\n"
                 . "👤 {$data['name']}\n"
                 . "📧 {$data['email']}\n"
                 . "📱 {$data['phone']}\n"
                 . "💬 " . substr($data['user_message'], 0, 50) . "...\n\n"
                 . "Check email for details.";

        try {
            $response = Http::withHeaders([
                'authorization' => $apiKey,
                'Content-Type' => 'application/json'
            ])->post('https://www.fast2sms.com/dev/bulkV2', [
                'route' => 'q',
                'message' => $message,
                'language' => 'english',
                'flash' => 0,
                'numbers' => $mobile,
            ]);

            if ($response->successful()) {
                Log::info('SMS sent via Fast2SMS successfully');
            } else {
                Log::error('Fast2SMS Error: ' . $response->body());
            }
        } catch (\Exception $e) {
            Log::error('Fast2SMS Exception: ' . $e->getMessage());
        }
    }

    /**
     * Send SMS via Twilio
     */
    private function sendViaTwilio($data)
    {
        $sid = env('TWILIO_SID');
        $token = env('TWILIO_TOKEN');
        $from = env('TWILIO_FROM');
        $to = '+917490026191';

        if (!$sid || !$token || !$from) {
            Log::warning('Twilio credentials not configured');
            return;
        }

        $message = "New Contact: {$data['name']}\nEmail: {$data['email']}\nPhone: {$data['phone']}";

        try {
            $response = Http::withBasicAuth($sid, $token)
                ->asForm()
                ->post("https://api.twilio.com/2010-04-01/Accounts/{$sid}/Messages.json", [
                    'From' => $from,
                    'To' => $to,
                    'Body' => $message,
                ]);

            if ($response->successful()) {
                Log::info('SMS sent via Twilio successfully');
            } else {
                Log::error('Twilio Error: ' . $response->body());
            }
        } catch (\Exception $e) {
            Log::error('Twilio Exception: ' . $e->getMessage());
        }
    }

    /**
     * Send SMS via MSG91
     */
    private function sendViaMSG91($data)
    {
        $authKey = env('MSG91_AUTH_KEY');
        $senderId = env('MSG91_SENDER_ID', 'MSGIND');
        
        if (!$authKey) {
            Log::warning('MSG91 credentials not configured');
            return;
        }

        $mobile = '7490026191';
        $message = urlencode("New Contact: {$data['name']}, Email: {$data['email']}");

        try {
            $response = Http::get('https://api.msg91.com/api/sendhttp.php', [
                'authkey' => $authKey,
                'mobiles' => $mobile,
                'message' => $message,
                'sender' => $senderId,
                'route' => '4',
            ]);

            if ($response->successful()) {
                Log::info('SMS sent via MSG91 successfully');
            } else {
                Log::error('MSG91 Error: ' . $response->body());
            }
        } catch (\Exception $e) {
            Log::error('MSG91 Exception: ' . $e->getMessage());
        }
    }

    /**
     * Send SMS via TextLocal
     */
    private function sendViaTextLocal($data)
    {
        $apiKey = env('TEXTLOCAL_API_KEY');
        
        if (!$apiKey) {
            Log::warning('TextLocal API key not configured');
            return;
        }

        $mobile = '917490026191';
        $message = urlencode("New Contact: {$data['name']}, Email: {$data['email']}");

        try {
            $response = Http::asForm()->post('https://api.textlocal.in/send/', [
                'apikey' => $apiKey,
                'numbers' => $mobile,
                'sender' => env('TEXTLOCAL_SENDER', 'TXTLCL'),
                'message' => $message,
            ]);

            if ($response->successful()) {
                Log::info('SMS sent via TextLocal successfully');
            } else {
                Log::error('TextLocal Error: ' . $response->body());
            }
        } catch (\Exception $e) {
            Log::error('TextLocal Exception: ' . $e->getMessage());
        }
    }
}