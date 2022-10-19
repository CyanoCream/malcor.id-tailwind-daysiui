<!-- The button to open modal -->

<label for="my-modal-{{$p->id}}" class="btn modal-button btn-ghost btn-xs">Edit</label>

<!-- Put this part before </body> tag -->
<input type="checkbox" id="my-modal-{{$p->id}}" class="modal-toggle" />
<label for="my-modal-{{$p->id}}" class="modal cursor-pointer">
    <form class="form-control" action="{{route('update.portofolio',['portofolio' => $p->id])}}" method="post" enctype="multipart/form-data">
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
    <label for="">Preview 2</label>
    <input required type="file" placeholder="Type here" name="gmbr_2" class="file:bg-gradient-to-b
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
    shadow-xl shadow-gray-700/60" />
    <label for="">Jenis</label>
    <input required type="text" placeholder="Type here" name="jenis" class="input input-bordered w-full" />
    <label for="my-modal-{{$p->id}}" class="btn modal-button mb-2 mt-2">Cancel</label>
    <button class="btn btn-primary" type="submit">Save</button>
    </form>
</label>