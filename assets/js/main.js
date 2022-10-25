$(document).ready(function(){
    loadMenu();
    loadTabMenu();
    loadProduct();
    loadCustomer();
    loadSlider();
    initEvent();
  });

var listMenuItem = {
    accounting: [
        {className: "a-mis-ke-toan", name: "AMIS Kế toán", desc: "Quản lý kế toán"},
        {className: "sme", name: "MISA SME 2022", desc: "Quản lý kế toán (offline)"},
        {className: "meinvoice", name: "MISA meInvoice", desc: "Hóa đơn điện tử"},
        {className: "esign", name: "MISA Esign", desc: "Dịch vụ chữ ký số"},
        {className: "mtax", name: "MISA mTax", desc: "Dịch vụ thuế điện tử"},
        {className: "bankhub", name: "MISA Bankhub", desc: "Kết nối ngân hàng điện tử"},
        {className: "asp", name: "MISA ASP", desc: "Nền tảng kế toán dịch vụ"},
        {className: "lending", name: "MISA Lending", desc: "Kết nối vay vốn doanh nghiệp"},
    ],
    marketing: [
        {className: "amis-aimarketing", name: "AMIS aiMarketing", desc: "Automation Marketing"},
        {className: "amis-ban-hang", name: "AMIS CRM", desc: "Quản lý bán hàng"},
        {className: "amis-khuyen-mai", name: "AMIS Khuyến mại", desc: "Quản lý khuyến mại"},
        {className: "eshop", name: "MISA eShop", desc: "Quản lý bán lẻ"},
        {className: "cukcuk", name: "MISA CukCuk", desc: "Quản lý nhà hàng, quán cafe"},
    ],
    empManage: [
        {className: "amis-tuyen-dung", name: "AMIS Tuyển dụng", desc: "Quản lý tuyển dụng"},
        {className: "amis-thong-tin-nhan-su", name: "AMIS Thông tin nhân sự", desc: "Hệ thống thông tin nhân sự"},
        {className: "amis-cham-cong", name: "AMIS Chấm công", desc: "Quản lý chấm công"},
        {className: "amis-tien-luong", name: "AMIS Tiền lương", desc: "Quản lý tiền lương"},
        {className: "amis-bao-hiem-xa-hoi", name: "AMIS BHXH", desc: "Bảo hiểm xã hội điện tử"},
        {className: "amis-thue-tncn", name: "AMIS Thuế TNCN", desc: "Phần mềm kê khai Thuế TNCN"},
    ],
    management: [
        {className: "amis-cong-viec", name: "AMIS Công việc", desc: "Quản lý công việc"},
        {className: "amis-quy-trinh", name: "AMIS Quy trình", desc: "Quản lý quy trình"},
        {className: "amis-wesign", name: "AMIS WeSign", desc: "Ký tài liệu số"},
        {className: "amis-ghi-chep", name: "AMIS Ghi chép", desc: "Ghi chép & lưu trữ tài liệu"},
        {className: "amis-tai-san", name: "AMIS Tài sản", desc: "Quản lý tài sản"},
        {className: "amis-mang-xa-hoi", name: "AMIS Mạng xã hội", desc: "Mạng xã hội doanh nghiệp"},
        {className: "amis-phong-hop", name: "AMIS Phòng họp", desc: "Quản lý phòng họp"},
    ]    
}

var listProducts = {
    execManagement: {
        groupName: "Quản lý điều hành",
        groupDesc: "Đơn giản hóa quy trình hoạt động, giúp việc điều hành doanh nghiệp trở nên dễ dàng hơn bao giờ hết",
        items: [
            {nameItem: "AMIS Công việc", descItem: "Quản lý công việc", pathImage: "./assets/img/ic-operating-1.svg"},
            {nameItem: "AMIS Mạng xã hội", descItem: "Mạng xã hội doanh nghiệp", pathImage: "./assets/img/ic-operating-2.svg"},
            {nameItem: "AMIS Phòng họp", descItem: "Quản lý đặt phòng họp", pathImage: "./assets/img/ic-operating-3.svg"},
            {nameItem: "AMIS Ghi chép", descItem: "Ghi chép & và lưu trữ tài liệu", pathImage: "./assets/img/ic-operating-4.svg"}
        ]
    },
    hrManagement: {
        groupName: "Quản trị nhân sự",
        groupDesc: "Tự động hóa mọi quy trình tác nghiệp giữa Nhân sự - Nhân viên - Lãnh đạo, kết nối mạng xã hội, sàn tuyển dụng, BHXH, Cơ quan thuế",
        items: [
            {nameItem: "AMIS Tuyển dụng", descItem: "Quản lý tuyển dụng", pathImage: "./assets/img/ic-personnel-1.svg"},
            {nameItem: "AMIS Mạng xã hội", descItem: "Mạng xã hội doanh nghiệp", pathImage: "./assets/img/ic-personnel-2.svg"},
            {nameItem: "AMIS Thông tin nhân sự", descItem: "Hệ thống thông tin nhân sự", pathImage: "./assets/img/amis-qhld.svg"},
            {nameItem: "AMIS BHXH", descItem: "Bảo hiểm xã hội điện tử", pathImage: "./assets/img/ic-personnel-3.svg"}
        ]
    },
    finanManagement: {
        groupName: "Kế toán - Tài chính",
        groupDesc: "Đáp ứng đầy đủ nghiệp vụ quản trị tài chính, kế toán cho doanh nghiệp thuộc mọi quy mô, lĩnh vực",
        items: [
            {nameItem: "AMIS Kế toán", descItem: "Quản trị kế toán", pathImage: "./assets/img/ic-accouting-financial-1.svg"},
            {nameItem: "AMIS Bankhub", descItem: "Kết nối ngân hàng điện tử", pathImage: "./assets/img/ic-accouting-financial-2.svg"},
            {nameItem: "MISA meInvoice", descItem: "Hóa đơn điện tử", pathImage: "./assets/img/ic-accouting-financial-3.svg"},
            {nameItem: "AMIS mTax", descItem: "Dịch vụ thuế điện tử", pathImage: "./assets/img/ic-accouting-financial-4.svg"}
        ]
    },
    marketingManagement: {
        groupName: "Marketing - Bán hàng",
        groupDesc: "Thu hút tiềm năng, thúc đẩy tăng trưởng doanh số, gia tăng sự hài lòng của khách hàng",
        items: [
            {nameItem: "AMIS Bán hàng", descItem: "Quản lý bán hàng", pathImage: "./assets/img/ic-sale-marketing-1.svg"},
            {nameItem: "AMIS aiMarketing", descItem: "Marketing tự động", pathImage: "./assets/img/ic-sale-marketing-2.svg"},
        ]
    },
    paymentManagement: {
        groupName: "Giải pháp thanh toán",
        groupDesc: "Nhận thanh toán trực tuyến & tại cửa hàng. Tích hợp với hệ thống phần mềm quản lý giúp xây dựng hệ sinh thái dữ liệu hoàn chỉnh",
        items: [
            {nameItem: "JetPay Payment", descItem: "Cổng thanh toán", pathImage: "./assets/img/ic-jetpay-payment.svg"},
            {nameItem: "AMIS aiMarketing", descItem: "Marketing tự động", pathImage: "./assets/img/ic-jetpay-billing.svg"},
        ]
    }
}

var listCustomer = {
    manufactruring: {
        groupName: "Sản xuất",
        items: [
            "./assets/img/img-manufacturing-logo-3.jpg", "./assets/img/img-manufacturing-logo-4.jpg",
            "./assets/img/img-manufacturing-logo-5.jpg", "./assets/img/img-manufacturing-logo-6.jpg",
            "./assets/img/img-manufacturing-logo-7.jpg", "./assets/img/img-manufacturing-logo-1.jpg",
            "./assets/img/img-manufacturing-logo-2.jpg"
        ]
    },
    service: {
        groupName: "Dịch vụ",
        items: [
            "./assets/img/img-service-logo-1.jpg", "./assets/img/img-service-logo-2.jpg",
            "./assets/img/img-service-logo-3.jpg", "./assets/img/img-service-logo-4.jpg",
            "./assets/img/img-service-logo-5.jpg", "./assets/img/img-service-logo-6.jpg"
        ]
    },
    commerce: {
        groupName: "Thương mại",
        items: [
            "./assets/img/img-commercial-logo-1.jpg", "./assets/img/img-commercial-logo-2.jpg",
            "./assets/img/img-commercial-logo-3.jpg", "./assets/img/img-commercial-logo-4.jpg",
            "./assets/img/img-commercial-logo-5.jpg", "./assets/img/img-commercial-logo-6.jpg"
        ]
    },
    contruction: {
        groupName: "Xây lắp",
        items: [
            "./assets/img/img-construction-logo-1.jpg", "./assets/img/img-construction-logo-2.jpg",
            "./assets/img/img-construction-logo-3.jpg", "./assets/img/img-construction-logo-4.jpg",
            "./assets/img/img-construction-logo-5.jpg", "./assets/img/img-construction-logo-6.jpg"
        ]
    }
}

function loadMenu() {
    let index = 0
    for (const menu in listMenuItem) {
        listMenuItem[menu].forEach( item => {
            let menuItem = $(`<div class="content-item">
                                    <a href="">
                                        <div class="product-icon ${item.className}"></div>
                                        <div class="product-detail">
                                            <div class="menu-name">${item.name}</div>
                                            <div class="menu-desc">${item.desc}</div>
                                        </div>
                                    </a>
                                </div>`)
            $('.menu-panel .content-menu').children().eq(index).append(menuItem)
        })
        index++
    }
}

function loadProduct() {
    let index = 1
    for (const product in listProducts) {
        let productRow = $(`<div class="pi-row">
                                <div class="pi-information">
                                    <div class="pi-information-content">
                                        <div class="pi-name">${listProducts[product].groupName}</div>
                                        <div class="pi-description">${listProducts[product].groupDesc}</div>
                                    </div>
                                    <div class="pi-button">
                                        <a href="#">Tìm hiểu thêm</a>
                                    </div>
                                </div>
                                <div class="pi-list"><ul></ul></div>
                            </div>`)
        $('.pi-content').append(productRow)
        listProducts[product].items.forEach(item => {
            let liItem = $(`<li>
                                <a href="">
                                    <div class="pil-item">
                                        <div class="pil-image">
                                            <img src="${item.pathImage}" alt="">
                                        </div>
                                        <div class="pil-text">
                                            <div class="pil-name">${item.nameItem}</div>
                                            <div class="pil-des">${item.descItem}</div>
                                        </div>
                                    </div>
                                </a>
                            </li>`)
            $(`.pi-row:nth-child(${index}) ul`).append(liItem)                                    
        })
        if (index < 5) $(`.pi-row:nth-child(${index}) .pi-list`).append(`<div class="view-more">
                                                                            <a href="">
                                                                                Xem thêm
                                                                                <img src="./assets/img/ic_arrow-down.svg" alt="" width="12" height="9">
                                                                            </a>
                                                                        </div>`) 
        index++                                                                        
    }                
}

function loadTabMenu() {
    for (const menu in listMenuItem) {
        listMenuItem[menu].forEach(item => {
            let liItem = $(`<li>
                            <a href="#" class="td-link-element-after">
                                ${item.name}
                                <br>
                                <span>${item.desc}</span>
                            </a>
                        </li>`)
            $( `#${menu}`).append(liItem)           
        })
    }
}

function loadCustomer() {
    let index = 1
    for (const customer in listCustomer) {
        let cGroup = $(`<div class="c-group">
                            <div class="cg-title">${listCustomer[customer].groupName}</div>
                            <div class="cg-content owl-carousel owl-theme">
                            </div>
                        </div>`)
        $('.c-content').append(cGroup)
        listCustomer[customer].items.forEach(item => {
            let cgItem = $(`<div class="cg-item">
                                <img src="${item}" alt="" width="88" height="59">
                            </div>`)
            $(`.c-group:nth-child(${index}) .cg-content`).append(cgItem)
        })
        index++
    }
}

function initEvent() {
    $('.header-wrapper').mouseover(function (e) { 
        let feature = "Sản phẩm", why = "Tại sao chọn", news = "Kiến thức", support = "Hỗ trợ"
        if (e.target.innerText.toLowerCase() === feature.toLowerCase()) $(".menu-panel").show()
        else if (e.target.innerText.toLowerCase() === why.toLowerCase()
                || e.target.innerText.toLowerCase() === news.toLowerCase()
                || e.target.innerText.toLowerCase() === support.toLowerCase()) $(".menu-panel").hide()
    }).mouseleave(function () { 
        $(".menu-panel").hide()
    });
    
    $('.play-video-item').click( function () { 
        let link = $(this).attr('src')
        $('.popup-video iframe').attr('src', link)
        $('.popup-video').show()
    });

    $('.pv-close').click(() => {
        $('.popup-video').hide()
        $('.popup-video iframe').attr('src', function (index, oldSrc) {
            return oldSrc.replace('autoplay=1', 'autoplay=0')
        })
    })

    $('.website-member .btn').click((e) => {
        $('.dropdown-menu').toggle()
        e.stopPropagation();
    })
    $('.dropdown-menu').click((e) => {
        e.stopPropagation()
    })

    $(document).click((e) => {
        $('.dropdown-menu').hide()          
    })

    $('#menu-menu i').click(function (e) { 
        $(this).toggleClass('rotate-down')
        $(this).parent().parent().children('.sub-menu').animate({
            height: "toggle",
            opacity: "toggle"
          });
    });

    $('#top-mobile-toggle i').click(() => {
        $('#mobile-nav .mobile-container').show()
        $('#mobile-nav').show().animate({width: "100%"}, 500)
        $("body").addClass("modal-open")
    })

    $('.mobile-close i').click(() => {
        $('#mobile-nav .mobile-container').hide()
        $("body").removeClass("modal-open")
        $('#mobile-nav').animate({width: "0%"}, 500)
        setTimeout(() => {
            $('#mobile-nav').hide()
        }, 450);
    })
}

function loadSlider() {
    $(".banner-item .owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        nav: false,
        dots: true,
        autoplay: true,
        smartSpeed: 3000,
        autoplayTimeout: 9000,
        autoplayHoverPause: true,
        navigation: true,
        stagePadding: 0,
    });

    $('.customer .owl-carousel').owlCarousel({
        autoplay: true,
        scrollPerPage: true,
        loop: true,
        autoplayTimeout: 6000,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 3,
            },
            768: {
                items: 5,
            },
            980: {
                items: 6,
            }
        }
    })

    $('.prize .owl-carousel').owlCarousel({
        autoplay: true,
        scrollPerPage: true,
        loop: true,
        nav: true,
        dots: false,
        navText: ["<img src='./assets/img/ic-prev.svg' width='40' height='40'>", "<img src='./assets/img/ic-next.svg' width='40' height='40'>", ],
        autoplayTimeout: 6000,
        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: true,
            },
            768: {
                items: 3,
                nav: false,
                dots: true,
            },
            980: {
                items: 4,
                nav: true,
                dots: false,
            }
        }
    });

    $('.comment-item .owl-carousel').owlCarousel({
        items: 3,
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        navText: ["<img src='./assets/img/ic-prev.svg' width='40' height='40'>", "<img src='./assets/img/ic-next.svg' width='40' height='40'>", ],
        autoplay: true,
        smartSpeed: 2000,
        scrollPerPage: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        navigation: true,
        autoHeight: true,
        responsive: {
            981: {
                items: 3,
                nav: true,
                dots: false,
            },
            481: {
                items: 2,
                nav: false,
                dots: true,
            },
            0: {
                items: 1,
                nav: false,
                dots: true,
            },
        },
    });
    $('.news-item .owl-carousel').owlCarousel({
        items: 3,
        loop: true,
        margin: 0,
        nav: false,
        dots: true,
        autoplay: true,
        smartSpeed: 2000,
        scrollPerPage: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        navigation: true,
        autoHeight: true,
        responsive: {
            981: {
                items: 3,
            },
            481: {
                items: 2,
            },
            0: {
                items: 1,
            },
        },
    });
}

