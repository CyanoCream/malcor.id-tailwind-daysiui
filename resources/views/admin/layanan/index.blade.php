@extends('admin.master')

@section('content')
@include('admin.layanan.create')
<div class="overflow-x-auto w-full">
    <table class="table w-full">
        <!-- head -->
        <thead>
        <tr>
            <th>No</th>
            <th>Preview</th>
            <th>Nama Layanan</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <!-- row 1 -->
        @foreach($layanan as $lay)
        <tr>
            <td>{{$loop->index + 1}}</td>
            <td>
            <div class="flex items-center space-x-3">
                <div class="avatar">
                <div class="mask mask-squircle w-12 h-12">
                    <img src="/tailwind-css-component-profile-2@56w.png" alt="Avatar Tailwind CSS Component" />
                </div>
                </div>
               
            </div>
            </td>
            <td>
                <div>
                    <div class="font-bold">{{$lay->nama_layanan}}</div>
                    </div>
            </td>
            <td>
            {{$lay->keterangan}}
            </td>
            <th>
            <!-- <button class="btn btn-ghost btn-xs" for="my-modal-{{$lay->id}}">Edit</button> -->
            @include('admin.layanan.edit')
            <a href="{{route ('delete.layanan',['layanan' => $lay->id])}}" class="btn btn-ghost btn-xs">Delete</a>
            <!-- <button class="btn btn-ghost btn-xs">Delete</button> -->
            </th>
        </tr>
    @endforeach
        </tbody>
    </table>
    </div>




@stop