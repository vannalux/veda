<!DOCTYPE html>
<html lang="ru"> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="favicon.ico" type="image/x-icon" />
<style>
@import url('https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap');
</style>

<link rel="icon" href="../rc_images/free_icon_vk_3938067.png" type="image/png" />

	<title></title>
	<link rel="stylesheet" type="text/css" href="posta_php.css?h=d1b09069">
</head>
<body>
<div class="textstyle1">
<div id="container_53797471"><div id="container_53797471_padding" ><div class="textstyle2"></div>
<div class="textstyle1"><div id="text_250423ca"><div class="textstyle2"></div>
<div class="textstyle1">  <span class="textstyle3">РЕСТАРАН</span>
</div>
</div><div id="text_24e3eb05"><div class="textstyle1">  <span class="textstyle4">BAR CAFE</span>
</div>
<div class="textstyle2"></div>
</div></div>
<div style="clear:both"></div></div></div><div id="container_650abe15"><div class="textstyle5"><div id="menu_7d35d100"><div  class="menuholder1"><a href="javascript:void(0);" tabindex="-1" aria-label="≡" >
	<div id="menuentry_ee07095"  class="menustyle1 menu_7d35d100_mainMenuEntry mobileEntry">
		<div class="menuentry_text1">
  <span class="textstyle6">≡</span>
		</div>
	</div>
</a>
<a href="index.html" style="text-decoration:none" tabindex="-1">
	<div id="menuentry_71037a78"  class="menustyle1 menu_7d35d100_mainMenuEntry normalEntry">
		<div class="menuentry_text2">
  <span class="textstyle7">Главная</span>
		</div>
	</div>
</a>
<a href="menu.html" style="text-decoration:none" tabindex="-1">
	<div id="menuentry_53d841d1"  class="menustyle2 menu_7d35d100_mainMenuEntry normalEntry">
		<div class="menuentry_text2">
  <span class="textstyle7">Меню</span>
		</div>
	</div>
</a>
<a href="javascript:void(0);" tabindex="-1" aria-label="Контакты ▼" >
	<div id="menuentry_495230ef"  class="menustyle3 menu_7d35d100_mainMenuEntry normalEntry">
		<div class="menuentry_text2">
  <span class="textstyle7">Контакты </span>
  <span class="textstyle8">▼</span>
		</div>
	</div>
</a>
<a href="vanna.html" style="text-decoration:none" tabindex="-1">
	<div id="menuentry_3eca7aab"  class="menustyle4 menu_7d35d100_mainMenuEntry normalEntry">
		<div class="menuentry_text2">
  <span class="textstyle7">Ванна</span>
		</div>
	</div>
</a>

	<script type="text/javascript" src="foto/wsp_menu.js"></script>
	<script type="text/javascript">
		var js_menu_7d35d100= new wsp_menu('menu_7d35d100', 'menu_7d35d100', 25, "fadeMenus moveHeight ", true, {generateAriaLabels: true, setUsefulTabIndices: true} );

		js_menu_7d35d100.createMenuForItem('menuentry_ee07095', ["  <span class=\"textstyle7\">Главная</span> ", 'index.html', '',
		                                   "  <span class=\"textstyle7\">Меню</span> ", 'menu.html', '',
		                                   "  <span class=\"textstyle7\">Контакты ▼</span> ", 'javascript:void(0);', '',
		                                   "  <span class=\"textstyle7\">   Почта</span> ", 'posta.php', '',
		                                   "  <span class=\"textstyle7\">   Контакты</span> ", 'contact.html', '',
		                                   "  <span class=\"textstyle7\">Ванна</span> ", 'vanna.html', '']);
		js_menu_7d35d100.createMenuForItem('menuentry_71037a78', []);
		js_menu_7d35d100.createMenuForItem('menuentry_53d841d1', []);
		js_menu_7d35d100.createMenuForItem('menuentry_495230ef', ["  <span class=\"textstyle7\">Почта</span> ", 'posta.php', '',
		                                   "  <span class=\"textstyle7\">Контакты</span> ", 'contact.html', '']);
		js_menu_7d35d100.createMenuForItem('menuentry_3eca7aab', []);

	</script>
</div></div></div>
</div><div  id="placeh_450824da" >
  <div class="textstyle2">
<div id="container_426fe36"><div id="container_426fe36_padding" ><div class="textstyle1"><form  action=""
enctype="application/x-www-form-urlencoded"
method="POST" id="form_7d022765"><div id="form_7d022765_padding" ><div class="textstyle2"><span class="textstyle9">Имя: </span><span class="textstyle10">*</span><span class="textstyle11"><br/></span><input type="text" value="" title="Введите Имя" name="TextEdit1" required="required"  id="edit_53fe67b0" >
<span class="textstyle11"><br/><br/></span><span class="textstyle9">Телефон: </span><span class="textstyle10">*</span><span class="textstyle11"><br/></span><input type="text" value="" title="Введите Телефон" name="TextEdit2" required="required"  id="edit_71fbe97c" >
<span class="textstyle11"><br/><br/></span><input type="date" name="DatePicker1"  id="datepicker_e90d421" />
<span class="textstyle11"><br/><br/></span><input name="Button1" type="submit" value="Отправить" title=""  id="button_714e5a50" >
<span class="textstyle11"><br/><br/></span><input type="hidden" value="Проверка Формы" name="HiddenFormField1" id="field_80e4e6e" >
</div>
<div style="clear:both"></div></div></form><span class="textstyle11"> <br/><br/></span><?PHP
$text = "";

foreach($_POST as $name => $value)

{

   $text .= "$name : $value\n";

}



if ($text != "")

{

  echo 'Thanks for contacting us.';

  mail("vannavam2015@gmail.com", "Contact form request", $text);

}
?><span class="textstyle11"> </span></div>
<div style="clear:both"></div></div></div>    </div>
  <div class="textstyle1">
<div id="container_1fc3bde7"><div id="container_1fc3bde7_padding" ><div class="textstyle1"><span class="textstyle11"><br/></span><div id="container_1f421e47"><div id="container_1f421e47_padding" ><div class="textstyle2"></div>
<div class="textstyle1"><div id="elem_38dcaec"  style="vertical-align: top; position:relative; display: inline-block; width:100%; height:410px; background-color:#E5E5E5; " ><form action="posta.php" enctype="application/x-www-form-urlencoded" method="POST">    <div id="text_66675b11">
      <div class="textstyle1">
<span class="textstyle11"><br/></span><span class="textstyle12">Contact Form</span><span class="textstyle11"><br/><br/></span><div id="container_6b6534ab"><div id="container_6b6534ab_padding" ><div class="textstyle2"><span class="textstyle10">Name:</span><span class="textstyle11"> </span><input type="text" value="" title="" name="NameField" required="required"  id="edit_489b3d8" >
<span class="textstyle11"><br/><br/></span><span class="textstyle10">Email:</span><span class="textstyle11"> </span><input type="text" value="" title="" name="EmailField" required="required"  id="edit_5937bf07" >
<span class="textstyle11"><br/><br/></span><span class="textstyle10">What's 15+3?</span><span class="textstyle11"> </span><input type="text" value="" title="" name="antiSpamAnswer" required="required"  id="edit_7a7cbcc2" >
<span class="textstyle11"><br/><br/></span><span class="textstyle10">Text:</span><span class="textstyle11"> </span><textarea name="TextField" title="" required="required" cols="28" rows="4"  id="edit_3578321b"></textarea>
<span class="textstyle11"><br/><br/></span></div>
<div style="clear:both"></div></div></div><span class="textstyle11"><br/><br/></span><input name="Button2" type="submit" value="Send" title=""  id="button_6848ba0" >
<span class="textstyle11"><br/><br/></span>        </div>
      </div>
</form>
<?PHP
if (count($_POST)>1)
{ 
  if (isset($_POST['antiSpamAnswer']) && strcasecmp($_POST['antiSpamAnswer'],'18')==0)
  {
    $text = "";
    foreach($_POST as $name => $value)
    {
       $text .= "$name : $value\n";
    }
    if ($text != "")
    {
      echo 'Thanks for contacting us';
      echo '<script type="text/javascript">var e = document.getElementById("elem_38dcaec"); e.firstChild.style.display = "none";</script>';
      mail("email@example.com", "Contact form request", $text);
    }
  }
  else
  { 
    echo "<p style='color:red'>Sorry, you need to answer the anti-Spam message correctly.</p>";
    foreach($_POST as $name => $value)
    { 
       echo '<script type="text/javascript">var e = document.getElementsByName("' . $name . '")[0]; e.value = ' . json_encode($value) . ';</script>';    }
  }
}
?>
</div></div>
<div style="clear:both"></div></div></div><span class="textstyle11"><br/><br/></span></div>
<div style="clear:both"></div></div></div>    </div>
  <div class="textstyle2">
<span class="textstyle11"><br/><br/></span>    </div>
  <div class="textstyle1">
<div id="container_217f40b3"><div id="container_217f40b3_padding" ><div class="textstyle1"><div id="container_77609974"><div id="container_77609974_padding" ><div class="textstyle2"><a href="index.html" style="text-decoration:none"><div id="button_2eed27d"><div class="vcenterstyle1"><div class="vcenterstyle2"><div class="textstyle1">    <span class="textstyle13">Напишите текст здесь</span>
</div>
<div class="textstyle2"></div>
</div></div></div></a><img src="foto/fet_55dbcb_optimized.png" width="1082" height="1134" id="img_9dd90bd" alt="333" title="333" /></div>
<div style="clear:both"></div></div></div><div id="container_2cd456e3"><div id="container_2cd456e3_padding" ><div class="textstyle2"><div id="button_5687a04e"><div class="vcenterstyle1"><div class="vcenterstyle2"><div class="textstyle1">    <span class="textstyle11">Напишите текст здесь</span>
</div>
</div></div></div><img src="foto/devushki_1rty567.jpg" width="479" height="501" id="img_4cc3ae0c" alt="333" title="333" /></div>
<div style="clear:both"></div></div></div><div id="container_23ef66f4"><div id="container_23ef66f4_padding" ><div class="textstyle2"><div id="button_6daea329"><div class="vcenterstyle1"><div class="vcenterstyle2"><div class="textstyle1">    <span class="textstyle11">Напишите текст здесь</span>
</div>
</div></div></div><img src="foto/otzivi_proba44.png" width="797" height="797" id="img_7aa90855" alt="333" title="333" /></div>
<div style="clear:both"></div></div></div></div>
<div style="clear:both"></div></div></div>    </div>
</div>
<div id="container_50c906c2"><div id="container_50c906c2_padding" ><div class="textstyle1"><div id="container_12dee79e"><div id="container_12dee79e_padding" ><div class="textstyle1"><span class="textstyle14">More info:</span><span class="textstyle15"><br/></span><span class="textstyle16"><br/></span></div>
<div class="textstyle2"><span class="textstyle16"><br/></span></div>
<div class="textstyle1"><div id="container_79dff3b4"><div id="container_79dff3b4_padding" ><div class="textstyle1"><span class="textstyle17">More information</span><span class="textstyle18"><br/><br/></span><span class="textstyle16">● Veniam quis<br/>● Voluptate velit<br/>● Officia</span></div>
<div class="textstyle2"></div>
</div></div><div id="container_2bc926a0"><div id="container_2bc926a0_padding" ><div class="textstyle1"><span class="textstyle17">How to Find us</span><span class="textstyle18"><br/><br/></span><span class="textstyle16">● Partiator Nulla<br/>● Sint obcaecat<br/>● Id est laborum</span></div>
<div class="textstyle2"></div>
</div></div><div id="container_15f9c727"><div id="container_15f9c727_padding" ><div class="textstyle1"><span class="textstyle17">Social Media</span><span class="textstyle18"><br/><br/></span><span class="textstyle16">● Twitter<br/>● Facebook<br/>● Other</span></div>
<div class="textstyle2"></div>
</div></div></div>
<div class="textstyle2"><span class="textstyle13"><br/></span><span class="textstyle13"><br/><br/></span></div>
<div class="textstyle1"><style>
    .btn-up {
      position: fixed;
      background-color: #454b69c2;
      right: 20px;
      bottom: 30px;
      border-radius: 5px;
      border-color: #90a931;
      border-width: 2px;
      border-style: solid;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: opacity 0.15s ease-in-out, transform 0.3s ease-in-out;
      color: #fff;
      width: 35px;
      height: 35px;
      opacity: 1;
      transform: translateY(0);
    }

    .btn-up_hide {
      display: none;
    }

    .btn-up_hiding {
      opacity: 0;
      transform: translateY(100px);
    }

    .btn-up-icon {
      width: 40px;
      height: 40px;
      fill: currentcolor;
    }

    @media (hover: hover) and (pointer: fine) {
      .btn-up:hover {
        background-color: #172218;
      }
    }
</style>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="arrow-up-short" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
    </symbol>
  </svg>

  <div class="btn-up btn-up_hide">
    <svg class="btn-up-icon" role="img" aria-label="Прокрутить страницу к началу">
      <use xlink:href="#arrow-up-short"></use>
    </svg>
  </div>

  <script>
    const btnUp = {
      el: document.querySelector('.btn-up'),
      scrolling: false,
      show() {
        if (this.el.classList.contains('btn-up_hide') && !this.el.classList.contains('btn-up_hiding')) {
          this.el.classList.remove('btn-up_hide');
          this.el.classList.add('btn-up_hiding');
          window.setTimeout(() => {
            this.el.classList.remove('btn-up_hiding');
          }, 300);
        }
      },
      hide() {
        if (!this.el.classList.contains('btn-up_hide') && !this.el.classList.contains('btn-up_hiding')) {
          this.el.classList.add('btn-up_hiding');
          window.setTimeout(() => {
            this.el.classList.add('btn-up_hide');
            this.el.classList.remove('btn-up_hiding');
          }, 300);
        }
      },
      addEventListener() {
        // при прокрутке окна (window)
        window.addEventListener('scroll', () => {
          const scrollY = window.scrollY || document.documentElement.scrollTop;
          if (this.scrolling && scrollY > 0) {
            return;
          }
          this.scrolling = false;
          // если пользователь прокрутил страницу более чем на 200px
          if (scrollY > 200) {
            // сделаем кнопку .btn-up видимой
            this.show();
          } else {
            // иначе скроем кнопку .btn-up
            this.hide();
          }
        });
        // при нажатии на кнопку .btn-up
        document.querySelector('.btn-up').onclick = () => {
          this.scrolling = true;
          this.hide();
          // переместиться в верхнюю часть страницы
          window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
          });
        }
      }
    }

    btnUp.addEventListener();
  </script><style>
#wert1{
    color: #00FF80;
    min-height: 24px;
    line-height: 24px;
    font-size: 25px;
    font-family: 'PT Sans Narrow';
   }
</style>


<div id="wert1">Ресторан © 
<script type="text/javascript">document.write(new Date().getFullYear());</script>
</div></div>
<div style="clear:both"></div></div></div></div>
<div style="clear:both"></div></div></div>  </div>
</body>
</html>