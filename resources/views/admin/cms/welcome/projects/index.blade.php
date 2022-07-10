@extends('admin.layouts.app')
@section('title', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - المشاريع')
@section('page-name', 'لوحة التحكم - إدارة المحتوى - إدراة محتوى الصفحة الرئيسية - المشاريع')
@section('content')
    <div class="w3-bar w3-light-gery">
        <a href="{{ route('projects.create') }}" class=" w3-large w3-button w3-text-white w3-black w3-left w3-section"><i
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
            @foreach ($projects as $project)
                <tr>
                    <td class="w3-center">
                        {{ $project->id }}
                    </td>
                    <td
                        style="background-project: url({{ Str::contains($project->path, ['placeholder.com']) ? $project->path : asset('storage/' . $project->path) }});background-size:100% 100%;height:125px">
                    </td>
                    <td class="w3-center">
                        {{ $project->alt }}
                    </td>

                    <td class="w3-center">
                        <a href="{{ route('projects.show', $project->id) }}" target="_blank" class="w3-button w3-blue"><i
                                class="fas fa-eye"></i></a>
                    </td>
                    <td class="w3-center">
                        <a href="{{ route('projects.edit', $project->id) }}" class="w3-button w3-yellow"><i
                                class="fas fa-pencil"></i></a>
                    </td>
                    <td class="w3-center">
                        <button type="submit" form="destroy-header{{ $project->id }}" class="w3-button w3-red"><i
                                class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                    <form action="{{ route('projects.destroy', $project->id) }}" id="destroy-header{{ $project->id }}"
                        method="post">
                        @csrf
                        @method('DELETE')
                    </form>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
