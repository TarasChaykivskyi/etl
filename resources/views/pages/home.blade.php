@extends('common.layout-home')

@section('content')
    <div id="home-main-slider" class="home-main-slider">
        <div class="kv-slide" style="background-image: url({{asset('/images/home-slider1.jpg')}})"></div>
        <div class="kv-slide" style="background-image: url({{asset('/images/home-slider2.jpg')}})"></div>
        <div class="kv-slide" style="background-image: url({{asset('/images/home-slider3.jpg')}})"></div>
        <div class="kv-slide" style="background-image: url({{asset('/images/home-slider4.jpg')}})"></div>
        <div class="kv-slide" style="background-image: url({{asset('/images/home-slider5.jpg')}})"></div>
        <div class="home-main-slider-nav">
            <button data-slider="-1">&#8249;</button>
            <button data-slider="1">&#8250;	</button>
        </div>
    </div>
    <section id="service">
        <div class="container">
            <h2 class="section-title">Обслуговування</h2>
            <p class="text">"Ми пропонуємо Вам електро-обслуговування нашими спеціалістами Ваших об"єктів ( аптеки, школи, офісні приміщення, банківські відділення , тощо). Обслуговуваня енергооб"єктів Замовника - як правило вимагає утримувати висококлваліфікований штат працівників - укомплектований та такий, що пройшов спеціальне навчання та підготовку - це значна стаття витрат, проте з іншого боку це дозволяє збільшити термін експлуатації Ваших мереж та обладнання, забезпечити безпеку персоналу. Тому ми пропонуємо Вам обслуговуватись в нас, це обійдеться Замовнику значно дешевше ніж постійно утримувати електротехнічний персонал - без втрати ефективності, безпеки та якості обслуговування"</p>
            <table cellspacing="0">
                <tr>
                    <th>№</th>
                    <th>Перелік робіт</th>
                    <th>Періодичність</th>
                    <th>Примітка</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Технічний огляд ел.уст., фотозвіт</td>
                    <td>1 раз на міс.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Зняття показників лічильника</td>
                    <td>1 раз на міс.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Огляд систем заземлення	</td>
                    <td>1 раз на міс.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Перевірка кабельних мереж і розподільного обладнання на відповідність навантаження струмоприймачів	</td>
                    <td>1 раз на міс.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Визначення стану контактних груп в розподільних щитах</td>
                    <td>1 раз на міс.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Заміна несправних електроламп, стартерів, дроселів, патронів, вимикачів, авт.вимикачів та іншого несправного обладнання</td>
                    <td>За необхідності</td>
                    <td>за дод.угодою</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Виконання перемикань</td>
                    <td>За необхідності</td>
                    <td></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Технічний огляд сист.освітлення</td>
                    <td>1 раз в квартал</td>
                    <td></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Ведення журналів</td>
                    <td>1 раз на міс.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Електромонтаж, реконструкція</td>
                    <td>За необхідності</td>
                    <td>за дод.угодою</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Технічні консультаці</td>
                    <td>За необхідності</td>
                    <td></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Технічний звіт ( протоколи вимірів з мокрою печаткою)</td>
                    <td>За необхідності</td>
                    <td>за дод.угодою</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Зняття струмових навантажень</td>
                    <td>1 раз на рік</td>
                    <td></td>
                </tr>
            </table>
            <div class="container-images" style="display: flex; flex-wrap: wrap">
                @for ($i = 1; $i <= 12; $i++)
                    <div style="background: url('/images/service{{$i}}.jpg')" class="div" style=""></div>
                @endfor
            </div>
        </div>
    </section>
    <section id="project">
        <div class="container">
            <h2 class="section-title">Проектування</h2>
            <p class="text">Роботи по проектуванню і супроводженню проекту для промислових, житлових і комерційних об’єктів:</p>
            <ul>
                <li>
                    <p class="text">Комплексна розробка та погодження всіх розділів проекту зовнішнього електропостачання 0,4 – 35 кВ.</p>
                    <ul>
                        <li>Мережі 0,4 – 35 кВ</li>
                        <li>ТП 0,4 – 35 кВ</li>
                        <li>РП 0,4 – 35 кВ</li>
                        <li>Релейний захист 0,4 – 35 кВ</li>
                        <li>Системи телемеханіки 0,4 – 35 кВ</li>
                        <li>АСКОЕ</li>
                    </ul>
                </li>
                <li>
                    <p class="text">Комплексна розробка та погодження проекту внутрішнього електропостачання 0,4 кВ.</p>
                    <ul>
                        <li>Розробка мереж живлення обладнання</li>
                        <li>Розробка, прорахунок систем освітлення</li>
                        <li>Заземлення</li>
                        <li>Зрівнення потенціалів</li>
                    </ul>
                </li>
                <li>
                    <p class="text">Комплексна розробка та погодження всіх розділів проекту сонячних електростанцій різного призначення і потужності.</p>
                </li>
                <li>
                    <p class="text">Проект блискавкозахисту.</p>
                </li>
                <li>
                    <p class="text">Зовнішнє освітлення.</p>
                </li>
            </ul>
            <p class="text">Наші спеціалісти мають багаторічний досвід та всі необхідні сертифікати, що дають дозвіл на розробку погодження і супровід проектів. Всі перелічені роботи можуть виконуватись як в комплексі, так і окремо. Для всіх перелічених робіт є можливість супроводження будівництва та здійснення авторського нагляду.</p>
            <div class="container-images">
                @for ($i = 1; $i <= 3; $i++)
                    <div style="background-image: url('/images/project{{$i}}.jpg')"></div>
                @endfor
            </div>
        </div>
    </section>
    <section id="sendMassage">
        <div class="container">
            <h2 class="section-title">Описовий лист</h2>
            <table border="1" cellpadding="2" cellspacing="0">
                <tr>
                    <th></th>
                    <th>ТИП ПІДСТАНЦІЇ</th>
                    <th>Заповнюється замовником</th>
                    <th>ПРИМІТКА</th>
                </tr>
                <tr>
                    <td rowspan="7">Конструкція підстанції</td>
                    <td>стаціонарна</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>пересувна</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>1-но трансформ. тупікова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>1-но трансформ. прохідна</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>1-но трансформ. мачтова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>1-но трансформ. столбова</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2-х трансформаторна</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Потужність КТП, кВА</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td rowspan="2">Виконання вводу зі сторони ВН</td>
                    <td>повітря</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>кабель</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td rowspan="2">Виконання виходу зі сторони НН</td>
                    <td>повітря</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>кабель</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td rowspan="2">Номінальна напруга, кВ</td>
                    <td>6</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Розподільчий пристрій високовольтного вводу</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td rowspan="2">Розрядник</td>
                    <td>РВО</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>ОПН</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td rowspan="2">Роз’єднювач</td>
                    <td>BB/TEL</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>РВЗ</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>ВНА</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Трансформатор</td>
                    <td>ТМ, ТМЗ, ТМГ, ТМФ, ТСЗ</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Струмообмежуючийавт. вимикач</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Розрядник</td>
                    <td>РВН</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td rowspan="2">Лічильник електроенергії</td>
                    <td>активний</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>реактивний</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td rowspan="2">Прилади контролю</td>
                    <td>вольтметр</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>амперметр</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td rowspan="2">Лінії, що відходять</td>
                    <td>Лінії, що відходять</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>рубильник з запобіж. РПС</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Струм ліній, що відходять</td>
                    <td>Лінія №1</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Лінія №2</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Лінія №3</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Лінія №4</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td rowspan="2" style="height: 50px">Додаткова апаратура
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <h5>Для більш докладного прорахунку потрібна однолінійна схема</h5>
            <form action="">
                <div>
                    <label for="customer">ЗАМОВНИК</label>
                    <input type="text" id="customer" name="customer" required>
                </div>
                <div>
                    <div>
                        <label for="person">КОНТАКТНА ОСОБА</label>
                        <input type="text" id="person" name="person" required>
                    </div>
                    <div>
                        <label for="phone">ТЕЛЕФОН</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                </div>
                <input type="submit" value="Відправити" id="sendMessage" required>
            </form>
        </div>
    </section>

    <section id="aboutUs">
        <div class="container">
            <h2 class="section-title">Про нас</h2>
            <p class="text">ФОП «Омельченко С.М.» створено у 2013 році, свою діяльність розпочали з створення власної атестованої електротехнічної лабораторії до 1000 В. Згодом приступили до проектної діяльності та електромонтажу. На даний момент ФОП «ОМЕЛЬЧЕНКО С.М.» є складовою частиною в групи компаній, що працюють в сфері енергетики та забезпечують комплексне вирішення питань щодо енерго- забезпечення та електро-постачання об’єктів до 35 кВ включно. Ми зможемо Вам запропонувати електротехнічні рішення.</p>
            <div class="about-bottom-container">
                @for ($i = 1; $i <= 3; $i++)
                    <a>
                        <div class="figure-image" style="background-image: url('/images/aboutUs{{$i}}.jpg')"></div>
                        @if($i == 1)
                            <span>Електротехнічна лабораторія до 1000 В</span>
                        @elseif($i == 2)
                            <span>Обслуговування</span>
                        @elseif($i == 3)
                            <span>Проектування</span>
                        @endif
                    </a>
                @endfor
            </div>
        </div>
    </section>
@endsection

