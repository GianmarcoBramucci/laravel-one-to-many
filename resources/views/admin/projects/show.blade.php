@extends('layouts.app')
@section('content')
    <section class="container">
        <h2>{{$project->title}}</h2>
        <h3>{{$project->slug}}</h3>
        <p>{{$project->content}}</p>
    </section>
@endsection
