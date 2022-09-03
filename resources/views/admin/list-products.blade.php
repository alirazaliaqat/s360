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
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Products List</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="../../demo1/customer/index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Product Database</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">List Products</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
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
									<div class="card card-flush">
										<!--begin::Card header-->
										<div class="card-header align-items-center py-5 gap-2 gap-md-5">
											<!--begin::Card title-->
											<div class="card-title">
												<!--begin::Search-->
												<div class="d-flex align-items-center position-relative my-1">
													<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
													<span class="svg-icon svg-icon-1 position-absolute ms-4">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
															<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Product" />
												</div>
												<!--end::Search-->
											</div>
											<!--end::Card title-->
											
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-1" id="kt_datatable_example">
												<!--begin::Table head-->
												<thead>
													<!--begin::Table row-->
													<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
														
														<th class="">Item</th>
														<th class="">Description</th>
														<th class="">SKU</th>
														<th class="">Category</th>
														<th class="">Category Type</th>
														<th class="">UOM</th>
														<th class="">Product Code</th>
														<th class="">Part No.</th>
														<th class="">Model No.</th>
													</tr>
													<!--end::Table row-->
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody class="fw-semibold text-gray-600">
													<!--begin::Table row-->

													@foreach ($products as $product)
														
													
													<tr>
														<!--begin::Checkbox-->
														<td>
															{{ $product['product_name'] }}
														</td>
														
														<td class="" data-order="37">
															<span class="">{{ $product['product_description'] }}</span>
														</td>
														
														<td class="">
															<span class="">{{ $product['sku'] }}</span>
														</td>
														
													    <td class="">
															{{ $product['category'] }}
														</td>
														 <td class="">
															{{ $product['category_type'] }}
														</td>
														 <td class="">
															{{ $product['uom'] }}
														</td>
														<td class="">
															{{ $product['product_code'] }}
														</td>
														<td class="">
															{{ $product['part_no'] }}
														</td>
														<td class="">
															{{ $product['model_no'] }}
														</td>
													</tr>
													
													@endforeach
												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Card body-->
									</div>
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