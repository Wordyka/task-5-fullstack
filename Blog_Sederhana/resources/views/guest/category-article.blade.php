@extends('layouts.main')

@section('container')
@foreach($articles->take(1) as $article)
<h1 class="mb-5">Category Articles : {{$article->category->name}}</h1>
@endforeach

@include('partials.list-articles')

@include('partials.pagination-articles')

@endsection