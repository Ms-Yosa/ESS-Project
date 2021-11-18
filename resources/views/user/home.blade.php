@extends('layouts.student')
@section('content')
    <section>
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ URL::asset('Assets/home/slider3.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ URL::asset('Assets/home/slider1.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ URL::asset('Assets/home/slider2.png') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
@endsection