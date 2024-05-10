@extends('layouts.main')
@section('container')
<h1>Datalog</h1>
<h1>{{$device["name"]}}</h1>
@php
    $i = 1;
@endphp
<table border="1" cellpadding="10" cellspacing="0">
    <td>#</td>
    <td>Datetime</td>
    <td>Data</td>
    @foreach($data as $d)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $d["created_at"] }}</td>
            <td>{{ $d["data"] }}</td>
        </tr>
        @php
            $i++;
        @endphp
    @endforeach
    <a href="/devices">Back to Devices</a>
@endsection
