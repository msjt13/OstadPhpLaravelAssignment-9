@extends('layouts.app')

@section('sitetitle')
Contact | Ali Siddique
@endsection

@section('description')
Description of Contact | Ali Siddique
@endsection

@section('content')

    <section class="hero text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2>Contact</h2>
                    <p>
                        Believing in smart ideas and branding experiences. <br />
                        Good design is as less design as possible.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="hero">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1> <span class="typed">Hello</span></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- The contact form-->
                            <form id="form" action="" class="form row mt-md">
                                <div class="col-md-6">
                                    <div class="tag">What's your name? *</div>
                                    <input required type="text" name="name" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <div class="tag">Phone number</div>
                                    <input type="text" name="phone" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <div class="tag">E-mail address *</div>
                                    <input required type="email" name="email" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <div class="tag">Website URL</div>
                                    <input type="text" name="website" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <div class="tag">Tell us what's up! *</div>
                                    <textarea required name="message" class="form-control"></textarea>
                                    <button id="send" type="submit" class="btn btn-default">Send message</button><span class="p-md">* These fields are required</span>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5 col-md-offset-1 content">
                            <div class="mt-lg">
                                <img src="{{ asset('assets/images') }}/contact/01.jpg" class="mt-sm mb-md">
                                <p>We always love to get in touch with new people. Whether you are a potential customer, partner or someone else, we love to hear from you!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- The type animation script-->
            <script>$(function(){$(".typed").typed({strings: ["Hello", "Hola","Hallo"],typeSpeed: 130,loop: true  });});</script>
            
@endsection