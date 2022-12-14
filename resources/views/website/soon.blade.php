<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <link rel="stylesheet" href="{{ asset('front/css/all.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/soon.css') }}" />
  </head>

  <body>
    <!-- <h1 class="comming-soon">Comming Soon !!</h1> -->
    <div class="comming-soon">
      <img src="{{ asset('front/images/comming-soon.jpg') }}" alt="" />
      <a href="/" class="btn">Back To Home !! </a>
    </div>
  </body>
</html>
