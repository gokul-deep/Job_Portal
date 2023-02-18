<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.css">

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="../style/login.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/e1ee03ca03.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- navbar -->
    <!-- <nav class="navbar">
        <div class="container d-flex justify-content-between">
            <img src="./images/logo-white2.png" alt="Bootstrap" width="120px" height="auto">
            <a href="">Sign in</a>
        </div>
    </nav> -->

    <!-- content -->
    <div class="container right-panel-active">
        <!-- Sign Up -->
        <!-- <div class="container__form container--signup">
            <form action="#" class="form" id="form1">
                <h2 class="form__title">Sign Up</h2>
                <input type="text" placeholder="User" class="input" />
                <input type="email" placeholder="Email" class="input" />
                <input type="password" placeholder="Password" class="input" />
                <button class="btn">Sign Up</button>
            </form>
        </div> -->
        <div class="container__form container--signup">
            <form action="#" class="form" id="form3">
                <h2 class="form__title">Employer Login</h2>
                <input type="email" name="email" placeholder="Email" class="input" />
                <input type="password" name="password" placeholder="Password" class="input" />
                <!-- <a href="#" class="link">Forgot your password?</a> -->
                <button class="btn" type="button" id="login_employer">Sign In</button>
            </form>
        </div>

        <!-- Sign In -->
        <div class="container__form container--signin">
            <form action="#" class="form" id="form4">
                <h2 class="form__title">Candidate Login</h2>
                <input type="email" name="email" placeholder="Email" class="input" />
                <input type="password" name="password" placeholder="Password" class="input" />
                <!-- <a href="#" class="link">Forgot your password?</a> -->
                <button class="btn" type="button" id="login_candidate">Sign In</button>
            </form>
        </div>

        <!-- Overlay -->
        <div class="container__overlay">
            <div class="overlay">
                <div class="overlay__panel overlay--left d-flex flex-column justify-content-evenly">
                    <h4>Are You New Here?<br><a href="">Create An Account</a></h4>
                    
                    <button class="btn" id="signIn">Candidate Login</button>
                </div>
                <div class="overlay__panel overlay--right d-flex flex-column justify-content-evenly">
                    <h4>Are You New Here?<br><a href="">Create An Account</a></h4>
                    
                    <button class="btn" id="signUp">Employer Login</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const signInBtn = document.getElementById("signIn");
        const signUpBtn = document.getElementById("signUp");
        const fistForm = document.getElementById("form3");
        const secondForm = document.getElementById("form4");
        const container = document.querySelector(".container");

        signInBtn.addEventListener("click", () => {
            container.classList.remove("right-panel-active");
        });

        signUpBtn.addEventListener("click", () => {
            container.classList.add("right-panel-active");
        });

        fistForm.addEventListener("submit", (e) => e.preventDefault());
        secondForm.addEventListener("submit", (e) => e.preventDefault());
    </script>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../script/signup.js"></script>
</body>

</html>