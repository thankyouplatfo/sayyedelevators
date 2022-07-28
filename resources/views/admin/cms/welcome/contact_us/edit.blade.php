@extends('admin.layouts.app')
@section('title', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - كارت تواصل')
@section('page-name', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - كارت تواصل (تحديث)')
@section('content')
    <form action="{{ route('contact_us.update', $contactUs->id) }}" method="post">
        @csrf
        @method('put')
        <p>
            <label for="welcome_phrase">عبارة ترحيب</label>
            <input class="w3-input welcome_phrase" name="welcome_phrase" id="welcome_phrase">
            @error('welcome_phrase')
                <b class="w3-text-red">{{ $message }}</b>
            @enderror
        </p>
        <p>
            <label for="city_id">المدينة </label>
            <select class="w3-input city_id" name="city_id" id="city_id">
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
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
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
            @error('country_id')
                <b class="w3-text-red">{{ $message }}</b>
            @enderror
        </p>
        <p>
            <label for="mobile_number">رقم الجوال</label>
            <input class="w3-input mobile_number" name="mobile_number" id="mobile_number">
            @error('mobile_number')
                <b class="w3-text-red">{{ $message }}</b>
            @enderror
        </p>
        <p>
            <label for="e_mail">البريد الإلكتروني</label>
            <input class="w3-input e_mail" name="e_mail" id="e_mail">
            @error('e_mail')
                <b class="w3-text-red">{{ $message }}</b>
            @enderror
        </p>
        <!---->
        <p class="w3-large">
            <input type="submit" class="w3-button w3-blue w3-left">
        </p>
    </form>
@endsection
