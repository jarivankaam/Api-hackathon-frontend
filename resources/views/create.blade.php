@extends('layouts.create')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-sm-12 col-md-12">
                <form action="/upload" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="image">Image:</label>
                    <input name="image" type="file" accept="image/png, image/jpg, image/jpeg, image/svg" />
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
@endsection
