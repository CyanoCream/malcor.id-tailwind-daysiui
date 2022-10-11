@extends('layouts.master')
@section('content')
<div class="hero min-h-screen" style="background-image: url({{asset('/images/landing.png')}});">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="hero-content text-center text-neutral-content">
      <div class="max-w-md">
        <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
        <p class="mb-5">𝗠𝗔𝗟𝗖𝗢𝗥 | 𝗦𝗔𝗕𝗟𝗢𝗡 𝗠𝗔𝗟𝗔𝗡𝗚 𝗜𝗡𝗗𝗨𝗦𝗧𝗥𝗬</p>
        <p class="mb-5">Product and vendor screen printing </p>
        <p class="mb-5">Tshirt | Hoodie | Jumper | Pollo shirt</p>
        <p class="mb-5"> made with pride</p>
      </div>
      @include('modal.pricelist')
    </div>
  </div>
  <div class="p-5"></div>
  <div class="p-2 flex justify-center">
    <div class="stats shadow">

        <div class="stat">
          <div class="stat-figure text-primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
          </div>
          <div class="stat-title">pcs baju diproduksi</div>
          <div class="stat-value text-primary">25.6K</div>
          <div class="stat-desc">21% more than last month</div>
        </div>

        <div class="stat">
          <div class="stat-figure text-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
          </div>
          <div class="stat-title">klien terlayani</div>
          <div class="stat-value text-secondary">2.6k</div>
          <div class="stat-desc">21% more than last month</div>
        </div>

        <div class="stat">
          <div class="stat-figure text-secondary">
            <div class="avatar online">
              <div class="w-16 rounded-full">
                <img src="https://placeimg.com/128/128/people" />
              </div>
            </div>
          </div>
          <div class="stat-value">8 Tahun</div>
          <div class="stat-title">tahun pengalaman</div>
          <div class="stat-desc text-secondary"></div>
        </div>

      </div>
  </div>
@stop
