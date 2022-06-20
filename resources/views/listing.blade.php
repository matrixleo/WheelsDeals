@extends('layout')

@section('component')
<h2>
    {{$listing['title']}}
</h2>
<p>
    {{$listing['description']}}
</p>
@endsection