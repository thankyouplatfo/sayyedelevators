@extends('admin.layouts.app')
@section('title', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - المشاريع')
@section('page-name', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - المشاريع')
@section('content')
    <div class="w3-bar w3-light-gery">
        <a href="{{ route('headers.create') }}" class=" w3-large w3-button w3-text-white w3-black w3-left w3-section"><i
                class="fa fa-plus"></i></a>
    </div>
    <div class="w3-responsive">
        <table class="w3-table-all">
            <tr>
                <th class="w3-center">#</th>
                <th class="w3-center">الصورة</th>
                <th class="w3-center">النص البديل</th>
                <th class="w3-center">استعراض</th>
                <th class="w3-center">تحديث</th>
                <th class="w3-center">حذف</th>
            </tr>
            @foreach ($images as $image)
                <tr>
                    <td class="w3-center">
                        {{ $image->id }}
                    </td>
                    <td
                        style="background-image: url({{ Str::contains($image->path, ['placeholder.com']) ? $image->path : asset('storage/' . $image->path) }});background-size:100% 100%;height:125px">
                    </td>
                    <td class="w3-center">
                        {{ $image->alt }}
                    </td>

                    <td class="w3-center">
                        <a href="{{ route('headers.show', $image->id) }}" target="_blank" class="w3-button w3-blue"><i
                                class="fas fa-eye"></i></a>
                    </td>
                    <td class="w3-center">
                        <a href="{{ route('headers.edit', $image->id) }}" class="w3-button w3-yellow"><i
                                class="fas fa-pencil"></i></a>
                    </td>
                    <td class="w3-center">
                        <button type="submit" form="destroy-header{{ $image->id }}" class="w3-button w3-red"><i
                                class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                    <form action="{{ route('headers.destroy', $image->id) }}" id="destroy-header{{ $image->id }}"
                        method="post">
                        @csrf
                        @method('DELETE')
                    </form>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
