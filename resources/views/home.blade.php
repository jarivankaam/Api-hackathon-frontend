@extends('layouts.default')

@section('content-information')
    <div class="col-12 col-lg-7 col-sm-12 col-md-12">
        <div class="content-wrapper flex align-items-center flex-wrap">
            <div class="title">
                <h2>Waarom een Image Api?</h2>
            </div>
            <p>Dit is een opdracht voor de hackathon van onze opleiding, het leek ons een leuke uitdaging om een api te maken die images kan ontvangen en kan versturen. Naast de daadwerlijke api hebben we een frontend omgeving in laravel aangemaakt zodat de afbeeldinge ook gezien konden worden en deze ook via hier naar de api verzonden kunnen worden</p>
        </div>
    </div>
    <div class="col-12 col-lg-5 col-sm-12 col-md-12">
        <div class="image-wrapper  ">
            <img class="full-all" src="{{ asset('images/camera.jpg') }}" alt="">
        </div>
    </div>
@endsection

@section('content-images')
    <div class="section-heading">
        <div class="content-wrapper">
            <h2 class="text font Size64 ">Geüploade afbeeldingen</h2>
        </div>
    </div>
    @foreach($images as $image)
        <div class="col-12 col-lg-6 col-sm-12 col-md-12">
            <div class="part-card-wrapper">
                <div class="image-wrapper">
                    <img class="full-all" src="http://imgapi.azerapi.xyz/api/image/{{ $image->filename }}" alt="image">
                </div>
            </div>
        </div>
    @endforeach
@endsection
