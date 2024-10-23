

<!-- Start Contact -->
<section class="contact-sec" id="contact">
    <div class="container">
        <div class="row align-items-top">
            <div class="col-lg-5 order-lg-2 wow fadeInRight">
                <div class="contact-details heading-area">
                    <div class="contact-dots" data-dots=""></div>
                    <h4 class="heading main-font">{{ __('words.contact-detail-title') }}</h4>
                    <p class="text alt-font">{{__('words.contact-detail-paragraph')}}</p>
                    <ul>
                        <li><i aria-hidden="true" class="las la-map-marker"></i> {{__('words.contact-address')}} </li>
                        <li><i aria-hidden="true" class="las la-phone"></i>
                            <span>+1 631 1234 5678</span>
                            <span>+1 631 1234 5678</span>
                        </li>
                        <li><i aria-hidden="true" class="las la-paper-plane"></i>email@website.com</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-7 mt-4 pt-3 mt-lg-0 pt-lg-0 wow fadeInLeft">
                <!--Heading-->
                <div class="heading-area pb-2">
                    <h2 class="heading">{{ __('words.contact-form-title') }}</h2>
                </div>
                <!--Contact Form-->
                <form method='post' class="contact-form" id="contact-form-data" action="{{ route('front.send') }}">
                    @csrf
                   
                    <div class="row">
                        <!--Result-->
                        <div class="col-12" id="result"></div>
                        <!--Left Column-->
                        <div class="col-md-5">
                            <div class="form-group">
                                <input class="form-control" id="userName" name="userName"
                                    placeholder="{{ __('words.contact-input-name') }}" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="userEmail" name="userEmail"
                                    placeholder="{{ __('words.contact-input-email') }}" type="email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="userSubject" name="userSubject"
                                    placeholder="{{ __('words.contact-input-subject') }}" type="text">
                            </div>
                        </div>
                        <!--Right Column-->
                        <div class="col-md-7">
                            <div class="form-group">
                                <textarea class="form-control" id="userMessage" name="userMessage" placeholder="{{ __('words.contact-textarea') }}"></textarea>
                            </div>
                        </div>
                        <!--Button-->
                        <div class="col-md-12">
                            <button type="submit" href="javascript:void(0);"
                                class="btn btn-medium btn-rounded btn-green w-100 contact_btn main-font mt-4">{{__('words.contact-button')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="contact-dots" data-dots=""></div>
<!--Contact End-->