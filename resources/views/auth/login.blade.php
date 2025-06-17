<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <main class="mt-5">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
        @if (session()->has("success"))
          <div class="alert alert-success">
            {{ session()->get("success") }}
          </div>
          
          @endif
          @if (session()->has("error"))
          <div class="alert alert-success">
            {{ session()->get("error") }}
          </div>
          
          @endif
            <div class="card">
                <h3 class="card-hearder text -center">    Login</h3>
                <div class="card-body">


                    <form method="post" action="{{ route("login.post") }}">
                       @csrf
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Email" id="Email" class=" form-control" name="email" required autofocus>
                            @if($errors->has("email"))<span class="text-danger">{{ $error->first("email") }}</span>@endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" placeholder="password" id="password" class=" form-control" name="password" required >
                            @if($errors->has("password"))<span class="text-danger">{{ $error->first("password") }}</span>@endif
                        </div>
                        <div class="d-grid mx-auto">
                              <button type="submit" class="btn btn-dark btn-block">sigin</button>
                        </div>


                    </form>

                </div>

            </div>

        </div>

    </div>
  </div>

  </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>