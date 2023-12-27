<!DOCTYPE html>
  <html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>CSM | Login</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  
  <body>
    <section style="background-color: #dde5f4; min-height: 100vh;">
      <!-- Container -->
      <div class="container py-5 h-100">
        <!-- Form background -->
        <div class="card" style="border-radius: 1rem;">
          <!-- Form portion -->
          <div class="col-md-12 col-lg-12 d-flex align-items-center">
            <!-- Card -->
            <div class="card-body p-4 p-lg-5 text-black">
              <!-- Login form -->
              <form action="{{ route('login.process') }}" method="POST" id="loginForm">
                @csrf
                <div class="d-flex align-items-center mb-3 pb-1">
                  <img src="https://centraldatabase.mgb.gov.ph/logo.png" alt="" style="width: 50px; height: 50px;">
                  <span class="h4 font-weight-bold mb-0 ml-2">Mines and Geosciences Bureau - X | Automated Client Satisfactory Measurement</span>
                </div>

                <h5 class="mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                <div class="form-outline mb-4 form-group">
                  <label for="username">Username</label>
                  <input type="text" id="username" name="username" class="form-control" autocomplete="off" />
                </div>

                <div class="form-outline mb-4 form-group">
                  <label class="form-label" for="password">Password</label>  
                  <input type="password" id="password" name="password" class="form-control" />
                </div>

                <div class="pt-1 mb-4">
                  <button type="submit" class="btn btn-dark btn-lg btn-block" type="button">Login</button>
                </div>
              </form>
              <!-- /.Login form -->
            </div>
            <!-- /.Card -->
          </div>
          <!-- /.Form portion -->
        </div>
        <!-- /.Form background -->
      </div>
      <!-- /.Container -->
    </section>

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- jquery-validation -->
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <!-- Custom script -->
    <script>
      $(function() {
        // Login form validator
        $.validator.setDefaults({
          submitHandler: function(form) {
            form.submit();
          }
        });

        $('#loginForm').validate({
          rules: {
            username: {
              required: true,
            },
            password: {
              required: true,
            }
          },

          messages: {
            username: {
              required: "Username is required."
            },
            password: {
              required: "Password is required."
            }
          },

          errorElement: 'span',

          errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
          },

          highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
          },

          unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
          }
        });
        // /.Login form validator
      });
    </script>
  </body>
</html>
