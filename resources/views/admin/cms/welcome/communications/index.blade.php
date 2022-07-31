@extends('admin.layouts.app')
@section('title', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - تواصل معنا')
@section('page-name', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - تواصل معنا')
@section('content')
    <div class="w3-bar w3-light-gery">
        <a href="{{ route('communications.create') }}"
            class=" w3-large w3-button w3-text-white w3-black w3-left w3-section"><i class="fa fa-plus"></i></a>
    </div>
    <div class="w3-responsive">
        <table class="w3-table-all">
            <tr>
                <th class="w3-center">#</th>
                <th class="w3-center">عبارة ترحيب </th>
                <th class="w3-center">العنوان</th>
                <th class="w3-center">رقم الجوال</th>
                <th class="w3-center">البريد الإلكتروني</th>
                <th class="w3-center">استعراض</th>
                <th class="w3-center">تحديث</th>
                <th class="w3-center">حذف</th>
            </tr>
            @foreach ($communications as $communication)
                <tr>
                    <td class="w3-center">
                        {{ $communication->id }}
                    </td>
                    <td class="w3-center">{{ $communication->welcome }}</td>
                    <td class="w3-center"><a href="{{ $communication->url }}" target="_blank">{{ $communication->city->name }} -
                            {{ $communication->country->name }}</a></td>
                    <td class="w3-center"><span dir="ltr" class="">{{ $communication->phone }}</span></td>
                    <td class="w3-center">{{ $communication->email }}</td>
                    <td class="w3-center">
                        <a href="{{ route('communications.show', $communication->id) }}" target="_blank"
                            class="w3-button w3-blue"><i class="fas fa-eye"></i></a>
                    </td>
                    <td class="w3-center">
                        <a href="{{ route('communications.edit', $communication->id) }}" class="w3-button w3-yellow"><i
                                class="fas fa-pencil"></i></a>
                    </td>
                    <td class="w3-center">
                        <button type="submit" form="destroy-communication{{ $communication->id }}"
                            class="w3-button w3-red"><i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                    <form action="{{ route('communications.destroy', $communication->id) }}"
                        id="destroy-communication{{ $communication->id }}" method="post">
                        @csrf
                        @method('DELETE')
                    </form>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
