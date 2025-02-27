<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //$area=Area::where('abbr','ACC')->first();
        $data=array(
            array('id' => '1','area_id' => '3','code' => 'LSR001','name_zh' => '葡萄酒知識及品酒技巧入門','name_en' => 'Basic Wine Knowledge and Wine Tasting','type' => 'LCT','description' => '<p>
              學員可以建立對葡萄酒知識的基本了解，包括介紹葡萄酒的類型、常見的葡萄品種、葡萄酒品嘗的基本技巧、葡萄酒服務的常識及餐酒搭配等。更會介紹葡萄酒產地的分佈、風格和閱讀不同產區的酒標。每堂均進行品酒實務訓練，使學員可從視覺、嗅覺和味覺中感受不同葡萄酒之特性與差異。</p>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => NULL,'prerequisite' => NULL,'conduct_lang' => 'ENG','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '12','tution_fee' => '1200','other_fee' => '500','payment' => 'CNT','quota' => '25','active' => '1','remark' => NULL,'last_num' => '4'),
            array('id' => '2','area_id' => '5','code' => 'FCM001','name_zh' => '設施管理之公共安全管理及危機管理','name_en' => 'FM: Public Safety and Crisis Management','type' => 'LCT','description' => '<div>
              <div>
                  <table border="1" cellpadding="0" cellspacing="0" style="width:641px;" width="641">
                      <tbody>
                          <tr>
                              <td style="width:100px;height:17px;">
                                  <p>
                                      <strong>課程時數</strong><strong>:</strong></p>
                              </td>
                              <td style="width:540px;height:17px;">
                                  <p>
                                      12小時(分四節，每節3小時)</p>
                              </td>
                          </tr>
                          <tr>
                              <td style="width:100px;height:20px;">
                                  <p>
                                      <strong>課程對象:</strong></p>
                              </td>
                              <td style="width:540px;height:20px;">
                                  <p>
                                      建築師、工程師或建造環境之營運及修護等專業之人士。</p>
                              </td>
                          </tr>
                          <tr>
                              <td style="width:100px;height:96px;">
                                  <p>
                                      <strong>課程</strong><strong>簡介</strong><strong>:</strong></p>
                                  <p>
                                      &nbsp;</p>
                              </td>
                              <td style="width:540px;height:96px;">
                                  <p>
                                      本課程取材自國際設施管理協會所訂之公共及工作場所之安全健康及環境衛生規範其中一個單元。參加者能認識到設施管理中的公共安全及危機管理之概念，瞭解預防、評估潛在危機、應對實際意外及制定有效修復計畫之策略要點，提升員工之危機意識，從而可以有效地促進管理設施並使企業可持續發展。</p>
                              </td>
                          </tr>
                          <tr>
                              <td style="width:100px;height:161px;">
                                  <p>
                                      <strong>課程大網</strong><strong>:</strong></p>
                                  <p>
                                      &nbsp;</p>
                              </td>
                              <td style="width:540px;height:161px;">
                                  <p>
                                      第一節：(3小時)</p>
                                  <ul style="list-style-type:circle;">
                                      <li>
                                          公共安全、保安概念及預防</li>
                                  </ul>
                                  <ul style="list-style-type:circle;">
                                      <li>
                                          與設施相關之安全管理專案</li>
                                  </ul>
                                  <p>
                                      第二節: (3小時)</p>
                                  <ul style="list-style-type:circle;">
                                      <li>
                                          評估潛在危機</li>
                                      <li>
                                          如何提升員工危機意識</li>
                                  </ul>
                                  <p>
                                      第三節: (3小時)</p>
                                  <ul style="list-style-type:circle;">
                                      <li>
                                          發生危機事件時之溝通技巧</li>
                                      <li>
                                          釐定災難事件發生後之有效修復計畫</li>
                                  </ul>
                                  <p>
                                      第四節: (3小時)</p>
                                  <ul style="list-style-type:circle;">
                                      <li>
                                          影響公共安全之個案討論</li>
                                  </ul>
                                  <p style="margin-left:17.0pt;">
                                      &nbsp;</p>
                              </td>
                          </tr>
                          <tr>
                              <td style="width:100px;height:382px;">
                                  <p>
                                      <strong>導師簡介</strong><strong>:</strong></p>
                                  <p>
                                      &nbsp;</p>
                                  <p>
                                      &nbsp;</p>
                              </td>
                              <td style="width:540px;height:382px;">
                                  <p>
                                      林麗珠博士是英國特許屋宇工程師、美國目管理專業協會專案管理師、英國City &amp; Guilds 認證培訓師，以及新加坡ITE行業培訓師。</p>
                                  <p>
                                      林博士是英國特許屋宇工程師學會資深會員、英國營運工程師學會會員。目前為英國營運工程師學會(SOE)澳門分會-設管理小組分會對外協調主任，英國特許屋宇工程師學會(CABE)澳門分會財務長。</p>
                                  <p>
                                      林博士主要從事設施管理和樓宇設備工程工作，並經常為部門的工程師和技術員提供日常營運及工作安全的培訓，曾在澳門、越南，新加坡及中國等地參與五星級酒店、商場及遊艇會的前期項目管理及開業營運籌備工作。其中在越南時代廣場項目(Time Square)，林博士完成項目整體員工培訓計劃，包括緊急應變程序及火災時的緊急逃生計劃，並和越南胡志明市消防部門共同舉行周年防火演習。</p>
                                  <p>
                                      林博士目前在澳門十三等工程及設備部門任職質量及培訓副總監，主要負責編制整個部門的營運流程、管理工程合約及跟進目進度，並為部門提供ISO9001、ISO14001及ISO18000的認證和內部培訓工作。</p>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
          <p>
              &nbsp;</p>
          ','assessment' => '0','method' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','target' => '建築師、工程師或建造環境之營運及修護等專業之人士。','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '12','tution_fee' => '1620','other_fee' => '0','payment' => 'CNT','quota' => '20','active' => '1','remark' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <p>
              &nbsp;</p>
          ','last_num' => '2'),
            array('id' => '3','area_id' => '3','code' => 'BSN001','name_zh' => '熱門電子程式及在線平台教學課程','name_en' => 'Introduction of Popular APPs and Online Platforms ','type' => 'LCT','description' => '<div>
              <div>
                  &nbsp;</div>
              <div>
                  隨著內地互聯網發展的越來越蓬勃，各種便捷的電子程式能讓本工作坊將會介紹時下深受大眾歡迎的各類電子程式及平台，並讓學員了解其營運模式、使用技巧等，包括淘寶、微信、支付寶、美團、共享單車等的使用及介紹；</div>
          </div>
          <div>
              <div>
                  &nbsp;</div>
              <div>
                  -<span style="white-space:pre"> </span>網上聊天工具使用教學- 微信、QQ等</div>
          </div>
          <div>
              <div>
                  &nbsp;</div>
              <div>
                  -<span style="white-space:pre"> </span>搜尋器進階使用技巧</div>
          </div>
          <div>
              <div>
                  &nbsp;</div>
              <div>
                  -<span style="white-space:pre"> </span>社交網絡教學 - 微博、Facebook、Twitter等</div>
          </div>
          <div>
              <div>
                  &nbsp;</div>
              <div>
                  -<span style="white-space:pre"> </span>熱門在線平台介紹及使用教學 - 淘寶、海淘、大眾點評、美團、共享單車等</div>
          </div>
          <div>
              <div>
                  &nbsp;</div>
              <div>
                  -<span style="white-space:pre"> </span>在線支付-微信支付、支付寶</div>
          </div>
          <div>
              &nbsp;</div>
          ','assessment' => '0','method' => '<div>
              <p>
                  <span style="color: rgb(51, 51, 51); font-family: MingLiU; font-size: 14px;">講授及課堂練習</span></p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','target' => '有興趣人士','prerequisite' => '有興趣人士','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '10','tution_fee' => '800','other_fee' => '0','payment' => 'CNT','quota' => '25','active' => '0','remark' => '<div>
              <p>
                  <strong>報名方法：</strong></p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              可親臨本院接待處遞交<u>報名表</u>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              *如用&ldquo;<u>持續進修帳戶</u>&rdquo;繳交學費，請帶備身份證正本
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
              <p>
                  &nbsp;</p>
          </div>
          <div>
              <strong>付款方式：</strong>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              可親臨本院接待處繳交
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','last_num' => NULL),
            array('id' => '4','area_id' => '7','code' => 'FNN001','name_zh' => '股票投資技巧初階','name_en' => 'First Stage of Stock Investment Skills','type' => 'LCT','description' => '<div>
              <p>
                  課程內容：</p>
          </div>
          <div>
              本課程旨在協助投資者掌握基礎的股票投資知 識，並由最基本層面認識股票投資分析方法及 買賣技巧，增加獲利機率。課程內容包括：基 本分析、技術分析、圖表應用實例、股票買賣 的技巧，以及配合牛熊市進行部署。
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
              <p>
                  &nbsp;</p>
          </div>
          <div>
              課程大綱：
              <p>
                  &nbsp;</p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              - 入市前準備及落盤須知。</div>
          <div>
              - 基本分析&mdash;認識宏觀經濟、資金流對股市的影 響，了解經濟週期辨別牛熊市。</div>
          <div>
              - 基本分析&mdash;簡單估值模型：市盈率、市盈增長 率及卑打系數。</div>
          <div>
              - 技術分析&mdash;移動平均線、指數平滑移動平均線 的應用、型態分析。</div>
          <div>
              -&nbsp;技術分析&mdash;陰陽燭、相對強弱指數，圖表應用 實例，技術指標的應用。</div>
          <div>
              -&nbsp;整合模型分析&mdash;預測股票股價、買入及賣出 價。
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','assessment' => '0','method' => '<div>
              <p>
                  不設考試之課程，出席率必須 達到 80%或以上，方可獲頒發出席證明</p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','target' => '對股票投資有與趣之人仕','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '12','tution_fee' => '1200','other_fee' => '0','payment' => 'CNT','quota' => '24','active' => '1','remark' => NULL,'last_num' => '9'),
            array('id' => '5','area_id' => '7','code' => 'FNN002','name_zh' => '股票投資技巧進階','name_en' => 'Advance Stock Investment Skills','type' => 'LCT','description' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              課程內容：
              <p>
                  &nbsp;</p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              本課程旨在提升投資者分析市場變化的能力， 以深入淺出的方法，從基本分析層面上加入對 環球經濟指標理解、資金流向變化和公司經營 數據拆解能力，以達至更有系統地分析股票市 場操作與關聯因素間互動影響的邏輯思維，從 而加強對股票市場解讀能力。
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
              <p>
                  &nbsp;</p>
          </div>
          <div>
              課程大綱：
              <p>
                  &nbsp;</p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              - 基本分析&mdash;解讀環球經濟指標及數據。</div>
          <div>
              -&nbsp;基本分析&mdash;公司基本價值分析：現金流量、每股盈利增長及股本回報率。</div>
          <div>
              -&nbsp;技術分析&mdash;趨勢線、趨勢通道、趨勢形態分析及買賣策略。</div>
          <div>
              -&nbsp;技術分析&mdash;裂口分析，黃金比率應用，量度長線及短線目標。</div>
          <div>
              -&nbsp;整合模型分析&mdash;估值模型應用及確定選股條件。
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','assessment' => '0','method' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              不設考試之課程，出席率必須 達到 80%或以上，方可獲頒發出 席證明
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','target' => '對股票投資有與趣之人仕','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '12','tution_fee' => '1200','other_fee' => '0','payment' => 'CNT','quota' => '24','active' => '1','remark' => NULL,'last_num' => '4'),
            array('id' => '9','area_id' => '7','code' => 'FNN003','name_zh' => '金融市場和投資工具','name_en' => 'Introduction of Financial Market and Investment Tools','type' => 'LCT','description' => '<div>
              <div>
                  &lt;p&gt;</div>
              <div>
                  讓學生識別投資和金融資產價值的重要概念，列出金 融市場的類型及其工具，以及香港交易所交易工具的機制。 參加本課程後，學生將了解金融證券的交易機制，並能運 用數學方法計算恆生指數和衍生證券的保證金。&lt;/p&gt;</div>
              <div>
                  &nbsp;</div>
          </div>
          <p>
              &nbsp;</p>
          ','assessment' => '0','method' => '<div>
              <div>
                  &lt;p&gt;</div>
              <div>
                  不設考試之課程，出席率必須 達到 80%或以上，方可獲頒發出 席證明&lt;/p&gt;</div>
              <div>
                  &nbsp;</div>
          </div>
          <p>
              &nbsp;</p>
          ','target' => '對投資有與趣之人仕','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '9','tution_fee' => '1000','other_fee' => '0','payment' => 'CNT','quota' => '24','active' => '1','remark' => NULL,'last_num' => NULL),
            array('id' => '10','area_id' => '3','code' => 'BSN002','name_zh' => '主管達人系列之 「工作教授與授權」','name_en' => 'Leadership - Mentoring and Authorization','type' => 'LCT','description' => '<div>
              <div>
                  <p>
                      課程內容：</p>
              </div>
              <div>
                  <p>
                      現在的主管身為夾心階層，既要做到老闆要 求，亦要好好管理下屬。工作繁重，當然要適 當下放權力，授權下屬。但下屬們普遍欠缺責 任心，而且無法把委派的工作做好。身為主管 的你有同感嗎？別灰心，主管技巧不是「佛系」 自然而來的，而是有得學、有得練。此課程透 過三個 E（Enable，Empower，Engage），涵 蓋主管所需的兩大技巧：工作教授與工作授 權。透過模仿、演練、反饋，習得工作教授與 授權的技術，減輕自己膊頭的負擔。</p>
              </div>
              <div>
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  課程大綱：</div>
              <div>
                  <div>
                      - 為什麼授權重要</div>
              </div>
              <div>
                  <div>
                      &nbsp;</div>
                  <div>
                      - 授權與成長型心態（Growth Mindset）</div>
              </div>
              <div>
                  <div>
                      &nbsp;</div>
                  <div>
                      - 授權是過程，而非事件</div>
              </div>
              <div>
                  <div>
                      &nbsp;</div>
                  <div>
                      - 3E 模型：Enable，Empower，Engage</div>
              </div>
              <div>
                  <div>
                      &nbsp;</div>
                  <div>
                      - Enable：符合科學法則的工作教授方法</div>
              </div>
              <div>
                  <div>
                      &nbsp;</div>
                  <div>
                      - Empower：授權的六大法則</div>
              </div>
              <div>
                  <div>
                      &nbsp;</div>
                  <div>
                      - Engage：持續提升員工責任感和工作動力</div>
              </div>
              <div>
                  <br />
                  &nbsp;</div>
          </div>
          <p>
              &nbsp;</p>
          ','assessment' => '0','method' => '<div>
              <div>
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  不適用
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  &nbsp;</div>
          </div>
          <p>
              &nbsp;</p>
          ','target' => '主管、經理、人力資源工作者','prerequisite' => '不適用','conduct_lang' => NULL,'handout_lang' => NULL,'certificate' => NULL,'hours' => '9','tution_fee' => '1000','other_fee' => '0','payment' => NULL,'quota' => '24','active' => '1','remark' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <p>
              &nbsp;</p>
          ','last_num' => NULL),
            array('id' => '11','area_id' => '3','code' => 'BSN003','name_zh' => '職場演說與表達技巧 「升呢」工作坊','name_en' => 'Upgraded Your Presentation Skills','type' => 'LCT','description' => '<div>
              <div>
                  <div>
                      <div>
                          &lt;p&gt;</div>
                      <div>
                          課程內容：&lt;/p&gt;</div>
                      <div>
                          &lt;p&gt;</div>
                      <div>
                          現今社會，演說能力越來越受重視。在職場上， 如果不能有效地表達自己，管你有一身好武功、 好頭腦也不管用。這課程針對商業社會最需要的 演說與表達能力要求，深入淺出地教授實用的演 說技巧，並提供大量的實操與反饋機會，讓學員 們立即「升呢」。&lt;/p&gt;</div>
                      <div>
                          &lt;p&gt;</div>
                      <div>
                          &amp;nbsp;&lt;/p&gt;</div>
                      <div>
                          &lt;p&gt;</div>
                      <div>
                          課程大綱：&lt;/p&gt;</div>
                      <div>
                          &lt;div&gt;</div>
                      <div>
                          - 決定演說的目的&lt;/div&gt;</div>
                      <div>
                          &lt;div&gt;</div>
                      <div>
                          - 了解觀眾的需要&lt;/div&gt;</div>
                      <div>
                          &lt;div&gt;</div>
                      <div>
                          -&amp;nbsp;演說的結構&lt;/div&gt;</div>
                      <div>
                          &lt;div&gt;</div>
                      <div>
                          -&amp;nbsp;PowerPoint 的設計與陷阱&lt;/div&gt;</div>
                      <div>
                          &lt;div&gt;</div>
                      <div>
                          -&amp;nbsp;演說的策略&lt;/div&gt;</div>
                      <div>
                          &lt;div&gt;</div>
                      <div>
                          -&amp;nbsp;演說練習及反饋&lt;/div&gt;</div>
                      <div>
                          &lt;div&gt;</div>
                      <div>
                          -&amp;nbsp;技巧補充劑&lt;/div&gt;</div>
                      <div>
                          &lt;div&gt;</div>
                      <div>
                          -&amp;nbsp;演說與溝通的百寶袋&lt;/div&gt;</div>
                      <div>
                          &lt;div&gt;</div>
                      <div>
                          &amp;nbsp;&lt;/div&gt;</div>
                      <div>
                          &nbsp;</div>
                  </div>
              </div>
          </div>
          <p>
              &nbsp;</p>
          ','assessment' => '0','method' => '<div>
              <div>
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  不適用
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  &nbsp;</div>
          </div>
          <p>
              &nbsp;</p>
          ','target' => '需要在工作中經常作演說，希望 有系統地學習演說的人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '15','tution_fee' => '1300','other_fee' => '0','payment' => NULL,'quota' => '24','active' => '1','remark' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <p>
              &nbsp;</p>
          ','last_num' => NULL),
            array('id' => '12','area_id' => '3','code' => 'BSN004','name_zh' => '培訓師培訓','name_en' => 'Train The Trainer','type' => 'LCT','description' => '<div>
              <div>
                  <div>
                      <div>
                          <div>
                              <p>
                                  &nbsp;</p>
                          </div>
                          <div>
                              課程內容：
                              <p>
                                  &nbsp;</p>
                          </div>
                          <div>
                              <p>
                                  &nbsp;</p>
                          </div>
                          <div>
                              現今市場變化急速，企業需要保持競爭力，員 工培訓是重中之重。工作場所培訓技巧已成為 當今管理者必須具備的核心能力之一。前線的 主管能否有效地教授員工將直接影響生產 力、員工投入度和業績。這個課程專為需要在 職場教授員工的前線管理者和內部培訓師而 設。內容涵蓋成人教育和職業教育的理論基 礎，並提供大量演練和接受反饋的機會。課程 包括職業培訓師需要具備的二大技能：培訓與 評核，有別於一般 TTT 課程只着重培訓而忽略 評核。
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
                              <p>
                                  &nbsp;</p>
                          </div>
                          <div>
                              課程大綱：
                              <p>
                                  &nbsp;</p>
                          </div>
                          <div>
                              <div>
                                  &nbsp;</div>
                              <div>
                                  - 培訓師的角色</div>
                          </div>
                          <div>
                              <div>
                                  &nbsp;</div>
                              <div>
                                  - 成長型心態</div>
                          </div>
                          <div>
                              <div>
                                  &nbsp;</div>
                              <div>
                                  - 成人學習原理</div>
                          </div>
                          <div>
                              <div>
                                  &nbsp;</div>
                              <div>
                                  - 項目拆解</div>
                          </div>
                          <div>
                              <div>
                                  &nbsp;</div>
                              <div>
                                  - 課堂計劃編寫</div>
                          </div>
                          <div>
                              <div>
                                  &nbsp;</div>
                              <div>
                                  - 培訓前準備</div>
                          </div>
                          <div>
                              <div>
                                  &nbsp;</div>
                              <div>
                                  - 課堂管理</div>
                          </div>
                          <div>
                              <div>
                                  &nbsp;</div>
                              <div>
                                  - 培訓師的溝通能力</div>
                          </div>
                          <div>
                              <div>
                                  &nbsp;</div>
                              <div>
                                  - 培訓師的百寶袋</div>
                          </div>
                          <div>
                              <div>
                                  &nbsp;</div>
                              <div>
                                  - 課室培訓演練及反饋</div>
                          </div>
                          <div>
                              <div>
                                  &nbsp;</div>
                              <div>
                                  - 在職培訓模型</div>
                          </div>
                          <div>
                              <div>
                                  &nbsp;</div>
                              <div>
                                  - 建立屬於自己的在職培訓</div>
                          </div>
                          <div>
                              <div>
                                  &nbsp;</div>
                              <div>
                                  - 在職培訓演練及反饋</div>
                          </div>
                          <div>
                              <div>
                                  &nbsp;</div>
                              <div>
                                  - 評核原理</div>
                          </div>
                          <div>
                              <div>
                                  &nbsp;</div>
                              <div>
                                  - 評核工具</div>
                          </div>
                          <div>
                              <div>
                                  &nbsp;</div>
                              <div>
                                  - 建立自己的評核工具</div>
                          </div>
                          <div>
                              <div>
                                  &nbsp;</div>
                              <div>
                                  - 評核示範及練習</div>
                          </div>
                          <div>
                              <div>
                                  &nbsp;</div>
                              <div>
                                  &nbsp;</div>
                          </div>
                          <div>
                              &nbsp;</div>
                      </div>
                  </div>
              </div>
          </div>
          <p>
              &nbsp;</p>
          ','assessment' => '0','method' => '<div>
              <div>
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  不適用
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  &nbsp;</div>
          </div>
          <p>
              &nbsp;</p>
          ','target' => '主管，經理，內部培訓師，培訓 與發展範疇的專業人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '24','tution_fee' => '2400','other_fee' => '0','payment' => 'CNT','quota' => '24','active' => '0','remark' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <p>
              &nbsp;</p>
          ','last_num' => NULL),
            array('id' => '13','area_id' => '6','code' => 'LAW001','name_zh' => '行政程序法課程','name_en' => 'Administrative Procedure Law','type' => 'LCT','description' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              課程內容：
              <p>
                  &nbsp;</p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              行政程序法是指，從事公共管理行政活動時與 私人建立關係之公共行政當局所有機關，亦適 用於不屬公共行政當局之本地區機關在執行實 質上之行政職務時所作屬行政事宜之行為。透 過常用法例及法規理論，結合導師工作經驗， 以及實務個案作為專題研究，達至理論與實踐 相結合，務求令學員更好地掌握相關制度。
              <p>
                  &nbsp;</p>
          </div>
          <div>
              <div>
                  &nbsp;</div>
              <div>
                  課程大綱：</div>
          </div>
          <div>
              <div>
                  &nbsp;</div>
              <div>
                  - 行政程序法典原則</div>
          </div>
          <div>
              <div>
                  &nbsp;</div>
              <div>
                  - 公共行政當局之機關</div>
          </div>
          <div>
              <div>
                  &nbsp;</div>
              <div>
                  - 授權及權限</div>
          </div>
          <div>
              <div>
                  &nbsp;</div>
              <div>
                  - 意見書</div>
          </div>
          <div>
              <div>
                  &nbsp;</div>
              <div>
                  - 資訊權</div>
          </div>
          <div>
              <div>
                  &nbsp;</div>
              <div>
                  - 通知</div>
          </div>
          <div>
              <div>
                  &nbsp;</div>
              <div>
                  - 期間及延期</div>
          </div>
          <div>
              <div>
                  &nbsp;</div>
              <div>
                  - 行政運作及程序</div>
          </div>
          <div>
              <div>
                  &nbsp;</div>
              <div>
                  - 行政行為有效性</div>
          </div>
          <div>
              <div>
                  &nbsp;</div>
              <div>
                  - 無效及可撤銷</div>
          </div>
          <div>
              <div>
                  &nbsp;</div>
              <div>
                  - 行政申訴(聲明異議及訴願)</div>
          </div>
          <div>
              <div>
                  &nbsp;</div>
              <div>
                  - 行政合同</div>
          </div>
          <div>
              <div>
                  &nbsp;</div>
              <div>
                  &nbsp;</div>
          </div>
          <div>
              &nbsp;</div>
          ','assessment' => '0','method' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              不適用
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','target' => '對從事公共行政人士或有興趣從 事公共行政人士。','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '18','tution_fee' => '1800','other_fee' => '0','payment' => NULL,'quota' => '24','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '14','area_id' => '6','code' => 'LAW002','name_zh' => '公職法律課程','name_en' => 'Law of Government Employee','type' => 'LCT','description' => '<div>
              <div>
                  &lt;p&gt;</div>
              <div>
                  課程內容：&lt;/p&gt;</div>
              <div>
                  &lt;p&gt;</div>
              <div>
                  本課程教授公職法律制度。透過常用法例及法 規理論，結合導師工作經驗，以及實務個案作 為專題研究，達至理論與實踐相結合，務求令 學員更好地掌握相關制度。&lt;/p&gt;</div>
              <div>
                  &lt;p&gt;</div>
              <div>
                  &amp;nbsp;&lt;/p&gt;</div>
              <div>
                  &lt;p&gt;</div>
              <div>
                  課程大綱：&lt;/p&gt;</div>
              <div>
                  &lt;div&gt;</div>
              <div>
                  - 職程制度&lt;/div&gt;</div>
              <div>
                  &lt;div&gt;</div>
              <div>
                  - 進入公職&lt;/div&gt;</div>
              <div>
                  &lt;div&gt;</div>
              <div>
                  - 公職的聯繫方式&lt;/div&gt;</div>
              <div>
                  &lt;div&gt;</div>
              <div>
                  - 人事管理：辦公時間、年假、缺勤、無薪假、&lt;/div&gt;</div>
              <div>
                  &lt;div&gt;</div>
              <div>
                  - 衛生護理、服務時間、年資&lt;/div&gt;</div>
              <div>
                  &lt;div&gt;</div>
              <div>
                  - 報酬及補助：報酬及補助、假期津貼、聖誕&lt;/div&gt;</div>
              <div>
                  &lt;div&gt;</div>
              <div>
                  - 津貼、超時及輪值工作、津貼及補助、公幹&lt;/div&gt;</div>
              <div>
                  &lt;div&gt;</div>
              <div>
                  - 公積金制度&lt;/div&gt;</div>
              <div>
                  &lt;div&gt;</div>
              <div>
                  - 退休及撫恤制度&lt;/div&gt;</div>
              <div>
                  &lt;div&gt;</div>
              <div>
                  - 紀律制度&lt;/div&gt;</div>
              <div>
                  &lt;div&gt;</div>
              <div>
                  - 評核制度&lt;/div&gt;</div>
              <div>
                  &lt;div&gt;</div>
              <div>
                  - 案例分析和討論&lt;/div&gt;</div>
              <div>
                  &nbsp;</div>
          </div>
          <p>
              &nbsp;</p>
          ','assessment' => '0','method' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              不適用
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','target' => '對從事公共行政人士或有興趣從 事公共行政人士。','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '30','tution_fee' => '3000','other_fee' => '0','payment' => 'CNT','quota' => '24','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '15','area_id' => '23','code' => 'LSR002','name_zh' => '瑜珈課程','name_en' => 'Yoga','type' => 'LCT','description' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              課程大綱：
              <p>
                  &nbsp;</p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              本課程通過瑜伽練習來預防及舒緩因長期飽受 壓力而引起的身心不適。
              <p>
                  &nbsp;</p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              課程將從呼吸開始去慢慢感覺身體的逐漸放 鬆，隨着呼吸及瑜伽式子的練習，聆聽你自己 的身體，慢慢感受到全身肌肉延伸拉長，增加 身體的柔軟度，體會到最深層肌肉的漸漸舒 緩，放鬆全身心，最終消除整天工作帶來的勞 累與倦怠。
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','assessment' => '0','method' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              不適用
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','target' => '對瑜珈活動有興趣之人士。','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '12','tution_fee' => '800','other_fee' => '0','payment' => NULL,'quota' => '24','active' => '0','remark' => NULL,'last_num' => NULL),
            array('id' => '16','area_id' => '3','code' => 'LSR003','name_zh' => '西洋書法、銅版體基礎課程','name_en' => 'Western Calligraphy and Copper plate','type' => 'LCT','description' => '<div>
              <div>
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  <strong>課程內容：</strong>
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  課程由橢圓概念開始學習充滿古典裝飾風格的 Engrosser&#39;s script (Copperplate 銅版體)， 藉著對沾水筆力度和角度的控制，先針對基本筆 劃的立體感構成，從而進展至分析大小寫字母的 筆劃組成及結構，令學員充分掌握自我段練及審 美的方法。課程亦包含西洋書法的相關歷史介紹 及導師的創作經驗分享，引導學生思考如何將西 洋書法應用於日常生活甚至與商業結合，表達出 在電腦等工具流行的年代下，人手書寫的西洋書 法作品有那些優勝之處。
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
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  <strong>課程大綱:</strong>
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  <div>
                      &nbsp;</div>
                  <div>
                      - 英文書法歷史簡介</div>
              </div>
              <div>
                  <div>
                      &nbsp;</div>
                  <div>
                      - 工具介紹、運筆技巧分析</div>
              </div>
              <div>
                  <div>
                      &nbsp;</div>
                  <div>
                      - 大小寫字母書寫技巧分析和練習</div>
              </div>
              <div>
                  <div>
                      &nbsp;</div>
                  <div>
                      - 作品分析及欣賞、模擬創作</div>
              </div>
              <div>
                  <div>
                      &nbsp;</div>
                  <div>
                      - 實際應用技巧介紹&nbsp;</div>
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
          </div>
          <p>
              &nbsp;</p>
          ','assessment' => '0','method' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              不適用
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','target' => '對西洋書法有興趣之人士。','prerequisite' => NULL,'conduct_lang' => NULL,'handout_lang' => NULL,'certificate' => NULL,'hours' => NULL,'tution_fee' => '1600','other_fee' => '300','payment' => 'CNT','quota' => '24','active' => '0','remark' => NULL,'last_num' => NULL),
            array('id' => '17','area_id' => '3','code' => 'BSN005','name_zh' => '督導管理提升 – 帶領團隊之「一帶一怒？」','name_en' => 'Supervisory Management','type' => 'WRK','description' => '<div>
              <div>
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  <span style="color: rgb(51, 51, 51); font-family: 微軟雅黑; font-size: 14px; text-align: justify;">作為高效機構，應明白現今的工作條件大多在人手不足的情況下完成，而在日常工作中更需面對不同部門的同袍和不同人士的意見或爭拗；作為管理者，總想有效地帶動團隊，奈何總強差人意，更甚會「一帶一怒」；因此，如何「共融」及「和諧」地工作並提升績效，值得關注</span></div>
              <div>
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  <strong>課程特點：</strong></div>
              <div>
                  &nbsp;</div>
              <div>
                  本工作坊將運用桌上教具&mdash;Leadout&nbsp;<sup>TM</sup>，在導師帶領下引用互動式學習，讓學員更易掌握當中要點。該教具的背景是利用開闢土地去栽種優質葡萄，從而釀製頂級葡萄酒。而在整個開闢過程中，學員需要處理&ldquo;如何分配工作、制訂各人完成工作的流程、處理工作條件突變、如何獲得最高利潤及令團員們融洽並有效地一起工作&rdquo;。
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  <strong>工作坊內容</strong>
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  1.&nbsp;員工協作技巧要點</div>
              <div>
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  2. 建立員工的凝聚力
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  3. 建立融和工作間的技巧
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  4.&nbsp;優化員工表現的技巧
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  &nbsp;</div>
          </div>
          <p>
              &nbsp;</p>
          ','assessment' => '0','method' => '<div>
              <div>
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  不適用
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  &nbsp;</div>
          </div>
          <p>
              &nbsp;</p>
          ','target' => '有興趣的人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '200','other_fee' => '0','payment' => 'CSH','quota' => '30','active' => '0','remark' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <p>
              &nbsp;</p>
          ','last_num' => NULL),
            array('id' => '18','area_id' => '3','code' => 'BSN006','name_zh' => '職場管理致勝術 「妙用ASK」','name_en' => 'Advance Management - ASK','type' => 'SMN','description' => '<div>
              <div>
                  <div>
                      <div>
                          &nbsp;</div>
                      <div>
                          講座目的：</div>
                  </div>
                  <div>
                      <div>
                          &nbsp;</div>
                      <div>
                          &nbsp;</div>
                  </div>
                  <div>
                      <div>
                          &nbsp;</div>
                      <div>
                          常言道：「心態決定行動」，相信很多人都有這樣的信念；但往往在「緊急關頭」，理智的心態又不知不覺失控。以前線人員為例，顧客的一句說話一個動作，就能將其行為改變；而管理層認為，要使員工表現出眾，首要是定其「A心態」。故此，眾多管理人會以「督促」或「誘導」的兩極方法處理；但請不要忽略，「A心態」之後，還有「S技巧」及「K知識」兩項重點。懂得運用這兩項要點，將有助改善過往固有的管理盲點。</div>
                  </div>
                  <div>
                      <div>
                          &nbsp;</div>
                      <div>
                          &nbsp;</div>
                  </div>
                  <div>
                      <div>
                          &nbsp;</div>
                      <div>
                          &nbsp;</div>
                  </div>
                  <div>
                      <div>
                          &nbsp;</div>
                      <div>
                          <div>
                              &nbsp;</div>
                          <div>
                              講座大綱：&nbsp;</div>
                      </div>
                      <div>
                          <div>
                              &nbsp;</div>
                          <div>
                              &nbsp;</div>
                      </div>
                      <div>
                          <div>
                              &nbsp;</div>
                          <div>
                              - ASK&rdquo;的重點關係</div>
                      </div>
                      <div>
                          <div>
                              &nbsp;</div>
                          <div>
                              - 「A心態」的形成及操控者</div>
                      </div>
                      <div>
                          <div>
                              &nbsp;</div>
                          <div>
                              - 「S技巧」及「K知識」解說及使用</div>
                      </div>
                      <div>
                          <div>
                              &nbsp;</div>
                          <div>
                              - 優化員工表現的「ASK」技巧應用</div>
                      </div>
                      <div>
                          <div>
                              &nbsp;</div>
                          <div>
                              &nbsp;</div>
                      </div>
                      <div>
                          &nbsp;</div>
                  </div>
                  <div>
                      <div>
                          &nbsp;</div>
                      <div>
                          &nbsp;</div>
                  </div>
                  <div>
                      &nbsp;</div>
              </div>
          </div>
          <p>
              &nbsp;</p>
          ','assessment' => '0','method' => '<div>
              <div>
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  不適用
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  &nbsp;</div>
          </div>
          <p>
              &nbsp;</p>
          ','target' => '適合各階層的管理人員或對主題感興趣之人仕 ','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '2','tution_fee' => '0','other_fee' => '0','payment' => 'CSH','quota' => '100','active' => '0','remark' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <p>
              &nbsp;</p>
          ','last_num' => NULL),
            array('id' => '19','area_id' => '3','code' => 'BSN007','name_zh' => '公職人員公文寫作課程','name_en' => 'Civil Servant Official Document Writing','type' => 'SMN','description' => '<div>
              <div>
                  <div>
                      <div>
                          <div>
                              &lt;p&gt;</div>
                          <div>
                              課程內容：&lt;/p&gt;</div>
                          <div>
                              &lt;p&gt;</div>
                          <div>
                              透過課程讓學員瞭解澳門特別行政區常用規範 的中文 公文及事務文書的特點、格式、用語以 及寫作技巧和方式。重點訓練其對特定類型行 政公文的寫作能力，透過各樣實例分析與情景 練習，了解書寫中的多種表達方式，務求在短 期內令文筆有較大的提升。增加對行政公文寫 作需法律規範的認識，因應依法行政的原則及 須具備的法律依據。學習如何準確接引法律條 文，將其融匯貫通引入文中，以協助上級決策。&lt;/p&gt;</div>
                          <div>
                              &lt;p&gt;</div>
                          <div>
                              &amp;nbsp;&lt;/p&gt;</div>
                          <div>
                              &lt;p&gt;</div>
                          <div>
                              課程大綱：&amp;nbsp;&lt;/p&gt;</div>
                          <div>
                              &lt;p&gt;</div>
                          <div>
                              - 澳門特區政府公文文種&lt;br /&gt;</div>
                          <div>
                              -&amp;nbsp;公文用語&lt;br /&gt;</div>
                          <div>
                              - 行政公文常用法例依據&lt;br /&gt;</div>
                          <div>
                              - 函類公文寫作&lt;br /&gt;</div>
                          <div>
                              - 呈請類公文寫作&lt;br /&gt;</div>
                          <div>
                              - 通告類公文寫作&lt;br /&gt;</div>
                          <div>
                              - 證明和聲明類公文寫作&lt;br /&gt;</div>
                          <div>
                              - 新聞稿寫作&lt;br /&gt;</div>
                          <div>
                              - 會議文書寫作&lt;br /&gt;</div>
                          <div>
                              - 另類公文常識&lt;/p&gt;</div>
                          <div>
                              &lt;p&gt;</div>
                          <div>
                              &amp;nbsp;&lt;/p&gt;</div>
                          <div>
                              &lt;p&gt;</div>
                          <div>
                              &amp;nbsp;&lt;/p&gt;</div>
                          <div>
                              &nbsp;</div>
                      </div>
                  </div>
              </div>
          </div>
          <p>
              &nbsp;</p>
          ','assessment' => '0','method' => '<div>
              <div>
                  <div>
                      &lt;p&gt;</div>
                  <div>
                      本課程不設考試。出席率必須達 到 80%或以上，方可獲頒發出席證明。&lt;/p&gt;</div>
                  <div>
                      &nbsp;</div>
              </div>
          </div>
          <p>
              &nbsp;</p>
          ','target' => '對公文寫作有一定基礎及有興趣之人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '20','tution_fee' => '1600','other_fee' => '0','payment' => 'CNT','quota' => '25','active' => '1','remark' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <p>
              &nbsp;</p>
          ','last_num' => '2'),
            array('id' => '20','area_id' => '3','code' => 'BSN008','name_zh' => '金融市場和投資工具 ','name_en' => 'Financial Market and Investment Tools','type' => 'LCT','description' => '<p>
              課程內容：<br />
              本課程將會介紹香港的主要金融市場及其投資工具。旨在讓學生識別投資和金融資產價值的重要概念，列出金融市場的類型及其工具，以及香港交易所交易工具的機制。讓學員在參加本課程後，能了解金融證券的交易機制，並能運用數學方法計算恆生指數和衍生證券的保證金。</p>
          <p>
              &nbsp;</p>
          <div>
              課程大綱：</div>
          <div>
              -投資的性質及類型</div>
          <div>
              -金融財產的主要分類及重點概念</div>
          <div>
              -金融中介在投資上的角色</div>
          <div>
              -金融市場及工具</div>
          <div>
              -貨幣市場及工具</div>
          <div>
              -資本市場及工具</div>
          <div>
              -衍生物市場及工具</div>
          <div>
              -衍生物選擇工具</div>
          <div>
              -衍生物未來工具</div>
          <div>
              -股票保證金交易</div>
          <div>
              -恆生指數</div>
          <div>
              &nbsp;</div>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '有興趣之人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '9','tution_fee' => '1000','other_fee' => '0','payment' => 'CSH','quota' => '25','active' => '1','remark' => NULL,'last_num' => '2'),
            array('id' => '21','area_id' => '3','code' => 'BSN009','name_zh' => '大數據企業應用及策略分析','name_en' => 'Big Data Application and Strategy Analysis','type' => 'LCT','description' => '<p>
              課程內容：<br />
              近年各行業對大數據之重視，從數據去了解客戶群的消費模式及市場策略制定已經成為很多企業的方向，澳門各機構也逐漸開拓部門去硏究大數據的商機。本課程發掘學員對數據分析的興趣，通過靈活化的講解及個案例子等更了解大數據的運作。</p>
          <p>
              &nbsp;</p>
          <div>
              課程大綱：</div>
          <div>
              -大數據商業個案硏究及其應用</div>
          <div>
              -市場策略基礎知識及其制定</div>
          <div>
              -數據分析技巧基礎知識</div>
          <div>
              -統計學在訂立策略的應用</div>
          <div>
              -簡介數據分析軟件（如SAS, SPSS 等）</div>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '有興趣了解大數據商業應用及市場策略之人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '12','tution_fee' => '1200','other_fee' => '0','payment' => 'CSH','quota' => '25','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '22','area_id' => '3','code' => 'BSN010','name_zh' => '『澳門註冊會計師/專業會計人員』- 商法典','name_en' => 'Preparatory Courses for Macao CPA Public Examination - Macau Commercial Law','type' => 'LCT','description' => '<div>
              課程大綱：&nbsp;</div>
          <div>
              &nbsp;</div>
          <div>
              1.澳門民事法律制度的基本認識</div>
          <div>
              2.澳門商法基礎知識&nbsp;</div>
          <div>
              3.經營商業企業之一般規則&nbsp;</div>
          <div>
              4.合營企業之經營及企業經營之合作&nbsp;</div>
          <div>
              5.企業外部活動&nbsp;</div>
          <div>
              6.一般債權證券</div>
          <div>
              7.特別債權證券&nbsp;</div>
          <div>
              8.『註冊會計師/專業會計員』《商法典》考試部分 &ndash; 深入分析歷年考試內容</div>
          <div>
              &nbsp;</div>
          <div>
              ※凡報讀『澳門註冊會計師/專業會計人員』試前研習班，於上課時可免費獲贈本院出版之試題參考答案書最新年度一本（每人限取一次）</div>
          <div>
              &nbsp;</div>
          <div>
              &nbsp;</div>
          <div>
              &nbsp;</div>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '『澳門註冊會計師/專業會計人員』考生及有興趣之人士','prerequisite' => '此課程為考試備試課程，建議學員具備一定的會計學知識','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'CRT','hours' => '48','tution_fee' => '4800','other_fee' => '300','payment' => 'CNT','quota' => '30','active' => '1','remark' => NULL,'last_num' => '4'),
            array('id' => '23','area_id' => '3','code' => 'BSN011','name_zh' => '『澳門註冊會計師/專業會計人員』- 一般會計','name_en' => 'Preparatory Courses for Macao CPA Public Examination - General Accounting','type' => 'LCT','description' => '<div>
              課程大綱： <span style="white-space:pre"> </span></div>
          <div>
              &nbsp;</div>
          <div>
              1、會計政策變更，會計估計變更及差錯</div>
          <div>
              2、資產減值</div>
          <div>
              3、固定資產</div>
          <div>
              4、投資性房地產</div>
          <div>
              5、租賃</div>
          <div>
              6、存貨</div>
          <div>
              7、借款費用</div>
          <div>
              8、建造合同</div>
          <div>
              9、準備，或有負債及或有資產</div>
          <div>
              10、匯率變動的影響</div>
          <div>
              11、現金流量表</div>
          <div>
              12、金融工具</div>
          <div>
              13、企業合併</div>
          <div>
              14、調整分錄及財務報表編製</div>
          <div>
              &nbsp;</div>
          <div>
              ※凡報讀『澳門註冊會計師/專業會計人員』，於上課時可免費獲贈本院出版之試題參考答案書最新年度一本（每人限取一次）</div>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '『澳門註冊會計師/專業會計人員』考生及有興趣之人士','prerequisite' => '此課程為考試備試課程，建議學員具備一定的會計學知識','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'CRT','hours' => '60','tution_fee' => '6000','other_fee' => '300','payment' => 'CNT','quota' => '30','active' => '1','remark' => NULL,'last_num' => '4'),
            array('id' => '24','area_id' => '3','code' => 'BSN012','name_zh' => '『澳門註冊會計師/專業會計人員』- 稅務知識','name_en' => 'Preparatory Courses for Macao CPA Public Examination - Taxation','type' => 'LCT','description' => '<div>
              課程大綱： <span style="white-space:pre"> </span></div>
          <div>
              &nbsp;</div>
          <div>
              1.歷年試題分析</div>
          <div>
              2.稅收概論</div>
          <div>
              3.澳門稅制簡介</div>
          <div>
              4.所得補充稅</div>
          <div>
              5.職業稅</div>
          <div>
              6.房屋稅</div>
          <div>
              7.印花稅</div>
          <div>
              8.旅遊稅</div>
          <div>
              9.機動車輛稅</div>
          <div>
              10.消費稅</div>
          <div>
              11.其他稅項</div>
          <div>
              &nbsp;</div>
          <div>
              ※凡報讀『澳門註冊會計師/專業會計人員』試前研習班，於上課時可免費獲贈本院出版之試題參考答案書最新年度一本（每人限取一次）</div>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '『澳門註冊會計師/專業會計人員』考生及有興趣之人士','prerequisite' => '此課程為考試備試課程，建議學員具備一定的會計學知識','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '42','tution_fee' => '4200','other_fee' => '300','payment' => 'CNT','quota' => '30','active' => '1','remark' => NULL,'last_num' => '4'),
            array('id' => '25','area_id' => '3','code' => 'BSN013','name_zh' => '澳門金融體制和金融法規','name_en' => ' Macau Financial System and Financial Regulations','type' => 'LCT','description' => '<p>
              <strong>課程內容：</strong></p>
          <p>
              課程包括三個主要部分。第一部分介紹國際金融監管目的、趨勢和發展。第二部分介紹澳門金融業法律制度，銀行之外其他金融機構的經營活動，以及金融管理局對違法金融行為的處罰規範。第三部分介紹與金融服務業最相關的兩個法律制度，防止及遏止清洗黑錢和個人資料保護法，以及一些實務個案分享。</p>
          <div>
              課程大綱:</div>
          <div>
              -國際金融監管的目的、類型、模式和架構</div>
          <div>
              -澳門金融業及其監管機</div>
          <div>
              -澳門銀行體制</div>
          <div>
              -澳門金融管理局對澳門銀行監管模式和標準</div>
          <div>
              -澳門保險體制</div>
          <div>
              -澳門保險業政策和監管要求</div>
          <div>
              -澳門之貨幣政策</div>
          <div>
              -澳門之外匯儲備及財政儲備</div>
          <div>
              -澳門存款保障制度</div>
          <div>
              -金融體系法律制度綱要</div>
          <div>
              -銀行可從事之經營活動規範</div>
          <div>
              -其他金融機構之經營活動規範</div>
          <div>
              -違法金融行為及處罰</div>
          <div>
              -離岸銀行法</div>
          <div>
              -保險活動管制法例</div>
          <div>
              -保險代理人及經紀人法例</div>
          <div>
              -私人退休金制度</div>
          <div>
              -預防及遏止清洗黑錢犯罪</div>
          <div>
              -清洗黑錢可疑交易個案</div>
          <div>
              -個人資料保護法</div>
          <div>
              &nbsp;</div>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '金融從業員、企業管理人員、修讀金融或企業管理的學生。','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'CRT','hours' => '9','tution_fee' => '1000','other_fee' => '0','payment' => 'CNT','quota' => '25','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '26','area_id' => '3','code' => 'BSN014','name_zh' => '督導管理實務基礎','name_en' => 'Supervise Management Practice Foundation','type' => 'LCT','description' => '<div>
              課程內容：</div>
          <div>
              讓學員研習督導管理的基礎實務技巧，使其有效運用於日常工作中。課程以專題講授、個案研討、遊戲、放映等形式進行。學員須積極參與課程中的討論及經驗分享，才能達致預期目標。</div>
          <div>
              &nbsp;</div>
          <div>
              課程大綱：</div>
          <div>
              -領導技巧&nbsp;</div>
          <div>
              -授權與賦權&nbsp;</div>
          <div>
              -團隊建立</div>
          <div>
              -員工激勵</div>
          <div>
              -時間管理</div>
          <div>
              -工作計劃</div>
          <div>
              &nbsp;</div>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '有興趣了解督導管理之人士','prerequisite' => '不適用','conduct_lang' => 'MND','handout_lang' => 'CHN','certificate' => 'CRT','hours' => '12','tution_fee' => '1000','other_fee' => '0','payment' => 'CNT','quota' => '25','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '27','area_id' => '3','code' => 'BSN015','name_zh' => '內向人的成功魔杖','name_en' => ' Introverted Success Wand','type' => 'LCT','description' => '<div>
              課程內容： <span style="white-space:pre"> </span></div>
          <div>
              &nbsp;</div>
          <div>
              在一個「外向」的世界中，似乎「內向」的人處於下風。其實內向性格只是一種表像，絕大多數的內向人都坐擁一個裝滿人生財富的「百寶箱」。本課程幫助學員找到打開寶箱的方法，步向成功。</div>
          <div>
              &nbsp;</div>
          <div>
              課程大綱：</div>
          <div>
              -內向人的速寫 - 個性和行為</div>
          <div>
              -內向人的個人之處 - 內向、外向大比拼</div>
          <div>
              -釋放潛在的內向人能量</div>
          <div>
              -不可不知的內向人心理效應 - 「瓦倫達」效應</div>
          <div>
              -內向人不是交際隱影人</div>
          <div>
              -在職場上大放異彩的內向人法則</div>
          <div>
              -內向者是「績優股」</div>
          <div>
              &nbsp;</div>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '對本課程感興趣的人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '12','tution_fee' => '1500','other_fee' => '0','payment' => 'CNT','quota' => '25','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '28','area_id' => '3','code' => 'BSN016','name_zh' => '書寫商業英文電郵','name_en' => 'English Email Writing Skills','type' => 'LCT','description' => '<div>
              課程內容：</div>
          <div>
              英文是國際化的溝通語文，而電子郵件是最普遍的溝通媒介。掌握撰寫英文電郵的要訣與技巧，使辦理公事時更為順暢、有效、便捷。本課程先扼要講解撰寫商務電郵通用的原則，然後，利用公函實例(尤其歡迎學員提供自己所寫的公務電郵)進行分析，找出錯誤並修訂；從實踐應用原則中，掌握撰寫正確、清晰、完備、簡潔而得體的英文電郵。</div>
          <div>
              &nbsp;</div>
          <div>
              課程大綱：</div>
          <div>
              -優質英文電郵的要素&nbsp;</div>
          <div>
              -電郵的對象、目的、風格&nbsp;</div>
          <div>
              -港澳地區常見的英文電郵問題&nbsp;</div>
          <div>
              -撰寫英文電郵的步驟和良好習慣&nbsp;</div>
          <div>
              -標題的重要性與撰寫要訣&nbsp;</div>
          <div>
              -電郵的禮儀與格式&nbsp;</div>
          <div>
              -實例與實習&nbsp;</div>
          <div>
              -研習學員所寫之公函/電郵&nbsp;</div>
          <div>
              -介紹推薦自我進修的參考書及資源&nbsp;</div>
          <div>
              &nbsp;</div>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '對本課程感興趣的人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '12','tution_fee' => '900','other_fee' => '0','payment' => 'CNT','quota' => '25','active' => '1','remark' => NULL,'last_num' => '2'),
            array('id' => '29','area_id' => '6','code' => 'LAW003','name_zh' => '公共採購實務課程','name_en' => 'Public Procurement Practice','type' => 'LCT','description' => '<div>
              課程內容：</div>
          <div>
              教授學員適用於公共行政之工程及取得財貨與勞務的法制，當中包括基本原則分析，有關澳門特別行政區公共財貨、勞務的採購和公共工程承攬的流程從而運用於實際的工作中。</div>
          <div>
              &nbsp;</div>
          <div>
              課程大綱：</div>
          <div>
              -澳門特別行政區公務採購和公共工程承攬的一般概況&nbsp;</div>
          <div>
              -公務採購和公共工程承攬的法律原則</div>
          <div>
              -公務採購類型及法律制度</div>
          <div>
              -公共工程承攬類型及法律制度</div>
          <div>
              -展開書面諮詢和公開招標的各個程序和流程</div>
          <div>
              -針對判給結果提起的聲明異議和訴的處理</div>
          <div>
              -制訂合同及準備為簽署合同所必需的相關文件</div>
          <div>
              -後加工程和服務的處理</div>
          <div>
              -服務和工程的監督</div>
          <div>
              -解除合同的方式</div>
          <div>
              -案例分析和討論</div>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '對從事公共行政人士或有興趣從事公共行政人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '24','tution_fee' => '2400','other_fee' => '0','payment' => 'CNT','quota' => '25','active' => '1','remark' => NULL,'last_num' => '3'),
            array('id' => '30','area_id' => '26','code' => 'AUP002','name_zh' => '工程範疇風險管理','name_en' => 'Engineering Risk Management','type' => 'LCT','description' => '<div>
              課程大綱： <span style="white-space:pre"> </span></div>
          <div>
              &nbsp;</div>
          <div>
              建築工程的每個專業領域人才除了具備自己專業範疇的技能，加強綜合質素管理能力也極之重要，本課程旨在讓學員有一個全方位的視野去瞭解風險管理的要素，掌握由投標到合約以至項目協調及專業保險等各階段的操作風險基本知識。</div>
          <div>
              &nbsp;</div>
          <div>
              課程大綱：</div>
          <div>
              -工程範疇主要風險&nbsp;</div>
          <div>
              -如何有效規避風險&nbsp;</div>
          <div>
              -風險管理流程及四大策略</div>
          <div>
              -工程界別的專業責任&nbsp;&nbsp;</div>
          <div>
              -專業責任保險操作需知&nbsp;</div>
          <div>
              -個案分享</div>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '(1)建築工程範疇的專業人士   (2)執行計劃編制、工程指導或工程監察的企業主及公司要員','prerequisite' => NULL,'conduct_lang' => NULL,'handout_lang' => NULL,'certificate' => NULL,'hours' => NULL,'tution_fee' => '0','other_fee' => '0','payment' => NULL,'quota' => NULL,'active' => '0','remark' => NULL,'last_num' => '1'),
            array('id' => '33','area_id' => '26','code' => 'AUP003','name_zh' => '工程範疇風險管理','name_en' => 'Engineering Risk Management','type' => 'LCT','description' => '<div>
              課程大綱： <span style="white-space:pre"> </span></div>
          <div>
              &nbsp;</div>
          <div>
              建築工程的每個專業領域人才除了具備自己專業範疇的技能，加強綜合質素管理能力也極之重要，本課程旨在讓學員有一個全方位的視野去瞭解風險管理的要素，掌握由投標到合約以至項目協調及專業保險等各階段的操作風險基本知識。</div>
          <div>
              &nbsp;</div>
          <div>
              課程大綱：</div>
          <div>
              -工程範疇主要風險&nbsp;</div>
          <div>
              -如何有效規避風險&nbsp;</div>
          <div>
              -風險管理流程及四大策略</div>
          <div>
              -工程界別的專業責任&nbsp;&nbsp;</div>
          <div>
              -專業責任保險操作需知&nbsp;</div>
          <div>
              -個案分享</div>
          ','assessment' => '0','method' => NULL,'target' => '(1)建築工程範疇的專業人士   (2)執行計劃編制、工程指導或工程監察的企業主及公司要員','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '9','tution_fee' => '1200','other_fee' => '0','payment' => 'CNT','quota' => '30','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '34','area_id' => '36','code' => 'HEL002','name_zh' => '中醫之穴位按摩','name_en' => ' Acupoint Massage of Chinese Medicine','type' => 'LCT','description' => '<div>
              課程內容： <span style="white-space:pre"> </span></div>
          <div>
              &nbsp;</div>
          <div>
              人體全身上下具有數百多處穴位，這些特定穴位是人體氣血滙聚出入的地方。隨著社會快速發展，加上現代人生活飲食不節、容易造成體質趨向陰陽不調，氣血營養運送不暢，導致失眠、肩頸酸痛等大病小症一一出現，運用按、壓、推、拿的基本手法，在體表疾病反應區的上進行穴位刺激，疏通體表經絡，達致氣血順暢和防治疾病的養生目的。</div>
          <div>
              &nbsp;</div>
          <div>
              課程大綱：</div>
          <div>
              -按摩的基本原理&nbsp;</div>
          <div>
              -人體經脈學說</div>
          <div>
              -基本按摩手法</div>
          <div>
              -常用的穴位&nbsp;</div>
          <div>
              -按摩的禁忌</div>
          <div>
              -取穴的方法</div>
          <div>
              -介紹常見疾病的自我按摩，如痛症、失眠、</div>
          <div>
              -鼻敏感等</div>
          <div>
              &nbsp;</div>
          <div>
              ※課程僅教授中醫穴位按摩，並不提供醫療服務。</div>
          <div>
              ※非中醫生/中醫師，不應為他人提供醫療服務。</div>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '對本課程感興趣的人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '10','tution_fee' => '1200','other_fee' => '0','payment' => 'CNT','quota' => '16','active' => '1','remark' => NULL,'last_num' => '3'),
            array('id' => '35','area_id' => '36','code' => 'HEL003','name_zh' => '中醫養生保健班之體質食療課程','name_en' => 'Physique Diet Course for TCM Health Care ','type' => 'LCT','description' => '<div>
              課程內容： <span style="white-space:pre"> </span></div>
          <div>
              &nbsp;</div>
          <div>
              隨著社會不斷發展，人們對自身健康及良好飲食習慣的意識相對提高。而食療養生已有數千年歷史，根據不同體質，來選取合適養生食療，達到養生保健及延年益壽的目的，從而提高人們生活質量。</div>
          <div>
              &nbsp;</div>
          <div>
              課程大綱：</div>
          <div>
              -中醫體質的認識&nbsp;</div>
          <div>
              -食物的營養作用</div>
          <div>
              -不同體質的食療養生</div>
          <div>
              -食療湯水的介紹</div>
          <div>
              &nbsp;</div>
          <div>
              ※課程僅教授中醫食療基礎理論，非中醫生/中醫師，不應為他人提供醫療服務。</div>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '對本課程感興趣的人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '10','tution_fee' => '1200','other_fee' => '0','payment' => 'CNT','quota' => '25','active' => '1','remark' => NULL,'last_num' => '4'),
            array('id' => '36','area_id' => '3','code' => 'BSN017','name_zh' => '大數據Testing','name_en' => 'Big Data Testing','type' => 'LCT','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => NULL,'prerequisite' => NULL,'conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '12','tution_fee' => '1200','other_fee' => '0','payment' => 'CSH','quota' => '25','active' => '1','remark' => NULL,'last_num' => '2'),
            array('id' => '37','area_id' => '6','code' => 'LAW004','name_zh' => '合同法實務課程','name_en' => 'Contract Law Practice','type' => 'LCT','description' => '<div>
              本課程為面授通識課程，對象是對合同法有興趣的人士，以及日常生活或工作上與合同草擬、解釋及執行相關的人士，可以是非法律系學生。</div>
          <div>
              &nbsp;</div>
          <div>
              本課程關注澳門合同法與生活及工作中較密切相關的問題，在澳門合同法中挑選較重要的基本理論，以及包括買賣合同、租賃合同、消費借貸合同、委託合同等日常生活中較常接觸的典型合同進行講解，並配合實踐課以符合實際生活之需。本課程期待建立學生對合同法及各種合同類型的基本法律常識，以避免因無意識而構成違約情事或未能保障自身合法權益。</div>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '有興趣人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '21','tution_fee' => '2100','other_fee' => '0','payment' => 'CNT','quota' => '25','active' => '1','remark' => NULL,'last_num' => '2'),
            array('id' => '38','area_id' => '1','code' => 'ACC001','name_zh' => '『澳門註冊會計師/專業會計人員』-成本會計','name_en' => 'Cost Accounting','type' => 'LCT','description' => '<p>
              課程大綱：</p>
          <p>
              1、成本會計基本概念<br />
              2、變動成本法與吸納成本法<br />
              3、成本、數量、利潤分析<br />
              4、分批成本法<br />
              5、作業制成本法<br />
              6、分步成本法<br />
              7、靜態預算與彈性預算<br />
              8、預算差異分析<br />
              9、長期投資評估<br />
              10、聯產品與副產品<br />
              11、經營決策分析<br />
              12、輔助部門 / 共同成本的分配</p>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '『澳門註冊會計師/專業會計人員』考生及有興趣之人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '42','tution_fee' => '4200','other_fee' => '0','payment' => 'CNT','quota' => '25','active' => '1','remark' => '<p>
              溫馨提示：此課程為考試備試課程，建議學員具備一定的會計學知識</p>
          ','last_num' => '20'),
            array('id' => '39','area_id' => '3','code' => 'BSN018','name_zh' => '「親子理財」家庭理財規劃課程','name_en' => 'Family Finance','type' => 'LCT','description' => '<p>
              課程內容：<br />
              將理財教育融入家庭生活之中，為孩子設計多項品格成長任務及親身生活體驗分享，藉以學習如何善用金錢及累積財富來追求人生不同階段的夢想，為孩子明天建立有計劃、有責任感及有幸福感的理財生活方式，在物質社會中正確看待自己的價值，讓孩子從中學習「小小觀念，大大財富」、「小小預算，大大精算」的理財知識，從小培養正確理財觀念，為人生創造取之不盡的財富，讓父母成為孩子的專業理財人生導師。</p>
          <div>
              &nbsp;</div>
          <div>
              <strong>課程大綱：</strong><br />
              <div>
                  -何謂兒童「財商教育」</div>
              <div>
                  -何謂理財及家庭財務規劃</div>
              <div>
                  -家長的金錢角色</div>
              <div>
                  -兒童理財教育的導向</div>
              <div>
                  -財富與價值觀</div>
              <div>
                  -正確生活觀與理財關係</div>
              <div>
                  -小管家理財方程式</div>
              <div>
                  -零用錢的管理</div>
              <div>
                  -消費、儲蓄及預算規劃</div>
              <div>
                  -分辨「需要」和「想要」</div>
              <div>
                  -家長的傳承安排</div>
              <div>
                  -理財主題學習的分享</div>
              <div>
                  &nbsp;</div>
              <div>
                  <div>
                      導師：談詠之小姐</div>
                  <div>
                      談小姐現為認可財務策劃師資格持證人(CFPCM)，擁有核准退休顧問(QRA)等多項資格。近年來積極參與親子理財教育相關的社會服務。</div>
              </div>
          </div>
          <p>
              &nbsp;</p>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '家長 (幫助家長了解財商教育的重要，與生活和成長息息相關，善用暑假時間，教導孩子學習正確的金錢觀)','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '9','tution_fee' => '900','other_fee' => '0','payment' => 'CNT','quota' => '25','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '40','area_id' => '3','code' => 'BSN019','name_zh' => '投資產品選擇及應用','name_en' => 'Investment Tools Selection and Application ','type' => 'LCT','description' => '<p>
              <strong>課程內容：</strong><br />
              現今通脹高企，生活成本急增，每個人都希望手上的資金能夠透過適當的投資方法達致財富增值的目的。本課程分為兩部份，第一部份著重教授財富管理方法和協助學員評估個人現金流收支狀態，從而規劃出一個合適的財富管理計劃。第二部份則以本地不同的金融產品為例，從傳統銀行存款計劃開始，認識不同金融機構的投資工具和產品組合，通過簡單的風險回報分析，使學員明白每種工具的優缺特性，從而選擇出能夠配合個人財富增值計劃的理想產品。完成課程後，學員可掌握基本財富管理規劃技巧及如何評估主流投資產品對個人財管的適用性。</p>
          <p>
              &nbsp;</p>
          <p>
              <strong>課程大綱：</strong></p>
          <div>
              -現金流與人生規劃構建</div>
          <div>
              -現金價值、風險與回報</div>
          <div>
              -個人理財計劃設計</div>
          <div>
              -環球經濟波動下的個人投資準備</div>
          <div>
              -投資工具分析：銀行產品、保險產品、基金計劃、股票市場、房地產投資</div>
          <div>
              &nbsp;</div>
          <p>
              <strong>導師：</strong><strong>利開健先生</strong><br />
              利先生為金融學專業研究生、金融學碩士、澳洲公共會計師公會資深會員，具多年個人理財及技資經驗。</p>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '有興趣為財富增值之人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '18','tution_fee' => '1800','other_fee' => '0','payment' => 'CNT','quota' => '25','active' => '1','remark' => NULL,'last_num' => '3'),
            array('id' => '41','area_id' => '1','code' => 'ACC002','name_zh' => '退休策劃DIY','name_en' => 'Retirement Plan DIY','type' => 'LCT','description' => '<p>
              <strong>課程內容：</strong><br />
              學員可通過系統的學習，認識如何構建一個完善的退休計劃，並掌握當中所需要考慮的各種因素，配合現時自身的財務狀況，選擇合適的金融產品作為投資工具，在維持現有生活質素的同時，亦能夠保障退休後有足夠的金錢應付日常開支及額外儲備解決突如其來的不同挑戰。</p>
          <div>
              課堂內會通過引用真實的金融產品作實例分析，使學員能夠按不同的情況制定財務目標以達至規劃整個退休生活的安排。</div>
          <div>
               </div>
          <div>
              <div>
                  <strong>課程大綱:</strong></div>
              <div>
                  -分析退休生活的財務需要</div>
              <div>
                  -了解進行退休策劃的各種考慮因應</div>
              <div>
                  -計算退休計劃的財務目標</div>
              <div>
                  -檢視央積金及公積金計劃的投資方向</div>
              <div>
                  -了解社保基金及政府福利所提供的保障</div>
              <div>
                  -分析現有金融產品的增值能力</div>
              <div>
                  -了解適合退休後的投資工具</div>
              <div>
                  -案例分析</div>
              <div>
                   </div>
          </div>
          <div>
              <strong>導師：利開健先生</strong></div>
          <div>
              利先生為金融學專業研究生、金融學碩士、澳洲公共會計師公會資深會員，具多年個人理財及技資經驗。</div>
          <div>
               </div>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '未來10至20年準退休人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '9','tution_fee' => '1000','other_fee' => '0','payment' => 'CNT','quota' => '25','active' => '1','remark' => NULL,'last_num' => '2'),
            array('id' => '42','area_id' => '3','code' => 'BSN020','name_zh' => '專業面試技巧','name_en' => 'Interview Skills','type' => 'LCT','description' => '<div>
              <strong>課程內容：</strong></div>
          <div>
              專業面試是一項非常重要，決定會否被錄用的關鍵測試。在面試的過程中，典試委員會成員少不免會考核考生對投考機構的特質、行政財務、本澳時事及通識等的資訊掌握，從而了解其是否合適該職位空缺，而本課程將針對專業面試的規劃、準備、內容、過程、態度和協助考生全方位準備面試其應對技巧，同時包括模擬面試實習和導師點評。</div>
          <div>
              &nbsp;</div>
          <div>
              &nbsp;</div>
          <div>
              <div>
                  <strong>課程大綱:</strong></div>
              <div>
                  -講解專業面試的特質</div>
              <div>
                  -如何準備及整理面試材料，全面瞭解及掌握考試資訊</div>
              <div>
                  -教授面試時要注意的事項，並透過模擬面試，讓學員掌握正確的面試技巧及思維</div>
              <div>
                  -塑造及建立所投考職位的有利條件及正確觀念&nbsp;</div>
              <div>
                  -面談時的自我控制</div>
              <div>
                  -掌握面試普通和關鍵問題的應對和回應技巧</div>
              <div>
                  -言語及肢體的運用</div>
              <div>
                  -面試後的反思和評估 (導師點評及提供改善技巧)</div>
              <div>
                  -危機及應變技巧處理</div>
              <div>
                  &nbsp;</div>
              <div>
                  &nbsp;</div>
          </div>
          <div>
              <strong>導師：韋浩風先生</strong></div>
          <div>
              韋先生為退休資深公務員及現職培訓導師，曾在多個政府部門的不同範疇擔當主管職務。熟悉政府往來文書。</div>
          <div>
              &nbsp;</div>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '有興趣之人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '12','tution_fee' => '1500','other_fee' => '0','payment' => 'CNT','quota' => '25','active' => '1','remark' => NULL,'last_num' => '2'),
            array('id' => '43','area_id' => '3','code' => 'BSN021','name_zh' => '導師培訓','name_en' => 'Train The Trainer','type' => 'LCT','description' => '<div>
              <strong>課程內容： <span style="white-space:pre"> </span></strong></div>
          <div>
              現今市場變化急速，企業需要保持競爭力，員工培訓是重中之重。工作場所培訓技巧已成為當今管理者必須具備的核心能力之一。前線的主管能否有效地教授員工將直接影響生產力、員工投入度和業績。這個課程專為需要在職場教授員工的前線管理者和內部導師而設。內容涵蓋成人教育和職業教育的理論基礎，並提供大量演練和接受反饋的機會。課程包括職業導師需要具備的二大技能：培訓與評核，有別於一般TTT課程只着重培訓而忽略評核。</div>
          <div>
              &nbsp;</div>
          <div>
              <strong>課程大綱：</strong></div>
          <div>
              -導師的角色</div>
          <div>
              -成長型心態</div>
          <div>
              -成人學習原理</div>
          <div>
              -項目拆解</div>
          <div>
              -課堂計劃編寫</div>
          <div>
              -培訓前準備</div>
          <div>
              -課堂管理</div>
          <div>
              -導師的溝通能力</div>
          <div>
              -導師的百寶袋</div>
          <div>
              -課室培訓演練及反饋</div>
          <div>
              -在職培訓模型</div>
          <div>
              -建立屬於自己的在職培訓</div>
          <div>
              -在職培訓演練及反饋</div>
          <div>
              -評核原理</div>
          <div>
              -評核工具</div>
          <div>
              -建立自己的評核工具</div>
          <div>
              -評核示範及練習</div>
          <div>
              &nbsp;</div>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '主管，經理，內部導師，培訓與發展範疇的專業人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '24','tution_fee' => '2400','other_fee' => '0','payment' => 'CNT','quota' => '25','active' => '0','remark' => NULL,'last_num' => '1'),
            array('id' => '44','area_id' => '3','code' => 'BSN022','name_zh' => '經濟全球化與區域化常識班','name_en' => 'General Sense of Economic Globalization  and Regionization ','type' => 'LCT','description' => '<div>
              <strong>課程內容： <span style="white-space:pre"> </span></strong></div>
          <div>
              經濟全球化、區域經濟一體化，是當前熱門話語詞；其反面是單邊主義和貿易保護主義。這兩個重大路向的不同表現，不僅顯出其重要性，也是21世紀人類發展的重大抉擇。對企業經營者而言，固然必須對此要有清晰的認識並對可能風險有所防範；對澳門而言，由於已全面步入區域協作的時代，從CEPA到大灣區建設，從中葡平台與一帶一路對接，均是參與區域一體化和全球化的重要課題。本課程為學員提供從全球化理論到歷史發展的介紹。</div>
          <div>
              &nbsp;</div>
          <div>
              <strong>課程大綱:</strong></div>
          <div>
              經濟化和區域經濟一體化的概念和定義</div>
          <div>
              世界貿易組織的歷史及對全球化的貢獻&nbsp;</div>
          <div>
              早期全球化對世界資源的掠奪</div>
          <div>
              全球化對自主貿易國家的衝擊</div>
          <div>
              韓農及各國反全球化事件</div>
          <div>
              經濟學家李嘉圖的理想</div>
          <div>
              絕對優勢、相對優勢、H-O-S理論</div>
          <div>
              利普塞的區域合作分層學說</div>
          <div>
              全球化與貿易單邊主義當前的表現特點</div>
          <div>
              全球主要區域合作架構重點概述</div>
          <div>
              中國一帶一路倡議</div>
          <div>
              澳門在全球化和區域合作中的機遇與挑戰</div>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '有興趣之人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '12','tution_fee' => '1200','other_fee' => '0','payment' => 'CNT','quota' => '25','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '45','area_id' => '3','code' => 'BSN023','name_zh' => '中文公文寫作','name_en' => 'Official Chinese Letter Writing Skills','type' => 'LCT','description' => '<div>
              <strong>課程內容：</strong> <span style="white-space:pre"> </span></div>
          <div>
              透過課程讓學員瞭解澳門特別行政區常用規範的中文公文及事務文書的特點、格式、用語以及寫作技巧和方式。重點訓練其對特定類型行政公文的寫作能力，透過各樣實例分析與情景練習，了解書寫中的多種表達方式，務求在短期內令文筆有較大的提升。增加對行政公文寫作需法律規範的認識，因應依法行政的原則及須具備的法律依據。學習如何準確接引法律條文，將其融匯貫通引入文中，以協助上級決策。</div>
          <div>
               </div>
          <div>
              <strong>課程大綱：</strong></div>
          <div>
              -澳門特區政府公文文種</div>
          <div>
              -公文用語</div>
          <div>
              -行政公文常用法例依據</div>
          <div>
              -函類公文寫作 </div>
          <div>
              -呈請類公文寫作 </div>
          <div>
              -通告類公文寫作</div>
          <div>
              -證明和聲明類公文寫作</div>
          <div>
              -新聞稿寫作</div>
          <div>
              -會議文書寫作</div>
          <div>
              -另類公文常識</div>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '對公文寫作有一定基礎及有興趣之人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '20','tution_fee' => '2000','other_fee' => '0','payment' => 'CNT','quota' => '25','active' => '1','remark' => NULL,'last_num' => '3'),
            array('id' => '46','area_id' => '19','code' => 'NWS002','name_zh' => '公共關係及傳媒應對策略課程','name_en' => 'Public Relations and Media Handling Strategies','type' => 'LCT','description' => '<div>
              <strong>課程內容：</strong> <span style="white-space:pre"> </span></div>
          <div>
              讓學員瞭解公共關係之原理與操作策略，同時掌握傳統及網上媒體之特質與生態，以便優化公共關係之運作和溝通。其次，訓練學員溝通與傳播之策略，新聞議題之創造等。</div>
          <div>
              &nbsp;</div>
          <div>
              &nbsp;</div>
          <div>
              <strong>課程大綱：</strong></div>
          <div>
              公共關係的涵義及領域&nbsp;</div>
          <div>
              公共關係的功能&nbsp;</div>
          <div>
              成功的公關要素&nbsp;</div>
          <div>
              與傳統及網上媒體的溝通技巧和模式</div>
          <div>
              公共關係的實務與應用&nbsp;</div>
          <div>
              危機及應變技巧處理</div>
          <div>
              個案分析</div>
          <div>
              &nbsp;</div>
          <div>
              &nbsp;</div>
          <div>
              <div>
                  <strong>導師：韋浩風先生</strong></div>
              <div>
                  韋先生為退休資深公務員，具多年公共行政範疇的管理經驗，曾在多個政府部門的不同範疇擔當主管職務，具豐富傳媒工作經驗。</div>
          </div>
          <p>
              &nbsp;</p>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '有興趣之人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '18','tution_fee' => '1800','other_fee' => '0','payment' => 'CNT','quota' => '25','active' => '1','remark' => NULL,'last_num' => '3'),
            array('id' => '47','area_id' => '19','code' => 'NWS003','name_zh' => '活動司儀技巧課程','name_en' => 'Master of Ceremony Skills','type' => 'LCT','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '有興趣之人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '12','tution_fee' => '1500','other_fee' => '0','payment' => 'CNT','quota' => '14','active' => '1','remark' => NULL,'last_num' => '4'),
            array('id' => '48','area_id' => '5','code' => 'FCM002','name_zh' => '建築垃圾的可持續管理','name_en' => 'Sustainable management of construction waste','type' => 'WRK','description' => '<div>
              <br />
              <table border="1" cellpadding="0" cellspacing="0">
                  <tbody>
                      <tr>
                          <td style="width:100px;height:35px;">
                              <p>
                                  <strong>課程時數</strong><strong>:</strong></p>
                          </td>
                          <td style="width:502px;height:35px;">
                              <p>
                                  6小時(分兩節，每節3小時)</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:100px;height:35px;">
                              <p>
                                  <strong>課程對象:</strong></p>
                          </td>
                          <td style="width:502px;height:35px;">
                              <p>
                                  工作上需要負責相關管理的工程師或對本主題有興趣的相關專業人士。</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:100px;height:57px;">
                              <p>
                                  <strong>課程</strong><strong>簡介</strong><strong>:</strong></p>
                              <p>
                                  &nbsp;</p>
                          </td>
                          <td style="width:502px;height:57px;">
                              <p>
                                  本工作坊旨在讓學員了解建築垃圾的分類和可持續管理，如何避免和減少、再用、回收及循環再造，此外，亦會向學員介紹最新的再生材料。</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:100px;height:453px;">
                              <p>
                                  <strong>課程大網</strong><strong>:</strong></p>
                              <p>
                                  &nbsp;</p>
                          </td>
                          <td style="width:502px;height:453px;">
                              <p>
                                  第一節：(共3小時)</p>
                              <ul style="list-style-type:circle;">
                                  <li>
                                      建築垃圾的分類(1小時)</li>
                              </ul>
                              <ul>
                                  <li>
                                      何為建築垃圾</li>
                                  <li>
                                      何為建築廢物</li>
                              </ul>
                              <p style="margin-left:24.0pt;">
                                  &nbsp;</p>
                              <ul style="list-style-type:circle;">
                                  <li>
                                      建築垃圾處理(2小時)</li>
                              </ul>
                              <ul>
                                  <li>
                                      介紹各地目前的建築垃圾處理方式</li>
                                  <li>
                                      分析各種建築垃圾處理的優缺點</li>
                                  <li>
                                      討論建築垃圾處理程序及现行處理方法利害之處</li>
                              </ul>
                              <p>
                                  &nbsp;</p>
                              <p>
                                  第二節：(共3小時)</p>
                              <ul style="list-style-type:circle;">
                                  <li>
                                      廢物管理架構(2小時)</li>
                              </ul>
                              <ul>
                                  <li>
                                      避免和減少</li>
                                  <li>
                                      再用、回收及循環再造</li>
                                  <li>
                                      減少廢物體積及棄置</li>
                              </ul>
                              <p style="margin-left:48.0pt;">
                                  &nbsp;</p>
                              <ul style="list-style-type:circle;">
                                  <li>
                                      使用再生材料(1小時)</li>
                              </ul>
                              <p style="margin-left:24.0pt;">
                                  使用再生材料是指「利用回收材料，經過再製程序，所製造之建材產品，符合廢棄物減量(Reduce)、再利用(Reuse)及再循環(Recycle)等3R原則製成之建材。」</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:100px;height:235px;">
                              <p>
                                  <strong>導師簡介</strong><strong>:</strong></p>
                              <p>
                                  &nbsp;</p>
                              <p>
                                  &nbsp;</p>
                          </td>
                          <td style="width:502px;height:235px;">
                              <p>
                                  鍾汶諭先生</p>
                              <p>
                                  英國土木工程師學會（ICE）土木工程師，英國皇家特許建造學會（CIOB）特許建造師，香港建築信息模型學會（HKIBIM）的專業會員。(香港)持續專業教育･培訓中心CPE課程導師。</p>
                              <p>
                                  &nbsp;</p>
                              <p>
                                  鍾先生擁有逾十八年建築工作經驗，專門從事香港基建項目之採購，合約管理及項目管理。自2010年以來，鍾先生亦擔任英國工程高級文憑和學位課程導師以及指導學生研究論文。</p>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
          <p>
              &nbsp;</p>
          ','assessment' => '0','method' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','target' => '工作上需要負責相關管理的工程師或對本主題有興趣的相關專業人士。','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '700','other_fee' => '0','payment' => 'CSH','quota' => '40','active' => '1','remark' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <p>
              &nbsp;</p>
          ','last_num' => '2'),
            array('id' => '49','area_id' => '5','code' => 'FCM003','name_zh' => '招標過程及審批程序','name_en' => 'Bidding process and approval procedures','type' => 'WRK','description' => '<div>
              <table border="1" cellpadding="0" cellspacing="0" width="605">
                  <tbody>
                      <tr>
                          <td style="width:103px;height:35px;">
                              <p>
                                  <strong>課程時數:</strong></p>
                          </td>
                          <td style="width:502px;height:35px;">
                              <p>
                                  6小時 (分兩節，每節3小時)</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:103px;height:35px;">
                              <p>
                                  <strong>課程對象:</strong></p>
                          </td>
                          <td style="width:502px;height:35px;">
                              <p>
                                  工作上需要負責相關管理的建築師、測量師、工程師或對本主題有興趣的相關專業人士。</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:103px;height:90px;">
                              <p>
                                  <strong>課程簡介:</strong></p>
                              <p>
                                  &nbsp;</p>
                          </td>
                          <td style="width:502px;height:90px;">
                              <p>
                                  在建築工程中，如可選擇一個適合和有能力的承建商是非常重要且不可缺少的一環。 同時，在招標過程裡，如何確定所有程序都是在一個公平的環境中進行是十分重要。本工作坊旨在向學員介紹招標過程和審批程序，以及如何確保一個合適的承建商可以選出。</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:103px;">
                              <p>
                                  <strong>課程內容:</strong></p>
                          </td>
                          <td style="width:502px;">
                              <ol>
                                  <li>
                                      招標流程 (2小時)
                                      <ol>
                                          <li value="1.1">
                                              意向書</li>
                                          <li value="1.2">
                                              資格預審</li>
                                          <li value="1.3">
                                              合資格投標人</li>
                                          <li value="1.4">
                                              標書發出</li>
                                          <li value="1.5">
                                              標書修改</li>
                                          <li value="1.6">
                                              標書提交</li>
                                      </ol>
                                  </li>
                              </ol>
                              <p style="margin-left:39.6pt;">
                                  &nbsp;</p>
                              <ol>
                                  <li value="2">
                                      招標文件內容 (1.5小時)
                                      <ol>
                                          <li value="2.1">
                                              招標條件</li>
                                          <li value="2.2">
                                              合約條款</li>
                                          <li value="2.3">
                                              技術文件</li>
                                          <li value="2.4">
                                              工程量清單</li>
                                          <li value="2.5">
                                              圖則</li>
                                      </ol>
                                  </li>
                              </ol>
                              <p style="margin-left:39.6pt;">
                                  &nbsp;</p>
                              <ol>
                                  <li value="3">
                                      審議標書過程和範圍 (1.5小時)
                                      <ol>
                                          <li value="3.1">
                                              價錢比較</li>
                                          <li value="3.2">
                                              不符合標書條件</li>
                                          <li value="3.3">
                                              單價比較</li>
                                      </ol>
                                  </li>
                              </ol>
                              <p style="margin-left:39.6pt;">
                                  &nbsp;</p>
                              <ol>
                                  <li value="4">
                                      香港常採用的審議標書方法 (1小時)
                                      <ol>
                                          <li value="4.1">
                                              價低者得</li>
                                          <li value="4.2">
                                              價錢及技術</li>
                                      </ol>
                                  </li>
                              </ol>
                              <p style="margin-left:39.6pt;">
                                  &nbsp;</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:103px;height:125px;">
                              <p>
                                  <strong>導師簡介:</strong></p>
                          </td>
                          <td style="width:502px;height:125px;">
                              <p>
                                  鄧焯權先生為香港測量師學會會員、英國皇家特許測量師學會會員、英國特許土木工程測量師學會會員及CPE 教育中心導師。</p>
                              <p>
                                  &nbsp;</p>
                              <p>
                                  鄧先生畢業於香港大學(榮譽)學士測量學位，也是倫敦大學的(榮譽)法學士。現任香港房屋協會高級經理。他曾在大型公司：新昌建築、九廣鐵路及利比工料測量師行擔任高級測量師；擁有多年大學及高級文憑課程的教學經驗。</p>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
          <p>
              &nbsp;</p>
          ','assessment' => '0','method' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','target' => '工作上需要負責相關管理的建築師、測量師、工程師或對本主題有興趣的相關專業人士。','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '700','other_fee' => '0','payment' => 'CSH','quota' => '40','active' => '1','remark' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <p>
              &nbsp;</p>
          ','last_num' => '1'),
            array('id' => '50','area_id' => '5','code' => 'FCM004','name_zh' => '建築工程時間管理及延誤處理','name_en' => 'Construction project time management and delay handling','type' => 'WRK','description' => '<div>
              &nbsp;</div>
          <div>
              <table border="1" cellpadding="0" cellspacing="0" width="633">
                  <tbody>
                      <tr>
                          <td style="width:103px;height:28px;">
                              <p>
                                  <strong>課程時數:</strong></p>
                          </td>
                          <td style="width:530px;height:28px;">
                              <p>
                                  6小時(分兩節，每節3小時)</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:103px;height:27px;">
                              <p>
                                  <strong>課程對象:</strong></p>
                          </td>
                          <td style="width:530px;height:27px;">
                              <p>
                                  工作上需要負責相關管理的建築師、工程師或對本主題有興趣的相關專業人士。</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:103px;height:77px;">
                              <p>
                                  <strong>課程簡介:</strong></p>
                              <p>
                                  &nbsp;</p>
                          </td>
                          <td style="width:530px;height:77px;">
                              <p>
                                  在建築工程中，時間管理是非常重要的一環，本工作坊旨在介紹承建商在合約上所承受的時間責任，及在延誤後所要付出的賠償。同時，也會討論一些不可預計的惡劣天氣、設計改動及後加項目等所產生的延誤責任問題。</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:103px;height:486px;">
                              <p>
                                  <strong>課程內容:</strong></p>
                          </td>
                          <td style="width:530px;height:486px;">
                              <p>
                                  1. 合約上的時間責任 (1小時)</p>
                              <ol>
                                  <li value="1.1">
                                      工期的制定</li>
                                  <li value="1.2">
                                      工期的要承受的時間風險</li>
                              </ol>
                              <p style="margin-left:39.6pt;">
                                  &nbsp;</p>
                              <ol>
                                  <li value="2">
                                      工程延誤的賠償方法 (1小時)
                                      <ol>
                                          <li value="2.1">
                                              延期罰款</li>
                                          <li value="2.2">
                                              計算方法和應用</li>
                                      </ol>
                                  </li>
                              </ol>
                              <p style="margin-left:39.6pt;">
                                  &nbsp;</p>
                              <ol>
                                  <li value="3">
                                      常見的延期原因 (2小時)
                                      <ol>
                                          <li value="3.1">
                                              惡劣天氣</li>
                                          <li value="3.2">
                                              不可抗力</li>
                                          <li value="3.3">
                                              設計改動</li>
                                          <li value="3.4">
                                              第三者的影響</li>
                                          <li value="3.5">
                                              指定分包商</li>
                                          <li value="3.6">
                                              停工</li>
                                      </ol>
                                  </li>
                              </ol>
                              <p style="margin-left:39.6pt;">
                                  &nbsp;</p>
                              <ol>
                                  <li value="4">
                                      工期延長索償的流程和審批 (1小時)
                                      <ol>
                                          <li value="4.1">
                                              書面提交</li>
                                          <li value="4.2">
                                              補充文件</li>
                                          <li value="4.3">
                                              時間限制</li>
                                      </ol>
                                  </li>
                              </ol>
                              <p style="margin-left:39.6pt;">
                                  &nbsp;</p>
                              <ol>
                                  <li value="5">
                                      工期延長的金錢索償 (1小時)
                                      <ol>
                                          <li value="5.1">
                                              索償的計算原則</li>
                                          <li value="5.2">
                                              索償的計算方法</li>
                                      </ol>
                                  </li>
                              </ol>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:103px;height:135px;">
                              <p>
                                  <strong>導師簡介:</strong></p>
                              <p>
                                  &nbsp;</p>
                          </td>
                          <td style="width:530px;height:135px;">
                              <p>
                                  鄧焯權先生為香港測量師學會會員、英國皇家特許測量師學會會員、英國特許土木工程測量師學會會員及CPE 教育中心導師。</p>
                              <p>
                                  &nbsp;</p>
                              <p>
                                  鄧先生畢業於香港大學(榮譽)學士測量學位，也是倫敦大學的(榮譽)法學士。現任香港房屋協會高級經理。他曾在大型公司：新昌建築、九廣鐵路及利比工料測量師行擔任高級測量師；擁有多年大學及高級文憑課程的教學經驗。</p>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
          <p>
              &nbsp;</p>
          ','assessment' => '0','method' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','target' => '工作上需要負責相關管理的建築師、工程師或對本主題有興趣的相關專業人士。','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '700','other_fee' => '0','payment' => 'CSH','quota' => '40','active' => '1','remark' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <p>
              &nbsp;</p>
          ','last_num' => '1'),
            array('id' => '51','area_id' => '5','code' => 'FCM005','name_zh' => '建築工地交通事故 - 成因分析、危害識別及安全措施','name_en' => 'Site traffic accidents and preventive measures','type' => 'WRK','description' => '<div>
              &nbsp;</div>
          <div>
              <table border="1" cellpadding="0" cellspacing="0">
                  <tbody>
                      <tr>
                          <td style="width:100px;height:35px;">
                              <p>
                                  <strong>課程時數</strong><strong>:</strong></p>
                          </td>
                          <td style="width:502px;height:35px;">
                              <p>
                                  6小時(分兩節，每節3小時)</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:100px;height:56px;">
                              <p>
                                  <strong>課程對象</strong><strong>:</strong></p>
                          </td>
                          <td style="width:502px;height:56px;">
                              <p>
                                  工作上需要負責相關管理的建築師、土木工程師或對本主題有興趣的相關專業人士。</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:100px;height:74px;">
                              <p>
                                  <strong>課程</strong><strong>簡介</strong><strong>:</strong></p>
                              <p>
                                  &nbsp;</p>
                          </td>
                          <td style="width:502px;height:74px;">
                              <p>
                                  近年澳門高速發展，地盤車輛及流動機械所引致的意外時有發生，本工作坊將向學員分享港澳相關案例研究並分析原因，再作出風險評估，及制訂合適的預防措施。</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:100px;height:397px;">
                              <p>
                                  <strong>課程大網</strong><strong>:</strong></p>
                              <p>
                                  &nbsp;</p>
                          </td>
                          <td style="width:502px;height:397px;">
                              <p>
                                  第一節：(共3小時)</p>
                              <ul style="list-style-type:circle;">
                                  <li>
                                      建築工地交通事故數字(1小時)</li>
                              </ul>
                              <p style="margin-left:24.0pt;">
                                  地盤車輛及流動機械引致的意外有增加趨勢，根據勞工處資料，於&nbsp;2013至&nbsp;2017&nbsp;年其間，一共有&nbsp;24&nbsp;宗涉及建築工地交通事故，其中&nbsp;7&nbsp;宗事故導致&nbsp;8&nbsp;名工人受傷。發生在工作場所內，遭移動中的車輛撞倒的工業意外，為數亦不少。</p>
                              <p style="margin-left:24.0pt;">
                                  &nbsp;</p>
                              <ul style="list-style-type:circle;">
                                  <li>
                                      分享案例，研究並分析原因(2小時)</li>
                              </ul>
                              <p style="margin-left:24.0pt;">
                                  就以往港澳建築工地交通意外事例，分析原因及事後處理，並進行小組討論。</p>
                              <p>
                                  &nbsp;</p>
                              <p>
                                  第二節：(共3小時)</p>
                              <ul style="list-style-type:circle;">
                                  <li>
                                      確定危害(1小時)</li>
                              </ul>
                              <ul>
                                  <li>
                                      進行風險評估</li>
                                  <li>
                                      採取恰當措施</li>
                              </ul>
                              <p style="margin-left:48.0pt;">
                                  &nbsp;</p>
                              <ul style="list-style-type:circle;">
                                  <li>
                                      預防措施(2小時)</li>
                              </ul>
                              <p style="margin-left:24.0pt;">
                                  可採納預防措施提升地盤車輛及流動機械的操作安全：風險評估、地盤佈局的設計、安裝倒車視像裝置、安裝其他倒車安全裝置、安全作業程式，以及培訓地盤人員。</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:100px;height:207px;">
                              <p>
                                  <strong>導師簡介</strong><strong>:</strong></p>
                              <p>
                                  &nbsp;</p>
                              <p>
                                  &nbsp;</p>
                          </td>
                          <td style="width:502px;height:207px;">
                              <p>
                                  鍾汶諭先生</p>
                              <p>
                                  英國土木工程師學會（ICE）土木工程師，英國皇家特許建造學會（CIOB）特許建造師，香港建築信息模型學會（HKIBIM）的專業會員。(香港)持續專業教育･培訓中心CPE課程導師。</p>
                              <p>
                                  &nbsp;</p>
                              <p>
                                  鍾先生擁有逾十八年建築工作經驗，專門從事香港基建項目之採購，合約管理及項目管理。自2010年以來，鍾先生亦擔任英國工程高級文憑和學位課程導師以及指導學生研究論文。</p>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
          <p>
              &nbsp;</p>
          ','assessment' => '0','method' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','target' => '工作上需要負責相關管理的建築師、工程師或對本主題有興趣的相關專業人士。','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '700','other_fee' => '0','payment' => 'CSH','quota' => '40','active' => '1','remark' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <p>
              &nbsp;</p>
          ','last_num' => '1'),
            array('id' => '52','area_id' => '5','code' => 'FCM006','name_zh' => '建築安全措施','name_en' => 'Building safety measures','type' => 'WRK','description' => '<div>
              &nbsp;</div>
          <div>
              <table border="1" cellpadding="0" cellspacing="0" style="width:614px;" width="614">
                  <tbody>
                      <tr>
                          <td style="width:102px;height:11px;">
                              <p>
                                  <strong>課程時數</strong><strong>:</strong></p>
                          </td>
                          <td style="width:511px;height:11px;">
                              <p>
                                  6小時 (分兩節，每節3小時)</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:102px;height:35px;">
                              <p>
                                  <strong>課程對象:</strong></p>
                          </td>
                          <td style="width:511px;height:35px;">
                              <p>
                                  工作上需要負責相關管理的建築師、土木工程師或對本主題有興趣的相關專業人士。</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:102px;height:102px;">
                              <p>
                                  <strong>課程</strong><strong>簡介</strong><strong>:</strong></p>
                              <p>
                                  &nbsp;</p>
                          </td>
                          <td style="width:511px;height:102px;">
                              <p>
                                  本工作坊將向學員分享建築地盤安全措施，前線管理人員在管理某些關鍵性及容易引起意外的安全事宜，透過分享以往發生的事故個案、行內常見的陋習或最好的安全施工方法，希望為前線管理人員，提供一個指引和指標，藉此持續改進。</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:102px;height:107px;">
                              <p>
                                  <strong>課程內容</strong><strong>:</strong></p>
                          </td>
                          <td style="width:511px;height:107px;">
                              <ol>
                                  <li>
                                      負責人士的安全責任 (1小時)<br />
                                      僱主須確保僱員的安全及健康，工作中的僱員須照顧其他人並須與僱主合作，僱主及僱員支持達到安全目標，以及充分讓不同人士參與安全管理事宜。</li>
                              </ol>
                              <p>
                                  &nbsp;</p>
                              <h1>
                                  <span style="font-size:8px;">2.工程開工前的計劃 (2小時)<br />
                                  開工前的籌劃，有安全健康計劃展示職安健政策，備好工傷意外紀錄冊，職前培訓紀錄冊，地盤巡查記錄簿，有關安全施工程序或施工辦法。</span></h1>
                              <p>
                                  &nbsp;</p>
                              <ol>
                                  <li value="3">
                                      風險的控制 (1小時)<br />
                                      講解職業安全健康管理的原則和最佳做法，例如需要處理的問題、怎樣可以改善職安表現、自己做審核和評估工作等。</li>
                              </ol>
                              <p>
                                  &nbsp;</p>
                              <ol>
                                  <li value="4">
                                      地盤安全管理 (2小時)<br />
                                      講解地盤安全管理制度<br />
                                      地盤內的每一個人都需參與安全管理及其注意事項：項目經理、工程師、安全主任、安全督導員、管工及員工。</li>
                              </ol>
                              <p>
                                  &nbsp;</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:102px;height:182px;">
                              <p>
                                  <strong>導師簡介</strong><strong>:</strong></p>
                              <p>
                                  &nbsp;</p>
                              <p>
                                  &nbsp;</p>
                          </td>
                          <td style="width:511px;height:182px;">
                              <p>
                                  鍾汶諭先生為英國土木工程師學會（ICE）註冊土木工程師、英國皇家特許建造學會（CIOB）特許建造師、香港建築信息模型學會（HKIBIM）專業會員，以及(香港)持續專業教育･培訓中心CPE課程導師。</p>
                              <p>
                                  鍾先生擁有逾十九年建築工作經驗，專門從事香港基建項目之採購，合約管理及項目管理。自2010年以來，鍾先生亦擔任英國工程高級文憑和學位課程導師以及指導學生研究論文。</p>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
          <p>
              &nbsp;</p>
          ','assessment' => '0','method' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','target' => '工作上需要負責相關管理的建築師、土木工程師或對本主題有興趣的相關專業人士。','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '700','other_fee' => '0','payment' => 'CSH','quota' => '40','active' => '1','remark' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <p>
              &nbsp;</p>
          ','last_num' => '1'),
            array('id' => '53','area_id' => '5','code' => 'FCM007','name_zh' => '地基工程施工技術','name_en' => 'Foundation construction technology','type' => 'WRK','description' => '<div>
              &nbsp;</div>
          <div>
              <table border="1" cellpadding="0" cellspacing="0" style="width:614px;" width="614">
                  <tbody>
                      <tr>
                          <td style="width:103px;height:35px;">
                              <p>
                                  <strong>課程時數</strong><strong>:</strong></p>
                          </td>
                          <td style="width:512px;height:35px;">
                              <p>
                                  6小時(分兩節，每節3小時)</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:103px;height:35px;">
                              <p>
                                  <strong>課程對象:</strong></p>
                          </td>
                          <td style="width:512px;height:35px;">
                              <p>
                                  土木工程師或建造環境之營運及修護等相關專業之人士。</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:103px;height:104px;">
                              <p>
                                  <strong>課程</strong><strong>簡介</strong><strong>:</strong></p>
                              <p>
                                  &nbsp;</p>
                          </td>
                          <td style="width:512px;height:104px;">
                              <p>
                                  本工作坊旨在讓學員了解地基施工技術、基本地基設計及在施工時因應地質及地形需求而更改設計等。例如地基工程內包括了擋土、開挖、排水等工程技術，在施工前必須考量到結構載重、地質條件、水文條件、區域位置和經濟條件，這樣才能符合建物的最高經濟效益，並且讓建物能夠堅固實用。</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:103px;height:198px;">
                              <p>
                                  <strong>課程內容</strong><strong>:</strong></p>
                          </td>
                          <td style="width:512px;height:198px;">
                              <ol>
                                  <li>
                                      各種地基工程 (1小時)<br />
                                      介紹不同類型的地基種類及施工方法，例如改良地質及排水方法。</li>
                              </ol>
                              <p>
                                  &nbsp;</p>
                              <ol>
                                  <li value="2">
                                      各種改良地質的方法 (1小時)<br />
                                      講解探土方法及嵬集資料，從而改良地質，以便地基施工。</li>
                              </ol>
                              <p>
                                  &nbsp;</p>
                              <ol>
                                  <li value="3">
                                      各種基礎排水方法 (1小時)<br />
                                      講解地基工程施工時，解決地底排水方法。</li>
                              </ol>
                              <p>
                                  &nbsp;</p>
                              <ol>
                                  <li value="4">
                                      擋土開挖 (2小時)<br />
                                      - 講解擋土開挖施工方法：自承式開挖工法、明挖邊坡工法、擋土牆自承工<br />
                                      &nbsp; 法、地錨工法、水平支撐工法、島築式工法。<br />
                                      - 在擋土開挖施工時，必須要注意之各填安全措施。</li>
                              </ol>
                              <p>
                                  &nbsp;</p>
                              <p>
                                  (5) 地底防水方法 (1小時)</p>
                              <p>
                                  講解不同地底防水之方法，以防止地下水浸入地基結構。</p>
                              <p>
                                  &nbsp;</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:103px;height:198px;">
                              <p>
                                  <strong>導師簡介</strong><strong>:</strong></p>
                              <p>
                                  &nbsp;</p>
                              <p>
                                  &nbsp;</p>
                          </td>
                          <td style="width:512px;height:198px;">
                              <p>
                                  鍾汶諭先生為英國土木工程師學會（ICE）註冊土木工程師、英國皇家特許建造學會（CIOB）特許建造師、香港建築信息模型學會（HKIBIM）專業會員，以及(香港)持續專業教育･培訓中心CPE課程導師。</p>
                              <p>
                                  &nbsp;</p>
                              <p>
                                  鍾先生擁有逾十九年建築工作經驗，專門從事香港基建項目之採購，合約管理及項目管理。自2010年以來，鍾先生亦擔任英國工程高級文憑和學位課程導師以及指導學生研究論文。</p>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
          <p>
              &nbsp;</p>
          ','assessment' => '0','method' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','target' => '土木工程師或建造環境之營運及修護等相關專業之人士。','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '700','other_fee' => '0','payment' => 'CSH','quota' => '40','active' => '1','remark' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <p>
              &nbsp;</p>
          ','last_num' => '1'),
            array('id' => '54','area_id' => '5','code' => 'FCM008','name_zh' => '建築工程成本計劃與執行','name_en' => 'Construction cost planning and execution','type' => 'WRK','description' => '<div>
              &nbsp;</div>
          <div>
              <table border="1" cellpadding="0" cellspacing="0" style="width:614px;" width="614">
                  <tbody>
                      <tr>
                          <td style="width:100px;height:27px;">
                              <p>
                                  <strong>課程時數</strong><strong>:</strong></p>
                          </td>
                          <td style="width:514px;height:27px;">
                              <p>
                                  6小時 (分兩節，每節3小時)</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:100px;height:27px;">
                              <p>
                                  <strong>課程對象:</strong></p>
                          </td>
                          <td style="width:514px;height:27px;">
                              <p>
                                  工程師或建造環境之營運及修護等相關專業之人士。</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:100px;height:199px;">
                              <p>
                                  <strong>課程</strong><strong>簡介</strong><strong>:</strong></p>
                              <p>
                                  &nbsp;</p>
                          </td>
                          <td style="width:514px;height:199px;">
                              <p>
                                  建築工程成本計劃與執行是指：<br />
                                  1)成本控制的定義、重要性及流程方法；<br />
                                  2)瞭解工程成本控管常見的問題、原因與解決方法；<br />
                                  3)學習專案範疇定義及工作分包規劃的方法；<br />
                                  4)建築工程成本估算的方法、技巧及重要原則。</p>
                              <p>
                                  本工作坊旨在讓學員了解建築工程成本計劃與執行，透過分享及研究港澳相關案例，分析作出合適的建築工程成本措施。</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:100px;height:340px;">
                              <p>
                                  <strong>課程內容</strong><strong>:</strong></p>
                          </td>
                          <td style="width:514px;height:340px;">
                              <ol>
                                  <li>
                                      建築工程計劃成本管理 (1小時)<br />
                                      講解建築工程成本的定義、工程成本管理及工程成本管理所遇到的問題。</li>
                              </ol>
                              <p>
                                  &nbsp;</p>
                              <ol>
                                  <li value="2">
                                      建築工程估算成本 (2小時)<br />
                                      講解建築工程估算成本的方法、工作分解圖及控制帳戶及工程預備金。</li>
                              </ol>
                              <p>
                                  &nbsp;</p>
                              <ol>
                                  <li value="3">
                                      建築工程決定預算 (2小時)<br />
                                      講解制定合理的成本基準，工程報價常見的問題，考慮工程報價的需要考量之因素，以及工程成本基準設定的原則。</li>
                              </ol>
                              <p>
                                  &nbsp;</p>
                              <ol>
                                  <li value="4">
                                      建築工程成本控制 (1小時)<br />
                                      講解成本進度追蹤與紀錄及成本現況分析與報告。</li>
                              </ol>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:100px;height:201px;">
                              <p>
                                  <strong>導師簡介</strong><strong>:</strong></p>
                              <p>
                                  &nbsp;</p>
                              <p>
                                  &nbsp;</p>
                          </td>
                          <td style="width:514px;height:201px;">
                              <p>
                                  鍾汶諭先生為英國土木工程師學會（ICE）註冊土木工程師、英國皇家特許建造學會（CIOB）特許建造師、香港建築信息模型學會（HKIBIM）專業會員，以及(香港)持續專業教育･培訓中心CPE課程導師。</p>
                              <p>
                                  &nbsp;</p>
                              <p>
                                  鍾先生擁有逾十九年建築工作經驗，專門從事香港基建項目之採購，合約管理及項目管理。自2010年以來，鍾先生亦擔任英國工程高級文憑和學位課程導師以及指導學生研究論文。</p>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
          <p>
              &nbsp;</p>
          ','assessment' => '0','method' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','target' => '工程師或建造環境之營運及修護等相關專業之人士。','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '700','other_fee' => '0','payment' => 'CSH','quota' => '40','active' => '1','remark' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <p>
              &nbsp;</p>
          ','last_num' => '1'),
            array('id' => '55','area_id' => '5','code' => 'FCM009','name_zh' => '建築工程項目風險管理','name_en' => 'Risk management of construction projects','type' => 'WRK','description' => '<div>
              <table border="1" cellpadding="0" cellspacing="0">
                  <tbody>
                      <tr>
                          <td style="width:100px;height:11px;">
                              <p>
                                  <strong>課程時數</strong><strong>:</strong></p>
                          </td>
                          <td style="width:502px;height:11px;">
                              <p>
                                  6小時(分兩節，每節3小時)</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:100px;height:23px;">
                              <p>
                                  <strong>課程對象:</strong></p>
                          </td>
                          <td style="width:502px;height:23px;">
                              <p>
                                  土木工程師或建造環境之營運及修護等相關專業之人士。</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:100px;height:151px;">
                              <p>
                                  <strong>課程</strong><strong>簡介</strong><strong>:</strong></p>
                          </td>
                          <td style="width:502px;height:151px;">
                              <p>
                                  建築工程項目風險管理是指通過風險識別、風險分析和風險評價等去認識工程項目的風險，並以此為基礎合理地使用各種風險應對措施、管理方法、技術和手段對專案的風險實行有效的控制，妥善處理風險事件造成的不利後果，以最少的成本保證專案總體目標實現的管理工作。</p>
                              <p>
                                  本工作坊旨在讓學員了解建築工程項目風險管理，透過分享及研究港澳相關案例，分析出風險評估及制訂合適的風險回應及風險控制措施。</p>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:100px;height:198px;">
                              <p>
                                  <strong>課程內容</strong><strong>:</strong></p>
                          </td>
                          <td style="width:502px;height:198px;">
                              <ol>
                                  <li>
                                      建築工程風險管理概述 (1小時)<br />
                                      講解建築工程施工可能遇上之風險，透過有效的工程項目風險管理及數據分析，將風險控制或减至最低之工程影响。</li>
                                  <li>
                                      建築工程風險識別 (2小時)<br />
                                      講解如何運用結構工具協助識別風險，分析將工程項目管理及計劃合約是否存在不確定因素，再以表列方式分析問題。</li>
                                  <li>
                                      建築工程風險量化 (1小時)<br />
                                      建築工程風險可透過量化分析(機率分析或試算)來模擬該風險如果發生對專案目標的影響程度。利用量化分析可以計出專案完成時的日程或成本的各種機率，條件為必須輸入每個活動的連續機率估計，才可能達成分析。</li>
                                  <li>
                                      建築工程風險回應 (1小時)<br />
                                      建築工程風險回應是運用風險發生機率降低或消除或藉由外包轉移給第三者之方法，回應當工程風險出現時相對的處理方法，依工程風險優先順序，並將風險回應所需資源及活動，計算在風險回應的預算及管理之計劃。</li>
                                  <li>
                                      建築工程風險控制 (1小時)<br />
                                      建築工程風險可透過：風險規避、損失預防、損失抑制及風險隔離,風險轉嫁等方法控制，從而避免工程損失，降低及符合可接受之水平。</li>
                              </ol>
                          </td>
                      </tr>
                      <tr>
                          <td style="width:100px;height:175px;">
                              <p>
                                  <strong>導師簡介</strong><strong>:</strong></p>
                              <p>
                                  &nbsp;</p>
                              <p>
                                  &nbsp;</p>
                          </td>
                          <td style="width:502px;height:175px;">
                              <p>
                                  鍾汶諭先生為英國土木工程師學會（ICE）註冊土木工程師、英國皇家特許建造學會（CIOB）特許建造師、香港建築信息模型學會（HKIBIM）專業會員，以及(香港)持續專業教育･培訓中心CPE課程導師。</p>
                              <p>
                                  鍾先生擁有逾十九年建築工作經驗，專門從事香港基建項目之採購，合約管理及項目管理。自2010年以來，鍾先生亦擔任英國工程高級文憑和學位課程導師以及指導學生研究論文。</p>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
          <p>
              &nbsp;</p>
          ','assessment' => '0','method' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','target' => '土木工程師或建造環境之營運及修護等相關專業之人士。','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '700','other_fee' => '0','payment' => 'CSH','quota' => '40','active' => '1','remark' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <p>
              &nbsp;</p>
          ','last_num' => '1'),
            array('id' => '57','area_id' => '3','code' => 'BSN024','name_zh' => '『澳門註冊會計師/專業會計人員』-成本會計','name_en' => 'Cost Accounting','type' => 'LCT','description' => '<p>
              課程大綱：</p>
          <p>
              1、成本會計基本概念<br />
              2、變動成本法與吸納成本法<br />
              3、成本、數量、利潤分析<br />
              4、分批成本法<br />
              5、作業制成本法<br />
              6、分步成本法<br />
              7、靜態預算與彈性預算<br />
              8、預算差異分析<br />
              9、長期投資評估<br />
              10、聯產品與副產品<br />
              11、經營決策分析<br />
              12、輔助部門 / 共同成本的分配</p>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '『澳門註冊會計師/專業會計人員』考生及有興趣之人士','prerequisite' => '此課程為考試備試課程，建議學員具備一定的會計學知識','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '42','tution_fee' => '4200','other_fee' => '300','payment' => 'CNT','quota' => '30','active' => '1','remark' => '<p>
              溫馨提示：此課程為考試備試課程，建議學員具備一定的會計學知識</p>
          ','last_num' => '2'),
            array('id' => '58','area_id' => '41','code' => 'HNC002','name_zh' => '葡萄酒品研—澳美篇','name_en' => 'Wine tasting -  Australia & America','type' => 'LCT','description' => '<p>
              本課程主要是介紹新世界不同產酒國的氣候，環 境和釀酒風格對葡萄酒的影響，進一步及更深入 地認識美洲及大洋洲不同產區出產的葡萄酒特 性，增強學員對葡萄酒的品評和鑒賞能力，令學 員能夠有更充分的知識選擇不同風格的葡萄酒 作為食物配搭和不同場合品嚐之用，同時可以增 加學員外遊時參觀酒庄的樂趣。</p>
          <p>
              課程大綱:</p>
          <ul>
              <li>
                  澳洲</li>
              <li>
                  新西蘭</li>
              <li>
                  美國</li>
              <li>
                  阿根廷</li>
              <li>
                  智利</li>
              <li>
                  南非</li>
          </ul>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => NULL,'prerequisite' => NULL,'conduct_lang' => 'ENG,CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '12','tution_fee' => '1000','other_fee' => '350','payment' => 'CNT','quota' => '25','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '59','area_id' => '41','code' => 'HNC003','name_zh' => '葡萄酒品研—歐國篇','name_en' => 'Wine tasting -  Europe','type' => 'LCT','description' => '<p>
              課程內容： 課程詳情： 本課程主要是介紹舊世界產區中不同產酒國的 氣候，環境和釀酒風格對葡萄酒的影響，進一步 及更深入地認識歐洲不同產區出產的葡萄酒特 性，增強學員對葡萄酒的品評和鑒賞能力。令學 員能夠有更充分的知識選擇不同風格的葡萄酒 作為食物配搭和不同場合品嚐之用，同時可以增 加學員外遊時參觀酒庄的樂趣。</p>
          <p>
              課程大綱:</p>
          <p>
              介紹的產區包括:</p>
          <p>
               法國</p>
          <p>
               意大利</p>
          <p>
               西班牙</p>
          <p>
               葡萄牙</p>
          <p>
               匈牙利</p>
          <p>
               德國</p>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => NULL,'prerequisite' => NULL,'conduct_lang' => 'ENG,CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '12','tution_fee' => '1200','other_fee' => '500','payment' => 'CNT','quota' => '20','active' => '1','remark' => NULL,'last_num' => '2'),
            array('id' => '60','area_id' => '17','code' => 'TRA002','name_zh' => '實用英漢翻譯課程','name_en' => 'Practical English-Chinese Translation Course','type' => 'LCT','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '具備中學程度的中英語文能力對翻譯有興趣之人士','prerequisite' => '不適用','conduct_lang' => 'ENG,CNT','handout_lang' => 'ENG','certificate' => 'GNR','hours' => '15','tution_fee' => '1500','other_fee' => '0','payment' => 'CNT','quota' => '25','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '61','area_id' => '6','code' => 'LAW005','name_zh' => '信貸融資和財富管理業務相關之法律應用實務','name_en' => 'Legal application of credit financing and wealth management','type' => 'LCT','description' => '<div>
              <div>
                  <p>
                      &nbsp;</p>
              </div>
              <div>
                  &nbsp;</div>
          </div>
          ','assessment' => '0','method' => '<div>
              <p>
                  &nbsp;</p>
          </div>
          <div>
              不適用
              <p>
                  &nbsp;</p>
          </div>
          <div>
              &nbsp;</div>
          ','target' => '金融從業員、企業管理人員、修 讀金融或企業管理的學生。','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '12','tution_fee' => '1500','other_fee' => '0','payment' => 'CNT','quota' => '25','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '62','area_id' => '41','code' => 'HNC004','name_zh' => '葡萄酒品研—加強酒及特色酒篇','name_en' => 'Wine tasting -  Liquor and Mixed Drinks','type' => 'LCT','description' => '<p>
              為有意深入認識不同酒類風格的人事而設，本 課程分為兩個部分，第一部分重點探討一些具 特色的葡萄酒產區所釀製的葡萄酒風格及認 識標籤用語。第二部分是介紹烈酒、利口酒、 雞尾酒及日本清酒的類別和釀造方式，解讀常 見的標籤詞彙和品嚐的方法，讓學員更全面了 解不同酒類的風格和增加與食物配搭時的選 擇。</p>
          <p>
              課程大綱:</p>
          <p>
               西班牙赫雷斯 (Jerez) 產區</p>
          <p>
               葡萄牙馬德拉 (Madeira) 產區</p>
          <p>
               白蘭地 (Brandy)、干邑 (Cognac)及威士 忌 (Whiskey)</p>
          <p>
               朗姆酒 (Rum)、特基拉酒 (Tequila)及伏 特加 (Vodka)</p>
          <p>
               日本清酒 (Sake)</p>
          <p>
               利口酒 (Liqueurs)及雞尾酒 (Cocktails)</p>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '年滿 18 歲或以上之人士，不需任何基礎。','prerequisite' => '不適用','conduct_lang' => 'ENG,CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '12','tution_fee' => '1000','other_fee' => '350','payment' => 'CNT','quota' => '20','active' => '1','remark' => NULL,'last_num' => '2'),
            array('id' => '63','area_id' => '49','code' => 'WSP001','name_zh' => '團隊工作，得唔得？','name_en' => 'Teamwork or not?','type' => 'WRK','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '管理人員或對主題有興趣的人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '200','other_fee' => '0','payment' => NULL,'quota' => '20','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '64','area_id' => '50','code' => 'CPD006','name_zh' => '「地基工程施工技術」工作坊','name_en' => 'Foundation Construction Technology Workshop','type' => 'WRK','description' => NULL,'assessment' => '0','method' => '<p>
              參加者須完成6小時的課程後，方可獲頒發出席證明。</p>
          ','target' => NULL,'prerequisite' => NULL,'conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '800','other_fee' => '0','payment' => NULL,'quota' => '23','active' => '0','remark' => NULL,'last_num' => '1'),
            array('id' => '65','area_id' => '50','code' => 'CPD008','name_zh' => '「建築工程成本計劃與執行」工作坊','name_en' => 'Construction Cost Planning and Execution Workshop','type' => 'WRK','description' => NULL,'assessment' => '0','method' => '<p>
              參加者須完成6小時的課程後，方可獲頒發出席證明。</p>
          ','target' => NULL,'prerequisite' => NULL,'conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '800','other_fee' => '0','payment' => NULL,'quota' => '23','active' => '1','remark' => NULL,'last_num' => '2'),
            array('id' => '66','area_id' => '50','code' => 'CPD007','name_zh' => '「招標過程及審批程序」工作坊','name_en' => 'Tender process & Approval procedures Workshop','type' => 'WRK','description' => NULL,'assessment' => '0','method' => '<p>
              參加者須完成6小時的課程後，方可獲頒發出席證明。</p>
          ','target' => NULL,'prerequisite' => NULL,'conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '800','other_fee' => '0','payment' => NULL,'quota' => '23','active' => '1','remark' => NULL,'last_num' => '2'),
            array('id' => '67','area_id' => '50','code' => 'CPD010','name_zh' => '「建築工程時間管理及延誤處理」工作坊','name_en' => 'Construction Time Management & Delay Handling Workshop','type' => 'WRK','description' => NULL,'assessment' => '0','method' => '<p>
              參加者須完成6小時的課程後，方可獲頒發出席證明。</p>
          ','target' => NULL,'prerequisite' => NULL,'conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '800','other_fee' => '0','payment' => NULL,'quota' => '23','active' => '1','remark' => NULL,'last_num' => '2'),
            array('id' => '68','area_id' => '50','code' => 'CPD009','name_zh' => '「建築工程項目風險管理」工作坊','name_en' => 'Construction Task & Risk Management Workshop ','type' => 'WRK','description' => NULL,'assessment' => '0','method' => '<p>
              參加者須完成6小時的課程後，方可獲頒發出席證明。</p>
          ','target' => NULL,'prerequisite' => NULL,'conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '800','other_fee' => '0','payment' => NULL,'quota' => '23','active' => '0','remark' => NULL,'last_num' => '1'),
            array('id' => '69','area_id' => '50','code' => 'CPD003','name_zh' => '「建築安全措施」工作坊','name_en' => 'Construction Safety Measures Workshop','type' => 'WRK','description' => NULL,'assessment' => '0','method' => '<p>
              參加者須完成6小時的課程後，方可獲頒發出席證明。</p>
          ','target' => NULL,'prerequisite' => NULL,'conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '800','other_fee' => '0','payment' => NULL,'quota' => '23','active' => '0','remark' => NULL,'last_num' => '1'),
            array('id' => '70','area_id' => '49','code' => 'WSP002','name_zh' => '人脈資產管理','name_en' => 'Social Network Asset Management','type' => 'WRK','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '企業管理人員或對主題感興趣之人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '200','other_fee' => '0','payment' => NULL,'quota' => '20','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '71','area_id' => '49','code' => 'WSP003','name_zh' => '「人人做媽劇停」簡易市場學','name_en' => 'Everyone can do Marketing','type' => 'WRK','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '中小企創業和營運者、有意投入市場推廣人士，或對主題有興趣的人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '200','other_fee' => '0','payment' => NULL,'quota' => '20','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '72','area_id' => '3','code' => 'BSN025','name_zh' => '商務禮儀及專業形象塑造','name_en' => 'Business Etiquette and Professional Image Building','type' => 'LCT','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '有興趣之人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '9','tution_fee' => '1000','other_fee' => '0','payment' => NULL,'quota' => '30','active' => '1','remark' => NULL,'last_num' => '3'),
            array('id' => '73','area_id' => '36','code' => 'HEL004','name_zh' => '中醫養生保健班之小兒推拿','name_en' => 'Acupoint Massage of Chinese Medicine - Child Massage','type' => 'LCT','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '對本課程感興趣的人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '10','tution_fee' => '1500','other_fee' => '0','payment' => 'CNT','quota' => '16','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '74','area_id' => '49','code' => 'WSP004','name_zh' => '孩子財商育成工作坊—構建爸媽的理財觀','name_en' => 'Constructing Parents\' Financial Concept','type' => 'WRK','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '對主題感興趣之人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '200','other_fee' => '0','payment' => NULL,'quota' => '25','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '75','area_id' => '49','code' => 'WSP005','name_zh' => '孩子財商育成工作坊—陪子女搞懂理財','name_en' => 'Learn Money Management with your Children','type' => 'WRK','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '對主題感興趣之人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '200','other_fee' => '0','payment' => NULL,'quota' => '25','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '76','area_id' => '3','code' => 'BSN026','name_zh' => '專業秘書行政人員實務','name_en' => 'Office Practices for Professional Secretary and Administrative Assistant','type' => 'LCT','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '機構秘書、行政助理或有興趣提升行政技巧人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '24','tution_fee' => '2500','other_fee' => '0','payment' => NULL,'quota' => '30','active' => '1','remark' => NULL,'last_num' => '3'),
            array('id' => '77','area_id' => '49','code' => 'WSP006','name_zh' => '職場演說工作坊 - 溝通達人必修課','name_en' => 'Workplace Speech Workshop - Become a Better Speaker','type' => 'WRK','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '對主題感興趣之人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '200','other_fee' => '0','payment' => NULL,'quota' => '20','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '78','area_id' => '49','code' => 'WSP007','name_zh' => '澳門勞動關係法','name_en' => 'Macau Labour Relations Law','type' => 'WRK','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '人力資源工作者、管理層或對主題感興趣的人士 ','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '200','other_fee' => '0','payment' => NULL,'quota' => '20','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '79','area_id' => '49','code' => 'WSP008','name_zh' => '職場求生技能工作坊','name_en' => 'Workplace Survival Skills','type' => 'WRK','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '對主題感興趣之人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '200','other_fee' => '0','payment' => NULL,'quota' => '20','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '80','area_id' => '19','code' => 'NWS004','name_zh' => '公開演說技巧','name_en' => 'Public Presentation Skills','type' => 'LCT','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '對主題感興趣之人士','prerequisite' => NULL,'conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '12','tution_fee' => '1200','other_fee' => '0','payment' => NULL,'quota' => '20','active' => '1','remark' => NULL,'last_num' => '2'),
            array('id' => '81','area_id' => '3','code' => 'BSN027','name_zh' => '市場學','name_en' => 'Marketing','type' => 'LCT','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '對主題感興趣之人士','prerequisite' => NULL,'conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '18','tution_fee' => '1800','other_fee' => '0','payment' => NULL,'quota' => '20','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '82','area_id' => '51','code' => 'CTC001','name_zh' => '法律事務助理證書課程','name_en' => 'Certificate in Legal Affairs Assistant','type' => 'LCT','description' => NULL,'assessment' => '1','method' => '<ul>
              <li style="margin-left: 0.19in;">
                  出席率達80%或以上且通過考核之學員，可獲本院發出之證書；</li>
              <li style="margin-left: 0.19in;">
                  出席率達80%或以上但未能通過考核之學員，可獲本院發出之出席證明。</li>
          </ul>
          <p>
              &nbsp;</p>
          ','target' => '有興趣從事法律事務助理，及有興趣提升法律事務助理工作能力之人士。','prerequisite' => NULL,'conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'CRT','hours' => '20','tution_fee' => '2880','other_fee' => '0','payment' => NULL,'quota' => '20','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '83','area_id' => '41','code' => 'HNC005','name_zh' => '葡萄酒品研—歐國篇','name_en' => 'Wine tasting -  Europe','type' => 'LCT','description' => '<p>
              課程內容： 課程詳情： 本課程主要是介紹舊世界產區中不同產酒國的 氣候，環境和釀酒風格對葡萄酒的影響，進一步 及更深入地認識歐洲不同產區出產的葡萄酒特 性，增強學員對葡萄酒的品評和鑒賞能力。令學 員能夠有更充分的知識選擇不同風格的葡萄酒 作為食物配搭和不同場合品嚐之用，同時可以增 加學員外遊時參觀酒庄的樂趣。</p>
          <p>
              課程大綱:</p>
          <p>
              介紹的產區包括:</p>
          <p>
               法國</p>
          <p>
               意大利</p>
          <p>
               西班牙</p>
          <p>
               葡萄牙</p>
          <p>
               匈牙利</p>
          <p>
               德國</p>
          ','assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => NULL,'prerequisite' => NULL,'conduct_lang' => 'ENG,CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '12','tution_fee' => '1200','other_fee' => '500','payment' => 'CNT','quota' => '20','active' => '1','remark' => NULL,'last_num' => NULL),
            array('id' => '84','area_id' => '3','code' => 'BSN028','name_zh' => '項目及活動管理課程','name_en' => 'Event Planning and Management','type' => 'LCT','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '對主題感興趣之人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '12','tution_fee' => '1350','other_fee' => '0','payment' => NULL,'quota' => '20','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '92','area_id' => '36','code' => 'HEL005','name_zh' => '中醫養生保健班之養生飲食篇','name_en' => 'Physique Diet Course for TCM health care ','type' => 'LCT','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '對主題感興趣之人士','prerequisite' => NULL,'conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '10','tution_fee' => '0','other_fee' => '0','payment' => NULL,'quota' => '20','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '93','area_id' => '52','code' => 'IHT001','name_zh' => '督導管理技巧','name_en' => 'Supervisory Management Skills','type' => 'LCT','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到85%或以上，方可獲頒發出席證明。</p>
          ','target' => NULL,'prerequisite' => NULL,'conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '18','tution_fee' => '0','other_fee' => '0','payment' => NULL,'quota' => '23','active' => '0','remark' => NULL,'last_num' => '2'),
            array('id' => '95','area_id' => '52','code' => 'IHT002','name_zh' => '解決問題和決策技巧','name_en' => 'Problem Solving and Strategy Skills ','type' => 'LCT','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到85%或以上，方可獲頒發出席證明。</p>
          ','target' => NULL,'prerequisite' => NULL,'conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '15','tution_fee' => '0','other_fee' => '0','payment' => NULL,'quota' => '25','active' => '0','remark' => NULL,'last_num' => '1'),
            array('id' => '96','area_id' => '3','code' => 'BSN029','name_zh' => '有效溝通和團隊管理','name_en' => 'Effective Communication and Team Management','type' => 'LCT','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '對主題感興趣之人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '9','tution_fee' => '0','other_fee' => '0','payment' => NULL,'quota' => '20','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '97','area_id' => '51','code' => 'CTC002','name_zh' => '資產保值之樓宇管理實務證書課程','name_en' => 'Certificate in Building Management Practices - To Maintain Assets','type' => 'LCT','description' => NULL,'assessment' => '1','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '從事或計劃從事樓宇管理人士、大廈管理委員會成員及對課程內容有興趣之人士。','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'ENG,CHN','certificate' => 'CRT','hours' => '86','tution_fee' => '0','other_fee' => '0','payment' => NULL,'quota' => '25','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '98','area_id' => '50','code' => 'CPD011','name_zh' => '「外判管理」課程','name_en' => 'Outsourcing Management Course','type' => 'LCT','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => NULL,'prerequisite' => NULL,'conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '12','tution_fee' => '0','other_fee' => '0','payment' => NULL,'quota' => NULL,'active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '99','area_id' => '50','code' => 'CPD012','name_zh' => '「建築工地交通事故–成因分析、危害識別及安全措施」工作坊','name_en' => 'Traffic Accidents on Construction Sites-Cause Analysis, Hazard Spot and Safety Measures Workshop','type' => 'WRK','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => NULL,'prerequisite' => NULL,'conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '0','other_fee' => '0','payment' => NULL,'quota' => '23','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '100','area_id' => '50','code' => 'CPD013','name_zh' => '「建築工程的品質控制及管理」工作坊','name_en' => 'Quality Control and Management of Construction Work','type' => 'WRK','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => NULL,'prerequisite' => NULL,'conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '0','other_fee' => '0','payment' => NULL,'quota' => NULL,'active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '101','area_id' => '50','code' => 'CPD014','name_zh' => '「建築垃圾的可持續管理」工作坊','name_en' => 'Sustainable Management of Construction Waste','type' => 'WRK','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => NULL,'prerequisite' => NULL,'conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '6','tution_fee' => '0','other_fee' => '0','payment' => NULL,'quota' => NULL,'active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '102','area_id' => '3','code' => 'BSN030','name_zh' => '優化前線人員接待','name_en' => 'Enhance Reception Skills','type' => 'LCT','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => '有興趣人士','prerequisite' => '不適用','conduct_lang' => 'CNT','handout_lang' => 'CHN','certificate' => 'GNR','hours' => '24','tution_fee' => '0','other_fee' => '0','payment' => NULL,'quota' => '25','active' => '1','remark' => NULL,'last_num' => '1'),
            array('id' => '104','area_id' => '2','code' => 'WSET001','name_zh' => 'WSET','name_en' => NULL,'type' => 'LCT','description' => NULL,'assessment' => '0','method' => '<p>
              出席率必須達到80%或以上，方可獲頒發出席證明。</p>
          ','target' => NULL,'prerequisite' => NULL,'conduct_lang' => NULL,'handout_lang' => NULL,'certificate' => NULL,'hours' => '15','tution_fee' => '0','other_fee' => '0','payment' => NULL,'quota' => NULL,'active' => '1','remark' => NULL,'last_num' => '2')
          );
        foreach($data as $d){
            Course::create($d);
        }
    }
}
