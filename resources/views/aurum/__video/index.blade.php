<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FlipperFlip Video</title>
  <link rel="stylesheet" href="/__video/css/bootstrap.css">
  <link rel="stylesheet" href="/__video/css/style.css?v=3.0">
  <link rel="shortcut icon" href="/img/favicon.png">
</head>
<body>


  <header>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <a href="/{{ $getParams }}"><img src="/storage/{{ $fields['logo'] }}" class="logo-img" alt=""></a>
        </div>
      </div>
    </div>
  </header>


  <section class="first-section">

    <div class="container">
      <div class="row">
        <div class="col-xl-4 text-center-md col-lg-4 col-md-12 col-sm-12 col-12">
          <h2>{{ $fields['first_heading'] }}</h2>
          <h4>{{ $fields['paragraph'] }}</h4>
          <a href="{{ $fields['video_url'] }}{{ $getParams }}" class="btn btn-orange">{{ $fields['button_text'] }}</a>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 video-wrap">
          <video muted controls autoplay id="sound" style="width: 100%;">
            <source src="/__video/video/video.mp4" type="video/mp4">
          </video>
        </div>
      </div>
    </div>
  </section>


  <section class="second-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 col-12">
          <img src="/__video/img/mach.png" class="mach-img" alt="">
        </div>
        <div class="col-xl-6 col-md-6 col-lg-6 text-sm-center col-sm-12 col-12">
          <h2>{{ $fields['second_heading'] }}</h2>
          <a href="{{ $fields['section_2_button_url'] }}{{ $getParams }}" class="btn btn-orange">{{ $fields['section_2_button_text'] }}</a>
        </div>
      </div>
    </div>
  </section>


  <script type="text/javascript">
  window.onload = () => {


    document.getElementById('sound').addEventListener('click', clickVideo, false);
    document.getElementById('sound').addEventListener('ended', startNow, false);

    function startNow() {
      document.getElementById('sound').currentTime = 0;
      document.getElementById('sound').muted = false;
      document.getElementById('sound').play();
    }

    window.clickVideo = 0;
    function clickVideo(e) {
      if(window.clickVideo == 0){
        window.clickVideo = 1;
        e.preventDefault();
        return;
        document.getElementById('sound').muted = false;
        document.getElementById('sound').play();


    }
    }

    document.addEventListener('click', playChristmas, false);


    function playChristmas() {

      if(document.getElementById('sound').muted !== true) {
        return;
      }
      document.getElementById('sound').volume = 0.5;
      document.getElementById('sound').currentTime = 0;
      document.getElementById('sound').muted = false;
      document.getElementById('sound').play();


    }



  };

  </script>

</body>
</html>
