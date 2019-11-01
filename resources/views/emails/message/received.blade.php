@extends(_get_frontend_path('emails.layout'))

@section('content')
    @php
        $from = \App\User::where('id',$mail->from_id)->first();
        $to = \App\User::where('id',$mail->to_id)->first();
    @endphp
            <h3>Dear {{ $to->name }}</h3>
            <p>You've received a message from {{$from->name.' ('.$from->email.')'}} in Ereal Website.</p>
            <p></p>
            <p class="lead">{{ $mail->title }}</p>
            <p></p>
            <p>
                {!! $mail->content !!}
            </p>
            <p></p>
            <p>You can check it in our website by the following link: <a href="{{ url('/backend/messages') }}" target="_blank"></a></p>
            <p></p>
            <p>Sincerely,</p>
            <p>Your Elite Real Estate</p>
@endsection