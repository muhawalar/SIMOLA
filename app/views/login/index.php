<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="<?=BASEURL;?>/css/style.css">
    <link href="<?=BASEURL;?>/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

</head>

<body>

    <style>
        body {
            height: 100vh;
            background-image: url("<?=BASEURL;?>/img/bg-simola.jpg");
            background-color: black;
            opacity: 90%;
            

        }
        .container {
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
        }
    
    .card-login {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: black;
  opacity: 90%;
  background-clip: border-box;
  /* border: 1px solid #e3e6f0; */
  border-radius: 0.35rem;

}
    </style> -->

    <div class="mb-6">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start card-login">
        <div class="row gx-lg-5 align-items-center mb-5 ">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                    Sistem Monitoring Laboratorium <br />
                   
                </h1>
                <p class="mb-4 opacity-70" style="color:white">
                Memantau penggunaan dan ketersediaan peralatan laboratorium, 
                memonitor aktivitas dan waktu penggunaan laboratorium, mengelola jadwal dan pemesanan 
                penggunaan laboratorium, serta mengatur tugas dan tanggung jawab asisten laboratorium.
                </p>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card shadow mr-4 ml-4 mt-4">
                    <div class="card-body py-4 px-md-5">
                        <img src="<?=BASEURL;?>/img/logo.png" alt="" class="mb-4">
                        <form method="POST" action="<?=BASEURL?>/Login/login">
                            <!-- 2 column grid layout with text inputs for the first and last names -->


                            <!-- Email input -->
                            <div class="form-outline mb-4 text-left">
                                <label class="form-label" for="username" >Username</label>
                                <input type="text" id="username" name="username"  class="form-control" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4 text-left">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control" />
                            </div>


                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4 mt-4">
                                Login
                            </button>

                            <!-- Register buttons -->
                            <?php if(isset($data['error'])) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $data['error']; ?>
                                </div>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Section: Design Block -->
</body>

</html>