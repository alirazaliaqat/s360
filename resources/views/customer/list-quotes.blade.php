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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Quotes</h1>
					<!--end::Title-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							<a href="/customer" class="text-muted text-hover-primary">Home</a>
						</li>
						<!--end::Item-->
						
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">Quotes</li>
						<!--end::Item-->
					</ul>
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
                                       
                                    </div>
                                    
                                    <div class="card-body">
                                        <table class="table align-middle border rounded table-row-dashed fs-6 gx-4 gy-1" id="kt_datatable_example">
                                            <thead>
                                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase">
                                                    
                                                    <th>Quote#</th>
                                                    <th>RFQ Ref</th>
                                                    
                                                    <th >DATE</th>
                                                   
                                                    <th >Raised By </th>
                                                    <th >Value</th>
                                                    <th >Aging</th>
                                                    
                                                    <th >Status</th>
                                                    <th >Note</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <tbody class="fw-semibold text-gray-600">
                                            <tr class="odd">
                                                <td><a href="/customer/view-quote"> 888</a></td>
                                                
                                                <td>
                                                    0001
                                                </td>
                                                <td> 21/7/22</td>
                                                <td>
                                                    CenterPoint
                                                </td>
                                                
                                                <td >
                                                    250000
                                                </td>
                                                <td >
                                                    30 days
                                                </td>
                                                
                                                <td>
                                                    <span class="badge py-3 px-4 fs-7 badge-light-warning">Awaiting Action</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="note-pop-up">
                                                    <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"/>
                                                            <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"/>
                                                        </g>
                                                    </svg></span>
                                                    </a>
                                                </td>
                                                <td class="">
                                                    <button type="button" class="btn py-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-cog"></i>
                                                    </button>
                                                    
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Accept  </a></li>
                                                        <li><a class="dropdown-item" href="#">Reject </a></li>
                                                        <li><a class="dropdown-item" href="#">Negotiate </a></li>
                                                        <li><a class="dropdown-item" href="#">Approved</a></li>
                                                        <li><a class="dropdown-item" href="#">Upload PO</a></li>
                                                        <li><a class="dropdown-item" href="#">Sample Approved</a></li>
                                                        <li><a class="dropdown-item" href="#">Sample Rejected</a></li>
                                                    </ul>
                                                    
                                                </td>
                                                
                                            </tr>
                                           
                                            <tr class="odd">
                                                <td><a href="/customer/view-quote"> 888</a></td>
                                                
                                                <td>
                                                    0001
                                                </td>
                                                <td> 21/7/22</td>
                                                <td>
                                                    CenterPoint
                                                </td>
                                                
                                                <td >
                                                    250000
                                                </td>
                                                <td >
                                                    30 days
                                                </td>
                                                
                                                <td>
                                                    <span class="badge py-3 px-4 fs-7 badge-light-success">Samples Sent</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="note-pop-up">
                                                    <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"/>
                                                            <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"/>
                                                        </g>
                                                    </svg></span>
                                                    </a>
                                                </td>
                                                <td class="">
                                                    <button type="button" class="btn py-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-cog"></i>
                                                    </button>
                                                   
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Accept  </a></li>
                                                        <li><a class="dropdown-item" href="#">Reject </a></li>
                                                        <li><a class="dropdown-item" href="#">Negotiate </a></li>
                                                        <li><a class="dropdown-item" href="#">Approved</a></li>
                                                        <li><a class="dropdown-item" href="#">Upload PO</a></li>
                                                        <li><a class="dropdown-item" href="#">Sample Approved</a></li>
                                                        <li><a class="dropdown-item" href="#">Sample Rejected</a></li>
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
                
            </div>
            <!--end::Col-->
            <!--end::Table Widget 4-->
           
        </div>
        <!--end::Row-->
        <div class="text-center">
            <button type="button" class="btn btn-success my-1" onclick="window.print();">
                <span class="navi-icon"><i class="la la-print"></i></span> Print Quotes</button>
           
            <div id="kt_datatable_example_buttons" class="d-none"></div>
        </div>
        
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->
</div>

</div>
<!--end:::Main-->

@endsection



@section('scripts')
<script src="{{asset('assets/js/custom/widget-datatable.js')}}"></script>
@endsection

