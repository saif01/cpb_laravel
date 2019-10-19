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

     <!-- Modal Show-->
    <script src="{{ asset('app-assets/js/components-modal.min.js') }}" type="text/javascript"></script>
     <script>
        $(".view_recruit_details").click(function() {
            var id = $(this).attr("id");
             //for large modal size
            $("#modal_size_define").addClass("modal-xl");
            //alert(id);
            $.ajax({
                    url: "{{ route('recruit.details') }}",
                    method: "post",
                    data: {
                        id: id, _token: '{{csrf_token()}}'
                    },
                    success: function(data) {
                        //  var job_title = data.job_title;
                        //  alert(job_title);
                        $('#data_show').html(data);
                        $('#dataModal').modal("show");
                    }
                });
        });

       $(".view_user_details").click(function() {
            var id = $(this).attr("id");
            //for default modal size
            $("#modal_size_define").removeClass("modal-xl");
            //alert(id);
            $.ajax({
                    url: "{{ route('user.details') }}",
                    method: "post",
                    data: {
                        id: id, _token: '{{csrf_token()}}'
                    },
                    success: function(data) {
                        $('#data_show').html(data);
                        $('#dataModal').modal("show");
                    }
                });
        });

    </script>

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
                    <h4 class="card-title">All Application History</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard table-responsive">
                        <table class="table table-striped table-bordered alt-pagination">
                            <thead>
                                <tr class="text-center">
                                    <th>User </th>
                                    <th>User C.V.</th>
                                    <th>Contact Number</th>
                                    <th>Email Address</th>
                                    <th>Job Title</th>
                                    <th>Deadline</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allData as $row )
                                <tr>
                                    <td class="text-center">

                                        <img src="{{ asset($row->image) }}" width="76px" height="76px" alt="Image"/>
                                        <div class="dropdown-divider"></div>
                                       <button class="view_user_details btn gradient-nepal white big-shadow" id="{{ $row->user_id }}">Details</button>
                                    </td>
                                    <td>
                                        <a href="{{ asset($row->document) }}" target="_blank" class="btn " type="application/pdf"><span>View / Download</span> <i class="fa fa-download"></i> </a>
                                    </td>
                                    <td>{{ $row->contact }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td class="text-center">
                                        {{ $row->job_title }}
                                         <div class="dropdown-divider"></div>
                                       <button class="view_recruit_details btn gradient-nepal white big-shadow" id="{{ $row->recruit_id }}">Details</button>
                                    </td>
                                    <td>{{ date("j-F-Y", strtotime($row->deadline)) }}</td>
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

 <div class="modal fade text-left" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
     <div class="modal-dialog" id="modal_size_define" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title" id="myModalLabel1">Details</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body" id="data_show"></div>
             <div class="modal-footer">
                 <button type="button" class="btn gradient-plum white btn-block" data-dismiss="modal">Close</button>
             </div>
         </div>
     </div>
 </div>

@endsection
