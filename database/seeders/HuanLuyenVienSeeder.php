<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HuanLuyenVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trainer = [
            [
                'email'                 => 'anhnguyen@goldengains.vn',
                'ho_va_ten'             => 'ANH NGUYỄN',
                'slug'                  => 'anh-nguyen',
                'password'              => '123456',
                'hinh_anh'              => 'https://theducbangtam.com.vn/dao-tao-hlv-phat-trien-chieu-cao/wp-content/uploads/2024/05/Personal-Trainer-scaled.jpg',
                'mo_ta_ngan'            => 'HLV Anh Nguyễn có hơn 8 năm kinh nghiệm trong lĩnh vực thể hình, dinh dưỡng. Anh luôn hướng dẫn học viên bằng phương pháp khoa học,
                                giúp họ đạt được thể hình lý tưởng và xây dựng lối sống khỏe mạnh, bền vững.',
                'gioi_thieu_chi_tiet'   => '<p>HLV Anh Nguyễn là một trong những huấn luyện viên giàu kinh nghiệm và tận tâm tại Golden Gains Gym – Đà Nẵng. Với hơn <b>8 năm hoạt động trong lĩnh vực thể hình, dinh dưỡng và phục hồi vận động,</b> anh đã đồng hành cùng hàng trăm học viên trên hành trình chinh phục sức khỏe và vóc dáng lý tưởng.
                Từng xuất phát từ con số 0, Anh Nguyễn hiểu sâu sắc giá trị của sự kiên trì và kỷ luật trong rèn luyện. Anh được vinh danh là <i>“Vô địch thể hình WWA khu vực miền Trung 2021” và “Huấn luyện viên hình thể tiêu biểu Golden Gains Gym 2023”</i> .
                Với phương pháp huấn luyện khoa học, chú trọng cá nhân hóa theo thể trạng từng học viên, Anh Nguyễn luôn hướng đến việc truyền cảm hứng, khơi dậy sức mạnh tiềm ẩn và giúp học viên đạt được sự cân bằng giữa thể chất – tinh thần – phong cách sống khỏe mạnh.</p>',
                'kinh_nghiem'           => '8 năm',
                'thanh_tich'            => 'Vô địch WWA Men’s Physique 2021 – Miền Trung
                                    <br> Huấn luyện hơn 250 học viên thành công
                                    <br> HLV tiêu biểu Golden Gains Gym 2023.',
                'chuyen_mon'            => 'Huấn luyện tăng cơ, giảm mỡ, cải thiện sức mạnh
                                    <br>
                                    Dinh dưỡng thể hình, meal plan và theo dõi chế độ ăn
                                    <br>
                                    Huấn luyện thi đấu hình thể chuyên nghiệp
                                    <br>
                                    Kỹ thuật nâng tạ an toàn & phục hồi cơ học.',
                'triet_ly'              => '<i>“Sức mạnh thực sự không nằm ở cơ bắp, mà ở ý chí vượt giới hạn của chính mình.”</i>',
                'so_dien_thoai'         => '0901533985',
                'tinh_trang'            => 1,
            ],
            [
                'email'            => 'hoangnam@goldengains.vn',
                'ho_va_ten'        => 'HOÀNG NAM',
                'slug'             => 'hoang-nam',
                'password'         => '123456',
                'hinh_anh'         => 'https://mbhfit.vn/wp-content/uploads/2019/05/huan-luyen-vien-the-hinh.jpg',
                'mo_ta_ngan'       => 'HLV Hoàng Nam là chuyên gia huấn luyện sức mạnh với hơn 6 năm kinh nghiệm trong lĩnh vực thể hình, dinh dưỡng và coaching 1:1.
                                Anh tập trung vào việc giúp học viên phát triển toàn diện về thể lực, tinh thần và duy trì phong độ lâu dài.',
                'gioi_thieu_chi_tiet' => '<p>HLV Hoàng Nam là huấn luyện viên thể hình với hơn <b>6 năm kinh nghiệm</b> trong lĩnh vực huấn luyện cá nhân, thể hình thẩm mỹ và dinh dưỡng thể thao.
                                    Anh bắt đầu tập luyện từ năm 2015 và nhận ra rằng gym không chỉ giúp khỏe mạnh mà còn mang đến sự tự tin, bản lĩnh và tinh thần kỷ luật.
                                    Với phong cách huấn luyện <b>nhiệt huyết – kỷ luật – khoa học</b>, anh luôn đồng hành cùng học viên trên hành trình thay đổi hình thể và tư duy sống tích cực.
                                    Anh từng được vinh danh <i>“Coach of the Year – Golden Gains Gym 2023”</i> và tham gia giải thể hình WWA khu vực miền Trung 2022.</p>',
                'kinh_nghiem'      => '6 năm',
                'thanh_tich'       => 'Top 6 Men’s Physique Đà Nẵng 2022
                            <br>Coach of the Year – Golden Gains Gym 2023
                            <br>Huấn luyện hơn 180 học viên đạt mục tiêu hình thể.',
                'chuyen_mon'       => 'Tăng cơ, giảm mỡ, siết dáng nhanh và bền vững
                            <br>Dinh dưỡng thể hình & chế độ ăn linh hoạt (Flexible Dieting)
                            <br>Coaching 1:1 & huấn luyện online
                            <br>Kỹ thuật tập compound và isolation nâng cao.',
                'triet_ly'         => '<i>“Kỷ luật là cây cầu nối giữa mục tiêu và thành tựu.”</i>',
                'so_dien_thoai'    => '0902345678',
                'tinh_trang'       => 1,
            ],
            [
                'email'            => 'quocanh@goldengains.vn',
                'ho_va_ten'        => 'QUỐC ANH',
                'slug'             => 'quoc-anh',
                'password'         => '123456',
                'hinh_anh'         => 'https://www.bodyfit.vn/uploads/contents/dich-vu-cho-thue-pt-gym-bodyfit_1608984685.jpg',
                'mo_ta_ngan'       => 'HLV Quốc Anh có hơn 7 năm kinh nghiệm trong huấn luyện thể hình và phục hồi thể lực.
                                    Anh nổi bật với phong cách tận tâm, tràn đầy năng lượng và luôn đặt hiệu quả của học viên lên hàng đầu.',
                'gioi_thieu_chi_tiet' => '<p>HLV Quốc Anh là huấn luyện viên thể hình chuyên nghiệp với hơn <b>7 năm kinh nghiệm</b> trong lĩnh vực huấn luyện cá nhân và phục hồi thể lực.
                                    Anh từng đạt danh hiệu <i>“VĐV hình thể phong trào Đà Nẵng 2020”</i> và là một trong những HLV tiêu biểu của Golden Gains Gym năm 2024.
                                    Với triết lý huấn luyện “Tập đúng hơn là tập nhiều”, anh luôn hướng dẫn học viên hiểu rõ cơ thể mình, tập luyện an toàn và hiệu quả.
                                    Anh tin rằng thể hình không chỉ là sức mạnh cơ bắp, mà còn là hành trình rèn luyện tinh thần và ý chí kiên trì.</p>',
                'kinh_nghiem'      => '7 năm',
                'thanh_tich'       => 'VĐV hình thể phong trào Đà Nẵng 2020
                            <br>Huấn luyện hơn 200 học viên đạt hình thể mong muốn
                            <br>HLV tiêu biểu – Golden Gains Gym 2024.',
                'chuyen_mon'       => 'Tăng cơ, giảm mỡ, cải thiện sức mạnh tổng thể
                            <br>Dinh dưỡng thể hình & chế độ ăn khoa học
                            <br>Phục hồi sau chấn thương cơ – xương – khớp
                            <br>Kỹ thuật tập luyện cho người mới bắt đầu đến nâng cao.',
                'triet_ly'         => '<i>“Cơ thể bạn phản ánh nỗ lực của chính bạn. Hãy để mỗi buổi tập là một bước tiến gần hơn đến mục tiêu.”</i>',
                'so_dien_thoai'    => '0903456789',
                'tinh_trang'       => 1,
            ],
            [
                'email'            => 'halinh@goldengains.vn',
                'slug'             => 'tran-ha-linh',
                'ho_va_ten'        => 'TRẦN HÀ LINH',
                'hinh_anh'         => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg1L-DlaP5l2LqISqbJJv7UEBxOsFx8RWCdBe8pTwg-y51EgJ7y9s35w3F4tNNz4L3YNM&usqp=CAU',
                'password'         => '123456',
                'mo_ta_ngan'       => 'HLV Trần Hà Linh có hơn 6 năm kinh nghiệm trong huấn luyện thể hình và dinh dưỡng cho nữ giới.
                Cô hướng dẫn học viên rèn luyện an toàn, khoa học, giúp phái đẹp tự tin hơn với vóc dáng và sức khỏe của chính mình.',
                'gioi_thieu_chi_tiet' => '<p>HLV Trần Hà Linh là huấn luyện viên thể hình với hơn <b>6 năm kinh nghiệm</b> trong lĩnh vực fitness, dinh dưỡng và rèn luyện hình thể nữ giới.
                                Cô từng đạt danh hiệu <i>“Hình thể nữ xuất sắc Golden Gains Gym 2023”</i> và Top 5 Fitness Model Đà Nẵng 2022.
                                Với phương châm “Đẹp lành mạnh – Khỏe từ bên trong”, cô luôn hướng dẫn học viên tập luyện an toàn, bền vững và phù hợp thể trạng từng người.</p>',
                'kinh_nghiem'      => '6 năm',
                'thanh_tich'       => 'Hình thể nữ xuất sắc – Golden Gains Gym 2023
                            <br>Top 5 Fitness Model Đà Nẵng 2022
                            <br>Huấn luyện hơn 180 học viên nữ đạt vóc dáng lý tưởng.',
                'chuyen_mon'       => 'Giảm mỡ, săn chắc và định hình vóc dáng nữ
                            <br>Dinh dưỡng thể hình và kiểm soát cân nặng
                            <br>Huấn luyện sức mạnh, cải thiện tư thế và dáng đứng
                            <br>Coaching online & meal plan cho học viên nữ.',
                'triet_ly'         => '<i>“Cơ thể đẹp là phần thưởng của sự kiên trì, không phải của may mắn.”</i>',
                'so_dien_thoai'    => '0904567890',
                'tinh_trang'       => 1,
            ],
            [
                'email'                 => 'thaonhi@goldengains.vn',
                'ho_va_ten'             => 'THẢO NHI',
                'slug'                  => 'thao-nhi',
                'password'              => '123456',
                'hinh_anh'              => 'https://cdn.pixabay.com/photo/2020/04/14/17/27/yoga 5043031_1280.jpg',
                'mo_ta_ngan'            => 'HLV Thảo Nhi có hơn 6 năm kinh nghiệm trong giảng dạy Hatha Yoga, Vinyasa Flow và Yoga phục hồi cho nữ giới.
                            Cô hướng dẫn học viên theo phong cách nhẹ nhàng, an toàn, giúp họ tìm lại sự linh hoạt và bình an nội tâm.',
                'gioi_thieu_chi_tiet'   => '<p>HLV Thảo Nhi là huấn luyện viên Yoga chuyên nghiệp tại Bloom Yoga Studio – Đà Nẵng, với hơn <b>6 năm kinh nghiệm trong lĩnh vực Yoga và chăm sóc sức khỏe tinh thần.</b>
                                         Cô từng hoàn thành khóa đào tạo <b>RYT 500 – Yoga Alliance International</b> và tu nghiệp tại Ấn Độ năm 2022.
                                         Với phong cách hướng dẫn nhẹ nhàng, tập trung vào hơi thở và cảm nhận cơ thể, Thảo Nhi giúp học viên đạt được sự cân bằng giữa sức khỏe, vóc dáng và tinh thần.
                                         Cô tin rằng “Mỗi hơi thở là một phép màu” và luôn đồng hành cùng học viên trên hành trình trở về với chính mình.</p>',
                'kinh_nghiem'           => '6 năm',
                'thanh_tich'            => 'Chứng nhận RYT 500 – Yoga Alliance International (India)
                            <br> Huấn luyện hơn 200 học viên nữ duy trì tập luyện lâu dài
                            <br> Top 5 HLV Yoga được yêu thích nhất Đà Nẵng 2023 (YogaLife Magazine).',
                'chuyen_mon'            => 'Hatha Yoga & Vinyasa Flow cho người mới bắt đầu
                            <br>
                            Yoga phục hồi & Yoga sau sinh
                            <br>
                            Pranayama và thiền cơ bản
                            <br>
                            Dinh dưỡng và cân bằng nội tiết nữ giới.',
                'triet_ly'              => '<i>“Yoga không chỉ giúp bạn dẻo hơn, mà giúp bạn yêu thương bản thân hơn.”</i>',
                'so_dien_thoai'         => '0905123987',
                'tinh_trang'            => 1,
            ],
            [
                'email'                 => 'dieuanh@goldengains.vn',
                'ho_va_ten'             => 'DIỆU ANH',
                'slug'                  => 'dieu-anh',
                'password'              => '123456',
                'hinh_anh'              => 'https://cdn.pixabay.com/photo/2016/11/29/03/53/adult-1867743_1280.jpg',
                'mo_ta_ngan'            => 'HLV Diệu Anh là chuyên gia Yoga trị liệu với hơn 8 năm kinh nghiệm,
                            chuyên về Yin Yoga, Yoga Therapy và thiền chánh niệm, giúp học viên tìm lại sự cân bằng và bình an từ bên trong.',
                'gioi_thieu_chi_tiet'   => '<p>HLV Diệu Anh là huấn luyện viên Yoga trị liệu tại Inner Light Yoga Center – Hội An,
                                         với hơn <b>8 năm giảng dạy và nghiên cứu về Yoga Therapy, Yin Yoga và Mindfulness Meditation.</b>
                                         Cô từng học và thực hành tại <b>S-VYASA Yoga University (Bangalore, Ấn Độ)</b>, đồng thời là cộng tác viên giảng dạy cho các khóa đào tạo giáo viên RYT200.
                                         Phong cách của Diệu Anh sâu, chậm và hướng nội, tập trung vào việc chữa lành và phục hồi năng lượng.
                                         Cô tin rằng “Yoga là hành trình quay về bên trong – nơi bạn đã đủ đầy và bình an.”</p>',
                'kinh_nghiem'           => '8 năm',
                'thanh_tich'            => 'Chứng nhận RYT 500 – Yoga Alliance (Hoa Kỳ)
                            <br> Diễn giả tại Vietnam Yoga & Wellness Expo 2024
                            <br> Đào tạo hơn 300 học viên và 40 giáo viên Yoga tại miền Trung
                            <br> Top 3 HLV Yoga trị liệu được đánh giá cao nhất khu vực miền Trung 2023.',
                'chuyen_mon'            => 'Yoga trị liệu cho người đau lưng, cổ vai gáy & stress
                            <br>
                            Yin Yoga và Restorative Yoga
                            <br>
                            Thiền chánh niệm và hơi thở phục hồi năng lượng
                            <br>
                            Workshop “Healing through Yoga” cho doanh nghiệp và cộng đồng.',
                'triet_ly'              => '<i>“Yoga là con đường quay về bên trong – nơi bạn đã đủ đầy và bình an.”</i>',
                'so_dien_thoai'         => '0907889246',
                'tinh_trang'            => 1,
            ],

        ];
        DB::table('huan_luyen_viens')->truncate();
        DB::table('huan_luyen_viens')->delete();
        DB::table('huan_luyen_viens')->insert($trainer);
    }
}
