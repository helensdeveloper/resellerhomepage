<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
  <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body id="kt_body" class="bg-dark">
  <div class="d-flex flex-column flex-root">
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/unitedpalms-1/14-dark.png">
      <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
        <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
          <form class="form w-100" action="" autocomplete="off" method="POST">
            <div class="mb-10 text-center">
              <h1 class="text-dark mb-3">Create an Account</h1>
              <div class="text-gray-400 fw-bold fs-4">Already have an account?
                <a href="https://panel.wa-server.com" class="link-primary fw-bolder">Sign in here</a>
              </div>
            </div>
            <div class="row fv-row mb-7">
              <div class="col-xl-6">
                <label class="form-label fw-bolder text-dark fs-6">First Name</label>
                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="First Name" name="firstname" autocomplete="off" />
              </div>
              <div class="col-xl-6">
                <label class="form-label fw-bolder text-dark fs-6">Last Name</label>
                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Last Name" name="lastname" autocomplete="off" />
              </div>
            </div>
            <div class="fv-row mb-7">
              <label class="form-label fw-bolder text-dark fs-6">Email</label>
              <input class="form-control form-control-lg form-control-solid" type="email" placeholder="Email" name="email" autocomplete="off"/>
            </div>
            <div class="fv-row mb-7">
              <label class="form-label fw-bolder text-dark fs-6">Phone</label>
              <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Phone" name="phone" autocomplete="off" />
            </div>
            <div class="mb-10 fv-row" data-kt-password-meter="true">
              <div class="mb-1">
                <label class="form-label fw-bolder text-dark fs-6">Password</label>
                <div class="position-relative mb-3">
                  <input class="form-control form-control-lg form-control-solid" type="password" placeholder="Password" name="password" autocomplete="off" />
                  <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                    <i class="bi bi-eye-slash fs-2"></i>
                    <i class="bi bi-eye fs-2 d-none"></i>
                  </span>
                </div>
                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                  <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                  <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                  <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                  <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                </div>
              </div>
            </div>
            <div class="fv-row mb-5">
              <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
              <input class="form-control form-control-lg form-control-solid" type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="off" />
            </div>
            <div class="text-center">
              <button type="submit" name="submit" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
                <span class="indicator-label">Submit</span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/plugins/global/plugins.bundle.js"></script>
  <script src="assets/js/scripts.bundle.js"></script>
  <script src="assets/js/custom/authentication/sign-up/general.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
  <?php
  session_start();
  require "config.php";
  if (isset($_POST['phone'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gabung = $firstname.' '.$lastname;
    $fullname = ucwords($gabung);
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    if ($password == $confirmpassword) {
      $data = [
        'uniq' => $uniq,
        'fullname' => $fullname,
        'email' => $email,
        'phone' => $phone,
        'password' => $password,
        'serverlink' => $serverlink,
        'usertoken' => $usertoken,
        'devicekey' => $devicekey
      ];
      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => $gateway.'/register',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $data,
      ));
      $response = curl_exec($curl);
      $datajson = json_decode($response);
      $message = $datajson->message;
      echo "<script type='text/javascript'>
      Swal.fire({
        type: 'success',
        title: 'Server Response',
        text: '$message'
      })
      </script>";
    }else{
      echo "<script type='text/javascript'>
      Swal.fire({
        type: 'error',
        title: 'Response Failed',
        text: 'Confirm password does not match'
      })
      </script>";
    }
  } 
  ?>
</body>
</html>