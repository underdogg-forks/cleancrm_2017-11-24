@extends('core::guestlayouts.guest')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('core.name') !!}
    </p>
@stop
