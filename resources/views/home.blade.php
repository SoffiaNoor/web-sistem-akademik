@extends('layouts.master')

@section('content')
<div class="container-fluid px-3">
    <div class="row">
        <div class="col-sm-6 mt-2">
            <div class="info-horizontal bg-gradient-danger border-radius-xl p-3">
                <div class="icon">
                    <i class="fa fa-book text-2xl text-white mt-1"></i>
                </div>
                <div class="description ps-5">
                    <h5 class="text-white font-weight-bolder">Jumlah Mahasiswa RUNGKAD</h5>
                    <h2 class="text-white"
                        style="background: linear-gradient(to right, #ffffffc9, #f1f8ff);-webkit-text-fill-color: transparent;-webkit-background-clip: text;">
                        200.564</h2>
                    <hr class="m-0" style="background-color:#ffffff;height:10px;border-radius:40px;width:50%">
                    <a href="javascript:;" class="text-light icon-move-right font-weight-bolder"
                        style="font-style:italic">
                        Lihat lebih lanjut
                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mt-2">
            <div class="info-horizontal bg-gradient-info border-radius-xl p-3">
                <div class="icon">
                    <i class="fa fa-book text-2xl text-white mt-1"></i>
                </div>
                <div class="description ps-5">
                    <h5 class="text-white font-weight-bolder">Jumlah Dosen RUNGKAD</h5>
                    <h2 class="text-white"
                        style="background: linear-gradient(to right, #ffffffc9, #f1f8ff);-webkit-text-fill-color: transparent;-webkit-background-clip: text;">
                        200.564</h2>
                    <hr class="m-0" style="background-color:#ffffff;height:10px;border-radius:40px;width:50%">
                    <a href="javascript:;" class="text-light icon-move-right font-weight-bolder"
                        style="font-style:italic">
                        Lihat lebih lanjut
                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <div class="page-header min-vh-50 m-3 border-radius-xl"
                style="background-image: url('assets/images/carousel-1.jpg');">
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <div class="page-header min-vh-50 m-3 border-radius-xl"
                style="background-image: url('assets/images/carousel-2.jpg');">
            </div>
        </div>
    </div>
    <div class="min-vh-50 position-absolute w-100 top-0">
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon position-absolute bottom-50" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon position-absolute bottom-50" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</div>

@endsection

@section('jquery')

@endsection