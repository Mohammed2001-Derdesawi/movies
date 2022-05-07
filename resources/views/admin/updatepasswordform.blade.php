@extends('admin.layout_account')
@section('content')

<resetpassword-component emailadmin="{{$email}}" admintoken="{{$token}}" ></resetpassword-component>

@endsection
