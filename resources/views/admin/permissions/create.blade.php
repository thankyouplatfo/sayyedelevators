@extends('admin.layouts.app')
@section('title', 'لوحة التحكم - إنشاء صلاحية')
@section('page-name', 'لوحة التحكم - إنشاء صلاحية')
@section('content')
    <form action="{{ route('permissions.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <p>
            <label class="w3-large" for="name"> الإسم (إنجليزي)</label>
            <input type="text" class="w3-input name" name="name" id="name" type="text" value="{{ old('name') }}">
            @error('name')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label class="w3-large" for="desc">الوصف</label>
            <input type="text" class="w3-input desc" name="desc" id="desc" type="text" value="{{ old('desc') }}">
            @error('desc')
                {{ $message }}
            @enderror
        </p>
        <p class="w3-large">
            <input type="submit" class="w3-button w3-blue w3-left">
        </p>
    </form>
@endsection
