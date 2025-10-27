<template>
    <div class="nav-container primary-menu">
        <div class="mobile-topbar-header">
            <div>
                <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            </div>
            <div>
                <h4 class="logo-text">Gym</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
            </div>
        </div>
        <nav class="navbar navbar-expand-xl w-100">
           <ul class="navbar-nav justify-content-start flex-grow-1 gap-1">
				<router-link to="/admin">
					<li class="nav-item">
						<a class="nav-link" href="/admin">
							<div class="parent-icon">
								<i class="bx bx-home-circle"></i>

							</div>
							<div class="menu-title">Dashboard</div>
						</a>
					</li>
				</router-link>
                <!-- Quản lý tài khoản -->
				<li class="nav-item dropdown">
					<a href="javascript:;" class="nav-link dropdown-toggle dropdown-toggle-nocaret show"
						data-bs-toggle="dropdown" aria-expanded="true">
						<div class="parent-icon"><i class="fa-solid fa-user-group"></i>
						</div>
						<div class="menu-title">Quản lý tài khoản</div>
					</a>
					<ul class="dropdown-menu show" data-bs-popper="static">
						<router-link to="/admin/nhan-vien">
							<li>
								<a class="dropdown-item" href="/admin/nhan-vien"><i
										class="bx bx-right-arrow-alt"></i>Tài Khoản Nhân
									viên</a>
							</li>
						</router-link>
						<router-link to="/admin/khach-hang">
							<li>
								<a class="dropdown-item" href="/admin/khach-hang"><i
										class="bx bx-right-arrow-alt"></i>Tài khoản Khách
									hàng</a>
							</li>
						</router-link>
					</ul>
				</li>
                <!-- Quản lý phòng tập & thiết bị -->
				<li class="nav-item dropdown">
					<a href="javascript:;" class="nav-link dropdown-toggle dropdown-toggle-nocaret show"
						data-bs-toggle="dropdown" aria-expanded="true">
						<div class="parent-icon"><i class="fa-solid fa-film"></i>
						</div>
						<div class="menu-title">Quản lý phòng tập & thiết bị</div>
					</a>
					<ul class="dropdown-menu show" data-bs-popper="static">
						<router-link to="/admin/phong-tap">
							<li>
								<a class="dropdown-item" href="/admin/phong-tap"><i
										class="bx bx-right-arrow-alt"></i>Phòng tập</a>
							</li>
						</router-link>
						<router-link to="/admin/thiet-bi">
							<li>
								<a class="dropdown-item" href="/admin/thiet-bi"><i
										class="bx bx-right-arrow-alt"></i>Thiết bị</a>
							</li>
						</router-link>
					</ul>
				</li>
                <!-- quản lý dịch vụ -->
				<li class="nav-item dropdown">
					<a href="javascript:;" class="nav-link dropdown-toggle dropdown-toggle-nocaret show"
						data-bs-toggle="dropdown" aria-expanded="true">
						<div class="parent-icon"><i class="fa-brands fa-servicestack"></i>
						</div>
						<div class="menu-title">Quản lý Dịch vụ</div>
					</a>
					<ul class="dropdown-menu show" data-bs-popper="static">
						<router-link to="/admin/cac-goi-tap">
							<li>
								<a class="dropdown-item" href="/admin/cac-goi-tap"><i
										class="bx bx-right-arrow-alt"></i>Các gói tập</a>
							</li>
						</router-link>
						<router-link to="/admin/thuc-pham-chuc-nang">
							<li>
								<a class="dropdown-item" href="/admin/thuc-pham-chuc-nang"><i
										class="bx bx-right-arrow-alt"></i>Thực phẩm chức năng</a>
							</li>
						</router-link>
						<router-link to="/admin/voucher">
							<li>
								<a class="dropdown-item" href="/admin/voucher"><i
										class="bx bx-right-arrow-alt"></i>Voucher</a>
							</li>
						</router-link>
					</ul>
				</li>
				<router-link to="/admin/phan-quyen">
					<li class="nav-item">
						<a class="nav-link" href="/admin/phan-quyen">
							<div class="parent-icon">
								<i class="fa-solid fa-user-shield"></i>
							</div>
							<div class="menu-title">Phân Quyền</div>
						</a>
					</li>
				</router-link>
				<li class="nav-item dropdown">
					<a href="javascript:;" class="nav-link dropdown-toggle dropdown-toggle-nocaret show"
						data-bs-toggle="dropdown" aria-expanded="true">
						<div class="parent-icon"><i class="fa-solid fa-star-half-stroke"></i>
						</div>
						<div class="menu-title">Đánh Giá</div>
					</a>
					<ul class="dropdown-menu show" data-bs-popper="static">
						<router-link to="/admin/danh-gia-huan-luyen-vien">
							<li>
								<a class="dropdown-item" href="/admin/danh-gia-huan-luyen-vien"><i
										class="bx bx-right-arrow-alt"></i>Đánh Giá HLV</a>
							</li>
						</router-link>
						<router-link to="/admin/binh-luan">
							<li>
								<a class="dropdown-item" href="/admin/binh-luan"><i
										class="bx bx-right-arrow-alt"></i>Bình Luận</a>
							</li>
						</router-link>
						<router-link to="/admin/bai-viet">
							<li>
								<a class="dropdown-item" href="/admin/bai-viet"><i
										class="bx bx-right-arrow-alt"></i>Bài Viết</a>
							</li>
						</router-link>
					</ul>
				</li>
				
				<li class="nav-item dropdown">
					<a href="javascript:;" class="nav-link dropdown-toggle dropdown-toggle-nocaret show"
						data-bs-toggle="dropdown" aria-expanded="true">
						<div class="parent-icon"><i class="fa-solid fa-chart-line"></i>
						</div>
						<div class="menu-title">Thống kê</div>
					</a>
					<ul class="dropdown-menu show" data-bs-popper="static">
						<router-link to="/admin/thong-ke/khach-hang-dang-ky">
							<li>
								<a class="dropdown-item" href="/admin/thong-ke/khach-hang-dang-ky"><i
										class="bx bx-right-arrow-alt"></i>Thống Kê Lượt Đăng Ký</a>
							</li>
						</router-link>
						<router-link to="/admin/thong-ke/dich-vu">
							<li>
								<a class="dropdown-item" href="/admin/thong-ke/dich-vu"><i
										class="bx bx-right-arrow-alt"></i>Thống Kê Dịch Vụ</a>
							</li>
						</router-link>
						<router-link to="/admin/thong-ke/khach-hang-chi-tieu">
							<li>
								<a class="dropdown-item" href="/admin/thong-ke/khach-hang-chi-tieu"><i
										class="bx bx-right-arrow-alt"></i>Thống kê chi tiêu</a>
							</li>
						</router-link>
						
						
					</ul>
				</li>
			</ul>
        </nav>
    </div>
</template>
<script>
export default {

}
</script>
<style></style>