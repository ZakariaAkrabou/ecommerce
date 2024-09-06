<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__content">
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                    @endif
                    <div class="contact__form">
                        <h5>SEND MESSAGE</h5>
                        <form method="POST" action="{{ route('contact.submit') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                    @if ($errors->has('name'))
                                     <span class="text-danger">{{ $errors->first('name') }}</span>
                                     @endif
                                     <input type="text" placeholder="Name" name="name" value="{{ old('name') }}">
                                     
                            </div>

                            <div class="form-group">
                                        @if ($errors->has('email'))
                                     <span class="text-danger">{{ $errors->first('email') }}</span>
                                     @endif
                                     <input type="text" placeholder="Email" name="email"  value="{{ old('email') }}">
                                     
                            </div>

                            <div class="form-group">
                                @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                                     <input type="text" placeholder="Phone" name="phone" value="{{ old('phone') }}">
                                       
                            </div>

                            <div class="form-group">
                                         @if ($errors->has('subject'))
                                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                                        @endif
                                     <input type="text" placeholder="Subject" name="subject" value="{{ old('subject') }}">
                                        
                            </div>
                            <div class="form-group">
                                @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif 
                                <textarea placeholder="Message"  name="message" value="{{ old('message') }}"></textarea>
                                
                            </div>   
                            <div class="form-group text-center">
                                <button class="btn btn-success btn-submit">Save</button>
                           </div>                        
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26455.93876390221!2d-6.782190684555765!3d34.018407430423224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76a64347d78cf%3A0x99bb5e3da594ddb9!2sHay%20Al%20Qoriaa%2C%20Sal%C3%A9!5e0!3m2!1sen!2sma!4v1663009200764!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div>
        </div>
    </div>
</section>