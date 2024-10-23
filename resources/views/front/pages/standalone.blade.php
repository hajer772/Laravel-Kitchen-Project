@extends('front.layouts.matser')

@section('title', 'Kitchen-Interior StandAlone | MegaOne HTML5 Template')

@section('content')

    @include('front.components.banner', ['pageName'=>__('words.standalone')])

    @include('front.components.inner')

    @include('front.layouts.pages-footer')

@endsection


