@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tires deleted</h2>
            </div>
        </div>
    </div>

    <hr/>

    <table class="table table-striped table-bordered table-hover" id="datatable_tires_restore">
        <thead>
            <tr class="text-center">
                <th>Name</th>
                <th>Manufacturer</th>
                <th>Restore</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tires as $tire)
            <tr class="text-center">
                <td>{{ $tire->name }}</td>
                <td>{{ $tire->manufacturer }}</td>
                <td>
                    <form action="{{ route('tireRestore', $tire->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-rotate-left"></i></button>
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

    <script src="{{ asset('/js/restoreTires.js') }}"></script>

@endsection