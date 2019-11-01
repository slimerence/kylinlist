@extends(_get_frontend_path('emails.layout'))

@section('content')
        <h3>Dear Admin,</h3>
        <p>You've received a {{ $mail['type']=='1'? 'sales':'rental' }} appraisal from {{ $mail['name'].'('.$mail['email'].')' }}in Ereal Website.</p>
        <p></p>
        <p>Name: {{ $mail['name'] }}</p>
        <p>Email: {{ $mail['email'] }}</p>
        <p>Type: {{ $mail['type']=='1'? 'sales':'rental' }}</p>
    @if(isset($mail['phone']) && $mail['phone'] !== '')
        <p>Phone: {{ $mail['phone'] }}</p>
    @endif
        @if(isset($mail['address']) && $mail['address'] !== '')
            <p>Address: {{ $mail['address'] }}</p>
        @endif
        @if(isset($mail['how_did_you_find_us']) && $mail['how_did_you_find_us'] !== '')
            <p>How did he find: {{ $mail['how_did_you_find_us'] }}</p>
        @endif
        <p></p>
        <p>Comments:{!! $mail['comment'] !!}
        </p>
        <p></p>
        <p></p>
        <p>Sincerely,</p>
        <p>Elite Real Estate</p>
@endsection
