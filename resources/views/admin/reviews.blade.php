@extends('admin.layout')
@section('content')

<reviews-component  :reviews="{{json_encode($reviews)}}" :reviewtotal="{{$count}}" :adminid="{{Auth::guard('admin')->user()->id}}" ></reviews-component>


@endsection

@section('scripts')
<script>

</script>

@endsection

