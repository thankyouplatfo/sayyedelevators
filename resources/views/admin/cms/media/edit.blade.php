@extends('admin.layouts.app')
@section('title', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - صورة رأس الصفحة')
@section('page-name', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - صورة رأس الصفحة (تحديث)')
@section('content')
    <form action="{{ route('media.update', $medium->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <p>
            <label for="url">الرابط</label>
            <input dir="ltr" class="w3-input w3-left-align url" name="url" id="url" value="{{ $medium->url }}">
            @error('url')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label for="ff_code">الأيقونة</label>
            <input dir="ltr" class="w3-input w3-left-align ff_code" name="ff_code" id="ff_code"
                value="{{ $medium->ff_code }}">
            @error('ff_code')
                {{ $message }}
            @enderror
        </p>
        <!---->
        <p class="w3-large">
            <input type="submit" class="w3-button w3-blue w3-left">
        </p>
    </form>
@endsection
