@extends('layouts.main')

@section('container')
<h1 class="mb-5">List of Articles</h1>

@include('partials.list-articles')

@include('partials.pagination-articles')

@endsection