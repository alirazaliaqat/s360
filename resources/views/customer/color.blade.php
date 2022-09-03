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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Create RFQ</h1>
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
                        <li class="breadcrumb-item text-muted">Create RFQ</li>
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
                <!--begin::Layout-->
                <div class="d-flex flex-column">
                    <!--begin::Content-->
                    
                    <div class="flex-lg-row-fluid mb-10 mb-lg-0">
                        <!--begin::Card-->
                        <div class="card">
                            <!--begin::Card body-->
                            <div class="card-body p-12">
                           
                   
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-10"></div>
                                    <!--end::Separator-->
                                    <!--begin::Wrapper-->
                                    <div class="mb-0">
                                        
                                        <!--begin::Table wrapper-->
                                        <div class="table-responsive mb-10">
                                            <!--begin::Table-->
                                            <form  action="color" method="POST" class="form d-flex flex-column flex-lg-row">
                                                @csrf
                                                <table class="table g-2 gs-0 mb-0 fw-bold text-gray-700" data-kt-element="items">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="border-bottom fs-7 fw-bold text-gray-700 text-uppercase">
                                                           
                                                            <th class="min-w-150px w-150px">Description</th>
                                                            <th class="min-w-50px w-50px">Color</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                                            
                                                            <td class="">
                                                                <input type="text" class="form-control form-control-solid" name="product_id" placeholder="Description" />
                                                            </td>
                                                            
                                                            <td class="">
                                                                <input type="color" class="form-control form-control-solid" name="color_name" placeholder="255,255,255" />
                                                            </td>
                                                              
                                                               
                                                                </tr>
                                                            </tbody>
                                                            
                                                            <!--end::Table body-->
                                                            <!--begin::Table foot-->
                                                            <tfoot>
                                                                <tr class="border-top border-top-dashed align-top fs-6 fw-bold text-gray-700">
                                                                    <th class="text-primary">
                                                                        <button class="btn btn-primary py-1" type="submit">Add item</button>
                                                                    </th>
                                                                    
                                                                    
                                                                </tr>
                                                                
                                                            </tfoot>
                                                            <!--end::Table foot-->
                                                        </table>
                                                    </form>
                                                </div>
                                                <!--end::Table-->
                                               
                                                        
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </form>
                                                    <!--end::Form-->
                                                </div>
                                                <!--end::Card body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        
                                    </div>
                                    <!--end::Layout-->
                                    
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
                    
                    <script src="{{asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js')}}"></script>
                    <script src="{{asset('assets/js/custom/apps/invoices/create.js')}}"></script>
                    <script>
                        $(function(){
                            var $select = $(".1-500");
                            for (i=1;i<=500;i++){
                                $select.append($('<option></option>').val(i).html(i))
                            }
                            
                        });
                    </script>
                    
                    @endsection