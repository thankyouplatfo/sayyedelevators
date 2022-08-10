@extends('admin.layouts.app')
@section('title', 'إدارة المحتوى')
@section('page-name', 'لوحة التحكم - الرئيسية لإدارة المحتوى')
@section('content')
    <div class="w3-section">
        <div class="w3-white w3-border w3-round w3-section w3-button w3-block w3-right-align w3-hover-light-grey w3-padding"
            onclick="myAccFunc('cms-welcome-page-parts')">
            <div class="w3-row">
                <div class="w3-col s8 m8 l8 w3-right">
                    <h2 class="w3-medium"><i class="fas fa-home"></i> الصفحة الرئيسية </h2>
                </div>
                <div class="w3-col s4 m4 l4 w3-right w3-left-align">
                    <i class="fa-solid fa-caret-down w3-xlarge" style="position: relative;top:10px"></i>
                </div>
            </div>

        </div>
        <div id="cms-welcome-page-parts" class="w3-white w3-border w3-round w3-margin-top w3-block w3-right-align w3-hide"
            onclick="myAccFunc('cms-welcome-page-parts')">
            <a href="{{ route('cms.welcome') }}" class="w3-bar-item w3-button w3-right-align w3-block"><i
                    class="fas w3-margin-left fa-home"></i>الكل</a>
            <a href="{{ route('headers.index') }}" class="w3-bar-item w3-button w3-right-align w3-block"><i
                    class="fas w3-margin-left fa-image"></i> صور رأس الصفحة</a>
            <a href="{{ route('projects.index') }}" class="w3-bar-item w3-button w3-right-align w3-block"><i
                    class="fa-solid w3-margin-left fa-diagram-project"></i> المشاريع</a>
            <a href="{{ route('about.index') }}" class="w3-bar-item w3-button w3-right-align w3-block"><i
                    class="fa-solid w3-margin-left fa-address-card"></i> عنا</a>
            <a href="{{ route('communications.index') }}" class="w3-bar-item w3-button w3-right-align w3-block"><i
                    class="fa-solid w3-margin-left fa-people-group"></i> تواصل معنا</a>
            <a href="{{ route('media.index') }}" class="w3-bar-item w3-button w3-right-align w3-block"><i
                    class="fa-solid w3-margin-left fa-hashtag"></i> التواصل الإجتماعي</a>
        </div>
    </div>
@endsection
