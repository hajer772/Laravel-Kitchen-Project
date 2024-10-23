@extends('front.layouts.matser')

@section('title', 'Kitchen-Interior About | MegaOne HTML5 Template')

@section('content')

    @include('front.components.banner', ['pageName'=> __('words.contact-us')])

    @include('front.components.contact')

    @include('front.layouts.pages-footer')

@endsection


