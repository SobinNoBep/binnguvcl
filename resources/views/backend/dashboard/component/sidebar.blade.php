<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="default.html" target="_blank">
    <img src="{{asset('admin/assets/img/logo-ct-dark.png')}}" class="navbar-brand-img h-100" alt="main_logo">
    <span class="ms-1 font-weight-bold">Argon Dashboard 2 PRO</span>
    </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
    <li class="nav-item">
    <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link active" aria-controls="dashboardsExamples" role="button" aria-expanded="false">
    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
    <i class="ni ni-shop text-primary text-sm opacity-10"></i>
    </div>
    <span class="nav-link-text ms-1">Quản lí thành viên</span>
    </a>
    <div class="collapse  show " id="dashboardsExamples">
    <ul class="nav ms-4">
    <li class="nav-item ">
    <a class="nav-link " href="landing-2.html">
    <span class="sidenav-mini-icon"> L </span>
    <span class="sidenav-normal"> Nhóm thành viên </span>
    </a>
    </li>
    <li class="nav-item active">
    <a class="nav-link active" href="{{route('user.index')}}">
    <span class="sidenav-mini-icon"> D </span>
    <span class="sidenav-normal"> Thành viên </span>
    </a>
    </li>
    </div>
    </aside>