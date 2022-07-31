@extends('admin.layouts.app')
@section('title', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - كارت تواصل')
@section('page-name', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - كارت تواصل (تحديث)')
@section('content')
    <form action="{{ route('communications.update', $communication->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <p>
            <label for="welcome">عبارة ترحيب</label>
            <input class="w3-input welcome" name="welcome" id="welcome" value="{{ $communication->welcome }}">
            @error('welcome')
                <b class="w3-text-red">{{ $message }}</b>
            @enderror
        </p>
        <p>
            <label for="city_id">المدينة </label>
            <select class="w3-input city_id" name="city_id" id="city_id">
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}"
                        {{ $communication->city_id == $communication->city->id ? 'selected' : '' }}>{{ $city->name }}
                    </option>
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
                    <option value="{{ $country->id }}">{{ $country->id == 195 ? $country->name : '' }}</option>
                @endforeach
            </select>
            @error('country_id')
                <b class="w3-text-red">{{ $message }}</b>
            @enderror
        </p>
        <p>
            <label for="url">رابط الخريطة ما هذا؟ <a href="#">مساعدة</a></label>
            <input style="direction: ltr!important;align:left!important" class="w3-left-align w3-input url" name="url"
                id="url" value="{{ $communication->url }}">
            @error('url')
                <b class="w3-text-red">{{ $message }}</b>
            @enderror
        </p>
        <p>
            <label for="phone">رقم الجوال</label>
            <input style="direction: ltr!important;align:left!important" class="w3-left-align w3-input phone" name="phone"
                id="phone" value="{{ $communication->phone }}">
            @error('phone')
                <b class="w3-text-red">{{ $message }}</b>
            @enderror
        </p>
        <p>
            <label for="email">البريد الإلكتروني</label>
            <input style="direction: ltr!important;align:left!important" class="w3-left-align w3-input email" name="email"
                id="email" value="{{ $communication->email }}">
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
