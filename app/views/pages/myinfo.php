<!DOCTYPE html>
<html lang="en">
<?php $this->View("head", "Thông tin cá nhân"); ?>

<body>
    <?php $this->View("navigation"); ?>

    <!-- Code HTML ở đây  -->
    <div class="zone zone-content">
        <div class="container">
            <div class="user--profile">
                <div class="row">
                    <div class="col-md-3">
                        <div class="user--profile-left">
                            <ul class="user--profile--list-function">
                                <li class="active"><a href="#">Thông tin &amp; liên hệ </a></li>
                                <li><a href="#change-userName">Đổi tên người dùng </a></li>
                                <li><a href="#change-password">Đổi mật khẩu</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9 user--profile-right-container">
                        <div class="user--profile-right editing">
                            <div class="user--profile-group">
                                <h2 class="user--profile-title-group">Thông tin</h2>
                                <form class="" method="post" id="frm-info" novalidate="novalidate">
                                    <div class="row">

                                        <div class="col-md-6 col-xs-12">
                                            <div class="row myinfo-avt">
                                                <img id="AvtPreview" src="https://vnn-imgs-f.vgcloud.vn/2019/04/02/16/kha-banh-kiem-duoc-bao-nhieu-tien-tu-mang-xa-hoi.jpg" class="no-img"></img>
                                            </div>
                                            <div class="row avatar-selector">
                                                <div class="form-group UploadAvatar">
                                                    <label style="display: block;">Ảnh đại diện của bạn</label>
                                                    <label for="Avatar" class="browse btn btn-primary input-sm" type="button" id="Upload-Ava" style="display: block;">Chọn ảnh</label>
                                                    <input name="ImgFile" id="Avatar" class="file" type="file" accept="image/png,image/x-png,image/gif,image/jpeg,image/jpg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="row myinfo-background">
                                                <img id="BackGroundPreview" src="https://i.pinimg.com/originals/d7/de/ef/d7deef7ef29adf8187d9a9f39e6a034e.png" class="no-img"></img>

                                            </div>
                                            <div class="row avatar-selector">
                                                <div class="form-group UploadBackground">
                                                    <label style="display: block;">Ảnh nền trang user của bạn</label>
                                                    <label for="Background" class="browse btn btn-primary input-sm" type="button" id="Upload-Ava" style="display: block;">Chọn ảnh</label>
                                                    <input name="ImgFile" id="Background" class="file" type="file" accept="image/png,image/x-png,image/gif,image/jpeg,image/jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-4 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="FamilyName" class="required" aria-required="true">Họ và Tên</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-sm-8 col-xs-12">
                                                    <div class="form-group">
                                                        <span id="span-name" class="span-display" style="display: none;"></span>
                                                        <input name="FamilyName" type="text" class="form-control is-required" id="FamilyName" autocomplete="family-name" aria-required="true" style="display: block;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-4 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="BirthYear">Ngày sinh</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-sm-8 col-xs-12">
                                                    <div class="form-group">
                                                        <span id="span-birthday" class="span-display" style="display: none;">20-10-2021</span>
                                                        <!-- <input name="BirthYear" type="text" readonly="" id="BirthYear" class="form-control hasDatepicker" placeholder="yyyy-mm-dd" style="display: block;"> -->
                                                        <input name="BirthYear" type="date" id="BirthYear" class="form-control hasDatepicker" placeholder="mm/dd/yyyy" style="display: block;">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-4 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="text" class="required" aria-required="true">Số điện thoại</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-sm-8 col-xs-12">
                                                    <div class="form-group">
                                                        <span id="span-phone" class="span-display" style="display: none;"></span>
                                                        <input name="PhoneNumber" type="text" class="form-control is-required" id="PhoneNumber" placeholder="Số điện thoại" autocomplete="tel-national" style="display: block;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-4 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="EmailAddress" class="required" aria-required="true">Email</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-sm-8 col-xs-12">
                                                    <div class="form-group">
                                                        <span id="span-email" class="span-display" style="display: none;">huynhminhthu12@gmail.com</span>
                                                        <input name="EmailAddress" type="email" disabled="" class="form-control" id="EmailAddress" placeholder="Email" autocomplete="email" style="display: block;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-4 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="GraduatedSchool" aria-required="true">Trường</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-sm-8 col-xs-12">
                                                    <div class="form-group">
                                                        <span id="span-school" class="span-display" style="display: none;"></span>
                                                        <input name="GraduatedSchool" type="text" class="form-control" id="GraduatedSchool" autocomplete="graduated-school" aria-required="true" style="display: block;">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-sm-4 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="StateId" class="required" aria-required="true">Thành phố</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-sm-8 col-xs-12">
                                                    <div class="form-group">
                                                        <select class="form-select" id="StateSelect" name="StateSelect">
                                                            <option value="-1" selected="selected">Chọn thành phố</option>
                                                            <option value="4360">An Giang</option>
                                                            <option value="4361">Kon Tum</option>
                                                            <option value="4362">Đắk Nông</option>
                                                            <option value="4363">Sóc Trăng</option>
                                                            <option value="4364">Bình Phước</option>
                                                            <option value="4365">Hưng Yên</option>
                                                            <option value="4366">Thanh Hóa</option>
                                                            <option value="4367">Quảng Trị</option>
                                                            <option value="4368">Tuyên Quang</option>
                                                            <option value="4369">Quảng Ngãi</option>
                                                            <option value="4370">Hà Nội</option>
                                                            <option value="4371">Lào Cai</option>
                                                            <option value="4372">Vĩnh Long</option>
                                                            <option value="4373">Lâm Đồng</option>
                                                            <option value="4374">Bình Định</option>
                                                            <option value="4375">Nghệ An</option>
                                                            <option value="4376">Kiên Giang</option>
                                                            <option value="4377">Hà Giang</option>
                                                            <option value="4378">Phú Yên</option>
                                                            <option value="4379">Lạng Sơn</option>
                                                            <option value="4380">Đà Nẵng</option>
                                                            <option value="4381">Sơn La</option>
                                                            <option value="4382">Tây Ninh</option>
                                                            <option value="4383">Nam Định</option>
                                                            <option value="4384">Lai Châu</option>
                                                            <option value="4385">Bến Tre</option>
                                                            <option value="4386">Khánh Hòa</option>
                                                            <option value="4387">Bình Thuận</option>
                                                            <option value="4388">Cao Bằng</option>
                                                            <option value="4389">Hải Phòng</option>
                                                            <option value="4390">Ninh Bình</option>
                                                            <option value="4391">Yên Bái</option>
                                                            <option value="4392">Gia Lai</option>
                                                            <option value="4393">Hoà Bình</option>
                                                            <option value="4394">Bà Rịa - Vũng Tàu</option>
                                                            <option value="4395">Cà Mau</option>
                                                            <option value="4396">Bình Dương</option>
                                                            <option value="4397">Cần Thơ</option>
                                                            <option value="4398">Thừa Thiên Huế</option>
                                                            <option value="4399">Đồng Nai</option>
                                                            <option value="4400">Tiền Giang</option>
                                                            <option value="4401">Điện Biên</option>
                                                            <option value="4402">Vĩnh Phúc</option>
                                                            <option value="4403">Quảng Nam</option>
                                                            <option value="4404">Đắk Lắk</option>
                                                            <option value="4405">Thái Nguyên</option>
                                                            <option value="4406">Hải Dương</option>
                                                            <option value="4407">Bạc Liêu</option>
                                                            <option value="4408">Trà Vinh</option>
                                                            <option value="4409">Thái Bình</option>
                                                            <option value="4410">Hà Tĩnh</option>
                                                            <option value="4411">Ninh Thuận</option>
                                                            <option value="4412">Đồng Tháp</option>
                                                            <option value="4413">Long An</option>
                                                            <option value="4414">Hậu Giang</option>
                                                            <option value="4415">Quảng Ninh</option>
                                                            <option value="4416">Phú Thọ</option>
                                                            <option value="4417">Quảng Bình</option>
                                                            <option value="4418">Hồ Chí Minh</option>
                                                            <option value="4419">Hà Nam</option>
                                                            <option value="4420">Bắc Ninh</option>
                                                            <option value="4421">Bắc Giang</option>
                                                            <option value="4422">Bắc Kạn</option>
                                                        </select>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-sm-4 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="CityName">Địa chỉ</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-sm-8 col-xs-12">
                                                    <div class="form-group">
                                                        <span id="span-cityName" class="span-display" style="display: none;"></span>
                                                        <textarea name="CityName" type="text" class="form-control" id="CityName" placeholder="Tỉnh/Thành phố bạn đang sống" style="display: block;"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-4 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Facebook</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-sm-8 col-xs-12">
                                                    <div class="form-group">
                                                        <span id="span-facebook" class="span-display" style="display: none;" title=""></span>
                                                        <input type="text" name="Facebook" class="form-control" id="facebook" placeholder="Your profile link" style="display: block;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-4 col-xs-12">
                                                    <div class="form-group">
                                                        <label>LinkedIn</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-sm-8 col-xs-12">
                                                    <div class="form-group">
                                                        <span id="span-linkedIn" class="span-display" style="display: none;" title=""></span>
                                                        <input type="text" name="LinkedIn" class="form-control" id="linkedIn" placeholder="Your profile link" style="display: block;">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-sm-4 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Mô tả bản thân</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-sm-8 col-xs-12">
                                                    <div class="form-group">
                                                        <p id="span-summary" style="display: none;"></p>
                                                        <textarea rows="5" name="Summary" type="text" class="form-control" id="summary" style="display: block;"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-4 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Thành tích</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-sm-8 col-xs-12">
                                                    <div class="form-group">
                                                        <ul id="span-achievement" style="display: none;"></ul>
                                                        <textarea rows="5" name="Achievement" type="text" class="form-control" id="achievement" style="display: block;"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group pull-right">
                                                    <button class="btn btn-sm pull-right btn-save save-info-button" type="button" id="btnSaveInfo" style="height: 35px; width: 104px; border-radius: 3px; line-height: inherit; display: block;">Lưu</button>
                                                    <button class="btn btn-sm pull-right btn-cancel " type="button" id="btnCancelInfo" style="height: 35px; width: 104px; border-radius: 3px; margin-right: 18px; line-height: inherit; display: block;">Hủy</button>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <h2 class="user--profile-title-group" id="change-userName">Đổi tên người dùng</h2>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="UserName" class="required" aria-required="true">Tên người dùng</label>
                                                <input name="UserName" type="text" class="form-control" id="UserName" autocomplete="username">
                                            </div>
                                        </div>
                                        <div class="form-group pull-right">
                                            <button class="btn btn-sm pull-right btn-save save-info-button" type="button" id="btnSaveInfo" style="height: 35px; width: 104px; border-radius: 3px; line-height: inherit; display: block;">Thay đổi</button>
                                        </div>
                                    </div>


                                    <h2 class="user--profile-title-group">Đổi mật khẩu</h2>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div id="change-password" class="tab-pane active">
                                                    <form id="frmChangePassword" method="POST" action="/">
                                                        <div class="form-group">
                                                            <label for="currentPassword">Mật khẩu</label>
                                                            <input name="currentPassword" type="password" class="form-control" placeholder="Mật khẩu" autocomplete="current-password">
                                                        </div>
                                                        <p>
                                                            <!--link cho form quên mật khẩu điền sau-->
                                                            <a href="#" class="pull-right">Quên mật khẩu?</a>
                                                        </p>
                                                        <div class="form-group">
                                                            <label for="newPassword">Mật khẩu mới</label>
                                                            <input name="newPassword" type="password" class="form-control" placeholder="Mật khẩu mới">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="confirmPassword">Mật khẩu xác nhận</label>
                                                            <input name="confirmPassword" type="password" class="form-control" placeholder="Mật khẩu xác nhận">
                                                        </div>
                                                        <div class="form-group">
                                                            <button class="btn btn-sm pull-right btn-save save-info-button" type="button" id="btnSaveInfo" style="height: 35px; width: 104px; border-radius: 3px; line-height: inherit; display: block;">Thay đổi</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>







    <?php $this->View("footer"); ?>

    <style>
        :root {
            --main-blue: #00A19D;
            --main-red: #E05D5D;
            --white: #fff;
        }

        body {
            background-color: #f1f1f1;
        }

        div {
            display: block;
        }

        @media only screen and (max-width: 982px) {
            [class*="col-"] {
                width: 100%;
            }
        }

        .user--profile {
            background: var(--white);
        }

        .user--profile-left .user--profile--list-function {
            list-style: none;
            padding: 30px 30px;
        }

        .user--profile-left .user--profile--list-function li {
            margin-bottom: 14px;
        }

        .user--profile-left .user--profile--list-function li a {
            color: #333;
            font-size: 14px;
            line-height: 16px;
            text-decoration: none;
        }

        .user--profile-left .user--profile--list-function li a:hover {
            font-weight: bold;
            color: var(--main-blue);
            text-decoration: none;
        }

        /* thông tin */
        .user--profile-group {
            background: var(--white);
            padding: 30px;
        }

        .user--profile-right .user--profile-title-group {
            padding: 0;
            margin: 0;
            color: var(--main-blue);
            font-size: 24px;
            font-weight: bold;
            line-height: 28px;
            margin-bottom: 20px;
        }

        .user--profile-right .row {
            margin: 0;
        }

        .user--profile-right .row>* {
            padding: 0;
        }

        .form-control:focus {
            border-color: var(--main-blue);
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%), 0 0 8px var(--main-blue);
            box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%), 0 0 8px var(--main-blue);
        }

        .form-select:focus {
            border-color: var(--main-blue);
            outline: 0;
            box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%), 0 0 8px var(--main-blue);
        }

        /* anh dai dien va anh bia */
        .myinfo-avt {
            width: 100px;
            height: 100px;
            border: 1px solid #d8d8d8;
            border-radius: 50%;
            text-align: center;
            overflow: hidden;
        }

        .myinfo-background {
            height: 100px;
            width: 160px;
            border-radius: 5px;
            overflow: hidden;
            border: 1px solid #d8d8d8;

        }

        #BackGroundPreview {
            width: 100%;

        }

        .no-img {
            background-color: #d8d8d8;
        }

        .avatar-selector {
            text-align: center;
        }

        .user--profile-right.editing .form-group {
            margin-bottom: 30px;
        }

        .UploadAvatar {
            margin-top: 20px;
            width: 100px;
        }
        .UploadBackground{
            margin-top: 20px;

            width: 160px;
        }
        .user--profile-right .form-group label {
            color: #898989;
            font-size: 14px;
            line-height: 16px;
            font-weight: normal;
        }

        .form-group label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
            font-weight: 700;
        }
        .UploadBackground .browse,
        .UploadAvatar .browse {
            margin: 0 auto;
            padding: 12px 12px;
            width: 104px;
            border-radius: 3px !important;
            background-color: var(--main-blue) !important;
            border: 1px solid transparent;
            color: #fff !important;
        }
        .UploadBackground .browse:hover,
        .UploadBackground .browse:active,
        .UploadAvatar .browse:hover,
        .UploadAvatar .browse:active {
            background-color: #fff !important;
            border: 1px solid var(--main-blue);
            color: var(--main-blue) !important;
        }

        .file {
            display: none;
        }

        .input-group .btn {
            margin-left: -15px;
        }

        /*info  */
        #frm-info .col-md-9 .row {
            display: flex;
            align-items: center;
            justify-content: center;
            vertical-align: middle;
        }

        label {
            cursor: default;
        }

        .user--profile .span-display {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        .span-display {
            height: 16px;
            color: #333;
            font-size: 14px;
            line-height: 16px;
        }

        .form-group .required:after {
            content: "*";
            color: #f00;
            /* padding: 0 5px; */
            display: inline-block;
        }

        .user--profile-right .form-group label.error {
            color: #f00;
        }

        label.error {
            font-size: 12px;
            color: #f44336;
            font-weight: normal;
            font-style: italic;
        }




        /* button luu, huy */

        .pull-right {
            float: right !important;
        }

        .user--profile-right .btn-save,
        .user--profile-right .btn-save:focus,
        .user--profile-right .btn-save:active {
            height: 45px;
            width: 167px;
            border-radius: 31.5px;
            background-color: var(--main-blue);
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            line-height: 34px;
            text-align: center;
            outline: none;
        }

        .user--profile-right .btn-save:hover {
            color: var(--main-blue);
            background-color: var(--white);
            border-color: var(--main-blue);
            box-shadow: 0 10px 10px 0 #d1e6ff;
        }

        .user--profile-right .btn-save.disabled {
            background-color: #c8c8c8;
            border-color: #c8c8c8;
            color: #fff;
        }

        .user--profile-right .btn-cancel {
            color: var(--main-red);
            background-color: var(--white);
            border: var(--main-red);
            font-size: 14px;
            font-weight: 500;
            line-height: 34px;
            text-align: center;
            height: 37px;
            width: 100px;
            border: 1px solid #c8c8c8;
            border-radius: 3px;
        }

        .user--profile-right .btn-cancel:hover {
            background-color: var(--main-red);
            color: #fff
        }
    </style>

</body>

</html>