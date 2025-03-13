@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Add new tire</h3>
                <hr/>
            </div>
        </div>
    </div>

    <form action="{{ route('tireStore') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 py-2">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 py-2">
                <div class="form-group">
                    <strong>Width:</strong>
                    <input type="number" id="width" name="width" class="form-control" placeholder="Width">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 py-2">
                <div class="form-group">
                    <strong>Diameter:</strong>
                    <input type="number" id="diameter" name="diameter" class="form-control" placeholder="Diameter">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 py-2">
                <div class="form-group">
                    <strong>Pressure:</strong>
                    <input type="number" id="pressure" name="pressure" class="form-control" placeholder="Pressure">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 py-2">
                <div class="form-group">
                    <strong>Manufacturer:</strong>
                    <input type="text" id="id_manufacturers" name="manufacturer" class="form-control" placeholder="Manufacturer">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 py-2">
                <div class="form-group">
                    <strong>Stock:</strong>
                    <input type="number" id="stock" name="stock" class="form-control" placeholder="Stock">
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