@extends('admin.master')

@section('content')
@include('admin.news.create')
<div class="overflow-x-auto w-full">
    <table class="table w-full">
        <!-- head -->
        <thead>
        <tr>
            <th>No</th>
            <th>Preview</th>
            <th>Judul</th>
            <th>Konten</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($news as $n)
        <!-- row 1 -->
        <tr>
            <td>{{$loop->index + 1}}</td>
            <td>
            <div class="flex items-center space-x-3">
                <div class="avatar">
                <div class="mask mask-squircle w-12 h-12">
                    <img src="{{asset('storage/'. $n->gambar)}}" alt="Avatar Tailwind CSS Component" />
                </div>
                </div>
               
            </div>
            </td>
            <td>
                <div>
                    <div class="font-bold">{{$n->judul}}</div>
                    </div>
            </td>
            <td>
            {{$n->konten}}
            </td>

            <th>
            @include('admin.news.edit')
            <a href="{{route ('delete.news',['news' => $n->id])}}" class="btn btn-ghost btn-xs">Delete</a>
            <!-- <button class="btn btn-ghost btn-xs">Edit</button> -->
            <!-- <button class="btn btn-ghost btn-xs">Delete</button> -->
            </th>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@stop 