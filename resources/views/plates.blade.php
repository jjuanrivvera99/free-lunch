@extends('layouts.metronic')

@section('content')
<div class="kt-container  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch">
    <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
        <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

            <!-- begin:: Content Head -->
            <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                <div class="kt-container ">
                    <div class="kt-subheader__main">
                            <h3 class="kt-subheader__title">Dashboard</h3>
                            {{-- @can('plate.create')
                                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                                <a href="#" data-toggle="modal" data-target="#kt_modal" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10">
                                    New plate
                                </a>
                            @endcan --}}
                    </div>
                </div>
            </div>

            <!-- end:: Content Head -->

            <!-- begin:: Content -->
            <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
                            <span class="kt-portlet__head-icon">
                                <i class="kt-font-brand flaticon2-line-chart"></i>
                            </span>
                            <h3 class="kt-portlet__head-title">
                                List of plates
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin: Datatable -->
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_plates">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Desc</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        </table>

                        <!--end: Datatable -->
                    </div>
                </div>
            </div>

            <!-- end:: Content -->
        </div>
    </div>
</div>
@endsection

@section('modals')
<div class="modal fade" id="kt_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ingredients</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>quantity</th>
                      </tr>
                    </thead>
                    <tbody id="ingredients-table" >
                      
                    </tbody>
              </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="/js/plates.js"></script>
    <script src="/js/socket.js"></script>
@endsection