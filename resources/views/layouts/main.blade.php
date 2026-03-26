<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
     @vite(['resources/css/app.css','resources/js/app.js','resources/css/style.css'])
</head>
<body>
    <header class="header">
        <div class="menu">
            <div class="row">
                <p class="menu_p">ПН-ВС 10:00-21:00</p>
                <p class="menu_p">sales@grill.krd</p>
            </div>
            <div class="row">
                <img src="{{ asset('img/logo.png') }}" alt="Непрогруз" class="menu_img">
            </div>
            <div class="row">
                <img src="{{ asset('img/icon_phone.png') }}" alt="Непрогруз" class="menu_img_phone">
                <div class="menu_line"></div>
                <p class="menu_p menu_p-phone">8-861-202-52-22</p>
                <img src="{{ asset('img/корзина.png') }}" alt="Непрогруз" class="menu_img-korzina">
                <img src="{{ asset('img/логин.png') }}" alt="Непрогруз" class="menu_img-login">
            </div>

        </div>
        <div class="search">
            <input type="text" placeholder="Поиск по сайту" class="search_inp">
            <img src="{{ asset('img/lypa.png') }}" class="search_img" alt="Непрогруз" />
            
        </div>
        <img src="{{ asset('img/lypapypa.png') }}" class="kijewsdaflojfwscdealokmndweqsalnk" alt="Непрогруз" />
        <div class="header_main">
            <div class="div_main_header">
                <div class="flex_col">
                    <img src="{{ asset('img/вк.png') }}" alt="Непрогруз" class="heade_img_Bk">
                </div>
            </div>

            <div class="div_main_header">
                <p class="header_main_p">Попробуй <br> настоящее BBQ <br> на вкус</p>
                <button class="header_main_button">В каталог</button>

            </div>

        </div>
        <div class="div_main_down">
            <div class="main_line_w"></div>
            <div class="main_line_h"></div>
            <div class="row netRow-gap">
                <p class="div_main_down_p_ocy menu_p menu_pp">Каталог товаров</p>
                <p class="menu_p menu_pp">Акции</p>
                <p class="menu_p menu_pp">Сертификаты</p>
                <p class="menu_p menu_pp">Фотогалерея</p>
            </div>
        </div>

    </header>
    <main>
        <!-- {{$slot}} -->
        <div class="block1">
            <div class="block1-text">
                <h2>Южный гриль и барбекю</h2>
                <p>В нашем интернет-магазине вы сможете найти <span style="color:#D24E44;">все, что касается BBQ,</span> от различных аксессуаров до самых престижных грилей!</p>
            </div>
            <div class="cartinki">
                <div class="cartinka">
                    <img src="{{ asset('img/Group 52.svg') }}" alt="Мраморная говядина">
                    <p>Мраморная <br> говядина</p>
                </div>
                <div class="cartinka">
                    <img src="{{ asset('img/Group 53.svg') }}" style="margin-top: 10px;"  alt="Товары для гриля и BBQ">
                    <p>Товары для <br> гриля и BBQ</p>
                </div>
                <div class="cartinka">
                    <img src="{{ asset('img/Group 54.svg') }}" style="width: 115px;" alt="Доставка на дом">
                    <p>Доставка <br> на дом</p>
                </div>
                <div class="cartinka">
                    <img src="{{ asset('img/Group 55.svg') }}" style="width: 115px;" alt="Обучение готовке">
                    <p>Обучение <br> готовке</p>
                </div>
            </div>
        </div>
        <div class="block2-catalog">
            <div class="zag" style="background-color: #020100;"><h2>Каталог товаров</h2><span class="line"></span></div>
            <div class="meats">
                <div class="meat-left">
                    <img src="img/meatmram.svg" alt="">
                    <div>
                        <h3>Мраморная говядина</h3>
                        <button>Заказать <img src="img/arrow.svg" alt="arrow"></button>
                    </div>
                </div>
                <div class="meat-right">
                    <div class="block2-meat">
                        <img src="img/meatcook.svg" alt="">
                        <div>
                            <h3>Готовые блюда из мяса</h3>
                            <button>Выбрать <img src="img/arrow.svg" alt="arrow"></button>
                        </div>
                    </div>
                    <div class="block2-meat fix">
                        <img src="img/meat3.svg" alt="">
                        <div>
                            <h3>Товары для гриля и bbq</h3>
                            <button>В каталог <img src="img/arrow.svg" alt="arrow"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block3-hitsofsales">
            <div class="zag" style="color: #020100;"><h2>Хиты продаж</h2><span class="line" style="background-color: #020100;"></span></div>
            <div class="cards">
                <div class="card">
                    <img src="img/товар на подложке.svg" alt="Рибай">
                    <div class="card-info">
                        <h3>Стейк Рибай</h3>
                        <ul>
                            <li>Рибай — это неоспоримая классика, состоит из одной большой мышцы и нескольких поменьше.</li>
                            <li>Располагается рибай в спинной части бычка</li>
                            <li><span>Идеально для</span>: гриля, запекания, жарки</li>
                        </ul>
                        <h3 class="coast">3900 руб.</h3>
                        <div class="card-bottom">
                            <div class="card-buttons">
                                <button class="bt-buy">Купить</button>
                                <button style="border: 1px solid black;" class="bt-cat">В каталог</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card reverse">
                    <div class="card-info">
                        <h3>Стейк Брискетт</h3>
                        <ul>
                            <li>Брискетт — это неоспоримая классика, состоит из одной большой мышцы и нескольких поменьше.</li>
                            <li>Располагается брискетт в спинной части бычка</li>
                            <li><span>Идеально для</span>: гриля, запекания, жарки</li>
                        </ul>
                        <h3 class="coast">4900 руб.</h3>
                        <div class="card-bottom">
                            <div class="card-buttons">
                                <button class="bt-buy">Купить</button>
                                <button style="border: 1px solid black;" class="bt-cat">В каталог</button>
                            </div>
                        </div>
                    </div>
                    <img src="img/meat2.svg" alt="Брискетт">
                </div>
            </div>
        </div>



         <div class="main_cow">
            <h2 class="cow_title">НЕ МОЖЕТЕ ОПРЕДЕЛИТЬСЯ <br> С ВЫБОРОМ?</h2>
            <div class="cow_content">
                <div class="cow_text">
                    <div class="ooo">
                        <div>
                            <p class="cow_desc">
                        Мы с радостью поможем Вам выбрать <strong>лучший стейк</strong>,<br>
                        а также расскажем об особенностях его приготовления!
                    </p>
                        <p class="cow_note">
                         Заполните форму и наш менеджер свяжется с Вами в ближайшее время
                         </p>
                        </div>
                        
                    <div class="cow_img">
                        <img src="{{ asset('img/корова.png') }}" alt="1488">
                    </div>
                    </div>
                    
                    <form class="cow_form">
                        <div class="form_group">
                           <p class="fot_main_inp_p">Ваше имя</p>
                            <input type="text" class="fot_main_inp">
                        </div>
                        <div class="form_group">
                            <label class="fot_main_inp_p" for="phone"> Телефон</label>
                            <input class="fot_main_inp" type="tel" id="phone" name="phone" placeholder="+7 (___) ___-__-__">
                        </div>
                        <button type="submit" class="sub_btn">Отправить</button>
                    </form>
                    
                </div>
                
            </div>
         </div>
         <div class="main_tovar">
            <div class="tovar_header">
                <h2 class="tovar_title">Популярные товары</h2>
                <div class="lineline"></div>
            </div>
            <div class="tovar_cards">
            
                <div class="tovar_card">
                    <div class="tovar_image">
                       <img src="{{ asset('img/товар.png') }}" alt="Портерхаус">
                    </div>
                    <h3 class="tovar_name">Портерхаус</h3>
                    <p class="tovar_price">2500 руб.</p>
                    <span class="tovar_badge badge_new">Новинка</span>
                </div>

            
                 <div class="tovar_card">
                    <div class="tovar_image">
                       <img src="{{ asset('img/товар.png') }}" alt="Портерхаус">
                    </div>
                    <h3 class="tovar_name">Пиканья</h3>
                    <p class="tovar_price">2700 руб.</p>
                    <span class="tovar_badge badge_discount">Скидка 25%</span>
                </div>

          
                <div class="tovar_card">
                    <div class="tovar_image">
                       <img src="{{ asset('img/товар.png') }}" alt="Портерхаус">
                    </div>
                    <h3 class="tovar_name">Стейк Мачете</h3>
                    <p class="tovar_price">2900 руб.</p>
                    
                </div>
            </div>
             <div class="navigation">
                <img class="arrowss" src="{{ asset('img/пгнн.png') }}" alt="">
                <a href="#" class="show_all_link">Показать все ></a>
            </div>
         </div>
         <div class="main_sales">
            <div class="title_sales_block">
                <h2 class="sales_tile">АКЦИИ</h2>
                <a href="#" class="link_sales">Все акции  ></a>
            </div>
            <div class="sales_card">
                <span class="sales_date">Дуствует до 25 декабря 2020г.</span>
                <div class="sales_content">
                    <p class="sales_card_text">При покупке 20 кг мраморной говядины<br>
                    любого вида <strong>+2 кг в подарок!</strong>
                    </p>
                    <a href="#" class="salex_card_link">Узнать подробнее</a>
                </div>
                <div class="sales_img">
                    <img src="{{ asset('img/стейк.png') }}" alt="">
                </div>
            </div>
            <div >
                <img class="arrows" src="{{ asset('img/arowscard.png') }}" alt="">
            </div>
         </div>
         <div class="cards_meet">
            <div class="card_meet">
                <img src="{{ asset('img/meet-1.png') }}" alt="maso1">
            </div>
            <div class="card_meet">
                <img src="{{ asset('img/meet-2.png') }}" alt="maso1">
            </div>
            <div class="card_meet">
                <img src="{{ asset('img/meet-3.png') }}" alt="maso1">
            </div>
            <div class="card_meet">
                <img src="{{ asset('img/meet-4.png') }}" alt="maso1">
            </div>
            <div class="card_meet">
                <img src="{{ asset('img/meet-5.png') }}" alt="maso1">
            </div>
            <div class="card_meet">
                <img src="{{ asset('img/meet-6.png') }}" alt="maso1">
            </div>
            <div class="card_meet">
                <img src="{{ asset('img/meet-7.png') }}" alt="maso1">
            </div>
            <div class="card_meet">
               <img src="{{ asset('img/meet-8.png') }}" alt="maso1">
            </div>

         </div>
    </main>
    <footer>
        <div class="div_main_footer">
            <h2 class="div_main_footer_h2">ОСТАЛИСЬ ВОПРОСЫ</h2>
            <p class="div_main_footer_p">
                Вы можете самостоятельно позвонить нам <br> по номеру
                <span class="span_r"> 8-861-202-52-22</span> или заказать <br> бесплатный обратный звонок
            </p>
            <p class="div_main_footer_p2">
                Наш менеджер свяжется с Вами в ближайшее время и ответит на все вопросы
            </p>


            <form action="#">
                <div class="asdasdasdgsd">
                    <p class="fot_main_inp_p">Ваше имя</p>
                    <input type="text" class="fot_main_inp">
                </div>

                <div class="asdasdasdgsd">
                    <p class="fot_main_inp_p">Телефон</p>
                    <input type="text" class="fot_main_inp">
                </div>
                <button class="div_main_footer_btn">Отправить</button>
            </form>
            <p class="fot_main_inp_p_per">Заполняя форму, Вы подтеверждаете согласие <br>на обработку <span class="pod">
                    Персональных данных</span></p>
        </div>
        <div class="div_footr_footer">
            <div class="nado">
                <div class="div_footr_footer_h2_line">
                    <h2 class="div_footr_footer_h2">КОНТАКТЫ</h2>
                    <div class="div_footr_footer_line"></div>
                </div>
                <div class="row">
                    <div class="column_f">
                        <p class="column_f_text column_f_text_red">8-861-202-52-22</p>
                        <p class="column_f_text">ПН—ВС 10:00-21:00</p>
                        <p class="column_f_text">sales@grill.krd</p>
                        <img src="{{ asset('img/логоf.png') }}" alt="непрогруз" class="column_f_logo">
                    </div>
                    <div class="column_f column_f_margin">
                        <p class="column_f_text2 ">Каталог товаров</p>
                        <p class="column_f_text2">Акции</p>
                        <p class="column_f_text2">Сертификаты</p>
                        <p class="column_f_text2">Фотогалерея</p>
                    </div>
                    <div class="column_f column_f_margin2">
                        <div class="asdasdasdgsd">
                            <p class="fot_main_inp_p fot_main_inp_p2">Поиск по сайту</p>
                            <input type="text" class="fot_main_inp">
                        </div>
                        <p class="sos">МЫ В СОЦИАЛЬНЫХ СЕТЯХ:</p>
                        <img src="{{ asset('img/вк.png') }}" alt="непрогруз" class="heade_img_Bk2">
                    </div>
                </div>
            </div>
            <div class="liiiiiiiinnnnnnnnneeeeeeee"></div>
            <p class="gdskmdaskmldasnkgdnk">© 2020 Universe. Все права защищены</p>
        </div>
    </footer>
</body>
</html>