@extends('layouts.front')
@section('content')
     <!-- ======= Featured Services Section ======= -->
     <section id="featured-services" class="featured-services">
        <div class="container">
  
          <div class="row gy-4">
            @foreach ($jurusans as $jurusan)        
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <div class="icon flex-shrink-0"><i class="{{ $jurusan->icon }}"></i></div>
              <div>
                <h4 class="title">{{ $jurusan->jurusan }}</h4>
                <p class="description">{{ $jurusan->teks }}</p>
              </div>
            </div><!-- End Service Item -->
            @endforeach
  
          </div>
  
        </div>
      </section><!-- End Featured Services Section -->
  
      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <span>Frequently Asked Questions</span>
            <h2>Frequently Asked Questions</h2>
  
          </div>
  
          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-10">
  
              @foreach ($profils as $profil)  
              <div class="accordion accordion-flush" id="faqlist">
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#profil{{ $profil->id }}">
                      <i class="bi bi-question-circle question-icon"></i>
                      {{ $profil->judul }}
                    </button>
                  </h3>
                  <div id="profil{{ $profil->id }}" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      {{ $profil->teks }}
                    </div>
                  </div>
                </div><!-- # Faq item-->
              </div>
              @endforeach
  
            </div>
          </div>
  
        </div>
      </section><!-- End Frequently Asked Questions Section -->
@endsection
