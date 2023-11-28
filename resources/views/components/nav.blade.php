            <header>
                <div class="container">
                    <div class="col-md-3">
                        <a href="/" class="brand"><img alt="Your Alternative text" src="{{ asset('assets/images') }}/logo.svg" width="50px" /></a>
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="nav-trigger">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>
                        <ul class="navigation">
							<li><a href="{{ url('/') }}">Home</a></li>
                            <li>
                                <a href="{{ url('work') }}">Work</a>
                            </li>
                            <li><a href="{{ url('about') }}">About</a></li>
                            <li>
                                <a href="{{ url('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <form>
                            <div class="search input-group">
                                <input type="text" placeholder="Search for..." class="form-control" />
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default"><span class="ion-ios-search-strong"></span></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </header>