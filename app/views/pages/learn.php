<!DOCTYPE html>
<html lang="en">
<?php $this->View("head", "học"); ?>
<link href="<?php echo URL_ROOT?>/public/assets/css/override-container.css" rel="stylesheet" >

<body>
    <?php $this->View("navigation"); ?>

    <!-- Code HTML ở đây  -->
    <div>
        <div id="left-learning">
            <div class="breadcrumb">
                <a class="breadcrumb-item" href="/"><i class="fas fa-home"></i></a>
                <a class="breadcrumb-item" href="/learn">Khóa học</a>
                <a class="breadcrumb-item" href="/learn/lap-trinh-7">Lập trình</a>
                <span class="breadcrumb-item active">HTML, CSS từ con gà đến thần thánh</span>
            </div>
            <div class="video-learning">
                <iframe width="1730" height="712" src="https://www.youtube.com/embed/16y1AkoZkmQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="info-learning">
                <div class="container">
                    <div class="info-learning-content">
                        <div class="tabs-bar">
                            <div class="tab-item selected-tab">Trao đổi</div>
                            <div class="tab-item">Bài giảng</div>
                            <div class="tab-item">File đính kèm</div>
                        </div>
                        <div class="info-learning-comment">
                            <div id="user-comment-block">
                                <div class="comment-block">
                                    <div class="comment-avt">
                                        <img class="CommentBox_myAvatar__3Mi09" src="https://scontent.fsgn5-11.fna.fbcdn.net/v/t1.6435-9/123519836_2709233069342309_404418965952590855_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=RgcZJjsDznYAX8z8I7d&_nc_ht=scontent.fsgn5-11.fna&oh=7adb61cf34a3a80f2a8d55187cbd42b7&oe=619C89A0" alt="Thang Nguyen">
                                    </div>
                                    <div class="comment-content align-items-end">
                                        <div class="comment-input" contenteditable="true" placeholder="Viết gì gì đó đi..." tabindex="0" dir="ltr" spellcheck="false" autocomplete="off" autocorrect="off" autocapitalize="off"></div>
                                        <button class="btn btn-comment">
                                            Bình luận
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="person-comment-block">
                                <ul>
                                    <li>
                                        <div class="comment-block">
                                            <div class="comment-avt">
                                                <img class="CommentBox_myAvatar__3Mi09" src="https://danviet.mediacdn.vn/upload/2-2019/images/2019-04-02/Vi-sao-Kha-Banh-tro-thanh-hien-tuong-dinh-dam-tren-mang-xa-hoi-khabanh-1554192528-width660height597.jpg" alt="Banh Ngo">
                                            </div>
                                            <div class="comment-content">
                                                <div class="comment-user-name">

                                                    <a href="">Khá Bảnh</a>
                                                </div>
                                                <div class="comment-body">Thắng đẹp trai</div>
                                                <div class="comment-footer">
                                                    <span class="comment-vote">
                                                        <span class="upvote">
                                                            <a href="">
                                                                <i class="fas fa-arrow-up font-size-h5 fa-fw"></i>
                                                            </a>
                                                            <span>1025</span>
                                                        </span>
                                                        <span class="downvote">
                                                            <a href="">
                                                                <i class="fas fa-arrow-down font-size-h5 fa-fw"></i>
                                                            </a>
                                                            <span>0</span>
                                                        </span>
                                                    </span>
                                                    <span class="comment-repl" href="">Trả lời</span>
                                                    <span class="comment-datetime">Hôm qua</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="comment-block comment-block-repl">
                                            <div class="comment-avt">
                                                <img class="CommentBox_myAvatar__3Mi09" src="https://scontent.fsgn5-1.fna.fbcdn.net/v/t1.6435-9/240679543_1519728035044432_6519949385141440995_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=bCZ_HXjQx7gAX-fynHN&_nc_ht=scontent.fsgn5-1.fna&oh=cd292c66ff07f89ff018b441aacb5351&oe=619A91F5" alt="Son Chu">
                                            </div>
                                            <div class="comment-content">
                                                <div class="comment-user-name">

                                                    <a href="">Xuân Sơn</a>
                                                </div>
                                                <div class="comment-body">+1 Confirm</div>
                                                <div class="comment-footer">
                                                    <span class="comment-vote">
                                                        <span class="upvote">
                                                            <a href="">
                                                                <i class="fas fa-arrow-up font-size-h5 fa-fw"></i>
                                                            </a>
                                                            <span>1025</span>
                                                        </span>
                                                        <span class="downvote">
                                                            <a href="">
                                                                <i class="fas fa-arrow-down font-size-h5 fa-fw"></i>
                                                            </a>
                                                            <span>0</span>
                                                        </span>
                                                    </span>
                                                    <span class="comment-repl" href="">Trả lời</span>
                                                    <span class="comment-datetime">Hôm qua</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-block comment-block-repl">
                                            <div class="comment-avt">
                                                <img class="CommentBox_myAvatar__3Mi09" src="https://scontent.fsgn5-8.fna.fbcdn.net/v/t1.6435-9/148452596_1416726315326312_7062280632353748357_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=K1sAQvVWdpAAX9jhm6C&_nc_ht=scontent.fsgn5-8.fna&oh=d48b92962f4e460b701bed3866625fdd&oe=619DAAFC" alt="Thu Huynh">
                                            </div>
                                            <div class="comment-content">
                                                <div class="comment-user-name">

                                                    <a href="">Minh Thư Huỳnh</a>
                                                </div>
                                                <div class="comment-body">+1 Confirm</div>
                                                <div class="comment-footer">
                                                    <span class="comment-vote">
                                                        <span class="upvote">
                                                            <a href="">
                                                                <i class="fas fa-arrow-up font-size-h5 fa-fw"></i>
                                                            </a>
                                                            <span>1025</span>
                                                        </span>
                                                        <span class="downvote">
                                                            <a href="">
                                                                <i class="fas fa-arrow-down font-size-h5 fa-fw"></i>
                                                            </a>
                                                            <span>0</span>
                                                        </span>
                                                    </span>
                                                    <span class="comment-repl" href="#">Trả lời</span>
                                                    <span class="comment-datetime">Hôm qua</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-block">
                                            <div class="comment-avt">
                                                <img class="CommentBox_myAvatar__3Mi09" src="https://scontent.fsgn5-11.fna.fbcdn.net/v/t1.6435-9/123519836_2709233069342309_404418965952590855_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=RgcZJjsDznYAX8z8I7d&_nc_ht=scontent.fsgn5-11.fna&oh=7adb61cf34a3a80f2a8d55187cbd42b7&oe=619C89A0" alt="Thang Nguyen">
                                            </div>
                                            <div class="comment-content">
                                                <div class="comment-user-name">

                                                    <a href="">Nguyễn Thắng</a>
                                                </div>
                                                <div class="comment-body">Bài học rất hay!!</div>
                                                <div class="comment-footer">
                                                    <span class="comment-vote">
                                                        <span class="upvote">
                                                            <a href="">
                                                                <i class="fas fa-arrow-up font-size-h5 fa-fw"></i>
                                                            </a>
                                                            <span>1025</span>
                                                        </span>
                                                        <span class="downvote">
                                                            <a href="">
                                                                <i class="fas fa-arrow-down font-size-h5 fa-fw"></i>
                                                            </a>
                                                            <span>0</span>
                                                        </span>
                                                    </span>
                                                    <span class="comment-repl">Trả lời</span>
                                                    <span class="comment-datetime">Hôm qua</span>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                </ul>


                            </div>

                        </div>
                    </div>


                </div>
            </div>

        </div>
        <div id="right-learning">
            <header class="playlist-header" style="--process:67%">
                <div class="background-process">
                </div>
                <div class="playlist-header-content">
                    <h1 class="playlist-title">HTML, CSS từ con gà đến thần thánh</h1>
                    <div class="playlist-info">
                        <p class="playlist-description">
                            Hoàn thành
                            <strong>76</strong>/<strong>113</strong>
                            bài học (<strong>67%</strong>)
                        </p>
                    </div>
                </div>
            </header>
            <div class="playlist-wrapper">
                <div class="playplist-wrapper-header">
                    <h2 class="wrapper-header-title">Phần 1: Giới thiệu</h2>
                    <p class="wrapper-header-detail">2/2 | 05:44</p>
                </div>
                <div class="playlist-wrapper-item learnt-item">
                    <div class="wrapper-icon-status">
                        <i class="fas fa-check"></i>
                        <i class="fas fa-lock"></i>

                    </div>
                    <div class="wrapper-item-info">
                        <p class="wrapper-item-title">1. Làm được gì sau khóa học?</p>
                        <div class="wrapper-item-detail">
                            <i class="far fa-play-circle"></i>
                            <span>03:15</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-wrapper-item learnt-item">
                    <div class="wrapper-icon-status">
                        <i class="fas fa-check"></i>
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="wrapper-item-info">
                        <p class="wrapper-item-title">2. Bạn có phù hợp để học HTML, CSS?</p>
                        <div class="wrapper-item-detail">
                            <i class="far fa-play-circle"></i>
                            <span>03:15</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-wrapper-item learnt-item">
                    <div class="wrapper-icon-status">
                        <i class="fas fa-check"></i>
                        <i class="fas fa-lock"></i>

                    </div>
                    <div class="wrapper-item-info">
                        <p class="wrapper-item-title">3. HTML, CSS là cái gì?</p>
                        <div class="wrapper-item-detail">
                            <i class="far fa-play-circle"></i>
                            <span>03:15</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="playlist-wrapper">
                <div class="playplist-wrapper-header">
                    <h2 class="wrapper-header-title">Phần 2: Bí quyết kinh doanh</h2>
                    <p class="wrapper-header-detail">2/2 | 05:44</p>
                </div>
                <div class="playlist-wrapper-item learnt-item">
                    <div class="wrapper-icon-status">
                        <i class="fas fa-check"></i>
                        <i class="fas fa-lock"></i>

                    </div>
                    <div class="wrapper-item-info">
                        <p class="wrapper-item-title">4. Bán kem đánh răng hiệu quả</p>
                        <div class="wrapper-item-detail">
                            <i class="far fa-play-circle"></i>
                            <span>03:15</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-wrapper-item learning-item">
                    <div class="wrapper-icon-status">
                        <i class="fas fa-check"></i>
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="wrapper-item-info">
                        <p class="wrapper-item-title">5. Nhạc Rasputin cực căng</p>
                        <div class="wrapper-item-detail">
                            <i class="far fa-play-circle"></i>
                            <span>03:15</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-wrapper-item block-item">
                    <div class="wrapper-icon-status">
                        <i class="fas fa-check"></i>
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="wrapper-item-info">
                        <p class="wrapper-item-title">6. Bao nhiêu lâu nữa thì bán được 1 tỷ gói mè?</p>
                        <div class="wrapper-item-detail">
                            <i class="far fa-play-circle"></i>
                            <span>03:15</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-wrapper-item block-item">
                    <div class="wrapper-icon-status">
                        <i class="fas fa-check"></i>
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="wrapper-item-info">
                        <p class="wrapper-item-title">7. Bao nhiêu lâu nữa thì bán được 1 tỷ gói mè?</p>
                        <div class="wrapper-item-detail">
                            <i class="far fa-play-circle"></i>
                            <span>03:15</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-wrapper-item block-item">
                    <div class="wrapper-icon-status">
                        <i class="fas fa-check"></i>
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="wrapper-item-info">
                        <p class="wrapper-item-title">8. Bao nhiêu lâu nữa thì bán được 1 tỷ gói mè?</p>
                        <div class="wrapper-item-detail">
                            <i class="far fa-play-circle"></i>
                            <span>03:15</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-wrapper-item block-item">
                    <div class="wrapper-icon-status">
                        <i class="fas fa-check"></i>
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="wrapper-item-info">
                        <p class="wrapper-item-title">9. Bao nhiêu lâu nữa thì bán được 1 tỷ gói mè?</p>
                        <div class="wrapper-item-detail">
                            <i class="far fa-play-circle"></i>
                            <span>03:15</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="playlist-wrapper">
                <div class="playplist-wrapper-header">
                    <h2 class="wrapper-header-title">Phần 3: Câu hỏi cần được trả lời</h2>
                    <p class="wrapper-header-detail">2/2 | 05:44</p>
                </div>
                <div class="playlist-wrapper-item block-item">
                    <div class="wrapper-icon-status">
                        <i class="fas fa-check"></i>
                        <i class="fas fa-lock"></i>

                    </div>
                    <div class="wrapper-item-info">
                        <p class="wrapper-item-title">10. Bao nhiêu lâu nữa thì bán được 1 tỷ gói mè?</p>
                        <div class="wrapper-item-detail">
                            <i class="far fa-play-circle"></i>
                            <span>03:15</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-wrapper-item block-item">
                    <div class="wrapper-icon-status">
                        <i class="fas fa-check"></i>
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="wrapper-item-info">
                        <p class="wrapper-item-title">11. Bao nhiêu lâu nữa thì bán được 1 tỷ gói mè?</p>
                        <div class="wrapper-item-detail">
                            <i class="far fa-play-circle"></i>
                            <span>03:15</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-wrapper-item block-item">
                    <div class="wrapper-icon-status">
                        <i class="fas fa-check"></i>
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="wrapper-item-info">
                        <p class="wrapper-item-title">12. Bao nhiêu lâu nữa thì bán được 1 tỷ gói mè?</p>
                        <div class="wrapper-item-detail">
                            <i class="far fa-play-circle"></i>
                            <span>03:15</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-wrapper-item block-item">
                    <div class="wrapper-icon-status">
                        <i class="fas fa-check"></i>
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="wrapper-item-info">
                        <p class="wrapper-item-title">13. Bao nhiêu lâu nữa thì bán được 1 tỷ gói mè?</p>
                        <div class="wrapper-item-detail">
                            <i class="far fa-play-circle"></i>
                            <span>03:15</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-wrapper-item block-item">
                    <div class="wrapper-icon-status">
                        <i class="fas fa-check"></i>
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="wrapper-item-info">
                        <p class="wrapper-item-title">14. Bao nhiêu lâu nữa thì bán được 1 tỷ gói mè?</p>
                        <div class="wrapper-item-detail">
                            <i class="far fa-play-circle"></i>
                            <span>03:15</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-wrapper-item block-item">
                    <div class="wrapper-icon-status">
                        <i class="fas fa-check"></i>
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="wrapper-item-info">
                        <p class="wrapper-item-title">15. Bao nhiêu lâu nữa thì bán được 1 tỷ gói mè?</p>
                        <div class="wrapper-item-detail">
                            <i class="far fa-play-circle"></i>
                            <span>03:15</span>
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
        #left-learning {
            width: 75%;
            background-color: #f5f6f7;
            overflow: hidden;
            overflow-y: scroll;
            overflow-x: hidden;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            margin-top: 62px;


        }

        #left-learning::-webkit-scrollbar {
            display: none;
        }


        #left-learning iframe {
            width: 100%;
            height: 80vh;

        }

        .breadcrumb {
            padding: 8px;
            margin: 12px 8px;
            background-color: #fff;
            box-shadow: 0 4px 20px rgb(0 0 0 /8%);
        }



        .info-learning-content {
            min-height: 150vh;
            height: auto;
            background-color: #fff;

        }

        .tabs-bar {
            display: flex;
            box-shadow: inset 0 -1px 0 0 #bfafaf;

        }

        .tab-item {
            padding: 0 12px;
            color: #666;
            font-size: 16px;
            padding: 16px;
        }

        .selected-tab {
            color: #000;
            font-weight: 600;
            border-bottom: 2px solid;
        }

        .info-learning-comment {
            padding: 40px 0;
        }

        .info-learning-comment ul {
            padding: 0;
            margin: 0;
        }

        .comment-block {
            padding: 0 30px 30px 30px;
            display: flex;
        }

        .comment-avt {
            flex-shrink: 0;
        }

        .comment-avt img {
            border-radius: 50%;
            height: 64px;
            width: 64px;
        }

        .comment-content {
            padding: 12px;
            background-color: #ebebeb;
            min-height: 120px;
            height: auto;
            display: flex;
            flex-direction: column;
            border-radius: 0.5rem;
            flex-grow: 1;
            margin-left: 16px;
        }

        .comment-user-name {
            font-size: 18px;
            font-weight: 600;
        }

        .comment-body,
        .comment-input {
            width: 100%;
            height: auto;
            background-color: transparent;
            display: block;
            overflow: auto;
            flex-grow: 1;
            word-break: break-word;
        }

        .comment-input::before {
            content: attr(placeholder);
        }

        [contenteditable] {
            outline: 0px solid transparent;
        }

        .comment-box .comment-input::before {
            content: none;
        }

        .btn-comment {
            background-color: var(--main-red);
            color: #fff;
            padding: 4px 16px;
            float: right;
        }

        .btn-comment:hover {
            background-color: var(--main-yellow);
            color: #fff;
        }

        .btn-comment-remove {
            background-color: transparent;
            color: #000;

        }

        .btn-comment-remove:hover {
            background-color: #b4b4b4;
        }

        .btn-comment+.btn-comment {
            margin-right: 16px;
        }

        .comment-block a {
            text-decoration: none;
        }

        .upvote {
            padding-right: 8px;
            border-right: 1px solid #bbb;
        }

        .upvote a:hover {
            color: var(--main-yellow)
        }

        .downvote {
            padding-left: 8px;
        }

        .downvote a:hover {
            color: var(--main-red)
        }


        .comment-repl {
            margin-left: 16px;
            color: #0d6efd;
            cursor: pointer;
        }

        .comment-datetime {
            margin-left: 16px;
            color: var(--main-gray-color);
        }

        .comment-block-repl {
            margin-left: calc(10%);
            border-left: 1px solid var(--main-yellow);
        }

        li {
            list-style: none;
        }

        #right-learning {
            width: 25%;
            position: fixed;
            margin-top: 62px;
            top: 0;
            right: 0;
            bottom: 0;
            overflow-y: scroll;
            overflow-x: hidden;
        }

        #right-learning::-webkit-scrollbar {
            display: none;
        }

        .playlist-header {
            height: 64px;
            padding: 8px 12px 8px 12px;
            position: relative;
        }

        .playlist-header-content {
            position: relative;
        }

        .background-process {
            top: 0;
            left: 0;
            height: 100%;
            position: absolute;
            width: var(--process);
            background-color: rgba(255, 179, 68, 0.4);
        }

        .playlist-title {
            font-size: 18px;
            margin-bottom: 4px;
            opacity: .8;

        }

        .playlist-description {
            opacity: .8;
            font-size: 16px;
            margin: 0;
        }

        .playlist-title,
        .playlist-description {
            text-overflow: ellipsis;
            white-space: nowrap;
            -moz-white-space: nowrap;
            overflow: hidden;
        }


        .playplist-wrapper-header {
            background-color: #f3f4f5;
            padding: 8px 12px 8px 12px;
            border-bottom: 1px solid #ababab;


        }

        .wrapper-header-title {
            margin-bottom: 4px;
            font-size: 20px;

        }

        .wrapper-header-detail {
            font-size: 14px;
            opacity: 0.6;
            margin: 0;
        }

        .playlist-wrapper-item {
            display: flex;
            padding: 8px 0;
            transition: all ease-in 0.1s;
        }

        .learnt-item:hover {
            background-color: #ebebeb;
            cursor: pointer;
        }

        .block-item {
            background-color: #ebebeb;
        }

        .learning-item {
            background-color: rgba(0, 161, 157, .4);
        }

        .wrapper-icon-status {
            width: 40px;
            margin: auto 0;
            font-size: 20px;
            text-align: center;
            flex-shrink: 0;
        }

        .playlist-wrapper-item .fa-check {
            display: none;
        }

        .playlist-wrapper-item .fa-lock {
            display: none;
        }

        .playlist-wrapper .learnt-item .fa-check {
            color: lightgreen;
            display: block;
        }

        .playlist-wrapper .block-item .fa-lock {
            display: block;
            color: #666;
        }

        .wrapper-item-info {
            padding-right: 24px;
            overflow: hidden;
            flex: 1 1;
        }

        .wrapper-item-title {
            margin-bottom: 4px;
            text-overflow: ellipsis;
            white-space: nowrap;
            -moz-white-space: nowrap;
            overflow: hidden;
        }

        .wrapper-item-detail {
            font-size: 14px;
            opacity: .8;
        }
    </style>
    <script>
        function FormatInputBox(element) {
            element.addEventListener("paste", function(e) {
                e.preventDefault();
                var text = (e.originalEvent || e).clipboardData.getData('text/plain');
                document.execCommand("insertHTML", false, text);
            });
            element.oninput = (e) => {
                if (e.target.innerText != "") {
                    element.parentNode.classList.add('comment-box')
                } else {
                    element.parentNode.classList.remove('comment-box')
                }
            }
        }
        comment_box = document.getElementsByClassName('comment-input')[0];
        FormatInputBox(comment_box)
    </script>
    <script>
        var rep = document.getElementsByClassName('comment-repl')
        for (t of rep) {
            t.addEventListener('click', function AddComment(e) {
                e = e.target;
                while (!e.className.includes('comment-block')) {
                    e = e.parentNode
                }
                var comment_box_lasted;
                if (e.nextElementSibling == null || !e.nextElementSibling.innerHTML.includes(`<div class="comment-input" contenteditable="true"`)) {
                    var comment_HTML = `<div class="comment-block comment-block-repl">
                                <div class="comment-avt">
                                    <img class="CommentBox_myAvatar__3Mi09" src="https://scontent.fsgn5-11.fna.fbcdn.net/v/t1.6435-9/123519836_2709233069342309_404418965952590855_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=RgcZJjsDznYAX8z8I7d&_nc_ht=scontent.fsgn5-11.fna&oh=7adb61cf34a3a80f2a8d55187cbd42b7&oe=619C89A0" alt="Thang Nguyen">
                                </div>
                                <div class="comment-content align-items-end">
                                    <div class="comment-input" contenteditable="true" placeholder="Viết gì gì đó đi..." tabindex="0" dir="ltr" spellcheck="false" autocomplete="off" autocorrect="off" autocapitalize="off"></div>
                                    <div>
                                        <button class="btn btn-comment">
                                            Bình luận
                                        </button>
                                        <button class="btn btn-comment btn-comment-remove">
                                            Hủy
                                        </button>
                                    </div>
                                </div>
                            </div>`;
                    e.insertAdjacentHTML('afterend', comment_HTML)
                    comment_box_lasted = e.nextElementSibling.getElementsByClassName('comment-input')[0];
                    btn_rm_cmt = e.nextElementSibling.getElementsByClassName('btn-comment-remove')[0];
                    btn_rm_cmt.addEventListener('click', () => {
                        e.nextElementSibling.remove()
                    })
                    FormatInputBox(comment_box_lasted)
                } else {
                    comment_box_lasted = e.nextElementSibling.getElementsByClassName('comment-input')[0];
                }
                comment_box_lasted.focus();

            })
        }
    </script>
</body>

</html>