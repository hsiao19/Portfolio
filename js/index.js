var workCategory = 0
// 0 for all
// 1 for research
// 2 for ui
// 3 for design
// 4 for digital
// 5 for code

$(document).ready(function(){
   $("#menu").click(function(){
     $(".menuSelection").toggle();
   });

   $(".menuSelection").click(function(){
         $(".menuSelection").hide();
       }
   );
   $(".leftnav").click(function(){
         $(".menuSelection").hide();
       }
   ); 

  $(window).resize(function() {
      console.log($( window ).width());

      
      var winWidth = $( window ).width();

      if(winWidth > 900) {
        $(".menuSelection").hide();
      }

      if (workCategory == 0){
        if (winWidth > 1300){
          $('#workCollections').css({'height' : '1850px'});
        }
        else if (winWidth <= 1300 && winWidth > 1200){
          $('#workCollections').css({'height' : '2230px'});
        }
        else if (winWidth <= 1200 && winWidth > 900){
          $('#workCollections').css({'height' : '2980px'});
        }
        else {
          $('#workCollections').css({'height' : '6250px'});
        }
      }
      else if (workCategory == 1){
        if (winWidth > 900){
          $('#workCollections').css({'height' : '700px'});
        }
        else {
          $('#workCollections').css({'height' : '1050px'});
        }
      }

      if(winWidth < 480) {
        $("#popup_hot_spring_care_team").html("計畫發想 | 蔡維庭 甯國駿 汪瑋宸 吳筠綺</br>" +
                                              "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " +
                                              "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" +
                                              " 葉家渝 許思聰 蕭宇彤</br>" +
                                              "使用者訪談 | 吳筠綺 葉家渝</br>" +
                                              "硬體設計 | 蔡維庭 甯國駿</br>" +
                                              "介面設計 | 汪瑋宸</br>" +
                                              "程式設計 | 蔡維庭 甯國駿 汪瑋宸 蕭宇彤</br>" +
                                              "產品外觀設計 | 吳筠綺 葉家渝 許思聰")
      }
      else {
        $("#popup_hot_spring_care_team").html("計畫發想 | 蔡維庭 甯國駿 汪瑋宸 吳筠綺 葉家渝 許思聰 蕭宇彤</br>" +
                                              "使用者訪談 | 吳筠綺 葉家渝</br>" +
                                              "硬體設計 | 蔡維庭 甯國駿</br>" +
                                              "介面設計 | 汪瑋宸</br>" +
                                              "程式設計 | 蔡維庭 甯國駿 汪瑋宸 蕭宇彤</br>" +
                                              "產品外觀設計 | 吳筠綺 葉家渝 許思聰")        
      }

      if(winWidth < 370) {
        $("#start_name").html("YU-TUNG,HSIAO </br>蕭宇彤")
        $("#exp_details_livehouse_2_0").html("2015 10 " + 
                                             "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " +
                                             "DCT進行式松菸展 " + "</br> " + 
                                             "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " +
                                             "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " +
                                             "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " +
                                             " Live House 2.0");
        $("#exp_details_livehouse_1_0").html("2015 05 " + 
                                             "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " +
                                             "政大數位內容畢展 " + "</br> " + 
                                             "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " +
                                             "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " +
                                             "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " +
                                             " Live House");
        $("#exp_details_hot_spring").html("2016 01 " + 
                                         "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " +
                                         "台大物聯網專案 " + "</br> " + 
                                         "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " +
                                         "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " +
                                         "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " +
                                         " Hot Spring Care");
        $("#exp_details_ODSS").html("2015 12 " + 
                                     "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " +
                                     "政大資管畢業專題 " + "</br> " + 
                                     "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " +
                                     "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " +
                                     "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " +
                                     " 訂貨決策系統");
        
      }
      else {
        $("#start_name").html("YU-TUNG,HSIAO 蕭宇彤")
        $("#exp_details_livehouse_2_0").html("2015 10 " + 
                                             "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " +
                                             "DCT進行式松菸展 " + 
                                             " Live House 2.0");
        $("#exp_details_livehouse_1_0").html("2015 05 " + 
                                             "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " +
                                             "政大數位內容畢展 " + 
                                             " Live House");
        $("#exp_details_hot_spring").html("2016 01 " + 
                                         "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " +
                                         "台大物聯網專案 " + 
                                         " Hot Spring Care");
        $("#exp_details_ODSS").html("2015 12 " + 
                                     "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " +
                                     "政大資管畢業專題 " +
                                     " 訂貨決策系統");

      }
   });

  
  

  // choose work category
  $(".select_all").click(function(){
    $(".item").hide();
    $(".item").show();
    workCategory = 0;
  });

  $(".select_research").click(function(){
    $(".item").hide();
    $(".research").show();
    workCategory = 1;
  });

  $(".select_ui").click(function(){
    $(".item").hide();
    $(".ui").show();
    workCategory = 2;
  });

  $(".select_design").click(function(){
    $(".item").hide();
    $(".design").show();
    workCategory = 3;
  });

  $(".select_digital").click(function(){
    $(".item").hide();
    $(".digital").show();
    workCategory = 4;
  });

  $(".select_code").click(function(){
    $(".item").hide();
    $(".code").show();
    workCategory = 5;
  });

  $("#hot_spring_care").click(function(){
    hot_spring_care_popup.show();
  });

  $("#app").click(function(){
    app_popup.show();
  });

  $("#openHCI").click(function(){
    openHCI_popup.show();
  });



  

});

var hot_spring_care_html = "" +
    "<div class='popup' id='hot_spring_care_popup'>" +
        "<div class='popup_title1'>Hot Spring Care</div>" +
        "<div class='popup_tag'>research, 程式設計</div>" + 

        

        '<div class="popup_content">' +
            "<div class='popup_title2'>INTRODUCTION</div>" +
            "<div class='popup_content1'>" +
                "Hot Spring Care 是產品創新與設計的課程專案，" +
                "課程由台大網媒、台科工設聯合開設，" +
                "我上學期以旁聽生身分參與這堂課的專案討論。" +
            "</div>" +
            "<div class='popup_content1'>" +
                "Hot Spring Care 為智慧泡湯安全系統，" +
                "透過產品臂環的「心跳脈搏脈衝傳感器」及「水位感應器」，" +
                "隨時偵測使用者的身體狀況，計算出安全、合適的泡湯時間。" +
                "並且主動以聲音和亮光，提醒使用者定時身休息，" +
                "避免身體不適而發生泡湯意外。" +
                "此外，使用者的泡湯資訊，也會隨時上傳雲端，" +
                "溫泉飯店人員可以透過行動裝置APP，掌握每層、" +
                "每個房間使用者的狀況，在顧客發生緊急情況時，能夠給予及時的協助。" +
            "</div>" +
            '<div class="popup_img hot_spring_care_img_g1">' + 
                '<img src="img/popup/hot_spring_care_2.png" />' + 
                '<img src="img/popup/hot_spring_care_1.png" />' + 
            '</div>' + 
        "</div>" +
        
        '<div class="popup_content">' +
            "<div class='popup_title2'>PROBLEM DEFINITION</div>" +
            "<div class='popup_content1'>" +
                "泡溫泉是一種享受、舒壓，" +
                "更能夠促進血液循環，對人體的助益良多，" +
                "但在享受的同時，大家是否都牢記並確實遵守泡湯的注意事項呢？" +
                "其中浸泡溫泉「時間一次不宜超過15分鐘」與「高度不宜超過心臟」" +
                "是需要特別注意的，若忽略溫泉浸泡時間及心率不正常的狀況，" +
                "可能導致呼吸急促、頭暈等身體不適的危險。" +
                "因此以這兩項為核心目標，設計更符合使用者需求的產品。" +
            "</div>" +
        "</div>" +

        '<div class="popup_content">' +
            "<div class='popup_title2'>USER OBSERVATIONS</div>" +
            "<div class='popup_title3'>1.泡湯者</div>" +
            "<div class='popup_content1'>" +
                "訪問經常泡湯的使用者，" +
                "是否在泡湯前會詳讀注意事項並確實的遵守？" +
                "根據這一點，大部分的泡湯者並不太會詳讀，" +
                "或只是邊泡湯邊看，僅此而已。" +
                "其中最重要的「每泡15分鐘後是否會休息」的問題，" +
                "泡湯者表示並不會計時，也不太會注意時間，" +
                "感受到自身身體不適才會起身休息，" +
                "若泡太久會導致呼吸困難、暈眩等狀況，" +
                "攸關自身安全的注意事項，泡湯者卻沒有確實遵守，" +
                "若發生意外，沒有及時救援可能導致生命危險，" +
                "而這正是潛在的問題點。" +
            "</div>" +
            "<div class='popup_title3'>2.溫泉業者</div>" +
            "<div class='popup_content1'>" +
                "不僅泡湯者需要注意時間，" +
                "對溫泉業者來說，" +
                "提醒泡湯者不要泡太久是會特別提醒客人的注意事項之一，" +
                "此外他們最重要的工作之一是要定時巡視大眾湯的狀況，" +
                "在發現泡湯者呼吸急促及其他不舒適的徵兆時及時阻止。" +
                "反觀個人湯屋，溫泉業者無法掌握客人的狀況，" +
                "僅能等待「緊急事故鈴」響起才能得知狀況，" +
                "不論對泡湯者或是溫泉業者都是風險，更是潛在的隱憂。" +
            "</div>" +
        "</div>" +

        '<div class="popup_content">' +
            "<div class='popup_title2'>KEY INSIGHTS</div>" +
            "<div class='popup_content1'>" +
                "為能夠確保泡湯者的生命安全，" +
                "於泡湯時需能夠即時掌握泡湯者身體資訊。" +
                "此資訊也須能夠被家屬及溫泉業者或具有相關急救知識之人士所立即得知。" +
            "</div>" +
            "<div class='popup_content1'>" +
                "除了即時資料讀取與資訊分享的概念以外，" +
                "最重要的莫過於精準的掌握泡湯者的心率數值，" +
                "透過監控泡湯者心率數值可以快速的分析泡湯者身理狀況是否出現危險。" +
            "</div>" +
            "<div class='popup_content1'>" +
                "此外，另一潛在危險因素為泡湯溫泉高度，" +
                "當溫泉水位高過於心臟，可能引起老人、小孩、" +
                "或心臟負荷較差之泡湯者身體不適，甚至暈倒，" +
                "這些意外往往是突然發生的，" +
                "因此，需極度避免溫泉水位高於心臟或泡太久。" +
            "</div>" +
        "</div>" +

        '<div class="popup_content">' +
            "<div class='popup_title2'>DESIGN AND IMPLEMENTATION</div>" +
            "<div class='popup_content1'>" +
                "透過臂環水位感測、心律感測器隨時偵測使用者的身體狀況，" +
                "計算出安全、合適的泡湯時間，並且主動以聲音和亮光，提醒使用者定時休息。" +
                "此外產品並搭載藍芽模組將數據傳至雲端伺服器。" +
                "由此一來溫泉飯店人員便可以透過行動裝置，掌握位使用者的狀況，給予及時的協助。" +
            "</div>" +
            "<div class='popup_content1'>" +
            "<div class='popup_title3'>臂環:</div>" +
            '<div class="popup_img hot_spring_care_img_g2">' + 
                '<img src="img/popup/hot_spring_care_3.png" />' + 
            '</div>' +
            "<div class='popup_title3'>APP / 網站:</div>" +
            '<div class="popup_img hot_spring_care_img_g2">' + 
                '<img src="img/popup/hot_spring_care_4.png" />' + 
            '</div>' +
            "</div>" +
        "</div>" +

        '<div class="popup_content ">' +
            "<div class='popup_title2'>TEAM</div>" +
            "<div class='popup_content1 popup_content_team' id='popup_hot_spring_care_team'>" +
                "計畫發想 | 蔡維庭 甯國駿 汪瑋宸 吳筠綺 葉家渝 許思聰 蕭宇彤</br>" +
                "使用者訪談 | 吳筠綺 葉家渝</br>" +
                "硬體設計 | 蔡維庭 甯國駿</br>" +
                "介面設計 | 汪瑋宸</br>" +
                "程式設計 | 蔡維庭 甯國駿 汪瑋宸 蕭宇彤</br>" +
                "產品外觀設計 | 吳筠綺 葉家渝 許思聰" +
            "</div>" +
        "</div>" +
        
    "</div>";

var hot_spring_care_popup = new SimpleModal({
    body: hot_spring_care_html,
    size: 'medium',
    maximumModals: 1,
})

var app_html = "" +
    "<div class='popup' id='app_popup'>" +
        "<div class='popup_title1'>飲料店 原料訂購 APP 設計</div>" +
        "<div class='popup_tag app_tag'>UI 設計</div>" + 

        '<div class="app_popup_content_block">' + 

        '<div class="popup_content app_index app_popup_content">' +
            '<div class="popup_img app_index_img">' + 
                '<img src="img/popup/app_1.png" />' + 
            '</div>' +             
        "</div>" +
        
        '<div class="popup_content app_popup_content">' +
            "<div class='popup_title2 app_intro_title'>INTRODUCTION</div>" +
            "<div class='popup_content1'>" +
                "此為針對飲料店加盟商</br>" + 
                "訂購商品原料時</br>" +
                "所設計的App介面。</br>" +
            "</div>" +
            "<div class='popup_content1'>" +
                "飲料商有基本三大需求 : </br>" +
                "訂購流程簡便、</br>" +
                "提供資訊方便決策、</br>" +
                "可即時接公司最新資訊</br>" +
            "</div>" +
            "<div class='popup_content1'>" +
                "基於這些需求我進行了以下設計。" +
            "</div>" +
            '<div class="popup_img app_content_img">' + 
                '<img src="img/popup/app_2.png" />' +
                '<img src="img/popup/app_4.png" />' +
                '<img src="img/popup/app_5.png" />' +
                '<img src="img/popup/app_6.png" />' +
                '<img src="img/popup/app_7.png" />' +
            '</div>' +
        "</div>" +   
    "</div>";

var app_popup = new SimpleModal({
    body: app_html,
    size: 'medium',
    maximumModals: 1,
})

var openHCI_html = "" +
    "<div class='popup' id='openHCI_popup'>" +
        "<div class='popup_title1'>Take Me Home</div>" +
        "<div class='popup_tag'>research, 程式設計</div>" + 

        

        '<div class="popup_content">' +
            "<div class='popup_title2'>INTRODUCTION</div>" +
            "<div class='popup_content1'>" +
                "Take Me Home 是我在 openHCI 人機互動工作坊中參與的專案，" +
                "工作坊結合工程與設計兩方面的人員，" +
                "透過設計思考流程，" +
                "在為期一星期的工作坊中合作完成人機互動專案。" +
            "</div>" +
            "<div class='popup_content1'>" +
                "Take Me Home " + 
                "是一個喚起人們對物品重視的計畫。" +
                "賣場中常會有被錯置的物品，" +
                "但人們往往會忽視此現象的存在，" +
                "我們透過商品擬人化的呼喊動作，" +
                "喚起人們對此現象的重視。" +
                "我們在展場中放置一顆俱有擬人化動作的抱枕與距離感測" +
                "當人們接近抱枕時，" +
                "抱枕會快速拍打四肢，" +
                "做出呼喊的動作，" +
                "而這時將抱枕抱起，" +
                "抱枕便會做出安穩呼吸的動作。" +
            "</div>" +
        "</div>" +
        
        '<div class="popup_content ">' +
            "<div class='popup_title2'>OBSERVATIONS</div>" +
            "<div class='popup_content1'>" +
                "實際前往 IKEA 觀察尋找潛在問題，" +
                "我們發現商場中常會有物品被錯置的現象，" +
                "我們對此現象深感興趣，" +
                "因此以此為出發點作為我們專案的核心。" +
            "</div>" +

            "<div class='popup_content1'>" +
                "1. 賣場環境：" +
                "賣場動線為單一方向，" +
                "若是拿錯物品並沒有機會將物品歸回原位，" +
                "雖然在賣場最後設有棄物藍，" +
                "但在整趟購物旅程中是不方便的，" +
                "因此才會形成消費者隨手放置物品的情形。" +
            "</div>" +

            "<div class='popup_content1'>" +
                "2. 店員：" +
                "訪問 IKEA 店員若發現商品被錯置，" +
                "會採取什麼應對措施。" +
                "店員表示並不會對此現象特別進行處理，" +
                "即使看到被錯置的物品" +
                "也只會保持原狀，" +
                "僅會在收店時做一次全盤檢查，" +
                "統一將物品擺放回原位。" +
            "</div>" +
            "<div class='popup_content1'>" +
                "3. 店內顧客：" +
                "觀察顧客發現錯置物品的反應，" +
                "大部分消費者會因注意到而停留，" +
                "但並沒有做出其他動作，" +
                "僅有一到兩成消費者會將物品擺回原位。" +
            "</div>" +

            

            '<div class="popup_img min_250_normal_50">' + 
                '<img src="img/popup/openHCI_1.jpg" />' + 
            '</div>' + 
        "</div>" +

        '<div class="popup_content">' +
            "<div class='popup_title2'>KEY INSIGHTS</div>" +
            "<div class='popup_content1'>" +
                "我們發現" +
                "賣場動線為單一方向，" +
                "消費者並沒有機會將物品歸回原位，" +
                "因此才會產生隨手放置物品的情形。" +
                "但錯置現象雖然存在，" +
                "卻並不造成消費者與店家太大的困擾，" +
                "因此最後我們專案的目的，" +
                "並不在於解決這一問題，" +
                "而是專注在呈現我們發現的這個現象。" +
                "" +
            "</div>" +
        "</div>" +

        '<div class="popup_content">' +
            "<div class='popup_title2'>DESIGN AND IMPLEMENTATION</div>" +
            "<div class='popup_content1'>" +
                "臂環使用水位感測、心律感測器偵測使用者身體狀態，" +
                "並搭載藍芽模組將使用者資訊傳至 Intel Edison 開發板，" +
                "開發板將初步處理之後便將數據傳至雲端伺服器。" +
                "由此一來使用者便能透過手機 app 觀看泡湯者資訊。" +
            "</div>" +
            "<div class='popup_content1'>" +
            "<div class='popup_title3'>臂環:</div>" +
            '<div class="popup_img hot_spring_care_img_g2">' + 
                '<img src="img/popup/hot_spring_care_3.png" />' + 
            '</div>' +
            "<div class='popup_title3'>APP / 網站:</div>" +
            '<div class="popup_img hot_spring_care_img_g2">' + 
                '<img src="img/popup/hot_spring_care_4.png" />' + 
            '</div>' +
            "</div>" +
        "</div>" +

        '<div class="popup_content">' +
            "<div class='popup_title2'>TEAM</div>" +
            "<div class='popup_content1'>" +
                "計畫發想 | 蔡維庭 甯國駿 汪瑋宸 吳筠綺 葉家渝 許思聰 蕭宇彤</br>" +
                "使用者訪談 | 吳筠綺 葉家渝</br>" +
                "硬體設計 | 蔡維庭 甯國駿</br>" +
                "網站架設 | 汪瑋宸</br>" +
                "程式設計 | 蔡維庭 甯國駿 汪瑋宸 蕭宇彤</br>" +
                "產品外觀設計 | 吳筠綺 葉家渝 許思聰" +
            "</div>" +
        "</div>" +
        
    "</div>";

var openHCI_popup = new SimpleModal({
    body: openHCI_html,
    size: 'medium',
    maximumModals: 1,
})


  


