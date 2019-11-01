@extends('backend.layouts.temp')

@section('content')
    <div class="app-content  my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">Message Inbox</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('backend/message') }}">Message</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List</li>
                </ol>
            </div>
            @include('layouts.message.inbox')
        </div>
    </div>
@endsection
