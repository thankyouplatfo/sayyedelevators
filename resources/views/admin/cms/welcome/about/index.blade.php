@extends('admin.layouts.app')
@section('title', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - عنا')
@section('page-name', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - عنا')
@section('content')
    <div class="w3-bar w3-light-gery">
        <a href="{{ route('about.create') }}" class=" w3-large w3-button w3-text-white w3-black w3-left w3-section"><i
                class="fa fa-plus"></i></a>
    </div>
    <div class="w3-responsive">
        <table class="w3-table-all">
            <tr>
                <th class="w3-center">#</th>
                <th class="w3-center">النص</th>
                <th class="w3-center">استعراض</th>
                <th class="w3-center">تحديث</th>
                <th class="w3-center">حذف</th>
            </tr>
            @foreach ($about as $about)
                <tr>
                    <td class="w3-center">
                        {{ $about->id }}
                    </td>
                    <td class="w3-right-align" dir="rtl">
                        {{ Str::limit($about->description, 255, '...') }}
                    </td>

                    <td class="w3-center">
                        <a href="{{ route('about.show', $about->id) }}" target="_blank" class="w3-button w3-blue"><i
                                class="fas fa-eye"></i></a>
                    </td>
                    <td class="w3-center">
                        <a href="{{ route('about.edit', $about->id) }}" class="w3-button w3-yellow"><i
                                class="fas fa-pencil"></i></a>
                    </td>
                    <td class="w3-center">
                        <button type="submit" form="destroy-header{{ $about->id }}" class="w3-button w3-red"><i
                                class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                    <form action="{{ route('about.destroy', $about->id) }}" id="destroy-header{{ $about->id }}"
                        method="post">
                        @csrf
                        @method('DELETE')
                    </form>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
