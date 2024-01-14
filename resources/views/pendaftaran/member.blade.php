@extends('layouts.master')

@section('content')
    <div class="container justify-content-center my-4">
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-hover mb-0 text-center data">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NRP</th>
                            <th>Name</th>
                            <th>Telephone</th>
                            <th>Gender</th>
                            <th>Angkatan</th>
                            <th>Fakultas</th>
                            <th>Status</th>
                            @can('admin')
                                <th>Action</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recruitments as $recruitment)
                            <tr>
                                <td>{{ $recruitment->id }}</td>
                                <td>{{ $recruitment->nrp }}</td>
                                <td>{{ $recruitment->name }}</td>
                                <td>{{ $recruitment->telephone }}</td>
                                <td>{{ $recruitment->gender }}</td>
                                <td>{{ $recruitment->angkatan }}</td>
                                <td>{{ $recruitment->faculty->name }}</td>
                                @if ($recruitment->status)
                                    <td>Diterima</td>
                                @else
                                    <td>Menunggu</td>
                                @endif
                                @can('admin')
                                    <td>
                                        <form action="/recruitment/{{ $recruitment->id }}" method="POST">
                                            @csrf
                                            <div class="btn-group">
                                                <button type="submit"
                                                    class="btn btn-success mr-4 rounded-lg"><i class="fa fa-check"></i></button>
                                            </div>
                                        </form>
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
