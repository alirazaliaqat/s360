@extends('customer.customer-master')

@section('content')
<!--begin::Main-->
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
<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Sample Status</h1>
<!--end::Title-->

</div>
<!--end::Page title-->


</div>
<!--end::Toolbar container-->
</div>
<!--end::Toolbar-->
<!--begin::Content-->
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


<div class="card-body">
<table class="table align-middle border rounded table-row-dashed fs-6 g-5" id="kt_datatable_example">
<thead>
<!--begin::Table row-->

<table class="table align-middle border rounded table-row-dashed fs-6 g-5" id="kt_datatable_example">
<thead>
<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase">

<th class="min-w-100px">Quote REF No.</th>
<th class="min-w-100px">DATE</th>
<th class="min-w-125px">Suppliers</th>
<th class="min-w-100px">Customer</th>
<th class="min-w-100px">Salesman</th>
<th >Status</th>

</tr>
<!--end::Table row-->
</thead>
<tbody class="fw-semibold text-gray-600">
<tr class="odd">
<td> 888</td>

<td> 21/7/22</td>
<td>
MVS
</td>

<td >
CentrePoint
</td>
<td >
Zubair
</td>

<td>
<span class="badge py-3 px-4 fs-7 badge-light-success">Sampling Recieved</span>
</td>

</tr>
<tr class="odd">
<td>8777</td>

<td> 28/7/22</td>
<td>
MVS
</td>

<td >
CentrePoint
</td>
<td>
Ali
</td>

<td>
<span class="badge py-3 px-4 fs-7 badge-light-primary">Requested for Sampling</span>
</td>


</tr>
<tr class="odd">
<td>778</td>

<td> 21/7/22</td>
<td>
MVS
</td>

<td >
CentrePoint
</td>
<td >
Muhammad
</td>

<td>
<span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
</td>


</tr>
</tbody>
</table>

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