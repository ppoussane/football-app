@extends('layouts.app')

@section('content')
    <players :countries="{{ $countries }}" style="margin-top: 50px;"></players>
@endsection