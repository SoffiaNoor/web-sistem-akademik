@extends('layouts.master')

@section('content')
<div class="container-fluid px-3">
    <div class="row">
        <div class="col-sm-4 mt-2">
            <div class="info-horizontal bg-light border-radius-xl p-5">
                <div class="icon">
                    <i class="fa fa-book text-2xl mt-1"
                        style="background: linear-gradient(to right, #1b3c5fc9, #1B3C5F);-webkit-text-fill-color: transparent;-webkit-background-clip: text;"></i>
                </div>
                <div class="description ps-5">
                    <h5 class="font-weight-bolder">Jumlah Mahasiswa RUNGKAD</h5>
                    <div class="bg-gradient-danger rounded"
                        style="background: linear-gradient(to right, #FAA072, #ad623c);">
                        <h2 class="p-3 text-white">
                            1.500.564</h2>
                    </div>
                    <a href="javascript:;" class="text-dark icon-move-right font-weight-bolder"
                        style="font-style:italic">
                        Lihat lebih lanjut
                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-2">
            <div class="info-horizontal border-radius-xl p-5"
                style="background:linear-gradient(45deg, #FAA072, #ad623c)">
                <div class="icon">
                    <i class="fa fa-book text-2xl text-white mt-1"></i>
                </div>
                <div class="description ps-5">
                    <h5 class="text-white">Jumlah Dosen RUNGKAD</h5>
                    <div class="bg-gradient-secondary rounded">
                        <h2 class="p-3 text-white">
                            200.564</h2>
                    </div>
                    <a href="javascript:;" class="text-light icon-move-right font-weight-bolder"
                        style="font-style:italic">
                        Lihat lebih lanjut
                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-2">
            <div class="info-horizontal border-radius-xl p-5 bg-gray-200">
                <div class="text-center align-items-center">
                    <img src="assets/images/RUNGKAD.png" class="w-40"></i>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('jquery')

@endsection