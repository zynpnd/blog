@extends('front.layouts.master')
@section('title','Blog')
@section('bg','https://startbootstrap.github.io/startbootstrap-clean-blog/assets/img/home-bg.jpg')

@section('content')

    <!-- Main Content -->
    <div class="col-md-9 mx-auto">
        @include('front.widgets.articleList')
    </div>

    @include('front.widgets.categoryWidget')
@endsection
