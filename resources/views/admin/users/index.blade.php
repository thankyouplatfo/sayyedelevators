@extends('admin.layouts.app')
@section('title', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - عنا')
@section('page-name', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - عنا')
@section('content')
    <div class="w3-bar w3-light-gery">
        <a href="{{ route('users.create') }}" class=" w3-large w3-button w3-text-white w3-black w3-left w3-section"><i
                class="fa fa-plus"></i></a>
    </div>
    <div class="w3-responsive">
        <table class="w3-table-all">
            <tr>
                <th class="w3-center">#</th>
                <th class="w3-center">الصورة الرمزية</th>
                <th class="w3-center">الإسم</th>
                <th class="w3-center">السيرة الذاتية</th>
                <th class="w3-center">البريد</th>
                <th class="w3-center">الدور</th>
                <th class="w3-center">استعراض</th>
                <th class="w3-center">تحديث</th>
                <th class="w3-center">حذف</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td class="w3-center">
                        {{ $user->id }}
                    </td>
                    <td class="w3-center">
                        {{ $user->avatar }}
                    </td>
                    <td class="w3-center">
                        {{ $user->name }}
                    </td>
                    <td class="w3-center">
                        {{ $user->bio }}
                    </td>
                    <td class="w3-center">
                        {{ $user->email }}
                    </td>
                    <td class="w3-center">
                        {{ $user->role_id }}
                    </td>
                    <td class="w3-center">
                        <a href="{{ route('users.show', $user->id) }}" target="_blank" class="w3-button w3-blue"><i
                                class="fas fa-eye"></i></a>
                    </td>
                    <td class="w3-center">
                        <a href="{{ route('users.edit', $user->id) }}" class="w3-button w3-yellow"><i
                                class="fas fa-pencil"></i></a>
                    </td>
                    <td class="w3-center">
                        <button type="submit" form="destroy-header{{ $user->id }}" class="w3-button w3-red"><i
                                class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                    <form action="{{ route('users.destroy', $user->id) }}" id="destroy-header{{ $user->id }}"
                        method="post">
                        @csrf
                        @method('DELETE')
                    </form>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
