@extends('admin.master')

@section('content')

{{-- {{$pesanan}} --}}

@include('admin.pesanan.create')
<div class="justify-content-center mt-2">
    <div class="overflow-x-auto">
        <table class="table w-full">
          <!-- head -->
          <thead>
            <tr>
              <th></th>
              <th>Nama Produk</th>
              <th>Pemesan</th>
              <th>Jumlah</th>
              <th>Nama Pemesan</th>
              <th>Nama Perusahaan</th>
              <th>Nomor WA</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>
          </thead>
          @foreach ($pesanan as $p )
          <tbody>
            <!-- row 1 -->
            <tr class="hover">
              <td>1</td>
              <td>{{$p->produk}}</td>
              <td>{{$p->pemesan}}</td>
              <td>{{$p->jumlah}}</td>
              <td>{{$p->nama}}</td>
              <td>{{$p->nama_perusahaan}}</td>
              <td>{{$p->nomorwa}}</td>
              <td>{{$p->email}}</td>
              <td>
                @include('admin.pesanan.edit')
                <a href="" role="button" class="btn" type="submit">Delete</a>
              </td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
</div>
@stop
