@extends('layouts.main')
@section('main-section')
    <div class="container mb-4 mt-4">
        <h2 class="text-center mb-3">Book List</h2>

        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('add_book') }}" class="btn btn-primary">Add Book</a>
            
            <form action="" class="d-flex">
                @csrf
                <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{$search}}">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>

        <div class="card shadow mt-3">
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">ISBN</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Available</th>
                        <th colspan="2">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <th scope="row">{{ $book->isbn }}</th>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>
                                <button class="btn" >
                                    @if ($book->quantity>0)
                                     <span class="badge bg-primary">in stock</span>
                                    @else
                                    <span class="badge bg-danger">out of stock</span>
                                    @endif
                                </button>
                            </td>
                            <td><a href="{{ route('delete_book', $book->id) }}" class="text-danger"><i class="fas fa-trash"></i></a></td>
                            <td><a href="{{ route('update_book', $book->id) }}" class="text-primary"><i class="fas fa-pen"></i></a></td>
                            <td><a href="{{ route('view_book', $book->id) }}" class="text-primary"><i class="fa-solid fa-eye"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$books->links()}}
            </div>
        </div>
    </div>
@endsection
