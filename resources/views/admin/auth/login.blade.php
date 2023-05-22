<!DOCTYPE html>
<html lang="en">
@include('admin.partials.header')
<body>
    <main class="bg-light">
        <div class="container">
    
          <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
    
                  <div class="card">
    
                    <div class="card-body">
    
                      <div class="pt-4 pb-2 text-center">
                        <img height="120px" class="mb-4" src="{{asset('assets/images/logo.png')}}" alt="">
                        <h5 class="card-title pb-0 fs-4">Log In</h5>
                        <p class="small">Masukan email dan password dengan benar</p>
                      </div>

                      @if (session()->has('loginError'))
                      <div class="form-group">
                          <div
                              class="alert alert-danger alert-dismissible fade show"
                              role="alert">
                              <span class="alert-text small">
                                  {{session('loginError')}}
                              </span>
                          </div>
                      </div>
                      @endif
    
                      <form class="row g-3 needs-validation" action="{{route('proseslogin')}}" method="POST">
                        @csrf
                        <div class="col-12">
                          <label for="yourUsername" class="form-label">Email</label>
                          <div class="input-group has-validation">
                            <input type="text" name="email" class="form-control" id="email" required>
                            <div class="invalid-feedback">Mohon isi email anda</div>
                          </div>
                        </div>
    
                        <div class="col-12">
                          <label for="yourPassword" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="yourPassword" required>
                          <div class="invalid-feedback">Mohon isi password</div>
                        </div>
    
                        <div class="col-12">
                        </div>
                        <div class="col-12">
                          <button class="btn w-100" type="submit" style="background-color:#199fdc; color:#ffff">MASUK</button>
                          <a href="{{route('register')}}" class="btn w-100 mt-2" style="background-color:#fafafe; color:#000">DAFTAR</a>
                        </div>
                      </form>
    
                    </div>
                  </div>
    
                </div>
              </div>
            </div>
    
          </section>
    
        </div>
      </main>
</body>
</html>