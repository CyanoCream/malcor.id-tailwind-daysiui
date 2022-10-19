@extends('admin.master')

@section('content')
@include('admin.testimoni.create')
<div class="container m-3">
    <div class="overflow-x-auto w-full">
    <table class="table w-full">
        <!-- head -->
        <thead>
        <tr>
            <th>No</th>
            <th>Preview</th>
            <th>Nama</th>
            <th>Ulasan</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($testi as $t)
        <!-- row 1 -->
        <tr>
            <td>1</td>
            <td>
            <div class="flex items-center space-x-3">
                <div class="avatar">
                <div class="mask mask-squircle w-12 h-12">
                    <img src="{{asset('storage/'. $lay->gambar)}}" alt="Avatar Tailwind CSS Component" />
                </div>
                </div>
               
            </div>
            </td>
            <td>
                <div>
                    <div class="font-bold">{{$t->nama}}</div>
                </div>
            </td>
            <td>
            {{$t->ulasan}}
            </td>
            <th>
            @include('admin.testimoni.edit')
            <a href="{{route ('delete.testimoni',['testimoni' => $t->id])}}" class="btn btn-ghost btn-xs">Delete</a>
            </th>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    </div>
@stop