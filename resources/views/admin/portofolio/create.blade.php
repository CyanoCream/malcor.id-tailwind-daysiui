<!-- The button to open modal -->

<label for="my-modal-3" class="btn modal-button mb-2">Create</label>

<!-- Put this part before </body> tag -->
<input type="checkbox" id="my-modal-3" class="modal-toggle" />
<label for="my-modal-3" class="modal cursor-pointer">
<label for="" class="modal-box">
<form class="form-control" action="{{route('create.portofolio')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">Preview</label>
    <input required type="file" placeholder="Type here" name="gambar" class="input-bordered block w-full text-lg text-gray-900 bg-gray-90 rounded-lg border border-gray-400 cursor-pointer dark:text-gray-500 focus:outline-none dark:bg-gray-900 dark:border-yellow-800 dark:placeholder-gray-500" id="large_size" value="" />
    <label for="">Preview 2</label>
    <input required type="file" placeholder="Type here" name="gmbr_2" class="input-bordered block w-full text-lg text-gray-900 bg-gray-90 rounded-lg border border-gray-400 cursor-pointer dark:text-gray-500 focus:outline-none dark:bg-gray-900 dark:border-yellow-800 dark:placeholder-gray-500" id="large_size" />
    <label for="">Jenis</label>
    <input required type="text" placeholder="Type here" name="jenis" class="input input-bordered w-full" />
    <label for="my-modal-3" class="btn modal-button mb-2 mt-2">Cancel</label>
    <button class="btn btn-primary" type="submit">Save</button>
    </form>
</label>
</label>
