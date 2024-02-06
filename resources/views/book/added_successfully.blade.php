@extends('layouts.main')
@section('main-section')
<div class="content-body">
    <div class="container-fluid">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="alert alert-success">
                        @if(session('success'))
                            {{ session('success') }}
                        @endif
                        <br>
                        <a href="{{ route('view_book', $id) }}" class="btn btn-primary">
                            View Book
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection