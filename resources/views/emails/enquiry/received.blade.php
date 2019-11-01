@extends('emails.layout')

@section('content')
    @php
        $property = \App\Models\Property::findByPropertyid($mail['property_id']);
        $to = \App\Models\Employee::findByEmail($property->manager_email);
    @endphp
        @if($to)
        <h3>Dear {{ $to->name }}</h3>
        @endif
        <p>You've received an enquiry from {{ $mail['name'].'('.$mail['email'].')' }} from <a href="{{ url('/') }}" target="_blank">ereal.com.au</a>.</p>
        <p></p>
        <p>Name: {{ $mail['name'] }}</p>
        <p>Email: {{ $mail['email'] }}</p>
    @if(isset($mail['phone']) && $mail['phone'] !== '')
        <p>Phone: {{ $mail['phone'] }}</p>
    @endif
        <p>Property ID: {{ $property->product_id }}</p>
        <p>Property Address:{{ $property->address }}, {{ $property->suburb }}</p>
        <p></p>
        <p>Comments:{!! $mail['message'] !!}
        </p>
        <p></p>
        <p>You can check the property in our website by the following link: <a href="{{ url('property/detail/'.$property->product_id) }}" target="_blank">{{ $property->address }}</a></p>
        <p></p>
        <p></p>
        <p>Sincerely,</p>
        <p>Elite Real Estate</p>
@endsection
