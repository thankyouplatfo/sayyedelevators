@extends('admin.layouts.app')
@section('title', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - عنا')
@section('page-name', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - عنا (تحديث)')
@section('content')
    <form action="{{ route('about.update', $about->id) }}" method="post">
        @csrf
        @method('put')
        <p class="w3-large">
            <label for="description ">النص البديل</label>
            <textarea class="description w3-input" name="description" id="description" cols="30" rows="10">{{ $about->description }}</textarea>
        </p>
        @error('description')
            <b class="w3-text-red">{{ $message }}</b>
        @enderror
        <p class="w3-large">
            <input type="submit" class="w3-button w3-blue w3-left">
        </p>
    </form>
@endsection
