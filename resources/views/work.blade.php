@extends('layouts.app')

@section('sitetitle')
Work | Ali Siddique
@endsection

@section('description')
Description of Work | Ali Siddique
@endsection

@section('content')

    <section class="hero text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2>Work</h2>
                    <p>
                        Believing in smart ideas and branding experiences. <br />
                        Good design is as less design as possible.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="grid-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12"><a href="#" class="btn btn-default filter-trigger">Filter</a></div>
                        <div class="col-md-12 grid classic">
                            <a href="pages/work-single.html" class="item books">
                                <div class="thumb"><img alt="Your Alternative text" src="{{ asset('assets/images') }}/portfolio/01.png" /></div>
                                <div class="caption">
                                    <h4>Landingpage</h4>
                                    <div class="tag">UI Design &amp; Frontend Development</div>
                                </div>
                            </a>
                            <a href="pages/work-single.html" class="item typography">
                                <div class="thumb"><img alt="Your Alternative text" src="{{ asset('assets/images') }}/portfolio/02.png" /></div>
                                <div class="caption">
                                    <h4>Old Typography Practices</h4>
                                    <div class="tag">UI Design &amp; Typography</div>
                                </div>
                            </a>
                            <a href="pages/work-single.html" class="item design">
                                <div class="thumb"><img alt="Your Alternative text" src="{{ asset('assets/images') }}/portfolio/03.png" /></div>
                                <div class="caption">
                                    <h4>Hybrid Identity</h4>
                                    <div class="tag">Visual Identity &amp; Fashion</div>
                                </div>
                            </a>
                            <a href="pages/work-single.html" class="item books design">
                                <div class="thumb"><img alt="Your Alternative text" src="{{ asset('assets/images') }}/portfolio/04.png" /></div>
                                <div class="caption">
                                    <h4>Axes</h4>
                                    <div class="tag">Logo &amp; Identity</div>
                                </div>
                            </a>
                            <a href="pages/work-single.html" class="item fashion design">
                                <div class="thumb"><img alt="Your Alternative text" src="{{ asset('assets/images') }}/portfolio/05.png" /></div>
                                <div class="caption">
                                    <h4>The pursuit of happiness</h4>
                                    <div class="tag">Visual Identity &amp; Print</div>
                                </div>
                            </a>
                            <a href="pages/work-single.html" class="item typography">
                                <div class="thumb"><img alt="Your Alternative text" src="{{ asset('assets/images') }}/portfolio/06.png" /></div>
                                <div class="caption">
                                    <h4>The yellow book</h4>
                                    <div class="tag">Print &amp; Design</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            
@endsection