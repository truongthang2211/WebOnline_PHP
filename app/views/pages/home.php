<!DOCTYPE html>
<html lang="en">
<?php $this->View("head", "Trang chủ"); ?>

<body>
    <?php $this->View("navigation"); ?>
    <!-- NHỚ ĐỔI TÊN FILE NÀY THÀNH courses.php nha anh zai - tui đổi nó bị gì ấy ko load dc -->
    <!-- Code HTML ở đây  -->
    <div id="header">
        <div class="container">
            <h2>Learning online. Let's start your knowledge journey!</h2>
            <div id="search">
                <div class="input-group">
                    <form action="" id="form-search">
                        <input name="name" id="search-course" class="form-control" type="text" placeholder="Search...">
                        <span class="input-group-btn">
                            <i class="fas fa-search"></i>
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="slider container">
        <div class="row">
            <div class="col-lg-3 menu-left-new">
                <ul class="menu">
                    <li>
                        <a href="/course/ngoai-ngu?boxcode=slide-menu-home"><i class="fa fa-language"></i>Ngoại ngữ</a>
                        <div class="megadrop">
                            <div class="col">
                                <ul>
                                    <li>
                                        <a href="/course/ngoai-ngu?boxcode=slide-menu-home" rel="nofollow">Tất cả Ngoại ngữ</a>
                                    </li>
                                    <li>
                                        <a href="/tag/tieng-han?boxcode=slide-menu-home">Tiếng Hàn</a>
                                    </li>
                                    <li>
                                        <a href="/tag/tieng-anh?boxcode=slide-menu-home">Tiếng Anh</a>
                                    </li>
                                    <li>
                                        <a href="/tag/tieng-trung?boxcode=slide-menu-home">Tiếng Trung</a>
                                    </li>
                                    <li>
                                        <a href="/tag/tieng-nhat?boxcode=slide-menu-home">Tiếng Nhật</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/course/marketing?boxcode=slide-menu-home"><i class="fa fa-line-chart"></i>Marketing</a>
                        <div class="megadrop">
                            <div class="col">
                                <ul>
                                    <li>
                                        <a href="/course/marketing?boxcode=slide-menu-home" rel="nofollow">Tất cả Marketing</a>
                                    </li>
                                    <li>
                                        <a href="/tag/marketing-online?boxcode=slide-menu-home">Marketing Online</a>
                                    </li>
                                    <li>
                                        <a href="/tag/google-ads?boxcode=slide-menu-home">Google Ads</a>
                                    </li>
                                    <li>
                                        <a href="/tag/seo?boxcode=slide-menu-home">Seo</a>
                                    </li>
                                    <li>
                                        <a href="/tag/branding?boxcode=slide-menu-home">Branding</a>
                                    </li>
                                    <li>
                                        <a href="/tag/content-marketing?boxcode=slide-menu-home">Content Marketing</a>
                                    </li>
                                    <li>
                                        <a href="/tag/video-marketing?boxcode=slide-menu-home">Video marketing</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/course/tin-hoc-van-phong?boxcode=slide-menu-home"><i class="fa fa-desktop"></i>Tin học văn phòng</a>
                        <div class="megadrop">
                            <div class="col">
                                <ul>
                                    <li>
                                        <a href="/course/tin-hoc-van-phong?boxcode=slide-menu-home" rel="nofollow">Tất cả Tin học văn phòng</a>
                                    </li>
                                    <li>
                                        <a href="/tag/excel?boxcode=slide-menu-home">Excel</a>
                                    </li>
                                    <li>
                                        <a href="/tag/word?boxcode=slide-menu-home">Word</a>
                                    </li>
                                    <li>
                                        <a href="/tag/powerpoint?boxcode=slide-menu-home">PowerPoint</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/course/thiet-ke?boxcode=slide-menu-home"><i class="fa fa-paint-brush"></i>Thiết kế</a>
                        <div class="megadrop">
                            <div class="col">
                                <ul>
                                    <li>
                                        <a href="/course/thiet-ke?boxcode=slide-menu-home" rel="nofollow">Tất cả Thiết kế</a>
                                    </li>
                                    <li>
                                        <a href="/tag/thiet-ke-quang-cao?boxcode=slide-menu-home">Thiết kế quảng cáo</a>
                                    </li>
                                    <li>
                                        <a href="/tag/phan-mem-thiet-ke?boxcode=slide-menu-home">Phần mềm thiết kế</a>
                                    </li>
                                    <li>
                                        <a href="/tag/thiet-ke-web?boxcode=slide-menu-home">Thiết kế Web</a>
                                    </li>
                                    <li>
                                        <a href="/tag/kien-truc-noi-that?boxcode=slide-menu-home">Kiến Trúc, Nội Thất</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/course/kinh-doanh-khoi-nghiep?boxcode=slide-menu-home"><i class="fa fa-rocket"></i>Kinh doanh - Khởi nghiệp</a>
                        <div class="megadrop">
                            <div class="col">
                                <ul>
                                    <li>
                                        <a href="/course/kinh-doanh-khoi-nghiep?boxcode=slide-menu-home" rel="nofollow">Tất cả Kinh doanh - Khởi nghiệp</a>
                                    </li>
                                    <li>
                                        <a href="/tag/bat-dong-san?boxcode=slide-menu-home">Bất động sản</a>
                                    </li>
                                    <li>
                                        <a href="/tag/crypto?boxcode=slide-menu-home">Crypto</a>
                                    </li>
                                    <li>
                                        <a href="/tag/kinh-doanh-online?boxcode=slide-menu-home">Kinh doanh Online</a>
                                    </li>
                                    <li>
                                        <a href="/tag/startup?boxcode=slide-menu-home">Startup</a>
                                    </li>
                                    <li>
                                        <a href="/tag/kinh-doanh-cafe?boxcode=slide-menu-home">Kinh doanh Cafe</a>
                                    </li>
                                    <li>
                                        <a href="/tag/kiem-tien-online?boxcode=slide-menu-home">Kiếm tiền Online</a>
                                    </li>
                                    <li>
                                        <a href="/tag/quan-tri-doanh-nghiep?boxcode=slide-menu-home">Quản trị doanh nghiệp</a>
                                    </li>
                                    <li>
                                        <a href="/tag/chung-khoan?boxcode=slide-menu-home">Chứng khoán</a>
                                    </li>
                                    <li>
                                        <a href="/tag/dropshipping?boxcode=slide-menu-home">Dropshipping</a>
                                    </li>
                                    <li>
                                        <a href="/tag/ke-toan?boxcode=slide-menu-home">Kế Toán</a>
                                    </li>
                                    <li>
                                        <a href="/tag/dau-tu-forex?boxcode=slide-menu-home">Đầu tư forex</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/course/phat-trien-ca-nhan?boxcode=slide-menu-home"><i class="far fa-lightbulb"></i>Phát triển cá nhân</a>
                        <div class="megadrop">
                            <div class="col">
                                <ul>
                                    <li>
                                        <a href="/course/phat-trien-ca-nhan?boxcode=slide-menu-home" rel="nofollow">Tất cả Phát triển cá nhân</a>
                                    </li>
                                    <li>
                                        <a href="/tag/thuong-hieu-ca-nhan?boxcode=slide-menu-home">Thương hiệu cá nhân</a>
                                    </li>
                                    <li>
                                        <a href="/tag/tai-chinh-ca-nhan?boxcode=slide-menu-home">Tài chính cá nhân</a>
                                    </li>
                                    <li>
                                        <a href="/tag/dam-phan?boxcode=slide-menu-home">Đàm phán</a>
                                    </li>
                                    <li>
                                        <a href="/tag/ky-nang-lanh-dao?boxcode=slide-menu-home">Kỹ năng lãnh đạo</a>
                                    </li>
                                    <li>
                                        <a href="/tag/quan-tri-nhan-su?boxcode=slide-menu-home">Quản trị nhân sự</a>
                                    </li>
                                    <li>
                                        <a href="/tag/mc?boxcode=slide-menu-home">MC</a>
                                    </li>
                                    <li>
                                        <a href="/tag/ren-luyen-tri-nho?boxcode=slide-menu-home">Rèn luyện trí nhớ</a>
                                    </li>
                                    <li>
                                        <a href="/tag/ky-nang-mem?boxcode=slide-menu-home">Kỹ năng mềm</a>
                                    </li>
                                    <li>
                                        <a href="/tag/giao-tiep?boxcode=slide-menu-home">Giao tiếp</a>
                                    </li>
                                    <li>
                                        <a href="/tag/ky-nang-quan-ly?boxcode=slide-menu-home">Kỹ năng quản lý</a>
                                    </li>
                                    <li>
                                        <a href="/tag/thuyet-trinh?boxcode=slide-menu-home">Thuyết trình</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/course/sales-ban-hang?boxcode=slide-menu-home"><i class="fa fa-shopping-cart"></i>Sales, bán hàng</a>
                        <div class="megadrop">
                            <div class="col">
                                <ul>
                                    <li>
                                        <a href="/course/sales-ban-hang?boxcode=slide-menu-home" rel="nofollow">Tất cả Sales, bán hàng</a>
                                    </li>
                                    <li>
                                        <a href="/tag/ban-hang-online?boxcode=slide-menu-home">Bán hàng Online</a>
                                    </li>
                                    <li>
                                        <a href="/tag/telesales?boxcode=slide-menu-home">Telesales</a>
                                    </li>
                                    <li>
                                        <a href="/tag/ban-hang-livestream?boxcode=slide-menu-home">Bán hàng livestream</a>
                                    </li>
                                    <li>
                                        <a href="/tag/cham-soc-khach-hang?boxcode=slide-menu-home">Chăm sóc khách hàng</a>
                                    </li>
                                    <li>
                                        <a href="/tag/chien-luoc-ban-hang?boxcode=slide-menu-home">Chiến lược bán hàng</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/course/cong-nghe-thong-tin?boxcode=slide-menu-home"><i class="fa fa-code"></i>Công nghệ thông tin</a>
                        <div class="megadrop">
                            <div class="col">
                                <ul>
                                    <li>
                                        <a href="/course/cong-nghe-thong-tin?boxcode=slide-menu-home" rel="nofollow">Tất cả Công nghệ thông tin</a>
                                    </li>
                                    <li>
                                        <a href="/tag/lap-trinh?boxcode=slide-menu-home">Lập trình</a>
                                    </li>
                                    <li>
                                        <a href="/tag/ngon-ngu-lap-trinh?boxcode=slide-menu-home">Ngôn ngữ lập trình</a>
                                    </li>
                                    <li>
                                        <a href="/tag/lap-trinh-web?boxcode=slide-menu-home">Lập Trình Web</a>
                                    </li>
                                    <li>
                                        <a href="/tag/lap-trinh-android?boxcode=slide-menu-home">Lập trình Android</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/course/suc-khoe-gioi-tinh?boxcode=slide-menu-home"><i class="fa fa-heartbeat"></i>Sức khỏe - Giới tính</a>
                        <div class="megadrop">
                            <div class="col">
                                <ul>
                                    <li>
                                        <a href="/course/suc-khoe-gioi-tinh?boxcode=slide-menu-home" rel="nofollow">Tất cả Sức khỏe - Giới tính</a>
                                    </li>
                                    <li>
                                        <a href="/tag/giam-can?boxcode=slide-menu-home">Giảm cân</a>
                                    </li>
                                    <li>
                                        <a href="/tag/thien?boxcode=slide-menu-home">Thiền</a>
                                    </li>
                                    <li>
                                        <a href="/tag/phong-the?boxcode=slide-menu-home">Phòng the</a>
                                    </li>
                                    <li>
                                        <a href="/tag/giam-stress?boxcode=slide-menu-home">Giảm stress</a>
                                    </li>
                                    <li>
                                        <a href="/tag/fitness-gym?boxcode=slide-menu-home">Fitness - Gym</a>
                                    </li>
                                    <li>
                                        <a href="/tag/tinh-yeu?boxcode=slide-menu-home">Tình yêu</a>
                                    </li>
                                    <li>
                                        <a href="/tag/yoga?boxcode=slide-menu-home">Yoga</a>
                                    </li>
                                    <li>
                                        <a href="/tag/massage?boxcode=slide-menu-home">Massage</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/course/phong-cach-song?boxcode=slide-menu-home"><i class="fa fa-cutlery"></i>Phong cách sống</a>
                        <div class="megadrop">
                            <div class="col">
                                <ul>
                                    <li>
                                        <a href="/course/phong-cach-song?boxcode=slide-menu-home" rel="nofollow">Tất cả Phong cách sống</a>
                                    </li>
                                    <li>
                                        <a href="/tag/pha-che?boxcode=slide-menu-home">Pha chế</a>
                                    </li>
                                    <li>
                                        <a href="/tag/lam-banh?boxcode=slide-menu-home">Làm bánh</a>
                                    </li>
                                    <li>
                                        <a href="/tag/lam-dep?boxcode=slide-menu-home">Làm đẹp</a>
                                    </li>
                                    <li>
                                        <a href="/tag/handmade?boxcode=slide-menu-home">Handmade</a>
                                    </li>
                                    <li>
                                        <a href="/tag/tu-vi?boxcode=slide-menu-home">Tử vi</a>
                                    </li>
                                    <li>
                                        <a href="/tag/ao-thuat?boxcode=slide-menu-home">Ảo thuật</a>
                                    </li>
                                    <li>
                                        <a href="/tag/nhac-cu?boxcode=slide-menu-home">Nhạc cụ</a>
                                    </li>
                                    <li>
                                        <a href="/tag/am-thuc-nau-an?boxcode=slide-menu-home">Ẩm thực - Nấu ăn</a>
                                    </li>
                                    <li>
                                        <a href="/tag/nhay?boxcode=slide-menu-home">Nhảy</a>
                                    </li>
                                    <li>
                                        <a href="/tag/phong-thuy?boxcode=slide-menu-home">Phong thuỷ</a>
                                    </li>
                                    <li>
                                        <a href="/tag/luyen-giong?boxcode=slide-menu-home">Luyện giọng</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/course/nuoi-day-con?boxcode=slide-menu-home"><i class="fa fa-child"></i>Nuôi dạy con</a>
                        <div class="megadrop">
                            <div class="col">
                                <ul>
                                    <li>
                                        <a href="/course/nuoi-day-con?boxcode=slide-menu-home" rel="nofollow">Tất cả Nuôi dạy con </a>
                                    </li>
                                    <li>
                                        <a href="/tag/mang-thai?boxcode=slide-menu-home">Mang Thai</a>
                                    </li>
                                    <li>
                                        <a href="/tag/day-con-thong-minh?boxcode=slide-menu-home">Dạy con thông minh</a>
                                    </li>
                                    <li>
                                        <a href="/tag/cham-soc-be-yeu?boxcode=slide-menu-home">Chăm sóc bé yêu</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/course/hon-nhan-gia-dinh?boxcode=slide-menu-home"><i class="fa fa-group"></i>Hôn nhân &amp; Gia đình</a>
                        <div class="megadrop">
                            <div class="col">
                                <ul>
                                    <li>
                                        <a href="/course/hon-nhan-gia-dinh?boxcode=slide-menu-home" rel="nofollow">Tất cả Hôn nhân &amp; Gia đình</a>
                                    </li>
                                    <li>
                                        <a href="/tag/hanh-phuc-gia-dinh?boxcode=slide-menu-home">Hạnh phúc gia đình</a>
                                    </li>
                                    <li>
                                        <a href="/tag/doi-song-vo-chong?boxcode=slide-menu-home">Đời sống vợ chồng</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/course/nhiep-anh-dung-phim?boxcode=slide-menu-home"><i class="fa fa-camera"></i>Nhiếp ảnh, dựng phim</a>
                        <div class="megadrop">
                            <div class="col">
                                <ul>
                                    <li>
                                        <a href="/course/nhiep-anh-dung-phim?boxcode=slide-menu-home" rel="nofollow">Tất cả Nhiếp ảnh, dựng phim</a>
                                    </li>
                                    <li>
                                        <a href="/tag/dung-phim?boxcode=slide-menu-home">Dựng phim</a>
                                    </li>
                                    <li>
                                        <a href="/tag/chup-anh?boxcode=slide-menu-home">Chụp ảnh</a>
                                    </li>
                                    <li>
                                        <a href="/tag/ky-xao?boxcode=slide-menu-home">Kỹ xảo</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-9 banner-right-new">
                <img src="https://i.ytimg.com/vi/8xLEec2NiV8/maxresdefault.jpg" alt="">
            </div>
        </div>
    </div>
    <div id="content" class="container">
        <div class="content-section">
            <h2 class="section-heading">Programming</h2>
            <div class="section-courses">
                <div class="wrap-course-item col-12 col-md-4 col-lg-3">
                    <div class="course-item">
                        <div class="course-thumb">
                            <a href="#" title="Object Oriendted Programming in C++">
                                <img src="<?php echo URL_ROOT ?>/public/assets/img/courses/oop-course-thumb.jpeg" alt="Object Oriendted Programming in C++" class="course-img">
                            </a>
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <div class="course-type">Online</div>
                            </div>
                            <h3 class="course-title">
                                <a href="#" title="Object Oriented-Programming in C++">
                                    Object Oriented-Programming in C++
                                </a>
                            </h3>
                            <!-- Course's author infor -->
                            <a href="#" title="ThuHuynh07" class="course-author">
                                ThuHuynh07
                            </a>
                            <p class="course-des">
                                Object-Oriented-Programming (Object-Oriented-Programming) is an object-based programming method to find out the nature of the problem. This course helps programmers learn programming techniques that all logic and practical requirements are built around objects. Understanding how OOP works in C++ will simplify maintenance and scalability in software development.
                            </p>
                            <div class="course-footer">
                                <div class="course-footer-left">
                                    <span class="free-text" data-selected="true" data-label-id="0" data-metatip="true">Free</span>
                                </div>
                                <div class="course-footer-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-course-item col-12 col-md-4 col-lg-3">
                    <div class="course-item">
                        <div class="course-thumb">
                            <a href="#" title="Object Oriendted Programming in C++">
                                <img src="<?php echo URL_ROOT ?>/public/assets/img/courses/oop-course-thumb.jpeg" alt="Object Oriendted Programming in C++" class="course-img">
                            </a>
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <div class="course-type">Online</div>
                            </div>
                            <h3 class="course-title">
                                <a href="#" title="Object Oriented-Programming in C++">
                                    Object Oriented-Programming in C++
                                </a>
                            </h3>
                            <!-- Course's author infor -->
                            <a href="#" title="ThuHuynh07" class="course-author">
                                ThuHuynh07
                            </a>
                            <p class="course-des">
                                Object-Oriented-Programming (Object-Oriented-Programming) is an object-based programming method to find out the nature of the problem. This course helps programmers learn programming techniques that all logic and practical requirements are built around objects. Understanding how OOP works in C++ will simplify maintenance and scalability in software development.
                            </p>
                            <div class="course-footer">
                                <div class="course-footer-left">
                                    <span class="free-text" data-selected="true" data-label-id="0" data-metatip="true">Free</span>
                                </div>
                                <div class="course-footer-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-course-item col-12 col-md-4 col-lg-3">
                    <div class="course-item">
                        <div class="course-thumb">
                            <a href="#" title="Computer Software">
                                <img src="<?php echo URL_ROOT ?>/public/assets/img/courses/computer-software-thumb.png" alt="Computer Software" class="course-img">
                            </a>
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <div class="course-type">Online</div>
                            </div>
                            <h3 class="course-title">
                                <a href="#" title="Computer Software">
                                    Computer Software
                                </a>
                            </h3>
                            <!-- Course's author infor -->
                            <a href="#" title="ThuHuynh07" class="course-author">
                                ThuHuynh07
                            </a>
                            <p class="course-des">
                                General Informatics is the basic subject of Informatics. This course focuses on providing basic and comprehensive knowledge of computer softwares and basic computer skills so that users can grasp the basic but highly applicable knowledge in daily computer use.
                            </p>
                            <div class="course-footer">
                                <div class="course-footer-left">
                                    <span class="free-text" data-selected="true" data-label-id="0" data-metatip="true">Free</span>
                                </div>
                                <div class="course-footer-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-course-item col-12 col-md-4 col-lg-3">
                    <div class="course-item">
                        <div class="course-thumb">
                            <a href="#" title="Object Oriendted Programming in C++">
                                <img src="<?php echo URL_ROOT ?>/public/assets/img/courses/oop-course-thumb.jpeg" alt="Object Oriendted Programming in C++" class="course-img">
                            </a>
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <div class="course-type">Online</div>
                            </div>
                            <h3 class="course-title">
                                <a href="#" title="Object Oriented-Programming in C++">
                                    Object Oriented-Programming in C++
                                </a>
                            </h3>
                            <!-- Course's author infor -->
                            <a href="#" title="ThuHuynh07" class="course-author">
                                ThuHuynh07
                            </a>
                            <p class="course-des">
                                Object-Oriented-Programming (Object-Oriented-Programming) is an object-based programming method to find out the nature of the problem. This course helps programmers learn programming techniques that all logic and practical requirements are built around objects. Understanding how OOP works in C++ will simplify maintenance and scalability in software development.
                            </p>
                            <div class="course-footer">
                                <div class="course-footer-left">
                                    <span class="free-text" data-selected="true" data-label-id="0" data-metatip="true">Free</span>
                                </div>
                                <div class="course-footer-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-section">
            <h2 class="section-heading">Programming</h2>
            <div class="section-courses">
                <div class="wrap-course-item col-12 col-md-4 col-lg-3">
                    <div class="course-item">
                        <div class="course-thumb">
                            <a href="#" title="Object Oriendted Programming in C++">
                                <img src="<?php echo URL_ROOT ?>/public/assets/img/courses/oop-course-thumb.jpeg" alt="Object Oriendted Programming in C++" class="course-img">
                            </a>
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <div class="course-type">Online</div>
                            </div>
                            <h3 class="course-title">
                                <a href="#" title="Object Oriented-Programming in C++">
                                    Object Oriented-Programming in C++
                                </a>
                            </h3>
                            <!-- Course's author infor -->
                            <a href="#" title="ThuHuynh07" class="course-author">
                                ThuHuynh07
                            </a>
                            <p class="course-des">
                                Object-Oriented-Programming (Object-Oriented-Programming) is an object-based programming method to find out the nature of the problem. This course helps programmers learn programming techniques that all logic and practical requirements are built around objects. Understanding how OOP works in C++ will simplify maintenance and scalability in software development.
                            </p>
                            <div class="course-footer">
                                <div class="course-footer-left">
                                    <span class="free-text" data-selected="true" data-label-id="0" data-metatip="true">Free</span>
                                </div>
                                <div class="course-footer-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-course-item col-12 col-md-4 col-lg-3">
                    <div class="course-item">
                        <div class="course-thumb">
                            <a href="#" title="Object Oriendted Programming in C++">
                                <img src="<?php echo URL_ROOT ?>/public/assets/img/courses/oop-course-thumb.jpeg" alt="Object Oriendted Programming in C++" class="course-img">
                            </a>
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <div class="course-type">Online</div>
                            </div>
                            <h3 class="course-title">
                                <a href="#" title="Object Oriented-Programming in C++">
                                    Object Oriented-Programming in C++
                                </a>
                            </h3>
                            <!-- Course's author infor -->
                            <a href="#" title="ThuHuynh07" class="course-author">
                                ThuHuynh07
                            </a>
                            <p class="course-des">
                                Object-Oriented-Programming (Object-Oriented-Programming) is an object-based programming method to find out the nature of the problem. This course helps programmers learn programming techniques that all logic and practical requirements are built around objects. Understanding how OOP works in C++ will simplify maintenance and scalability in software development.
                            </p>
                            <div class="course-footer">
                                <div class="course-footer-left">
                                    <span class="free-text" data-selected="true" data-label-id="0" data-metatip="true">Free</span>
                                </div>
                                <div class="course-footer-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-course-item col-12 col-md-4 col-lg-3">
                    <div class="course-item">
                        <div class="course-thumb">
                            <a href="#" title="Computer Software">
                                <img src="<?php echo URL_ROOT ?>/public/assets/img/courses/oop-course-thumb.jpeg" alt="Computer Software" class="course-img">
                            </a>
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <div class="course-type">Online</div>
                            </div>
                            <h3 class="course-title">
                                <a href="#" title="Computer Software">
                                    Computer Software
                                </a>
                            </h3>
                            <!-- Course's author infor -->
                            <a href="#" title="ThuHuynh07" class="course-author">
                                ThuHuynh07
                            </a>
                            <p class="course-des">
                                General Informatics is the basic subject of Informatics. This course focuses on providing basic and comprehensive knowledge of computer softwares and basic computer skills so that users can grasp the basic but highly applicable knowledge in daily computer use.
                            </p>
                            <div class="course-footer">
                                <div class="course-footer-left">
                                    <span class="free-text" data-selected="true" data-label-id="0" data-metatip="true">Free</span>
                                </div>
                                <div class="course-footer-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-course-item col-12 col-md-4 col-lg-3">
                    <div class="course-item">
                        <div class="course-thumb">
                            <a href="#" title="Object Oriendted Programming in C++">
                                <img src="<?php echo URL_ROOT ?>/public/assets/img/courses/oop-course-thumb.jpeg" alt="Object Oriendted Programming in C++" class="course-img">
                            </a>
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <div class="course-type">Online</div>
                            </div>
                            <h3 class="course-title">
                                <a href="#" title="Object Oriented-Programming in C++">
                                    Object Oriented-Programming in C++
                                </a>
                            </h3>
                            <!-- Course's author infor -->
                            <a href="#" title="ThuHuynh07" class="course-author">
                                ThuHuynh07
                            </a>
                            <p class="course-des">
                                Object-Oriented-Programming (Object-Oriented-Programming) is an object-based programming method to find out the nature of the problem. This course helps programmers learn programming techniques that all logic and practical requirements are built around objects. Understanding how OOP works in C++ will simplify maintenance and scalability in software development.
                            </p>
                            <div class="course-footer">
                                <div class="course-footer-left">
                                    <span class="free-text" data-selected="true" data-label-id="0" data-metatip="true">Free</span>
                                </div>
                                <div class="course-footer-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-section">
            <h2 class="section-heading">Programming</h2>
            <div class="section-courses">
                <div class="wrap-course-item col-12 col-md-4 col-lg-3">
                    <div class="course-item">
                        <div class="course-thumb">
                            <a href="#" title="Object Oriendted Programming in C++">
                                <img src="<?php echo URL_ROOT ?>/public/assets/img/courses/oop-course-thumb.jpeg" alt="Object Oriendted Programming in C++" class="course-img">
                            </a>
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <div class="course-type">Online</div>
                            </div>
                            <h3 class="course-title">
                                <a href="#" title="Object Oriented-Programming in C++">
                                    Object Oriented-Programming in C++
                                </a>
                            </h3>
                            <!-- Course's author infor -->
                            <a href="#" title="ThuHuynh07" class="course-author">
                                ThuHuynh07
                            </a>
                            <p class="course-des">
                                Object-Oriented-Programming (Object-Oriented-Programming) is an object-based programming method to find out the nature of the problem. This course helps programmers learn programming techniques that all logic and practical requirements are built around objects. Understanding how OOP works in C++ will simplify maintenance and scalability in software development.
                            </p>
                            <div class="course-footer">
                                <div class="course-footer-left">
                                    <span class="free-text" data-selected="true" data-label-id="0" data-metatip="true">Free</span>
                                </div>
                                <div class="course-footer-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-course-item col-12 col-md-4 col-lg-3">
                    <div class="course-item">
                        <div class="course-thumb">
                            <a href="#" title="Object Oriendted Programming in C++">
                                <img src="<?php echo URL_ROOT ?>/public/assets/img/courses/oop-course-thumb.jpeg" alt="Object Oriendted Programming in C++" class="course-img">
                            </a>
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <div class="course-type">Online</div>
                            </div>
                            <h3 class="course-title">
                                <a href="#" title="Object Oriented-Programming in C++">
                                    Object Oriented-Programming in C++
                                </a>
                            </h3>
                            <!-- Course's author infor -->
                            <a href="#" title="ThuHuynh07" class="course-author">
                                ThuHuynh07
                            </a>
                            <p class="course-des">
                                Object-Oriented-Programming (Object-Oriented-Programming) is an object-based programming method to find out the nature of the problem. This course helps programmers learn programming techniques that all logic and practical requirements are built around objects. Understanding how OOP works in C++ will simplify maintenance and scalability in software development.
                            </p>
                            <div class="course-footer">
                                <div class="course-footer-left">
                                    <span class="free-text" data-selected="true" data-label-id="0" data-metatip="true">Free</span>
                                </div>
                                <div class="course-footer-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-course-item col-12 col-md-4 col-lg-3">
                    <div class="course-item">
                        <div class="course-thumb">
                            <a href="#" title="Computer Software">
                                <img src="<?php echo URL_ROOT ?>/public/assets/img/courses/computer-software-thumb.png" alt="Computer Software" class="course-img">
                            </a>
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <div class="course-type">Online</div>
                            </div>
                            <h3 class="course-title">
                                <a href="#" title="Computer Software">
                                    Computer Software
                                </a>
                            </h3>
                            <!-- Course's author infor -->
                            <a href="#" title="ThuHuynh07" class="course-author">
                                ThuHuynh07
                            </a>
                            <p class="course-des">
                                General Informatics is the basic subject of Informatics. This course focuses on providing basic and comprehensive knowledge of computer softwares and basic computer skills so that users can grasp the basic but highly applicable knowledge in daily computer use.
                            </p>
                            <div class="course-footer">
                                <div class="course-footer-left">
                                    <span class="free-text" data-selected="true" data-label-id="0" data-metatip="true">Free</span>
                                </div>
                                <div class="course-footer-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-course-item col-12 col-md-4 col-lg-3">
                    <div class="course-item">
                        <div class="course-thumb">
                            <a href="#" title="Object Oriendted Programming in C++">
                                <img src="<?php echo URL_ROOT ?>/public/assets/img/courses/oop-course-thumb.jpeg" alt="Object Oriendted Programming in C++" class="course-img">
                            </a>
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <ul>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <div class="course-type">Online</div>
                            </div>
                            <h3 class="course-title">
                                <a href="#" title="Object Oriented-Programming in C++">
                                    Object Oriented-Programming in C++
                                </a>
                            </h3>
                            <!-- Course's author infor -->
                            <a href="#" title="ThuHuynh07" class="course-author">
                                ThuHuynh07
                            </a>
                            <p class="course-des">
                                Object-Oriented-Programming (Object-Oriented-Programming) is an object-based programming method to find out the nature of the problem. This course helps programmers learn programming techniques that all logic and practical requirements are built around objects. Understanding how OOP works in C++ will simplify maintenance and scalability in software development.
                            </p>
                            <div class="course-footer">
                                <div class="course-footer-left">
                                    <span class="free-text" data-selected="true" data-label-id="0" data-metatip="true">Free</span>
                                </div>
                                <div class="course-footer-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer"></div>

    <?php $this->View("footer"); ?>
    <style>
        /* Code CSS ở đây */
        :root {
            --main-blue: #00A19D;
            --main-yellow: #FFB344;
            --main-red: #E05D5D;
            --white: #fff;
            --title: #3b3c54;
            --text: #42526e;
            --menu-transition: 0.7s;
            --box-shadow-color: rgba(188, 188, 188, .5);
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        html,
        body {
            scroll-behavior: smooth;
            font-size: 15px;
            background-color: #f1f1f1;
        }

        /* HEADER */

        #header {
            background: url('<?php echo URL_ROOT ?>/public/assets/img/courses/header-img.png');
            padding: 30px 0;
        }

        .container h2 {
            font-size: 28px;
            color: var(--white);
        }

        .container #search {
            margin: 0;
            padding-top: 30px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        #search .input-group {
            display: inline-block;
            width: 100%;
        }

        .input-group #form-search {
            position: relative;
            display: inline-block;
            width: 380px;
            background: var(--white);
            border-radius: 3px;
        }

        #form-search .form-control {
            height: 45px;
            padding-right: 45px;
            padding-left: 10px;
            background: none;
            position: relative;
        }

        #form-search span {
            position: absolute;
            right: 0;
            top: 0;
            font-size: 24px;
            width: 45px;
            height: 45px;
            padding-top: 5px;
            padding-left: 10px;
        }

        #form-search span:hover {
            border-radius: 3px;
            background-color: var(--main-yellow);
            cursor: pointer;
            color: var(--white);
        }

        /* Slider */
        .slider {
            padding-top: 32px;
            padding-bottom: 32px;
        }

        .menu {
            min-width: 235px;
            line-height: 15px;
            position: relative;
            padding: 16px 8px;
            margin: 0;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgb(0 0 0 / 8%), 0 4px 12px rgb(0 0 0 / 8%);
        }
        .menu li{
            list-style: none;
        }
        .menu>li {
            padding: 8px;
            display: block;
            text-align: left;
        }

        .menu>li>.megadrop {
            opacity: 0;
            visibility: hidden;
            position: absolute;
            list-style: none;
            top: 0px;
            left: 102%;
            width: 100%;
            min-height: 100%;
            text-align: left;
            margin-top: 30px;
            padding: 16px 8px;
            z-index: 99;
            overflow: hidden;
            background: #fff;
            transition: 0.3s ease-in-out;
        }
        .menu>li:hover {
            background-color: #ebebeb;
        }
        .menu>li:hover .megadrop {
            opacity: 1;
            visibility: visible;
            margin-top: 0px;
        }

        .menu i {
            margin-right: 12px;
            width: 30px;
            font-size: 20px;
            text-align: center;
            color: var(--main-yellow);
        }

        .menu a {
            text-decoration: none;
            color: #333;
            display: block;

        }
        .megadrop a{
            padding: 8px 12px;
        }
        .megadrop li:hover {
            background-color: #ebebeb;
        }
        .megadrop ul{
            padding: 0;
            
        }
        .banner-right-new img {
            width: 100%;
            height: 495px;
            border-radius: 5px;
        }

        /* CONTENT */

        #content .content-section {

            width: 1472px;
            width: 100%;
            max-width: 100%;

        }

        .content-section .section-heading {
            font-size: 28px;
            color: var(--title);
            padding-bottom: 18px;
        }

        .content-section .section-courses {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-left: -30px;
        }

        .section-courses .wrap-course-item {
            align-content: space-around;
            min-width: 330px;
            margin-bottom: 30px;
        }

        .wrap-course-item .course-item {
            display: flex;
            flex-direction: column;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            margin-left: 30px;
            box-shadow: 0 5px 15px 0 rgb(133 142 176 / 15%);
        }

        .wrap-course-item .course-thumb {
            overflow: hidden;
        }

        .wrap-course-item .course-content {
            padding: 15px;
            flex: 1;
        }

        .course-thumb .course-img {
            width: 100%;
            height: 220px;
            flex-shrink: 0;
        }

        .course-content .course-rating {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            padding-right: 15px;
            padding-bottom: 7px;
        }

        .course-content .course-rating ul {
            padding: 0;
            margin-bottom: 0;
        }

        .course-content .course-rating li {
            list-style: none;
            display: inline-block;
            color: #fec000;
            font-size: 15px;
        }

        .course-content .course-type {
            padding: 4px 6px 3px;
            font-size: 10px;
            text-align: center;
            display: inline-block;
            background-color: #fec000;
            color: #fff;
            border-radius: 13px;
        }

        .course-content .course-title a {
            display: -webkit-box;
            font-size: 20px;
            line-height: 22px;
            margin-bottom: 10px;
            text-decoration: none;
            color: var(--title);
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            height: 46px;
        }



        .course-content .course-title a:hover {
            color: #2c31cf;
        }

        .course-content .course-author {
            font-size: 13px;
            margin-bottom: 15px;
            display: block;
            text-decoration: none;
            color: var(--text);
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .course-content .course-author:hover {
            text-decoration: underline;
        }

        .course-content .course-des {
            margin-bottom: 20px;
            color: var(--text);
            line-height: 1.5;
            white-space: normal;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            word-break: break-word;
            min-height: 44px;
            max-height: 3em;
        }

        .course-content .course-footer {
            display: flex;
            width: calc(100% - 30px);
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
        }

        .course-footer .course-footer-left {
            font-weight: 600;
        }
    </style>
</body>

</html>