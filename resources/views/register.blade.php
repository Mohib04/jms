@extends('layouts.master')

@section('bodySection')
    <!-- Info Section -->
    <div class="login-section">
            <!-- Login Form -->
            <div class="login-form default-form">
                <div class="form-inner">
                    <h3>Create a Free Superio Account</h3>

                    <!--Login Form-->
                    <form method="post" action="https://creativelayers.net/themes/superio/add-parcel.html">
                        <div class="form-group">
                            <div class="btn-box row">
                                <div class="col-lg-6 col-md-12">
                                    <a href="#" class="theme-btn btn-style-seven"><i class="la la-user"></i> Candidate </a>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <a href="#" class="theme-btn btn-style-four"><i class="la la-briefcase"></i> Employer </a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" placeholder="Email" required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input id="password-field" type="password" name="password" value="" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <button class="theme-btn btn-style-one " type="submit" name="Register">Register</button>
                        </div>
                    </form>

                    <div class="bottom-box">
                        <div class="divider"><span>or</span></div>
                        <div class="btn-box row">
                            <div class="col-lg-6 col-md-12">
                                <a href="#" class="theme-btn social-btn-two facebook-btn"><i class="fab fa-facebook-f"></i> Log In via Facebook</a>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <a href="#" class="theme-btn social-btn-two google-btn"><i class="fab fa-google"></i> Log In via Gmail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Login Form -->
    </div>
    <!-- End Info Section -->
@endsection
