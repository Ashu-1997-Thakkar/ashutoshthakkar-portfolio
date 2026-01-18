@extends('layouts.app')

@section('title', 'Skills | Ashutosh Nandani')

@section('content')

<section class="skills-section py-5">
    <div class="container">

        <!-- Heading -->
        <div class="text-center mb-5" data-aos="fade-down">
            <h2 class="fw-bold">Technical Skills</h2>
            <p class="text-muted">My professional skillset</p>
        </div>

        <!-- Backend Skills -->
        <div class="mb-5">
            <h4 class="fw-semibold mb-3" data-aos="fade-right">Backend Skills</h4>

            <div class="skill-bar" data-aos="fade-up">
                <span>PHP</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 90%">90%</div>
                </div>
            </div>

            <div class="skill-bar" data-aos="fade-up">
                <span>Laravel</span>
                <div class="progress">
                    <div class="progress-bar bg-success" style="width: 85%">85%</div>
                </div>
            </div>

            <div class="skill-bar" data-aos="fade-up">
                <span>Core PHP</span>
                <div class="progress">
                    <div class="progress-bar bg-info" style="width: 80%">80%</div>
                </div>
            </div>
        </div>

        <!-- Frontend Skills -->
        <div class="mb-5">
            <h4 class="fw-semibold mb-3" data-aos="fade-right">Frontend Skills</h4>

            <div class="skill-bar" data-aos="fade-up">
                <span>HTML5</span>
                <div class="progress">
                    <div class="progress-bar bg-warning" style="width: 90%">90%</div>
                </div>
            </div>

            <div class="skill-bar" data-aos="fade-up">
                <span>CSS3 / Bootstrap</span>
                <div class="progress">
                    <div class="progress-bar bg-primary" style="width: 85%">85%</div>
                </div>
            </div>

            <div class="skill-bar" data-aos="fade-up">
                <span>JavaScript / AJAX</span>
                <div class="progress">
                    <div class="progress-bar bg-danger" style="width: 75%">75%</div>
                </div>
            </div>
        </div>

        <!-- Database & Tools -->
        <div class="row text-center">

            <div class="col-md-3 col-6 mb-4" data-aos="zoom-in">
                <div class="circle-skill">
                    <h3>85%</h3>
                    <p>MySQL</p>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-4" data-aos="zoom-in">
                <div class="circle-skill">
                    <h3>80%</h3>
                    <p>WordPress</p>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-4" data-aos="zoom-in">
                <div class="circle-skill">
                    <h3>75%</h3>
                    <p>Git / GitHub</p>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-4" data-aos="zoom-in">
                <div class="circle-skill">
                    <h3>60%</h3>
                    <p>.NET</p>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection
