@extends('user.layout.recruit')
@php
     use App\Http\Controllers\UserRecruitController;
@endphp

    @section('page-css')
         <style>
            button[disabled] {
                background: #666060 !important ;
                }

            .applied{
                background: #e76464;
                color: white;
                padding: 13px;
                font-size: 18px;
                border-radius: 29px;
                text-align: center;
            }

            .app_title{
                color: #f9f4f4;
                font-weight: bold;
                background: #f94646;
                border-radius: 24px;
                margin-left: 10px;
                padding: 10px;
            }

        </style>
    @endsection

@section('content')


<section class="careers white-bg page-section-ptb" style="padding-top: 11%;">
  <div class="container">
    <div class="row">
       <div class="col-lg-12 col-md-12">
          <div class="section-title text-center">
            <h6 class="">Think you're good enough? </h6>
            <h2 class="title-effect">Apply for right position!</h2>
            <p class="">Truly ideal solutions for your business. Create a website that you are gonna be proud of. </p>
          </div>
      </div>
    </div>
<div class="row">
    <div class="col-lg-9 col-md-9">
        <div class="accordion shadow">
@php $count = 1; @endphp

@foreach ($recruit as $row)

    @php
        $user_id = Session::get('user-id');
        $recruit_id = $row->id;
        $apply= UserRecruitController::Apply($user_id, $recruit_id);
    @endphp

         <div class="acd-group">
                <a class="acd-heading" href="#">
                    {{ $count ." . ". $row->job_title }}

                <span style="float: right; color: black;" ><b>Deadline: </b>{{ date("F j, Y", strtotime($row->deadline)) }} </span>
                    @php
                        if($apply){
                            echo '<span class="app_title">Applied</span>';
                        }
                    @endphp
            </a>
                <div class="acd-des">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                    <div class="col-md-12" >
                        <div class="col-md-6" >
                            <span class="mb-10"><b>Location: </b>{{ $row->location }}</span>
                            <span class="mb-10"><b>Department: </b>{{ $row->department }}</span>

                        </div>
                        <div class="col-md-6" >
                            <span class="mb-10"><b>Publish: </b>{{ date("F j, Y", strtotime($row->created_at)) }}</span>
                            <span><b>Deadline: </b>{{ date("F j, Y", strtotime($row->deadline)) }}</span>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h4 class="mb-20 theme-color">Job Description / Responsibility :</h4>
                            {!! $row->description !!}
                        </div>
                    </div><hr><hr> <br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h4 class="mb-20 theme-color">Requirements :</h4>
                                 {!! $row->requirement !!}
                        </div>
                    </div>


                    <hr><hr> <br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h4 class="mb-20 theme-color">Additional Job Experience :</h4>
                             {!! $row->experience !!}
                        </div>
                    </div>

                    <hr><hr> <br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h4 class="mb-20 theme-color">Salary and Benefits :</h4>
                             {!! $row->salary !!}
                        </div>
                    </div>



                </div>
            </div>
            <hr><hr> <br>


                <div class="row">
                <div class="col-lg-12">


                    @if($apply)
                        <p class="applied" >Applied <i class="fa fa-check"></i></p>
                    @else

                        <form action="{{ route('user.apply') }}" method="post">
                            @csrf
                            <input type="hidden" name="recruit_id" value="{{ $row->id }}" >
                            <button type="submit" name="submit" id="submitButton" class="button mt-20"
                            @php if( empty(Session::get('user-id')) ) echo ' disabled="disabled" '; @endphp > Apply Now  </button>

                            @if( empty(Session::get('user-id')) )
                                <p class="text-danger">Please login to apply*** </p>
                            @endif

                        </form>
                    @endif

                    <p class="mt-20 mb-20">Interested and eligible candidates are requested to send their CV together with personal details by e-mail address
                        <a href="mailto:recruitment@cpbangladesh.com">recruitment@cpbangladesh.com</a></p>
                </div>

            </div>
            </div>
        </div>
        <hr><hr><hr><br>

         @php $count++;  @endphp
@endforeach









    </div>
</div>


<!-- Right side Section -->
            <div class="col-lg-3 col-md-3">
                <div class="careers-from">
                <h3>Apply for Position</h3>
                    <div class="section-field mb-20 mt-20">
                    <label for="name">Your Name*</label>
                    <div class="field-widget">
                        <input type="text" class="form-control" id="name" placeholder="Your Name" name="name">
                    </div>
                    </div>
                    <div class="section-field mb-20">
                    <label>Your Email*</label>
                    <div class="field-widget">
                        <input type="text" class="form-control" placeholder="Your Email" name="email">
                    </div>
                    </div>
                    <div class="section-field mb-20">
                    <label for="website">Personal website*</label>
                    <div class="field-widget">
                        <input type="text" class="form-control" id="website" placeholder="Personal website" name="website">
                    </div>
                    </div>
                    <div class="section-field mb-20">
                    <label for="Message">Your Message *</label>
                    <div class="field-widget">
                    <textarea class="input-message form-control" id="Message" placeholder="Comment*" rows="7" name="message"></textarea>
                    </div>
                    </div>
                    <div class="mb-20">
                        <div class="file-input">
                            <label for="exampleInputFile">Submit your CV</label>
                            <input type="file" class="form-control-file  form-control" id="exampleInputFile">
                    </div>
                    </div>
                        <a class="button-border button" href="#">
                    <span>Submit</span>
                    </a>
                </div>
                </div>



          </div>
       </div>
</section>


@endsection
