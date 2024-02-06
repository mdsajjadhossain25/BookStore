@extends('layouts.main')
@section('main-section')
<div class="container mt-4 mb-4">
    <h2 class="text-center mb-3">Add Book</h2>
    <form action="{{ route('add_book') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Your Name" aria-describedby="helpId" value="{{ old('title') }}">
            @if($errors->has('title'))
                <div class="error text-danger">{{ $errors->first('title') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="number" name="isbn" id="isbn" class="form-control" placeholder="Enter ISBN" aria-describedby="helpId" value="{{ old('isbn') }}">
            @if($errors->has('isbn'))
                <div class="error text-danger">{{ $errors->first('isbn') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" name="author" id="author" class="form-control" placeholder="Enter Author" aria-describedby="helpId" value="{{ old('author') }}">
            @if($errors->has('author'))
                <div class="error text-danger">{{ $errors->first('author') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control" placeholder="Enter Price" aria-describedby="helpId" value="{{ old('price') }}">
            @if($errors->has('price'))
                <div class="error text-danger">{{ $errors->first('price') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label for="details" class="form-label">Details</label>
            <textarea class="form-control" name="details" id="details" rows="3">{{ old('details') }}</textarea>
            @if($errors->has('details'))
                <div class="text-danger">{{ $errors->first('details') }}</div>
            @endif
        </div>        
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input name="quantity" type="number" class="form-control" placeholder="Quantity" value="{{ old('quantity') }}">
            @if($errors->has('quantity'))
                <div class="error text-danger">{{ $errors->first('quantity') }}</div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
