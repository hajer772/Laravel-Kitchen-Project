@extends('front.layouts.matser')

@section('title', 'Kitchen-Interior About | MegaOne HTML5 Template')

@section('content')

    @include('front.components.banner', ['pageName'=>__("words.about-us") ])

    @include('front.components.about')

    @include('front.components.team')
    @include('front.layouts.pages-footer')

@endsection


