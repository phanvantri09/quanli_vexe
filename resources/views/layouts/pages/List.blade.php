@extends('layouts.master')
@section('content')
<div class="breadcrumb container    ">
        <a href="" class="active1">Vé xe khách</a>
        <span>></span>
        <a href="">Xe đi Sài Gòn từ Bình Thuận</a>
    </div>
    <ul class="search_ticket container">
        <li>
            <img class="location" src="./images/location.png" alt="" srcset="">
            <span>Bình thuận</span>
        </li>
        <li>
            <img src="./images/2-way.png" alt="" srcset="">
        </li>
        <li>
            <img class="location" src="./images/location.png" alt="" srcset="">
            <span>Bình thuận</span>
        </li>
        <li>
            <img src="./images/line.png" alt="" srcset="">
        </li>
        <li>
            <!-- <img src="./images/calendar.png" alt="" srcset="">
            <span>17-09-2021</span> -->
            <input type="date" value="2022-01-01">
        </li>
        <li>
            <button>TÌM VÉ</button>
        </li>
    </ul>
    <p style="padding: 3rem 0rem;font-weight: 700;" class="container">
        OCT cam kết hoàn tiền 200% nếu không giữ vé
    </p>
    <div class="container">
        <div class="index">
            <div class="index__left">
                <div class="index__left--top">
                    <span>Bộ lọc</span>
                    <span onclick="removeFilter()">Xóa lọc</span>
                </div>
                <div class="index__left--filter">
                    <p class="index__left--title">Giờ đi</p>
                    <ul class="first">
                        <li>
                            <p>Sáng sớm</p>
                            <p>(00:00 - 06:00)</p>
                        </li>
                        <li>
                            <p>Sáng sớm</p>
                            <p>(00:00 - 06:00)</p>
                        </li>
                        <li>
                            <p>Sáng sớm</p>
                            <p>(00:00 - 06:00)</p>
                        </li>
                        <li>
                            <p>Sáng sớm</p>
                            <p>(00:00 - 06:00)</p>
                        </li>
                    </ul>
                    <p class="index__left--title">Giá vé</p>
                    <div class="index__left--filter--range">
                        <p>500.000đ</p>
                        <input type="range" min="0" max="2000000" value="500000">
                        <div>
                            <span>0đ</span>
                            <span>2.000.000đ</span>
                        </div>
                    </div>

                    <p class="index__left--title">Số ghế còn trống</p>
                    <ul class="amount">
                        <li class="button">-</li>
                        <li class="input"><input type="text" value="1"></li>
                        <li class="button">+</li>
                    </ul>
                    <p class="index__left--title">Nhà xe</p>
                    <div class="index__left--filter--search">
                        <input type="text" placeholder="Tìm trong danh sách">
                    </div>
                    <ul class="list">
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">Minh nghĩa</label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">Đan anh</label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">Tuấn tú</label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">Kì duyên</label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">Đan anh</label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">Đan anh</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="index__right">
                <div class="index__right--top">
                    <span>
                        Sắp xếp theo
                    </span>
                    <ul>
                        <li class="active">
                            Giờ đi sớm nhất
                        </li>
                        <li>Giờ đi muộn nhất</li>
                        <li>Giá tăng dần</li>
                        <li>Giá giảm dần</li>
                    </ul>
                </div>
                <div class="index__right--content">
                    <div class="not__found" style="display: none;">
                        Không tìm thấy dữ liệu.
                    </div>
                    <div class="index__right--item">
                        <div>
                            <a href="">
                                <img src="./images/product_01.png" alt="" srcset="">
                            </a>
                            <div>
                                <p>Tuấn hiệp</p>
                                <p>Giường nằm 41 chỗ</p>
                                <div>
                                    <img src="./images/location_02.png" alt="">
                                    <div>
                                        <p>
                                            <span>09:30</span>
                                            <span>•</span>
                                            <span>Bến xe tuy phong</span>
                                        </p>
                                        <p>5h55</p>
                                        <p>
                                            <span>09:30</span>
                                            <span>•</span>
                                            <span>Bến xe tuy phong</span>
                                        </p>
                                    </div>
                                </div>
                                <ul>
                                    <li>4 người đặt trong 6 tiếng gần đây</li>
                                    <li>
                                        <span>Thông tin chi tiết</span>
                                        <img src="./images/down_01.png" alt="">
                                    </li>
                                    <li>
                                        <p>Còn 20 chỗ trống</p>
                                        <button class="button__search__delivery active">Chọn chuyến</button>
                                    </li>
                                </ul>
                                <span class="price">180.000đ</span>
                            </div>
                        </div>
                        <div class="index__right--child hidden">
                            <ul class="index__right--child--status" data-index="0">
                                <li class="active">
                                    <span>1</span>
                                    <span>Chọn chỗ ngồi</span>
                                </li>
                                <li>
                                    <span>2</span>
                                    <span>Điểm đón</span>
                                </li>
                                <li>
                                    <span>3</span>
                                    <span>Nhập thông tin</span>
                                </li>
                                <li class="button__search__delivery__">
                                    <i class="bx bx-x"></i>
                                </li>
                            </ul>
                            <p class="text">OCT cam kết giữ đúng chỗ ngồi của bạn</p>
                            <!--Step 1 -->
                            <div class="step1 step">
                                <ul>
                                    <li>
                                        <div class="index__right--child--item box empty">
                                            <span></span>
                                        </div>
                                        <span>Còn trống</span>
                                    </li>
                                    <li>
                                        <div class="index__right--child--item box">
                                            <span></span>
                                            <span class="close bx bx-x"></span>
                                        </div>
                                        <span>Đã bán</span>
                                    </li>
                                    <li>
                                        <div class="index__right--child--item box selected">
                                            <span></span>
                                        </div>
                                        <span>Đang chọn</span>
                                    </li>
                                </ul>
                                <div>
                                    <div>
                                        <p>Tầng trên</p>
                                        <ul>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <p>Tầng dưới</p>
                                        <ul>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Step 1 -->

                            <!--Step 2 -->
                            <div class="step2 step hidden">
                                <p class="hidden" style="font-weight: 700;margin: 2rem 0rem;">Nhập điểm đón vào bên
                                    dưới:
                                </p>
                                <textarea class="destination">Bến xe Bắc Ruộng</textarea>
                            </div>
                            <!--Step 2 -->

                            <!--Step 3 -->
                            <form action="#" class="step step3 hidden form-contact form__if js_form">
                                <div class="form-field">
                                    <div class="field">
                                        <div class="field__label">
                                            <label for="">Họ và tên</label>
                                        </div>
                                        <div class="field__input">
                                            <input type="text" value="Huỳnh Văn Thuận" placeholder="Nhập họ tên...">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field__label">
                                            <label for="">Số điện thoại</label>
                                        </div>
                                        <div class="field__input">
                                            <input class="js_phone" type="text" value="0824644573"
                                                placeholder="Nhập số điện thoại...">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field__label">
                                            <label for="">Email để nhận thông tin vé</label>
                                        </div>
                                        <div class="field__input">
                                            <input class="js_email" type="text" value="huynhvanthuan.140921@gmail.com"
                                                placeholder="Nhập số điện email...">
                                        </div>
                                    </div>
                                    <div class="field optional">
                                        <div class="field__label">
                                            <label for="">Ghi chú (Nếu có)</label>
                                        </div>
                                        <div class="field__input">
                                            <textarea type="text"
                                                placeholder="Chúng tôi sẽ cố gắng hết sức để đáp ưng nhu cầu của bạn"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <p class="" style="margin: 0.2rem;text-align: center;">
                                    <span class="text-red">(*)</span>
                                    <span>Bằng việc nhấn nút Tiếp Tục, bạn đồng ý với</span>
                                </p>
                                <p class="" style="margin-bottom: 0.5rem;text-align: center;">
                                    <span class="text-red">Chính sách bảo mật thông tin</span>
                                    <span class="text-black">và</span>
                                    <span>Quy chế</span>
                                </p>
                            </form>
                            <!--Step 3 -->

                            <ul class="footer" style="margin-right: -1rem;">
                                <li>
                                    <button class="button_previous hidden">Quay lại</button>
                                </li>
                                <li>Tổng: </li>
                                <li>340.000đ</li>
                                <li><button class="button_next">Tiếp tục</button></li>
                                <li style="display: none;"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="index__right--item">
                        <div>
                            <a href="">
                                <img src="./images/product_01.png" alt="" srcset="">
                            </a>
                            <div>
                                <p>Tuấn hiệp</p>
                                <p>Giường nằm 41 chỗ</p>
                                <div>
                                    <img src="./images/location_02.png" alt="">
                                    <div>
                                        <p>
                                            <span>09:30</span>
                                            <span>•</span>
                                            <span>Bến xe tuy phong</span>
                                        </p>
                                        <p>5h55</p>
                                        <p>
                                            <span>09:30</span>
                                            <span>•</span>
                                            <span>Bến xe tuy phong</span>
                                        </p>
                                    </div>
                                </div>
                                <ul>
                                    <li>4 người đặt trong 6 tiếng gần đây</li>
                                    <li>
                                        <span>Thông tin chi tiết</span>
                                        <img src="./images/down_01.png" alt="">
                                    </li>
                                    <li>
                                        <p>Còn 20 chỗ trống</p>
                                        <button class="button__search__delivery active">Chọn chuyến</button>
                                    </li>
                                </ul>
                                <span class="price">180.000đ</span>
                            </div>
                        </div>
                        <div class="index__right--child hidden">
                            <ul class="index__right--child--status" data-index="0">
                                <li class="active">
                                    <span>1</span>
                                    <span>Chọn chỗ ngồi</span>
                                </li>
                                <li>
                                    <span>2</span>
                                    <span>Điểm đón</span>
                                </li>
                                <li>
                                    <span>3</span>
                                    <span>Nhập thông tin</span>
                                </li>
                                <li class="button__search__delivery__">
                                    <i class="bx bx-x"></i>
                                </li>
                            </ul>
                            <p class="text">OCT cam kết giữ đúng chỗ ngồi của bạn</p>
                            <!--Step 1 -->
                            <div class="step1 step">
                                <ul>
                                    <li>
                                        <div class="index__right--child--item box empty">
                                            <span></span>
                                        </div>
                                        <span>Còn trống</span>
                                    </li>
                                    <li>
                                        <div class="index__right--child--item box">
                                            <span></span>
                                            <span class="close bx bx-x"></span>
                                        </div>
                                        <span>Đã bán</span>
                                    </li>
                                    <li>
                                        <div class="index__right--child--item box selected">
                                            <span></span>
                                        </div>
                                        <span>Đang chọn</span>
                                    </li>
                                </ul>
                                <div>
                                    <div>
                                        <p>Tầng trên</p>
                                        <ul>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <p>Tầng dưới</p>
                                        <ul>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Step 1 -->

                            <!--Step 2 -->
                            <div class="step2 step hidden">
                                <p class="hidden" style="font-weight: 700;margin: 2rem 0rem;">Nhập điểm đón vào bên
                                    dưới:
                                </p>
                                <textarea class="destination">Bến xe Bắc Ruộng</textarea>
                            </div>
                            <!--Step 2 -->

                            <!--Step 3 -->
                            <form action="#" class="step step3 hidden form-contact form__if js_form">
                                <div class="form-field">
                                    <div class="field">
                                        <div class="field__label">
                                            <label for="">Họ và tên</label>
                                        </div>
                                        <div class="field__input">
                                            <input type="text" value="Huỳnh Văn Thuận" placeholder="Nhập họ tên...">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field__label">
                                            <label for="">Số điện thoại</label>
                                        </div>
                                        <div class="field__input">
                                            <input class="js_phone" type="text" value="0824644573"
                                                placeholder="Nhập số điện thoại...">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field__label">
                                            <label for="">Email để nhận thông tin vé</label>
                                        </div>
                                        <div class="field__input">
                                            <input class="js_email" type="text" value="huynhvanthuan.140921@gmail.com"
                                                placeholder="Nhập số điện email...">
                                        </div>
                                    </div>
                                    <div class="field optional">
                                        <div class="field__label">
                                            <label for="">Ghi chú (Nếu có)</label>
                                        </div>
                                        <div class="field__input">
                                            <textarea type="text"
                                                placeholder="Chúng tôi sẽ cố gắng hết sức để đáp ưng nhu cầu của bạn"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <p class="" style="margin: 0.2rem;text-align: center;">
                                    <span class="text-red">(*)</span>
                                    <span>Bằng việc nhấn nút Tiếp Tục, bạn đồng ý với</span>
                                </p>
                                <p class="" style="margin-bottom: 0.5rem;text-align: center;">
                                    <span class="text-red">Chính sách bảo mật thông tin</span>
                                    <span class="text-black">và</span>
                                    <span>Quy chế</span>
                                </p>
                            </form>
                            <!--Step 3 -->

                            <ul class="footer" style="margin-right: -1rem;">
                                <li>
                                    <button class="button_previous hidden">Quay lại</button>
                                </li>
                                <li>Tổng: </li>
                                <li>340.000đ</li>
                                <li><button class="button_next">Tiếp tục</button></li>
                                <li style="display: none;"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="index__right--item">
                        <div>
                            <a href="">
                                <img src="./images/product_01.png" alt="" srcset="">
                            </a>
                            <div>
                                <p>Tuấn hiệp</p>
                                <p>Giường nằm 41 chỗ</p>
                                <div>
                                    <img src="./images/location_02.png" alt="">
                                    <div>
                                        <p>
                                            <span>09:30</span>
                                            <span>•</span>
                                            <span>Bến xe tuy phong</span>
                                        </p>
                                        <p>5h55</p>
                                        <p>
                                            <span>09:30</span>
                                            <span>•</span>
                                            <span>Bến xe tuy phong</span>
                                        </p>
                                    </div>
                                </div>
                                <ul>
                                    <li>4 người đặt trong 6 tiếng gần đây</li>
                                    <li>
                                        <span>Thông tin chi tiết</span>
                                        <img src="./images/down_01.png" alt="">
                                    </li>
                                    <li>
                                        <p>Còn 20 chỗ trống</p>
                                        <button class="button__search__delivery active">Chọn chuyến</button>
                                    </li>
                                </ul>
                                <span class="price">180.000đ</span>
                            </div>
                        </div>
                        <div class="index__right--child hidden">
                            <ul class="index__right--child--status" data-index="0">
                                <li class="active">
                                    <span>1</span>
                                    <span>Chọn chỗ ngồi</span>
                                </li>
                                <li>
                                    <span>2</span>
                                    <span>Điểm đón</span>
                                </li>
                                <li>
                                    <span>3</span>
                                    <span>Nhập thông tin</span>
                                </li>
                                <li class="button__search__delivery__">
                                    <i class="bx bx-x"></i>
                                </li>
                            </ul>
                            <p class="text">OCT cam kết giữ đúng chỗ ngồi của bạn</p>
                            <!--Step 1 -->
                            <div class="step1 step">
                                <ul>
                                    <li>
                                        <div class="index__right--child--item box empty">
                                            <span></span>
                                        </div>
                                        <span>Còn trống</span>
                                    </li>
                                    <li>
                                        <div class="index__right--child--item box">
                                            <span></span>
                                            <span class="close bx bx-x"></span>
                                        </div>
                                        <span>Đã bán</span>
                                    </li>
                                    <li>
                                        <div class="index__right--child--item box selected">
                                            <span></span>
                                        </div>
                                        <span>Đang chọn</span>
                                    </li>
                                </ul>
                                <div>
                                    <div>
                                        <p>Tầng trên</p>
                                        <ul>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <p>Tầng dưới</p>
                                        <ul>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Step 1 -->

                            <!--Step 2 -->
                            <div class="step2 step hidden">
                                <p class="hidden" style="font-weight: 700;margin: 2rem 0rem;">Nhập điểm đón vào bên
                                    dưới:
                                </p>
                                <textarea class="destination">Bến xe Bắc Ruộng</textarea>
                            </div>
                            <!--Step 2 -->

                            <!--Step 3 -->
                            <form action="#" class="step step3 hidden form-contact form__if js_form">
                                <div class="form-field">
                                    <div class="field">
                                        <div class="field__label">
                                            <label for="">Họ và tên</label>
                                        </div>
                                        <div class="field__input">
                                            <input type="text" value="Huỳnh Văn Thuận" placeholder="Nhập họ tên...">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field__label">
                                            <label for="">Số điện thoại</label>
                                        </div>
                                        <div class="field__input">
                                            <input class="js_phone" type="text" value="0824644573"
                                                placeholder="Nhập số điện thoại...">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field__label">
                                            <label for="">Email để nhận thông tin vé</label>
                                        </div>
                                        <div class="field__input">
                                            <input class="js_email" type="text" value="huynhvanthuan.140921@gmail.com"
                                                placeholder="Nhập số điện email...">
                                        </div>
                                    </div>
                                    <div class="field optional">
                                        <div class="field__label">
                                            <label for="">Ghi chú (Nếu có)</label>
                                        </div>
                                        <div class="field__input">
                                            <textarea type="text"
                                                placeholder="Chúng tôi sẽ cố gắng hết sức để đáp ưng nhu cầu của bạn"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <p class="" style="margin: 0.2rem;text-align: center;">
                                    <span class="text-red">(*)</span>
                                    <span>Bằng việc nhấn nút Tiếp Tục, bạn đồng ý với</span>
                                </p>
                                <p class="" style="margin-bottom: 0.5rem;text-align: center;">
                                    <span class="text-red">Chính sách bảo mật thông tin</span>
                                    <span class="text-black">và</span>
                                    <span>Quy chế</span>
                                </p>
                            </form>
                            <!--Step 3 -->

                            <ul class="footer" style="margin-right: -1rem;">
                                <li>
                                    <button class="button_previous hidden">Quay lại</button>
                                </li>
                                <li>Tổng: </li>
                                <li>340.000đ</li>
                                <li><button class="button_next">Tiếp tục</button></li>
                                <li style="display: none;"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="index__right--item">
                        <div>
                            <a href="">
                                <img src="./images/product_01.png" alt="" srcset="">
                            </a>
                            <div>
                                <p>Tuấn hiệp</p>
                                <p>Giường nằm 41 chỗ</p>
                                <div>
                                    <img src="./images/location_02.png" alt="">
                                    <div>
                                        <p>
                                            <span>09:30</span>
                                            <span>•</span>
                                            <span>Bến xe tuy phong</span>
                                        </p>
                                        <p>5h55</p>
                                        <p>
                                            <span>09:30</span>
                                            <span>•</span>
                                            <span>Bến xe tuy phong</span>
                                        </p>
                                    </div>
                                </div>
                                <ul>
                                    <li>4 người đặt trong 6 tiếng gần đây</li>
                                    <li>
                                        <span>Thông tin chi tiết</span>
                                        <img src="./images/down_01.png" alt="">
                                    </li>
                                    <li>
                                        <p>Còn 20 chỗ trống</p>
                                        <button class="button__search__delivery active">Chọn chuyến</button>
                                    </li>
                                </ul>
                                <span class="price">180.000đ</span>
                            </div>
                        </div>
                        <div class="index__right--child hidden">
                            <ul class="index__right--child--status" data-index="0">
                                <li class="active">
                                    <span>1</span>
                                    <span>Chọn chỗ ngồi</span>
                                </li>
                                <li>
                                    <span>2</span>
                                    <span>Điểm đón</span>
                                </li>
                                <li>
                                    <span>3</span>
                                    <span>Nhập thông tin</span>
                                </li>
                                <li class="button__search__delivery__">
                                    <i class="bx bx-x"></i>
                                </li>
                            </ul>
                            <p class="text">OCT cam kết giữ đúng chỗ ngồi của bạn</p>
                            <!--Step 1 -->
                            <div class="step1 step">
                                <ul>
                                    <li>
                                        <div class="index__right--child--item box empty">
                                            <span></span>
                                        </div>
                                        <span>Còn trống</span>
                                    </li>
                                    <li>
                                        <div class="index__right--child--item box">
                                            <span></span>
                                            <span class="close bx bx-x"></span>
                                        </div>
                                        <span>Đã bán</span>
                                    </li>
                                    <li>
                                        <div class="index__right--child--item box selected">
                                            <span></span>
                                        </div>
                                        <span>Đang chọn</span>
                                    </li>
                                </ul>
                                <div>
                                    <div>
                                        <p>Tầng trên</p>
                                        <ul>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <p>Tầng dưới</p>
                                        <ul>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box empty">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box selected">
                                                    <span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="index__right--child--item box">
                                                    <span></span>
                                                    <span class="close bx bx-x"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Step 1 -->

                            <!--Step 2 -->
                            <div class="step2 step hidden">
                                <p class="hidden" style="font-weight: 700;margin: 2rem 0rem;">Nhập điểm đón vào bên
                                    dưới:
                                </p>
                                <textarea class="destination">Bến xe Bắc Ruộng</textarea>
                            </div>
                            <!--Step 2 -->

                            <!--Step 3 -->
                            <form action="#" class="step step3 hidden form-contact form__if js_form">
                                <div class="form-field">
                                    <div class="field">
                                        <div class="field__label">
                                            <label for="">Họ và tên</label>
                                        </div>
                                        <div class="field__input">
                                            <input type="text" value="Huỳnh Văn Thuận" placeholder="Nhập họ tên...">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field__label">
                                            <label for="">Số điện thoại</label>
                                        </div>
                                        <div class="field__input">
                                            <input class="js_phone" type="text" value="0824644573"
                                                placeholder="Nhập số điện thoại...">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field__label">
                                            <label for="">Email để nhận thông tin vé</label>
                                        </div>
                                        <div class="field__input">
                                            <input class="js_email" type="text" value="huynhvanthuan.140921@gmail.com"
                                                placeholder="Nhập số điện email...">
                                        </div>
                                    </div>
                                    <div class="field optional">
                                        <div class="field__label">
                                            <label for="">Ghi chú (Nếu có)</label>
                                        </div>
                                        <div class="field__input">
                                            <textarea type="text"
                                                placeholder="Chúng tôi sẽ cố gắng hết sức để đáp ưng nhu cầu của bạn"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <p class="" style="margin: 0.2rem;text-align: center;">
                                    <span class="text-red">(*)</span>
                                    <span>Bằng việc nhấn nút Tiếp Tục, bạn đồng ý với</span>
                                </p>
                                <p class="" style="margin-bottom: 0.5rem;text-align: center;">
                                    <span class="text-red">Chính sách bảo mật thông tin</span>
                                    <span class="text-black">và</span>
                                    <span>Quy chế</span>
                                </p>
                            </form>
                            <!--Step 3 -->

                            <ul class="footer" style="margin-right: -1rem;">
                                <li>
                                    <button class="button_previous hidden">Quay lại</button>
                                </li>
                                <li>Tổng: </li>
                                <li>340.000đ</li>
                                <li><button class="button_next">Tiếp tục</button></li>
                                <li style="display: none;"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="index__right--footer">
                    <button>Tìm thêm chuyến</button>
                </div>
            </div>
        </div>
    </div>

@endsection