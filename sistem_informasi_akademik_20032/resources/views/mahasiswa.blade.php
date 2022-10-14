@extends('master')
@section('active_mhs','active')
@section('title','Mahasiswa')
@section('kontenutama')
<ul class="list-group">
    @foreach ($mahasiswa as $mhs)
    <li class="list-group-item">{{ $mhs }}</li>
    @endforeach
  </ul>
@endsection
