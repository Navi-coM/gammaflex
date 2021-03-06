<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GammaFlex | Главная</title>
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/normalize.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../Magnific-popup/magnific-popup/magnific-popup.css" rel="stylesheet"> -->
    <link href="../css/experiment.css" rel="stylesheet">
    <link href="../font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
  </head>

  <body>
    <div class="wrapper">

      <div class="header">
        <a href="../index.html"><img id="block1" class="header__logo" src="../img/without_shadow1.png" alt="logotip"></a>
        <div id="block2" class="header-nav-menu">
          <div class="header-nav-menu__list">
           <a href="./about_us.html">
             <span class="header-nav-menu__list--color3" data-hover="О нас">
               <i class="fa fa-users fa-3x" aria-hidden="true"></i>
              </span>
            </a>
           <a href="./products.html">
             <span class="header-nav-menu__list--color2" data-hover="Продукция">
               <i class="fa fa-get-pocket fa-3x" aria-hidden="true"></i>
              </span>
            </a>
           <a href="./test.html">
             <span class="header-nav-menu__list--color1"  data-hover="Новости">
               <i class="fa fa-sticky-note fa-3x" aria-hidden="true"></i>
              </span>
            </a>
           <a href="./contact.html">
             <span class="header-nav-menu__list--color4" data-hover="Контакты">
               <i class="fa fa-compress fa-3x" aria-hidden="true"></i>
             </span>
            </a>
           <a href="./test.html">
             <span class="header-nav-menu__list--color5" data-hover="Документы">
               <i class="fa fa-file-text fa-3x" aria-hidden="true"></i>
             </span>
           </a>
          </div>        
        </div> 
        <div id="block3" class="header-slogan">
          <span class="first">Наши возможности опережают ваши желания!</span> 
          <span class="second">+38(067)5698024</span>
       </div>  
      </div>
      
      <div class="space-panel"> 
        <div id="block4" class="block-panel">
          <div class="block-panel__double-section block-panel__section--green2">
            <a id="btn-registration" href="#form">
             <span id="change-window">НАПИСАТЬ НАМ
                <p id="masked-text">Напишите нам и мы свяжемся с вами в ближайшее время</p>
             </span>
            </a>
          </div>



        <div id="modal_form"> 
          <span id="modal_close">X</span> 
            <form action="" name="form" method="post">
              <div class="form-group">
                <input name="name" type="text" class="form-control name" id="name" placeholder="Ваше имя" required/>
              </div>
              <div class="form-group">
                <input name="phone" type="text" placeholder="Номер телефона" class="form-control phone" required/>
              </div>

              <textarea rows="2" cols="70" name="message" placeholder="Введите ваше сообщение:" class="message" required></textarea></br></br>

              <button name="send" class="btn btn-default feedback">Отправить</button>
             </form>   
          </div>

           <div id="overlay">
           </div> 



         <!--  <div id="modal_form"> 
            <span id="modal_close">X</span> 

              <form action=""
               name="form" method="post">
               <div class="form-group">
                
                <input name="name" type="text" class="form-control name" id="name" placeholder="Ваше имя" required/>
                </div>
                <div class="form-group">
                
                <input name="tell" type="text" placeholder="Номер телефона" class="form-control tell" required/>
                </div>
                

                <textarea rows="20" cols="70" name="subject" placeholder="Введите ваше сообщение:" class="message" required></textarea></br></br>

                <button name="send" class="btn btn-default feedback">Отправить</button>
              </form>   

             </div>

           <div id="overlay">
                 
           </div>  -->

          <div class="block-panel__double-section  block-panel__section--yellow">
          <a href="./test.html">
            <i class="fa fa-delicious fa-3x" aria-hidden="true"></i>
              <span class="psevdo-layer">BAG-IN-BOX ПАКЕТЫ</span>
              </a>
          </div>
          <div id="block-animate" class="block-panel__double-section block-panel__section--purple2">
            <a href="./test.html">
              <span class="psevdo-layer">ПОЛИЭТИЛЕНОВАЯ ПЛЁНКА</span>
            </a>
          </div>        
      </div>

      <div id="block5" class="block-panel">
         <div class="block-panel__section block-panel__section--green">
           <a href="./about_us.html">
            <i class="fa fa-users fa-3x" aria-hidden="true"></i>
            <span class="psevdo-layer">О НАC
            </span>
           </a>          
         </div>       
         <div class="block-panel__section block-panel__section--violet">
          <a href="./products.html">
           <i class="fa fa-get-pocket fa-3x" aria-hidden="true"></i>
            <span class="psevdo-layer">ПРОДУКЦИЯ</span>
           </a>
          </div>
          <div class="block-panel__double-section block-panel__section--purple">
            <a href="./test.html">
              <span class="psevdo-layer">ВИКЕТ-ПАКЕТЫ
              </span>
            </a>
          </div>
          <div class="block-panel__section block-panel__section--violet">
           <a href="./contact.html">
            <i class="fa fa-compress fa-3x" aria-hidden="true"></i>
             <span class="psevdo-layer">КОНТАКТЫ</span>
           </a>
          </div>
          <div class="block-panel__section block-panel__section--green">
           <a href="./test.html">
            <i class="fa fa-file-text fa-3x" aria-hidden="true"></i>
             <span class="psevdo-layer">ДОКУМЕНТЫ</span>
            </a>
          </div>
        </div>
          
        <div id="block6" class="block-panel">
          <div class="block-panel__doubledouble-section block-panel__section--animate"> 
            <div id="myCarousel" class="carousel slide" data-interval="3500" data-ride="carousel">
                  <!-- Индикаторы для карусели -->
                  <ol class="carousel-indicators">
                    <!-- Перейти к 0 слайду карусели с помощью соответствующего индекса data-slide-to="0" -->
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <!-- Перейти к 1 слайду карусели с помощью соответствующего индекса data-slide-to="1" -->
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <!-- Перейти к 2 слайду карусели с помощью соответствующего индекса data-slide-to="2" -->
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>   
                  <!-- Слайды карусели -->
                  <div class="carousel-inner">
                    <!-- Слайды создаются с помощью контейнера с классом item, внутри которого помещается содержимое слайда -->
                    <div class="active item">
                      <img src="../img/img_for_slide/33.jpg" alt="">
                      <div class="carousel-caption">
                        <h3>Экструдер для произвоства рукава НД</h3>
                        <p>Так мы получаем лучший по качеству рукав!</p>
                      </div>
                    </div>
                    <!-- Слайд №2 -->
                    <div class="item">
                      <img src="../img/img_for_slide/22.jpg" alt="">
                      <div class="carousel-caption">
                        <h3>Линия для производства пакетов</h3>
                        <p>Здесь мы производим свои пакеты</p>
                      </div>
                    </div>
                    <!-- Слайд №3 -->
                    <div class="item">
                      <img src="../img/img_for_slide/12.jpg" alt="">
                      <div class="carousel-caption">
                        <h3>Пакетоделательная машина</h3>
                        <p>Производит пакеты с ручкой</p>
                      </div>
                    </div>
                  </div>
                 </div>
              </div>

        <div class="block-panel__double-section block-panel__section--bordo">
          <a href="./test.html">
           <i class="fa fa-thumbs-o-up fa-3x" aria-hidden="true"></i>
            <span class="psevdo-layer">СПЕЦИАЛЬНОЕ ПРЕДЛОЖЕНИЕ</span>
          </a>
         </div> 
        </div>
      </div>
      
      <div id="block7" class="block-third">
        <table class="block-third-table">
          <tr class="block-third-table__row block-third-table__row--top">
            <td>О нас</td>
            <td>Почему мы</td>
            <td>Преимущества</td>
          </tr>
          <tr class="block-third-table__row block-third-table__row--bottom">
            <td>Высокое качество продукции<br/>Стабильный курс развития<br/>На рынке более 7 лет</td>
            <td>Нас рекомендуют клиенты<br/>Мы держим слово<br/>С нами выгодно</td>
            <td>Высокие стандарты качества<br/>Оптимальные сроки заказов<br/> Модернизация технологий производства<br/></td>
          </tr>
           <img class="block-third__logo" src="../img/without_shadow1.png" alt="logotip">
        </table>
      </div>
      
      <div id="block8" class="call">
        <a id="btn-call" href="#call" class="call__button">
          Заказать обратный звонок
        </a>
         <div id="modal_form1"> 
            <span id="modal_close1">X</span> 
              <form id="call">
                <input type="text" name="name" placeholder="Ваше имя" class="name" required/></br>
                <input id="phone" type="tel" name="tel" placeholder="Ваш номер телефона" class="number-telefon" type="number" required/></br></br>
                <input name="submit" class="btn" type="submit" value="Отправить" />
              </form>          
          </div>
          <div id="overlay1">
            Пoдлoжкa
          </div>
        <p class="call__text">Мы перезвоним вам в течении 10 минут.</p>
      </div>
    

    <script type="text/javascript" src="../script/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../jquery/jquery_Masked.js"></script>
    <script src="../script/bootstrap.min.js"></script> 
    <script src="../script/modernizr.custom.js"></script>

    <script type=text/javascript>
      $(document).ready(function(){

        // $('#block1, #block2, #block3').animate({opacity: "0"});
          $('#block1').delay(350).animate({opacity: "1"}, 850); 
          $('#block2').delay(700).animate({opacity: "1"}, 850);
          $('#block3').delay(1100).animate({opacity: "1"}, 850);
          $('#block4').delay(1500).animate({opacity: "1"}, 850); 
          $('#block5').delay(1900).animate({opacity: "1"}, 850);
          $('#block6').delay(2200).animate({opacity: "1"}, 850);
          $('#block7').delay(2700).animate({opacity: "1"}, 1000); 
          $('#block8').delay(3100).animate({opacity: "1"}, 1000);
      });
    </script>

    <script>
      $(document).ready(function(){

        var flag = 0;
        var interval = setInterval(go);

        function go () {
          
          if (flag == 0) {
            animate('190px', '0', '.8');
            flag = 1;
          } 
          else {
            animate('30px', '160px', '.6');
            flag = 0;
          }
        }

        function animate (height, top, opacity) {
          $('#change-window').delay(6000).animate({height: height, top: top, opacity: opacity}, 1700);

          $('#masked-text').delay(6000).animate({height: height, opacity: opacity}, 1700);
        }
      });
  </script>


<!-- <script>
      $(document).ready(function(){

        function animate (height, top, opacity) {
          $('#change-window').delay(6000).animate({height: height, top: top, opacity: opacity},1700);

          $('#masked-text').delay(7000).animate({height: height, opacity: opacity},1700);
        }
      });
  </script>


  <script>
 
    $(document).ready(function(){

      var spamChange =  $('.change');

     spamChange.mouseover(function() {
       $(this).addClass('change1');
     })

     spamChange.mouseout(function() {
       $(this).removeClass('change1');
     });

   });
  </script>  --> 
    <!-- <script type=text/javascript>
      $(document).ready(function(){

        $('#block-animate').delay(2000).animate({opacity: "0"}, 2000);
          $('#block-animate').delay(3000).animate({opacity: "1"}, 2000); 

      });
    </script> -->

    <!-- <script type=text/javascript>
        window.onload = function(){
          var logo = document.getElementById('test');
          setTimeout(function add() {
          logo.classList.add('hover');
           },-400);
          setTimeout(function rem() {
            logo.classList.remove('hover');
          }, 5100);
        }
    </script> -->

    <script>
    $(document).ready(function(){
      $('#btn-registration').click(function(event){
        event.preventDefault();
        $('#overlay').fadeIn(500,function(){
          $('#modal_form').css('display','block').animate({opacity:1,top:'50%'},500);
        });
      });
      
    $('#modal_close, #overlay').click(function(){
       $('#modal_form').animate({opacity:0,top:'45%'},200,function(){
         $(this).css('display','none');
         $('#overlay').fadeOut(400);
       });
      });
    });
  </script>

<!-- PHP Code  -->
   
<?php
    print($_POST['name']);
    print($_POST['phone']);
    print($_POST['message']);

    
    if (!empty($_POST['name']) AND !empty($_POST['phone']) AND !empty($_POST['message']) ){
      print('here');
      
    //die();
      $headers = 'From: GammaFlex\r\n'.
            'Reply-To: juliya.gammaflex@gmail.com\r\n'.
            'X-Mailer: PHP/'. phpversion();
      $theme = 'Новое сообщение';

      $letter = 'Данные сообщения:\r\n';
      $letter .='Имя:'.$_POST['name'].'\r\n';
      // $letter .='E-mail:'.$_POST['email'].'\r\n';
      $letter .='Телефон:'.$_POST['phone'].'\r\n';
      $letter .='Сообщение:'.$_POST['message'].'\r\n';

      if (mail('juliya.gammaflex@gmail.com', $theme, $letter, $headers )){
        print('done');
    //header('Location:/thankyou.php');
} else{
print('error');
}
}

?>



    <script> 
        $(document).ready(function() {

      //E-mail Ajax Send
      $("#form").submit(function() { //Change
        var th = $(this);
        $.ajax({
          type: "POST",
          url: "../php/submit.php", //Change
          data: th.serialize()
        }).done(function() {
          alert("Thank you!");
          setTimeout(function() {
            // Done Functions
            th.trigger("reset");
          }, 1000);
        });
        return false;
       });
      });
     </script>  

  </body>
</html>