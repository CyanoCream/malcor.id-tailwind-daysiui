@extends('layouts.master')

@section('content')
<div class="columns-3">
  @foreach($news as $row)
    <div class="p-3">
        <div class="card w-96 bg-base-100 shadow-xl image-full">
            <figure><img src="{{asset('storage/'. $row->gambar)}}" alt="Shoes" /></figure>
            <div class="card-body">
              <h2 class="card-title">{{$row->judul}}</h2>
                <div class="card-actions justify-end">
                <button class="btn btn-primary">Baca</button>
              </div>
            </div>
          </div>
    </div>
    @endforeach
</div>
@stop
