<!DOCTYPE html>
<html lang="en">
<?php $this->View("head", "Đăng nhập"); ?>
<link href="<?php echo URL_ROOT?>/public/assets/css/override-container.css" rel="stylesheet" >

<body>
    <?php $this->View("navigation"); ?>

    <!-- Code HTML ở đây  -->
    <!-- <h1>Login page</h1> -->
    <!-- top head -->
    <section id="top-head" class="landing-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-7">
                    <div class="wrap-block-head-text">
                        <div class="block-head-text">
                            <i>
                                <h2>“ Não không nhăn</h2>
                                <h2>Đời không nể ”</h2>
                            </i>

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-5">
                    <div class="wrap-form-head-register">
                        <div class="form-head-register">
                            <div class="forms-container">
                                <form action="#" id="signup-form">
                                    <h2 class="title">Sign up</h2>
                                    <div class="input-field">
                                        <i class="fas fa-user"></i>
                                        <input type="text" name="username" placeholder="Username">
                                    </div>
                                    <div class="input-field">
                                        <i class="fas fa-envelope"></i>
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="input-field">
                                        <i class="fas fa-lock"></i>
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                    <button type="submit" class="button solid">Sign Up</button>
                                    <p class="socil-text">Or Sign Up with social platforms</p>
                                    <div class="social-media">
                                        <a href="#" class="social-icon social-icon__facebook">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#" class="social-icon social-icon__google">
                                            <i class="fab fa-google"></i>
                                        </a>
                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- keywork khóa học -->
    <section id="courses" class="landing-section">
        <div class="container">
            <div class="row">
                <h2 class="title-section">
                    "Bạn chưa tìm thấy khóa học mình quan tâm ?"
                    <br>
                    "StudyMate có hơn ......"
                </h2>
                <div class="col-lg-12">
                    <div class="courses-lt-box">
                        <div class="courses__item">
                            <a href="#" class="c-tags-mini">
                                <div class="course-field"> <i class="fas fa-language" aria-hidden="true"></i> Ngoại ngữ</div>
                            </a>
                        </div>
                        <div class="courses__item">
                            <a href="#" class="c-tags-mini">
                                <div class="course-field"> <i class="fas fa-desktop" aria-hidden="true"></i> Tin học văn phòng</div>
                            </a>
                        </div>
                        <div class="courses__item">
                            <a href="#" class="c-tags-mini">
                                <div class="course-field"> <i class="fas fa-paint-brush" aria-hidden="true"></i> Thiết kế</div>
                            </a>
                        </div>
                        <div class="courses__item">
                            <a href="#" class="c-tags-mini">
                                <div class="course-field"> <i class="fas fa-code" aria-hidden="true"></i> Lập trình</div>
                            </a>
                        </div>
                        <div class="courses__item">
                            <a href="#" class="c-tags-mini">
                                <div class="course-field"> <i class="fas fa-line-chart" aria-hidden="true"></i> Marketing</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- why choose us -->
    <section id="why-choose-us" class="landing-section">
        <div class="container">
            <h2 class="title-section">
                Lý do bạn nên học cùng <br>StudyMate
            </h2>
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="wrap-reason-img">
                        <img src="<?php echo URL_ROOT ?>/public/assets/img/login/why_choose_us1.png" alt="Cộng đồng">
                    </div>
                    <h3 class="reason-title">Cộng đồng lớn</h3>
                    <p class="reason-des"> Cộng đồng lớn và năng động.</p>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="wrap-reason-img">
                        <img src="<?php echo URL_ROOT ?>/public/assets/img/login/why_choose_us2.png" alt="Học trực tuyến">
                    </div>
                    <h3 class="reason-title">Học trực tuyến</h3>
                    <p class="reason-des">Học mọi lúc mọi nơi.</p>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="wrap-reason-img">
                        <img src="<?php echo URL_ROOT ?>/public/assets/img/login/why_choose_us3.png" alt="Giảng viên">
                    </div>
                    <h3 class="reason-title">Giảng viên uy tín</h3>
                    <p class="reason-des">Giảng viên uy tín. <br>Bài giảng chất lượng.</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- footer-banne -->
    <section id="footer-banner" class="landing-section">
        <div class="container">
            <h2 class="title-section">TRỞ THÀNH HỌC VIÊN <span style="color:#FAD93C">STUDYMATE</span>!</h2>
            <h4>Đăng ký và tham gia ngay!</h4>
            <a class="button btn btn-important" href="#signup-form" title="Start today!">Start today!</a>
        </div>
    </section>
    
    




    <?php $this->View("footer"); ?>
    <style>
        /* Code CSS ở đây */
        :root {
            --main-gradient: linear-gradient(125deg,var(--main-red) 20%,var(--main-yellow));
            --dark-blue-color: #00A19D;
            --dark-blue-color-2: var(--main-red);
        }

        body,
        input {
            font-family: 'Poppins', sans-serif;
        }

        ol,
        ul {
            list-style: none;
        }

        #top-head {
            min-height: 90vh;
            background: url(https://cdn.dribbble.com/users/812639/screenshots/16359312/media/3c261bfbd8be0772f938d8564969998f.jpg) center center/contain;

        }

        .wrap-block-head-text {
            position: relative;
            max-width: 555px;
            width: 100%;
            margin-bottom: 90px;
            margin-right: 15%;
        }



        .block-head-text {
            border: var(--dark-blue-color) solid 2px;
            border-radius: 20px;
            padding: 25px 35px;
            background: var(--white);
            z-index: 1;
            position: relative;
            text-align: center;
        }

        .landing-section {
            padding: 70px 0;
            transition: all 300ms;
        }

        .wrap-form-head-register {
            position: relative;
        }

        .form-head-register {
            position: relative;
            width: 100%;
            background-color: var(--white);
            min-height: 50vh;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: 0 0 20px 0 rgb(29 31 89 / 10%);
            padding: 35px 25px;
            z-index: 1;
        }

        .forms-container {
            position: relative;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            box-sizing: inherit;
        }

        .forms-container form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .title {
            font-size: 2.2rem;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .input-field {
            max-width: 300px;
            width: 100%;
            height: 50px;
            background-color: #f0f0f0;
            margin: 12px 0;
            border-radius: 15px;
            display: grid;
            grid-template-columns: 15% 85%;
            padding: 0 0.4rem;
            position: relative;

        }

        .input-field i {
            text-align: center;
            line-height: 50px;
            color: black;
            /*đổi màu */
            font-size: 1.5rem;
        }

        .input-field input {
            background: none;
            outline: none;
            border: none;
            line-height: 1;
            font-weight: 600;
            font-size: 1.2rem;
            color: black;
            /*đổi màu */
        }

        input[type=text]:focus,
        input[type=password]:focus,
        input[type=email]:focus {
            border-bottom: 2px solid var(--dark-blue-color);
        }

        .input-field input:placeholder-shown {
            color: #aaa;
            /*đổi màu */
            font-weight: 500;
        }

        .button {
            width: 150px;
            outline: none;
            border: none;
            border-radius: 48px;
            text-transform: uppercase;
            font-weight: 600;
            margin: 10px 0;
            padding: 10px 0;
            transition: all 0.5s;
        }

        .forms-container .button {
            background-color: var(--dark-blue-color);
            color: white;
        }

        .forms-container .button:hover {
            background-color: var(--dark-blue-color-2);
        }

        .social-text {
            padding: 0.7rem 0;
        }

        .social-media {
            display: flex;
            justify-content: center;
        }

        .social-icon {
            height: 46px;
            width: 46px;
            margin: 0 0.45rem;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: var(--dark-blue-color-2);
            font-size: 1.3rem;
            border-radius: 50%;
            transition: all 0.5s;
        }
        .social-icon:hover{
            color: #fff;
        }
        .social-icon__facebook{
            --facebook-color:#36589d; 
            color: var(--facebook-color);
            border: 1px solid var(--facebook-color);

        }
        .social-icon__facebook:hover{
            background-color: var(--facebook-color);
        }
        .social-icon__google{
            --google-color:#ea230f; 
            color: var(--google-color);
            border: 1px solid var(--google-color);
        }
        .social-icon__google:hover{
            background-color: var(--google-color);
        }
        /* ==================== */
        .title-section {
            font-size: 42px;
            line-height: 1.26;
            text-align: center;
            margin-top: 0;
            margin-bottom: 60px;
        }

        .courses-lt-box {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
            width: 100%;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .courses__item {
            width: 148px;
            height: 90px;
            margin-top: 16px;
        }
        .course-field{
            text-align: center;
            color: #fff;
            padding: 8px;
        }
        .courses-lt-box a {
            text-decoration: none;
        }

        .c-tags-mini {
            border-radius: 6px;
            padding: 11px 0;
            display: block;
            color: #000;
            background: var(--dark-blue-color);
            transition: .2s ease;
        }

        .c-tags-mini p {
            text-align: center;
            color: var(--white);
            font-size: 15px;
        }

        .c-tags-mini i {
            text-align: center;
            font-size: 30px;
            display: block;
            /* margin-bottom: 5px; */
        }

        .c-tags-mini:hover {
            box-shadow: 0 0 20px 0 rgb(0 0 0 / 20%);
            cursor: pointer;
        }

        /* =============== */
        .wrap-reason-img {
            display: inline-block;
            position: relative;
            margin: 0 auto 40px;
            max-width: calc(100% - 60px);
            border-radius: 10px;
            background-color: var(--white);
            box-shadow: 0 0 20px 0 rgb(29 31 89 / 10%);
            text-align: center;
            width: 100%;
            transition: all 300ms;
        }

        .wrap-reason-img img {
            transition: all 300ms;
            max-width: 100%;
            border-radius: 10px;
            width: 160px;
            height: 170px;
        }

        .reason-title {
            font-size: 26px;
            line-height: 1.27;
            margin: 0 0 10px;
            text-align: center;
        }

        .reason-des {
            margin: 0 0 50px;
            font-size: 18px;
            font-weight: 500;
            color: #172b4d;
            text-align: center;
        }

        /* =============== */
        #footer-banner {
            color: #fff;
            text-align: center;
            background-color: var(--dark-blue-color);
        }

        .btn.btn-important {
            background-color: #E05D5D;
            color: white;
            text-align: center;
        }
    </style>
</body>

</html>