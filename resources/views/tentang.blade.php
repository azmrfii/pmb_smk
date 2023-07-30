@extends('layouts.front')
@section('content')
     <!-- ======= About Us Section ======= -->
     <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="row gy-4">
            <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
              <img src="assets/img/otkp.jpg" class="img-fluid" alt="">
              <a href="https://www.youtube.com/watch?v=Ggy2eAR3h8E&t=2s" class="glightbox play-btn"></a>
            </div>
            <div class="col-lg-6 content order-last  order-lg-first">
                @foreach ($tentangs as $tentang)
                    <h3>{{ $tentang->judul }}</h3>
                    <p>
                        {{ $tentang->teks }}
                    </p>
                @endforeach
            
            </div>
          </div>
  
        </div>
      </section><!-- End About Us Section -->

@endsection