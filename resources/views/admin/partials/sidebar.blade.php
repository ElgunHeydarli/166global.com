<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">



        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="/" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Əsas səhifə</span>
                    </a>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-settings-5-line"></i>
                        <span>Tənzimləmələr</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.setting')}}">Əlavə et</a></li>

                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-database-line"></i>
                        <span>Haqqımızda</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.about')}}">Əlavə et</a></li>

                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-gallery-fill"></i>
                        <span>Müştərilər</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.partner')}}">Hamısına bax</a></li>
                        <li><a href="{{route('admin.partner.create')}}">Əlavə et</a></li>


                    </ul>
                </li>





                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-image-add-line"></i>
                        <span>Slayder</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.slider')}}">Əlavə et</a></li>


                    </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-user-location-fill"></i>
                        <span>Ölkələr</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.olke')}}">Hamısına bax</a></li>
                        <li><a href="{{route('admin.olke.create')}}">Əlavə et</a></li>


                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-newspaper-line"></i>
                        <span>Xəbərlər</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.blog')}}">Hamısına bax</a></li>
                        <li><a href="{{route('admin.blog.create')}}">Əlavə et</a></li>


                    </ul>
                </li>







            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
