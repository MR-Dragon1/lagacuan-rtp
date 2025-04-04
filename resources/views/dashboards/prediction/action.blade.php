@include('dashboards.layouts.header')

<a href="javascript:void(0)" onClick="loadData({{ $id }})" title="Edit"
    class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end"
    data-bs-toggle="modal" data-bs-target="#editModal">
    <i style="font-size: 19px; color:#006ae6" class="fa-solid fa-pen-to-square"></i>
</a>

<a href="javascript:void(0)" onClick="deleteData({{ $id }})" data-toggle="tooltip" data-original-title="Delete"
    class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
    <i style="font-size: 19px; color:#e42855; margin:0px 7px" class="fa-solid fa-trash"></i>
    {{-- <i style="font-size: 19px; color:#e42855; margin:0px 7px" class="fa-regular fa-square-minus"></i> --}}
</a>

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="editModalLabel" style="text-transform: capitalize">Edit Pasaran</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form Edit Data -->
                <form id="editForm">
                    <!-- Add hidden input for ID -->
                    <input type="hidden" id="editId" name="id">
                    <!-- Form fields (name, color, number) go here -->
                    <div class="mb-3">
                        <div style="text-align: left">
                            <label for="exampleInputEmail1" class="form-label" style="text-transform: capitalize;">Angka
                                Main</label>
                        </div>
                        <input type="text" class="form-control" name="angka_main" id="angka_main">
                    </div>
                    <div class="mb-3">
                        <div style="text-align: left">
                            <label for="exampleInputEmail1" class="form-label"
                                style="text-transform: capitalize;">TOP_4D</label>
                        </div>
                        <input type="text" class="form-control" name="top_4d" id="top_4d">
                    </div>
                    <div class="mb-3">
                        <div style="text-align: left">
                            <label for="exampleInputEmail1" class="form-label"
                                style="text-transform: capitalize;">TOP_3D</label>
                        </div>
                        <input type="text" class="form-control" name="top_3d" id="top_3d">
                    </div>
                    <div class="mb-3">
                        <div style="text-align: left">
                            <label for="exampleInputEmail1" class="form-label"
                                style="text-transform: capitalize;">TOP_2D</label>
                        </div>
                        <input type="text" class="form-control" name="top_2d" id="top_2d">
                    </div>
                    <div class="mb-3">
                        <div style="text-align: left">
                            <label for="exampleInputEmail1" class="form-label" style="text-transform: capitalize;">Colok
                                Bebas</label>
                        </div>
                        <input type="text" class="form-control" name="colok_bebas" id="colok_bebas">
                    </div>
                    <div class="mb-3">
                        <div style="text-align: left">
                            <label for="exampleInputEmail1" class="form-label" style="text-transform: capitalize;">Colok
                                2D</label>
                        </div>
                        <input type="text" class="form-control" name="colok_2d" id="colok_2d">
                    </div>
                    <div class="mb-3">
                        <div style="text-align: left">
                            <label for="exampleInputEmail1" class="form-label" style="text-transform: capitalize;">Shio
                                Jitu</label>
                        </div>
                        <input type="text" class="form-control" name="shio_jitu" id="shio_jitu">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" onclick="updateData()">Save Changes</button>
            </div>
        </div>
    </div>
</div>
