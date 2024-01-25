@extends('themes.OneUI.layouts.default')
@section('content')
        <main id="main-container">
            <!-- Navigation -->
            <div class="bg-primary-darker">
                <div class="bg-black-10">
                    <div class="content py-3">
                        <!-- Toggle Main Navigation -->
                        <div class="d-lg-none">
                            <!-- Class Toggle, functionality initialized in Helpers.oneToggleClass() -->
                            <button type="button" class="btn w-100 btn-alt-secondary d-flex justify-content-between align-items-center" data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                                Menu
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <!-- END Toggle Main Navigation -->

                        <!-- Main Navigation -->
                        <div id="main-navigation" class="d-none d-lg-block mt-2 mt-lg-0">
                            <ul class="nav-main nav-main-dark nav-main-horizontal nav-main-hover">
                                <li class="nav-main-item">
                                    <a class="nav-main-link active" href="bd_dashboard.html">
                                        <i class="nav-main-link-icon si si-compass"></i>
                                        <span class="nav-main-link-name">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-main-heading">Pages</li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                        <i class="nav-main-link-icon si si-puzzle"></i>
                                        <span class="nav-main-link-name">Variations</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_simple_1.html">
                                                <span class="nav-main-link-name">Simple 1</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_simple_2.html">
                                                <span class="nav-main-link-name">Simple 2</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_image_1.html">
                                                <span class="nav-main-link-name">Image 1</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_image_2.html">
                                                <span class="nav-main-link-name">Image 2</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_video_1.html">
                                                <span class="nav-main-link-name">Video 1</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_video_2.html">
                                                <span class="nav-main-link-name">Video 2</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                                <span class="nav-main-link-name">More Options</span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="javascript:void(0)">
                                                        <span class="nav-main-link-name">Another Link</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="javascript:void(0)">
                                                        <span class="nav-main-link-name">Another Link</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="javascript:void(0)">
                                                        <span class="nav-main-link-name">Another Link</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="bd_search.html">
                                        <i class="nav-main-link-icon si si-magnifier"></i>
                                        <span class="nav-main-link-name">Search</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_dashboard.html">
                                        <i class="nav-main-link-icon si si-action-undo"></i>
                                        <span class="nav-main-link-name">Go Back</span>
                                    </a>
                                </li>
                                <li class="nav-main-heading">Extra</li>
                                <li class="nav-main-item ms-lg-auto">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                        <i class="nav-main-link-icon fa fa-brush"></i>
                                        <span class="nav-main-link-name d-lg-none">Themes</span>
                                    </a>
                                    <ul class="nav-main-submenu nav-main-submenu-right">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" data-toggle="theme" data-theme="default" href="#">
                                                <i class="nav-main-link-icon fa fa-square text-default"></i>
                                                <span class="nav-main-link-name">Default</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" href="#">
                                                <i class="nav-main-link-icon fa fa-square text-amethyst"></i>
                                                <span class="nav-main-link-name">Amethyst</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#">
                                                <i class="nav-main-link-icon fa fa-square text-city"></i>
                                                <span class="nav-main-link-name">City</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#">
                                                <i class="nav-main-link-icon fa fa-square text-flat"></i>
                                                <span class="nav-main-link-name">Flat</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#">
                                                <i class="nav-main-link-icon fa fa-square text-modern"></i>
                                                <span class="nav-main-link-name">Modern</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" href="#">
                                                <i class="nav-main-link-icon fa fa-square text-smooth"></i>
                                                <span class="nav-main-link-name">Smooth</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- END Main Navigation -->
                    </div>
                </div>
            </div>
            <!-- END Navigation -->
            <!-- Page Content -->
            <div class="content">
                <!-- Stats -->
                <div class="row">
                    <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                            <div class="block-content block-content-full">
                                <div class="fs-sm fw-semibold text-uppercase text-muted">Visitors</div>
                                <div class="fs-2 fw-normal text-dark">120,580</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                            <div class="block-content block-content-full">
                                <div class="fs-sm fw-semibold text-uppercase text-muted">Sales</div>
                                <div class="fs-2 fw-normal text-dark">150</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                            <div class="block-content block-content-full">
                                <div class="fs-sm fw-semibold text-uppercase text-muted">Earnings</div>
                                <div class="fs-2 fw-normal text-dark">$3,200</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                            <div class="block-content block-content-full">
                                <div class="fs-sm fw-semibold text-uppercase text-muted">Avg Sale</div>
                                <div class="fs-2 fw-normal text-dark">$21</div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- END Stats -->

                <!-- Dashboard Charts -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="block block-rounded block-mode-loading-oneui">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Earnings in $</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option">
                                        <i class="si si-settings"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content p-0 text-center">
                                <!-- Chart.js is initialized in js/pages/be_pages_dashboard_v1.min.js which was auto compiled from _js/pages/be_pages_dashboard_v1.js) -->
                                <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                <div class="pt-3" style="height: 360px;"><canvas id="js-chartjs-dashboard-earnings"></canvas></div>
                            </div>
                            <div class="block-content">
                                <div class="row items-push text-center py-3">
                                    <div class="col-6 col-xl-3">
                                        <i class="fa fa-wallet fa-2x text-muted"></i>
                                        <div class="text-muted mt-3">$148,000</div>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="fa fa-angle-double-up fa-2x text-muted"></i>
                                        <div class="text-muted mt-3">+9% Earnings</div>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="fa fa-ticket-alt fa-2x text-muted"></i>
                                        <div class="text-muted mt-3">+20% Tickets</div>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="fa fa-users fa-2x text-muted"></i>
                                        <div class="text-muted mt-3">+46% Clients</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="block block-rounded block-mode-loading-oneui">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Sales</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option">
                                        <i class="si si-settings"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content p-0 text-center">
                                <!-- Chart.js is initialized in js/pages/be_pages_dashboard_v1.min.js which was auto compiled from _js/pages/be_pages_dashboard_v1.js) -->
                                <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                <div class="pt-3" style="height: 360px;"><canvas id="js-chartjs-dashboard-sales"></canvas></div>
                            </div>
                            <div class="block-content">
                                <div class="row items-push text-center py-3">
                                    <div class="col-6 col-xl-3">
                                        <i class="fab fa-wordpress fa-2x text-muted"></i>
                                        <div class="text-muted mt-3">+20% Themes</div>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="fa fa-font fa-2x text-muted"></i>
                                        <div class="text-muted mt-3">+25% Fonts</div>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="fa fa-archive fa-2x text-muted"></i>
                                        <div class="text-muted mt-3">-10% Icons</div>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <i class="fa fa-paint-brush fa-2x text-muted"></i>
                                        <div class="text-muted mt-3">+8% Graphics</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Dashboard Charts -->

                <!-- Customers and Latest Orders -->
                <div class="row items-push">
                    <!-- Latest Customers -->
                    <div class="col-lg-6">
                        <div class="block block-rounded block-mode-loading-oneui h-100 mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Latest Customers</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option">
                                        <i class="si si-settings"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <table class="table table-striped table-hover table-borderless table-vcenter fs-sm mb-0">
                                    <thead>
                                    <tr class="text-uppercase">
                                        <th class="fw-bold" style="width: 80px;">ID</th>
                                        <th class="d-none d-sm-table-cell fw-bold text-center" style="width: 100px;">Photo</th>
                                        <th class="fw-bold">Name</th>
                                        <th class="d-none d-sm-table-cell fw-bold text-center" style="width: 80px;">Orders</th>
                                        <th class="fw-bold text-center" style="width: 60px;"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <span class="fw-semibold">#01368</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell text-center">
                                            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar12.jpg" alt="">
                                        </td>
                                        <td class="fw-semibold">
                                            Jose Wagner                </td>
                                        <td class="d-none d-sm-table-cell text-center">
                                            <a class="link-fx fw-semibold" href="javascript:void(0)">5</a>
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-semibold">#01368</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell text-center">
                                            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar7.jpg" alt="">
                                        </td>
                                        <td class="fw-semibold">
                                            Amber Harvey                </td>
                                        <td class="d-none d-sm-table-cell text-center">
                                            <a class="link-fx fw-semibold" href="javascript:void(0)">14</a>
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-semibold">#01368</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell text-center">
                                            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar9.jpg" alt="">
                                        </td>
                                        <td class="fw-semibold">
                                            Albert Ray                </td>
                                        <td class="d-none d-sm-table-cell text-center">
                                            <a class="link-fx fw-semibold" href="javascript:void(0)">15</a>
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-semibold">#01368</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell text-center">
                                            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar1.jpg" alt="">
                                        </td>
                                        <td class="fw-semibold">
                                            Alice Moore                </td>
                                        <td class="d-none d-sm-table-cell text-center">
                                            <a class="link-fx fw-semibold" href="javascript:void(0)">36</a>
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-semibold">#01368</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell text-center">
                                            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar11.jpg" alt="">
                                        </td>
                                        <td class="fw-semibold">
                                            Jack Estrada                </td>
                                        <td class="d-none d-sm-table-cell text-center">
                                            <a class="link-fx fw-semibold" href="javascript:void(0)">3</a>
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-semibold">#01368</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell text-center">
                                            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar3.jpg" alt="">
                                        </td>
                                        <td class="fw-semibold">
                                            Amber Harvey                </td>
                                        <td class="d-none d-sm-table-cell text-center">
                                            <a class="link-fx fw-semibold" href="javascript:void(0)">1</a>
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-semibold">#01368</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell text-center">
                                            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar9.jpg" alt="">
                                        </td>
                                        <td class="fw-semibold">
                                            Ralph Murray                </td>
                                        <td class="d-none d-sm-table-cell text-center">
                                            <a class="link-fx fw-semibold" href="javascript:void(0)">12</a>
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END Latest Customers -->

                    <!-- Latest Orders -->
                    <div class="col-lg-6">
                        <div class="block block-rounded block-mode-loading-oneui h-100 mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Latest Orders</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option">
                                        <i class="si si-settings"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <table class="table table-striped table-hover table-borderless table-vcenter fs-sm mb-0">
                                    <thead>
                                    <tr class="text-uppercase">
                                        <th class="fw-bold">ID</th>
                                        <th class="d-none d-sm-table-cell fw-bold">Date</th>
                                        <th class="fw-bold">State</th>
                                        <th class="d-none d-sm-table-cell fw-bold text-end" style="width: 120px;">Price</th>
                                        <th class="fw-bold text-center" style="width: 60px;"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <span class="fw-semibold">#07835</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="fs-sm text-muted">today</span>
                                        </td>
                                        <td>
                                            <span class="fw-semibold text-warning">Pending..</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell text-end">
                                            $999,99
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-semibold">#07834</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="fs-sm text-muted">today</span>
                                        </td>
                                        <td>
                                            <span class="fw-semibold text-warning">Pending..</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell text-end">
                                            $2.299,00
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-semibold">#07833</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="fs-sm text-muted">today</span>
                                        </td>
                                        <td>
                                            <span class="fw-semibold text-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell text-end">
                                            $1200,00
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-semibold">#07832</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="fs-sm text-muted">today</span>
                                        </td>
                                        <td>
                                            <span class="fw-semibold text-danger">Cancelled</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell text-end">
                                            $399,00
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-semibold">#07831</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="fs-sm text-muted">yesterday</span>
                                        </td>
                                        <td>
                                            <span class="fw-semibold text-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell text-end">
                                            $349,00
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-semibold">#07830</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="fs-sm text-muted">yesterday</span>
                                        </td>
                                        <td>
                                            <span class="fw-semibold text-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell text-end">
                                            $999,00
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-semibold">#07829</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="fs-sm text-muted">yesterday</span>
                                        </td>
                                        <td>
                                            <span class="fw-semibold text-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell text-end">
                                            $39,99
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-semibold">#07828</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="fs-sm text-muted">yesterday</span>
                                        </td>
                                        <td>
                                            <span class="fw-semibold text-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell text-end">
                                            $499,00
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-semibold">#07827</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="fs-sm text-muted">yesterday</span>
                                        </td>
                                        <td>
                                            <span class="fw-semibold text-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell text-end">
                                            $325,00
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END Latest Orders -->
                </div>
                <!-- END Customers and Latest Orders -->
            </div>
            <!-- END Page Content -->
        </main>
@endsection
