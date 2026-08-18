@extends('dashboard')
@section('content')
    <form action="{{route('logo.store')}}" method="post" enctype='multipart/form-data'>
        <input type="file" name="logo_path">
        <button> ذخیره </button>
    </form>
@endSection