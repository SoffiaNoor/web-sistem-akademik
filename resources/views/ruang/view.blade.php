@extends('layouts.master')

@section('content')
<div class="container-fluid py-2">
    <div class="row">
        <div class="col-lg-12 mb-lg-0 mb-4 shadow-xl">
            <div class="card p-2">
                <div class="px-3 pt-2 font-weight-bold">
                    <h5 class="font-weight-bolder">Detail Ruang:</h5>
                    <hr style="background-color:#01353f;height:10px;border-radius:40px;width:25%">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>IDRuang</label>
                            <input type="text" class="form-control" value="{{$Ruang->IDRuang}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Ruang</label>
                            <input type="text" class="form-control" value="{{$Ruang->NamaRuang}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kapasitas</label>
                            <input type="text" class="form-control" value="{{$Ruang->Kapasitas}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 pt-2">
                        <button class="btn btn-icon btn-3 btn-secondary" type="button">
                            <a href="/ruang" class="btn-inner--icon text-white"><i class="fa fa-arrow-left"
                                    aria-hidden="true"></i></a>
                            <a href="/ruang" class="btn-inner--text text-white ms-2">Kembali</a>
                        </button>
                        <button class="btn btn-icon btn-3 btn-primary" type="button">
                            <a href="{{route('ruang.edit',$Ruang->IDRuang)}}"
                                class="btn-inner--icon text-white"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="{{route('ruang.edit',$Ruang->IDRuang)}}"
                                class="btn-inner--text text-white ms-2">Edit</a>
                        </button>
                        <button class="btn btn-icon btn-3 btn-danger" type="button" data-bs-toggle="modal"
                            data-bs-target="#deleteModal">
                            <a class="btn-inner--icon text-white"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a class="btn-inner--text text-white ms-2">Hapus</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bolder" id="deleteModalLabel">Delete Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin menghapus Ruang <span class="font-weight-bolder">{{$Ruang->NamaRuang}}</span>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <form action="{{ route('ruang.destroy', $Ruang->IDRuang) }}" method="POST"
                    style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jquery')

@endsection