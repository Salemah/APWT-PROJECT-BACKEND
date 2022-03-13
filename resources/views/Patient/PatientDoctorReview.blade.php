@extends('Patient.Patientheader')
@section('content')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Review doctor </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/> --}}
  </head>
  <body>
    <div class="container">
      <div class="post">
      </div>
      <div class="star-widget">
        <div class="container">
            <div class="row">
              <div class="col">
                Column
              </div>
              <div class="col">
                Column
              </div>
              <div class="col">
                Column
              </div>
            </div>
          </div>
        <form action="#">


          <div class="textarea">
            <textarea cols="30" placeholder="Give your review about this doctor..."></textarea>
          </div>
          <div class="btn">
            <button type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
@endsection
