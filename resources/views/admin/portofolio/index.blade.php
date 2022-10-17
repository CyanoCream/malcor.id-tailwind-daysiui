@extends('admin.master')

@section('content')
@include('admin.portofolio.create')
<div class="overflow-x-auto w-full">
    <table class="table w-full">
        <!-- head -->
        <thead>
        <tr>
            <th>No</th>
            <th>Preview</th>
            <th>Preview 2</th>
            <th>Jenis</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <!-- row 1 -->
        <tr>
            @foreach($porto as $p)
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
            <div class="flex items-center space-x-3">
                <div class="avatar">
                <div class="mask mask-squircle w-12 h-12">
                    <img src="/tailwind-css-component-profile-2@56w.png" alt="Avatar Tailwind CSS Component" />
                </div>
                </div>
               
            </div>
            </td>
            <td>
            {{$p->jenis}}
            <br>
        
            </td>
            <th>
            @include('admin.portofolio.edit')
            <a href="{{route ('delete.portofolio',['portofolio' => $p->id])}}" class="btn btn-ghost btn-xs">Delete</a>
            </th>
        </tr>
    @endforeach
        </tbody>
    </table>
    </div>
@stop