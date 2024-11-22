<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Indomart</title>
</head>
<body>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                    @if (Session::get('failed'))
                       <div class="alert alert-danger">{{ Session::get('failed') }}</>
                    @endif
      
                  <h3 class="mb-5">Register</h3>
                <form action="{{route('store.user')}}" method="POST">
                    @csrf
                    <div data-mdb-input-init class="form-outline mb-4">
                        <div class="d-flex align-items-start">
                            <label class="form-label" for="typeNameX-2">Name</label>
                        </div>
                        <input name="name" type="text" id="typeNameX-2" class="form-control form-control-lg" placeholder="Enter Name" />
                      </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <div class="d-flex align-items-start">
                          <label class="form-label" for="typeEmailX-2">Email</label>
                      </div>
                      <input name="email" type="email" id="typeEmailX-2" class="form-control form-control-lg" placeholder="Enter Email" />
                    </div>
        
                    <div data-mdb-input-init class="form-outline mb-4">
                      <div class="d-flex align-items-start">
                          <label class="form-label" for="typePasswordX-2">Password</label>
                      </div>
                      <input name="password" type="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Enter Password" />
                    </div>
        
        
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
                </form>
      
                  {{-- <hr class="my-4"> --}}
      
                  {{-- <button data-mdb-button-init data-mdb-ripple-init class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
                    type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
                  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
                    type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button> --}}
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>