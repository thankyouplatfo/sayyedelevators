@extends('admin.layouts.app')
@section('title', 'لوحة التحكم - الأدوار')
@section('page-name', 'لوحة التحكم - الأدوار')
@section('content')
    <form action="{{ route('roles.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <p>
            <label for="name">الإسم</label>
            <input type="text" class="w3-input name" name="name" id="name" type="text" value="{{ old('name') }}">
            @error('name')
                {{ $message }}
            @enderror
        </p>
        <p class="w3-large">
            <input type="submit" class="w3-button w3-blue w3-left">
        </p>
    </form>
@endsection
