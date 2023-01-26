@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-sm-12 col-md-12">
                @foreach($images as $image)
                    <img src="http://imgapi.azerapi.xyz/api/image/{{ $image->filename }}" alt="image">
                @endforeach
            </div>
        </div>
    </div>
@stop
