@extends('layouts.main')
@section('main-section')
<div class="container mt-4">
    <center><h3 class="btn btn-success">update Book</h3></center>
    <form action="{{route('update_book', $book->id)}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input type="text" name="title" id="" class="form-control" placeholder="Enter Your Name" aria-describedby="helpId" value="{{old('title', $book->title)}}">
            @if($errors->has('title'))
                <div class="error text-danger">{{ $errors->first('title') }}</div>
            @endif
        </div>
        <div class="mb-3">
            <label for="" class="form-label">ISBN</label>
            <input type="text" name="isbn" id="" class="form-control" placeholder="Enter ISBN" aria-describedby="helpId" value="{{old('isbn', $book->isbn)}}">
            @if($errors->has('isbn'))
            <div class="error text-danger">{{ $errors->first('isbn') }}</div>
        @endif
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Author</label>
            <input type="text" name="author" id="" class="form-control" placeholder="Enter Author" aria-describedby="helpId" value="{{old('author', $book->author)}}">
            @if($errors->has('author'))
            <div class="error text-danger">{{ $errors->first('author') }}</div>
        @endif
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input type="text" name="price" id="" class="form-control" placeholder="Enter stock" aria-describedby="helpId" value="{{old('price', $book->price)}}">
            @if($errors->has('price'))
            <div class="error text-danger">{{ $errors->first('price') }}</div>
        @endif
        </div>
        <div class="mb-3">
            <label for="details" class="form-label">Details</label>
            <textarea class="form-control" name="details" id="details" rows="3">{{ old('details', $book->details) }}</textarea>
        
            @if($errors->has('details'))
                <div class="text-danger">{{ $errors->first('details') }}</div>
            @endif
        </div>  
        <div class="mb-3">
          <label for="" class="form-label">Quantity</label>
          <input name="quantity" type="text" class="form-control" placeholder="Quantity" value="{{old('quantity', $book->quantity)}}">
          @if($errors->has('quantity'))
          <div class="error text-danger">{{ $errors->first('quantity') }}</div>
         @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    
@endsection