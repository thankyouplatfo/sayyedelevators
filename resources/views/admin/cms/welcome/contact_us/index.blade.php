@extends('admin.layouts.app')
@section('title', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - تواصل معنا')
@section('page-name', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - تواصل معنا')
@section('content')
    <div class="w3-bar w3-light-gery">
        <a href="{{ route('contact_us.create') }}" class=" w3-large w3-button w3-text-white w3-black w3-left w3-section"><i
                class="fa fa-plus"></i></a>
    </div>
    <div class="w3-responsive">
        <table class="w3-table-all">
            <tr>
                <th class="w3-center">#</th>
                <th class="w3-center">الصورة</th>
                <th class="w3-center">عبارة ترحيب </th>
                <th class="w3-center">المدينة</th>
                <th class="w3-center">الدولة </th>
                <th class="w3-center">رقم الجوال</th>
                <th class="w3-center">البريد الإلكتروني</th>
                <th class="w3-center">استعراض</th>
                <th class="w3-center">تحديث</th>
                <th class="w3-center">حذف</th>
            </tr>
            @foreach ($contact_us as $contactus)
                <tr>
                    <td class="w3-center">
                        {{ $contactus->id }}
                    </td>
                    <td class="w3-center">{{ $contactus->welcome_phrase }}</td>
                    <td class="w3-center">{{ $contactus->city->name }}</td>
                    <td class="w3-center">{{ $contactus->country->name }}</td>
                    <td class="w3-center">{{ $contactus->phone }}</td>
                    <td class="w3-center">{{ $contactus->email }}</td>
                    <td class="w3-center">
                        <a href="{{ route('contactus.show', $contactus->id) }}" target="_blank" class="w3-button w3-blue"><i
                                class="fas fa-eye"></i></a>
                    </td>
                    <td class="w3-center">
                        <a href="{{ route('contactus.edit', $contactus->id) }}" class="w3-button w3-yellow"><i
                                class="fas fa-pencil"></i></a>
                    </td>
                    <td class="w3-center">
                        <button type="submit" form="destroy-contactus{{ $contactus->id }}" class="w3-button w3-red"><i
                                class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                    <form action="{{ route('contactus.destroy', $contactus->id) }}"
                        id="destroy-contactus{{ $contactus->id }}" method="post">
                        @csrf
                        @method('DELETE')
                    </form>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
