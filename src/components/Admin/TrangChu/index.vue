<template>
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
        <div class="col">
            <div class="card radius-10 border-start border-0 border-3 border-info">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="text-wrap">
                            <p class="mb-0 text-secondary">Tổng doanh thu</p>
                            <h4 class="my-1  text-info"> 1.500.000 VNĐ</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto">
                            <i class="fa-solid fa-money-bills"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card radius-10 border-start border-0 border-3 border-danger">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class=" text-wrap">
                            <p class="mb-0 text-secondary">Tổng Phòng Tập</p>
                            <h4 class="my-1 text-danger"> 21</h4>

                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto">
                            <i class="fas fa-dumbbell"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-3 border-warning">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary" style="margin-right: 10;">Số hội viên đăng ký mới</p>
                            <h4 class="my-1 text-warning" style="margin-right: 10;">120</h4>
                        </div>

                        <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto">
                            <i class="fa-solid fa-users"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-3 border-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary" style="margin-right: 10;">Chi phí vận hành</p>
                            <h4 class="my-1 text-success" style="margin-right: 10;">10</h4>
                        </div>

                        <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto">
                            <i class="fa-solid fa-money-bill-trend-up"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- chart -->
    <div class="row mt-4 align-items-stretch">
        <div class="col-lg-8 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">

                    <div class="chart-container1 ">
                        <div style="overflow-x: auto;">
                            <canvas id="chart2" style="min-width: 500px;"></canvas>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header ">
                    <h6 class="mb-0 text-center">Thống kê mức độ hài lòng</h6>
                </div>
                <div class="card-body" style="position: relative;">
                    <div id="chart13" style="min-height: 350px;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 d-flex">
            <div class="card radius-10 border-top border-0 border-3 border-primary flex-fill">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>DỊCH VỤ</h4>
                            <div class="table-responsive">
                                <table class="table align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th class="text-center">Số lượng</th>
                                            <th class="text-nowrap text-center">
                                                <span class="d-inline-flex align-items-center">
                                                    Giá tiền
                                                    <i v-on:click="Tangdan()" class="fa-solid fa-sort ms-2"></i>
                                                </span>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <template v-for="(value, index) in productList" :key="index">
                                            <tr class="">
                                                <td>{{ value.name }}</td>
                                                <td class="text-danger text-center">{{ value.soluong }}</td>
                                                <td class="text-center">
                                                    {{ value.giatien }}₫
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
        </div>
        <div class="col-lg-6 d-flex">

        </div>
    </div>
</template>
<script>
import ApexCharts from 'apexcharts'
import { Chart } from 'chart.js/auto'

export default {
    data() {
        return {
            product: {
                name: "",
                soluong: "",
                giatien: "",
            },
            productList: [
                { name: "Bình giữ nhiệt GOZEN 592ml", soluong: "00", giatien: "600.000" },
                { name: "Whey Protein", soluong: "00", giatien: "900.000" },
                { name: "Pre-Workout", soluong: "00", giatien: "1.110.000" },
                { name: "Harbinger Big Grip No-Slip Pro Lifting Straps", soluong: "00", giatien: "510.000" },
                { name: "Quấn Cổ Tay Harbinger Red Line Wristwraps 18 Inch Flag", soluong: "00", giatien: "430.000" },
            ],
        };
    },
    mounted() {
        const options1 = {
            series: [58, 65, 76, 87],
            chart: { type: 'radialBar', height: 350 },
            labels: ['Trung bình đánh giá', 'Phản hồi tích cực', 'Tỷ lệ hài lòng', 'Số lượng đánh giá']
        };
        const chart1 = new ApexCharts(document.querySelector("#chart13"), options1);
        chart1.render();

        // Chart thống kê chi tiêu
        const ctx = document.getElementById('chart2').getContext('2d');
        const data = {
            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
            datasets: [
                {
                    label: 'Doanh thu (VNĐ)',
                    data: [290000000, 330000000, 89500000, 176000000, 160000000, 248000000, 127000000, 250000000, 300000000, 150000000, 70000000, 120000000],
                    backgroundColor: '#36a2eb',
                    borderRadius: 6
                },
                {
                    label: 'Chi phí vận hành (VNĐ)',
                    data: [85000000, 130000000, 45000000, 70000000, 90000000, 60000000, 45000000, 120000000, 100000000, 70000000, 38000000, 57000000],
                    backgroundColor: '#ff6384',
                    borderRadius: 6
                }
            ]
        };

        const options = {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: { font: { size: 12 } }
                },
                title: {
                    display: true,
                    text: 'Thống kê doanh thu & chi phí theo tháng',
                    font: { size: 14 }
                }
            },
            scales: {
                x: {
                    grid: {
                        display: false
                    },
                    barPercentage: 0.4,
                    categoryPercentage: 0.3,
                    ticks: {
                        autoSkip: false,
                        maxRotation: 0,
                        minRotation: 0,
                        font: { size: 12 }
                    }
                },
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: value => value.toLocaleString('vi-VN')
                    }
                }
            }
        };


        new Chart(ctx, { type: 'bar', data, options });
    },
    methods: {
        Tangdan() {
            this.productList.sort((a, b) => a.giatien.localeCompare(b.giatien));
        },

    },
}

</script>
<style></style>