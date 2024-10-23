@extends('layouts.app')

@section('content')

<section id="about" class="about">
  <div class="container">
    <div class="section-title">
      <h2>{{ $profile['title'] }}</h2>
      <p class="text-justify">
        Hi i am, <strong>{{$profile['fields']['person_name']}}</strong> {{$profile['fields']['profile_detail']}}
      </p>
    </div>

    <div class="row">
      <div class="col-lg-4" data-aos="fade-right">
        <img src="{{$profile['fields']['person_image']}}" class="img-fluid rounded-3" alt>
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
        <h3>{{$profile['fields']['position']}}</h3>
        <p class="fst-italic mb-4 mt-4">
          <strong> Basic information: </strong>
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                <span>{{$profile['fields']['phone']}}</span>
              </li>
              <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                <span>{{$profile['fields']['city']}}</span>
              </li>
              <li><i class="bi bi-chevron-right"></i> <strong>Country:</strong>
                <span>{{$profile['fields']['country']}}</span>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                <span>{{$profile['fields']['degree']}}</span>
              </li>
              <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                <span>{{$profile['fields']['email']}}</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class>

        <div class="section-title">
          <p class="text-justify">
            {{$profile['fields']['proven_track_description']}}
          </p>
        </div>

        <div class="row no-gutters">
            @foreach ($profile['accomplishments'] as $accomplishment)
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                    <div class="count-box d-flex flex-column align-items-center justify-content-center text-center">
                        <img src="{{ $accomplishment['image'] }}" class="img-fluid rounded-4 mb-3" alt="" style="max-height: 100px; object-fit: cover;">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $accomplishment['description'] }}" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>{{ $accomplishment['name'] }}</strong></p>
                    </div>
                </div>
            @endforeach    
        </div>


      </div>
    </section><!-- End Facts Section -->
  </div>
</section><!-- End About Section -->
<section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
        </div>

        <div class="row skills-content">
              @foreach ($profile['skills'] as $skill)
                <div class="col-lg-6 col-md-6 " data-aos="fade-up">
                  <div class="progress">
                      <span class="skill">{{ $skill['name'] }} <i class="val">{{ $skill['description'] }}%</i></span>
                      <div class="progress-bar-wrap">
                          <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill['description'] }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $skill['description'] }}%;">
                          </div>
                      </div>
                  </div>
                </div>
              @endforeach
          
        </div>


      </div>
    </section><!-- End Skills Section -->

    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Areas of Expertise</h2>
        </div>

        <div class="row">
          @foreach ($profile['expertise'] as $experties)
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
             
              <div class="icon"><img src="{{ $experties['image'] }}" class="img-fluid rounded-4 mb-3" alt="" style="max-height: 100px; object-fit: cover;"></i></div>
              <h4 class="title"><a href>{{ $experties['name'] }}</a></h4>
              <p class="description text-justify">{{ $experties['description'] }}</p>
            </div>
          @endforeach
          
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

          <div class="section-title">
            <h2>Contact</h2>
            <p></p>
          </div>

          <div class="row" data-aos="fade-in">

            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info ">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Sanda Khurd Lahore, Pakistan</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>{{$profile['fields']['email']}}</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>{{$profile['fields']['phone']}}</p>
                </div>
              </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form id="contact-form" class="php-email-form">
                  <div class="row">
                      <div class="form-group col-md-6">
                          <label for="name">Your Name</label>
                          <input type="text" name="name" class="form-control" id="name" >
                      </div>
                      <div class="form-group col-md-6">
                          <label for="email">Your Email</label>
                          <input type="text" class="form-control" name="email" id="email" >
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="subject">Subject</label>
                      <input type="text" class="form-control" name="subject" id="subject" >
                  </div>
                  <div class="form-group">
                      <label for="message">Message</label>
                      <textarea class="form-control" name="message" rows="10" ></textarea>
                  </div>
                  <div class="my-3">
                      <div class="loading d-none">Loading...</div>
                      <div class="error-message"></div>
                      <div class="sent-message bg-success d-none"></div>
                  </div>
                  <div class="text-center">
                      <button id="contact-btn" type="submit">Send Message</button>
                  </div>
              </form>

            </div>

          </div>

        </div>
    </section>
    <!-- ======= Contact Section End ======= -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Set up CSRF token for AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#contact-form').on('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        // Clear previous messages
        $('.error-message').text('');
        $('.sent-message').addClass('d-none');
        $('.loading').removeClass('d-none');

        // Collect form data
        var formData = $(this).serialize(); // Serializes the form's elements.

        // AJAX request
        $.ajax({
            type: 'POST',
            url: '{{ route('contact.send') }}',
            data: formData,
            dataType: 'json', 
            success: function(response) {
                if (response && response.message) {
                    $('.sent-message').removeClass('d-none');
                    $('.sent-message').addClass('d-block');
                    $('.sent-message').html(response.message);
                    
                    $('#contact-form')[0].reset(); 
                    setTimeout(function() { 
                      $('.sent-message').addClass('d-none');
                    }, 2000);
                } else {
                    $('.error-message').append('<p>Unexpected response structure.</p>');
                }
                $('.loading').addClass('d-none'); // Hide loading
            },
            error: function(xhr) {
                                
                $('.loading').addClass('d-none'); 
                var errors = xhr.responseJSON.errors; 
                
                if (errors) {
                  $('.error-message').removeClass('d-none');
                  $('.error-message').addClass('d-block');
                  setTimeout(function() { 
                    $('.error-message').addClass('d-none');
                  }, 2000);
                    for (var key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            $('.error-message').append('<p>' + errors[key][0] + '</p>'); 
                        }
                    }
                } else {
                    $('.error-message').append('<p>Something went wrong. Please try again later.</p>'); 
                }
            }
        });
    });
});

</script>


@endsection