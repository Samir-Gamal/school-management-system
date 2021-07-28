<html class="no-js" lang="zxx" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('Site.layouts.head')
</head>

<body data-spy="scroll" data-target=".navigation_area" style="font-family: 'Cairo', sans-serif;">

<!--~~~~~ Start Preloader Area ~~~~~-->
<div id="preloader">
    <div class="loader_line"></div>
</div>
<!--~./ end prealoader area ~-->

<div class="site_wrapper bg_white">
    <!--~~~~~ Start Contact Area ~~~~~-->
    <section id="contact" class="contact_area bg_gray section_scroll pt-110" data-scroll-index="6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title_area text-center pb-10">
                        <h2 style="font-family: 'Cairo', sans-serif;">الاشتراك في كورس برنامج المستشفيات</h2>
                        <h2 style="font-family: 'Cairo'; color: red;">تم اغلاق باب الحجز سيتم الاعلان قريبا </h2>
                    </div>
                    @if (session()->has('Error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('Error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="contact_form_area bg_white mt-110">
{{--            <div class="container">--}}
{{--                <div class="row" style="text-align: right">--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <br> <br> <br>--}}
{{--                        <form action="{{ route('confirmation.Register') }}" method="post" autocomplete="off">--}}
{{--                            @csrf--}}
{{--                            <div class="form-row">--}}
{{--                                <div class="form-group col-md-6">--}}
{{--                                    <label for="name">الاسم ثلاثي باللغة العربية</label>--}}
{{--                                    <input type="text" class="form-control" value="{{ old('name') }}" id="name"--}}
{{--                                           name="name">--}}
{{--                                    @error('name')--}}
{{--                                    <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="form-group col-md-6">--}}
{{--                                    <label for="email">البريد الالكتروني gmail</label>--}}
{{--                                    <input type="email" class="form-control" value="{{ old('email') }}" id="email"--}}
{{--                                           name="email">--}}
{{--                                    @error('email')--}}
{{--                                    <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-row">--}}
{{--                                <div class="form-group col-md-6">--}}
{{--                                    <label for="Qualification">المؤهل الدراسي</label>--}}
{{--                                    <input type="text" class="form-control" value="{{ old('Qualification') }}"--}}
{{--                                           id="Qualification" name="Qualification">--}}
{{--                                    @error('Qualification')--}}
{{--                                    <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}

{{--                                <div class="form-group col-md-6">--}}
{{--                                    <label for="phone">رقم الهاتف مثال (002)</label>--}}
{{--                                    <input type="text" class="form-control" name="phone"--}}
{{--                                           value="{{ old('phone') }}" id="phone">--}}
{{--                                    @error('phone')--}}
{{--                                    <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-row">--}}
{{--                                <div class="form-group col-md-6">--}}
{{--                                    <label for="Country">الدولة</label>--}}
{{--                                    <select id="Country" required name="Country" class="form-control"--}}
{{--                                            value="{{ old('Country') }}">--}}
{{--                                        <option value="" disabled selected>إختر</option>--}}
{{--                                        <option value="أفغانستان">أفغانستان</option>--}}
{{--                                        <option value="ألبانيا">ألبانيا</option>--}}
{{--                                        <option value="الجزائر">الجزائر</option>--}}
{{--                                        <option value="أندورا">أندورا</option>--}}
{{--                                        <option value="أنغولا">أنغولا</option>--}}
{{--                                        <option value="أنتيغوا وباربودا">أنتيغوا وباربودا</option>--}}
{{--                                        <option value="الأرجنتين">الأرجنتين</option>--}}
{{--                                        <option value="أرمينيا">أرمينيا</option>--}}
{{--                                        <option value="أستراليا">أستراليا</option>--}}
{{--                                        <option value="النمسا">النمسا</option>--}}
{{--                                        <option value="أذربيجان">أذربيجان</option>--}}
{{--                                        <option value="البهاما">البهاما</option>--}}
{{--                                        <option value="البحرين">البحرين</option>--}}
{{--                                        <option value="بنغلاديش">بنغلاديش</option>--}}
{{--                                        <option value="باربادوس">باربادوس</option>--}}
{{--                                        <option value="بيلاروسيا">بيلاروسيا</option>--}}
{{--                                        <option value="بلجيكا">بلجيكا</option>--}}
{{--                                        <option value="بليز">بليز</option>--}}
{{--                                        <option value="بنين">بنين</option>--}}
{{--                                        <option value="بوتان">بوتان</option>--}}
{{--                                        <option value="بوليفيا">بوليفيا</option>--}}
{{--                                        <option value="البوسنة والهرسك ">البوسنة والهرسك </option>--}}
{{--                                        <option value="بوتسوانا">بوتسوانا</option>--}}
{{--                                        <option value="البرازيل">البرازيل</option>--}}
{{--                                        <option value="بروناي">بروناي</option>--}}
{{--                                        <option value="بلغاريا">بلغاريا</option>--}}
{{--                                        <option value="بوركينا فاسو ">بوركينا فاسو </option>--}}
{{--                                        <option value="بوروندي">بوروندي</option>--}}
{{--                                        <option value="كمبوديا">كمبوديا</option>--}}
{{--                                        <option value="الكاميرون">الكاميرون</option>--}}
{{--                                        <option value="كندا">كندا</option>--}}
{{--                                        <option value="الرأس الأخضر">الرأس الأخضر</option>--}}
{{--                                        <option value="جمهورية أفريقيا الوسطى ">جمهورية أفريقيا الوسطى </option>--}}
{{--                                        <option value="تشاد">تشاد</option>--}}
{{--                                        <option value="تشيلي">تشيلي</option>--}}
{{--                                        <option value="الصين">الصين</option>--}}
{{--                                        <option value="كولومبيا">كولومبيا</option>--}}
{{--                                        <option value="جزر القمر">جزر القمر</option>--}}
{{--                                        <option value="كوستاريكا">كوستاريكا</option>--}}
{{--                                        <option value="ساحل العاج">ساحل العاج</option>--}}
{{--                                        <option value="كرواتيا">كرواتيا</option>--}}
{{--                                        <option value="كوبا">كوبا</option>--}}
{{--                                        <option value="قبرص">قبرص</option>--}}
{{--                                        <option value="التشيك">التشيك</option>--}}
{{--                                        <option value="جمهورية الكونغو الديمقراطية">جمهورية الكونغو الديمقراطية--}}
{{--                                        </option>--}}
{{--                                        <option value="الدنمارك">الدنمارك</option>--}}
{{--                                        <option value="جيبوتي">جيبوتي</option>--}}
{{--                                        <option value="دومينيكا">دومينيكا</option>--}}
{{--                                        <option value="جمهورية الدومينيكان">جمهورية الدومينيكان</option>--}}
{{--                                        <option value="تيمور الشرقية ">تيمور الشرقية </option>--}}
{{--                                        <option value="الإكوادور">الإكوادور</option>--}}
{{--                                        <option value="مصر">مصر</option>--}}
{{--                                        <option value="السلفادور">السلفادور</option>--}}
{{--                                        <option value="غينيا الاستوائية">غينيا الاستوائية</option>--}}
{{--                                        <option value="إريتريا">إريتريا</option>--}}
{{--                                        <option value="إستونيا">إستونيا</option>--}}
{{--                                        <option value="إثيوبيا">إثيوبيا</option>--}}
{{--                                        <option value="فيجي">فيجي</option>--}}
{{--                                        <option value="فنلندا">فنلندا</option>--}}
{{--                                        <option value="فرنسا">فرنسا</option>--}}
{{--                                        <option value="الغابون">الغابون</option>--}}
{{--                                        <option value="غامبيا">غامبيا</option>--}}
{{--                                        <option value="جورجيا">جورجيا</option>--}}
{{--                                        <option value="ألمانيا">ألمانيا</option>--}}
{{--                                        <option value="غانا">غانا</option>--}}
{{--                                        <option value="اليونان">اليونان</option>--}}
{{--                                        <option value="جرينادا">جرينادا</option>--}}
{{--                                        <option value="غواتيمالا">غواتيمالا</option>--}}
{{--                                        <option value="غينيا">غينيا</option>--}}
{{--                                        <option value="غينيا بيساو">غينيا بيساو</option>--}}
{{--                                        <option value="غويانا">غويانا</option>--}}
{{--                                        <option value="هايتي">هايتي</option>--}}
{{--                                        <option value="هندوراس">هندوراس</option>--}}
{{--                                        <option value="المجر">المجر</option>--}}
{{--                                        <option value="آيسلندا">آيسلندا</option>--}}
{{--                                        <option value="الهند">الهند</option>--}}
{{--                                        <option value="إندونيسيا">إندونيسيا</option>--}}
{{--                                        <option value="إيران">إيران</option>--}}
{{--                                        <option value="العراق">العراق</option>--}}
{{--                                        <option value="جمهورية أيرلندا ">جمهورية أيرلندا </option>--}}
{{--                                        <option value="فلسطين">فلسطين</option>--}}
{{--                                        <option value="إيطاليا">إيطاليا</option>--}}
{{--                                        <option value="جامايكا">جامايكا</option>--}}
{{--                                        <option value="اليابان">اليابان</option>--}}
{{--                                        <option value="الأردن">الأردن</option>--}}
{{--                                        <option value="كازاخستان">كازاخستان</option>--}}
{{--                                        <option value="كينيا">كينيا</option>--}}
{{--                                        <option value="كيريباتي">كيريباتي</option>--}}
{{--                                        <option value="الكويت">الكويت</option>--}}
{{--                                        <option value="قرغيزستان">قرغيزستان</option>--}}
{{--                                        <option value="لاوس">لاوس</option>--}}
{{--                                        <option value="لاوس">لاوس</option>--}}
{{--                                        <option value="لاتفيا">لاتفيا</option>--}}
{{--                                        <option value="لبنان">لبنان</option>--}}
{{--                                        <option value="ليسوتو">ليسوتو</option>--}}
{{--                                        <option value="ليبيريا">ليبيريا</option>--}}
{{--                                        <option value="ليبيا">ليبيا</option>--}}
{{--                                        <option value="ليختنشتاين">ليختنشتاين</option>--}}
{{--                                        <option value="ليتوانيا">ليتوانيا</option>--}}
{{--                                        <option value="لوكسمبورغ">لوكسمبورغ</option>--}}
{{--                                        <option value="مدغشقر">مدغشقر</option>--}}
{{--                                        <option value="مالاوي">مالاوي</option>--}}
{{--                                        <option value="ماليزيا">ماليزيا</option>--}}
{{--                                        <option value="جزر المالديف">جزر المالديف</option>--}}
{{--                                        <option value="مالي">مالي</option>--}}
{{--                                        <option value="مالطا">مالطا</option>--}}
{{--                                        <option value="جزر مارشال">جزر مارشال</option>--}}
{{--                                        <option value="موريتانيا">موريتانيا</option>--}}
{{--                                        <option value="موريشيوس">موريشيوس</option>--}}
{{--                                        <option value="المكسيك">المكسيك</option>--}}
{{--                                        <option value="مايكرونيزيا">مايكرونيزيا</option>--}}
{{--                                        <option value="مولدوفا">مولدوفا</option>--}}
{{--                                        <option value="موناكو">موناكو</option>--}}
{{--                                        <option value="منغوليا">منغوليا</option>--}}
{{--                                        <option value="الجبل الأسود">الجبل الأسود</option>--}}
{{--                                        <option value="المغرب">المغرب</option>--}}
{{--                                        <option value="موزمبيق">موزمبيق</option>--}}
{{--                                        <option value="بورما">بورما</option>--}}
{{--                                        <option value="ناميبيا">ناميبيا</option>--}}
{{--                                        <option value="ناورو">ناورو</option>--}}
{{--                                        <option value="نيبال">نيبال</option>--}}
{{--                                        <option value="هولندا">هولندا</option>--}}
{{--                                        <option value="نيوزيلندا">نيوزيلندا</option>--}}
{{--                                        <option value="نيكاراجوا">نيكاراجوا</option>--}}
{{--                                        <option value="النيجر">النيجر</option>--}}
{{--                                        <option value="نيجيريا">نيجيريا</option>--}}
{{--                                        <option value="كوريا الشمالية ">كوريا الشمالية </option>--}}
{{--                                        <option value="النرويج">النرويج</option>--}}
{{--                                        <option value="سلطنة عمان">سلطنة عمان</option>--}}
{{--                                        <option value="باكستان">باكستان</option>--}}
{{--                                        <option value="بالاو">بالاو</option>--}}
{{--                                        <option value="بنما">بنما</option>--}}
{{--                                        <option value="بابوا غينيا الجديدة">بابوا غينيا الجديدة</option>--}}
{{--                                        <option value="باراغواي">باراغواي</option>--}}
{{--                                        <option value="بيرو">بيرو</option>--}}
{{--                                        <option value="الفلبين">الفلبين</option>--}}
{{--                                        <option value="بولندا">بولندا</option>--}}
{{--                                        <option value="البرتغال">البرتغال</option>--}}
{{--                                        <option value="قطر">قطر</option>--}}
{{--                                        <option value="جمهورية الكونغو">جمهورية الكونغو</option>--}}
{{--                                        <option value="جمهورية مقدونيا">جمهورية مقدونيا</option>--}}
{{--                                        <option value="رومانيا">رومانيا</option>--}}
{{--                                        <option value="روسيا">روسيا</option>--}}
{{--                                        <option value="رواندا">رواندا</option>--}}
{{--                                        <option value="سانت كيتس ونيفيس">سانت كيتس ونيفيس</option>--}}
{{--                                        <option value="سانت لوسيا">سانت لوسيا</option>--}}
{{--                                        <option value="سانت فنسينت والجرينادينز">سانت فنسينت والجرينادينز</option>--}}
{{--                                        <option value="ساموا">ساموا</option>--}}
{{--                                        <option value="سان مارينو">سان مارينو</option>--}}
{{--                                        <option value="ساو تومي وبرينسيب">ساو تومي وبرينسيب</option>--}}
{{--                                        <option value="السعودية">السعودية</option>--}}
{{--                                        <option value="السنغال">السنغال</option>--}}
{{--                                        <option value="صربيا">صربيا</option>--}}
{{--                                        <option value="سيشيل">سيشيل</option>--}}
{{--                                        <option value="سيراليون">سيراليون</option>--}}
{{--                                        <option value="سنغافورة">سنغافورة</option>--}}
{{--                                        <option value="سلوفاكيا">سلوفاكيا</option>--}}
{{--                                        <option value="سلوفينيا">سلوفينيا</option>--}}
{{--                                        <option value="جزر سليمان">جزر سليمان</option>--}}
{{--                                        <option value="الصومال">الصومال</option>--}}
{{--                                        <option value="جنوب أفريقيا">جنوب أفريقيا</option>--}}
{{--                                        <option value="كوريا الجنوبية">كوريا الجنوبية</option>--}}
{{--                                        <option value="جنوب السودان">جنوب السودان</option>--}}
{{--                                        <option value="إسبانيا">إسبانيا</option>--}}
{{--                                        <option value="سريلانكا">سريلانكا</option>--}}
{{--                                        <option value="السودان">السودان</option>--}}
{{--                                        <option value="سورينام">سورينام</option>--}}
{{--                                        <option value="سوازيلاند">سوازيلاند</option>--}}
{{--                                        <option value="السويد">السويد</option>--}}
{{--                                        <option value="سويسرا">سويسرا</option>--}}
{{--                                        <option value="سوريا">سوريا</option>--}}
{{--                                        <option value="طاجيكستان">طاجيكستان</option>--}}
{{--                                        <option value="تنزانيا">تنزانيا</option>--}}
{{--                                        <option value="تايلاند">تايلاند</option>--}}
{{--                                        <option value="توغو">توغو</option>--}}
{{--                                        <option value="تونجا">تونجا</option>--}}
{{--                                        <option value="ترينيداد وتوباغو">ترينيداد وتوباغو</option>--}}
{{--                                        <option value="تونس">تونس</option>--}}
{{--                                        <option value="تركيا">تركيا</option>--}}
{{--                                        <option value="تركمانستان">تركمانستان</option>--}}
{{--                                        <option value="توفالو">توفالو</option>--}}
{{--                                        <option value="أوغندا">أوغندا</option>--}}
{{--                                        <option value="أوكرانيا">أوكرانيا</option>--}}
{{--                                        <option value="الإمارات العربية المتحدة">الإمارات العربية المتحدة</option>--}}
{{--                                        <option value="المملكة المتحدة">المملكة المتحدة</option>--}}
{{--                                        <option value="الولايات المتحدة">الولايات المتحدة</option>--}}
{{--                                        <option value="أوروغواي">أوروغواي</option>--}}
{{--                                        <option value="أوزبكستان">أوزبكستان</option>--}}
{{--                                        <option value="فانواتو">فانواتو</option>--}}
{{--                                        <option value="فنزويلا">فنزويلا</option>--}}
{{--                                        <option value="فيتنام">فيتنام</option>--}}
{{--                                        <option value="اليمن">اليمن</option>--}}
{{--                                        <option value="زامبيا">زامبيا</option>--}}
{{--                                        <option value="زيمبابوي">زيمبابوي</option>--}}
{{--                                    </select>--}}
{{--                                    @error('Country')--}}
{{--                                    <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="form-group col-md-6">--}}
{{--                                    <label for="City">المدينة</label>--}}
{{--                                    <input type="text" class="form-control" id="City" value="{{ old('City') }}"--}}
{{--                                           name="City">--}}
{{--                                    @error('City')--}}
{{--                                    <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <button type="submit" class="btn btn-success">تسجيل</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>
    <!--~./ end contact area ~-->
</div>
<!--~~/. end site wrapper ~~-->

@include('Site.layouts.footer')
@include('Site.layouts.footer-scripts')

</body>

</html>
