@extends('public.layout.app')
@section('content')
    <section id="ts-features" class="ts-features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="ts-intro">
                        <h2 class="into-title">Hi, {{ auth()->user()->name }}</h2>
                        <h3 class="into-sub-title">Welcome to {{ env('APP_NAME') }} Account</h3>
                        <br>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <input type="submit" value="Sign out" class="btn btn-primary">
                        </form>
                    </div>

                    <div class="gap-20"></div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="ts-service-box">
                                <div class="ts-service-image-wrapper">
                                    <img loading="lazy" class="w-100" src="/assets/images/services/service1.jpg"
                                        alt="service-image">
                                </div>
                                <div class="">
                                    <div class="ts-service-info">
                                        <h3 class="service-box-title"><a
                                                href="{{ route('department.index') }}">Departments</a>
                                        </h3>
                                        <p>Department Mangement</p>
                                        <a class="learn-more d-inline-block" href="{{ route('department.index') }}"
                                            aria-label="service-details"><i class="fa fa-caret-right"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="ts-service-box">
                                <div class="ts-service-image-wrapper">
                                    <img loading="lazy" class="w-100" src="/assets/images/services/service1.jpg"
                                        alt="service-image">
                                </div>
                                <div class="">
                                    <div class="ts-service-info">
                                        <h3 class="service-box-title"><a
                                                href="{{ route('counter.index') }}">Counter</a>
                                        </h3>
                                        <p>Counter Mangement</p>
                                        <a class="learn-more d-inline-block" href="{{ route('counter.index') }}"
                                            aria-label="service-details"><i class="fa fa-caret-right"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="ts-service-box">
                                <div class="ts-service-image-wrapper">
                                    <img loading="lazy" class="w-100" src="/assets/images/services/service1.jpg"
                                        alt="service-image">
                                </div>
                                <div class="">
                                    <div class="ts-service-info">
                                        <h3 class="service-box-title"><a
                                                href="{{ route('token.index') }}">Token</a>
                                        </h3>
                                        <p>Token Mangement</p>
                                        <a class="learn-more d-inline-block" href="{{ route('token.index') }}"
                                            aria-label="service-details"><i class="fa fa-caret-right"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
