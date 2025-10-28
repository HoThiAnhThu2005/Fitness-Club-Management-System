<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BaiVietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bai_viet = [
            [
                'tieu_de'       => 'Ngồi Nhiều Cũng Nguy Hiểm Như Hút Thuốc - Cảnh Báo Cho Dân Văn Phòng',
                'mo_ta_ngan'    => 'Dân văn phòng dành phần lớn thời gian trong ngày để ngồi làm
                            việc, nhưng ít ai nhận ra rằng ngồi sai tư thế và ít vận động chính là nguyên nhân hàng đầu
                            gây đau mỏi cổ vai gáy, đau lưng mãn tính và giảm hiệu suất làm việc.',
                'noi_dung'      =>
                '<ul>
            <li>
            <strong>Ngồi sai tư thế – Nguyên nhân hàng đầu gây đau mỏi cổ vai gáy và cột sống</strong>
            <br>
            Dân văn phòng dành phần lớn thời gian trong ngày để ngồi làm việc, nhưng ít ai nhận ra rằng ngồi sai tư thế và ít vận động chính là nguyên nhân hàng đầu gây đau mỏi cổ vai gáy, đau lưng mãn tính và giảm hiệu suất làm việc.
            <p><p>
            Bạn đã bao giờ gặp tình trạng đau lưng, đau cổ vai gáy, tê bì chân tay sau một ngày dài ngồi trước màn hình máy tính chưa? Hay có những buổi chiều làm việc mà đầu óc trở nên mệt mỏi, mất tập trung dù không có quá nhiều áp lực? Nếu có, rất có thể việc ngồi lâu đang âm thầm ảnh hưởng đến sức khỏe của bạn.
            </li>

            <li>
            <strong>Ngồi nhiều ảnh hưởng đến sức khỏe như thế nào?</strong>
            <br>
            Nhiều nghiên cứu đã chỉ ra rằng việc ngồi lâu không khác gì hút thuốc về mức độ nguy hại cho sức khỏe. Ngồi liên tục trong thời gian dài mà không có sự điều chỉnh phù hợp sẽ gây ra hàng loạt vấn đề, bao gồm:
            <p>- Làm chậm tuần hoàn máu, giảm oxy lên não, khiến bạn đau đầu, chóng mặt và khó tập trung.</p>
            <p>- Gây mất cân bằng cơ bắp, dẫn đến đau mỏi cổ vai gáy, đau lưng mãn tính và cứng khớp.</p>
            <p>- Tăng áp lực lên cột sống, làm tăng nguy cơ thoái hóa đốt sống cổ, thoát vị đĩa đệm và các bệnh lý xương khớp.</p>
            <p>- Giảm hiệu suất làm việc, do cơ thể luôn trong trạng thái mệt mỏi, thiếu năng lượng.</p>
            <p></p>
            Đây là những vấn đề mà dân văn phòng gặp phải hàng ngày, nhưng thường bỏ qua hoặc chỉ tìm đến các liệu pháp thư giãn tạm thời như massage, gội đầu dưỡng sinh, chườm nóng.
             Tuy nhiên, những giải pháp này chỉ giúp giảm đau tạm thời, trong khi cơn đau sẽ quay lại nếu không điều chỉnh tư thế đúng và tập luyện phù hợp.
            </li>
            </ul>',
                'hinh_anh'      => 'https://cali.vn/storage/app/media/2025/Blog/Corrective%20Exercise/hut-thuoc.webp',
                'tinh_trang'    => 1,
            ],
            [
                'tieu_de'       => 'Sự kiện khai trương hoành tráng của Golden Gains Gym – Khởi đầu hành trình chinh phục giới hạn',
                'mo_ta_ngan'    => 'Golden Gains Gym chính thức khai trương trong không khí sôi nổi với hàng trăm khách mời tham dự, đánh dấu bước tiến mới trong hành trình mang đến không gian tập luyện chuyên nghiệp và hiện đại nhất cho cộng đồng yêu thể hình.',
                'noi_dung'      =>
                '<ul>
            <li>
            Ngày 15 tháng 10 năm 2025, Golden Gains Gym đã tổ chức lễ khai trương hoành tráng tại trung tâm thành phố, thu hút sự chú ý của đông đảo giới trẻ và những người yêu thích thể hình. Không gian sang trọng, hệ thống máy móc hiện đại cùng phong cách phục vụ chuyên nghiệp đã tạo nên dấu ấn mạnh mẽ ngay từ ngày đầu ra mắt.
            <br> //xuống dòng nhưng khoảng cách nhỏ. <p>: xuống dòng khoảng cách lớn
            Buổi lễ khai trương diễn ra với sự góp mặt của các huấn luyện viên giàu kinh nghiệm, khách mời đặc biệt trong giới fitness, cùng hàng loạt hoạt động giao lưu thú vị như thử thách thể lực, bốc thăm trúng thưởng và trải nghiệm miễn phí các gói tập thử.
            <p></p>
            <p>Đại diện Golden Gains Gym chia sẻ: <i>“Chúng tôi muốn tạo ra không chỉ là một phòng gym, mà là một cộng đồng – nơi mỗi người được truyền cảm hứng để trở nên mạnh mẽ và tự tin hơn mỗi ngày.”</i></p>
            Sự kiện khai trương không chỉ đánh dấu sự ra đời của một phòng tập mới, mà còn khẳng định cam kết của Golden Gains Gym trong việc mang đến dịch vụ chất lượng, môi trường tập luyện chuyên nghiệp và thân thiện. Với cơ sở vật chất hiện đại và đội ngũ HLV tận tâm, Golden Gains Gym hứa hẹn sẽ trở thành điểm đến lý tưởng cho những ai mong muốn cải thiện sức khỏe và hình thể.
            </li>
            </ul>',
                'hinh_anh'      => 'https://impulsefit.vn/wp-content/uploads/2020/07/T%C6%AFNG-B%E1%BB%AANG-KHAI-TR%C6%AF%C6%A0NG-SHOWROOM-NG%C3%80Y-CONCEPT-SPORT-TUNG-KHUY%E1%BA%BEN-M%C3%83I-C%E1%BB%B0C-KH%E1%BB%A6NG.jpg',
                'tinh_trang'    => 1,
            ],
            [
                'tieu_de'       => 'Ra mắt máy tập SmartFit Pro và phương pháp huấn luyện 4D Training tại Golden Gains Gym',
                'mo_ta_ngan'    => 'Golden Gains Gym tiên phong ứng dụng công nghệ hiện đại trong tập luyện với dòng máy SmartFit Pro tích hợp AI và phương pháp 4D Training – giúp tối ưu hiệu quả, nâng cao sức mạnh và giảm thiểu chấn thương cho người tập.',
                'noi_dung'      =>
                '<ul>
        <li>
        Nhằm mang đến trải nghiệm tập luyện toàn diện hơn, Golden Gains Gym vừa chính thức giới thiệu dòng máy SmartFit Pro  cùng phương pháp huấn luyện 4D Training độc quyền. Đây là bước tiến quan trọng trong việc kết hợp công nghệ và thể hình hiện đại tại Việt Nam.
        <br>
        Máy SmartFit Pro được trang bị hệ thống cảm biến thông minh, có khả năng theo dõi chuyển động, điều chỉnh mức tạ tự động và đưa ra cảnh báo khi người tập sai tư thế. Tất cả dữ liệu được đồng bộ qua ứng dụng di động, giúp người tập kiểm soát tiến trình,  theo dõi lượng calo và lên kế hoạch rèn luyện cá nhân hóa.
        <p></p>
        Song song, phương pháp 4D Training được nghiên cứu bởi đội ngũ chuyên gia của Golden Gains Gym, kết hợp bốn yếu tố: sức mạnh – sức bền – linh hoạt – phục hồi.  Phương pháp này không chỉ cải thiện thể hình mà còn giúp người tập duy trì năng lượng, giảm đau nhức và tăng hiệu quả trong thời gian ngắn.
        <p></p>
        Sự kiện ra mắt đã nhận được phản hồi tích cực từ cộng đồng hội viên.  Nhiều người bày tỏ sự hứng khởi khi lần đầu được trải nghiệm công nghệ hỗ trợ AI trong tập luyện – một bước tiến lớn giúp thay đổi tư duy rèn luyện truyền thống.
        </li>
    </ul>',
                'hinh_anh'      => 'https://okusaki.com/uploads/images/co-nen-mua-may-chay-bo-dien-da-nang-o-nha-3.jpg',
                'tinh_trang'    => 1,
            ],
            [
                'tieu_de'      => 'Golden Tips – Những bí quyết dinh dưỡng và tập luyện giúp bạn đạt hiệu quả tối đa',
                'mo_ta_ngan'   => 'Chuỗi bài viết “Golden Tips” của Golden Gains Gym ra đời nhằm chia sẻ kiến thức về dinh dưỡng, tập luyện và lối sống khỏe mạnh, giúp hội viên tối ưu kết quả tập và duy trì năng lượng tích cực mỗi ngày.',
                'noi_dung'     => '<ul>
  <li>
    Trong hành trình chinh phục vóc dáng và sức khỏe lý tưởng, kiến thức đúng quan trọng không kém gì nỗ lực tập luyện.
    Hiểu được điều đó, Golden Gains Gym giới thiệu chuỗi bài viết “Golden Tips” – nơi bạn có thể tìm thấy những mẹo nhỏ
    nhưng có giá trị lớn về dinh dưỡng, kỹ thuật tập luyện và phục hồi cơ thể.
    <br>
    Ở số đầu tiên, Golden Gains Gym gửi đến bạn <strong>3 bí quyết đơn giản nhưng cực kỳ hiệu quả</strong> để nâng cao hiệu suất tập luyện hằng ngày:
  </li>
</ul>

<ol>
  <li>
    <strong>Ăn đúng thời điểm – Chìa khóa của năng lượng</strong><br>
    Trước buổi tập 60–90 phút, hãy bổ sung bữa nhẹ giàu carb và protein như yến mạch, chuối hoặc sữa chua Hy Lạp.
    Sau buổi tập, bữa ăn phục hồi với thịt gà, trứng, hoặc whey protein sẽ giúp cơ bắp hấp thu dinh dưỡng nhanh hơn,
    giảm đau nhức và tăng khả năng tái tạo cơ.
  </li>

  <li>
    <strong>Kết hợp bài tập đúng nhóm cơ – Tránh quá tải</strong><br>
    Nhiều người có thói quen tập nặng liên tục mà không để cơ nghỉ ngơi.
    Bí quyết là chia buổi tập theo nhóm cơ: ví dụ, thứ Hai tập ngực – tay sau,
    thứ Ba tập lưng – tay trước, thứ Tư tập chân, v.v.
    Việc này giúp cơ thể có thời gian phục hồi và phát triển đồng đều.
  </li>

  <li>
    <strong>Ngủ đủ giấc – Bí mật của tăng cơ và đốt mỡ</strong><br>
    Giấc ngủ là “vũ khí” tự nhiên mà nhiều người bỏ qua.
    Khi ngủ, cơ thể tiết ra hormone tăng trưởng giúp phục hồi và phát triển cơ bắp.
    Thiếu ngủ có thể làm giảm hiệu quả tập đến 30%.
    Hãy duy trì 7–8 tiếng ngủ sâu mỗi đêm để cơ thể luôn sẵn sàng cho buổi tập tiếp theo.
  </li>
</ol>

<p>
  Bên cạnh đó, Golden Gains Gym cũng khuyến khích hội viên uống đủ nước, khởi động kỹ và giữ tinh thần tích cực trong mỗi buổi tập.
  Chúng tôi tin rằng thành công không đến từ sự hoàn hảo trong một ngày, mà từ sự kiên trì từng bước nhỏ mỗi ngày.
</p>

<p>
  Chuỗi “Golden Tips” sẽ được đăng định kỳ hàng tuần trên website và fanpage chính thức của Golden Gains Gym,
  với nhiều chủ đề hấp dẫn như:
</p>

<ul>
  <li>Cách chọn thực phẩm phù hợp với mục tiêu tập luyện</li>
  <li>Phục hồi cơ thể sau buổi tập nặng</li>
  <li>Mẹo tập luyện hiệu quả cho người bận rộn</li>
  <li>Dinh dưỡng thông minh cho gymer</li>
</ul>

<p>
  Theo dõi Golden Gains Gym để không bỏ lỡ những bí quyết vàng giúp bạn đạt phong độ tốt nhất –
  <strong>bên ngoài mạnh mẽ, bên trong khỏe mạnh.</strong>
</p>',
                'hinh_anh'     => 'https://bizweb.dktcdn.net/100/517/390/files/huong-dan-cach-xay-dung-thuc-don-cho-nguoi-tap-gym-chi-tiet-info-3.jpg?v=1724214970531',
                'tinh_trang'   => 1,
            ],
            [
                'tieu_de'    => 'Khám phá Body Scan System – Công nghệ quét cơ thể 3D giúp cá nhân hóa lộ trình tập luyện',
                'mo_ta_ngan' => 'Golden Gains Gym chính thức đưa vào hoạt động Body Scan System – máy quét cơ thể 3D hiện đại, giúp phân tích chính xác tỷ lệ mỡ, cơ, nước và xây dựng lộ trình dinh dưỡng – tập luyện cá nhân hóa cho từng hội viên.',
                'noi_dung'   => '<ul>
        <li>
            Trong thời đại mà công nghệ và thể hình song hành, Golden Gains Gym tự hào giới thiệu <strong>Body Scan System</strong> – hệ thống quét cơ thể 3D hiện đại bậc nhất hiện nay.
            Với công nghệ cảm biến tiên tiến, Body Scan System giúp người tập hiểu rõ cơ thể mình hơn bao giờ hết, từ đó tối ưu hiệu quả tập luyện và đạt được mục tiêu nhanh chóng hơn.
        </li>
            </ul>

            <ol>
        <li>
            <strong>Phân tích toàn diện – chính xác đến từng chi tiết</strong><br>
            Chỉ trong vòng vài phút, máy quét Body Scan 3D sẽ cung cấp bản đồ chi tiết về tỷ lệ mỡ, cơ, nước và khối lượng xương trên từng vùng cơ thể.
            Không chỉ là những con số khô khan, kết quả được thể hiện trực quan bằng mô hình 3D sinh động, giúp bạn dễ dàng quan sát sự thay đổi qua từng giai đoạn tập luyện.
        </li>

        <li>
            <strong>Cá nhân hóa kế hoạch dinh dưỡng & bài tập</strong><br>
            Sau khi phân tích dữ liệu, hệ thống sẽ kết hợp cùng đội ngũ huấn luyện viên của Golden Gains Gym để thiết kế lộ trình tập luyện và thực đơn dinh dưỡng riêng cho từng người.
            Dù bạn muốn giảm mỡ, tăng cơ hay cải thiện sức bền, mọi kế hoạch đều được điều chỉnh phù hợp với thể trạng thực tế.
        </li>

        <li>
            <strong>Theo dõi tiến trình – đo lường kết quả rõ ràng</strong><br>
            Mỗi lần kiểm tra định kỳ, bạn sẽ nhận được báo cáo so sánh chi tiết, giúp dễ dàng đánh giá tiến độ và điều chỉnh chiến lược tập luyện.
            Đây chính là “trợ lý cá nhân” giúp bạn biến nỗ lực thành kết quả nhìn thấy được.
        </li>

        <li>
            <strong>Công nghệ cho lối sống khỏe – hiện đại – khoa học</strong><br>
            Body Scan System không chỉ dành cho vận động viên hay người tập chuyên nghiệp, mà còn phù hợp cho bất kỳ ai muốn hiểu rõ cơ thể và sống lành mạnh hơn.
        </li>
            </ol>

            <p>
        Với phương châm <strong>“Hiểu cơ thể – Tập đúng cách – Đạt mục tiêu”</strong>,
        Golden Gains Gym tin rằng mỗi buổi tập sẽ trở nên hiệu quả và ý nghĩa hơn khi bạn nắm rõ dữ liệu của chính mình.
            </p>

            <p>
        <strong>Trải nghiệm ngay tại Golden Gains Gym</strong><br>
        Body Scan System hiện đã được lắp đặt tại tất cả các chi nhánh của Golden Gains Gym.<br>
        Đến ngay để trải nghiệm quét 3D miễn phí trong tháng khai trương công nghệ mới,
        và bắt đầu hành trình tập luyện khoa học, hiệu quả cùng đội ngũ huấn luyện viên chuyên nghiệp của chúng tôi.
            </p>',
                'hinh_anh'    => 'https://3d-smartsolutions.com/wp-content/uploads/2025/08/thumb_04.-Quet-co-the-nguoi-1.jpg',
                'tinh_trang'  => 1,
            ],

        ];
        DB::table('bai_viets')->truncate();
        DB::table('bai_viets')->delete();
        DB::table('bai_viets')->insert($bai_viet);
    }
}
