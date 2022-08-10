@extends('admin.layouts.app')
@section('title', 'لوحة التحكم - الرئيسية')
@section('page-name', 'لوحة التحكم - الرئيسية')
@section('content')
    <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter w3-right">
            <div class="w3-container w3-orange w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3>{{ $countUsers }}</h3>
                </div>
                <div class="w3-clear"></div>
                <h4>المستخدمين</h4>
            </div>
        </div>
    </div>
@endsection
@section('script')
