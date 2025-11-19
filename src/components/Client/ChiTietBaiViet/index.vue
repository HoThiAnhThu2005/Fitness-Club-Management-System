<template>
  <div class="container py-4 py-md-5">
    <div class="row g-4">
      <div class="col-lg-12">
        <div class="bg-white rounded shadow-sm p-3 p-md-4 mb-4">
          <!-- Tiêu đề bài viết  -->
          <h1 class="fs-2 fs-md-1 fw-bold text-dark mb-3 text-uppercase">
            {{ chi_tiet_bai_viet.tieu_de }}
          </h1>
          <div
            class="d-flex flex-wrap align-items-center gap-3 pb-3 mb-4 border-bottom text-secondary small"
          >
            <span
              ><i class="bi bi-calendar3 text-danger me-1"></i> 10/05/2025</span
            >
            <div class="ms-auto mt-2 mt-sm-0 d-flex align-items-center">
              <span class="me-2">Chia sẻ:</span>
              <a
                href="#"
                class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary text-white me-1"
                style="width: 32px; height: 32px"
              >
                <i class="fa-brands fa-2x fa-square-facebook"></i>
              </a>
              <a
                href="#"
                class="d-inline-flex align-items-center justify-content-center rounded-circle bg-dark text-white me-1"
                style="width: 32px; height: 32px"
              >
                <i class="fa-brands fa-2x fa-square-twitter"></i>
              </a>
              <a
                href="#"
                class="d-inline-flex align-items-center justify-content-center rounded-circle bg-danger text-white"
                style="width: 32px; height: 32px"
              >
                <i class="fa-solid fa-2x fa-envelope"></i>
              </a>
            </div>
          </div>

          <div class="mb-4 rounded overflow-hidden text-center">
            <img
              :src="chi_tiet_bai_viet.hinh_anh"
              alt=""
              style="height: 500px"
              class="img-fluid"
            />
          </div>
          <div class="lh-lg">
            <h3 class="fs-4 fw-semibold mb-3">Nội dung bài viết:</h3>
            <div
              class="bg-warning-subtle border-start border-4 border-warning rounded p-4 my-4"
            >
              <span v-html="chi_tiet_bai_viet.noi_dung"></span>
            </div>
          </div>
          <!-- Tags -->
          <div class="mt-4 pt-3 border-top">
            <span class="fw-semibold text-secondary me-2">Tags:</span>
            <a
              href="#"
              class="badge rounded-pill bg-light text-secondary text-decoration-none me-1 mb-2 py-2 px-3"
              >khuyến mãi</a
            >
            <a
              href="#"
              class="badge rounded-pill bg-light text-secondary text-decoration-none me-1 mb-2 py-2 px-3"
              >Golden Gains</a
            >

            <a
              href="#"
              class="badge rounded-pill bg-light text-secondary text-decoration-none me-1 mb-2 py-2 px-3"
              >ưu đãi</a
            >
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="bg-white rounded shadow-sm p-3 p-md-4 mb-4">
          <h3 class="mb-4">Các Bài Viết Liên Quan</h3>
          <div class="row">
            <div class="col-lg-3 d-flex">
              <div class="card flex-full">
                <img
                  src="https://file.hstatic.net/1000260990/article/huan_luyen_vien_tap_gym_rieng_8579ae5a241b423dafab42b6c54609a6.png"
                  class="card-img-top"
                  style="height: 180px; object-fit: cover"
                  alt="..."
                />
                <div class="card-body">
                  <h6 class="card-title">
                    Có Nên Thuê Huấn Luyện Viên Thể Hình (PT Gym) Riêng Khi Tập
                    Gym không ?
                  </h6>
                  <p class="card-text">
                    <small
                      >Tìm hiểu lợi ích và nhược điểm khi thuê huấn luyện viên
                      cá nhân (PT) tại phòng gym, giúp bạn đạt hiệu quả tập
                      luyện tối đa, giảm nguy cơ chấn thương và xây dựng kế
                      hoạch phù hợp với mục tiêu sức khỏe của bản thân.</small
                    >
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 d-flex">
              <div class="card flex-full">
                <img
                  src="https://impulsefit.vn/wp-content/uploads/2020/07/T%C6%AFNG-B%E1%BB%AANG-KHAI-TR%C6%AF%C6%A0NG-SHOWROOM-NG%C3%80Y-CONCEPT-SPORT-TUNG-KHUY%E1%BA%BEN-M%C3%83I-C%E1%BB%B0C-KH%E1%BB%A6NG.jpg"
                  class="card-img-top"
                  style="height: 180px; object-fit: cover"
                  alt="..."
                />
                <div class="card-body">
                  <h6 class="card-title">
                    Sự kiện khai trương hoành tráng của Golden Gains Gym – Khởi
                    đầu hành trình chinh phục giới hạn
                  </h6>
                  <p class="card-text">
                    <small
                      >Golden Gains Gym chính thức khai trương trong không khí
                      sôi nổi với hàng trăm khách mời tham dự...</small
                    >
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 d-flex">
              <div class="card flex-full">
                <img
                  src="https://i.pinimg.com/1200x/90/29/15/9029152d5d2f2202b4198d18c83d8e6a.jpg"
                  class="card-img-top"
                  style="height: 180px; object-fit: cover"
                  alt="..."
                />
                <div class="card-body">
                  <h6 class="card-title">
                    Độ Body, Bye Gầy đón Tết cùng Golden Gains Đà Nẵng
                  </h6>
                  <p class="card-text">
                    <small
                      >Giảm gầy tăng cân để độ body đẹp là một quá trình dài và
                      không hề dễ dàng. Việc này...</small
                    >
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 d-flex">
              <div class="card flex-full">
                <img
                  src="https://hdfitness.vn/wp-content/uploads/2024/03/giam-eo-sau-tet-1-min-768x482.jpg"
                  class="card-img-top"
                  style="height: 180px; object-fit: cover"
                  alt="..."
                />
                <div class="card-body">
                  <h6 class="card-title">
                    Mẹo giảm eo sau Tết nhanh chóng – Bỏ túi ngay
                  </h6>
                  <p class="card-text">
                    <small
                      >Sau kỳ nghỉ Tết, nhiều người thường gặp phải vấn đề tăng
                      cân và mất đi eo thon sau những ...</small
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  props: ["id_bai_viet"],
  data() {
    return {
      id_bai_viet: this.$route.params.id_bai_viet,
      chi_tiet_bai_viet: {},
    };
  },
  mounted() {
    this.loadChiTietBaiViet();
  },
  methods: {
    loadChiTietBaiViet() {
      var payload = {
        id: this.id_bai_viet,
      };
      axios
        .post(
          "http://127.0.0.1:8001/api/client/chi-tiet-bai-viet/get-data",
          payload
        )
        .then((res) => {
          if (res.data.status) {
            this.chi_tiet_bai_viet = res.data.data;
          } else {
            this.$toast.error(res.data.message);
            this.$router.push("/");
          }
        });
    },
  },
};
</script>
