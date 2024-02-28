<x-guest-layout>

  <!-- auth-page content -->
  <div class="auth-page-content pt-lg-5 overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="card m-0 overflow-hidden">
            <div class="row justify-content-center g-0">
              <div class="col-lg-6">
                <div class="p-lg-5 auth-one-bg h-100 p-4">
                  <div class="bg-overlay"></div>
                  <div class="position-relative h-100 d-flex flex-column">
                    <div class="mb-4">
                      <a href="index-2.html" class="d-block">
                        <img src="assets/images/logo-light.png" alt="" height="18">
                      </a>
                    </div>
                    <div class="mt-auto">
                      <div class="mb-3">
                        <i class="ri-double-quotes-l display-4 text-success"></i>
                      </div>

                      <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner text-white-50 pb-5 text-center">
                          <div class="carousel-item active">
                            <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization.
                              Thanks very much! "</p>
                          </div>
                          <div class="carousel-item">
                            <p class="fs-15 fst-italic">" The theme is really great with an amazing customer support."
                            </p>
                          </div>
                          <div class="carousel-item">
                            <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization.
                              Thanks very much! "</p>
                          </div>
                        </div>
                      </div>
                      <!-- end carousel -->

                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="p-lg-5 p-4">
                  <div>
                    <h5 class="text-primary">Register Account</h5>
                    <p class="text-muted">Get your account now.</p>
                  </div>

                  <div class="mt-4">
                    <form class="needs-validation" novalidate method="POST" action="{{ route('register') }}">
                      @csrf

                      <div class="mb-3">
                        <label for="username" class="form-label">Full name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="username" placeholder="Enter your name"
                          name="name" :value="old('name')" required autofocus autocomplete="name">
                        <div class="invalid-feedback">
                          Please enter username
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="useremail" placeholder="Enter email address"
                          name="email" :value="old('email')" required autocomplete="username">
                        <div class="invalid-feedback">
                          Please enter email
                        </div>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="password-input">Password</label>
                        <div class="position-relative auth-pass-inputgroup">
                          <input type="password" class="form-control password-input pe-5" onpaste="return false"
                            placeholder="Enter password" id="password-input" aria-describedby="passwordInput"
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password" required
                            autocomplete="new-password">
                          <button
                            class="btn btn-link position-absolute text-decoration-none text-muted password-addon end-0 top-0"
                            type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                          <div class="invalid-feedback">
                            Please enter password
                          </div>
                        </div>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="confirm-password-input">Confirm Password</label>
                        <div class="position-relative auth-pass-inputgroup">
                          <input type="password" class="form-control password-input pe-5" onpaste="return false"
                            placeholder="Enter password" id="confirm-password-input" aria-describedby="passwordInput"
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password_confirmation" required
                            autocomplete="new-password">
                          <button
                            class="btn btn-link position-absolute text-decoration-none text-muted password-addon end-0 top-0"
                            type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                          <div class="invalid-feedback">
                            Please confirm your new password
                          </div>
                        </div>
                      </div>

                      <div class="mb-4">
                        <p class="fs-12 text-muted fst-italic mb-0">By registering you agree to the Velzon <a
                            href="#" class="text-primary text-decoration-underline fst-normal fw-medium">Terms
                            of Use</a></p>
                      </div>

                      <div id="password-contain" class="bg-light mb-2 rounded p-3">
                        <h5 class="fs-13">Password must contain:</h5>
                        <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                        <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                        <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                        <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                      </div>

                      <div class="mt-4">
                        <button class="btn btn-success w-100" type="submit">Sign Up</button>
                      </div>

                      {{-- <div class="mt-4 text-center">
                        <div class="signin-other-title">
                          <h5 class="fs-13 title text-muted mb-4">Create account with</h5>
                        </div>

                        <div>
                          <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i
                              class="ri-facebook-fill fs-16"></i></button>
                          <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i
                              class="ri-google-fill fs-16"></i></button>
                          <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i
                              class="ri-github-fill fs-16"></i></button>
                          <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i
                              class="ri-twitter-fill fs-16"></i></button>
                        </div>
                      </div> --}}
                    </form>
                  </div>

                  <div class="mt-5 text-center">
                    <p class="mb-0">Already have an account ? <a href="{{ route('login') }}"
                        class="fw-semibold text-primary text-decoration-underline"> Signin</a> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end card -->
        </div>
        <!-- end col -->

      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </div>
  <!-- end auth page content -->
</x-guest-layout>


{{-- <form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div>
      <x-input-label for="name" :value="__('Name')" />
      <x-text-input id="name" class="mt-1 block w-full" type="text" name="name" :value="old('name')" required
        autofocus autocomplete="name" />
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
      <x-input-label for="email" :value="__('Email')" />
      <x-text-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" required
        autocomplete="username" />
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
      <x-input-label for="password" :value="__('Password')" />

      <x-text-input id="password" class="mt-1 block w-full" type="password" name="password" required
        autocomplete="new-password" />

      <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
      <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

      <x-text-input id="password_confirmation" class="mt-1 block w-full" type="password" name="password_confirmation"
        required autocomplete="new-password" />

      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="mt-4 flex items-center justify-end">
      <a class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
        href="{{ route('login') }}">
        {{ __('Already registered?') }}
      </a>

      <x-primary-button class="ms-4">
        {{ __('Register') }}
      </x-primary-button>
    </div>
  </form> --}}
