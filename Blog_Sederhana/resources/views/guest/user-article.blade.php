@extends('layouts.main')

@section('container')
@foreach($articles->take(1) as $article)
<h1 class="mb-5">User Articles : {{$article->user->name}}</h1>
@endforeach

@include('partials.list-articles')

@include('partials.pagination-articles')

@endsection