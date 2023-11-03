@extends('layouts.master')

@section('content')
<div class="container-fluid py-2">
            <div class="row">
                <div class="col-lg-12 mb-lg-0 mb-4 shadow-xl">
                    <div class="card p-2">
                        <div class="px-3 pt-2 font-weight-bold">
                            <h5 class="font-weight-bolder">Detail Mata Kuliah:
    
                            </h5>
                            <hr style="background-color:#01353f;height:10px;border-radius:40px;width:25%">
                        </div>
                        <form class="p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>IDMK</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="{{$mataKuliah->IDMK}}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Mata Kuliah</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="{{$mataKuliah->NamaMK}}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>SKS</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="{{$mataKuliah->SKS}}" disabled>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-6 pt-2">
                                    <button class="btn btn-icon btn-3 btn-secondary" type="button">
                                        <a href="/mata_kuliah" class="btn-inner--icon text-white"><i
                                                class="fa fa-arrow-left" aria-hidden="true"></i>
                                        </a>
                                        <a href="/mata_kuliah" class="btn-inner--text text-white ms-2">Kembali</a>
                                    </button>
                                    <button class="btn btn-icon btn-3 btn-primary" type="button">
                                        <a class="btn-inner--icon text-white"><i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn-inner--text text-white ms-2">Edit</a>
                                    </button>
                                    <button class="btn btn-icon btn-3 btn-danger" type="button">
                                        <a class="btn-inner--icon text-white"><i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn-inner--text text-white ms-2">Hapus</a>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('jquery')

@endsection