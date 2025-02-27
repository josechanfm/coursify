<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // protected $fillable=['abbr','name_zh','name_enn','remark'];
        $data=array(
            array('id' => '1','abbr' => 'ACC','name_zh' => '財務會計','name_en' => 'Accounting','remark' => '<div>
              <p>
                  Such as CPA....</p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','last_num' => '2'),
            array('id' => '2','abbr' => 'WSET','name_zh' => 'WSET®葡萄酒課程','name_en' => 'WSET','remark' => NULL,'last_num' => '1'),
            array('id' => '3','abbr' => 'BSN','name_zh' => '商業及管理','name_en' => 'Business and Management','remark' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','last_num' => '30'),
            array('id' => '4','abbr' => 'CMP','name_zh' => '電腦科學','name_en' => 'Computer and Statistics','remark' => '<div>
              <p>
                  1. Microsoft Office</p>
          </div>
          <div>
              2. SPSS</div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','last_num' => NULL),
            array('id' => '5','abbr' => 'FCM','name_zh' => '設施管理','name_en' => 'Facility Management','remark' => '<div>
              <p>
                  1. 設施</p>
          </div>
          <div>
              2. 工程
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','last_num' => '9'),
            array('id' => '6','abbr' => 'LAW','name_zh' => '法律','name_en' => 'Law','remark' => NULL,'last_num' => '5'),
            array('id' => '7','abbr' => 'FNN','name_zh' => '金融','name_en' => 'test','remark' => '<div>
              <p>
                  1. 金融</p>
          </div>
          <div>
              2.理財
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','last_num' => '3'),
            array('id' => '8','abbr' => 'TTT','name_zh' => '師資培訓','name_en' => 'Train The Trainer','remark' => NULL,'last_num' => '1'),
            array('id' => '9','abbr' => 'EDC','name_zh' => '教育科學','name_en' => 'Education','remark' => NULL,'last_num' => '1'),
            array('id' => '10','abbr' => 'ART','name_zh' => '美術','name_en' => 'Art','remark' => NULL,'last_num' => '1'),
            array('id' => '11','abbr' => 'GAA','name_zh' => '書畫刻印藝術和視聽藝術','name_en' => 'Graphic and Audio Art','remark' => NULL,'last_num' => '1'),
            array('id' => '12','abbr' => 'DDA','name_zh' => '戲劇、舞蹈、雜技','name_en' => 'Drama, Dance, Acrobatics','remark' => NULL,'last_num' => '1'),
            array('id' => '13','abbr' => 'MUC','name_zh' => '音樂','name_en' => 'Music','remark' => NULL,'last_num' => '1'),
            array('id' => '14','abbr' => 'DES','name_zh' => '設計','name_en' => 'Design','remark' => NULL,'last_num' => '1'),
            array('id' => '15','abbr' => 'RTP','name_zh' => '宗教和神學、哲學','name_en' => 'Religion and Theology, Philosophy','remark' => NULL,'last_num' => '1'),
            array('id' => '16','abbr' => 'HUM','name_zh' => '人文科學','name_en' => 'Humanities','remark' => NULL,'last_num' => '1'),
            array('id' => '17','abbr' => 'TRA','name_zh' => '語言翻譯','name_en' => 'Translation ','remark' => NULL,'last_num' => '2'),
            array('id' => '18','abbr' => 'SBS','name_zh' => '社會及行為科學','name_en' => 'Social and Behavioral Science','remark' => NULL,'last_num' => '1'),
            array('id' => '19','abbr' => 'NWS','name_zh' => '新聞學和訊息','name_en' => 'News and Message','remark' => NULL,'last_num' => '4'),
            array('id' => '20','abbr' => 'BIO','name_zh' => '生命科學','name_en' => 'Biology','remark' => NULL,'last_num' => '1'),
            array('id' => '21','abbr' => 'NAT','name_zh' => '自然科學','name_en' => 'Natural Science','remark' => NULL,'last_num' => '1'),
            array('id' => '22','abbr' => 'MTS','name_zh' => '數學和統計','name_en' => ' Mathematics and Statistics','remark' => NULL,'last_num' => '1'),
            array('id' => '23','abbr' => 'CPS','name_zh' => '電腦科學','name_en' => 'Computer Science','remark' => NULL,'last_num' => '1'),
            array('id' => '24','abbr' => 'EEI','name_zh' => '工程學和工程行業','name_en' => ' Engineering and Engineering Industry','remark' => NULL,'last_num' => '1'),
            array('id' => '25','abbr' => 'MNP','name_zh' => '製造與加工','name_en' => ' Manufacturing and Processing','remark' => NULL,'last_num' => '1'),
            array('id' => '26','abbr' => 'AUP','name_zh' => '建築學與城市規劃','name_en' => 'Architecture and Urban Planning','remark' => NULL,'last_num' => '3'),
            array('id' => '27','abbr' => 'CON','name_zh' => '建築工程','name_en' => 'Construction ','remark' => NULL,'last_num' => '1'),
            array('id' => '28','abbr' => 'AGR','name_zh' => '農業','name_en' => 'Agriculture','remark' => NULL,'last_num' => '1'),
            array('id' => '29','abbr' => 'FRE','name_zh' => '林業','name_en' => 'Forestry','remark' => NULL,'last_num' => '1'),
            array('id' => '30','abbr' => 'FSH','name_zh' => '漁業','name_en' => 'Fishery','remark' => NULL,'last_num' => '1'),
            array('id' => '31','abbr' => 'VET','name_zh' => '獸醫','name_en' => 'Veterinarian','remark' => NULL,'last_num' => '1'),
            array('id' => '32','abbr' => 'MED','name_zh' => '醫學','name_en' => 'Medicine','remark' => NULL,'last_num' => '1'),
            array('id' => '33','abbr' => 'MES','name_zh' => '醫療服務','name_en' => 'Medical Services ','remark' => NULL,'last_num' => '1'),
            array('id' => '34','abbr' => 'NUR','name_zh' => '護理','name_en' => 'Nursing','remark' => NULL,'last_num' => '1'),
            array('id' => '35','abbr' => 'DEN','name_zh' => '牙科','name_en' => 'Dentistry','remark' => NULL,'last_num' => '1'),
            array('id' => '36','abbr' => 'HEL','name_zh' => '養生保健','name_en' => 'Health Care','remark' => NULL,'last_num' => '5'),
            array('id' => '37','abbr' => 'ASE','name_zh' => '老年服務及教育','name_en' => 'Aged Services and Education','remark' => NULL,'last_num' => '1'),
            array('id' => '38','abbr' => 'SOC','name_zh' => '社會照料','name_en' => 'Social Care','remark' => NULL,'last_num' => '1'),
            array('id' => '39','abbr' => 'SOW','name_zh' => '社會工作','name_en' => 'Social Work','remark' => NULL,'last_num' => '1'),
            array('id' => '40','abbr' => 'TEX','name_zh' => '旅遊及會展','name_en' => 'Tourism and exhibition','remark' => NULL,'last_num' => '1'),
            array('id' => '41','abbr' => 'HNC','name_zh' => '旅館及餐飲業','name_en' => 'Hotel and Catering','remark' => NULL,'last_num' => '5'),
            array('id' => '42','abbr' => 'OPS','name_zh' => '其他個人服務','name_en' => 'Other Personal Services','remark' => NULL,'last_num' => '1'),
            array('id' => '43','abbr' => 'SHI','name_zh' => '運輸服務','name_en' => 'Shipment Service','remark' => NULL,'last_num' => '1'),
            array('id' => '44','abbr' => 'ENV','name_zh' => '環境保護','name_en' => 'Environment Protection','remark' => NULL,'last_num' => '1'),
            array('id' => '45','abbr' => 'LPP','name_zh' => '生命和財產的保護','name_en' => ' Life and Property Protection','remark' => NULL,'last_num' => '1'),
            array('id' => '46','abbr' => 'OTH','name_zh' => '其他','name_en' => 'Others','remark' => NULL,'last_num' => '1'),
            array('id' => '49','abbr' => 'WSP','name_zh' => '工作坊_澳基會資助','name_en' => 'Workshop_FMAC','remark' => '<p>
              FMAC：澳門基金會</p>
          ','last_num' => '8'),
            array('id' => '50','abbr' => 'CPD','name_zh' => '都市建築及城市規劃範疇','name_en' => 'CPD','remark' => '<p>
              <span style="color: rgb(51, 51, 51); font-family: PMingLiU, Arial; font-size: 16px;">第1/2015號法律《都市建築及城市規劃範疇的資格制度》</span></p>
          ','last_num' => '14'),
            array('id' => '51','abbr' => 'CTC','name_zh' => '持續進修證書課程','name_en' => 'Continuing Training Certificate','remark' => NULL,'last_num' => '2'),
            array('id' => '52','abbr' => 'IHT','name_zh' => '企業內部培訓','name_en' => 'In-house Corporate Training','remark' => NULL,'last_num' => '2')
          );
        foreach($data as $d){
            Area::create($d);
        }
    }
}
