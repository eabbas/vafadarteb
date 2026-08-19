@extends('dashboard')
@section('contet') 



<form action="{{route('hero.store')}}" method="post" enctype='multipart/form-data'>
    <input type="text"name="title" class=''>
    <input type="text"name="summary" class=''>
    <input type="text"name="addres" class=''>
    <input type="file"name="background_image_path" class=''>
    <input type="file"name="hero_image_path" class=''>
    <input type="checkbox"name="is_active" value="1" class=''>
    <button> ذخیره </button>
</form>

@endsection