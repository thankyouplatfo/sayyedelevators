@extends('admin.layouts.app')
@section('title', 'لوحة التحكم - تحديث صلاحية')
@section('page-name', 'لوحة التحكم - تحديث صلاحية')
@section('content')
    <form action="{{ route('permissions.update', $permission->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <p>
            <label class="w3-large" for="name"> الإسم (إنجليزي)</label>
            <input type="text" class="w3-input name" name="name" id="name" type="text"
                value="{{ $permission->name }}">
            @error('name')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label class="w3-large" for="desc">الوصف</label>
            <input type="text" class="w3-input desc" name="desc" id="desc" type="text"
                value="{{ $permission->desc }}">
            @error('desc')
                {{ $message }}
            @enderror
        </p>
        <p class="w3-large">
            <input type="submit" class="w3-button w3-blue w3-left">
        </p>
    </form>
@endsection
