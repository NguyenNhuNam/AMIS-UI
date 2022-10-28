<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head(); ?>
</head>
<body>
    <div id="main">
        <div class="header-wrapper">
            <div class="header-container">
                <div id="header">
                    <div class="header-logo">
                        <img src="<?php echo THEME_IMG_PATH; ?>/logo.svg" alt="MISA AMIS - Nền tảng quản trị doanh nghiệp hợp nhất">
                    </div>
                    <div id="top-mobile-toggle">
                        <a href="#">
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                    <ul id="nav">
                        <li>
                            <a href="">
                                Sản phẩm
                                <i class="fas fa-angle-down"></i>
                            </a>
                        </li>
                        <li><a href="">Gói giải pháp</a></li>
                        <li>
                            <a href="">
                                Tại sao chọn
                                <i class="fas fa-angle-down"></i>
                            </a>
                            <ul class="subnav">
                                <li><a href="">Câu chuyện khách hàng</a></li>
                                <li><a href="">Báo chí nói gì về AMIS</a></li>
                                <li><a href="">Về MISA</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                Kiến thức
                                <i class="fas fa-angle-down"></i>
                            </a>
                            <ul class="subnav">
                                <li><a href="">Tài chính - kế toán</a></li>
                                <li><a href="">Marketing - bán hàng</a></li>
                                <li><a href="">Quản trị nguồn nhân lực</a></li>
                                <li><a href="">Chuyển đổi số</a></li>
                                <li style="padding: 10px 20px 10px 20px; border-top: solid 1px #EEE;"><a href="">Tài liệu - eBooks</a></li>
                                <li style="padding: 10px 20px 10px 20px; border-top: solid 1px #EEE;"><a href="">Trắc nghiệm chuyên môn</a></li>
                                <li><a href="">Lịch hội thảo</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                Hỗ trợ
                                <i class="fas fa-angle-down"></i>
                            </a>
                            <ul class="subnav" style="width:185px">
                                <li><a href="">Hướng dẫn sử dụng</a></li>
                                <li><a href="">Lịch đào tạo miễn phí</a></li>
                                <li><a href="">Học Online</a></li>
                                <li><a href="">Download</a></li>
                                <li><a href="">Cộng đồng hỗ trợ MISA</a></li>
                                <li><a href="">Chat hỗ trợ trực tuyến</a></li>
                                <li><a href="">Tổng đài hỗ trợ</a></li>
                            </ul>
                        </li>
                        <li><a href="">Hotline Mua Hàng</a></li>
                        <li><a href="">Dùng thử</a></li>
                        <li><a href="">Đăng nhập</a></li>
                    </ul>
                </div>
            </div>
            <div class="menu-panel">
                <div class="content-menu">
                    <div class="content-col">
                        <div class="submenu">
                            <a href="" class="menu-item-group">
                                <div class="item-group-name">
                                    Tài chính - kế toán
                                </div>
                                <div class="item-group-desc">
                                    Bộ giải pháp quản lý hoạt động tài chính - kế toán của doanh nghiệp.
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="content-col">
                        <div class="submenu">
                            <a href="" class="menu-item-group">
                                <div class="item-group-name">
                                    Marketing - bán hàng
                                </div>
                                <div class="item-group-desc">
                                    Bộ giải pháp CRM quản lý marketing, bán hàng, chăm sóc khách hàng.
                                </div>
                            </a>
                        </div>
                        <!-- <div class="content-item">
                            <a href="">
                                <div class="product-icon amis-aimarketing"></div>
                                <div class="product-detail">
                                    <div class="menu-name">AMIS aiMarketing</div>
                                    <div class="menu-desc">Automation Marketing</div>
                                </div>
                            </a>
                        </div>
                        <div class="content-item">
                            <a href="">
                                <div class="product-icon amis-ban-hang"></div>
                                <div class="product-detail">
                                    <div class="menu-name">AMIS CRM</div>
                                    <div class="menu-desc">Quản lý bán hàng</div>
                                </div>
                            </a>
                        </div>
                        <div class="content-item">
                            <a href="">
                                <div class="product-icon amis-khuyen-mai"></div>
                                <div class="product-detail">
                                    <div class="menu-name">AMIS Khuyến mại</div>
                                    <div class="menu-desc">Quản lý khuyến mại</div>
                                </div>
                            </a>
                        </div>
                        <div class="content-item">
                            <a href="">
                                <div class="product-icon eshop"></div>
                                <div class="product-detail">
                                    <div class="menu-name">MISA eShop</div>
                                    <div class="menu-desc">Quản lý bán lẻ</div>
                                </div>
                            </a>
                        </div>
                        <div class="content-item">
                            <a href="">
                                <div class="product-icon cukcuk"></div>
                                <div class="product-detail">
                                    <div class="menu-name">MISA CukCuk</div>
                                    <div class="menu-desc">Quản lý nhà hàng, quán cafe</div>
                                </div>
                            </a>
                        </div> -->
                    </div>
                    <div class="content-col">
                        <div class="submenu">
                            <a href="" class="menu-item-group">
                                <div class="item-group-name">
                                    Quản trị nguồn nhân lực
                                </div>
                                <div class="item-group-desc">
                                    Bộ giải pháp phục vụ công tác quản trị nguồn nhân lực.
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="content-col">
                        <div class="submenu">
                            <a href="" class="menu-item-group">
                                <div class="item-group-name">
                                    Quản lý - điều hàng
                                </div>
                                <div class="item-group-desc">
                                    Bộ công cụ quản trị công việc, giao tiếp nội bộ, điều hành văn phòng số.
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="market">
                    <a href="">Chợ ứng dụng >></a>
                </div>
            </div>
        </div>
        <div id="mobile-nav">
            <div class="mobile-container">
                <div class="menu-socials-wrap">
                    <div class="menu-socials"></div>
                    <div class="mobile-close">
                        <a href="#">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="mobile-content">
                    <div class="menu-menu-container">
                        <ul id="menu-menu" class="mobile-main-menu">
                            <li>
                                <a href="#" class="td-link-element-after">
                                    Sản phẩm
                                    <i class="fas fa-chevron-right rotate"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Tài chính - kế toán
                                            <i class="fas fa-chevron-right rotate"></i>
                                        </a>
                                        <ul class="sub-menu" id="accounting">
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Marketing - bán hàng
                                            <i class="fas fa-chevron-right rotate"></i>
                                        </a>
                                        <ul class="sub-menu" id="marketing">
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Quản trị nguồn nhân lực
                                            <i class="fas fa-chevron-right rotate"></i>
                                        </a>
                                        <ul class="sub-menu" id="empManage">
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Quản lý - điều hành
                                            <i class="fas fa-chevron-right rotate"></i>
                                        </a>
                                        <ul class="sub-menu" id="management">
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Chợ ứng dụng
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="td-link-element-after">
                                    Gói giải pháp
                                </a>
                            </li>
                            <li>
                                <a href="#" class="td-link-element-after">
                                    Tại sao chọn
                                    <i class="fas fa-chevron-right rotate"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Câu chuyện khách hàng
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Báo chí nói về AMIS
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Về MISA
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="td-link-element-after">
                                    Kiến thức
                                    <i class="fas fa-chevron-right rotate"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Tài chính - kế toán
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Marketing - bán hàng
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Quản lý nguồn nhân lực
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Quản lý - điều hành
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Hợp đồng số
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Chuyển đổi số
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Tài liệu - eBooks
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Trắc nghiệm chuyên môn
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Lịch hội thảo
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="td-link-element-after">
                                    Hỗ trợ
                                    <i class="fas fa-chevron-right rotate"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Hướng dẫn sử dụng
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Lịch đào tạo miễn phí
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Học online
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Download
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Chat hỗ trợ trực tuyến
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="td-link-element-after">
                                            Tổng đài hỗ trợ
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="td-link-element-after">
                                    Hotline mua hàng
                                </a>
                            </li>
                            <li>
                                <a href="#" class="td-link-element-after">
                                    Dùng thử
                                </a>
                            </li>
                            <li>
                                <a href="#" class="td-link-element-after">
                                    Đăng nhập
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>