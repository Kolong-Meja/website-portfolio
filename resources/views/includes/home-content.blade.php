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
            <div class="card" style="max-width: 480px;" id="first">
                <div class="row">
                    <div class="col-md-4">
                        <img class="rounded-circle" src="{{ asset('image/20210528_184700.jpg')}}" alt="my_picture"/>
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
            <div class="col-6">
                <p class="copyright-text">© Copyright All Rights Reserved</p>
            </div>
        </div>
        <div class="col-6">
            <h2 id="head-2">Projects</h2>
            <div id="projects" class="carousel slide rounded" data-bs-ride="carousel">
                <div class="carousel-inner rounded border">
                    <div class="carousel-item active">
                        <div class="card border-0" id="second">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <a href="{{ $first_project_link }}">
                                        <img src="{{ asset('image/github_logo.png')}}" class="img-fluid rounded-start" alt="github_logo">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Elisabeth Cookies Project</h5>
                                        <p class="card-text">Elisabeth Cookies is the first online store website that my team and I created in 2022. The processing time for this website is approximately 2 weeks more. This is a really great project for me and my team, that we can create our own online shop website.</p>
                                        <p class="card-text"><small class="text-muted">Created At Wednesday November 30 2022</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card border-0" id="second">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <a href="{{ $second_project_link }}">
                                        <img src="{{ asset('image/github_logo.png')}}" class="img-fluid rounded-start" alt="github_logo">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Portfolio Website Project</h5>
                                        <p class="card-text">Faisal Ramadhan Portfolio Website is a website project that I created alone at the end of 2022. The idea of making this personal portfolio website was born because of my boredom while at home. Thankfully, God made it easy for me and I managed to publish this website on the Google page.</p>
                                        <p class="card-text"><small class="text-muted">Created at Saturday December 10 2022</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#projects" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#projects" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                </div>
            </div>
        </div>
    </div>  
</div>