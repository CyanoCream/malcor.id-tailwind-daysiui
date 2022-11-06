@extends('admin.master')

@section('content')

{{-- {{$pesanan}} --}}

@include('admin.pesanan.create')
<div class="justify-content-center">
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
              <th>Status Pesanan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          @if(count($pesanan) == 0)
        <div class="alert alert-warning shadow-lg p-2 mb-1 mt-1">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                <span>Tabel Pesanan Kosong</span>
            </div>
        </div>
        @else
          @foreach ($pesanan as $p )
          <tbody>
            <!-- row 1 -->
            <tr class="hover">
              <td>{{$loop->index + 1}}</td>
              <td>{{$p->produk}}</td>
              <td>{{$p->pemesan}}</td>
              <td>{{$p->jumlah}}</td>
              <td>{{$p->nama}}</td>
              <td>{{$p->nama_perusahaan}}</td>
              <td>{{$p->nomorwa}}</td>
              <td>{{$p->email}}</td>
              @if($p->status=1)
              <td>Status Sukses</td>
               @else
              <td>Masih Dalam Proses</td>
              @endif
              <td>
                @include('admin.pesanan.edit')
                <a href="#" role="button" class="btn delete" data-id="{{$p->id}}" data-nama="{{$p->produk}}">Delete</a>
              </td>
            </tr>
          </tbody>
          @endforeach
        </table>
        @endif
      </div>
</div>
@stop


@section('js')
<script>
$('.delete').click( function(){
    var layananid = $(this).attr('data-id');
    var layanannama = $(this).attr('data-nama')
            swal({
            title: "Apakah Anda Yakin?",
            text: "Anda akan menghapus!"+layanannama+"",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                window.location="/admin/delete/pesanan/"+layananid+""
                swal("Data Berhasil dihapus!", {
                icon: "success",
                });
            } else {
                swal("Data tidak jadi dihapus");
            }
            });
        });
        
</script>
@stop
