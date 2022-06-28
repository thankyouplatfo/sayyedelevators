@extends('admin.layouts.app')
@section('title', 'لوحة التحكم - الرئيسية لإدارة المحتوى')
@section('page-name', 'لوحة التحكم - الرئيسية لإدارة المحتوى')
@section('content')
    <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter w3-right">
            <div class="w3-container w3-right-align w3-red w3-padding-16">
                <div class="w3-left"><i class="fa fa-home w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <a href="{{ route('cms.welcome') }}"></a>
                </div>
                <div class="w3-clear"></div>
                <h4>انتقل لإدارة محتوى الصفحة الرئيسية</h4>
            </div>
        </div>
        <div class="w3-quarter w3-right">
            <div class="w3-container w3-right-align w3-blue w3-padding-16">
                <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3>99</h3>
                </div>
                <div class="w3-clear"></div>
                <h4>Views</h4>
            </div>
        </div>
        <div class="w3-quarter w3-right">
            <div class="w3-container w3-right-align w3-teal w3-padding-16">
                <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3>23</h3>
                </div>
                <div class="w3-clear"></div>
                <h4>Shares</h4>
            </div>
        </div>
        <div class="w3-quarter w3-right">
            <div class="w3-container w3-right-align w3-orange w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3>50</h3>
                </div>
                <div class="w3-clear"></div>
                <h4>Users</h4>
            </div>
        </div>
    </div>
@endsection
