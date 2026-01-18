@extends('layouts.app')

@section('title', 'Education | Ashutosh Nandani')

@section('content')

<section class="education-section py-5">
    <div class="container">

        <!-- Heading -->
        <div class="text-center mb-5" data-aos="fade-down">
            <h2 class="fw-bold">Education</h2>
            <p class="text-muted">My academic journey</p>
        </div>

        <!-- Timeline / Cards -->
        <div class="row justify-content-center">

            <!-- BCA -->
            <div class="col-md-6 mb-4" data-aos="fade-right">
                <div class="education-card p-4 shadow-sm rounded">
                    <h5>Bachelor of Computer Applications (B.C.A)</h5>
                    <span class="institution">Shri D N Institute of Computer Applications, Anand</span>
                    <span class="duration">06/2020 – 04/2023</span>
                    <span class="grade">7 CGPA</span>
                    <p class="mt-2">Completed BCA graduation with strong foundation in PHP, Laravel, MySQL, and Web Development.</p>
                </div>
            </div>

            <!-- ITI Copa -->
            <div class="col-md-6 mb-4" data-aos="fade-left">
                <div class="education-card p-4 shadow-sm rounded">
                    <h5>ITI Copa Course</h5>
                    <span class="institution">V.J.N.J.M.J Private Institute, Nadiad (Vaso)</span>
                    <span class="duration">06/2017 – 03/2018</span>
                    <span class="grade">62%</span>
                    <p class="mt-2">Completed vocational training in Computer Operations & Programming Applications.</p>
                </div>
            </div>

            <!-- HSC -->
            <div class="col-md-6 mb-4" data-aos="fade-right">
                <div class="education-card p-4 shadow-sm rounded">
                    <h5>Higher Secondary (12th) - Science</h5>
                    <span class="institution">Urmi High School, Vadodara</span>
                    <span class="duration">03/2014 – 03/2015</span>
                    <span class="grade">43.5%</span>
                </div>
            </div>

            <!-- SSC -->
            <div class="col-md-6 mb-4" data-aos="fade-left">
                <div class="education-card p-4 shadow-sm rounded">
                    <h5>Secondary (10th)</h5>
                    <span class="institution">Urmi High School, Vadodara</span>
                    <span class="duration">03/2012 – 03/2013</span>
                    <span class="grade">46.5%</span>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection
