@extends('admin.admin')

@section('content')

<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
<!--begin::Toolbar container-->
<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
<!--begin::Page title-->
<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
<!--begin::Title-->
<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">List MVS Quotes</h1>
<!--end::Title-->

</div>
<!--end::Page title-->

</div>
<!--end::Toolbar container-->
</div>
<!--end::Toolbar-->

<div id="kt_app_content" class="app-content flex-column-fluid">
<!--begin::Content container-->
<div id="kt_app_content_container" class="app-container container-xxl">


<!--begin::Row-->
<div class="row gy-5 g-xl-10">
<!--begin::Col-->

<!--end::Col-->
<!--begin::Col-->
<div class="col-xl-12 mb-5 mb-xl-10">
<!--begin::Table Widget 4-->
<div class="card card-flush h-xl-100">

<!--begin::Card body-->
<div class="card-body pt-2">


<div class="card card-p-0 card-flush">
<div class="card-header align-items-center py-5 gap-2 gap-md-5">
<div class="card-title">
<!--begin::Search-->
<div class="d-flex align-items-center position-relative my-1">
<span class="svg-icon svg-icon-1 position-absolute ms-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
</svg></span>
<input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Quotes" />
</div>
<!--end::Search-->
<!--begin::Export buttons-->
<div id="kt_datatable_example_1_export" class="d-none"></div>
<!--end::Export buttons-->
</div>
<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
<button type="button" class="btn btn-primary my-1 me-12" onclick="window.print();">Print Quotes</button>

<!--end::Export dropdown-->

<!--begin::Hide default export buttons-->
<div id="kt_datatable_example_buttons" class="d-none"></div>
</div>
</div>

<div class="card-body">
<table class="table align-middle border rounded table-row-dashed fs-6 gy-1 gx-4" id="kt_datatable_example">
<thead>
<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase">

<th class="min-w-100px">Quote#</th>
<th class="min-w-100px">RFQ REF#</th>
<th class="min-w-100px">DATE</th>
<th class="min-w-125px">Suppliers</th>
<th class="min-w-100px">Customer</th>
<th >Status</th>
<th>Action</th>
</tr>
</tr>
<!--end::Table row-->
</thead>
<tbody class="fw-semibold text-gray-600">
<tr class="odd">
<td><a href="/admin/view-mvs-quote"> 888</a></td>
<td>
0001
</td>
<td> 21/7/22</td>
<td>
MVS
</td>

<td >
CentrePoint
</td>


<td>
<span class="badge py-3 px-4 fs-7 badge-light-success">Accepted</span>
</td>
<td class="">
<button type="button" class="btn py-1" data-bs-toggle="dropdown" aria-expanded="false">
<i class="fa fa-cog"></i>
</button>

<ul class="dropdown-menu">
<li><a class="dropdown-item" href="/admin/view-mvs-quote">View</a></li>

</ul>

</td>

</tr>
<tr class="odd">
<td><a href="/admin/view-mvs-quote">8777</a></td>
<td>
0002
</td>
<td> 28/7/22</td>
<td>
MVS
</td>

<td >
CentrePoint
</td>


<td>
<span class="badge py-3 px-4 fs-7 badge-light-primary">Under Revision</span>
</td>
<td class="">
<button type="button" class="btn py-1" data-bs-toggle="dropdown" aria-expanded="false">
<i class="fa fa-cog"></i>
</button>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="/admin/view-mvs-quote">View</a></li>


</ul>
</td>

</tr>
<tr class="odd">
<td><a href="/admin/view-mvs-quote">778</a></td>
<td>
0005
</td>
<td> 21/7/22</td>
<td>
MVS
</td>

<td >
CentrePoint
</td>


<td>
<span class="badge py-3 px-4 fs-7 badge-light-success">Accepted</span>
</td>
<td>          

<button type="button" class="btn py-1" data-bs-toggle="dropdown" aria-expanded="false">
<i class="fa fa-cog"></i>
</button>

<ul class="dropdown-menu">
<li><a class="dropdown-item" href="/admin/view-mvs-quote">View</a></li>
</ul>

</td>

</tr>
</tbody>
</table>
</div>
</div>
</div>
<!--end::Card body-->
</div>
<!--end::Table Widget 4-->
</div>
<!--end::Invoice 2 main-->
<!--end::Table Widget 4-->
</div>
<!--end::Col-->
</div>
<!--end::Row-->

</div>
<!--end::Content container-->
</div>
<!--end::Content-->
</div>

</div>
<!--end:::Main-->
@endsection


@section('scripts')
<script src="{{ asset('assets/js/custom/widget-datatable.js') }}"></script>
@endsection