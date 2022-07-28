@extends('admin.layouts.app')
@section('title', 'لوحة التحكم -الأدوار')
@section('page-name', 'لوحة التحكم -تعيين الصلاحيات إلى الأدوار')
@section('content')
    <div class="w3-bar w3-light-gery">
        <a href="{{ route('permissions.create') }}" class=" w3-large w3-button w3-text-white w3-black w3-left w3-section"><i
                class="fa fa-plus"></i></a>
    </div>
    <div class="w3-responsive">
        <table class="w3-table-all">
            <tr>
                <th class="w3-center">#</th>
                <th class="w3-center">الإسم</th>
                <th class="w3-center">الوصف</th>
                <th class="w3-center">استعراض</th>
                <th class="w3-center">تحديث</th>
                <th class="w3-center">حذف</th>
            </tr>
            @foreach ($permissions as $permission)
                <tr>
                    <td class="w3-center">
                        {{ $permission->id }}
                    </td>
                    <td class="w3-center">
                        {{ $permission->name }}
                    </td>
                    <td class="w3-center">
                        {{ $permission->desc }}
                    </td>
                    <td class="w3-center">
                        <a href="{{ route('permissions.show', $permission->id) }}" target="_blank"
                            class="w3-button w3-blue"><i class="fas fa-eye"></i></a>
                    </td>
                    <td class="w3-center">
                        <a href="{{ route('permissions.edit', $permission->id) }}" class="w3-button w3-yellow"><i
                                class="fas fa-pencil"></i></a>
                    </td>
                    <td class="w3-center">
                        <button type="submit" form="destroy-permission{{ $permission->id }}" class="w3-button w3-red"><i
                                class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                    <form action="{{ route('permissions.destroy', $permission->id) }}" id="destroy-permission{{ $permission->id }}"
                        method="post">
                        @csrf
                        @method('DELETE')
                    </form>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
