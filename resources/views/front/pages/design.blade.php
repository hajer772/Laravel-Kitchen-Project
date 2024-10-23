@extends('front.layouts.matser')

@section('title', 'Kitchen-Interior Kitchen Design | MegaOne HTML5 Template')

@section('content')

    @include('front.components.banner', ['pageName'=> __('words.design') ])

    @include('front.components.portfolio')

    @include('front.layouts.pages-footer')

@endsection


