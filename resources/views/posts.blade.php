@extends('layouts.main')
@section('body')
{{-- @dd($data) --}}
  @foreach ($data as $item)
    {{$item -> title}}
  @endforeach
@endsection