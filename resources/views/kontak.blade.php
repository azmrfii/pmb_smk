@extends('layouts.front')
@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      @foreach ($kontaks as $kontak)    
      <div class="container" data-aos="fade-up">

        <div>
          <iframe style="border:0; width: 100%; height: 340px;" src="{{ $kontak->map }}" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4 mt-4">

          <div class="col-lg-4">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Lokasi:</h4>
                <p>{{ $kontak->lokasi }}</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>{{ $kontak->email }}</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>No Hp:</h4>
                <p>+62{{ $kontak->no_hp }}</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="" class="php-email-form" id="contact-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="user_name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" name="user_email" class="form-control" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="user_project" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <p class="sent-message" id="contact-message"></p>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
      @endforeach
    </section><!-- End Contact Section -->
@endsection