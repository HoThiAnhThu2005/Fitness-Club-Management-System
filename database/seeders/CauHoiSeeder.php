<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CauHoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cau_hoi = [
            [
                'tieu_de'    => 'Bạn cảm nhận thế nào về tầm nhìn “Mang lại sức mạnh vàng cho cuộc sống” của Golden Gains Gym?',
                'mo_ta'      => 'Với sứ mệnh “Mang lại sức mạnh vàng cho cuộc sống”, Golden Gains Gym hướng tới việc giúp mọi
                            người — từ người mới bắt đầu đến vận động viên chuyên nghiệp — đạt được mục tiêu thể hình,
                            sức khỏe và phong cách sống tích cực nhất.',
                'loai_trang' => 'home',
                'tinh_trang' => 1,
            ],
            [
                'tieu_de'    => 'Lý do nào khiến khách hàng chọn Golden Gains Gym?',
                'mo_ta'      => 'Không gian hiện đại, thiết bị chuẩn quốc tế, HLV tận tâm, chương trình cá nhân hóa và giá hợp lý.',
                'loai_trang' => 'home',
                'tinh_trang' => 1,
            ],
            [
                'tieu_de'    => 'Theo bạn, yếu tố nào khiến Golden Gains Gym khác biệt so với các phòng tập khác?',
                'mo_ta'      => 'Golden Gains Gym khác biệt ở sự kết hợp giữa không gian hiện đại, thiết bị đạt chuẩn quốc tế và đội ngũ huấn luyện viên tận tâm,
                                chuyên nghiệp. Ngoài ra, chương trình tập luyện cá nhân hóa và môi trường năng động, truyền cảm hứng cũng tạo nên điểm nổi bật riêng.',
                'loai_trang' => 'home',
                'tinh_trang' => 1,
            ],
            [
                'tieu_de'    => 'Golden Gains Gym xây dựng hoạt động dựa trên những giá trị nào?',
                'mo_ta'      => 'Chất lượng – Tận tâm – Kỷ luật – Truyền cảm hứng – Cộng đồng.',
                'loai_trang' => 'home',
                'tinh_trang' => 1,
            ],
            [
                'tieu_de'    => 'Giá trị nào được thể hiện rõ nhất trong dịch vụ?',
                'mo_ta'      => 'Tận tâm và truyền cảm hứng – luôn đồng hành cùng học viên trên hành trình rèn luyện.',
                'loai_trang' => 'home',
                'tinh_trang' => 1,
            ],
            [
                'tieu_de'    => 'Đội ngũ HLV tại Golden Gains Gym có gì đặc biệt?',
                'mo_ta'      => 'Có chứng chỉ quốc tế, nhiều năm kinh nghiệm, tận tâm và am hiểu dinh dưỡng.',
                'loai_trang' => 'home',
                'tinh_trang' => 1,
            ],
             [
                'tieu_de'    => 'Tôi đang tập các bộ môn khác thì có tập Yoga được không?',
                'mo_ta'      => 'Khi kết hợp Yoga cùng các bộ môn khác, bạn sẽ cảm nhận sự khác biệt rõ rệt. Yoga giúp kéo giãn cơ, phục hồi nhanh hơn sau những buổi tập cường độ cao và tăng
                                độ linh hoạt cho khớp, giảm thiểu nguy cơ chấn thương. Không chỉ vậy, Yoga còn rèn luyện cho bạn thói quen hít thở sâu, kiểm soát cơ thể tốt hơn và nuôi dưỡng
                                lối sống lành mạnh, cân bằng giữa thể chất và tinh thần.',
                'loai_trang' => 'yoga',
                'tinh_trang' => 1,
            ],
            [
                'tieu_de'    => 'Yoga có dành cho nam giới không?',
                'mo_ta'      => 'Ngày càng nhiều quý ông lựa chọn Yoga để nâng cao sức khỏe và tinh thần thay vì chỉ tập gym. Bộ môn này giúp giảm căng thẳng, cải thiện giấc ngủ và tăng hiệu suất
                                làm việc. Yoga còn giúp kiểm soát thói quen không lành mạnh như bia rượu, thuốc lá. Đặc biệt, Yoga rèn luyện sự kỷ luật và tập trung, mang lại phong thái tự tin và
                                cân bằng. Hãy trải nghiệm và cảm nhận sự thay đổi tích cực mà Yoga mang lại cho bạn tại Golden Gains.',
                'loai_trang' => 'yoga',
                'tinh_trang' => 1,
            ],
            [
                'tieu_de'    => 'Các bài tập Yoga khá nhẹ nhàng có giúp giảm cân không?',
                'mo_ta'      => 'Nếu bạn muốn giảm cân nhẹ nhàng và bền vững, Yoga là lựa chọn lý tưởng. Các bài tập Yoga giúp tăng cường trao đổi chất, đốt cháy năng lượng hiệu quả,
                                và giảm căng thẳng – nguyên nhân chính gây tăng cân. Tập luyện đều đặn còn giúp bạn lắng nghe cơ thể và hình thành thói quen sống lành mạnh hơn mỗi ngày.',
                'loai_trang' => 'yoga',
                'tinh_trang' => 1,
            ],
            [
                'tieu_de'    => 'Tôi nên luyện tập Yoga thời gian nào để đạt hiệu quả tốt nhất?',
                'mo_ta'      => 'Buổi sáng sớm và tối muộn là hai thời điểm lý tưởng để tập Yoga. Buổi sáng giúp khởi động năng lượng và tinh thần tích cực, còn buổi tối giúp giải tỏa
                            căng thẳng, thư giãn cơ thể sau một ngày dài. Với người mới bắt đầu, chỉ cần 2–3 buổi mỗi tuần là đủ để cơ thể làm quen và cảm nhận hiệu quả rõ rệt.',
                'loai_trang' => 'yoga',
                'tinh_trang' => 1,
            ],
            

        ];
        DB::table('cau_hois')->truncate();
        DB::table('cau_hois')->delete();
        DB::table('cau_hois')->insert($cau_hoi);
    }
}
