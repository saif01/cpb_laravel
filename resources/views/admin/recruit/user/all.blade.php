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
                    <h4 class="card-title">All Users
                    </h4>

                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard table-responsive">
                        <table class="table table-striped table-bordered alt-pagination">
                            <thead>
                                <tr class="text-center">
                                    <th>User Name</th>
                                    <th>User C.V.</th>
                                    <th>User Image</th>
                                    <th>User Address</th>
                                    <th>Contact Number</th>
                                    <th>Email Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allData as $row )
                                <tr>
                                    <td>{{ $row->name }}</td>
                                    <td>
                                     <a href="{{ asset($row->document) }}" target="_blank" class="btn " type="application/pdf"><span>View / Download</span> <i class="fa fa-download"></i> </a>
                                    </td>
                                    <td> <img src="{{ asset($row->image) }}" width="76px" height="76px" alt="Image"/></td>
                                    <td>{{ $row->address }}</td>
                                    <td>{{ $row->contact }}</td>
                                    <td>{{ $row->email }}</td>

                                    <td class="text-center">

                                    @if ((Session::get('super') == '1') || (Session::get('publish') == '1'))
                                        <!-- Make Status 0 -->
                                         @if($row->status == 1)
                                        <a href="{{ url('publish/'.$row->id.'/user_regs'.'/status'.'/0') }}" id="remove" class="btn gradient-green-tea white"><i class="fa fa-toggle-on fa-lg "></i> : Active</a>

                                        <!-- Make Status 1     -->
                                        @else
                                        <a href="{{ url('publish/'.$row->id.'/user_regs'.'/status'.'/1') }}" id="give" class="btn gradient-bloody-mary white"><i class="fa fa-toggle-off fa-lg"></i> : Deactive</a>
                                        @endif
                                    @endif

                                        <div class="dropdown-divider"></div>
                                        <a href="{{ route('recruit.delete', $row->id)  }}" id="delete" class="btn gradient-ibiza-sunset white" title="Delete"> <i class="fa fa-trash"></i>: Delete</a>
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
