@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tires</h2>
            </div>
            <hr/>
            <div class="pull-right d-flex justify-content-end">
                <a href="{{ route('tireCreate') }}" class="btn btn-info">
                    <i class="fa-solid fa-plus"></i> Create new tire
                </a>
            </div>
        </div>
    </div>

    <hr/>

    <table class="table table-striped table-bordered table-hover" id="datatable_tires">
        <thead>
            <tr class   = "text-center">
                <th>Name</th>
                <th>Manufacturer</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tires as $tire)
            <tr class="text-center">
                <td>{{ $tire->name }}</td>
                <td>{{ $tire->manufacturer }}</td>
                <td>
                    <a href="{{ route('tireEdit', ['id' => $tire->id]) }}" class="btn btn-info">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td>
                <td>
                    <form action="{{ route('tireDestroy', $tire->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @if (Session::has('message'))
        <script>
            Swal.fire({
                title: '{{ session('title') }}',
                text: '{{ session('message') }}',
                icon: '{{ session('icon') }}',
            });
        </script>
    @endif

    <script src="{{ asset('/js/indexTires.js') }}"></script>

@endsection