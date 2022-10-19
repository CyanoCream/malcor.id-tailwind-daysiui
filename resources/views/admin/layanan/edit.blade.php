<!-- The button to open modal -->

<label for="my-modal-{{$lay->id}}" class="btn modal-button btn-ghost btn-xs">Edit</label>

<!-- Put this part before </body> tag -->
<input type="checkbox" id="my-modal-{{$lay->id}}" class="modal-toggle" />
<label for="my-modal-{{$lay->id}}" class="modal cursor-pointer">
    <form class="form-control" action="{{route('update.layanan',['layanan' => $lay->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">Preview</label>
    <input required type="file" placeholder="Type here" name="gambar" class="file:bg-gradient-to-b
    file:from-blue-500 file:to-blue-600
    file:px-6 file:py-3 file:m-5
    file:border-none
    file:rounded-full
    file:text-white
    file:cursor-pointer
    file:shadow-lg file:shadow-blue-600/50
    bg-gradient-to-br from-gray-700
    text-white/80
    rounded-full
    cursor-pointer
    shadow-xl shadow-gray-700/60" value="" />
    <label for="">Nama Layanan</label>
    <input required type="text" placeholder="Type here" name="nama_layanan" class="input input-bordered w-full" />
    <label for="">Keterangan</label>
    <input required type="text" placeholder="Type here" name="keterangan" class="input input-bordered w-full" />
    <label for="my-modal-{{$lay->id}}" class="btn modal-button mb-2 mt-2">Cancel</label>
    <button class="btn btn-primary" type="submit">Save</button>
    </form>
</label>