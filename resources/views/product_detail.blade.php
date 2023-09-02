<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('css/styless.css') }}">

</head>

<body>
  <section>
    <div class="container flex">
      <div class="left">
        <div class="main_image">
          <img src="{{ asset('img/img-produit') }}/{{ $product->photo }}" class="slide">
        </div>
        <div class="option flex">
        </div>
      </div>
      <div class="right">
        <h3>{{ $product->product_name }}</h3>
        <h4> <small>$</small>{{ $product->price }}</h4>
        <p>{{ $product->product_description }}</p>
        <p class="btn-holder"><a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-danger" role="button">Add to cart</a> </p>

      </div>
    </div>

  </section>
  <script>
    function img(anything) {
      document.querySelector('.slide').src = anything;
    }

    function change(change) {
      const line = document.querySelector('.home');
      line.style.background = change;
    }
  </script>
</body>
</html>

