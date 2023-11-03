@extends('layouts.master')

@section('content')
<div class="container-fluid py-2"> <div class="row"> <div class="col-lg-12 mb-lg-0 mb-4 shadow-xl">
    <div class="card p-3"> <div class="row"> <div class="col-sm-6">
        <h3 class="px-3">Mata Kuliah
        </h3>
        <hr class="ms-3 mt-0" style="background-color:#01353f;height:10px;border-radius:40px;width:50%">
    </div>
    <div class="col-sm-6"> <a class="btn btn-warning" href="{{route('mata_kuliah.create')}}" style="float:right;">
        <span>Tambah Data</span>
        <i class="fa fa-plus ms-2"></i>
        </a>
        </div> </div> <div class="table-responsive">
        <table class="table align-items-center mb-0"> <thead> <tr>
            <th class="text-uppercase text-default text-xs font-weight-bolder">ID</th>
            <th class="text-uppercase text-default text-xs font-weight-bolder">Nama Mata Kuliah</th>
            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Jumlah SKS</th>
            <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($mataKuliah as $MK)
            <tr>
                <td>{{ $MK->IDMK }}</td>
                <td>{{ $MK->NamaMK }}</td>
                <td>{{ $MK->SKS }}</td>
                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <a href="{{ route('mata_kuliah.show', $MK->IDMK) }}" class="text-gray-400 hover:text-amber-400  mr-2">
                        <i class="fa fa-eye text-sm"></i>
                    </a>
                    <a href="{{ route('mata_kuliah.edit', $MK->IDMK) }}" class="text-gray-400 hover:text-amber-400 mx-2">
                        <i class="fas fa-edit text-sm"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-amber-400" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" data-dataid="{{ $MK->IDMK }}">
                        <i class="fa fa-trash text-sm"></i>
                    </a>
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>

    </div>

</div>


@endsection

@section('jquery')
<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var dataId = button.data('dataid');
        var form = $('#deleteForm');
        var action = form.attr('action');
        action = action.replace('data_id', dataId);
        form.attr('action', action);
    });
</script>

@endsection