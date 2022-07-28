@extends('admin.layouts.app')
@section('title', 'لوحة التحكم -الأدوار')
@section('page-name', 'لوحة التحكم -الأدوار')
@section('content')
    <div class="w3-bar w3-light-gery">
        <a href="{{ route('roles.create') }}" class=" w3-large w3-button w3-text-white w3-black w3-left w3-section"><i
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
            @foreach ($roles as $role)
                <tr>
                    <td class="w3-center">
                        {{ $role->id }}
                    </td>
                    <td class="w3-center">
                        {{ $role->name }}
                    </td>
                    <td class="w3-center">
                        {{ $role->name }}
                    </td>
                    <td class="w3-center">
                        <a href="{{ route('roles.show', $role->id) }}" target="_blank" class="w3-button w3-blue"><i
                                class="fas fa-eye"></i></a>
                    </td>
                    <td class="w3-center">
                        <a href="{{ route('roles.edit', $role->id) }}" class="w3-button w3-yellow"><i
                                class="fas fa-pencil"></i></a>
                    </td>
                    <td class="w3-center">
                        <button type="submit" form="destroy-role{{ $role->id }}" class="w3-button w3-red"><i
                                class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                    <form action="{{ route('roles.destroy', $role->id) }}" id="destroy-role{{ $role->id }}"
                        method="post">
                        @csrf
                        @method('DELETE')
                    </form>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
