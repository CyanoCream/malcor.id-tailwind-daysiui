@extends('layouts.master')

@section('content')
@foreach($porto as $row)
<div class="lg:columns-3 sm:columns-1">
<div class="p-5">
    <div class="card w-96 bg-base-100 shadow-xl">
        <figure><img src="{{asset('storage/'. $row->gambar)}}" alt="Shoes" /></figure>
        <div class="card-body">
          <h2 class="card-title">
            {{$row->jenis}}
            <div class="badge badge-secondary">NEW</div>
          </h2>
          <p>If a dog chews shoes whose shoes does he choose?</p>
          <div class="card-actions justify-end">
            <div class="badge badge-outline">Fashion</div>
            <div class="badge badge-outline">Products</div>
          </div>
        </div>
      </div>
</div>
@endforeach
</div>

@stop
