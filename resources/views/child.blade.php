@extends('master')
@section('title', 'Page Title')
@section('sidebar')
<p>This refers to the master sidebar.</p>
{{-- @parent --}}
@endsection
@section('content')
<p>This is my body content.</p>
@endsection
