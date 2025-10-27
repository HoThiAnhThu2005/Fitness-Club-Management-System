<template>
    <div class="row">
        <div class="col-lg-12">
            <div class="card radius-10 border-top border-0 border-3 border-primary">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="mt-2">DANH SÁCH KHÁCH HÀNG</h4>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Thêm Nhân
                        Viên</button>
                </div>
                <div class="card-body table-responsive">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="table-info text-nowrap text-center">
                                    <th>#</th>
                                    <th>Họ và tên</th>
                                    <th>Email</th>
                                    <th>Ngày sinh</th>
                                    <th>Số điện thoại</th>
                                    <th>Kích Hoạt</th>
                                    <th>Tình trạng</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="(value, index) in list_KH" :key="index">
                                    <tr class="text-nowrap align-middle text-center">
                                        <th>{{ index + 1 }}</th>
                                        <td>{{ value.ho_va_ten }}</td>
                                        <td>{{ value.email }}</td>
                                        <td>{{ value.ngay_sinh }}</td>
                                        <td>{{ value.so_dien_thoai }}</td>
                                        <td @click="doiKichHoat(value)">
                                            <button v-if="value.is_active == 1"
                                                class="btn btn-warning text-white w-100">Đã Kích Hoạt</button>
                                            <button v-else class="btn btn-secondary text-white w-100">Chưa Kích
                                                Hoạt</button>
                                        </td>
                                        <td @click="doiTrangThai(value)">
                                            <button v-if="value.is_block == 1" class="btn btn-info text-white w-100">Chưa
                                                Khóa</button>
                                            <button v-else class="btn btn-success text-white w-100">Đã Khóa</button>
                                        </td>
                                        <td>
                                            <button @click="edit_khach_hang = value" class="btn btn-outline-success me-2"
                                                data-bs-toggle="modal" data-bs-target="#updateModal">Cập Nhật</button>
                                            <button @click="del_khach_hang = value" class="btn btn-outline-danger"
                                                data-bs-toggle="modal" data-bs-target="#DeleteModal">Xóa</button>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal ADD-->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addModalLabel">Thêm Khách Hàng Mới</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Họ Và Tên</label>
                            <input v-model="create_khach_hang.ho_va_ten" type="text" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Ngày Sinh</label>
                            <input v-model="create_khach_hang.ngay_sinh" type="date" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input v-model="create_khach_hang.email" type="email" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">CCCD</label>
                            <input v-model="create_khach_hang.cccd" type="text" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Số điện thoại</label>
                            <input v-model="create_khach_hang.so_dien_thoai" type="phone" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Mật Khẩu</label>
                            <input v-model="create_khach_hang.password" type="password" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button v-on:click="themKhachHang()" type="button" class="btn btn-primary"
                        data-bs-dismiss="modal">Thêm
                        Mới</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Update-->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="updateModalLabel">Cập Nhật Khách Hàng Mới</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Họ Và Tên</label>
                            <input v-model="edit_khach_hang.ho_va_ten" type="text" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Ngày Sinh</label>
                            <input v-model="edit_khach_hang.ngay_sinh" type="date" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input v-model="edit_khach_hang.email" type="email" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">CCCD</label>
                            <input v-model="edit_khach_hang.cccd" type="text" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Số điện thoại</label>
                            <input v-model="edit_khach_hang.so_dien_thoai" type="phone" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Mật Khẩu</label>
                            <input v-model="edit_khach_hang.password" type="password" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button v-on:click="updateKhachHang()" type="button" class="btn btn-success"
                        data-bs-dismiss="modal">Cập
                        Nhật</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Xóa -->
    <div class="modal fade" id="DeleteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Xóa Khách Hàng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" role="alert">
                        Bạn có chắc chắn muốn xóa khách hàng
                        <strong>{{ del_khach_hang.ho_va_ten }}</strong> ?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Đóng
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" v-on:click="xoaKhachHang()">
                        Xác nhận
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    data() {
        return {
            list_KH: [],
            create_khach_hang: {},
            edit_khach_hang: {},
            del_khach_hang: {},
        };
    },
    mounted() {
        this.loadDataKH();
    },
    methods: {
        loadDataKH() {
            axios
                .get('http://127.0.0.1:8001/api/admin/khach-hang/get-data')
                .then((res) => {
                    this.list_KH = res.data.data;
                });
        },
        themKhachHang() {
            axios
                .post('http://127.0.0.1:8001/api/admin/khach-hang/add-data', this.create_khach_hang)
                .then((res) => {
                    if (res.data.status) {
                        this.loadDataKH();
                        this.create_khach_hang = {};
                        this.$toast.success(res.data.message);
                    } else {
                        this.$toast.error(res.data.message);
                    }
                });
        },
        updateKhachHang() {
            axios
                .post('http://127.0.0.1:8001/api/admin/khach-hang/update', this.edit_khach_hang)
                .then((res) => {
                    if (res.data.status) {
                        this.loadDataKH();
                        this.$toast.success(res.data.message);
                    } else {
                        this.$toast.error(res.data.message);
                    }
                });
        },
        xoaKhachHang() {
            axios
                .post('http://127.0.0.1:8001/api/admin/khach-hang/destroy', this.del_khach_hang)
                .then((res) => {
                    if (res.data.status) {
                        this.loadDataKH();
                        this.$toast.success(res.data.message);

                    } else {
                        this.$toast.error(res.data.message);
                    }
                });
        },

        doiTrangThai(payload) {
            axios
                .post('http://127.0.0.1:8001/api/admin/khach-hang/changeStatus', payload)
                .then((res) => {
                    if (res.data.status) {
                        this.loadDataKH();
                        this.$toast.success(res.data.message);

                    } else {
                        this.$toast.error(res.data.message);
                    }
                });
        },

        doiKichHoat(payload){
            axios
                .post('http://127.0.0.1:8001/api/admin/khach-hang/kich-hoat', payload)
                .then((res) => {
                    if (res.data.status) {
                        this.loadDataKH();
                        this.$toast.success(res.data.message);

                    } else {
                        this.$toast.error(res.data.message);
                    }
                });
        }

    },
}
</script>
<style></style>