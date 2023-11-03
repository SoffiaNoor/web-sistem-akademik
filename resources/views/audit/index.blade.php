@extends('layouts.master')

@section('content')
<div class="container-fluid py-2"> <div class="row"> <div class="col-lg-12 mb-lg-0 mb-4 shadow-xl">
    <div class="card p-3"> <div class="row"> <div class="col-sm-6">
        <h3 class="px-3">Histori Mata Kuliah
        </h3>
        <hr class="ms-3 mt-0" style="background-color:#01353f;height:10px;border-radius:40px;width:50%">
    </div>
</div> 
<div class="table-responsive">
        <table class="table align-items-center mb-0"> <thead> <tr>
            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">ID</th>
            <th class="text-uppercase text-default text-xs font-weight-bolder">IDMK</th>
            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">SKS Baru</th>
            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">SKS Lama</th>
            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Nama MK Baru</th>
            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Nama MK Old</th>
            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">Date</th>
            <th class="text-uppercase text-default text-xs font-weight-bolder ps-2">User</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($audit as $a)
            <tr>
                <td>{{ $a->ID }}</td>
                <td>{{ $a->IDMK }}</td>
                <td>{{ $a->SKS_New }}</td>
                <td>{{ $a->SKS_Old }}</td>
                <td>{{ $a->NamaMK_New }}</td>
                <td>{{ $a->NamaMK_Old }}</td>
                <td>{{ $a->Date }}</td>
                <td>{{ $a->users }}</td>
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