<!-- The button to open modal -->

<label for="my-modal-{{$lay->id}}" class="btn modal-button btn-ghost btn-xs">Edit</label>

<!-- Put this part before </body> tag -->
<input type="checkbox" id="my-modal-{{$lay->id}}" class="modal-toggle" />
<label for="my-modal-{{$lay->id}}" class="modal cursor-pointer">
    <form class="form-control" action="{{route('update.layanan',['layanan' => $lay->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">Preview</label>
    <input required type="file" placeholder="Type here" name="gambar" class="input-bordered block w-full text-lg text-gray-900 bg-gray-90 rounded-lg border border-gray-400 cursor-pointer dark:text-gray-500 focus:outline-none dark:bg-gray-900 dark:border-yellow-800 dark:placeholder-gray-500" id="large_size" value="{{$lay->gambar}}" />
    <label for="">Nama Layanan</label>
    <input required type="text" placeholder="Type here" name="nama_layanan" class="input input-bordered w-full" value="{{$lay->nama_layanan}}" />
    <label for="">Keterangan</label>
    <input required type="text" placeholder="Type here" name="keterangan" class="input input-bordered w-full" value="{{$lay->keterangan}}" />
    <label for="my-modal-{{$lay->id}}" class="btn modal-button mb-2 mt-2">Cancel</label>
    <button class="btn btn-primary" type="submit">Save</button>
    </form>
</label>