<template>
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Dashboard
                        <!--begin::Separator-->
                        <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                        <!--end::Separator-->
                        <!--begin::Description-->
                        <span class="text-muted fs-7 fw-bold mt-2">#XRS-45670</span>
                        <!--end::Description-->
                    </h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Filter menu-->
                    <div class="m-0">
                        <!--begin::Menu toggle-->
                        <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Filter</a>
                        <!--end::Menu toggle-->
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                            id="kt_menu_6244763d93048">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid select2-hidden-accessible"
                                            data-kt-select2="true" data-placeholder="Select option"
                                            data-dropdown-parent="#kt_menu_6244763d93048" data-allow-clear="true"
                                            data-select2-id="select2-data-7-ov3x" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-9-8mce"></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                            dir="ltr" data-select2-id="select2-data-8-wvgz" style="width: 100%;"><span
                                                class="selection"><span
                                                    class="select2-selection select2-selection--single form-select form-select-solid"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-gk4k-container"
                                                    aria-controls="select2-gk4k-container"><span
                                                        class="select2-selection__rendered" id="select2-gk4k-container"
                                                        role="textbox" aria-readonly="true" title="Select option"><span
                                                            class="select2-selection__placeholder">Select
                                                            option</span></span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1">
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div
                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications"
                                            checked="checked">
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                        data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary"
                                        data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                    </div>
                    <!--end::Filter menu-->
                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                    <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_create_app">Create</a>
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--begin::Toolbar-->
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Row-->
                <div class="row gy-5 g-xl-8">
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::Mixed Widget 2-->
                        <div class="card card-xl-stretch">
                            <!--begin::Header-->
                            <div class="card-header border-0 bg-danger py-5">
                                <h3 class="card-title fw-bolder text-white">Sales Statistics</h3>
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button type="button"
                                        class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor">
                                                    </rect>
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 3-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                        data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                Payments</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title=""
                                                    data-bs-original-title="Specify a target name for future usage and reference"
                                                    aria-label="Specify a target name for future usage and reference"></i></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator my-2"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <!--begin::Switch-->
                                                        <label
                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input w-30px h-20px"
                                                                type="checkbox" value="1" checked="checked"
                                                                name="notifications">
                                                            <!--end::Input-->
                                                            <!--end::Label-->
                                                            <span
                                                                class="form-check-label text-muted fs-6">Recuring</span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Switch-->
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">Settings</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 3-->
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body p-0">
                                <!--begin::Chart-->
                                <div class="mixed-widget-2-chart card-rounded-bottom bg-danger" data-kt-color="danger"
                                    style="height: 200px; min-height: 200px;">
                                    <div id="apexchartsuldw4udi"
                                        class="apexcharts-canvas apexchartsuldw4udi apexcharts-theme-light"
                                        style="width: 350px; height: 200px;"><svg id="SvgjsSvg1006" width="350"
                                            height="200" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1007">
                                                    <clipPath id="gridRectMaskuldw4udi">
                                                        <rect id="SvgjsRect1011" width="357" height="203" x="-3.5"
                                                            y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskuldw4udi"></clipPath>
                                                    <clipPath id="nonForecastMaskuldw4udi"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskuldw4udi">
                                                        <rect id="SvgjsRect1012" width="354" height="204" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <filter id="SvgjsFilter1018" filterUnits="userSpaceOnUse"
                                                        width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood1019" flood-color="#cb1b46"
                                                            flood-opacity="0.5" result="SvgjsFeFlood1019Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite1020" in="SvgjsFeFlood1019Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite1020Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset1021" dx="0" dy="5"
                                                            result="SvgjsFeOffset1021Out" in="SvgjsFeComposite1020Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur1022" stdDeviation="3 "
                                                            result="SvgjsFeGaussianBlur1022Out"
                                                            in="SvgjsFeOffset1021Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge1023" result="SvgjsFeMerge1023Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode1024"
                                                                in="SvgjsFeGaussianBlur1022Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode1025"
                                                                in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend1026" in="SourceGraphic"
                                                            in2="SvgjsFeMerge1023Out" mode="normal"
                                                            result="SvgjsFeBlend1026Out"></feBlend>
                                                    </filter>
                                                    <filter id="SvgjsFilter1028" filterUnits="userSpaceOnUse"
                                                        width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood1029" flood-color="#cb1b46"
                                                            flood-opacity="0.5" result="SvgjsFeFlood1029Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite1030" in="SvgjsFeFlood1029Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite1030Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset1031" dx="0" dy="5"
                                                            result="SvgjsFeOffset1031Out" in="SvgjsFeComposite1030Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur1032" stdDeviation="3 "
                                                            result="SvgjsFeGaussianBlur1032Out"
                                                            in="SvgjsFeOffset1031Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge1033" result="SvgjsFeMerge1033Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode1034"
                                                                in="SvgjsFeGaussianBlur1032Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode1035"
                                                                in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend1036" in="SourceGraphic"
                                                            in2="SvgjsFeMerge1033Out" mode="normal"
                                                            result="SvgjsFeBlend1036Out"></feBlend>
                                                    </filter>
                                                </defs>
                                                <g id="SvgjsG1037" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1038" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1047" class="apexcharts-grid">
                                                    <g id="SvgjsG1048" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1050" x1="0" y1="0" x2="350" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1051" x1="0" y1="20" x2="350" y2="20"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1052" x1="0" y1="40" x2="350" y2="40"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1053" x1="0" y1="60" x2="350" y2="60"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1054" x1="0" y1="80" x2="350" y2="80"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1055" x1="0" y1="100" x2="350" y2="100"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1056" x1="0" y1="120" x2="350" y2="120"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1057" x1="0" y1="140" x2="350" y2="140"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1058" x1="0" y1="160" x2="350" y2="160"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1059" x1="0" y1="180" x2="350" y2="180"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1060" x1="0" y1="200" x2="350" y2="200"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1049" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1062" x1="0" y1="200" x2="350" y2="200"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                    <line id="SvgjsLine1061" x1="0" y1="1" x2="0" y2="200"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG1013"
                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1014" class="apexcharts-series" seriesName="NetxProfit"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1017"
                                                            d="M0 200L0 125C20.416666666666664 125 37.916666666666664 87.5 58.33333333333333 87.5C78.75 87.5 96.25 120 116.66666666666666 120C137.08333333333331 120 154.58333333333334 25 175 25C195.41666666666666 25 212.91666666666666 100 233.33333333333331 100C253.74999999999997 100 271.25 100 291.66666666666663 100C312.0833333333333 100 329.5833333333333 100 350 100C350 100 350 100 350 200M350 100C350 100 350 100 350 100 "
                                                            fill="transparent" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskuldw4udi)"
                                                            filter="url(#SvgjsFilter1018)"
                                                            pathTo="M 0 200L 0 125C 20.416666666666664 125 37.916666666666664 87.5 58.33333333333333 87.5C 78.75 87.5 96.25 120 116.66666666666666 120C 137.08333333333331 120 154.58333333333334 25 175 25C 195.41666666666666 25 212.91666666666666 100 233.33333333333331 100C 253.74999999999997 100 271.25 100 291.66666666666663 100C 312.0833333333333 100 329.5833333333333 100 350 100C 350 100 350 100 350 200M 350 100z"
                                                            pathFrom="M -1 200L -1 200L 58.33333333333333 200L 116.66666666666666 200L 175 200L 233.33333333333331 200L 291.66666666666663 200L 350 200">
                                                        </path>
                                                        <path id="SvgjsPath1027"
                                                            d="M0 125C20.416666666666664 125 37.916666666666664 87.5 58.33333333333333 87.5C78.75 87.5 96.25 120 116.66666666666666 120C137.08333333333331 120 154.58333333333334 25 175 25C195.41666666666666 25 212.91666666666666 100 233.33333333333331 100C253.74999999999997 100 271.25 100 291.66666666666663 100C312.0833333333333 100 329.5833333333333 100 350 100C350 100 350 100 350 100 "
                                                            fill="none" fill-opacity="1" stroke="#cb1b46"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskuldw4udi)"
                                                            filter="url(#SvgjsFilter1028)"
                                                            pathTo="M 0 125C 20.416666666666664 125 37.916666666666664 87.5 58.33333333333333 87.5C 78.75 87.5 96.25 120 116.66666666666666 120C 137.08333333333331 120 154.58333333333334 25 175 25C 195.41666666666666 25 212.91666666666666 100 233.33333333333331 100C 253.74999999999997 100 271.25 100 291.66666666666663 100C 312.0833333333333 100 329.5833333333333 100 350 100"
                                                            pathFrom="M -1 200L -1 200L 58.33333333333333 200L 116.66666666666666 200L 175 200L 233.33333333333331 200L 291.66666666666663 200L 350 200">
                                                        </path>
                                                        <g id="SvgjsG1015" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle1068" r="0" cx="0" cy="0"
                                                                    class="apexcharts-marker w7683ghnf no-pointer-events"
                                                                    stroke="#cb1b46" fill="#f1416c" fill-opacity="1"
                                                                    stroke-width="3" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1016" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1063" x1="0" y1="0" x2="350" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1064" x1="0" y1="0" x2="350" y2="0"
                                                    stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1065" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1066" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1067" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <g id="SvgjsG1046" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1009" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 100px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: inherit; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: transparent;"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: inherit; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Chart-->
                                <!--begin::Stats-->
                                <div class="card-p mt-n20 position-relative">
                                    <!--begin::Row-->
                                    <div class="row g-0">
                                        <!--begin::Col-->
                                        <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                            <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect x="8" y="9" width="3" height="10" rx="1.5"
                                                        fill="currentColor"></rect>
                                                    <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5"
                                                        fill="currentColor"></rect>
                                                    <rect x="18" y="11" width="3" height="8" rx="1.5"
                                                        fill="currentColor"></rect>
                                                    <rect x="3" y="13" width="3" height="6" rx="1.5"
                                                        fill="currentColor"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <a href="#" class="text-warning fw-bold fs-6">Weekly Sales</a>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
                                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                            <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <a href="#" class="text-primary fw-bold fs-6">New Projects</a>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="row g-0">
                                        <!--begin::Col-->
                                        <div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                            <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <a href="#" class="text-danger fw-bold fs-6 mt-2">Item
                                                Orders</a>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col bg-light-success px-6 py-8 rounded-2">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                            <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.3"
                                                        d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <a href="#" class="text-success fw-bold fs-6 mt-2">Bug
                                                Reports</a>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Mixed Widget 2-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::List Widget 5-->
                        <div class="card card-xl-stretch">
                            <!--begin::Header-->
                            <div class="card-header align-items-center border-0 mt-4">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="fw-bolder mb-2 text-dark">Activities</span>
                                    <span class="text-muted fw-bold fs-7">890,344 Sales</span>
                                </h3>
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button type="button"
                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor">
                                                    </rect>
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 1-->
                                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                        id="kt_menu_6244763d95a3a">
                                        <!--begin::Header-->
                                        <div class="px-7 py-5">
                                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Menu separator-->
                                        <div class="separator border-gray-200"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Form-->
                                        <div class="px-7 py-5">
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Status:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div>
                                                    <select
                                                        class="form-select form-select-solid select2-hidden-accessible"
                                                        data-kt-select2="true" data-placeholder="Select option"
                                                        data-dropdown-parent="#kt_menu_6244763d95a3a"
                                                        data-allow-clear="true" data-select2-id="select2-data-10-izvb"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option data-select2-id="select2-data-12-2hn6"></option>
                                                        <option value="1">Approved</option>
                                                        <option value="2">Pending</option>
                                                        <option value="2">In Process</option>
                                                        <option value="2">Rejected</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--bootstrap5"
                                                        dir="ltr" data-select2-id="select2-data-11-9auy"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single form-select form-select-solid"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0" aria-disabled="false"
                                                                aria-labelledby="select2-0mx9-container"
                                                                aria-controls="select2-0mx9-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-0mx9-container" role="textbox"
                                                                    aria-readonly="true" title="Select option"><span
                                                                        class="select2-selection__placeholder">Select
                                                                        option</span></span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Member Type:</label>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <div class="d-flex">
                                                    <!--begin::Options-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" value="1">
                                                        <span class="form-check-label">Author</span>
                                                    </label>
                                                    <!--end::Options-->
                                                    <!--begin::Options-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="2"
                                                            checked="checked">
                                                        <span class="form-check-label">Customer</span>
                                                    </label>
                                                    <!--end::Options-->
                                                </div>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Notifications:</label>
                                                <!--end::Label-->
                                                <!--begin::Switch-->
                                                <div
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        name="notifications" checked="checked">
                                                    <label class="form-check-label">Enabled</label>
                                                </div>
                                                <!--end::Switch-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="reset"
                                                    class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                    data-kt-menu-dismiss="true">Reset</button>
                                                <button type="submit" class="btn btn-sm btn-primary"
                                                    data-kt-menu-dismiss="true">Apply</button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Menu 1-->
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <!--begin::Timeline-->
                                <div class="timeline-label">
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">08:42</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-warning fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Text-->
                                        <div class="fw-mormal timeline-content text-muted ps-3">Outlines
                                            keep you honest. And keep structure</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">10:00</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-success fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Content-->
                                        <div class="timeline-content d-flex">
                                            <span class="fw-bolder text-gray-800 ps-3">AEOL meeting</span>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-danger fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Desc-->
                                        <div class="timeline-content fw-bolder text-gray-800 ps-3">Make
                                            deposit
                                            <a href="#" class="text-primary">USD 700</a>. to ESL
                                        </div>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-primary fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Text-->
                                        <div class="timeline-content fw-mormal text-muted ps-3">Indulging in
                                            poorly driving and keep structure keep great</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-danger fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Desc-->
                                        <div class="timeline-content fw-bold text-gray-800 ps-3">New order
                                            placed
                                            <a href="#" class="text-primary">#XF-2356</a>.
                                        </div>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-primary fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Text-->
                                        <div class="timeline-content fw-mormal text-muted ps-3">Indulging in
                                            poorly driving and keep structure keep great</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-danger fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Desc-->
                                        <div class="timeline-content fw-bold text-gray-800 ps-3">New order
                                            placed
                                            <a href="#" class="text-primary">#XF-2356</a>.
                                        </div>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item mb-9">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">10:30</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-success fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Text-->
                                        <div class="timeline-content fw-mormal text-muted ps-3">Finance KPI
                                            Mobile app launch preparion meeting</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end: List Widget 5-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::Mixed Widget 7-->
                        <div class="card card-xl-stretch-50 mb-5 mb-xl-8">
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column p-0">
                                <!--begin::Stats-->
                                <div class="flex-grow-1 card-p pb-0">
                                    <div class="d-flex flex-stack flex-wrap">
                                        <div class="me-2">
                                            <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Generate
                                                Reports</a>
                                            <div class="text-muted fs-7 fw-bold">Finance and accounting
                                                reports</div>
                                        </div>
                                        <div class="fw-bolder fs-3 text-primary">$24,500</div>
                                    </div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Chart-->
                                <div class="mixed-widget-7-chart card-rounded-bottom" data-kt-chart-color="primary"
                                    style="height: 150px; min-height: 150px;">
                                    <div id="apexchartsrhm2wsw7"
                                        class="apexcharts-canvas apexchartsrhm2wsw7 apexcharts-theme-light"
                                        style="width: 350px; height: 150px;"><svg id="SvgjsSvg1113" width="350"
                                            height="150" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG1115" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1114">
                                                    <clipPath id="gridRectMaskrhm2wsw7">
                                                        <rect id="SvgjsRect1118" width="357" height="153" x="-3.5"
                                                            y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskrhm2wsw7"></clipPath>
                                                    <clipPath id="nonForecastMaskrhm2wsw7"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskrhm2wsw7">
                                                        <rect id="SvgjsRect1119" width="354" height="154" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG1126" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1127" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1135" class="apexcharts-grid">
                                                    <g id="SvgjsG1136" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1138" x1="0" y1="0" x2="350" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1139" x1="0" y1="15" x2="350" y2="15"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1140" x1="0" y1="30" x2="350" y2="30"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1141" x1="0" y1="45" x2="350" y2="45"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1142" x1="0" y1="60" x2="350" y2="60"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1143" x1="0" y1="75" x2="350" y2="75"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1144" x1="0" y1="90" x2="350" y2="90"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1145" x1="0" y1="105" x2="350" y2="105"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1146" x1="0" y1="120" x2="350" y2="120"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1147" x1="0" y1="135" x2="350" y2="135"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1148" x1="0" y1="150" x2="350" y2="150"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1137" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1150" x1="0" y1="150" x2="350" y2="150"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                    <line id="SvgjsLine1149" x1="0" y1="1" x2="0" y2="150"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG1120"
                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1121" class="apexcharts-series" seriesName="NetxProfit"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1124"
                                                            d="M0 150L0 112.5C24.5 112.5 45.5 87.5 70 87.5C94.5 87.5 115.5 112.5 140 112.5C164.5 112.5 185.5 50 210 50C234.5 50 255.5 100 280 100C304.5 100 325.5 25 350 25C350 25 350 25 350 150M350 25C350 25 350 25 350 25 "
                                                            fill="rgba(241,250,255,1)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskrhm2wsw7)"
                                                            pathTo="M 0 150L 0 112.5C 24.5 112.5 45.5 87.5 70 87.5C 94.5 87.5 115.5 112.5 140 112.5C 164.5 112.5 185.5 50 210 50C 234.5 50 255.5 100 280 100C 304.5 100 325.5 25 350 25C 350 25 350 25 350 150M 350 25z"
                                                            pathFrom="M -1 150L -1 150L 70 150L 140 150L 210 150L 280 150L 350 150">
                                                        </path>
                                                        <path id="SvgjsPath1125"
                                                            d="M0 112.5C24.5 112.5 45.5 87.5 70 87.5C94.5 87.5 115.5 112.5 140 112.5C164.5 112.5 185.5 50 210 50C234.5 50 255.5 100 280 100C304.5 100 325.5 25 350 25C350 25 350 25 350 25 "
                                                            fill="none" fill-opacity="1" stroke="#009ef7"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskrhm2wsw7)"
                                                            pathTo="M 0 112.5C 24.5 112.5 45.5 87.5 70 87.5C 94.5 87.5 115.5 112.5 140 112.5C 164.5 112.5 185.5 50 210 50C 234.5 50 255.5 100 280 100C 304.5 100 325.5 25 350 25"
                                                            pathFrom="M -1 150L -1 150L 70 150L 140 150L 210 150L 280 150L 350 150">
                                                        </path>
                                                        <g id="SvgjsG1122" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle1156" r="0" cx="350" cy="25"
                                                                    class="apexcharts-marker w1edrewk3 no-pointer-events"
                                                                    stroke="#009ef7" fill="#f1faff" fill-opacity="1"
                                                                    stroke-width="3" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1123" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1151" x1="0" y1="0" x2="350" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1152" x1="0" y1="0" x2="350" y2="0"
                                                    stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1153" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1154" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1155" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <g id="SvgjsG1134" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1116" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 75px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light"
                                            style="left: 141.75px; top: 28px;">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: inherit; font-size: 12px;">Jul</div>
                                            <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(241, 250, 255);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: inherit; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label">Net Profit:
                                                        </span><span class="apexcharts-tooltip-text-y-value">$50
                                                            thousands</span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                            style="left: 330.289px; top: 152px;">
                                            <div class="apexcharts-xaxistooltip-text"
                                                style="font-family: inherit; font-size: 12px; min-width: 18.4219px;">Jul
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Mixed Widget 7-->
                        <!--begin::Mixed Widget 10-->
                        <div class="card card-xl-stretch-50 mb-5 mb-xl-8">
                            <!--begin::Body-->
                            <div class="card-body p-0 d-flex justify-content-between flex-column overflow-hidden">
                                <!--begin::Hidden-->
                                <div class="d-flex flex-stack flex-wrap flex-grow-1 px-9 pt-9 pb-3">
                                    <div class="me-2">
                                        <span class="fw-bolder text-gray-800 d-block fs-3">Sales</span>
                                        <span class="text-gray-400 fw-bold">Oct 8 - Oct 26 22</span>
                                    </div>
                                    <div class="fw-bolder fs-3 text-primary">$15,300</div>
                                </div>
                                <!--end::Hidden-->
                                <!--begin::Chart-->
                                <div class="mixed-widget-10-chart" data-kt-color="primary"
                                    style="height: 175px; min-height: 183px;">
                                    <div id="apexchartsnensuh6r"
                                        class="apexcharts-canvas apexchartsnensuh6r apexcharts-theme-light"
                                        style="width: 350px; height: 168px;"><svg id="SvgjsSvg1157" width="350"
                                            height="168" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG1159" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(42.572021484375, 40)">
                                                <defs id="SvgjsDefs1158">
                                                    <linearGradient id="SvgjsLinearGradient1163" x1="0" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop1164" stop-opacity="0.4"
                                                            stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                        <stop id="SvgjsStop1165" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop1166" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMasknensuh6r">
                                                        <rect id="SvgjsRect1168" width="303.427978515625"
                                                            height="87.494" x="-3" y="-1" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMasknensuh6r"></clipPath>
                                                    <clipPath id="nonForecastMasknensuh6r"></clipPath>
                                                    <clipPath id="gridRectMarkerMasknensuh6r">
                                                        <rect id="SvgjsRect1169" width="301.427978515625"
                                                            height="89.494" x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <rect id="SvgjsRect1167" width="9.294624328613281" height="85.494" x="0"
                                                    y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke-dasharray="3" fill="url(#SvgjsLinearGradient1163)"
                                                    class="apexcharts-xcrosshairs" y2="85.494" filter="none"
                                                    fill-opacity="0.9"></rect>
                                                <g id="SvgjsG1209" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1210" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"><text id="SvgjsText1212"
                                                            font-family="inherit" x="18.589248657226562" y="114.494"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400" fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1213">Feb</tspan>
                                                            <title>Feb</title>
                                                        </text><text id="SvgjsText1215" font-family="inherit"
                                                            x="55.76774597167969" y="114.494" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1216">Mar</tspan>
                                                            <title>Mar</title>
                                                        </text><text id="SvgjsText1218" font-family="inherit"
                                                            x="92.94624328613281" y="114.494" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1219">Apr</tspan>
                                                            <title>Apr</title>
                                                        </text><text id="SvgjsText1221" font-family="inherit"
                                                            x="130.12474060058594" y="114.494" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1222">May</tspan>
                                                            <title>May</title>
                                                        </text><text id="SvgjsText1224" font-family="inherit"
                                                            x="167.30323791503906" y="114.494" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1225">Jun</tspan>
                                                            <title>Jun</title>
                                                        </text><text id="SvgjsText1227" font-family="inherit"
                                                            x="204.4817352294922" y="114.494" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1228">Jul</tspan>
                                                            <title>Jul</title>
                                                        </text><text id="SvgjsText1230" font-family="inherit"
                                                            x="241.6602325439453" y="114.494" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1231">Aug</tspan>
                                                            <title>Aug</title>
                                                        </text><text id="SvgjsText1233" font-family="inherit"
                                                            x="278.83872985839844" y="114.494" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1234">Sep</tspan>
                                                            <title>Sep</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1247" class="apexcharts-grid">
                                                    <g id="SvgjsG1248" class="apexcharts-gridlines-horizontal">
                                                        <line id="SvgjsLine1250" x1="0" y1="0" x2="297.427978515625"
                                                            y2="0" stroke="#eff2f5" stroke-dasharray="4"
                                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1251" x1="0" y1="21.3735"
                                                            x2="297.427978515625" y2="21.3735" stroke="#eff2f5"
                                                            stroke-dasharray="4" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1252" x1="0" y1="42.747"
                                                            x2="297.427978515625" y2="42.747" stroke="#eff2f5"
                                                            stroke-dasharray="4" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1253" x1="0" y1="64.12049999999999"
                                                            x2="297.427978515625" y2="64.12049999999999"
                                                            stroke="#eff2f5" stroke-dasharray="4" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1254" x1="0" y1="85.494"
                                                            x2="297.427978515625" y2="85.494" stroke="#eff2f5"
                                                            stroke-dasharray="4" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1249" class="apexcharts-gridlines-vertical"></g>
                                                    <line id="SvgjsLine1256" x1="0" y1="85.494" x2="297.427978515625"
                                                        y2="85.494" stroke="transparent" stroke-dasharray="0"
                                                        stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1255" x1="0" y1="1" x2="0" y2="85.494"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG1170" class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG1171" class="apexcharts-series" rel="1"
                                                        seriesName="NetxProfit" data:realIndex="0">
                                                        <path id="SvgjsPath1175"
                                                            d="M9.294624328613281 85.494L9.294624328613281 36.06025C9.294624328613281 33.39358333333334 10.627957661946613 32.06025 13.294624328613281 32.06025L12.589248657226562 32.06025C15.25591532389323 32.06025 16.589248657226562 33.39358333333334 16.589248657226562 36.06025L16.589248657226562 36.06025L16.589248657226562 85.494L16.589248657226562 85.494C16.589248657226562 85.494 9.294624328613281 85.494 9.294624328613281 85.494 "
                                                            fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                            stroke="transparent" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMasknensuh6r)"
                                                            pathTo="M 9.294624328613281 85.494L 9.294624328613281 36.06025Q 9.294624328613281 32.06025 13.294624328613281 32.06025L 12.589248657226562 32.06025Q 16.589248657226562 32.06025 16.589248657226562 36.06025L 16.589248657226562 36.06025L 16.589248657226562 85.494L 16.589248657226562 85.494z"
                                                            pathFrom="M 9.294624328613281 85.494L 9.294624328613281 85.494L 16.589248657226562 85.494L 16.589248657226562 85.494L 16.589248657226562 85.494L 16.589248657226562 85.494L 16.589248657226562 85.494L 9.294624328613281 85.494"
                                                            cy="32.06025" cx="45.473121643066406" j="0" val="50"
                                                            barHeight="53.433749999999996" barWidth="9.294624328613281">
                                                        </path>
                                                        <path id="SvgjsPath1177"
                                                            d="M46.473121643066406 85.494L46.473121643066406 25.373500000000007C46.473121643066406 22.706833333333336 47.80645497639974 21.373500000000007 50.473121643066406 21.373500000000007L49.76774597167969 21.373500000000007C52.43441263834635 21.373500000000007 53.76774597167969 22.706833333333336 53.76774597167969 25.373500000000007L53.76774597167969 25.373500000000007L53.76774597167969 85.494L53.76774597167969 85.494C53.76774597167969 85.494 46.473121643066406 85.494 46.473121643066406 85.494 "
                                                            fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                            stroke="transparent" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMasknensuh6r)"
                                                            pathTo="M 46.473121643066406 85.494L 46.473121643066406 25.373500000000007Q 46.473121643066406 21.373500000000007 50.473121643066406 21.373500000000007L 49.76774597167969 21.373500000000007Q 53.76774597167969 21.373500000000007 53.76774597167969 25.373500000000007L 53.76774597167969 25.373500000000007L 53.76774597167969 85.494L 53.76774597167969 85.494z"
                                                            pathFrom="M 46.473121643066406 85.494L 46.473121643066406 85.494L 53.76774597167969 85.494L 53.76774597167969 85.494L 53.76774597167969 85.494L 53.76774597167969 85.494L 53.76774597167969 85.494L 46.473121643066406 85.494"
                                                            cy="21.373500000000007" cx="82.65161895751953" j="1"
                                                            val="60" barHeight="64.12049999999999"
                                                            barWidth="9.294624328613281"></path>
                                                        <path id="SvgjsPath1179"
                                                            d="M83.65161895751953 85.494L83.65161895751953 14.686750000000004C83.65161895751953 12.020083333333332 84.98495229085286 10.686750000000004 87.65161895751953 10.686750000000004L86.94624328613281 10.686750000000004C89.61290995279948 10.686750000000004 90.94624328613281 12.020083333333332 90.94624328613281 14.686750000000004L90.94624328613281 14.686750000000004L90.94624328613281 85.494L90.94624328613281 85.494C90.94624328613281 85.494 83.65161895751953 85.494 83.65161895751953 85.494 "
                                                            fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                            stroke="transparent" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMasknensuh6r)"
                                                            pathTo="M 83.65161895751953 85.494L 83.65161895751953 14.686750000000004Q 83.65161895751953 10.686750000000004 87.65161895751953 10.686750000000004L 86.94624328613281 10.686750000000004Q 90.94624328613281 10.686750000000004 90.94624328613281 14.686750000000004L 90.94624328613281 14.686750000000004L 90.94624328613281 85.494L 90.94624328613281 85.494z"
                                                            pathFrom="M 83.65161895751953 85.494L 83.65161895751953 85.494L 90.94624328613281 85.494L 90.94624328613281 85.494L 90.94624328613281 85.494L 90.94624328613281 85.494L 90.94624328613281 85.494L 83.65161895751953 85.494"
                                                            cy="10.686750000000004" cx="119.83011627197266" j="2"
                                                            val="70" barHeight="74.80725" barWidth="9.294624328613281">
                                                        </path>
                                                        <path id="SvgjsPath1181"
                                                            d="M120.83011627197266 85.494L120.83011627197266 4C120.83011627197266 1.3333333333333286 122.16344960530598 0 124.83011627197266 0L124.12474060058594 0C126.7914072672526 0 128.12474060058594 1.3333333333333286 128.12474060058594 4L128.12474060058594 4L128.12474060058594 85.494L128.12474060058594 85.494C128.12474060058594 85.494 120.83011627197266 85.494 120.83011627197266 85.494 "
                                                            fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                            stroke="transparent" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMasknensuh6r)"
                                                            pathTo="M 120.83011627197266 85.494L 120.83011627197266 4Q 120.83011627197266 0 124.83011627197266 0L 124.12474060058594 0Q 128.12474060058594 0 128.12474060058594 4L 128.12474060058594 4L 128.12474060058594 85.494L 128.12474060058594 85.494z"
                                                            pathFrom="M 120.83011627197266 85.494L 120.83011627197266 85.494L 128.12474060058594 85.494L 128.12474060058594 85.494L 128.12474060058594 85.494L 128.12474060058594 85.494L 128.12474060058594 85.494L 120.83011627197266 85.494"
                                                            cy="0" cx="157.00861358642578" j="3" val="80"
                                                            barHeight="85.494" barWidth="9.294624328613281"></path>
                                                        <path id="SvgjsPath1183"
                                                            d="M158.00861358642578 85.494L158.00861358642578 25.373500000000007C158.00861358642578 22.706833333333336 159.34194691975912 21.373500000000007 162.00861358642578 21.373500000000007L161.30323791503906 21.373500000000007C163.96990458170575 21.373500000000007 165.30323791503906 22.706833333333336 165.30323791503906 25.373500000000007L165.30323791503906 25.373500000000007L165.30323791503906 85.494L165.30323791503906 85.494C165.30323791503906 85.494 158.00861358642578 85.494 158.00861358642578 85.494 "
                                                            fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                            stroke="transparent" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMasknensuh6r)"
                                                            pathTo="M 158.00861358642578 85.494L 158.00861358642578 25.373500000000007Q 158.00861358642578 21.373500000000007 162.00861358642578 21.373500000000007L 161.30323791503906 21.373500000000007Q 165.30323791503906 21.373500000000007 165.30323791503906 25.373500000000007L 165.30323791503906 25.373500000000007L 165.30323791503906 85.494L 165.30323791503906 85.494z"
                                                            pathFrom="M 158.00861358642578 85.494L 158.00861358642578 85.494L 165.30323791503906 85.494L 165.30323791503906 85.494L 165.30323791503906 85.494L 165.30323791503906 85.494L 165.30323791503906 85.494L 158.00861358642578 85.494"
                                                            cy="21.373500000000007" cx="194.1871109008789" j="4"
                                                            val="60" barHeight="64.12049999999999"
                                                            barWidth="9.294624328613281"></path>
                                                        <path id="SvgjsPath1185"
                                                            d="M195.1871109008789 85.494L195.1871109008789 36.06025C195.1871109008789 33.39358333333334 196.52044423421222 32.06025 199.1871109008789 32.06025L198.4817352294922 32.06025C201.14840189615887 32.06025 202.4817352294922 33.39358333333334 202.4817352294922 36.06025L202.4817352294922 36.06025L202.4817352294922 85.494L202.4817352294922 85.494C202.4817352294922 85.494 195.1871109008789 85.494 195.1871109008789 85.494 "
                                                            fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                            stroke="transparent" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMasknensuh6r)"
                                                            pathTo="M 195.1871109008789 85.494L 195.1871109008789 36.06025Q 195.1871109008789 32.06025 199.1871109008789 32.06025L 198.4817352294922 32.06025Q 202.4817352294922 32.06025 202.4817352294922 36.06025L 202.4817352294922 36.06025L 202.4817352294922 85.494L 202.4817352294922 85.494z"
                                                            pathFrom="M 195.1871109008789 85.494L 195.1871109008789 85.494L 202.4817352294922 85.494L 202.4817352294922 85.494L 202.4817352294922 85.494L 202.4817352294922 85.494L 202.4817352294922 85.494L 195.1871109008789 85.494"
                                                            cy="32.06025" cx="231.36560821533203" j="5" val="50"
                                                            barHeight="53.433749999999996" barWidth="9.294624328613281">
                                                        </path>
                                                        <path id="SvgjsPath1187"
                                                            d="M232.36560821533203 85.494L232.36560821533203 14.686750000000004C232.36560821533203 12.020083333333332 233.69894154866537 10.686750000000004 236.36560821533203 10.686750000000004L235.6602325439453 10.686750000000004C238.326899210612 10.686750000000004 239.6602325439453 12.020083333333332 239.6602325439453 14.686750000000004L239.6602325439453 14.686750000000004L239.6602325439453 85.494L239.6602325439453 85.494C239.6602325439453 85.494 232.36560821533203 85.494 232.36560821533203 85.494 "
                                                            fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                            stroke="transparent" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMasknensuh6r)"
                                                            pathTo="M 232.36560821533203 85.494L 232.36560821533203 14.686750000000004Q 232.36560821533203 10.686750000000004 236.36560821533203 10.686750000000004L 235.6602325439453 10.686750000000004Q 239.6602325439453 10.686750000000004 239.6602325439453 14.686750000000004L 239.6602325439453 14.686750000000004L 239.6602325439453 85.494L 239.6602325439453 85.494z"
                                                            pathFrom="M 232.36560821533203 85.494L 232.36560821533203 85.494L 239.6602325439453 85.494L 239.6602325439453 85.494L 239.6602325439453 85.494L 239.6602325439453 85.494L 239.6602325439453 85.494L 232.36560821533203 85.494"
                                                            cy="10.686750000000004" cx="268.54410552978516" j="6"
                                                            val="70" barHeight="74.80725" barWidth="9.294624328613281">
                                                        </path>
                                                        <path id="SvgjsPath1189"
                                                            d="M269.54410552978516 85.494L269.54410552978516 25.373500000000007C269.54410552978516 22.706833333333336 270.87743886311847 21.373500000000007 273.54410552978516 21.373500000000007L272.83872985839844 21.373500000000007C275.50539652506507 21.373500000000007 276.83872985839844 22.706833333333336 276.83872985839844 25.373500000000007L276.83872985839844 25.373500000000007L276.83872985839844 85.494L276.83872985839844 85.494C276.83872985839844 85.494 269.54410552978516 85.494 269.54410552978516 85.494 "
                                                            fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                            stroke="transparent" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMasknensuh6r)"
                                                            pathTo="M 269.54410552978516 85.494L 269.54410552978516 25.373500000000007Q 269.54410552978516 21.373500000000007 273.54410552978516 21.373500000000007L 272.83872985839844 21.373500000000007Q 276.83872985839844 21.373500000000007 276.83872985839844 25.373500000000007L 276.83872985839844 25.373500000000007L 276.83872985839844 85.494L 276.83872985839844 85.494z"
                                                            pathFrom="M 269.54410552978516 85.494L 269.54410552978516 85.494L 276.83872985839844 85.494L 276.83872985839844 85.494L 276.83872985839844 85.494L 276.83872985839844 85.494L 276.83872985839844 85.494L 269.54410552978516 85.494"
                                                            cy="21.373500000000007" cx="305.7226028442383" j="7"
                                                            val="60" barHeight="64.12049999999999"
                                                            barWidth="9.294624328613281"></path>
                                                        <g id="SvgjsG1173" class="apexcharts-bar-goals-markers"
                                                            style="pointer-events: none">
                                                            <g id="SvgjsG1174" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG1176" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG1178" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG1180" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG1182" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG1184" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG1186" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG1188" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1190" class="apexcharts-series" rel="2"
                                                        seriesName="Revenue" data:realIndex="1">
                                                        <path id="SvgjsPath1194"
                                                            d="M18.589248657226562 85.494L18.589248657226562 36.06025C18.589248657226562 33.39358333333334 19.922581990559895 32.06025 22.589248657226562 32.06025L21.883872985839844 32.06025C24.55053965250651 32.06025 25.883872985839844 33.39358333333334 25.883872985839844 36.06025L25.883872985839844 36.06025L25.883872985839844 85.494L25.883872985839844 85.494C25.883872985839844 85.494 18.589248657226562 85.494 18.589248657226562 85.494 "
                                                            fill="rgba(228,230,239,0.85)" fill-opacity="1"
                                                            stroke="transparent" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMasknensuh6r)"
                                                            pathTo="M 18.589248657226562 85.494L 18.589248657226562 36.06025Q 18.589248657226562 32.06025 22.589248657226562 32.06025L 21.883872985839844 32.06025Q 25.883872985839844 32.06025 25.883872985839844 36.06025L 25.883872985839844 36.06025L 25.883872985839844 85.494L 25.883872985839844 85.494z"
                                                            pathFrom="M 18.589248657226562 85.494L 18.589248657226562 85.494L 25.883872985839844 85.494L 25.883872985839844 85.494L 25.883872985839844 85.494L 25.883872985839844 85.494L 25.883872985839844 85.494L 18.589248657226562 85.494"
                                                            cy="32.06025" cx="54.76774597167969" j="0" val="50"
                                                            barHeight="53.433749999999996" barWidth="9.294624328613281">
                                                        </path>
                                                        <path id="SvgjsPath1196"
                                                            d="M55.76774597167969 85.494L55.76774597167969 25.373500000000007C55.76774597167969 22.706833333333336 57.101079305013016 21.373500000000007 59.76774597167969 21.373500000000007L59.06237030029297 21.373500000000007C61.72903696695964 21.373500000000007 63.06237030029297 22.706833333333336 63.06237030029297 25.373500000000007L63.06237030029297 25.373500000000007L63.06237030029297 85.494L63.06237030029297 85.494C63.06237030029297 85.494 55.76774597167969 85.494 55.76774597167969 85.494 "
                                                            fill="rgba(228,230,239,0.85)" fill-opacity="1"
                                                            stroke="transparent" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMasknensuh6r)"
                                                            pathTo="M 55.76774597167969 85.494L 55.76774597167969 25.373500000000007Q 55.76774597167969 21.373500000000007 59.76774597167969 21.373500000000007L 59.06237030029297 21.373500000000007Q 63.06237030029297 21.373500000000007 63.06237030029297 25.373500000000007L 63.06237030029297 25.373500000000007L 63.06237030029297 85.494L 63.06237030029297 85.494z"
                                                            pathFrom="M 55.76774597167969 85.494L 55.76774597167969 85.494L 63.06237030029297 85.494L 63.06237030029297 85.494L 63.06237030029297 85.494L 63.06237030029297 85.494L 63.06237030029297 85.494L 55.76774597167969 85.494"
                                                            cy="21.373500000000007" cx="91.94624328613281" j="1"
                                                            val="60" barHeight="64.12049999999999"
                                                            barWidth="9.294624328613281"></path>
                                                        <path id="SvgjsPath1198"
                                                            d="M92.94624328613281 85.494L92.94624328613281 14.686750000000004C92.94624328613281 12.020083333333332 94.27957661946616 10.686750000000004 96.94624328613281 10.686750000000004L96.2408676147461 10.686750000000004C98.90753428141275 10.686750000000004 100.2408676147461 12.020083333333332 100.2408676147461 14.686750000000004L100.2408676147461 14.686750000000004L100.2408676147461 85.494L100.2408676147461 85.494C100.2408676147461 85.494 92.94624328613281 85.494 92.94624328613281 85.494 "
                                                            fill="rgba(228,230,239,0.85)" fill-opacity="1"
                                                            stroke="transparent" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMasknensuh6r)"
                                                            pathTo="M 92.94624328613281 85.494L 92.94624328613281 14.686750000000004Q 92.94624328613281 10.686750000000004 96.94624328613281 10.686750000000004L 96.2408676147461 10.686750000000004Q 100.2408676147461 10.686750000000004 100.2408676147461 14.686750000000004L 100.2408676147461 14.686750000000004L 100.2408676147461 85.494L 100.2408676147461 85.494z"
                                                            pathFrom="M 92.94624328613281 85.494L 92.94624328613281 85.494L 100.2408676147461 85.494L 100.2408676147461 85.494L 100.2408676147461 85.494L 100.2408676147461 85.494L 100.2408676147461 85.494L 92.94624328613281 85.494"
                                                            cy="10.686750000000004" cx="129.12474060058594" j="2"
                                                            val="70" barHeight="74.80725" barWidth="9.294624328613281">
                                                        </path>
                                                        <path id="SvgjsPath1200"
                                                            d="M130.12474060058594 85.494L130.12474060058594 4C130.12474060058594 1.3333333333333286 131.45807393391928 0 134.12474060058594 0L133.41936492919922 0C136.0860315958659 0 137.41936492919922 1.3333333333333286 137.41936492919922 4L137.41936492919922 4L137.41936492919922 85.494L137.41936492919922 85.494C137.41936492919922 85.494 130.12474060058594 85.494 130.12474060058594 85.494 "
                                                            fill="rgba(228,230,239,0.85)" fill-opacity="1"
                                                            stroke="transparent" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMasknensuh6r)"
                                                            pathTo="M 130.12474060058594 85.494L 130.12474060058594 4Q 130.12474060058594 0 134.12474060058594 0L 133.41936492919922 0Q 137.41936492919922 0 137.41936492919922 4L 137.41936492919922 4L 137.41936492919922 85.494L 137.41936492919922 85.494z"
                                                            pathFrom="M 130.12474060058594 85.494L 130.12474060058594 85.494L 137.41936492919922 85.494L 137.41936492919922 85.494L 137.41936492919922 85.494L 137.41936492919922 85.494L 137.41936492919922 85.494L 130.12474060058594 85.494"
                                                            cy="0" cx="166.30323791503906" j="3" val="80"
                                                            barHeight="85.494" barWidth="9.294624328613281"></path>
                                                        <path id="SvgjsPath1202"
                                                            d="M167.30323791503906 85.494L167.30323791503906 25.373500000000007C167.30323791503906 22.706833333333336 168.6365712483724 21.373500000000007 171.30323791503906 21.373500000000007L170.59786224365234 21.373500000000007C173.264528910319 21.373500000000007 174.59786224365234 22.706833333333336 174.59786224365234 25.373500000000007L174.59786224365234 25.373500000000007L174.59786224365234 85.494L174.59786224365234 85.494C174.59786224365234 85.494 167.30323791503906 85.494 167.30323791503906 85.494 "
                                                            fill="rgba(228,230,239,0.85)" fill-opacity="1"
                                                            stroke="transparent" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMasknensuh6r)"
                                                            pathTo="M 167.30323791503906 85.494L 167.30323791503906 25.373500000000007Q 167.30323791503906 21.373500000000007 171.30323791503906 21.373500000000007L 170.59786224365234 21.373500000000007Q 174.59786224365234 21.373500000000007 174.59786224365234 25.373500000000007L 174.59786224365234 25.373500000000007L 174.59786224365234 85.494L 174.59786224365234 85.494z"
                                                            pathFrom="M 167.30323791503906 85.494L 167.30323791503906 85.494L 174.59786224365234 85.494L 174.59786224365234 85.494L 174.59786224365234 85.494L 174.59786224365234 85.494L 174.59786224365234 85.494L 167.30323791503906 85.494"
                                                            cy="21.373500000000007" cx="203.4817352294922" j="4"
                                                            val="60" barHeight="64.12049999999999"
                                                            barWidth="9.294624328613281"></path>
                                                        <path id="SvgjsPath1204"
                                                            d="M204.4817352294922 85.494L204.4817352294922 36.06025C204.4817352294922 33.39358333333334 205.81506856282553 32.06025 208.4817352294922 32.06025L207.77635955810547 32.06025C210.44302622477215 32.06025 211.77635955810547 33.39358333333334 211.77635955810547 36.06025L211.77635955810547 36.06025L211.77635955810547 85.494L211.77635955810547 85.494C211.77635955810547 85.494 204.4817352294922 85.494 204.4817352294922 85.494 "
                                                            fill="rgba(228,230,239,0.85)" fill-opacity="1"
                                                            stroke="transparent" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMasknensuh6r)"
                                                            pathTo="M 204.4817352294922 85.494L 204.4817352294922 36.06025Q 204.4817352294922 32.06025 208.4817352294922 32.06025L 207.77635955810547 32.06025Q 211.77635955810547 32.06025 211.77635955810547 36.06025L 211.77635955810547 36.06025L 211.77635955810547 85.494L 211.77635955810547 85.494z"
                                                            pathFrom="M 204.4817352294922 85.494L 204.4817352294922 85.494L 211.77635955810547 85.494L 211.77635955810547 85.494L 211.77635955810547 85.494L 211.77635955810547 85.494L 211.77635955810547 85.494L 204.4817352294922 85.494"
                                                            cy="32.06025" cx="240.6602325439453" j="5" val="50"
                                                            barHeight="53.433749999999996" barWidth="9.294624328613281">
                                                        </path>
                                                        <path id="SvgjsPath1206"
                                                            d="M241.6602325439453 85.494L241.6602325439453 14.686750000000004C241.6602325439453 12.020083333333332 242.99356587727863 10.686750000000004 245.6602325439453 10.686750000000004L244.9548568725586 10.686750000000004C247.62152353922525 10.686750000000004 248.9548568725586 12.020083333333332 248.9548568725586 14.686750000000004L248.9548568725586 14.686750000000004L248.9548568725586 85.494L248.9548568725586 85.494C248.9548568725586 85.494 241.6602325439453 85.494 241.6602325439453 85.494 "
                                                            fill="rgba(228,230,239,0.85)" fill-opacity="1"
                                                            stroke="transparent" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMasknensuh6r)"
                                                            pathTo="M 241.6602325439453 85.494L 241.6602325439453 14.686750000000004Q 241.6602325439453 10.686750000000004 245.6602325439453 10.686750000000004L 244.9548568725586 10.686750000000004Q 248.9548568725586 10.686750000000004 248.9548568725586 14.686750000000004L 248.9548568725586 14.686750000000004L 248.9548568725586 85.494L 248.9548568725586 85.494z"
                                                            pathFrom="M 241.6602325439453 85.494L 241.6602325439453 85.494L 248.9548568725586 85.494L 248.9548568725586 85.494L 248.9548568725586 85.494L 248.9548568725586 85.494L 248.9548568725586 85.494L 241.6602325439453 85.494"
                                                            cy="10.686750000000004" cx="277.83872985839844" j="6"
                                                            val="70" barHeight="74.80725" barWidth="9.294624328613281">
                                                        </path>
                                                        <path id="SvgjsPath1208"
                                                            d="M278.83872985839844 85.494L278.83872985839844 25.373500000000007C278.83872985839844 22.706833333333336 280.17206319173175 21.373500000000007 282.83872985839844 21.373500000000007L282.1333541870117 21.373500000000007C284.8000208536784 21.373500000000007 286.1333541870117 22.706833333333336 286.1333541870117 25.373500000000007L286.1333541870117 25.373500000000007L286.1333541870117 85.494L286.1333541870117 85.494C286.1333541870117 85.494 278.83872985839844 85.494 278.83872985839844 85.494 "
                                                            fill="rgba(228,230,239,0.85)" fill-opacity="1"
                                                            stroke="transparent" stroke-opacity="1"
                                                            stroke-linecap="round" stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMasknensuh6r)"
                                                            pathTo="M 278.83872985839844 85.494L 278.83872985839844 25.373500000000007Q 278.83872985839844 21.373500000000007 282.83872985839844 21.373500000000007L 282.1333541870117 21.373500000000007Q 286.1333541870117 21.373500000000007 286.1333541870117 25.373500000000007L 286.1333541870117 25.373500000000007L 286.1333541870117 85.494L 286.1333541870117 85.494z"
                                                            pathFrom="M 278.83872985839844 85.494L 278.83872985839844 85.494L 286.1333541870117 85.494L 286.1333541870117 85.494L 286.1333541870117 85.494L 286.1333541870117 85.494L 286.1333541870117 85.494L 278.83872985839844 85.494"
                                                            cy="21.373500000000007" cx="315.01722717285156" j="7"
                                                            val="60" barHeight="64.12049999999999"
                                                            barWidth="9.294624328613281"></path>
                                                        <g id="SvgjsG1192" class="apexcharts-bar-goals-markers"
                                                            style="pointer-events: none">
                                                            <g id="SvgjsG1193" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG1195" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG1197" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG1199" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG1201" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG1203" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG1205" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                            <g id="SvgjsG1207" className="apexcharts-bar-goals-groups">
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1172" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                    <g id="SvgjsG1191" class="apexcharts-datalabels" data:realIndex="1">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1257" x1="0" y1="0" x2="297.427978515625" y2="0"
                                                    stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                    stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1258" x1="0" y1="0" x2="297.427978515625" y2="0"
                                                    stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1259" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1260" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1261" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <g id="SvgjsG1235" class="apexcharts-yaxis" rel="0"
                                                transform="translate(12.572021484375, 0)">
                                                <g id="SvgjsG1236" class="apexcharts-yaxis-texts-g"><text
                                                        id="SvgjsText1237" font-family="inherit" x="20" y="41.4"
                                                        text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                        font-weight="400" fill="#a1a5b7"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan1238">80</tspan>
                                                        <title>80</title>
                                                    </text><text id="SvgjsText1239" font-family="inherit" x="20"
                                                        y="62.7735" text-anchor="end" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#a1a5b7"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan1240">60</tspan>
                                                        <title>60</title>
                                                    </text><text id="SvgjsText1241" font-family="inherit" x="20"
                                                        y="84.147" text-anchor="end" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#a1a5b7"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan1242">40</tspan>
                                                        <title>40</title>
                                                    </text><text id="SvgjsText1243" font-family="inherit" x="20"
                                                        y="105.5205" text-anchor="end" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#a1a5b7"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan1244">20</tspan>
                                                        <title>20</title>
                                                    </text><text id="SvgjsText1245" font-family="inherit" x="20"
                                                        y="126.894" text-anchor="end" dominant-baseline="auto"
                                                        font-size="12px" font-weight="400" fill="#a1a5b7"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan1246">0</tspan>
                                                        <title>0</title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1160" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 84px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: inherit; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(0, 158, 247);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: inherit; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(228, 230, 239);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: inherit; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Chart-->
                            </div>
                        </div>
                        <!--end::Mixed Widget 10-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row gy-5 g-xl-8">
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::List Widget 3-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0">
                                <h3 class="card-title fw-bolder text-dark">Todo</h3>
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button type="button"
                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor">
                                                    </rect>
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 3-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                        data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                Payments</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title=""
                                                    data-bs-original-title="Specify a target name for future usage and reference"
                                                    aria-label="Specify a target name for future usage and reference"></i></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator my-2"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <!--begin::Switch-->
                                                        <label
                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input w-30px h-20px"
                                                                type="checkbox" value="1" checked="checked"
                                                                name="notifications">
                                                            <!--end::Input-->
                                                            <!--end::Label-->
                                                            <span
                                                                class="form-check-label text-muted fs-6">Recuring</span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Switch-->
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">Settings</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 3-->
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-2">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-8">
                                    <!--begin::Bullet-->
                                    <span class="bullet bullet-vertical h-40px bg-success"></span>
                                    <!--end::Bullet-->
                                    <!--begin::Checkbox-->
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                    <!--end::Checkbox-->
                                    <!--begin::Description-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Create
                                            FireStone Logo</a>
                                        <span class="text-muted fw-bold d-block">Due in 2 Days</span>
                                    </div>
                                    <!--end::Description-->
                                    <span class="badge badge-light-success fs-8 fw-bolder">New</span>
                                </div>
                                <!--end:Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-8">
                                    <!--begin::Bullet-->
                                    <span class="bullet bullet-vertical h-40px bg-primary"></span>
                                    <!--end::Bullet-->
                                    <!--begin::Checkbox-->
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                    <!--end::Checkbox-->
                                    <!--begin::Description-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Stakeholder
                                            Meeting</a>
                                        <span class="text-muted fw-bold d-block">Due in 3 Days</span>
                                    </div>
                                    <!--end::Description-->
                                    <span class="badge badge-light-primary fs-8 fw-bolder">New</span>
                                </div>
                                <!--end:Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-8">
                                    <!--begin::Bullet-->
                                    <span class="bullet bullet-vertical h-40px bg-warning"></span>
                                    <!--end::Bullet-->
                                    <!--begin::Checkbox-->
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                    <!--end::Checkbox-->
                                    <!--begin::Description-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Scoping
                                            &amp; Estimations</a>
                                        <span class="text-muted fw-bold d-block">Due in 5 Days</span>
                                    </div>
                                    <!--end::Description-->
                                    <span class="badge badge-light-warning fs-8 fw-bolder">New</span>
                                </div>
                                <!--end:Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-8">
                                    <!--begin::Bullet-->
                                    <span class="bullet bullet-vertical h-40px bg-primary"></span>
                                    <!--end::Bullet-->
                                    <!--begin::Checkbox-->
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                    <!--end::Checkbox-->
                                    <!--begin::Description-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">KPI App
                                            Showcase</a>
                                        <span class="text-muted fw-bold d-block">Due in 2 Days</span>
                                    </div>
                                    <!--end::Description-->
                                    <span class="badge badge-light-primary fs-8 fw-bolder">New</span>
                                </div>
                                <!--end:Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-8">
                                    <!--begin::Bullet-->
                                    <span class="bullet bullet-vertical h-40px bg-danger"></span>
                                    <!--end::Bullet-->
                                    <!--begin::Checkbox-->
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                    <!--end::Checkbox-->
                                    <!--begin::Description-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Project
                                            Meeting</a>
                                        <span class="text-muted fw-bold d-block">Due in 12 Days</span>
                                    </div>
                                    <!--end::Description-->
                                    <span class="badge badge-light-danger fs-8 fw-bolder">New</span>
                                </div>
                                <!--end:Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Bullet-->
                                    <span class="bullet bullet-vertical h-40px bg-success"></span>
                                    <!--end::Bullet-->
                                    <!--begin::Checkbox-->
                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                    <!--end::Checkbox-->
                                    <!--begin::Description-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Customers
                                            Update</a>
                                        <span class="text-muted fw-bold d-block">Due in 1 week</span>
                                    </div>
                                    <!--end::Description-->
                                    <span class="badge badge-light-success fs-8 fw-bolder">New</span>
                                </div>
                                <!--end:Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end:List Widget 3-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-8">
                        <!--begin::Tables Widget 9-->
                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Members Statistics</span>
                                    <span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span>
                                </h3>
                                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-trigger="hover" title="" data-bs-original-title="Click to add a user">
                                    <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_invite_friends">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                                    transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                    fill="currentColor"></rect>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->New Member</a>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-3">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fw-bolder text-muted">
                                                <th class="w-25px">
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1"
                                                            data-kt-check="true" data-kt-check-target=".widget-9-check">
                                                    </div>
                                                </th>
                                                <th class="min-w-200px">Authors</th>
                                                <th class="min-w-150px">Company</th>
                                                <th class="min-w-150px">Progress</th>
                                                <th class="min-w-100px text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input widget-9-check" type="checkbox"
                                                            value="1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-45px me-5">
                                                            <img src="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary fs-6">Ana
                                                                Simmons</a>
                                                            <span
                                                                class="text-muted fw-bold text-muted d-block fs-7">HTML,
                                                                JS, ReactJS</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary d-block fs-6">Intertico</a>
                                                    <span class="text-muted fw-bold text-muted d-block fs-7">Web,
                                                        UI/UX Design</span>
                                                </td>
                                                <td class="text-end">
                                                    <div class="d-flex flex-column w-100 me-2">
                                                        <div class="d-flex flex-stack mb-2">
                                                            <span class="text-muted me-2 fs-7 fw-bold">50%</span>
                                                        </div>
                                                        <div class="progress h-6px w-100">
                                                            <div class="progress-bar bg-primary" role="progressbar"
                                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-end flex-shrink-0">
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.3"
                                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="currentColor"></path>
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.5"
                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.5"
                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input widget-9-check" type="checkbox"
                                                            value="1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-45px me-5">
                                                            <img src="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary fs-6">Jessie
                                                                Clarcson</a>
                                                            <span class="text-muted fw-bold text-muted d-block fs-7">C#,
                                                                ASP.NET, MS SQL</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary d-block fs-6">Agoda</a>
                                                    <span class="text-muted fw-bold text-muted d-block fs-7">Houses
                                                        &amp; Hotels</span>
                                                </td>
                                                <td class="text-end">
                                                    <div class="d-flex flex-column w-100 me-2">
                                                        <div class="d-flex flex-stack mb-2">
                                                            <span class="text-muted me-2 fs-7 fw-bold">70%</span>
                                                        </div>
                                                        <div class="progress h-6px w-100">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-end flex-shrink-0">
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.3"
                                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="currentColor"></path>
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.5"
                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.5"
                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input widget-9-check" type="checkbox"
                                                            value="1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-45px me-5">
                                                            <img src="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary fs-6">Lebron
                                                                Wayde</a>
                                                            <span
                                                                class="text-muted fw-bold text-muted d-block fs-7">PHP,
                                                                Laravel, VueJS</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary d-block fs-6">RoadGee</a>
                                                    <span
                                                        class="text-muted fw-bold text-muted d-block fs-7">Transportation</span>
                                                </td>
                                                <td class="text-end">
                                                    <div class="d-flex flex-column w-100 me-2">
                                                        <div class="d-flex flex-stack mb-2">
                                                            <span class="text-muted me-2 fs-7 fw-bold">60%</span>
                                                        </div>
                                                        <div class="progress h-6px w-100">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-end flex-shrink-0">
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.3"
                                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="currentColor"></path>
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.5"
                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.5"
                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input widget-9-check" type="checkbox"
                                                            value="1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-45px me-5">
                                                            <img src="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary fs-6">Natali
                                                                Goodwin</a>
                                                            <span
                                                                class="text-muted fw-bold text-muted d-block fs-7">Python,
                                                                PostgreSQL, ReactJS</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary d-block fs-6">The
                                                        Hill</a>
                                                    <span
                                                        class="text-muted fw-bold text-muted d-block fs-7">Insurance</span>
                                                </td>
                                                <td class="text-end">
                                                    <div class="d-flex flex-column w-100 me-2">
                                                        <div class="d-flex flex-stack mb-2">
                                                            <span class="text-muted me-2 fs-7 fw-bold">50%</span>
                                                        </div>
                                                        <div class="progress h-6px w-100">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-end flex-shrink-0">
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.3"
                                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="currentColor"></path>
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.5"
                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.5"
                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input widget-9-check" type="checkbox"
                                                            value="1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-45px me-5">
                                                            <img src="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary fs-6">Kevin
                                                                Leonard</a>
                                                            <span
                                                                class="text-muted fw-bold text-muted d-block fs-7">HTML,
                                                                JS, ReactJS</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary d-block fs-6">RoadGee</a>
                                                    <span class="text-muted fw-bold text-muted d-block fs-7">Art
                                                        Director</span>
                                                </td>
                                                <td class="text-end">
                                                    <div class="d-flex flex-column w-100 me-2">
                                                        <div class="d-flex flex-stack mb-2">
                                                            <span class="text-muted me-2 fs-7 fw-bold">90%</span>
                                                        </div>
                                                        <div class="progress h-6px w-100">
                                                            <div class="progress-bar bg-info" role="progressbar"
                                                                style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-end flex-shrink-0">
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.3"
                                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="currentColor"></path>
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.5"
                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.5"
                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--begin::Body-->
                        </div>
                        <!--end::Tables Widget 9-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row gy-5 g-xl-8">
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::List Widget 2-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0">
                                <h3 class="card-title fw-bolder text-dark">Authors</h3>
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button type="button"
                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor">
                                                    </rect>
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
                                                Quick Actions</div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                    Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-2">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-7">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img src="" class="" alt="">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Text-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Emma
                                            Smith</a>
                                        <span class="text-muted d-block fw-bold">Project Manager</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-7">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img src="" class="" alt="">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Text-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Sean
                                            Bean</a>
                                        <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan
                                            CLI</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-7">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img src="" class="" alt="">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Text-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Brian
                                            Cox</a>
                                        <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan
                                            CLI</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-7">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img src="" class="" alt="">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Text-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Francis
                                            Mitcham</a>
                                        <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan
                                            CLI</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img src="" class="" alt="">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Text-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Dan
                                            Wilson</a>
                                        <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan
                                            CLI</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 2-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::List Widget 6-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0">
                                <h3 class="card-title fw-bolder text-dark">Notifications</h3>
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button type="button"
                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor">
                                                    </rect>
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 3-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                        data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                Payments</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title=""
                                                    data-bs-original-title="Specify a target name for future usage and reference"
                                                    aria-label="Specify a target name for future usage and reference"></i></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator my-2"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <!--begin::Switch-->
                                                        <label
                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input w-30px h-20px"
                                                                type="checkbox" value="1" checked="checked"
                                                                name="notifications">
                                                            <!--end::Input-->
                                                            <!--end::Label-->
                                                            <span
                                                                class="form-check-label text-muted fs-6">Recuring</span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Switch-->
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">Settings</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 3-->
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-0">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-7">
                                    <!--begin::Icon-->
                                    <span class="svg-icon svg-icon-warning me-5">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Group
                                            lunch celebration</a>
                                        <span class="text-muted fw-bold d-block">Due in 2 Days</span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Lable-->
                                    <span class="fw-bolder text-warning py-1">+28%</span>
                                    <!--end::Lable-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center bg-light-success rounded p-5 mb-7">
                                    <!--begin::Icon-->
                                    <span class="svg-icon svg-icon-success me-5">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Navigation
                                            optimization</a>
                                        <span class="text-muted fw-bold d-block">Due in 2 Days</span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Lable-->
                                    <span class="fw-bolder text-success py-1">+50%</span>
                                    <!--end::Lable-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-7">
                                    <!--begin::Icon-->
                                    <span class="svg-icon svg-icon-danger me-5">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Rebrand
                                            strategy planning</a>
                                        <span class="text-muted fw-bold d-block">Due in 5 Days</span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Lable-->
                                    <span class="fw-bolder text-danger py-1">-27%</span>
                                    <!--end::Lable-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center bg-light-info rounded p-5">
                                    <!--begin::Icon-->
                                    <span class="svg-icon svg-icon-info me-5">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Product
                                            goals strategy</a>
                                        <span class="text-muted fw-bold d-block">Due in 7 Days</span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Lable-->
                                    <span class="fw-bolder text-info py-1">+8%</span>
                                    <!--end::Lable-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 6-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::List Widget 4-->
                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">Trends</span>
                                    <span class="text-muted mt-1 fw-bold fs-7">Latest tech trends</span>
                                </h3>
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button type="button"
                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor">
                                                    </rect>
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 3-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                        data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                Payments</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title=""
                                                    data-bs-original-title="Specify a target name for future usage and reference"
                                                    aria-label="Specify a target name for future usage and reference"></i></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator my-2"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <!--begin::Switch-->
                                                        <label
                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input w-30px h-20px"
                                                                type="checkbox" value="1" checked="checked"
                                                                name="notifications">
                                                            <!--end::Input-->
                                                            <!--end::Label-->
                                                            <span
                                                                class="form-check-label text-muted fs-6">Recuring</span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Switch-->
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">Settings</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 3-->
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="" class="h-50 align-self-center" alt="">
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Top
                                                Authors</a>
                                            <span class="text-muted fw-bold d-block fs-7">Mark, Rowling,
                                                Esther</span>
                                        </div>
                                        <span class="badge badge-light fw-bolder my-2">+82$</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="" class="h-50 align-self-center" alt="">
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Popular
                                                Authors</a>
                                            <span class="text-muted fw-bold d-block fs-7">Randy, Steve,
                                                Mike</span>
                                        </div>
                                        <span class="badge badge-light fw-bolder my-2">+280$</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="" class="h-50 align-self-center" alt="">
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">New
                                                Users</a>
                                            <span class="text-muted fw-bold d-block fs-7">John, Pat,
                                                Jimmy</span>
                                        </div>
                                        <span class="badge badge-light fw-bolder my-2">+4500$</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="" class="h-50 align-self-center" alt="">
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Active
                                                Customers</a>
                                            <span class="text-muted fw-bold d-block fs-7">Mark, Rowling,
                                                Esther</span>
                                        </div>
                                        <span class="badge badge-light fw-bolder my-2">+686$</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="" class="h-50 align-self-center" alt="">
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#"
                                                class="text-gray-800 text-hover-primary fs-6 fw-bolder">Bestseller
                                                Theme</a>
                                            <span class="text-muted fw-bold d-block fs-7">Disco, Retro,
                                                Sports</span>
                                        </div>
                                        <span class="badge badge-light fw-bolder my-2">+726$</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 4-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-8">
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::Mixed Widget 5-->
                        <div class="card card-xxl-stretch mb-xl-8">
                            <!--begin::Beader-->
                            <div class="card-header border-0 py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Trends</span>
                                    <span class="text-muted fw-bold fs-7">Latest trends</span>
                                </h3>
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button type="button"
                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor">
                                                    </rect>
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 3-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                        data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                Payments</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title=""
                                                    data-bs-original-title="Specify a target name for future usage and reference"
                                                    aria-label="Specify a target name for future usage and reference"></i></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator my-2"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <!--begin::Switch-->
                                                        <label
                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input w-30px h-20px"
                                                                type="checkbox" value="1" checked="checked"
                                                                name="notifications">
                                                            <!--end::Input-->
                                                            <!--end::Label-->
                                                            <span
                                                                class="form-check-label text-muted fs-6">Recuring</span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Switch-->
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">Settings</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 3-->
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column">
                                <!--begin::Chart-->
                                <div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="success"
                                    style="height: 150px; min-height: 150px;">
                                    <div id="apexcharts8z9nivcv"
                                        class="apexcharts-canvas apexcharts8z9nivcv apexcharts-theme-light"
                                        style="width: 292px; height: 150px;"><svg id="SvgjsSvg1069" width="292"
                                            height="150" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG1071" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1070">
                                                    <clipPath id="gridRectMask8z9nivcv">
                                                        <rect id="SvgjsRect1074" width="299" height="153" x="-3.5"
                                                            y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask8z9nivcv"></clipPath>
                                                    <clipPath id="nonForecastMask8z9nivcv"></clipPath>
                                                    <clipPath id="gridRectMarkerMask8z9nivcv">
                                                        <rect id="SvgjsRect1075" width="296" height="154" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG1082" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1083" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1091" class="apexcharts-grid">
                                                    <g id="SvgjsG1092" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1094" x1="0" y1="0" x2="292" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1095" x1="0" y1="15" x2="292" y2="15"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1096" x1="0" y1="30" x2="292" y2="30"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1097" x1="0" y1="45" x2="292" y2="45"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1098" x1="0" y1="60" x2="292" y2="60"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1099" x1="0" y1="75" x2="292" y2="75"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1100" x1="0" y1="90" x2="292" y2="90"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1101" x1="0" y1="105" x2="292" y2="105"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1102" x1="0" y1="120" x2="292" y2="120"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1103" x1="0" y1="135" x2="292" y2="135"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1104" x1="0" y1="150" x2="292" y2="150"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1093" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1106" x1="0" y1="150" x2="292" y2="150"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                    <line id="SvgjsLine1105" x1="0" y1="1" x2="0" y2="150"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG1076"
                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1077" class="apexcharts-series" seriesName="NetxProfit"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1080"
                                                            d="M0 150L0 80.76923076923077C20.44 80.76923076923077 37.96000000000001 80.76923076923077 58.400000000000006 80.76923076923077C78.84 80.76923076923077 96.36000000000001 11.538461538461547 116.80000000000001 11.538461538461547C137.24 11.538461538461547 154.76000000000002 92.3076923076923 175.20000000000002 92.3076923076923C195.64000000000001 92.3076923076923 213.16000000000003 92.3076923076923 233.60000000000002 92.3076923076923C254.04000000000002 92.3076923076923 271.56 57.69230769230769 292 57.69230769230769C292 57.69230769230769 292 57.69230769230769 292 150M292 57.69230769230769C292 57.69230769230769 292 57.69230769230769 292 57.69230769230769 "
                                                            fill="rgba(232,255,243,1)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMask8z9nivcv)"
                                                            pathTo="M 0 150L 0 80.76923076923077C 20.44 80.76923076923077 37.96000000000001 80.76923076923077 58.400000000000006 80.76923076923077C 78.84 80.76923076923077 96.36000000000001 11.538461538461547 116.80000000000001 11.538461538461547C 137.24 11.538461538461547 154.76000000000002 92.3076923076923 175.20000000000002 92.3076923076923C 195.64000000000001 92.3076923076923 213.16000000000003 92.3076923076923 233.60000000000002 92.3076923076923C 254.04000000000002 92.3076923076923 271.56 57.69230769230769 292 57.69230769230769C 292 57.69230769230769 292 57.69230769230769 292 150M 292 57.69230769230769z"
                                                            pathFrom="M -1 150L -1 150L 58.400000000000006 150L 116.80000000000001 150L 175.20000000000002 150L 233.60000000000002 150L 292 150">
                                                        </path>
                                                        <path id="SvgjsPath1081"
                                                            d="M0 80.76923076923077C20.44 80.76923076923077 37.96000000000001 80.76923076923077 58.400000000000006 80.76923076923077C78.84 80.76923076923077 96.36000000000001 11.538461538461547 116.80000000000001 11.538461538461547C137.24 11.538461538461547 154.76000000000002 92.3076923076923 175.20000000000002 92.3076923076923C195.64000000000001 92.3076923076923 213.16000000000003 92.3076923076923 233.60000000000002 92.3076923076923C254.04000000000002 92.3076923076923 271.56 57.69230769230769 292 57.69230769230769C292 57.69230769230769 292 57.69230769230769 292 57.69230769230769 "
                                                            fill="none" fill-opacity="1" stroke="#50cd89"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMask8z9nivcv)"
                                                            pathTo="M 0 80.76923076923077C 20.44 80.76923076923077 37.96000000000001 80.76923076923077 58.400000000000006 80.76923076923077C 78.84 80.76923076923077 96.36000000000001 11.538461538461547 116.80000000000001 11.538461538461547C 137.24 11.538461538461547 154.76000000000002 92.3076923076923 175.20000000000002 92.3076923076923C 195.64000000000001 92.3076923076923 213.16000000000003 92.3076923076923 233.60000000000002 92.3076923076923C 254.04000000000002 92.3076923076923 271.56 57.69230769230769 292 57.69230769230769"
                                                            pathFrom="M -1 150L -1 150L 58.400000000000006 150L 116.80000000000001 150L 175.20000000000002 150L 233.60000000000002 150L 292 150">
                                                        </path>
                                                        <g id="SvgjsG1078" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle1112" r="0" cx="0" cy="0"
                                                                    class="apexcharts-marker whr3am3xmi no-pointer-events"
                                                                    stroke="#50cd89" fill="#e8fff3" fill-opacity="1"
                                                                    stroke-width="3" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1079" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1107" x1="0" y1="0" x2="292" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1108" x1="0" y1="0" x2="292" y2="0"
                                                    stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1109" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1110" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1111" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <g id="SvgjsG1090" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1072" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 75px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: inherit; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(232, 255, 243);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: inherit; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                            <div class="apexcharts-xaxistooltip-text"
                                                style="font-family: inherit; font-size: 12px;"></div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Chart-->
                                <!--begin::Items-->
                                <div class="mt-5">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack mb-5">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light">
                                                    <img src="" class="h-50" alt="">
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top
                                                    Authors</a>
                                                <div class="fs-7 text-muted fw-bold mt-1">Ricky Hunt, Sandra
                                                    Trepp</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Label-->
                                        <div class="badge badge-light fw-bold py-4 px-3">+82$</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack mb-5">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light">
                                                    <img src="" class="h-50" alt="">
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top
                                                    Sales</a>
                                                <div class="fs-7 text-muted fw-bold mt-1">PitStop Emails
                                                </div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Label-->
                                        <div class="badge badge-light fw-bold py-4 px-3">+82$</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light">
                                                    <img src="" class="h-50" alt="">
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="py-1">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top
                                                    Engagement</a>
                                                <div class="fs-7 text-muted fw-bold mt-1">KT.com</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Label-->
                                        <div class="badge badge-light fw-bold py-4 px-3">+82$</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Mixed Widget 5-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-8">
                        <!--begin::Tables Widget 5-->
                        <div class="card card-xxl-stretch mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Latest Products</span>
                                    <span class="text-muted mt-1 fw-bold fs-7">More than 400 new
                                        products</span>
                                </h3>
                                <div class="card-toolbar">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1 active"
                                                data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">Month</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1"
                                                data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Week</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4"
                                                data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">Day</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-3">
                                <div class="tab-content">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table
                                                class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="border-0">
                                                        <th class="p-0 w-50px"></th>
                                                        <th class="p-0 min-w-150px"></th>
                                                        <th class="p-0 min-w-140px"></th>
                                                        <th class="p-0 min-w-110px"></th>
                                                        <th class="p-0 min-w-50px"></th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="" class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad
                                                                Simmons</a>
                                                            <span class="text-muted fw-bold d-block">Movie
                                                                Creator</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">React, HTML
                                                        </td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-success">Approved</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="" class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                                Authors</a>
                                                            <span class="text-muted fw-bold d-block">Most
                                                                Successful</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">Python,
                                                            MySQL</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-warning">In
                                                                Progress</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="" class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                                Users</a>
                                                            <span class="text-muted fw-bold d-block">Awesome
                                                                Users</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">
                                                            Laravel,Metronic</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-primary">Success</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="" class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                Customers</a>
                                                            <span class="text-muted fw-bold d-block">Movie
                                                                Creator</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">AngularJS,
                                                            C#</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-danger">Rejected</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="" class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller
                                                                Theme</a>
                                                            <span class="text-muted fw-bold d-block">Best
                                                                Customers</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">ReactJS,
                                                            Ruby</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-warning">In
                                                                Progress</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table
                                                class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="border-0">
                                                        <th class="p-0 w-50px"></th>
                                                        <th class="p-0 min-w-150px"></th>
                                                        <th class="p-0 min-w-140px"></th>
                                                        <th class="p-0 min-w-110px"></th>
                                                        <th class="p-0 min-w-50px"></th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="" class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad
                                                                Simmons</a>
                                                            <span class="text-muted fw-bold d-block">Movie
                                                                Creator</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">React, HTML
                                                        </td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-success">Approved</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="" class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                                Authors</a>
                                                            <span class="text-muted fw-bold d-block">Most
                                                                Successful</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">Python,
                                                            MySQL</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-warning">In
                                                                Progress</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="" class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                Customers</a>
                                                            <span class="text-muted fw-bold d-block">Movie
                                                                Creator</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">AngularJS,
                                                            C#</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-danger">Rejected</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_table_widget_5_tab_3">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table
                                                class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="border-0">
                                                        <th class="p-0 w-50px"></th>
                                                        <th class="p-0 min-w-150px"></th>
                                                        <th class="p-0 min-w-140px"></th>
                                                        <th class="p-0 min-w-110px"></th>
                                                        <th class="p-0 min-w-50px"></th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="" class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller
                                                                Theme</a>
                                                            <span class="text-muted fw-bold d-block">Best
                                                                Customers</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">ReactJS,
                                                            Ruby</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-warning">In
                                                                Progress</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="" class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                Customers</a>
                                                            <span class="text-muted fw-bold d-block">Movie
                                                                Creator</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">AngularJS,
                                                            C#</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-danger">Rejected</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="" class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                                Users</a>
                                                            <span class="text-muted fw-bold d-block">Awesome
                                                                Users</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">
                                                            Laravel,Metronic</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-primary">Success</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="" class="h-50 align-self-center" alt="">
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                                Authors</a>
                                                            <span class="text-muted fw-bold d-block">Most
                                                                Successful</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">Python,
                                                            MySQL</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-warning">In
                                                                Progress</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Tables Widget 5-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Calendar Widget 1-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-dark">My Calendar</span>
                            <span class="text-muted mt-1 fw-bold fs-7">Preview monthly events</span>
                        </h3>
                        <div class="card-toolbar">
                            <a href="../../demo1/dist/apps/calendar.html" class="btn btn-primary">Manage
                                Calendar</a>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Calendar-->
                        <div id="kt_calendar_widget_1" class="fc fc-media-screen fc-direction-ltr fc-theme-standard"
                            style="height: 800px;">
                            <div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr">
                                <div class="fc-toolbar-chunk">
                                    <div class="fc-button-group"><button type="button" title="Previous month"
                                            aria-pressed="false"
                                            class="fc-prev-button fc-button fc-button-primary"><span
                                                class="fc-icon fc-icon-chevron-left"></span></button><button
                                            type="button" title="Next month" aria-pressed="false"
                                            class="fc-next-button fc-button fc-button-primary"><span
                                                class="fc-icon fc-icon-chevron-right"></span></button></div><button
                                        type="button" title="This month" disabled="" aria-pressed="false"
                                        class="fc-today-button fc-button fc-button-primary">today</button>
                                </div>
                                <div class="fc-toolbar-chunk">
                                    <h2 class="fc-toolbar-title" id="fc-dom-1">August 2024</h2>
                                </div>
                                <div class="fc-toolbar-chunk">
                                    <div class="fc-button-group"><button type="button" title="month view"
                                            aria-pressed="true"
                                            class="fc-dayGridMonth-button fc-button fc-button-primary fc-button-active">month</button><button
                                            type="button" title="week view" aria-pressed="false"
                                            class="fc-timeGridWeek-button fc-button fc-button-primary">week</button><button
                                            type="button" title="day view" aria-pressed="false"
                                            class="fc-timeGridDay-button fc-button fc-button-primary">day</button><button
                                            type="button" title="list view" aria-pressed="false"
                                            class="fc-listMonth-button fc-button fc-button-primary">list</button></div>
                                </div>
                            </div>
                            <div aria-labelledby="fc-dom-1" class="fc-view-harness fc-view-harness-active">
                                <div class="fc-daygrid fc-dayGridMonth-view fc-view">
                                    <table role="grid" class="fc-scrollgrid  fc-scrollgrid-liquid">
                                        <thead role="rowgroup">
                                            <tr role="presentation"
                                                class="fc-scrollgrid-section fc-scrollgrid-section-header ">
                                                <th role="presentation">
                                                    <div class="fc-scroller-harness">
                                                        <div class="fc-scroller" style="overflow: hidden;">
                                                            <table role="presentation" class="fc-col-header "
                                                                style="width: 1042px;">
                                                                <colgroup></colgroup>
                                                                <thead role="presentation">
                                                                    <tr role="row">
                                                                        <th role="columnheader"
                                                                            class="fc-col-header-cell fc-day fc-day-sun">
                                                                            <div class="fc-scrollgrid-sync-inner"><a
                                                                                    aria-label="Sunday"
                                                                                    class="fc-col-header-cell-cushion ">Sun</a>
                                                                            </div>
                                                                        </th>
                                                                        <th role="columnheader"
                                                                            class="fc-col-header-cell fc-day fc-day-mon">
                                                                            <div class="fc-scrollgrid-sync-inner"><a
                                                                                    aria-label="Monday"
                                                                                    class="fc-col-header-cell-cushion ">Mon</a>
                                                                            </div>
                                                                        </th>
                                                                        <th role="columnheader"
                                                                            class="fc-col-header-cell fc-day fc-day-tue">
                                                                            <div class="fc-scrollgrid-sync-inner"><a
                                                                                    aria-label="Tuesday"
                                                                                    class="fc-col-header-cell-cushion ">Tue</a>
                                                                            </div>
                                                                        </th>
                                                                        <th role="columnheader"
                                                                            class="fc-col-header-cell fc-day fc-day-wed">
                                                                            <div class="fc-scrollgrid-sync-inner"><a
                                                                                    aria-label="Wednesday"
                                                                                    class="fc-col-header-cell-cushion ">Wed</a>
                                                                            </div>
                                                                        </th>
                                                                        <th role="columnheader"
                                                                            class="fc-col-header-cell fc-day fc-day-thu">
                                                                            <div class="fc-scrollgrid-sync-inner"><a
                                                                                    aria-label="Thursday"
                                                                                    class="fc-col-header-cell-cushion ">Thu</a>
                                                                            </div>
                                                                        </th>
                                                                        <th role="columnheader"
                                                                            class="fc-col-header-cell fc-day fc-day-fri">
                                                                            <div class="fc-scrollgrid-sync-inner"><a
                                                                                    aria-label="Friday"
                                                                                    class="fc-col-header-cell-cushion ">Fri</a>
                                                                            </div>
                                                                        </th>
                                                                        <th role="columnheader"
                                                                            class="fc-col-header-cell fc-day fc-day-sat">
                                                                            <div class="fc-scrollgrid-sync-inner"><a
                                                                                    aria-label="Saturday"
                                                                                    class="fc-col-header-cell-cushion ">Sat</a>
                                                                            </div>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody role="rowgroup">
                                            <tr role="presentation"
                                                class="fc-scrollgrid-section fc-scrollgrid-section-body  fc-scrollgrid-section-liquid">
                                                <td role="presentation">
                                                    <div class="fc-scroller-harness fc-scroller-harness-liquid">
                                                        <div class="fc-scroller fc-scroller-liquid-absolute"
                                                            style="overflow: hidden auto;">
                                                            <div class="fc-daygrid-body fc-daygrid-body-balanced "
                                                                style="width: 1042px;">
                                                                <table role="presentation"
                                                                    class="fc-scrollgrid-sync-table"
                                                                    style="width: 1042px; height: 692px;">
                                                                    <colgroup></colgroup>
                                                                    <tbody role="presentation">
                                                                        <tr role="row">
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-sun fc-day-past fc-day-other"
                                                                                data-date="2024-07-28"
                                                                                aria-labelledby="fc-dom-2">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-2"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to July 28, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">28</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-mon fc-day-past fc-day-other"
                                                                                data-date="2024-07-29"
                                                                                aria-labelledby="fc-dom-4">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-4"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to July 29, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">29</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-tue fc-day-past fc-day-other"
                                                                                data-date="2024-07-30"
                                                                                aria-labelledby="fc-dom-6">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-6"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to July 30, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">30</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-wed fc-day-past fc-day-other"
                                                                                data-date="2024-07-31"
                                                                                aria-labelledby="fc-dom-8">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-8"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to July 31, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">31</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-thu fc-day-past"
                                                                                data-date="2024-08-01"
                                                                                aria-labelledby="fc-dom-10">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-10"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 1, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">1</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness"
                                                                                            style="margin-top: 0px;"><a
                                                                                                class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past fc-event-danger fc-event-solid-warning">
                                                                                                <div
                                                                                                    class="fc-event-main">
                                                                                                    <div
                                                                                                        class="fc-event-main-frame">
                                                                                                        <div
                                                                                                            class="fc-event-title-container">
                                                                                                            <div
                                                                                                                class="fc-event-title fc-sticky">
                                                                                                                All Day
                                                                                                                Event
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-event-resizer fc-event-resizer-end">
                                                                                                </div>
                                                                                            </a></div>
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-fri fc-day-past"
                                                                                data-date="2024-08-02"
                                                                                aria-labelledby="fc-dom-12">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-12"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 2, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">2</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness"
                                                                                            style="margin-top: 0px;"><a
                                                                                                class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past fc-event-primary">
                                                                                                <div
                                                                                                    class="fc-event-main">
                                                                                                    <div
                                                                                                        class="fc-event-main-frame">
                                                                                                        <div
                                                                                                            class="fc-event-title-container">
                                                                                                            <div
                                                                                                                class="fc-event-title fc-sticky">
                                                                                                                Company
                                                                                                                Trip
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-event-resizer fc-event-resizer-end">
                                                                                                </div>
                                                                                            </a></div>
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-sat fc-day-past"
                                                                                data-date="2024-08-03"
                                                                                aria-labelledby="fc-dom-14">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-14"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 3, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">3</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness"
                                                                                            style="margin-top: 0px;"><a
                                                                                                class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-start fc-event-past fc-event-light fc-event-solid-primary">
                                                                                                <div
                                                                                                    class="fc-event-main">
                                                                                                    <div
                                                                                                        class="fc-event-main-frame">
                                                                                                        <div
                                                                                                            class="fc-event-title-container">
                                                                                                            <div
                                                                                                                class="fc-event-title fc-sticky">
                                                                                                                ICT Expo
                                                                                                                2017 -
                                                                                                                Product
                                                                                                                Release
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </a></div>
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr role="row">
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-sun fc-day-past"
                                                                                data-date="2024-08-04"
                                                                                aria-labelledby="fc-dom-16">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-16"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 4, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">4</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness"
                                                                                            style="margin-top: 0px;"><a
                                                                                                class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-end fc-event-past fc-event-light fc-event-solid-primary">
                                                                                                <div
                                                                                                    class="fc-event-main">
                                                                                                    <div
                                                                                                        class="fc-event-main-frame">
                                                                                                        <div
                                                                                                            class="fc-event-title-container">
                                                                                                            <div
                                                                                                                class="fc-event-title fc-sticky">
                                                                                                                ICT Expo
                                                                                                                2017 -
                                                                                                                Product
                                                                                                                Release
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-event-resizer fc-event-resizer-end">
                                                                                                </div>
                                                                                            </a></div>
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-mon fc-day-past"
                                                                                data-date="2024-08-05"
                                                                                aria-labelledby="fc-dom-18">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-18"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 5, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">5</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-tue fc-day-past"
                                                                                data-date="2024-08-06"
                                                                                aria-labelledby="fc-dom-20">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-20"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 6, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">6</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-wed fc-day-past"
                                                                                data-date="2024-08-07"
                                                                                aria-labelledby="fc-dom-22">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-22"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 7, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">7</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-thu fc-day-past"
                                                                                data-date="2024-08-08"
                                                                                aria-labelledby="fc-dom-24">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-24"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 8, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">8</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-fri fc-day-past"
                                                                                data-date="2024-08-09"
                                                                                aria-labelledby="fc-dom-26">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-26"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 9, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">9</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness"
                                                                                            style="margin-top: 0px;"><a
                                                                                                class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past fc-event-danger">
                                                                                                <div
                                                                                                    class="fc-daygrid-event-dot">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-event-time">
                                                                                                    4p</div>
                                                                                                <div
                                                                                                    class="fc-event-title">
                                                                                                    Repeating Event
                                                                                                </div>
                                                                                            </a></div>
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-sat fc-day-past"
                                                                                data-date="2024-08-10"
                                                                                aria-labelledby="fc-dom-28">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-28"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 10, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">10</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr role="row">
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-sun fc-day-past"
                                                                                data-date="2024-08-11"
                                                                                aria-labelledby="fc-dom-30">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-30"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 11, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">11</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-mon fc-day-past"
                                                                                data-date="2024-08-12"
                                                                                aria-labelledby="fc-dom-32">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-32"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 12, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">12</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness"
                                                                                            style="margin-top: 0px;"><a
                                                                                                class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past">
                                                                                                <div
                                                                                                    class="fc-event-main">
                                                                                                    <div
                                                                                                        class="fc-event-main-frame">
                                                                                                        <div
                                                                                                            class="fc-event-title-container">
                                                                                                            <div
                                                                                                                class="fc-event-title fc-sticky">
                                                                                                                Dinner
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-event-resizer fc-event-resizer-end">
                                                                                                </div>
                                                                                            </a></div>
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-tue fc-day-past"
                                                                                data-date="2024-08-13"
                                                                                aria-labelledby="fc-dom-34">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-34"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 13, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">13</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-wed fc-day-past"
                                                                                data-date="2024-08-14"
                                                                                aria-labelledby="fc-dom-36">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-36"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 14, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">14</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness"
                                                                                            style="margin-top: 0px;"><a
                                                                                                class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past fc-event-success">
                                                                                                <div
                                                                                                    class="fc-daygrid-event-dot">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-event-time">
                                                                                                    1:30p</div>
                                                                                                <div
                                                                                                    class="fc-event-title">
                                                                                                    Reporting</div>
                                                                                            </a></div>
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-thu fc-day-past"
                                                                                data-date="2024-08-15"
                                                                                aria-labelledby="fc-dom-38">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-38"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 15, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">15</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-fri fc-day-past"
                                                                                data-date="2024-08-16"
                                                                                aria-labelledby="fc-dom-40">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-40"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 16, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">16</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness"
                                                                                            style="margin-top: 0px;"><a
                                                                                                class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past">
                                                                                                <div
                                                                                                    class="fc-daygrid-event-dot">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-event-time">
                                                                                                    4p</div>
                                                                                                <div
                                                                                                    class="fc-event-title">
                                                                                                    Repeating Event
                                                                                                </div>
                                                                                            </a></div>
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-sat fc-day-past"
                                                                                data-date="2024-08-17"
                                                                                aria-labelledby="fc-dom-42">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-42"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 17, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">17</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness"
                                                                                            style="margin-top: 0px;"><a
                                                                                                class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-start fc-event-primary">
                                                                                                <div
                                                                                                    class="fc-event-main">
                                                                                                    <div
                                                                                                        class="fc-event-main-frame">
                                                                                                        <div
                                                                                                            class="fc-event-title-container">
                                                                                                            <div
                                                                                                                class="fc-event-title fc-sticky">
                                                                                                                Conference
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </a></div>
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr role="row">
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-sun fc-day-today "
                                                                                data-date="2024-08-18"
                                                                                aria-labelledby="fc-dom-44">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-44"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 18, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">18</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness"
                                                                                            style="margin-top: 0px;"><a
                                                                                                class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-end fc-event-primary">
                                                                                                <div
                                                                                                    class="fc-event-main">
                                                                                                    <div
                                                                                                        class="fc-event-main-frame">
                                                                                                        <div
                                                                                                            class="fc-event-title-container">
                                                                                                            <div
                                                                                                                class="fc-event-title fc-sticky">
                                                                                                                Conference
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-event-resizer fc-event-resizer-end">
                                                                                                </div>
                                                                                            </a></div>
                                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                            style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                            <a
                                                                                                class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today">
                                                                                                <div
                                                                                                    class="fc-daygrid-event-dot">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-event-time">
                                                                                                    10:30a</div>
                                                                                                <div
                                                                                                    class="fc-event-title">
                                                                                                    Meeting</div>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                            style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                            <a
                                                                                                class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today fc-event-info">
                                                                                                <div
                                                                                                    class="fc-daygrid-event-dot">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-event-time">
                                                                                                    12p</div>
                                                                                                <div
                                                                                                    class="fc-event-title">
                                                                                                    Lunch</div>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                            style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                            <a
                                                                                                class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today fc-event-warning">
                                                                                                <div
                                                                                                    class="fc-daygrid-event-dot">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-event-time">
                                                                                                    2:30p</div>
                                                                                                <div
                                                                                                    class="fc-event-title">
                                                                                                    Meeting</div>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                            style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                            <a
                                                                                                class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today fc-event-info">
                                                                                                <div
                                                                                                    class="fc-daygrid-event-dot">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-event-time">
                                                                                                    5:30p</div>
                                                                                                <div
                                                                                                    class="fc-event-title">
                                                                                                    Happy Hour</div>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;"><a
                                                                                                class="fc-daygrid-more-link fc-more-link"
                                                                                                title="Show 4 more events"
                                                                                                aria-expanded="false"
                                                                                                aria-controls=""
                                                                                                tabindex="0">+4 more</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-mon fc-day-future"
                                                                                data-date="2024-08-19"
                                                                                aria-labelledby="fc-dom-46">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-46"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 19, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">19</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness"
                                                                                            style="margin-top: 0px;"><a
                                                                                                class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-event-solid-danger fc-event-light">
                                                                                                <div
                                                                                                    class="fc-daygrid-event-dot">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-event-time">
                                                                                                    5a</div>
                                                                                                <div
                                                                                                    class="fc-event-title">
                                                                                                    Dinner</div>
                                                                                            </a></div>
                                                                                        <div class="fc-daygrid-event-harness"
                                                                                            style="margin-top: 0px;"><a
                                                                                                class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-event-primary">
                                                                                                <div
                                                                                                    class="fc-daygrid-event-dot">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-event-time">
                                                                                                    7a</div>
                                                                                                <div
                                                                                                    class="fc-event-title">
                                                                                                    Birthday Party</div>
                                                                                            </a></div>
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-tue fc-day-future"
                                                                                data-date="2024-08-20"
                                                                                aria-labelledby="fc-dom-48">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-48"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 20, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">20</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-wed fc-day-future"
                                                                                data-date="2024-08-21"
                                                                                aria-labelledby="fc-dom-50">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-50"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 21, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">21</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-thu fc-day-future"
                                                                                data-date="2024-08-22"
                                                                                aria-labelledby="fc-dom-52">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-52"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 22, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">22</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-fri fc-day-future"
                                                                                data-date="2024-08-23"
                                                                                aria-labelledby="fc-dom-54">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-54"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 23, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">23</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-sat fc-day-future"
                                                                                data-date="2024-08-24"
                                                                                aria-labelledby="fc-dom-56">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-56"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 24, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">24</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr role="row">
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-sun fc-day-future"
                                                                                data-date="2024-08-25"
                                                                                aria-labelledby="fc-dom-58">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-58"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 25, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">25</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-mon fc-day-future"
                                                                                data-date="2024-08-26"
                                                                                aria-labelledby="fc-dom-60">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-60"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 26, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">26</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-tue fc-day-future"
                                                                                data-date="2024-08-27"
                                                                                aria-labelledby="fc-dom-62">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-62"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 27, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">27</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-wed fc-day-future"
                                                                                data-date="2024-08-28"
                                                                                aria-labelledby="fc-dom-64">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-64"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 28, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">28</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-event-harness"
                                                                                            style="margin-top: 0px;"><a
                                                                                                class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-event-solid-info fc-event-light"
                                                                                                href="http://google.com/">
                                                                                                <div
                                                                                                    class="fc-event-main">
                                                                                                    <div
                                                                                                        class="fc-event-main-frame">
                                                                                                        <div
                                                                                                            class="fc-event-title-container">
                                                                                                            <div
                                                                                                                class="fc-event-title fc-sticky">
                                                                                                                Click
                                                                                                                for
                                                                                                                Google
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="fc-event-resizer fc-event-resizer-end">
                                                                                                </div>
                                                                                            </a></div>
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-thu fc-day-future"
                                                                                data-date="2024-08-29"
                                                                                aria-labelledby="fc-dom-66">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-66"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 29, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">29</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-fri fc-day-future"
                                                                                data-date="2024-08-30"
                                                                                aria-labelledby="fc-dom-68">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-68"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 30, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">30</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-sat fc-day-future"
                                                                                data-date="2024-08-31"
                                                                                aria-labelledby="fc-dom-70">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-70"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to August 31, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">31</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr role="row">
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-sun fc-day-future fc-day-other"
                                                                                data-date="2024-09-01"
                                                                                aria-labelledby="fc-dom-72">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-72"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to September 1, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">1</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-mon fc-day-future fc-day-other"
                                                                                data-date="2024-09-02"
                                                                                aria-labelledby="fc-dom-74">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-74"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to September 2, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">2</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-tue fc-day-future fc-day-other"
                                                                                data-date="2024-09-03"
                                                                                aria-labelledby="fc-dom-76">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-76"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to September 3, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">3</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-wed fc-day-future fc-day-other"
                                                                                data-date="2024-09-04"
                                                                                aria-labelledby="fc-dom-78">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-78"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to September 4, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">4</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-thu fc-day-future fc-day-other"
                                                                                data-date="2024-09-05"
                                                                                aria-labelledby="fc-dom-80">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-80"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to September 5, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">5</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-fri fc-day-future fc-day-other"
                                                                                data-date="2024-09-06"
                                                                                aria-labelledby="fc-dom-82">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-82"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to September 6, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">6</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td role="gridcell"
                                                                                class="fc-daygrid-day fc-day fc-day-sat fc-day-future fc-day-other"
                                                                                data-date="2024-09-07"
                                                                                aria-labelledby="fc-dom-84">
                                                                                <div
                                                                                    class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                    <div class="fc-daygrid-day-top"><a
                                                                                            id="fc-dom-84"
                                                                                            class="fc-daygrid-day-number"
                                                                                            title="Go to September 7, 2024"
                                                                                            data-navlink=""
                                                                                            tabindex="0">7</a></div>
                                                                                    <div class="fc-daygrid-day-events">
                                                                                        <div class="fc-daygrid-day-bottom"
                                                                                            style="margin-top: 0px;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-daygrid-day-bg">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--end::Calendar-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Calendar Widget 1-->
                <!--begin::Modals-->
                <!--begin::Modal - New Product-->
                <div class="modal fade" id="kt_modal_add_event" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Form-->
                            <form class="form" action="#" id="kt_modal_add_event_form">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder" data-kt-calendar="title">Add Event</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                        id="kt_modal_add_event_close">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                    transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body py-10 px-lg-17">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-9">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold required mb-2">Event Name</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="calendar_event_name">
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-9">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">Event Description</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="calendar_event_description">
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-9">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">Event Location</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="calendar_event_location">
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-9">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="kt_calendar_datepicker_allday">
                                            <span class="form-check-label fw-bold"
                                                for="kt_calendar_datepicker_allday">All Day</span>
                                        </label>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row row-cols-lg-2 g-10">
                                        <div class="col">
                                            <div class="fv-row mb-9">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold mb-2 required">Event Start
                                                    Date</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid"
                                                    name="calendar_event_start_date" placeholder="Pick a start date"
                                                    id="kt_calendar_datepicker_start_date">
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <div class="col" data-kt-calendar="datepicker">
                                            <div class="fv-row mb-9">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold mb-2">Event Start Time</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid"
                                                    name="calendar_event_start_time" placeholder="Pick a start time"
                                                    id="kt_calendar_datepicker_start_time">
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row row-cols-lg-2 g-10">
                                        <div class="col">
                                            <div class="fv-row mb-9">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold mb-2 required">Event End
                                                    Date</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid"
                                                    name="calendar_event_end_date" placeholder="Pick a end date"
                                                    id="kt_calendar_datepicker_end_date">
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <div class="col" data-kt-calendar="datepicker">
                                            <div class="fv-row mb-9">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold mb-2">Event End Time</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid"
                                                    name="calendar_event_end_time" placeholder="Pick a end time"
                                                    id="kt_calendar_datepicker_end_time">
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Modal body-->
                                <!--begin::Modal footer-->
                                <div class="modal-footer flex-center">
                                    <!--begin::Button-->
                                    <button type="reset" id="kt_modal_add_event_cancel"
                                        class="btn btn-light me-3">Cancel</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="button" id="kt_modal_add_event_submit" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                                <!--end::Modal footer-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
                <!--end::Modal - New Product-->
                <!--begin::Modal - New Product-->
                <div class="modal fade" id="kt_modal_view_event" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header border-0 justify-content-end">
                                <!--begin::Edit-->
                                <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-primary me-2"
                                    data-bs-toggle="tooltip" data-bs-dismiss="click" title=""
                                    id="kt_modal_view_event_edit" data-bs-original-title="Edit Event">
                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Edit-->
                                <!--begin::Edit-->
                                <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-danger me-2"
                                    data-bs-toggle="tooltip" data-bs-dismiss="click" title=""
                                    id="kt_modal_view_event_delete" data-bs-original-title="Delete Event">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                fill="currentColor"></path>
                                            <path opacity="0.5"
                                                d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                fill="currentColor"></path>
                                            <path opacity="0.5"
                                                d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Edit-->
                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-color-gray-500 btn-active-icon-primary"
                                    data-bs-toggle="tooltip" title="" data-bs-dismiss="modal"
                                    data-bs-original-title="Hide Event">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body pt-0 pb-20 px-lg-17">
                                <!--begin::Row-->
                                <div class="d-flex">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <div class="mb-9">
                                        <!--begin::Event name-->
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="fs-3 fw-bolder me-3" data-kt-calendar="event_name"></span>
                                            <span class="badge badge-light-success" data-kt-calendar="all_day"></span>
                                        </div>
                                        <!--end::Event name-->
                                        <!--begin::Event description-->
                                        <div class="fs-6" data-kt-calendar="event_description"></div>
                                        <!--end::Event description-->
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-success me-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <circle fill="currentColor" cx="12" cy="12" r="8"></circle>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Event start date/time-->
                                    <div class="fs-6">
                                        <span class="fw-bolder">Starts</span>
                                        <span data-kt-calendar="event_start_date"></span>
                                    </div>
                                    <!--end::Event start date/time-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="d-flex align-items-center mb-9">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-danger me-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <circle fill="currentColor" cx="12" cy="12" r="8"></circle>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Event end date/time-->
                                    <div class="fs-6">
                                        <span class="fw-bolder">Ends</span>
                                        <span data-kt-calendar="event_end_date"></span>
                                    </div>
                                    <!--end::Event end date/time-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Event location-->
                                    <div class="fs-6" data-kt-calendar="event_location"></div>
                                    <!--end::Event location-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                    </div>
                </div>
                <!--end::Modal - New Product-->
                <!--end::Modals-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
</template>

<script>
import Sidebar from '../components/Sidebar.vue';

export default {
    name: 'Home',
    components: {
        Sidebar
    }
};
</script>

<style scoped>
/* Tu CSS aquí */
</style>
