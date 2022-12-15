<?
    $path = $_SERVER['DOCUMENT_ROOT'];
    include_once "$path/private/head.php"
?>

<body>
    <div class="container">
        <div id = "bowl_and_girl">
            <div class="masc2"></div>
            <div id="img1">
                <div class="bowl"></div>
            </div>
            <div id="img2">
                <div class="girl"></div>
                <!-- <div class="smoke3"></div> -->
            </div>
            <div class="stroke">
                <div class="smoke1"></div>
                <div class="smoke2"></div>
            </div>
            <div class="visa">Viza</div>
        </div>
        <div id = black_and_girl>
            <div class="first_photo"></div>
            <div class="whiteLogo"></div>
        </div>
        <div class="telegram"></div>
        <div class="whatsap"></div>
        <div class="placePoint"></div>                      
        <div class="adress1 color">24/7, г. Казань, ул. Минская д. 12</div>
        <div class="phone color">8(843)-259-00-99</div>
        <div class="clean color">Уборка антисептиком после каждого гостя</div>
        <div class="design color">Дизайнерский ремонт 2022 года</div>
        <div class="capacity color">Вместимость до 15 человек</div>
        <div class="price color">От 1500 рублей/час</div>
        <div class="pick1"></div>
        <div class="pick2"></div>
        <div class="pick3"></div>
        <div class="pick4"></div>
        <div class="photo2">Фото и видеоэкскурсия</div>
        <div id="photo1">Фото и видеоэкскурсия</div>
        <div class="relax">Сауна Viza<span class="color">отдых для семьи и компании</span></div>
        <button id="rect1">Заказать звонок</button>
        <button id="rect2">Забронировать</button>
    </div>
    <!-- <img src="../img/" alt=""> -->
    <script>
        photo1.onclick = () => {
            window.location.href = '/photoandvideo'
        }
        rect1.onclick = () => {
            let modal_back = call(1);
            let container = document.querySelector(".container");
            container.appendChild(modal_back);

        }
        let color = document.querySelectorAll(".color");
        let toggle = 0;
        let display = () => {
            toggle = toggle + 1;
            if(toggle == 1){
                color.forEach(el => {el.style.color = "#626262"});
                black_and_girl.style.display = "none";
                bowl_and_girl.style.display = "block";
                img1.style.display = "block";
                img2.style.display = "none";
            }
            else if(toggle == 2){                
                bowl_and_girl.style.display = "block";
                img1.style.display = "none";
                img2.style.display = "block";
            }
            else if(toggle == 3){                
                color.forEach(el => {el.style.color = "white"});
                bowl_and_girl.style.display = "none";
                black_and_girl.style.display = "block";
                toggle = 0;
            }
        } 
        let timerId = setInterval(() => display(), 10000);
    </script>
</body>
</html>