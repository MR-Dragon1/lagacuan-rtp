@include('dashboards.layouts.header')

<a href="javascript:void(0)" onClick="deleteData({{ $id }})" data-toggle="tooltip" data-original-title="Delete"
    class="h-auto btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary justify-content-end">
    <i style="font-size: 19px; color:#e42855; margin:0px 7px" class="fa-solid fa-trash"></i>
    {{-- <i style="font-size: 19px; color:#e42855; margin:0px 7px" class="fa-regular fa-square-minus"></i> --}}
</a>
