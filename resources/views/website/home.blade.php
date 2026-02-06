


@extends('layouts.app')

@section('title', 'Home')

@section('content')

@include('partials.hero')

@include('partials.latestnews')

@include('partials.about-home')

@include('partials.school-achievements', ['events' => $events]) 

@include('partials.facilities')

@include('partials.admission-open')

@include('partials.student-corner')

@include('partials.principal-message')

@include('partials.video-gallery', ['videos' => $videos])




@endsection
