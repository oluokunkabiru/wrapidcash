
  <!-- ======= Contact Me Section ======= -->
  <section id="contact-section" class="contact">
    <div class="container">

      <div class="section-title">
        {{--  <span>Contact Us</span>  --}}
        <h2>Contact Us</h2>
        {{--  <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>  --}}
      </div>

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="icon-share-alt"></i>
                <h3>Social Profiles</h3>
                <div class="social-links">

                  {{--  <a href="#" class="twitter"><i class="icon-twitter"></i></a>  --}}
                  <a target="_blank" class="bg-primary text-light" href="https://www.facebook.com/Rapid-cash-105725001891866" class="facebook"><i class="icon-facebook"></i></a>
                  <a target="_blank" class="bg-success text-light" href="https://wa.me/{{ appSettings()->phone }}" class="instagram"><i class="icon-whatsapp"></i></a>
                  {{--  <a href="#" class="google-plus"><i class="icon-skype"></i></a>  --}}
                  {{--  <a href="#" class="linkedin"><i class="icon-linkedin"></i></a>  --}}
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="icon-envelope"></i>
                <h3>Email Us</h3>
                <p>{{ appsettings()->email }}</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="icon-phone"></i>
                <h3>Call Us</h3>
                <p>{{ appSettings()->phone }}</p>
                <p>+2348147056419</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="{{ route('contact-us.store') }}" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" value="{{ Auth::check()?Auth::user()->name:"", old('name') }}" class="form-control  @error('name') is-invalid @enderror" id="name" placeholder="Your Name" />
                @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control  @error('email') is-invalid @enderror" value="{{ Auth::check()?Auth::user()->email:"", old('email') }}" name="email" id="email" placeholder="Your Email"   />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                      @enderror
              </div>
            </div>
            {{ csrf_field() }}
            <div class="form-group">
              <input type="text" class="form-control  @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              @error('subject')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            </div>
            <div class="form-group">
              <textarea class="form-control  @error('message') is-invalid @enderror" name="message" rows="6" data-rule="required" data-msg="Please write something for us" placeholder="Message">
                  {{ old('message') }}
              </textarea>
              @error('message')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                 @enderror
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Me Section -->








  <footer id="footer" style="background-image: url('{{ appSettings()->getMedia('logo')->first()->getFullUrl() }}') ">
    <div class="container">
      <h3>{{ appsettings()->name }}</h3>
      <h4>
        Breaking Financial Limits.
    </h4>
      <div class="social-links">
        <a  target="_blank"  class="bg-success text-light" href="https://wa.me/{{ appSettings()->phone }}" class="twitter"><i class="icon-whatsapp"></i></a>
        <a  target="_blank" class="bg-primary text-light" href="https://www.facebook.com/Rapid-cash-105725001891866" class="facebook"><i class="icon-facebook"></i></a>
        {{--  <a href="#" class="instagram"><i class="icon-instagram"></i></a>  --}}
        {{--  <a href="#" class="google-plus"><i class="icon-skype"></i></a>  --}}
        {{--  <a href="#" class="linkedin"><i class="icon-linkedin"></i></a>  --}}
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>{{ appsettings()->name }}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/ -->
        Designed by <a href="https://www.facebook.com/Adten094" target="_blank">DevIfeoluwa</a>
      </div>
    </div>
  </footer><!-- End Footer -->
