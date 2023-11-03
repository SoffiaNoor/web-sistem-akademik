@extends('layouts.master')

@section('content')
<div class="container-fluid py-2">
            <div class="row">
                <div class="col-lg-12 mb-lg-0 mb-4 shadow-xl">
                    <div class="card p-2">
                        <div class="px-3 pt-2 font-weight-bold">
                            <h5 class="font-weight-bolder">Edit Mahasiswa:
    
                            </h5>
                            <hr style="background-color:#01353f;height:10px;border-radius:40px;width:25%">
                        </div>
                        <form class="p-3" method="POST" action="{{ route('mahasiswa.update',$mahasiswa->NRP)}}" enctype="multipart/form-data">
                        @csrf 
                        @method('PUT') 
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>NRP</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="{{$mahasiswa->NRP}}" disabled name="NRP">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Mahasiswa</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="{{$mahasiswa->NamaMhs}}" name="NamaMhs">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="{{$mahasiswa->Alamat}}" name="Alamat">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ID Dosen Wali</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="{{$mahasiswa->IDDosen}}" name="IDDosen">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>IPK</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="{{$mahasiswa->IPK}}" name="IPK">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="{{$mahasiswa->JenisKelamin}}" name="JenisKelamin">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-6 pt-2">
                                    <button class="btn btn-icon btn-3 btn-secondary" type="button">
                                        <a href="/mahasiswa" class="btn-inner--icon text-white"><i
                                                class="fa fa-arrow-left" aria-hidden="true"></i>
                                        </a>
                                        <a href="/mahasiswa" class="btn-inner--text text-white ms-2">Kembali</a>
                                    </button>
                                    <button class="btn btn-icon btn-3 btn-success" type="submit">
                                        <a class="btn-inner--icon text-white"><i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn-inner--text text-white ms-2">Update</a>
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