<template>
    <div class="card card-xl-stretch mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold text-gray-900">Tasks Overview</span>
			<span class="text-muted mt-1 fw-semibold fs-7">Pending 10 tasks</span>
		</h3>

        <div class="card-toolbar">
            <!--begin::Menu-->
            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>            </button>


<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_66ca7712ae260">
    <!--begin::Header-->
    <div class="px-7 py-5">
        <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
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
            <label class="form-label fw-semibold">Status:</label>
            <!--end::Label-->

            <!--begin::Input-->
            <div>
                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_66ca7712ae260" data-allow-clear="true" data-select2-id="select2-data-9-q7mk" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                    <option></option>
                    <option value="1">Approved</option>
                    <option value="2">Pending</option>
                    <option value="2">In Process</option>
                    <option value="2">Rejected</option>
                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-10-dt1f" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-h0yb-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-h0yb-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
            <!--end::Input-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="mb-10">
            <!--begin::Label-->
            <label class="form-label fw-semibold">Member Type:</label>
            <!--end::Label-->

            <!--begin::Options-->
            <div class="d-flex">
                <!--begin::Options-->
                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                    <input class="form-check-input" type="checkbox" value="1">
                    <span class="form-check-label">
                        Author
                    </span>
                </label>
                <!--end::Options-->

                <!--begin::Options-->
                <label class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="2" checked="checked">
                    <span class="form-check-label">
                        Customer
                    </span>
                </label>
                <!--end::Options-->
            </div>
            <!--end::Options-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="mb-10">
            <!--begin::Label-->
            <label class="form-label fw-semibold">Notifications:</label>
            <!--end::Label-->

            <!--begin::Switch-->
            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="">
                <label class="form-check-label">
                    Enabled
                </label>
            </div>
            <!--end::Switch-->
        </div>
        <!--end::Input group-->

        <!--begin::Actions-->
        <div class="d-flex justify-content-end">
            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>

            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Form-->
</div>
<!--end::Menu 1-->            <!--end::Menu-->
        </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-5">
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-7">
                <!--begin::Symbol-->
                <div class="symbol symbol-50px me-5">
                    <span class="symbol-label bg-light-success">
                        <i class="ki-duotone ki-abstract-26 fs-2x text-success"><span class="path1"></span><span class="path2"></span></i>                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Text-->
                <div class="d-flex flex-column">
                    <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Project Briefing</a>

                    <span class="text-muted fw-bold">Project Manager</span>
                </div>
                <!--end::Text-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-7">
                <!--begin::Symbol-->
                <div class="symbol symbol-50px me-5">
                    <span class="symbol-label bg-light-warning">
                        <i class="ki-duotone ki-pencil fs-2x text-warning"><span class="path1"></span><span class="path2"></span></i>                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Text-->
                <div class="d-flex flex-column">
                    <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Concept Design</a>

                    <span class="text-muted fw-bold">Art Director</span>
                </div>
                <!--end::Text-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-7">
                <!--begin::Symbol-->
                <div class="symbol symbol-50px me-5">
                    <span class="symbol-label bg-light-primary">
                        <i class="ki-duotone ki-message-text-2 fs-2x text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Text-->
                <div class="d-flex flex-column">
                    <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Functional Logics</a>

                    <span class="text-muted fw-bold">Lead Developer</span>
                </div>
                <!--end::Text-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-7">
                <!--begin::Symbol-->
                <div class="symbol symbol-50px me-5">
                    <span class="symbol-label bg-light-danger">
                        <i class="ki-duotone ki-disconnect fs-2x text-danger"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Text-->
                <div class="d-flex flex-column">
                    <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Development</a>

                    <span class="text-muted fw-bold">DevOps</span>
                </div>
                <!--end::Text-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center ">
                <!--begin::Symbol-->
                <div class="symbol symbol-50px me-5">
                    <span class="symbol-label bg-light-info">
                        <i class="ki-duotone ki-security-user fs-2x text-info"><span class="path1"></span><span class="path2"></span></i>                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Text-->
                <div class="d-flex flex-column">
                    <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Testing</a>

                    <span class="text-muted fw-bold">QA Managers</span>
                </div>
                <!--end::Text-->
            </div>
            <!--end::Item-->

    </div>
    <!--end::Body-->
</div>
</template>

<script>
import { computed } from 'vue'; // Importar computed
import { useRoute } from 'vue-router';

export default {
    name: 'Breadcrumb',
    setup() {
        const route = useRoute();
        const breadcrumbs = computed(() => {
            const routes = route.matched;
            return routes.map(route => ({
                name: route.meta.title || 'Home',
                path: route.path
            }));
        });

        return { breadcrumbs };
    }
}
</script>

<style scoped>
/* Estilos específicos para el breadcrumb */
</style>
