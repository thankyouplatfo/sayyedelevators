@extends('admin.layouts.app')
@section('title', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - المشاريع')
@section('page-name', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - المشاريع (تحديث)')
@section('content')
    <form action="{{ route('projects.update',$project->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <p class="w3-large">
            <label for="path">الصورة</label>
            <input class="path w3-input" name="path" id="path" type="file" accept="image/*">
        </p>
        @error('path')
            <b class="w3-text-red">{{ $message }}</b>
        @enderror
        <p class="w3-large">
            <label for="alt ">النص البديل</label>
            <textarea class="alt w3-input" name="alt" id="alt" cols="30" rows="10">{{ $project->alt }}</textarea>
        </p>
        @error('path')
            <b class="w3-text-red">{{ $message }}</b>
        @enderror
        <p class="w3-large">
            <input type="submit" class="w3-button w3-blue w3-left">
        </p>
    </form>
@endsection
