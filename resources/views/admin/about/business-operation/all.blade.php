@extends('admin.layout.master')
{{-- Page CSS --}}
@section('page-css')
    {{-- Data table css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endsection
{{-- Page Js --}}
@section('page-js')
    {{-- Data table js --}}
    <script src="{{ asset('app-assets/vendors/js/datatable/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/js/data-tables/datatable-basic.js') }}" type="text/javascript"></script>
    <!-- Custom Sweet alert -->
    <script src="{{ asset('app-assets/custom/swAlertSaif/coustom_swalert_saif.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/custom/swAlertSaif/sw_function.js') }}" type="text/javascript"></script>
@endsection
{{-- End Js Section --}}

{{-- Start Main Content --}}
@section('content')
<!-- Alternative pagination table -->
<section id="pagination">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Business Operation Information
                        <a href="{{ route('business-operation.add') }}">
<button class="btn gradient-nepal white big-shadow"  style="float: right; margin-right:3px;">Add <i class="fa fa-pencil" aria-hidden="true"></i></button>
                        </a>
                    </h4>

                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard table-responsive">
                        <table class="table table-striped table-bordered alt-pagination">
                            <thead>
                                <tr class="text-center">
                                    <th>Title</th>
                                    <th>Business Operation Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allData as $row )
                                <tr>

                                    <td>
                                         {{ $row->title  }}
                                    </td>
                                    <td>
                                         {!! $row->details !!}
                                    </td>

                                    <td class="text-center">

                                    @if ((Session::get('publish') == '1'))
                                        <!-- Make Status 0 -->
                                         @if($row->status == 1)
                                        <a href="{{ url('publish/'.$row->id.'/b_uoperations'.'/status'.'/0') }}" id="draft" class="btn gradient-green-tea white"><i class="fa fa-toggle-on fa-lg "></i> : Active</a>

                                        <!-- Make Status 1     -->
                                        @else
                                        <a href="{{ url('publish/'.$row->id.'/b_uoperations'.'/status'.'/1') }}" id="publish" class="btn gradient-bloody-mary white"><i class="fa fa-toggle-off fa-lg"></i> : Deactive</a>
                                        @endif
                                    @endif
                                    @if (Session::get('delete_data')==1)
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ route('business-operation.delete', $row->id)  }}" id="delete" class="btn gradient-ibiza-sunset white" title="Delete"> <i class="fa fa-trash"></i>: Delete</a>
                                    @endif

                                        <div class="dropdown-divider"></div>
                                        <a href="{{ route('business-operation.edit', $row->id) }}" title="Edit" class="editByModal btn gradient-purple-bliss white"><i class="fa fa-edit"></i>: Edit</a>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Alternative pagination table -->

@endsection
