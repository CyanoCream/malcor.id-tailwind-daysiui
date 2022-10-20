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
        @if(count($testi) == 0)
        <div class="alert alert-warning shadow-lg p-2 mb-1 mt-1">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                <span>Tabel Testimoni Kosong</span>
            </div>
        </div>
        @else
            @foreach($testi as $t)
        <!-- row 1 -->
        <tr>
            <td>1</td>
            <td>
            <div class="flex items-center space-x-3">
                <div class="avatar">
                <div class="mask mask-squircle w-12 h-12">
                    <img src="{{asset('storage/'. $t->bukti)}}" alt="Avatar Tailwind CSS Component" />
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
            <a href="#" class="btn btn-ghost btn-xs delete" data-id="{{$t->id}}" data-nama="{{$t->nama}}">Delete</a>
            </th>
        </tr>
        @endforeach
        </tbody>
    </table>
    @endif
    </div>
    </div>
@stop

@section('js')
<script>
$('.delete').click( function(){
    var testisid = $(this).attr('data-id');
    var testinama = $(this).attr('data-nama')
            swal({
            title: "Apakah Anda Yakin?",
            text: "Anda akan menghapus!"+testinama+"",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                window.location="/admin/delete/testimoni/"+testisid+""
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