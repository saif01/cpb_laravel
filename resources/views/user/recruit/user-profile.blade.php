@extends('user.layout.recruit')
    @section('page-css')
         <style>
          .pdfobject-container {
            width: 700px;
            height: 500px;
            margin: auto;
            border: 1rem solid rgba(0, 0, 0, .1);
          }
        </style>
    @endsection

@section('content')

    <section class="careers white-bg page-section-ptb">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="section-title text-center" style="margin-top: 6%;">
                <h6 class=""> </h6>
                <h2 class="title-effect">Your Profile Information </h2>

              </div>
            </div>
          </div>

          <div class="row">
            <!--Start FeedBack Message Show -->
            <div class="col-lg-8 col-md-8 ">

              <!--End FeedBack Message Show -->
              <h4 class="mb-20 theme-color">Personal Information</h4>
              <ul class="list list-unstyled mb-30">
                <li> <b>Name:</b>{{ Session::get('user-name') }}</li>
                <li> <b>Phone:</b>{{ Session::get('user-contact') }} </li>
                <li> <b>E-mail:</b>{{ Session::get('user-email') }} </li>
                <li> <b>Address:</b>{{ Session::get('user-address') }} </li>
                <li> <b>C.V:</b>
                    <a href="{{ asset(Session::get('user-document')) }}" target="_blank" class="button x-small" type="application/pdf"><span>View / Download</span>
                      <i class="fa fa-download"></i> </a>
                </li>

              </ul>


            </div>
            <div class="col-lg-4 col-md-4">
              <h4 class="mb-20 theme-color">Profile Picture</h4>
              <img src="{{ asset(Session::get('user-image')) }}" alt="User Img" style="height: 200px; background: #84ba3f; padding: 3px; border-radius: 5%;">
            </div>
          </div>

          <div class="row" style="padding-top: 3%;">
            <div class="col-lg-12 col-md-12">
              <div class="section-title text-center">
                <h6 class="">Think you're good enough? </h6>
                <h2 class="title-effect">Applied for these positions!</h2>
                <p class="">All your applying information are given below. </p>
              </div>
            </div>
          </div>

 <div class="row">
            <div class="col-lg-12 col-md-12">

              <!--End FeedBack Message Show -->
              <div class="table-responsive">
                <table class="table table-1 table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Applying Date </th>
                      <th>Deadline</th>
                      <th>Job Title</th>
                      <th>Department</th>
                      <th>Salary (tk/M)</th>

                    </tr>
                  </thead>
                  <tbody>

                    @php $count = 1; @endphp

                    @foreach ($applyData as $row)
                        <tr>
                        <td>{{ $count }}</td>
                        <td>{{ date("F j, Y", strtotime( $row->deadline)) }}</td>
                        <td>{{ $row->job_title }}</td>
                        <td>{{ $row->department }}</td>
                        <td>{!! $row->salary !!}</td>
                      </tr>
                       @php  $count++; @endphp
                    @endforeach



                  </tbody>
                </table>
              </div>
            </div>
          </div>


        </div>
    </section>

@endsection
