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
        @if(count($porto) == 0)
        <div class="alert alert-warning shadow-lg p-2 mb-1 mt-1">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                <span>Tabel Portofolio Kosong</span>
            </div>
        </div>
        @else
            @foreach($porto as $p)
            <td>{{$loop->index + 1}}</td>
            <td>
            <div class="flex items-center space-x-3">
                <div class="avatar">
                <div class="mask mask-squircle w-12 h-12">
                    <img src="{{asset('storage/'. $p->gambar)}}" alt="Avatar Tailwind CSS Component" />
                </div>
                </div>
               
            </div>
            </td>
            <td>
            <div class="flex items-center space-x-3">
                <div class="avatar">
                <div class="mask mask-squircle w-12 h-12">
                    <img src="{{asset('storage/'. $p->gmbr_2)}}" alt="Avatar Tailwind CSS Component" />
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
            <a href="#" class="btn btn-ghost btn-xs delete" data-id="{{$p->id}}" data-nama="{{$p->jenis}}">Delete</a>
            </th>
        </tr>
    @endforeach
        </tbody>
    </table>
    @endif
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
                window.location="/admin/delete/portofolio/"+layananid+""
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