@extends('admin.layouts.app')
@section('title', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - التواصل الإجتماعي')
@section('page-name', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - التواصل الإجتماعي')
@section('content')
    <div class="w3-bar w3-light-gery">
        <a href="{{ route('media.create') }}" class=" w3-large w3-button w3-text-white w3-black w3-left w3-section"><i
                class="fa fa-plus"></i></a>
        <a href="https://fontawesome.com/search?m=free"
            class="w3-large w3-button w3-text-white w3-black w3-left w3-section w3-margin-left" target="_blank"><i
                class="fa-solid fa-font-awesome"></i></a>
    </div>
    <div class="w3-responsive">
        <table class="w3-table-all">
            <tr>
                <th class="w3-center">#</th>
                <th class="w3-center">الشكل</th>
                <th class="w3-center">استعراض</th>
                <th class="w3-center">تحديث</th>
                <th class="w3-center">حذف</th>
            </tr>
            @foreach ($medium as $medium)
                <tr>
                    <td class="w3-center">
                        {{ $medium->id }}
                    </td>
                    <td class="w3-center"><a href="{{ $medium->url }}" target="_blank" class="w3-button w3-black">{!! $medium->ff_code !!}</a>
                    </td>
                    <td class="w3-center">
                        <a href="{{ route('media.show', $medium->id) }}" target="_blank" class="w3-button w3-blue"><i
                                class="fas fa-eye"></i></a>
                    </td>
                    <td class="w3-center">
                        <a href="{{ route('media.edit', $medium->id) }}" class="w3-button w3-yellow"><i
                                class="fas fa-pencil"></i></a>
                    </td>
                    <td class="w3-center">
                        <button type="submit" form="destroy-header{{ $medium->id }}" class="w3-button w3-red"><i
                                class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                    <form action="{{ route('media.destroy', $medium->id) }}" id="destroy-header{{ $medium->id }}"
                        method="post">
                        @csrf
                        @method('DELETE')
                    </form>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
