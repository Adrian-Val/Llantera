@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
    </div>
</div>

<hr/>

<form action="{{ route('tireUpdate', ['id' => $data->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 py-2">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" id="name" name="name" class="form-control" value="{{ $data->name }}" readonly disabled>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 py-2">
            <div class="form-group">
                <strong>Width:</strong>
                <input type="number" id="width" name="width" class="form-control" value="{{ $data->width }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 py-2">
            <div class="form-group">
                <strong>Diameter:</strong>
                <input type="number" id="diameter" name="diameter" class="form-control" value="{{ $data->diameter }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 py-2">
            <div class="form-group">
                <strong>Pressure:</strong>
                <input type="number" id="pressure" name="pressure" class="form-control" value="{{ $data->pressure }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 py-2">
            <div class="form-group">
                <strong>Manufacturer:</strong>
                <input type="text" id="id_manufacturers" name="id_manufacturers" class="form-control" value="{{ $data->manufacturer }}" readonly disabled>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 py-2">
            <div class="form-group">
                <strong>Stock:</strong>
                <input type="number" id="stock" name="stock" class="form-control" value="{{ $data->stock }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 py-2">
            <hr/>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 d-flex justify-content-center">
            <button type="submit" class="btn btn-success">
                <i class="fa-solid fa-floppy-disk"></i> Save
            </button>
        </div>
    </div>
</form>

@endsection