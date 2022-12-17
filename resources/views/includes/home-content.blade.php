<div class="container mt-5 mb-5">
    <div class="theme-switch-wrapper">
        <label class="theme-switch" for="checkbox">
            <input type="checkbox" id="checkbox" />
            <div class="slider round"></div>
        </label>
    </div>

    <!-- Web-header -->
    <div class="row gy-4">
        <div class="col-6">
            <h1>{{ $content_header}} </h1>
            <small class="small-text">created by {{ $user_name }}</small>
            <div class="row row-cols-2">
                <div class="col-4">
                    <a href="mailto:{{ $user_email }}">
                        <button class="button-18" role="button">Contact Me</button>
                    </a>
                </div>
                <div class="col-4">
                    <a href="{{ $cv_file }}" target="__blank" download="faisal_ramadhan_cv">
                        <button class="button-18" role="button">
                            Download My CV
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <p class="content-desc">{{ $content_description_english}}</p>
            <h2 id="slogan">─ {{ $slogan }} ─</h2>
        </div>

        <!-- Web-Content -->
        <div class="col-6">
            <h2 id="head-1">Social Media</h2>
            <div class="card" style="max-width: 480px;">
                <div class="row">
                    <div class="col-md-4">
                        <img class="rounded-circle" src="{{ asset('image/20210528_184700.jpg')}}" alt="github_logo"/>
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">Social Media</h5>
                            <p class="card-text">
                                <a href={{ $user_twitter_account }} target="__blank">
                                    <img src="{{ asset('image/twitter.svg')}}" alt="twitter icon">
                                    Twitter
                                </a>
                                <br>
                                <a href={{ $user_instagram_account }} target="__blank">
                                    <img src="{{ asset('image/instagram.svg')}}" alt="instagram icon">
                                    Instagram
                                </a>
                                <br>
                                <a href={{ $user_github_account }} target="__blank">
                                    <img src="{{ asset('image/github.svg')}}" alt="github icon">
                                    Github
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <h2 id="head-2">Projects</h2>
            <a href={{ $project_link }} style="text-decoration: none; color:black;">
                <div class="card" style="max-width: 480px">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-fluid rounded-start" src="{{ asset('image/github_logo.png')}}" alt="github_logo" />
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h5 class="card-title">Elisabeth Cookies Project</h5>
                                <p class="card-text">This is a project that my project team has created, although it is still under development. Please have a look</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        <!-- Web-Footer -->
        <div class="footer">
            <p class="copyright-text">© Copyright All Rights Reserved</p>
        </div>
    </div>  
</div>