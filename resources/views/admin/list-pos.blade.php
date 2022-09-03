@extends('admin.admin')

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
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">List POs</h1>
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
									<!--begin::Products-->
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
    <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Orders" />
   </div>
   <!--end::Search-->
   <!--begin::Export buttons-->
   <div id="kt_datatable_example_1_export" class="d-none"></div>
   <!--end::Export buttons-->
  </div>
  <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
   <button type="button" class="btn btn-success my-1 me-12" onclick="window.print();">Print List</button>
   <!--begin::Menu-->
   <div id="kt_datatable_example_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
     <a href="#" class="menu-link px-3" data-kt-export="copy">
     Copy to clipboard
     </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-3">
     <a href="#" class="menu-link px-3" data-kt-export="excel">
     Export as Excel
     </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-3">
     <a href="#" class="menu-link px-3" data-kt-export="csv">
     Export as CSV
     </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-3">
     <a href="#" class="menu-link px-3" data-kt-export="pdf">
     Export as PDF
     </a>
    </div>
    <!--end::Menu item-->
   </div>
   <!--end::Menu-->
   <!--end::Export dropdown-->

   <!--begin::Hide default export buttons-->
   <div id="kt_datatable_example_buttons" class="d-none"></div>
</div>

</div>
   
     <div class="card-body">
  <table class="table align-middle border rounded table-row-dashed fs-6 g-5" id="kt_datatable_example">
   <thead>
    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase">
   
																<th class="min-w-100px">Customer PO#</th>
																<th class="min-w-100px">PO#</th>
																<th class="min-w-100px">QUOTE REF#</th>
																<th class="min-w-125px">DATE</th>
																<th class="min-w-100px">SUPPLIER</th>
																<th class="min-w-100px">GRAND TOTAL</th>
															    <th >Status</th>
																
															</tr>
    </tr>
    <!--end::Table row-->
   </thead>
   <tbody class="fw-semibold text-gray-600">
    <tr class="odd">
    
																<td>
																	 #XGY-347
																</td>
																<td>
																	 4363
																</td>
																<td >0002</td>
																
																<td>25/08/2022</td>
																
																<td>
																	MVC
																</td>
																<td >
																	70000
																</td>
																
																<td>
																	<span class="badge py-3 px-4 fs-7 badge-light-warning">Processing</span>
																</td>
																
															
    </tr>
    <tr class="odd">
    
																<td>
																	 #XGY-348
																</td>
																<td>
																	 4363
																</td>
																<td >0003</td>
																
																<td>08/08/2022</td>
																
																<td>
																	MVC
																</td>
																<td >
																	80000
																</td>
																
																<td>
																	<span class="badge py-3 px-4 fs-7 badge-light-success">Deliverd</span>
																</td>
																
    </tr>
     <tr class="odd">
    
																<td>
																	 #XGY-346
																</td>
																<td>
																	 4363
																</td>
																<td >0001</td>
																
																<td>22/08/2022</td>
																
																<td>
																	MVC
																</td>
																<td >
																	50000
																</td>
																
																<td>
																	<span class="badge py-3 px-4 fs-7 badge-light-success">Deliverd</span>
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
									<!--end::Products-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						
					</div>
					<!--end:::Main-->
@endsection


@section('scripts')
<script src="{{ asset('assets/js/custom/widget-datatable.js') }}"></script>
@endsection