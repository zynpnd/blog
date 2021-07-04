@extends('front.layouts.master')
@section('title','AnaSayfa')


@section('content')

<!-- Main Content -->

        <div class="col-md-9  mx-auto">
           @include('front.widgets.articleList')
        </div>

@include('front.widgets.categoryWidget')
@endsection


