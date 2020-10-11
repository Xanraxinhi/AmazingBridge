<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'name' => 'Viet Nam',
            'introduce' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam at blanditiis cupiditate deserunt dolorem est, exercitationem facilis inventore, iste maiores natus nisi nulla quisquam quo repellat sit suscipit tempore!'
        ]);

        DB::table('countries')->insert([
            'name' => 'Viet Nam',
            'introduce' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam at blanditiis cupiditate deserunt dolorem est, exercitationem facilis inventore, iste maiores natus nisi nulla quisquam quo repellat sit suscipit tempore!'
        ]);
//        Cầu Thuận Phước
        DB::table('parameters')->insert([
            'length' => 1856,
            'width' => 18,
            'hight' => 80,
            'pier' => 2,
            'type' => 'Cầu treo',
        ]);

        DB::table('bridges')->insert([
            'name' => 'Thuan Phuoc Bridge',
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.4237127943484!2d108.21866865095154!3d16.095367688810157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218119daf2849%3A0x5eb1ddfca189043e!2zVGh1YW4gUGh1b2MgQnJpZGdlLCBD4bqndSBUaHXhuq1uIFBoxrDhu5tjLCBO4bqhaSBIacOqbiDEkMO0bmcsIFPGoW4gVHLDoCwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1602248231569!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
            'introduce' => 'Cầu Thuận Phước là cây cầu treo dây võng hiện đại và dài nhất Việt Nam, được thiết kế với 2 trụ tháp cao 92 m, cách nhau 405 m, tĩnh không thông thuyền 27 m, kết cấu dầm hộp thép hợp kim suốt toàn bộ nhịp treo dài 650 m, được chế tạo bằng công nghệ dầm tăng cứng theo tiêu chuẩn quốc tế.',
            'parameter_id' => 1,
            'country_id' => 1
        ]);

        DB::table('photos')->insert([
            'path' => 'cauthuanphuoc.jpg',
            'bridge_id' => 1
        ]);
// End  Cầu Thuận Phước

// Cầu vàng
        DB::table('parameters')->insert([
            'length' => 148.6,
            'hight' => 1414,
            'pier' => 8,
            'type' => 'Gỗ, Inox mạ vàng',
            'builded' => 2018,
        ]);

        DB::table('bridges')->insert([
            'name' => 'Golden Bridge',
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.3558536402647!2d107.99437885095058!3d15.994980588872556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141f7c21d46cfc5%3A0x6571ac07781169a0!2sGolden%20Bridge!5e0!3m2!1sen!2s!4v1602308406642!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
            'introduce' => 'Cầu Vàng là tên một cây cầu bộ hành dài khoảng 150 m (khoảng 490 ft) tại khu nghỉ dưỡng Bà Nà. Nằm ở độ cao khoảng 1.400 m (so với mực nước biển) trên núi Bà Nà, cầu nối liền trạm cáp treo với các khu vườn khác của khu nghỉ dưỡng. Ở giữa cầu có hai bàn tay lớn được tạc từ đá.Cầu Vàng chính thức được khánh thành vào tháng 6 năm 2018. Công trình được thiết kế bởi Trung tâm Nghiên cứu thiết kế kiến trúc cảnh quan (TA Landscape Architecture), trực thuộc Trường Đại học Kiến trúc Thành phố Hồ Chí Minh'
        ]);


        DB::table('photos')->insert([
            'path' => 'cauvang.jpg',
            'bridge_id' => 2
        ]);
// End Cầu vàng


    }
}
