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
                        <h5 class="card-title pb-0 fs-4">Register</h5>
                        <p class="small">Mohon isi data anda dengan benar</p>
                      </div>
    
                      <form class="row g-3 needs-validation" action="{{route('prosesregister')}}" method="POST">
                        @csrf
                        <div class="col-12">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <div class="input-group has-validation">
                              <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                          </div>

                        <div class="col-12">
                          <label for="yourUsername" class="form-label">Email</label>
                          <div class="input-group has-validation">
                            <input type="text" name="email" class="form-control" id="email" required>
                          </div>
                        </div>
    
                        <div class="col-12">
                          <label for="yourPassword" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="yourPassword" required>
                        </div>
    
                        <div class="col-12">
                        </div>
                        <div class="col-12">
                          <button class="btn w-100" type="submit" style="background-color:#199fdc; color:#ffff">DAFTAR</button>
                          <p class="w-100 mt-2 text-center">sudah punya akun ? <a href="{{route('login')}}" style="color:#199fdc">login</a></p>
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