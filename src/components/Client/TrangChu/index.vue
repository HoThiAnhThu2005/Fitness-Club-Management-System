<template>
    <!-- banner -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators"><button type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0" class="" aria-label="Slide 1" fdprocessedid="cujhd"></button><button type="button"
                data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"
                fdprocessedid="paxw7l" class=""></button><button type="button"
                data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"
                fdprocessedid="canolg" class="active" aria-current="true"></button></div>
        <div class="carousel-inner">
            <div class="carousel-item"><img
                    src="https://cdn.hpdecor.vn/wp-content/uploads/2022/12/thiet-ke-phong-gym-12.jpg"
                    class="d-block w-100" style="height: 550px; object-fit: cover;" alt="Banner 1">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item"><img
                    src="http://toplist.com.co/wp-content/uploads/2024/02/phong-tap-gym-ho-chi-minh-california-1.jpg"
                    class="d-block w-100" style="height: 550px; object-fit: cover;" alt="Banner 2">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item active"><img src="https://cdn.unityfitness.vn/2025/05/phong-gym-quan-7-1.jpg"
                    class="d-block w-100" style="height: 550px; object-fit: cover;" alt="Banner 3">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
        </div><button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev" fdprocessedid="dyu65d"><span class="carousel-control-prev-icon"
                aria-hidden="true"></span><span class="visually-hidden">Previous</span></button><button
            class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"
            fdprocessedid="yk07q"><span class="carousel-control-next-icon" aria-hidden="true"></span><span
                class="visually-hidden">Next</span></button>
    </div>
    <!-- vì sao chọn chúng tôi -->
    <div class="container mt-4">
        <div class="row">
            <div class="card">
                <h4 class="mt-3">VÌ SAO CHỌN CHÚNG TÔI</h4>
                <hr>
                <p>Chinh phục mục tiêu sức khỏe của bạn là giải pháp tập luyện và khoa học của chúng tôi</p>
                <template v-for="(value, index) in list_cauhoi.filter(x => x.tinh_trang === 1)" :key="index">
                    <div class="mb-3">
                        <button class="btn btn-outline-dark d-flex justify-content-between align-items-center w-100"
                            @click="toggle(index)">
                            <span>{{ value.tieu_de }}</span>
                            <i :class="openIndex === index ? 'fa-solid fa-minus' : 'fa-solid fa-plus'"></i>
                        </button>

                        <div v-show="openIndex === index" class="mt-2">
                            <div class="ms-2 mt-1">
                                {{ value.mo_ta }}
                            </div>
                        </div>
                    </div>
                </template>

                <div class="d-flex justify-content-end">
                    <button class="btn btn-outline-warning rounded-pill px-4 py-2 fw-bold mb-3" data-bs-toggle="modal" data-bs-target="#DangKyModal">Tham Gia</button>
                </div>

            </div>
        </div>
    </div>

    <!-- Dịch vụ -->
    <div>
        <!-- Phần banner -->
        <section class="text-center text-white py-5" style="background-color: #111;">
            <div class="container position-relative">
                <h2 class="fw-bold fs-2 text-white">
                    Giải nhiệt, nạp năng lượng và bứt phá cùng <br />
                    phòng gym máy lạnh 24/7 tại Đà Nẵng! 💪
                </h2>
                <h4 class="fw-semibold mt-3 text-white">
                    Bồn tắm lạnh, xông hơi, đấm bóp và tiện nghi chỉ từ 100K/ngày!
                </h4>

                <!-- Nút Join Now -->
                <button class="btn text-white fw-bold mt-4 px-4 py-3 rounded-pill"
                    style="background-color: #efc048; border: none;" data-bs-toggle="modal" data-bs-target="#DangKyModal">
                    JOIN NOW
                </button>
            </div>
        </section>

        <!-- Phần dịch vụ -->
        <section class="py-5" style="background-color: #fff;">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 mb-4" v-for="(service, index) in services" :key="index">
                        <div class="p-4 h-100 rounded shadow-sm" style="background-color: #f8f9fa;">
                            <div class="fs-1 mb-3" style="color: #efc048;">
                                <i :class="service.icon"></i>
                            </div>
                            <h5 class="fw-bold text-uppercase">{{ service.title }}</h5>
                            <div style="width: 50px; height: 3px; background-color: #efc048; margin: 10px auto;"></div>
                            <p class="text-muted">{{ service.desc }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Chúng tôi là ai -->
    <section style="background-color: #c7a44c; padding: 60px 0;">
        <div class="container text-center text-dark">
            <h3 class="fw-bold mb-3">CHÚNG TÔI LÀ AI</h3>
            <p class="mx-auto mb-5" style="max-width: 800px;">
                Tại <b class="text-warning">Golden Gains Gym</b>, chúng tôi không chỉ là một phòng gym – mà còn là cộng
                đồng năng lượng,
                nhiệt huyết và khát vọng giúp bạn chinh phục sức khỏe. Mỗi huấn luyện viên của chúng tôi đều có câu
                chuyện riêng về đam mê và tận tâm.
            </p>

            <div class="row justify-content-center">
                <template v-for="(item, index) in list_hlv.filter(x => x.tinh_trang === 1).slice(0, 3)" :key="index">
                    <div class="col-md-4 mb-4">
                        <div class="trainer-card shadow">
                            <img :src="item.hinh_anh" class="w-100" style="height: 420px; object-fit: cover;" />

                            <!-- Overlay hiện khi hover -->
                            <div
                                class="trainer-overlay d-flex flex-column justify-content-center align-items-center text-center text-white px-3">
                                <h5 class="fw-bold" style="color:#C7A44C">{{ item.ho_va_ten }}</h5>
                                <p class="mb-1">HLV Fitness</p>
                                <p class="fst-italic small">{{ item.mo_ta_ngan }}</p>
                            </div>

                            <!-- Tên hiển thị cố định -->
                            <div class="trainer-fixed position-absolute bottom-0 start-0 w-100 py-2">
                                <h6 class="fw-bold text-white mb-0">{{ item.ho_va_ten }}</h6>
                                <small>HLV Fitness</small>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

        </div>
    </section>

    <!-- Bài viết -->
    <div class="container mb-4 mt-4">
        <div class="row ">
            <template v-for="(value, index) in list_bv.slice(0, 3)" :key="index">
                <div class="col-lg-4 mb-4">
                    <router-link :to="`/chi-tiet-bai-viet/${value.id}`">
                        <div class="card h-100">
                        <img :src="value.hinh_anh" class="card-img-top" style="height: 400px;">
                        <div class="card-body">
                            <h5 class="card-title text-truncate">{{ value.tieu_de }}</h5>
                            <p class="card-text text-dark">{{ value.mo_ta_ngan }}</p>
                        </div>
                    </div>
                    </router-link>
                    
                </div>
            </template>
        </div>
    </div>

    <!-- Bình luận -->
    <h3 class="text-center mb-4 fw-bold ">Khách Hàng Nói Gì Về Golden Gains Gym</h3>
    <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm " style="background-color: #c7a44c;">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="avatar"
                            class="rounded-circle me-3" width="48" height="48">
                        <div>
                            <div class="fw-bold text-light">Nguyễn Văn A</div>
                            <div class="text-muted text-light" style="font-size: 0.95em;">CEO Công ty ABC</div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <span class="text-warning">&#9733;</span>
                        <span class="text-warning">&#9733;</span>
                        <span class="text-warning">&#9733;</span>
                        <span class="text-warning">&#9733;</span>
                        <span class="text-warning">&#9733;</span>
                    </div>
                    <div class="fst-italic text-light" style="font-size: 1em;">
                        "Cơ sở vật chất: phòng sạch sẽ, hiện đại, có điều hòa rất dễ chịu, diện tích không quá rộng
                        nhưng bố trí hợp lý, luôn tạo cho mình cảm giác thoải mái mỗi khi đến tập. Phòng set up ánh sáng
                        đẹp. Máy móc tập luyện không nhiều như những phòng gym lớn nhưng với mình là hoàn toàn đủ để có
                        những buổi tập chất lượng."
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm " style="background-color: #c7a44c;">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="avatar"
                            class="rounded-circle me-3" width="48" height="48">
                        <div>
                            <div class="fw-bold text-light">Trần Thị B</div>
                            <div class="text-muted text-light" style="font-size: 0.95em;">Giám đốc XYZ Shop</div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <span class="text-warning">&#9733;</span>
                        <span class="text-warning">&#9733;</span>
                        <span class="text-warning">&#9733;</span>
                        <span class="text-warning">&#9733;</span>
                        <span class="text-warning">&#9733;</span>
                    </div>
                    <div class="fst-italic text-light" style="font-size: 1em;">
                        "Mình đánh giá 5 sao, mọi thứ từ check-in khi đi tập, quản lí gói tập cho đến các dịch vụ của
                        phòng
                        đều được quản lí qua app điện thoại, cực kì tiện lợi và dễ theo dõi. Những thông báo ví dụ như
                        lịch
                        cúp điện cũng sẽ được thông báo chi tiết trước 1 ngày qua app và cả email để hội viên tiện sắp
                        xếp."
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm " style="background-color: #c7a44c;">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="avatar"
                            class="rounded-circle me-3" width="48" height="48">
                        <div>
                            <div class="fw-bold text-light">Lê Văn C</div>
                            <div class="text-muted text-light" style="font-size: 0.95em;">Chủ cửa hàng DEF</div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <span class="text-warning">&#9733;</span>
                        <span class="text-warning">&#9733;</span>
                        <span class="text-warning">&#9733;</span>
                        <span class="text-warning">&#9733;</span>
                        <span class="text-warning">&#9733;</span>
                    </div>
                    <div class="fst-italic text-light" style="font-size: 1em;">
                        "Phòng tập vừa đủ, sạch sẽ, team thân thiện, điều hòa 24/24 và môi trường cực kì tốt."
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- modal đăng ký -->
    <div class="modal fade" id="DangKyModal" tabindex="-1" aria-labelledby="DangKyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header position-relative p-0">
          <!-- Nút đóng nằm bên phải ảnh -->
          <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal" aria-label="Close"
            style="top: 10px; right: 10px; z-index: 10;">
          </button>
          <!-- Ảnh co vừa modal -->
          <img src="https://i.pinimg.com/1200x/6a/76/49/6a76499c5195530ef01789ca0dbdf108.jpg" alt=""
            style="width: 100%; height: auto; display: block;">
        </div>
        <div class="modal-body">
          <h1 class="text-center text-warning fw-bold display-5">ĐĂNG KÝ TƯ VẤN</h1>
          <label class="form-label">Họ Và Tên</label>
          <input type="text" class="form-control" placeholder="Nhập họ Và Tên">
          <label class="form-label mt-2">Số điện thoại</label>
          <input type="text" class="form-control" placeholder="Nhập số điện thoại">
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn btn-warning text-white" data-bs-dismiss="modal">Đăng ký tư vấn</button>
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
            openIndex: null,
            services: [
                {
                    title: "Quản lý cân nặng theo khoa học",
                    desc: "Dành cho người muốn tăng hoặc giảm cân một cách khoa học và bền vững.",
                    icon: "fa-solid fa-person",
                },
                {
                    title: "Phòng tránh chấn thương & té ngã",
                    desc: "Dành cho người lớn tuổi muốn tập luyện để phòng tránh chấn thương và té ngã.",
                    icon: "fa-solid fa-person-cane",
                },
                {
                    title: "Phục hồi sau bệnh",
                    desc: "Dành cho người muốn lấy lại sức khỏe và cân nặng sau khi điều trị bệnh.",
                    icon: "fa-solid fa-wheelchair",
                },
                {
                    title: "Tối ưu hóa cơ thể",
                    desc: "Dành cho người muốn cải thiện vóc dáng và duy trì sức khỏe tổng thể.",
                    icon: "fa-solid fa-child-reaching",
                },
            ],
            list_bv: [],
            list_cauhoi: [],
            list_hlv: [],
        }
    },
    mounted() {
        this.loadData();
    },
    methods: {
        loadData() {
            axios
                .get('http://127.0.0.1:8001/api/client/home-page')
                .then((res) => {
                    this.list_cauhoi = res.data.data_cauhoi;
                    this.list_bv = res.data.data_bv;
                    this.list_hlv = res.data.data_hlv;
                })
        },
        toggle(index) {
            this.openIndex = this.openIndex === index ? null : index;
        },
    },
}
</script>
<style>
.trainer-card {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
}

.trainer-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.75);
    opacity: 0;
    transform: translateY(100%);
    transition: all 0.4s ease;
}

.trainer-card:hover .trainer-overlay {
    opacity: 1;
    transform: translateY(0);
}

.trainer-card img {
    transition: transform 0.5s ease-in-out;
}

.trainer-card:hover img {
    transform: scale(1.1);
    /* zoom nhẹ khi hover */
}

.trainer-fixed {
    background-color: rgba(0, 0, 0, 0.7);
    color: #c7a44c;
}
</style>