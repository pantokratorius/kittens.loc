@extends('layouts.layouts_frontend.layout')
@section('page_title')
    Купить технику Apple в Новороссийске по лучшим ценам
@endsection
@section('page_description')
Техника Apple в наличии по лучшим ценам в г. Новороссийск. Бесплатная консультация, дружеская рекомендация, помощь в выборе техники. Принимаем любую для Вас удобную оплату, а также кредит и рассрочку. Доставляем технику Apple по всем регионам России.
@endsection
@section('page_keywords')
Техника Apple, лучшие цены, Техника Apple в г. Новороссийск
@endsection

@vite(['resources/js/glide.js', 'resources/css/glide.scss'])
@section('content')
<div class="navigation">
  <div class="log">
    <img src="#" alt="logo" />
  </div>
    <ul class="menu">
        <li>
          OUR CATTERY
        </li>
        <li>
          OUR CATTERY
        </li>
        <li>
          OUR CATTERY
        </li>
    </ul>
</div>


<div class="glide">
  <div class="glide__track" data-glide-el="track">
    <ul class="glide__slides">
      <li class="glide__slide">
        <a href="#">
          <img style="width: 100%" class="promo-slide-image" src="{{ asset('i.webp') }}" title="Слайдер Блок 15 Про" alt="Слайдер Блок 15 Про">
        </a>
      </li>
      <li class="glide__slide">
        <a href="#">
          <img style="width: 100%" class="promo-slide-image" src="{{ asset('banner22.jpg') }}" title="Слайдер Блок iMac" alt="Слайдер Блок iMac">
        </a>
      </li>
    </ul>
  </div>
</div>
<div class="glide">
  <div class="glide__bullets" data-glide-el="controls[nav]">
    <button class="glide__bullet glide__bullet--active" data-glide-dir="=0"></button>
  </div>
</div>

@endsection

@push('styles')
<style>

  
[class*=cell-] {
    @media(max-width: 768px){
        padding-left: 0rem;
        padding-right: 0rem;
    }

}




  @media(max-width: 768px){

    .left-blocks-inner  {
      margin-left: 10px;
    }
     .glide__track ul,  .glide__track img {
      height: 100%;
    }

    .glide__track img {
        object-fit: cover
    }
  }

    .collection-wrapper{
        max-width: 1300px;
        margin-top: 20px;
      }
</style>
@endpush
