{{ $user->id }}
@extends('layouts.app')
@section('content')
    <div class="w3-content w3-right-align" style="max-width:1300px;direction: rtl!important">
        <!-- First Grid: Logo & About -->
        <div class="w3-row">
            <div class="w3-half w3-black w3-container w3-center" style="height:700px">
                <div class="w3-padding-64">
                    <h1>شعار</h1>
                </div>
                <div class="w3-padding-64">
                    <a href="#" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16">الرئيسية</a>
                    <a href="#work" class="w3-button w3-black w3-block w3-hover-teal w3-padding-16">أعمالي</a>
                    <a href="#work" class="w3-button w3-black w3-block w3-hover-dark-grey w3-padding-16">سيرة ذاتية</a>
                    <a href="#contact" class="w3-button w3-black w3-block w3-hover-brown w3-padding-16">التواصل</a>
                </div>
            </div>
            <div class="w3-half w3-blue-grey w3-container" style="height:700px">
                <div class="w3-padding-64 w3-center">
                    <h1>عني</h1>
                    <img src="{{ asset('images/temp/avatar3.png') }}" class="w3-margin w3-circle" alt="Person"
                        style="width:50%">
                    <div class="w3-left-align w3-padding-large">
                        <h1 class="w3-center">{{ $user->name }}</h1>
                        <p class="w3-right-align w3-jusify">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                            التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما
                            تريد، النص
                            لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Grid: Work & Resume -->
        <div class="w3-row">
            <div class="w3-half w3-light-grey w3-center" style="min-height:800px" id="work">
                <div class="w3-padding-16">
                    <h2>أعمالي</h2>
                    <p>بعض من أحدث مشاريعي.</p>
                </div>
                <div class="w3-row" style="max-height: 555px;overflow-y:auto!important">
                    <div class="w3-half">
                        <img src="{{ asset('images/temp/workbench (1).jpg') }}" style="width:100%">
                    </div>
                    <div class="w3-half">
                        <img src="{{ asset('images/temp/workbench.jpg') }}" style="width:100%">
                    </div>
                    <div class="w3-half">
                        <img src="{{ asset('images/temp/workbench (1).jpg') }}" style="width:100%">
                    </div>
                    <div class="w3-half">
                        <img src="{{ asset('images/temp/workbench.jpg') }}" style="width:100%">
                    </div>
                    <div class="w3-half">
                        <img src="{{ asset('images/temp/workbench (1).jpg') }}" style="width:100%">
                    </div>
                    <div class="w3-half">
                        <img src="{{ asset('images/temp/workbench.jpg') }}" style="width:100%">
                    </div>
                    <div class="w3-half">
                        <img src="{{ asset('images/temp/workbench (1).jpg') }}" style="width:100%">
                    </div>
                    <div class="w3-half">
                        <img src="{{ asset('images/temp/workbench.jpg') }}" style="width:100%">
                    </div>
                    <div class="w3-half">
                        <img src="{{ asset('images/temp/workbench (1).jpg') }}" style="width:100%">
                    </div>
                    <div class="w3-half">
                        <img src="{{ asset('images/temp/workbench.jpg') }}" style="width:100%">
                    </div>
                    <div class="w3-half">
                        <img src="{{ asset('images/temp/workbench (1).jpg') }}" style="width:100%">
                    </div>
                    <div class="w3-half">
                        <img src="{{ asset('images/temp/workbench.jpg') }}" style="width:100%">
                    </div>
                </div>
            </div>
            <div class="w3-half w3-indigo w3-container" style="min-height:800px">
                <div class="w3-padding-64 w3-center">
                    <h2>سيرة ذاتية</h2>
                    <p>مسودة من سيرتي الذاتية</p>
                    <div class="w3-container w3-responsive" style="max-height: 400px;overflow-y:auto!important">
                        <table class="w3-table-all">
                            <tr>
                                <th class="w3-center">المؤسسة/الشركة</th>
                                <th class="w3-center">اسم الوظيفة</th>
                                <th class="w3-center">السنة</th>
                            </tr>
                            <tr>
                                <td class="w3-center">Lorem ipsum</td>
                                <td class="w3-center">The rest is history..</td>
                                <td class="w3-center">2012-2016</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Third Grid: Swing By & Contact -->
        <div class="w3-row" id="contact">
            <div class="w3-col w3-dark-grey w3-container w3-center" style="height:700px">
                <div class="w3-padding-64">
                    <h1>التواصل</h1>
                </div>
                <div class="w3-padding-64">
                    <p>.. لفنجان من القهوة ، أو أيا كان.</p>
                    <p>Chicago, US</p>
                    <p>+00 1515151515</p>
                    <p>test@test.com</p>
                </div>
            </div>
        </div>

    </div>
@endsection
