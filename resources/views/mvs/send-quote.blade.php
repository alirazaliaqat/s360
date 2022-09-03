@extends('mvs.mvs-master')

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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">RFQ NO.346/22</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="/mvs" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted"><a href="/mvs/list-rfq" class="text-muted text-hover-primary">Request for Quotes</a></li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Send Quote</li>
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
                <!--begin::Invoice 2 main-->
                <div class="col-xl-12 mb-5 mb-xl-10">
                    <!--begin::Table Widget 4-->
                    <div class="card card-flush h-xl-100">
                        <form action="rfq.php" id="myform" method="POST">
                            <!--begin::Card body-->
                            <div class="card-body pt-2">
                                
                                
                                <div class="card card-p-0 card-flush">
                                    <div class="card-header align-items-center pt-5 gap-2 gap-md-5">
                                        <div class="card-title">
                                            <!--begin::Search-->
                                            <div class="d-flex align-items-center position-relative my-1">
                                                <span class="svg-icon svg-icon-1 position-absolute ms-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                                                </svg></span>
                                                <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search RFQs" />
                                            </div>
                                            <!--end::Search-->
                                            
                                        </div>
                                        
                                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                            <input class="btn btn-primary py-2" type='submit' name='submit' value='Submit Quote'>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            
                            
                            <div class="card-body">
                                
                                <table class="table align-middle border rounded table-row-dashed fs-6 g-5" id="kt_datatable_example">
                                    
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase">
                                            
                                            
                                            <th class="">Item</th>
                                            <th class="">Sub Item</th>
                                            <th class="">Descriptions</th>
                                            <th><span class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="bottom" title="C: Cotton, N: Nylon, L: Linen, S: Silk">
                                                Fabric<i class="fas fa-exclamation-circle ms-1 fs-7"></i>
                                                
                                            </span></th>
                                            <th class="">Color</th>
                                            <th class="">Design</th>
                                            <th class="">Style</th>
                                            <th class="">Branding</th>
                                            <th class="w-50px"> <span class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Yarn Strength ">
                                                YS<i class="fas fa-exclamation-circle ms-1 fs-7"></i>
                                                
                                            </span></th>
                                            <th class="w-50px">TC / Weight</th>
                                            <th class="">Size</th>
                                             <th class="w-50px">Qty</th>
                                            <th class="w-50px">UOM</th>
                                            <th class="w-75px">UNIT PRICE</th>
                                            
                                            <th class="w-50px">Pieces</th>
                                            <th class="w-100px">TOTAL PRICE</th>
                                        </tr>
                                    </tr>
                                    
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    <tr class="odd">
                                        
                                        
                                        <td >Uniform</td>
                                        <td >School</td>
                                        <td>
                                            <span class="text-truncate d-inline-block" style="max-width: 100px;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</span>
                                        </td>
                                        <td>
                                            C: 50% ,  N:50%
                                        </td>
                                        <td>RGB (255,244,230)</td>
                                        <td>Design</td>
                                        
                                        
                                        <td >
                                            Stripes 40cm
                                        </td>
                                        <td >
                                            Branding
                                        </td>
                                       
                                            <td>
                                                <input type="text" class="form-control py-1" name="vat" placeholder="" value="" required>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control py-1" name="Vat-amount" placeholder="" value="" required>
                                            </td>
                                        <td >
                                            L: 280 W: 350
                                        </td>
                                        <td>
                                            200
                                        </td>
                                        <td>
                                            PC
                                        </td>
                                        <td>
                                            <input type="text" class="form-control py-1" name="unit-price" placeholder="" value="" required>
                                        </td>
                                       
                                        
                                        <td>
                                            <input type="text" class="form-control py-1" name="Discount" placeholder="" value="" required>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control py-1" name="total-price" placeholder="" value="2356657" required>
                                        </td>
                                        
                                        
                                        
                                    </tr>
                                   
                                
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
                <!--end::Card body-->
            </form>
        </div>
        <!--end::Table Widget 4-->
    </div>
    <!--end::Invoice 2 main-->
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
<script src="{{asset('assets/js/custom/widget-datatable.js')}}"></script>
@endsection