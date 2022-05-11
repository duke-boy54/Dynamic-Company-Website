@extends('layouts.pages_main')

@section('page_content')

<!-- ======= Contact Section ======= -->

<div class="map-section">
    <iframe style="border:0; width: 100%; height: 350px;"
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
        frameborder="0" allowfullscreen></iframe>
</div>

<section id="contact" class="contact">
    <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

            <div class="col-lg-10">

                <div class="info-wrap">
                    <div class="row">
                        <div class="col-lg-4 info">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>Dodoma, Tanzania</p>
                        </div>

                        <div class="col-lg-4 info mt-4 mt-lg-0">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>allsharawy41@gmail.com<br>riadhaally993@outlook.com</p>
                        </div>

                        <div class="col-lg-4 info mt-4 mt-lg-0">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>+255 74400 3684<br>+255 65861 0665</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ session('success') }}</strong>
            </div>
        @endif

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
            <div class="col-lg-10">
                <form action="{{ route('contact.form') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" name="name" placeholder="Your Name" />

                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" />

                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" />

                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"></textarea>

                    </div>

                    <button type="submit" class="btn btn-success">Send Message</button>
                </form>

            </div>

        </div>

    </div>
</section><!-- End Contact Section -->


@endsection
