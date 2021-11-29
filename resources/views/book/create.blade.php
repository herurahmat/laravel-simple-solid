@extends('layouts.app')

@section('title')
Book
@endsection


@section('content')
<form method="post" action="{{route('book.store')}}">
    @csrf

    <div class="row mb-3">
        <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" name="title" id="title" class="form-control " placeholder="Book Title" required value="{{ old('title') }}" />
        </div>
    </div>

    <div class="row mb-3">
        <label for="author" class="col-sm-2 col-form-label">Author</label>
        <div class="col-sm-10">
            <input type="text" name="author" id="author" class="form-control " placeholder="Book Author" required value="{{ old('author') }}" />
        </div>
    </div>

    <button type="submit" class="btn btn-primary btn-flat">Save</button>
    <a href="{{ route('book.index') }}" class="btn btn-secondary btn-flat">Back</a>

</form>
@endsection
