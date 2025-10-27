<template>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark py-0" style="background-color: #c7a44c;">
            <div class="container"> <a class="navbar-brand fs-4 fw-bold" href="#">
                    <img src="/src/assets/images/logo.png" class="logo-icon" alt="logo icon"
                        style="width:60px; height:auto;"><span class="text-white">GOLDEN GAINS GYM</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                    aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <router-link to="/">
                            <li class="nav-item"> <a class="nav-link  text-light fs-6" aria-current="page"
                                    href="/">Trang Chủ</a>
                            </li>
                        </router-link>
                        <!-- Phòng tập -->
                        <li class="nav-item dropdown" style="background-color: #c7a44c;">
                            <a class="nav-link dropdown-toggle text-light fs-6" href="#" role="button">
                                Phòng Tập
                            </a>
                            <ul class="dropdown-menu">
                                <router-link to="/phong-tap/yoga">
                                    <li><a class="dropdown-item" href="/phong-tap/yoga">Yoga</a></li>
                                </router-link>
                                <router-link to="/phong-tap/gym">
                                    <li><a class="dropdown-item" href="/phong-tap/gym">Gym</a></li>
                                </router-link>
                            </ul>
                        </li>
                        <!-- Dịch vụ -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light fs-6" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dịch Vụ
                            </a>
                            <ul class="dropdown-menu">
                                <router-link to="/dich-vu/goi-tap">
                                    <li><a class="dropdown-item" href="/dich-vu/goi-tap">Các Gói Tập</a>
                                    </li>
                                </router-link>
                                <router-link to="/dich-vu/thuc-pham-chu-nang">
                                    <li><a class="dropdown-item" href="/dich-vu/thuc-pham-chu-nang">Thực Phẩm Chức Năng</a>
                                    </li>
                                </router-link>
                                <router-link to="/dich-vu/voucher">
                                    <li><a class="dropdown-item" href="/dich-vu/voucher">Voucher</a>
                                    </li>
                                </router-link>
                            </ul>
                        </li>
                        <!-- Lịch Tập -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light fs-6" href="#" role="button">
                                Lịch Tập
                            </a>
                            <ul class="dropdown-menu">
                                <router-link to="/lich-tap/lich-tuan">
                                    <li><a class="dropdown-item" href="/lich-tap/lich-tuan">Lịch Tuần</a></li>
                                </router-link>
                                <router-link to="/lich-tap/tim-lop">
                                    <li><a class="dropdown-item" href="/lich-tap/tim-lop">Tìm Lớp</a></li>
                                </router-link>
                            </ul>
                        </li>
                        <!-- Về chúng tôi -->
                        <router-link to="/about">
                            <li class="nav-item"> <a class="nav-link text-light fs-6" href="/about">Câu chuyện của chúng tôi</a>
                            </li>
                        </router-link>
                    </ul>
                    <div class="d-flex nav-search">
                        <div class="my-2 border radius-30 ">
                            <div class="dropdown">
                                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://cellphones.com.vn/sforum/wp-content/uploads/2024/02/anh-avatar-cute-58.jpg"
                                        class="user-img" style="height: 35px; object-fit: cover;">
                                    <div class="user-info ps-3 pe-3">
                                        <p class="user-name mb-0 text-light">Pauline Seitz</p>
                                        <p class="text-secondary mb-0">@username</p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <router-link to="/client/profile">
                                        <li><a class="dropdown-item" href="javascript:;"><i
                                                    class="bx bx-user"></i><span>Profile</span></a>
                                        </li>
                                    </router-link>
                                    <router-link to="/client/logout">
                                        <li><a class="dropdown-item" href="javascript:;"><i
                                                class="bx bx-log-out-circle"></i><span>Logout</span></a>
                                    </li>
                                    </router-link>
                                    
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </nav>
    </header>
</template>
<script>
export default {

}
</script>
<style>
.nav-item.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
}

.navbar-gold .dropdown-menu {
    background-color: #111;
    border: none;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.navbar-gold .dropdown-item {
    color: #C7A44C;
    font-weight: 500;
}

.navbar-gold .dropdown-item:hover {
    background-color: #C7A44C;
    color: #000;
}
</style>