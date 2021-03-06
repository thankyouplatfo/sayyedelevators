@extends('admin.layouts.app')
@section('title', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - إنشاء كارت تواصل')
@section('page-name', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - إنشاء كارت تواصل')
@section('content')
    <form action="{{ route('communications.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <p>
            <label for="welcome">عبارة ترحيب</label>
            <input class="w3-input welcome" name="welcome" id="welcome">
            @error('welcome')
                <b class="w3-text-red">{{ $message }}</b>
            @enderror
        </p>
        <p>
            <label for="city_id">المدينة </label>
            <select class="w3-input city_id" name="city_id" id="city_id">
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}" {{ $city->id == 3 ? 'selected' : '' }}>{{ $city->name }}</option>
                @endforeach
            </select>
            @error('city_id')
                <b class="w3-text-red">{{ $message }}</b>
            @enderror
        </p>
        <p>
            <label for="country_id">الدولة </label>
            <select class="w3-input country_id" name="country_id" id="country_id">
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}" {{ $country->id == 195 ? 'selected' : '' }}>{{ $country->name }}
                    </option>
                @endforeach
            </select>
            @error('country_id')
                <b class="w3-text-red">{{ $message }}</b>
            @enderror
        </p>
        <p>
            <label for="url">رابط الخريطة ما هذا؟<a href="#">مساعدة</a></label>
            <input class="w3-input url" name="url" id="url">
            @error('url')
                <b class="w3-text-red">{{ $message }}</b>
            @enderror
        </p>
        <p>
            <label for="phone">رقم الجوال</label>
            <input class="w3-input phone" name="phone" id="phone">
            @error('phone')
                <b class="w3-text-red">{{ $message }}</b>
            @enderror
        </p>
        <p>
            <label for="email">البريد الإلكتروني</label>
            <input class="w3-input email" name="email" id="email">
            @error('email')
                <b class="w3-text-red">{{ $message }}</b>
            @enderror
        </p>
        <!---->
        <p class="w3-large">
            <input type="submit" class="w3-button w3-blue w3-left">
        </p>
    </form>
@endsection
