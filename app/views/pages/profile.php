<!DOCTYPE html>
<html lang="en">
<?php $this->View("head", "Đăng nhập"); ?>

<body>
    <?php $this->View("navigation"); ?>

    <!-- Code HTML ở đây  -->
    <div class="all-profile">
        <div class="profile-background">
            <video playsinline="" autoplay="" muted="" loop="" poster="https://cdn.akamai.steamstatic.com/steamcommunity/public/images/items/1406990/382344e97a4587c1773728480610d76dba4eb9f3.jpg" __idm_id__="355172354">
                <source src="C:/xampp/htdocs/WebOnline_PHP/Facebook_4.mp4" type="video/mp4">
                <source src="https://cdn.akamai.steamstatic.com/steamcommunity/public/images/items/1406990/a1c4a5d166c2086d43990c56bbc6a8d5bac7445e.webm" type="video/webm">
                <source src="https://cdn.akamai.steamstatic.com/steamcommunity/public/images/items/1406990/ad94df4fcc8a92d50bef360c6ca0516a31a51299.mp4" type="video/mp4">

            </video>
        </div>
        <div class="container main-profile">

            <div class="profile-header">
                <div class="profile-avt">
                    <img src="https://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/0b/0bef0696b5c681c5a570db87ab0c10c2a41d0a80_full.jpg">
                </div>
                <div class="profile-personalinfo">
                    <div class="profile-name">
                        <span>Nguyễn Ảnh Trường Thắng</span>
                    </div>
                    <div class="profile-info">
                        <ul class="profile-info-section">
                            <li>
                                <span>
                                    <i class="far fa-envelope"></i>
                                </span>
                                <span>truongthang2211@gmail.com</span>
                            </li>
                            <li>
                                <span>
                                    <i class="fas fa-mobile-alt"></i>
                                </span>
                                <span>0123465789</span>
                            </li>
                            <li>
                                <span>
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                                <span>Hồ Chí Minh - Vietnam</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="profile-badgeinfo">
                    <div class="profile-level">
                        <span class="h4">Level</span>
                        <span class="level">5</span>
                    </div>
                    <div class="profile-exp">
                        <div class="current-progress">
                            <div class="standard-progress-bar" style="position: relative; overflow: hidden;">
                                <div class="background" style="overflow: hidden; width: 68.5333%; position: absolute; left: 0px; top: 0px; height: 100%;">
                                    <div class="background-render" style="background: linear-gradient(to right, var(--main-yellow), var(--main-red)); height: 100%; width: 203px;"></div>
                                </div> <span class="text" style="z-index: 1;">205.6/300</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-content">
                <div class="col-md-9 col-sm-12 left-content">
                    <div class="recent-learn">
                        <h3>Hoạt động gần đây</h3>
                        <div class="course-section">
                            <div class="course-item">
                                <div class="course-avt">
                                    <img src="https://codelearn.io/CodeCamp/CodeCamp/Upload/Course/1e746fe3cbe448bda850d8b953a78954.jpg" alt="">
                                </div>
                                <div class="course-info">
                                    <div class="course-info-title">
                                        <a href="#">
                                            <h4>Java căn bản</h4>
                                        </a>
                                    </div>
                                    <div class="course-info-author">
                                        <a href="#">
                                            <p>Nguyễn Văn Ây</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="course-item">
                                <div class="course-avt">
                                    <img src="	https://codelearn.io/CodeCamp/CodeCamp/Upload/Course/adbef92753d242bcb79ca8f74cd615a5.jpg" alt="">
                                </div>
                                <div class="course-info">
                                    <div class="course-info-title">
                                        <a href="#">
                                            <h4>SQL căn bản</h4>
                                        </a>
                                    </div>
                                    <div class="course-info-author">
                                        <a href="#">
                                            <p>Nguyễn Văn Bi</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 white right-content">
                    <div class="course-profile-info">
                        <h3>Khóa học</h3>
                        <div class="learnt-course">
                            <a href="#">Khóa học đã học</a>
                            <span>5</span>
                        </div>
                        <div class="upped-course">
                            <a href="#">Khóa học đã đăng</a>
                            <span>2</span>
                        </div>
                    </div>
                    <div class="life-info">
                        <div class="user-achievement">
                            <h3>Thành tích</h3>
                        </div>
                        <div class="user-exp">
                            <h5>Kinh nghiệm</h5>
                        </div>
                        <div class="user-shcool">
                            <h5>Học vấn</h5>
                            <div class="section-info-content">
                                <div class="info-number"> <span class="circle"></span>
                                    <span class="circle"></span>
                                    <p class="time">01/01/2020 - 29/07/2020</p>
                                    <b class="title" title="">Đại học Công nghệ thông tin - Đại Học Quốc Gia HCM</b>
                                    <p class="description">Hệ Thống Thông Tin</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>






    <?php $this->View("footer"); ?>
    <style>
        /* Code CSS ở đây */
        a {
            text-decoration: none;
            color: #000;
        }

        video {
            object-fit: contain;
        }

        .all-profile {
            min-height: 100vh;
            background-color: #EBEBEB;
            position: relative;
        }

        .main-profile {
            background-color: rgba(255, 255, 255, 0.8);
            position: relative;

            padding-top: 12px;
            padding-bottom: 12px;
        }

        .profile-background {
            position: absolute;
            max-height: 100%;
            max-width: 100%;
            overflow: hidden;
        }

        .profile-header {
            display: flex;
            justify-content: start;
            padding: 24px 0;
            flex-wrap: wrap;
        }

        .profile-avt {
            width: 200px;
            height: 200px;
            border: 1px solid #999;
            border-radius: 50%;
            overflow: hidden;

        }

        .profile-avt img {
            width: 100%;
            max-width: 100%;
            transform: scale(1);
        }

        .profile-personalinfo {
            flex-basis: 50%;
            padding: 8px 24px;
        }

        .profile-name {
            font-size: 32px;
        }

        .profile-info {
            margin-top: 16px;
            margin-left: 8px;

        }

        .profile-info-section {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .profile-info-section i {
            width: 21px;
            height: 21px;
        }

        .profile-info-section span {
            color: #333;
        }

        .profile-badgeinfo {
            display: flex;
            flex-direction: column;
            padding-right: 32px;
            flex-grow: 1;
            text-align: center;
            align-content: flex-start;
            padding-top: 8px;
            padding-bottom: 8px;
        }

        .profile-level {
            padding: 8px 0;
        }

        .level {
            border-radius: 50%;
            width: 32px;
            height: 32px;
            padding: 4px;
            background: #fff;
            border: 2px solid #666;
            color: #666;
            text-align: center;
            display: inline-block;
            font: 20px Arial, sans-serif;
            font-weight: 600;
            margin-left: 16px;

        }

        .standard-progress-bar {
            width: 100%;
            height: auto;
            display: flex;
            border-radius: 20px;
            border: 2px solid var(--main-blue);
            justify-content: center;
            align-items: center;
            color: #444;
        }

        .profile-content {
            display: flex;
            flex-wrap: wrap;
        }

        .left-content {
            margin-right: 12px;
            flex-basis: 65%;
            flex-grow: 1;

        }



        .course-item {
            display: flex;
            padding-top: 12px;
            padding-bottom: 12px;
            background-color: rgba(0, 0, 0, 0.05);
            margin-top: 8px;
            transition: all 0.3s;
        }

        .course-item:hover {
            background-color: rgba(0, 0, 0, 0.08);

        }

        .course-avt {
            border-radius: 15px;
            overflow: hidden;
        }

        .course-avt img {
            width: 184px;
        }

        .course-info {
            margin-left: 12px;
        }

        .right-content {
            flex-grow: 1;

        }

        .recent-learn,
        .course-profile-info,
        .life-info {
            padding: 8px;
            background-color: rgba(255, 255, 255, 0.5);
            transition: all 0.3s;
        }

        .recent-learn:hover,
        .course-profile-info:hover,
        .life-info:hover {
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 5px 15px 0 #dedede;
        }

        .course-profile-info a {
            text-decoration: none;
            color: #333;
        }

        .course-profile-info span {
            font-size: 20px;
            margin-left: 12px;
        }

        .life-info {
            margin-top: 12px;
        }

        .section-info-content {
            margin: 15px 0 0 5px;
            padding-left: 10px;
            border-left: 1px solid #979797;
            display: inline-block;
            width: calc(100% - 15px);
        }

        .section-info-content span.circle {
            width: 8px;
            height: 8px;
            background-color: #979797;
            border-radius: 50%;
            float: left;
            margin-left: -14px;
        }

        .section-info-content .time {
            height: 14px;
            color: #898989;
            font-size: 13px;
            line-height: 14px;
        }

        .section-info-content .title {
            color: #2c31cf;
            font-size: 16px;
            font-weight: 600;
            line-height: 19px;
            margin-bottom: 5px;
            word-break: break-word;
        }

        .section-info-content .description {
            color: #333;
            font-size: 14px;
            word-break: break-word;
        }

        
        
        @media (max-width: 768px){
            .left-content{
                margin-right: 0;
            }
            .course-profile-info{
                margin-top: 12px;
            }
        }
    </style>
</body>

</html>