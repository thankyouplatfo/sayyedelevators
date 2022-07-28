@extends('admin.layouts.app')
@section('title', 'لوحة التحكم - الأدوار')
@section('page-name', 'لوحة التحكم - الأدوار')
@section('content')
    <form action="{{ route('roles.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <p>
            <label for="name">الإسم</label>
            <input class="w3-input name" name="name" id="name" type="name" value="{{ old('name') }}">
            @error('name')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label for="email">البريد الإلكتروني</label>
            <input class="w3-input email" name="email" id="email" type="email" value="{{ old('email') }}">
            @error('email')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label for="role_id">الدور</label>
            <select class="w3-input role_id" name="role_id" id="role_id" >
                <option value="{{ 0 }}" disabled selected>أختر دورا</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
            @error('role_id')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label for="type">الدور</label>
            <select class="w3-input type" name="type" id="type">
                <option value="{{ 0 }}" disabled selected>أختر نوعا للمستخدم</option>
                <option value="1"> عضو في الفريق </option>
                <option value="2"> مستخدم </option>
            </select>
            @error('type')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label for="password">كلمة المرور</label>
            <input class="w3-input password" name="password" id="password" type="password" value="{{ old('password') }}">
            @error('password')
                {{ $message }}
            @enderror
        </p>
        <p>
            <label for="password">تأكيد كلمة المرور</label>
            <input class="w3-input password" name="password" id="password" type="password" value="{{ old('password') }}">
            @error('password')
                {{ $message }}
            @enderror
        </p>
        <p class="w3-large">
            <input type="submit" class="w3-button w3-blue w3-left">
        </p>
    </form>
@endsection
