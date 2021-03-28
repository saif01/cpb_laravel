@extends('user.layout.master')


@section('content')
    <!--=================================page-title-->
    <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url( {{ asset('app-assets/custom/img/header.jpg') }} ); padding-top: 13%; padding-bottom: inherit;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
           <span class="directory">Contact/</span>
            <div class="page-title-name">
              <h1>C.P. Bangladesh </h1>
              <p>We know the secret of success</p>
            </div>z
          </div>
        </div>
      </div>
    </section>
    <!--=================================End page-title -->

        <!--=================================contact-->

        @php

        function formatMobileNumber($phone_number)
        {
            $cleaned = preg_replace('/[^[:digit:]]/', '', $phone_number);
            preg_match('/(\d{4})(\d{3})(\d{4})/', $cleaned, $matches);
            return "(+88 ) {$matches[1]} - {$matches[2]}-{$matches[3]}";
        }

        function formatTelePhoneNumber($phone_number)
        {
            $cleaned = preg_replace('/[^[:digit:]]/', '', $phone_number);
            preg_match('/(\d{2})(\d{4})(\d{4})(\d{1})/', $cleaned, $matches);
            return "(+88 ) {$matches[1]} - {$matches[2]} {$matches[3]}-{$matches[4]}";
        }

        @endphp

    <section class="theme-bg contact-2 clearfix o-hidden">

      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 col-sm-12">

            <div class="contact-3-info page-section-ptb text-white">
              <div class="clearfix">
                <h6 class="text-white">Our Head Office</h6>
                <h2 class="text-white">Contact Info</h2>
                <p class="mb-50 text-white">If you got any questions, please do not hesitate to send us a message. We are looking forward to hearing from you! We reply within <span class="tooltip-content-2" data-original-title="Mon-Fri 10am–7pm (GMT +1)" data-toggle="tooltip" data-placement="top"> 24 hours!</span></p>

                <ul class="addresss-info list-unstyled">
                  <li><i class="ti-map-alt"></i>
                    <p><b>Address : </b> {!! $contact->address  !!}</p>
                  </li>
                  <li><i class="ti-mobile"></i><b>Phone : </b> {{ formatMobileNumber($contact->phone) }}</li>
                  <li><i class="ti-mobile"></i><b>Telephone : </b> {{ formatTelePhoneNumber($contact->telephone) }}</li>
                  <li><i class="ti-email"></i><b>Email : </b> {{ $contact->email }}</li>
                </ul>


              </div>
            </div>

          </div>


          <div class="col-lg-6 col-md-6 col-sm-12">
            <h4 class="mb-30 mt-10 text-center">Google Maps</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.600262688122!2d90.24400221435431!3d24.045157483370307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755e6cba58c5335%3A0x1b52ffdcf921b2a0!2sC.P.+Bangladesh+Head+Office+%26+Dhaka+Feed+Mill!5e0!3m2!1sen!2sbd!4v1560325967397!5m2!1sen!2sbd" style="border:0; width: 100%; height: 300px;"></iframe>
          </div>

        </div>
      </div>
    </section>

    <section class="page-section-ptb contact-2">
      <div class="container">
        <div class="row  mb-50">
          <div class="col-md-offset-2 col-md-12">
            <div class="section-title">
              <h6>let's work together</h6>
              <h2 class="title-effect">Contact Us</h2>
              <p>It would be great to hear from you! If you got any questions.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <!--Start FeedBack Message Show -->
          <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success fade in text-center">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Success!</strong> Your Massage Send Successfully.
            </div>
            <?php unset($_SESSION['success']);
          }
          if (isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger fade in text-center">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Error!</strong> Somthing Goning Wrong !!!!.
            </div>
            <?php unset($_SESSION['error']);
          } ?>

           @if ($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          <!--End FeedBack Message Show -->
          <div class="col-sm-12">
            <form class="form-horizontal" method="post" action="{{ route('mail_send') }}">
                @csrf
              <div class="contact-form clearfix">
                <div class="section-field">
                  <input id="name" type="text" placeholder="Name*" class="form-control" name="name">
                </div>
                <div class="section-field">
                  <input type="email" placeholder="Email*" class="form-control" name="email">
                </div>
                <div class="section-field">
                  <input type="text" placeholder="Phone*" class="form-control" name="contact">
                </div>
                <div class="section-field textarea">
                  <textarea class="input-message form-control" placeholder="Comment*" rows="7" name="message"></textarea>
                </div>

                <div class="section-field submit-button">
                  <button id="submit" name="submit" type="submit" class="button"><span> Send message </span> <i class="fa fa-paper-plane"></i></button>
                </div>
              </div>
            </form>


          </div>
        </div>
      </div>
    </section>

    <!--=================================contact-->
@endsection
