<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="icon" href="/img/logo-dv.png">
    <style>
        @media (min-width: 576px) {
          .col-md-6 {
            max-width: 450px;
          }
        }
      </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-6">
        <div class="card">
          <div class="card-body">
                <!-- Form login akan ditambahkan di sini -->
                <form action="/admin/login" method="POST">
                  @csrf
                  <h3 class="text-center mb-4" style="font-weight: bold;">Login Admin</h3>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email">
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password">
                  </div>
                  <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
                
          </div>
        </div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
  </body>
</html>
