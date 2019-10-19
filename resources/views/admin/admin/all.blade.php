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
                    <h4 class="card-title">All Admin Information
                        <a href="{{ url('/admin/add') }}">
<button class="btn gradient-nepal white big-shadow"  style="float: right; margin-right:3px;">Add <i class="fa fa-pencil" aria-hidden="true"></i></button>
                        </a>

                    </h4>

                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard table-responsive">
                        <table class="table table-striped table-bordered alt-pagination">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Details</th>
                                    <th>Admin Status</th>
                                    <th>Otherization</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allData as $row )
                                <tr>
                                    <td>
                                        <img src="{{ asset($row->image) }}" alt="Image" height="100" width="100">
                                    </td>

                                    <td>
                                        <b>Login : </b>{{ $row->login }}<br>
                                        <b>Name : </b>{{ $row->name }}
                                        <hr>
                                        <b>Phone : </b>{{ $row->contact }}<br>
                                        <b>Email : </b>{{ $row->email }}<br>
                                    </td>
                                    <td>
                                         {{-- Admin block --}}
                                        @if($row->status == 1)
                                        <a href="{{ url('change-status/'.$row->id.'/admins'.'/status'.'/0') }}" id="remove" class="btn text-success" ><i class="fa fa-check-square fa-lg"></i> : Block Status</a>

                                        @else
                                          <a href="{{ url('change-status/'.$row->id.'/admins'.'/status'.'/1') }}" id="give" class="btn text-danger" ><i class="fa fa-times fa-lg"></i> : Block Status</a>
                                        @endif
                                        <br>
                                        {{-- Super Admin Access --}}
                                        @if($row->super == 1)
                                        <a href="{{ url('change-status/'.$row->id.'/admins'.'/super'.'/0') }}" id="remove" class="btn text-success" ><i class="fa fa-check-square fa-lg"></i> : Super Admin</a>

                                        @else
                                          <a href="{{ url('change-status/'.$row->id.'/admins'.'/super'.'/1') }}" id="give" class="btn text-danger" ><i class="fa fa-times fa-lg"></i> :  Super Admin</a>
                                        @endif
                                        <br>
                                        {{-- publish Access --}}
                                        @if($row->publish == 1)
                                        <a href="{{ url('change-status/'.$row->id.'/admins'.'/publish'.'/0') }}" id="remove" class="btn text-success" ><i class="fa fa-check-square fa-lg"></i> : Publish Access</a>

                                        @else
                                          <a href="{{ url('change-status/'.$row->id.'/admins'.'/publish'.'/1') }}" id="give" class="btn text-danger" ><i class="fa fa-times fa-lg"></i> : Publish Access</a>
                                        @endif

                                         {{-- Delete Access --}}
                                        @if($row->delete_data == 1)
                                        <a href="{{ url('change-status/'.$row->id.'/admins'.'/delete_data'.'/0') }}" id="remove" class="btn text-success" ><i class="fa fa-check-square fa-lg"></i> : Delete Access</a>

                                        @else
                                          <a href="{{ url('change-status/'.$row->id.'/admins'.'/delete_data'.'/1') }}" id="give" class="btn text-danger" ><i class="fa fa-times fa-lg"></i> : Delete Access</a>
                                        @endif

                                    </td>

                                    <td>

                                       {{-- recruit Access --}}
                                        @if($row->recruit == 1)
                                        <a href="{{ url('change-status/'.$row->id.'/admins'.'/recruit'.'/0') }}" id="remove" class="btn text-success" ><i class="fa fa-check-square fa-lg"></i> : Recruit </a>

                                        @else
                                          <a href="{{ url('change-status/'.$row->id.'/admins'.'/recruit'.'/1') }}" id="give" class="btn text-danger" ><i class="fa fa-times fa-lg"></i> : Recruit </a>
                                        @endif
                                        <br>
                                         {{-- about Access --}}
                                        @if($row->about == 1)
                                        <a href="{{ url('change-status/'.$row->id.'/admins'.'/about'.'/0') }}" id="remove" class="btn text-success" ><i class="fa fa-check-square fa-lg"></i> : about </a>

                                        @else
                                          <a href="{{ url('change-status/'.$row->id.'/admins'.'/about'.'/1') }}" id="give" class="btn text-danger" ><i class="fa fa-times fa-lg"></i> : about </a>
                                        @endif
                                        <br>
                                         {{-- news Access --}}
                                        @if($row->news == 1)
                                        <a href="{{ url('change-status/'.$row->id.'/admins'.'/news'.'/0') }}" id="remove" class="btn text-success" ><i class="fa fa-check-square fa-lg"></i> : news </a>

                                        @else
                                          <a href="{{ url('change-status/'.$row->id.'/admins'.'/news'.'/1') }}" id="give" class="btn text-danger" ><i class="fa fa-times fa-lg"></i> : news </a>
                                        @endif
                                        <br>

                                         {{-- csr Access --}}
                                        @if($row->csr == 1)
                                        <a href="{{ url('change-status/'.$row->id.'/admins'.'/csr'.'/0') }}" id="remove" class="btn text-success" ><i class="fa fa-check-square fa-lg"></i> : csr </a>

                                        @else
                                          <a href="{{ url('change-status/'.$row->id.'/admins'.'/csr'.'/1') }}" id="give" class="btn text-danger" ><i class="fa fa-times fa-lg"></i> : csr </a>
                                        @endif
                                        <br>

                                          {{-- product Access --}}
                                        @if($row->product == 1)
                                        <a href="{{ url('change-status/'.$row->id.'/admins'.'/product'.'/0') }}" id="remove" class="btn text-success" ><i class="fa fa-check-square fa-lg"></i> : product </a>

                                        @else
                                          <a href="{{ url('change-status/'.$row->id.'/admins'.'/product'.'/1') }}" id="give" class="btn text-danger" ><i class="fa fa-times fa-lg"></i> : product </a>
                                        @endif
                                        <br>



                                    </td>


                                    <td class="text-center">

                                     <a href="{{ url('/admin/delete/' . $row->id )  }}" id="delete" class="btn gradient-ibiza-sunset white" title="Delete"> <i class="fa fa-trash"></i>: Delete</a>
                                    {{-- <div class="dropdown-divider"></div> --}}
                                        <hr>
                                     <a href="{{ url('/admin/edit/'.$row->id) }}" title="Edit" class="editByModal btn gradient-orange-amber white"><i class="fa fa-edit"></i>: Edit</a>
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
