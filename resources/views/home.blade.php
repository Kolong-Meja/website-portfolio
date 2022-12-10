<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    @include('includes.head')
</head>
<body>
    <div class="container mt-5">
        <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>
        <div class="row gy-5">
            <div class="col-6">
                <h1>{{ $content_header}} </h1>
                <small class="text-muted">created by {{ $user_name }}</small>
            </div>
            <div class="col-6">
                <p>{{ $content_description_english}}</p>
            </div>
            <div class="col-6">
                <h2>Social Media</h2>
                <div class="card border-dark" style="max-width: 480px;">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ url('image/20210528_184700.jpg')}}" class="rounded-circle" alt="github_logo" style="max-width: 150px; margin: 15px;">
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h5 class="card-title">Social Media</h5>
                                <p class="card-text">
                                    <a href={{ $user_twitter_account }}>
                                        <img src="{{ url('image/twitter.svg')}}" alt="twitter icon">
                                        My Twitter
                                    </a>
                                    <br>
                                    <a href={{ $user_instagram_account }}>
                                        <img src="{{ url('image/instagram.svg')}}" alt="instagram icon">
                                        My Instagram
                                    </a>
                                    <br>
                                    <a href={{ $user_github_account }}>
                                        <img src="{{ url('image/github.svg')}}" alt="github icon">
                                        My Github
                                    </a>
                                    <br>
                                    <a href="mailto:{{ $user_email }}">
                                        <img src="{{ url('image/envelope-at.svg')}}" alt="email icon">
                                        My Email
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h2>My Team Projects</h2>
                <a href={{ $project_link }} style="text-decoration: none; color:black;">
                <div class="card border-dark" style="max-width: 480px;">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ url('image/github_logo.png')}}" class="img-fluid rounded-start" alt="github_logo" style="max-width: 150px; margin: 15px;">
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h5 class="card-title">Elisabeth Cookies Project</h5>
                                <p class="card-text">This is a project that my project team has created, although it is still under development. Please have a look</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        
    </script>
</body>
</html>