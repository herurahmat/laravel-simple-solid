@extends('layouts.app')

@section('title')
Book
@endsection


@section('content')

<table class="table table-bordered">
    <thead>
        <th>Titlte</th>
        <th>Author</th>
        <th></th>
    </thead>
    <tbody>
        @foreach($data as $row)
        <tr>
            <td>{{ $row->title }}</td>
            <td>{{ $row->author }}</td>
            <th>
                <a href="{{ route('book.edit',$row->id) }}" class="btn btn-info btn-xs">
                    Edit
                </a> &nbsp;
                <a onclick="return confirm('Are you sure delete this data?');" href="{{ route('book.delete',$row->id) }}" class="btn btn-danger btn-xs">
                    Delete
                </a>
            </th>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
