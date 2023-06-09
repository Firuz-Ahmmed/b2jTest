@extends('layout.app')
@section('content')
    <div>
        <table class="table mt-4 table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->user_id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->age }}</td>
                        <td>{{ $item->gender }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
