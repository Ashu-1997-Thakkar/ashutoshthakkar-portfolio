@extends('layouts.app')

@section('title', 'Contact Us – Ashutosh Nandani')

@section('content')
<style>
:root{
--primary:#6366F1;--pink:#EC4899;--cyan:#22D3EE;
--bg:#020617;--card:rgba(255,255,255,.08);--border:rgba(255,255,255,.18);
--text:#E5E7EB;--muted:#94A3B8;
--grad:linear-gradient(135deg,#6366F1,#22D3EE,#EC4899);
--shadow:0 30px 80px rgba(0,0,0,.55);--t:.4s cubic-bezier(.4,0,.2,1);
}
body{background:var(--bg);color:var(--text);}

/* glass */
.glass{background:var(--card);backdrop-filter:blur(22px);border:1px solid var(--border);
border-radius:1.8rem;box-shadow:var(--shadow);transition:var(--t);}
.glass:hover{transform:translateY(-6px);box-shadow:0 40px 120px rgba(99,102,241,.45);}

/* hero bg */
.hero{background:
radial-gradient(circle at 15% 20%,rgba(99,102,241,.18),transparent 40%),
radial-gradient(circle at 80% 70%,rgba(236,72,153,.18),transparent 45%),
linear-gradient(180deg,#020617,#020617 60%,#020617);}

/* buttons */
.btn-grad{background:var(--grad);border:0;color:#fff;font-weight:700;border-radius:50px;
padding:14px 34px;box-shadow:0 15px 40px rgba(99,102,241,.5);transition:var(--t);}
.btn-grad:hover{transform:translateY(-4px);box-shadow:0 25px 60px rgba(99,102,241,.7);}
.btn-outline{border:1px solid rgba(255,255,255,.4);color:#fff;border-radius:50px;padding:14px 28px;}

/* inputs */
.float{position:relative;}
.float input,.float textarea{
background:rgba(15,23,42,.8);border:1px solid rgba(99,102,241,.35);
border-radius:14px;padding:18px 16px 8px;color:#fff;width:100%;
transition:var(--t);}
.float label{position:absolute;top:16px;left:16px;color:var(--muted);transition:var(--t);pointer-events:none;}
.float input:focus,.float textarea:focus{outline:0;border-color:var(--primary);box-shadow:0 0 0 4px rgba(99,102,241,.25);}
.float input:focus+label,.float textarea:focus+label,
.float input:not(:placeholder-shown)+label,.float textarea:not(:placeholder-shown)+label{
transform:translateY(-12px) scale(.85);color:var(--primary);}

/* map */
#map{height:420px;border-radius:1.6rem;border:1px solid rgba(99,102,241,.35);box-shadow:var(--shadow);}

.info-card{background:linear-gradient(135deg,rgba(99,102,241,.18),rgba(236,72,153,.18));
border-radius:1.4rem;padding:22px;display:flex;gap:18px;align-items:center;}
.icon-box{width:64px;height:64px;border-radius:18px;background:var(--grad);
display:flex;align-items:center;justify-content:center;color:#fff;font-size:26px;}
</style>

<!-- HERO -->
<section class="hero min-vh-100 d-flex align-items-center pt-5">
<div class="container">
<div class="row g-5 align-items-center">

<div class="col-lg-6" data-aos="fade-right">
<span class="badge mb-4 px-4 py-2 fs-6" style="background:var(--grad)">Available for Freelance</span>
<h1 class="display-4 fw-bold mb-4">
Let’s Build <span style="background:var(--grad);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">Powerful</span><br>Digital Products
</h1>
<p class="fs-5 text-secondary mb-5">
Laravel • Livewire • REST APIs • Secure Systems <br>
Turning ideas into scalable solutions.
</p>
<div class="d-flex flex-wrap gap-3">
<a href="#contactForm" class="btn btn-grad btn-lg"><i class="fas fa-paper-plane me-2"></i>Start Project</a>
<a href="mailto:ashnandani123@gmail.com" class="btn btn-outline btn-lg"><i class="fas fa-envelope me-2"></i>Email Me</a>
</div>
</div>

<div class="col-lg-6" data-aos="fade-left">
<div class="glass p-4">
<div class="row g-4">
<div class="col-12">
<div class="info-card">
<div class="icon-box"><i class="fas fa-envelope"></i></div>
<div>
<h6 class="fw-bold mb-1">Email</h6>
<p class="mb-0">ashnandani123@gmail.com</p>
</div>
</div>
</div>

<div class="col-md-6">
<div class="info-card">
<div class="icon-box"><i class="fas fa-phone"></i></div>
<div>
<h6 class="fw-bold mb-1">Phone</h6>
<p class="mb-0">+91 74900 26191</p>
</div>
</div>
</div>

<div class="col-md-6">
<div class="info-card">
<div class="icon-box"><i class="fas fa-map-marker-alt"></i></div>
<div>
<h6 class="fw-bold mb-1">Location</h6>
<p class="mb-0">Anand, Gujarat</p>
</div>
</div>
</div>

</div>
</div>
</div>

</div>
</section>

<!-- FORM + MAP -->
<section class="py-5">
<div class="container">
<div class="row g-5">

<div class="col-lg-6 order-lg-2" data-aos="zoom-in">
<h3 class="fw-bold mb-4">My Location</h3>
<div id="map"></div>
</div>

<div class="col-lg-6 order-lg-1" data-aos="fade-up">
<div class="glass p-5" id="contactForm">
<h3 class="fw-bold mb-4 text-center">Send Me a Message</h3>

<form method="POST" action="{{ route('contact.submit') }}">
@csrf
<div class="row g-4">

<div class="col-md-6 float">
<input type="text" name="name" placeholder=" " required>
<label>Full Name</label>
</div>

<div class="col-md-6 float">
<input type="email" name="email" placeholder=" " required>
<label>Email</label>
</div>

<div class="col-12 float">
<input type="text" name="subject" placeholder=" ">
<label>Subject</label>
</div>

<div class="col-12 float">
<textarea rows="6" name="message" placeholder=" " required></textarea>
<label>Your Message</label>
</div>

<div class="col-12">
<button class="btn btn-grad w-100 btn-lg"><i class="fas fa-paper-plane me-2"></i>Send Message</button>
</div>

</div>
</form>
</div>
</div>

</div>
</div>
</section>

@endsection

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init({duration:900,once:true});</script>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>

<script>
function initMap(){
const anand={lat:22.5480,lng:72.9513};
const map=new google.maps.Map(document.getElementById("map"),{
zoom:13,center:anand,
styles:[
{elementType:"geometry",stylers:[{color:"#020617"}]},
{elementType:"labels.text.fill",stylers:[{color:"#e5e7eb"}]},
{featureType:"road",elementType:"geometry",stylers:[{color:"#1e293b"}]},
{featureType:"water",elementType:"geometry",stylers:[{color:"#020617"}]}
],
mapTypeControl:false,streetViewControl:false,fullscreenControl:false
});
new google.maps.Marker({position:anand,map,title:"Ashutosh Nandani"});
}
</script>
@endpush
