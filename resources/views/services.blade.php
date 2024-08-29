@extends('layouts.landing')

@section('title')
    Services
@endsection

@section('content')
    <h1>Services</h1>
    @component('_components.card')
        @slot('title', 'Service 1')
        @slot('content', 'Este es el párrafo.')
    @endcomponent
    @component('_components.card')
        @slot('title', 'Service 2')
        @slot('content', 'Este es el párrafo.')
    @endcomponent
    @component('_components.card')
        @slot('title', 'Service 3')
        @slot('content', 'Este es el párrafo.')
    @endcomponent
@endsection