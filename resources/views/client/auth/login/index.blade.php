@extends('client.layouts.master')
@section('title','Login')
@section('style')
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet" />
@endsection
@section('content')
    <section class="login-register">
        <div class="container py-6">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center flex-column align-items-center">
                    <div class="card card-body shadow-custom-03 p-md-5">
                        <h5 class="text-center my-2">Login to the managment panel</h5>
                        <div class="alert alert-info" role="alert">
                            E-Mail: example@example.com
                            <br>
                            Password: secret
                        </div>
                        <form role="form" id="contact-form" method="POST" action="{{ route('login') }}"
                            autocomplete="off">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <label>E-Mail</label>
                                        <div class="input-group mb-4">
                                            <input type="text" name="email"
                                                class="form-control @error('email') is-invalid @enderror d-ltr text-left"
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label>Password</label>
                                        <div class="input-group">
                                            <input type="password" name="password"
                                                class="form-control @error('password') is-invalid @enderror">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>




                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-lg text-center text-white btn-primary btn-lg w-100 mt-4 mb-0">
                                            Login
                                        </button>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>



@endsection

@section('script')
<script>

</script>
@endsection
