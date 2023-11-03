@extends('layouts.master')

@section('content')
<div class="container-fluid py-2"> <div class="row"> <div class="col-lg-12 mb-lg-0 mb-4 shadow-xl">
    <div class="card p-3"> <div class="row"> <div class="col-sm-6">
        <h3 class="px-3">Mata Kuliah
        </h3>
        <hr class="ms-3 mt-0" style="background-color:#01353f;height:10px;border-radius:40px;width:50%">
    </div>
    <div class="col-sm-6"> <a class="btn btn-warning" href="insert_booking.php" style="float:right;">
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
        </table>

    </div>
</div>
@endsection

@section('jquery')

@endsection