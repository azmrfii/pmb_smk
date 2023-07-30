@extends('layouts.front')
@section('content')
     <!-- ======= Featured Services Section ======= -->
     <section id="featured-services" class="featured-services">
        <div class="container">
            
            <div class="section-header">
                <span>KOMPETENSI KEAHLIAN</span>
                <h2>KOMPETENSI KEAHLIAN</h2>
            </div>
  
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
@endsection