import { createRouter, createWebHistory } from "vue-router"; // cài vue-router: npm install vue-router@next --save

const routes = [
    //===================Admin===================
    {
        path : '/admin',
        component: ()=>import('../components/Admin/TrangChu/index.vue'),
    },
    {
         path : '/admin/login',
        component: ()=>import('../components/Admin/DangNhap/index.vue'),
    },
    {
         path : '/admin/nhan-vien',
        component: ()=>import('../components/Admin/NhanVien/index.vue'),
    },
    {
         path : '/admin/phan-quyen',
        component: ()=>import('../components/Admin/PhanQuyen/index.vue'),
    },
    {
         path : '/admin/khach-hang',
        component: ()=>import('../components/Admin/KhachHang/index.vue'),
    },
    {
        path : '/admin/phong-tap',
        component: ()=>import('../components/Admin/PhongTap/index.vue'),
    },
    {
         path : '/admin/thiet-bi',
        component: ()=>import('../components/Admin/ThietBi/index.vue'),
    },
    {
         path : '/admin/cac-goi-tap',
        component: ()=>import('../components/Admin/GoiTap/index.vue'),
    },
    {
         path : '/admin/thuc-pham-chuc-nang',
        component: ()=>import('../components/Admin/ThucPham/index.vue'),
    },
    {
        path : '/admin/voucher',
        component: ()=>import('../components/Admin/Voucher/index.vue'),
    },
    {
         path : '/admin/danh-gia-huan-luyen-vien',
        component: ()=>import('../components/Admin/DanhGiaHLV/index.vue'),
    },
    {
         path : '/admin/binh-luan',
        component: ()=>import('../components/Admin/BinhLuan/index.vue'),
    },
    {
         path : '/admin/bai-viet',
        component: ()=>import('../components/Admin/BaiViet/index.vue'),
    },
    {
        path : '/admin/thong-ke-luot-dang-ky',
        component: ()=>import('../components/Admin/ThongKe/TKLuotDK/index.vue'),
    },
    {
         path : '/admin/thong-ke-dich-vu',
        component: ()=>import('../components/Admin/ThongKe/TKDichVu/index.vue'),
    },
    
    //=======================Client=======================
    {
        path : '/',
        component: ()=>import('../components/Client/TrangChu/index.vue')
    },
    {
        path : '/dang-ky',
        component: ()=>import('../components/Client/DangKy/index.vue')
    },
    {
        path : '/dang-nhap',
        component: ()=>import('../components/Client/DangNhap/index.vue')
    },
    {
        path : '/phong-tap/yoga',
        component: ()=>import('../components/Client/Yoga/index.vue')
    },
    {
        path : '/phong-tap/gym',
        component: ()=>import('../components/Client/Gym/index.vue')
    },
    {
        path : '/dich-vu/cac-goi-tap',
        component: ()=>import('../components/Client/CacGoiTap/index.vue')
    },
    {
        path : '/dich-vu/thuc-pham-chu-nang',
        component: ()=>import('../components/Client/ThucPham/index.vue')
    },
    {
        path : '/dich-vu/voucher',
        component: ()=>import('../components/Client/Voucher/index.vue')
    },
    {
        path : '/lich-tap/lich-tuan',
        component: ()=>import('../components/Client/LichTap/index.vue')
    },
    {
        path : '/lich-tap/tim-lop',
        component: ()=>import('../components/Client/TimLop/index.vue')
    },
    {
        path : '/about',
        component: ()=>import('../components/Client/About/index.vue')
    },
    {
        path : '/bai-viet',
        component: ()=>import('../components/Client/BaiViet/index.vue')
    },
    {
        path : '/profile',
        component: ()=>import('../components/Client/Profile/index.vue')
    },

    //============Trainer===========
    {
        path : '/trainer',
        component: ()=>import('../components/Trainer/TrangChu/index.vue')
    },
    {
        path : '/trainer/lich-tap',
        component: ()=>import('../components/Trainer/LichTap/index.vue')
    },
    {
        path : '/trainer/diem-danh',
        component: ()=>import('../components/Trainer/DiemDanh/index.vue')
    },
    {
        path : '/trainer/dang-nhap',
        component: ()=>import('../components/Trainer/DangNhap/index.vue')
    },

]

const router = createRouter({
    history: createWebHistory(),
    routes: routes
})

export default router