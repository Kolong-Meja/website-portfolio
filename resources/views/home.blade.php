<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    @include('includes.head')
</head>
<body>
    <h2 class="head-content">{{ $content_header }}</h2>
    <img class="rounded-circle shadow-4-strong" src="{{ url('image/20210528_184700.jpg')}}" alt="foto pribadi"/>
    <p id="content-desc-en">{{ $content_description_english }} </p>
    <h2 class="head-section">My Projects</h2>
    <div class="list-social-media">
        
    </div>
   {{-- <p>{{ $user_name }}</p>
   <p>{{ $user_email }}</p>
   <p>{{ $user_mobile }}</p> --}}
   {{-- <p id="content-desc-in">{{ $content_description_indonesia }}</p> --}}
    {{-- @include('include.footer') --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
    crossorigin="anonymous"></script>

    <script src="web.js"></script>
</body>
</html>