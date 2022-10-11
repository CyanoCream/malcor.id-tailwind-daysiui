@extends('layouts.master')

@section('content')
<div class="bg-primary-content">
    <div class="hero min-h-screen bg-base-300">
        <div class="hero-content flex-col lg:flex-row-reverse">
          <div class="text-center lg:text-left">
            <h1 class="text-5xl font-bold">𝗠𝗔𝗟𝗖𝗢𝗥 | 𝗦𝗔𝗕𝗟𝗢𝗡 𝗠𝗔𝗟𝗔𝗡𝗚 𝗜𝗡𝗗𝗨𝗦𝗧𝗥𝗬</h1>
            <p class="py-6">Product and vendor screen printing</p>
            <p class="py-6">Tshirt | Hoodie | Jumper | Pollo shirt</p>
          </div>
          <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
            <div class="card-body">
              <div class="form-control">
                <img src="{{asset('images/ganking.PNG')}}" alt="">
                <label class="label">
                  <span class="label-text">thanks beliver to our "COPET GANKING"
                    gaskeun atuh</span>
                </label>
              </div>
              <div class="form-control mt-6">
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@stop
