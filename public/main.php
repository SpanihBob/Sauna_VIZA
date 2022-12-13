<?
    $path = $_SERVER['DOCUMENT_ROOT'];
    include_once "$path/private/head.php"
?>

<body>
    <div class="container">
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
        <div class="telegram"></div>
        <div class="whatsap"></div>
        <div class="placePoint"></div>
        <div class="visa">Viza</div>
        <div class="adress">24/7, г. Казань, ул. Минская д. 12</div>
        <div class="phone">8(843)-259-00-99</div>
        <div class="clean">Уборка антисептиком после каждого гостя</div>
        <div class="design">Дизайнерский ремонт 2022 года</div>
        <div class="capacity">Вместимость до 15 человек</div>
        <div class="price">От 1500 рублей/час</div>
        <div class="pick1"></div>
        <div class="pick2"></div>
        <div class="pick3"></div>
        <div class="pick4"></div>
        <div class="photo2">Фото и видеоэкскурсия</div>
        <div id="photo1">Фото и видеоэкскурсия</div>
        <div class="relax">Сауна Viza<span style="color:#505050">отдых для семьи и компании</span></div>
        <button class="rect1">Заказать звонок</button>
        <button class="rect2">Забронировать</button>
    </div>
    <!-- <div class="marquee-container">
        <p class="marquee">
            LONDON - PARIS - SYDNEY - TOKYO - NEW YORK - BERLIN - ROME
        </p>
    </div> -->
    <script>
        photo1.onclick = () => {
            window.location.href = '/photoandvideo'
        }

        let toggle = 1;
        let display = () => {
            toggle = !toggle;
            if(toggle){
                img1.style.display = "block";
                img2.style.display = "none";
            }
            else{
                img1.style.display = "none";
                img2.style.display = "block";
            }
        } 
        let timerId = setInterval(() => display(), 10000);
    </script>
</body>
</html>