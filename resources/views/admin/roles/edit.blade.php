@extends('admin.layouts.app')
@section('title', 'لوحة التحكم -الأدوار')
@section('page-name', 'لوحة التحكم -الأدوار (تحديث)')
@section('content')
    <form action="{{ route('roles.update', $role->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <p>
            <label for="name">الإسم</label>
            <input type="text" class="w3-input name" name="name" id="name" type="text" value="{{ $role->name }}">
            @error('name')
                {{ $message }}
            @enderror
        </p>
        <p class="w3-large">
            <input type="submit" class="w3-button w3-blue w3-left">
        </p>
    </form>
@endsection
