<div class="scrollbar side-menu-bg" style="overflow: scroll">
    <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
            <a href="{{ url('/teacher/dashboard') }}">
                <div class="pull-left"><i class="ti-home"></i><span
                        class="right-nav-text">{{trans('main_trans.Dashboard')}}</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{trans('main_trans.Programname')}} </li>

        <!-- الطلاب-->
        <li>
            <a href="#"><i class="fas fa-user-graduate"></i><span
                    class="right-nav-text">الطلاب</span></a>
        </li>


        <!-- الامتحانات-->
        <li>
            <a href="{{route('settings.index')}}"><i class="fas fa-book-open"></i><span
                    class="right-nav-text">الامتحانات</span></a>
        </li>

        <!-- الملف الشخصي-->
        <li>
            <a href="{{route('settings.index')}}"><i class="fas fa-id-card-alt"></i><span
                    class="right-nav-text">الملف الشخصي</span></a>
        </li>

    </ul>
</div>
