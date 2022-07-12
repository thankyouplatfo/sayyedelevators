@extends('admin.layouts.app')
@section('title', 'لوحة التحكم - المستخدمين')
@section('page-name', 'لوحة التحكم - المستخدمين')
@section('content')
    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <p>
            <label for="name">الإسم</label>
            <input type="text" class="w3-input name" name="name" id="name" type="text" value="{{ old('name') }}">
            @error('name')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label for="email">البريد</label>
            <input type="text" class="w3-input email" name="email" id="email" type="email"
                value="{{ old('email') }}">
            @error('email')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label for="role_id">الدور</label>
            <input type="text" class="w3-input role_id" name="role_id" id="role_id" type="number"
                value="{{ old('role_id') }}">
            @error('role_id')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label for="password">كلمة المرور</label>
            <input type="text" class="w3-input password" name="password" id="password" type="password"
                value="{{ old('password') }}">
            @error('password')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label for="password_confirmation">تأكيد كلمة المرور</label>
            <input type="text" class="w3-input password_confirmation" name="password_confirmation"
                id="password_confirmation" type="password_confirmation" value="{{ old('password_confirmation') }}">
            @error('password_confirmation')
                {{ $message }}
            @enderror
        </p>
        <p class="w3-large">
            <input type="submit" class="w3-button w3-blue w3-left">
        </p>
    </form>
@endsection
