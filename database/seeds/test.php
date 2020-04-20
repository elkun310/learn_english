<?php

use Illuminate\Database\Seeder;

class test extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test')->delete();
        DB::table('test')->insert([
            [
                'id'                =>  1,
                'nametest'          =>  'Dear Mrs. Stern,',
                'image'             =>  'passage_936a.png',
                'content'           =>  '<p>I just wanted to say thank you for a great year. I learned so much in the third grade. I was very fortunate to have you as a teacher. You were my favorite teacher ever! My favorite part of the school year was when we learned about dinosaurs. I also liked learning about the sun, earth, and our solar system. Maybe I will be a scientist when I grow up! If I do, it will be because of all the things you taught me.</p><p>&nbsp;</p><p>Thanks again,</p><p>Evan</p>',
                'content_tiengviet' =>  '<p>Tôi chỉ muốn nói lời cảm ơn cho một năm tuyệt vời. Tôi đã học được rất nhiều ở lớp ba. Tôi đã rất may mắn khi có bạn là một giáo viên. Bạn là giáo viên yêu thích của tôi từng! Phần yêu thích của tôi trong năm học là khi chúng tôi biết về khủng long. Tôi cũng thích tìm hiểu về mặt trời, trái đất và hệ mặt trời của chúng ta. Có lẽ tôi sẽ là một nhà khoa học khi tôi lớn lên! Nếu tôi làm, đó sẽ là vì tất cả những điều bạn dạy tôi.</p><p>&nbsp;</p><p>Cảm ơn một lần nữa,</p><p>Evan</p>',
                'idcategory'        =>  4,
                'idlevel'           => 1

            ],
            [
                'id'                =>  2,
                'nametest'          =>  'The Nursery',
                'image'             =>  'passage_1263a.png',
                'content'           =>  "<p>Mark works at a nursery. But he doesn't take care of babies. He is responsible for the growth and health of plants.</p><p>Mark follows a watering schedule. He waters some plants everyday. He waters some plants once a week. And he waters some once a month. Plants are very sensitive to water. Water helps plants grow. But when plants get too much water, their roots rot. And when they don’t get enough water, their leaves crumple and die.</p><p>Mark lets the plants absorb water at their own rate. He never pours water directly on the soil. He pours water in basins. The basins sit beneath the plants. The basins have flat bottoms like plates. But they have high sides like bowls. The plants can draw water from the basins. They only draw water when they need it.</p><p>As Mark waters, he examines the plants. He looks for decaying roots and leaves. When he finds some, he knows the plants are sick. To prevent them from getting worse, he follows several steps.</p><p>Step one is to repot the plants with rotting roots. Repotting is easy. First, Mark takes the plant out of its pot. Then he puts the plant in a new pot. Finally, he adds sandy soil. The sand in the soil keeps the roots dry. Then the plants recover.</p><p>Step two is to look for dead leaves. When Mark finds some, he removes them carefully. That reduces the plants’ risk of getting sick again. Delicate plants are more likely to get diseases and attract bugs.</p><p>Step three is to spray the healthy leaves with soapy water. Bugs don’t like soapy water. It kills them!</p><p>Mark performs his tasks carefully. He likes to practice his gardening skills. His ambition is to own his own nursery someday.</p>",
                'content_tiengviet' =>  '<p>Mark làm việc tại một vườn ươm. Nhưng anh không chăm sóc em bé. Ông chịu trách nhiệm cho sự phát triển và sức khỏe của cây.</p><p>Mark tuân theo lịch tưới nước. Ông tưới một số cây hàng ngày. Ông tưới một số cây mỗi tuần một lần. Và anh ta tưới nước mỗi tháng một lần. Cây rất nhạy cảm với nước. Nước giúp cây phát triển. Nhưng khi cây lấy quá nhiều nước, rễ của chúng bị thối. Và khi chúng không nhận đủ nước, lá của chúng sẽ vò nát và chết.</p><p>Mark cho phép cây hấp thụ nước theo tỷ lệ của chúng. Ông không bao giờ đổ nước trực tiếp lên đất. Anh đổ nước vào chậu. Các lưu vực ngồi bên dưới các nhà máy. Các lưu vực có đáy phẳng như tấm. Nhưng họ có những mặt cao như bát. Cây có thể hút nước từ lưu vực. Họ chỉ múc nước khi họ cần.</p><p> Khi nước Mark, anh ta kiểm tra cây. Ông tìm kiếm rễ và lá mục nát. Khi anh ta tìm thấy một số, anh ta biết cây bị bệnh. Để ngăn chặn chúng trở nên tồi tệ hơn, anh ta làm theo một số bước.</p><p> Bước một là repot cây với rễ thối. Thay chậu rất dễ. Đầu tiên, Mark lấy cây ra khỏi chậu của nó. Sau đó, ông đặt cây vào một cái chậu mới. Cuối cùng, anh thêm đất cát. Cát trong đất giữ cho rễ khô. Sau đó cây phục hồi.</p><p> Bước hai là tìm lá chết. Khi Mark tìm thấy một số, anh ấy loại bỏ chúng một cách cẩn thận. Điều đó làm giảm nguy cơ cây bị bệnh trở lại. Cây tinh tế có nhiều khả năng bị bệnh và thu hút bọ.</p><p> Bước ba là phun lá khỏe mạnh bằng nước xà phòng. Bọ don don như nước xà phòng. Nó giết chết họ!</p><p> Mark thực hiện các nhiệm vụ của mình một cách cẩn thận. Anh ấy thích thực hành các kỹ năng làm vườn của mình. Tham vọng của anh ấy là sở hữu một vườn ươm của riêng mình một ngày nào đó.</p>',
                'idcategory'        =>  2,
                'idlevel'           => 1

            ],
            [
                'id'                =>  3,
                'nametest'          =>  'Quick Career',
                'image'             =>  'passage_1090a.png',
                'content'           =>  "<p><em>Jamal Sanders plays professional football. In this passage, a reporter asks him about his job.</em></p><p>&nbsp;</p><p><strong>Reporter:</strong> How long have you been a professional football player?</p><p>&nbsp;</p><p><strong>Jamal Sanders:</strong> Not long. Only about two years. But that's normal. Most of us only play for a few years. We have short careers. But we get paid a lot. So that helps.</p><p>&nbsp;</p><p><strong>Reporter:</strong> How did you get started?</p><p>&nbsp;</p><p><strong>Sanders:</strong> I started playing on a youth football team when I was 5 years old. I learned how to hold the ball. I learned how to run with the ball. I learned how to catch and throw. I learned how to tackle. I learned how to move quick.</p><p>&nbsp;</p><p><strong>Reporter:</strong> How do you stay safe on the job?</p><p>&nbsp;</p><p><strong>Sanders:</strong> Good question. I wear padding to protect my shoulders. I wear a helmet to protect my head. I know what to look for on the field. I know where to be. I also know where not to be. Staying safe is very important. If you are safe, you can have a longer career.</p><p>&nbsp;</p><p><strong>Reporter:</strong> What is your favorite thing about your job?</p><p>&nbsp;</p><p><strong>Sanders:</strong> Being healthy. I get to exercise every day. And I get to eat great food.</p><p>&nbsp;</p><p><strong>Reporter:</strong> Do you ever get tired?</p><p>&nbsp;</p><p><strong>Sanders:</strong> Definitely! Playing football is tiring. At the end of the day, I like to relax. I cook. I watch movies. I play video games.</p><p>&nbsp;</p><p><strong>Reporter:</strong> Do you have any advice for new players?</p><p>&nbsp;</p><p><strong>Sanders:</strong> Think quick. Move quick. Play smart.</p>",
                'content_tiengviet' =>  '<p><em>Jamal Sanders chơi bóng đá chuyên nghiệp. Trong đoạn văn này, một phóng viên hỏi anh ta về công việc của mình. </em></p><p>&nbsp;</p><p><strong> Phóng viên: </strong> Bạn đã là một cầu thủ bóng đá chuyên nghiệp được bao lâu ? </p><p>&nbsp;</p><p><strong> Jamal Sanders: </strong> Không lâu. Chỉ khoảng hai năm. Nhưng đó là bình thường. Hầu hết chúng ta chỉ chơi trong một vài năm. Chúng tôi có sự nghiệp ngắn. Nhưng chúng tôi được trả tiền rất nhiều. Vì vậy, điều đó có ích. </p><p>&nbsp;</p><p><strong> Phóng viên: </strong> Bạn đã bắt đầu như thế nào?</p><p>&nbsp;</p><p><strong> Sanders: </strong> Tôi bắt đầu chơi trong một đội bóng đá trẻ khi tôi 5 tuổi. Tôi đã học được cách cầm bóng. Tôi đã học cách chạy với quả bóng. Tôi học cách bắt và ném. Tôi đã học được cách giải quyết. Tôi đã học được cách di chuyển nhanh.</p><p>&nbsp;</p><p><strong> Phóng viên: </strong> Làm thế nào để bạn an toàn trong công việc? </p><p>&nbsp;</p><p><strong> Sanders: </strong> Câu hỏi hay. Tôi mặc đệm để bảo vệ vai của tôi. Tôi đội mũ bảo hiểm để bảo vệ đầu của tôi. Tôi biết những gì để tìm kiếm trên sân. Tôi biết nơi để được. Tôi cũng biết nơi không được. Giữ an toàn là rất quan trọng. Nếu bạn an toàn, bạn có thể có một sự nghiệp lâu hơn. </p><p>&nbsp;</p><p><strong>Phóng viên: </strong> Điều yêu thích của bạn về công việc là gì?</p><p>&nbsp;</p><p><strong>Sanders: </strong> Khỏe mạnh. Tôi được tập thể dục mỗi ngày. Và tôi được ăn thức ăn tuyệt vời.</p><p>&nbsp;</p><p><strong> Phóng viên: </strong> Bạn có bao giờ cảm thấy mệt mỏi?</p><p>&nbsp;</p><p><strong> Sanders: </strong> Chắc chắn! Chơi bóng đá là mệt mỏi. Vào cuối ngày, tôi thích thư giãn. Tôi nấu. Tôi xem phim. Tôi chơi trò chơi video. </p><p>&nbsp;</p><p><strong> Phóng viên: </strong>Bạn có lời khuyên nào cho người chơi mới không?</p><p>&nbsp;</p><p><strong>Sanders: </strong> Suy nghĩ nhanh. Di chuyển nhanh chóng. Chơi thông minh.</p>',
                'idcategory'        =>  1,
                'idlevel'           => 1

            ]
        ]);
    }
}
