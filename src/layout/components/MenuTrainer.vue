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
                                    href="/trainer">Trang Chủ</a>
                            </li>
                        </router-link>

                        <router-link to="/lich-tap">
                                    <li><a class="dropdown-item" href="/lich-tap">Lịch Tuần</a></li>
                                </router-link>

                        <router-link to="/diem-danh">
                                    <li><a class="dropdown-item" href="/diem-danh">Điểm Danh</a></li>
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
</style>