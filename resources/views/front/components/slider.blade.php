      <!-- Start Slider -->
      <section class="slider position-relative" id="slider" dir="{{(App::isLocale('ar') ? 'ltr' : 'ltr')}}">
          <div class="row">
              <div class="col-12">
                  <div id="sync1" class="owl-carousel owl-theme">
                      @foreach ($sliders as $slider)
                          <div class="item">
                              <img src="{{ $slider->image }}" alt="Slider-Image">
                          </div>
                      @endforeach

                  </div>
              </div>
          </div>
          <div class="slider-icons">
              <ul class="slider-social banner-social">

                  @php
                      $counter = 0;
                  @endphp
                  @foreach ($contacts as $contact)
                      @php
                          $counter++;
                      @endphp

                      @if ($counter === 3 || $counter === 6)
                          @continue
                      @endif
                      <li><a class="" href="{{ $contact->contact }}" target="_blank"><i
                                  class="{{ $contact->icon }}"></i> </a></li>
                  @endforeach

              </ul>
          </div>
          
      </section>
      <!-- End Slider -->
