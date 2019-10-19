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
                    <h4 class="card-title">All Contact Information
                        <a href="{{ route('contact.add') }}">
<button class="btn gradient-nepal white big-shadow"  style="float: right; margin-right:3px;">Add <i class="fa fa-pencil" aria-hidden="true"></i></button>
                        </a>

                    </h4>

                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard table-responsive">
                        <table class="table table-striped table-bordered alt-pagination">
                            <thead>
                                <tr class="text-center">
                                    <th>Address</th>
                                    <th>Contact</th>
                                    <th>E-mail</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allData as $row )
                                <tr>
                                    <td>
                                        {!! $row->address !!}
                                    </td>
                                    <td>
                                         {{ $row->phone }}
                                    </td>
                                    <td>
                                         {{ $row->email }}
                                    </td>

                                    <td class="text-center">
                                    @if (Session::get('delete_data')==1)
                                     <a href="{{ route('contact.delete', $row->id)  }}" id="delete" class="btn gradient-ibiza-sunset white" title="Delete"> <i class="fa fa-trash"></i>: Delete</a>
                                     <hr>
                                    @endif
                                     <a href="{{ route('contact.edit', $row->id) }}" title="Edit" class="editByModal btn gradient-purple-bliss white"><i class="fa fa-edit"></i>: Edit</a>
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
