<?
    $path = $_SERVER['DOCUMENT_ROOT'];
    include_once "$path/private/head.php"
?>

<body>
    <div class="container">
        <div class="background_bar">
            <div class="bar_header">
                <div class="gshost">Что получит дорогой гость</div>
                <h1>Что получит дорогой гость</h1>
            </div>            
            <div id="what"></div>
        </div>
    </div>
    <!-- <img src="../img/1584365594_a987cd36-8b12-45b8-9728-ac78079211c9 1.png" alt=""> -->
    <script>
        let arr = [
            ["393741_38006-670x400x 1.png","Оздоровительные процедуры", ["Сауна", "Хамам", "Бассейн", "SPA-процедуры"]],
            ["1584365594_a987cd36-8b12-45b8-9728-ac78079211c9 1.png","Медиа развлечения", ["Караоке", "Музыка", "Плазменный телевизор 65\"", "Xbox Series X"]],
            ["IMG_9938 1.png","Отдых и общение", ["Лаундж зона", "Бильярд", "2 комнаты отдыха", "Мини-кухня", "Настольные игры", "Гостиничный номер"]],
            ["PIC_6223 1.png","Всегда в наличии", ["Алкогольные напитки", "Снеки", "Кальян", "Авторские чаи", "Банные принадлежности", "Косметическая продукция", "Эфирные масла", "Веники (бамбуковые)"]]
        ];
        arr.forEach((element, index) => {
            let what_box = document.createElement("div");
            let what_img = document.createElement("img");
            what_img.setAttribute("src",`../img/${element[0]}`);
            let what_div = document.createElement("div");
            what_div.classList.add("what_div");
            let what_h3 = document.createElement("div");
            what_h3.innerText = element[1];
            let what_ul = document.createElement("ul");
            
            arr[index][2].forEach(el => {
                let what_li = document.createElement("li");
                let what_li_span = document.createElement("span");
                let what_li_img = document.createElement("img");
                what_li_img.setAttribute("src",`../img/check-svgrepo-com\ \(1\)\ 4.png`);
                what_li_img.classList.add("what_li_img");
                what_li_span.innerText = `${el}`;
                what_li.appendChild(what_li_img);
                what_li.appendChild(what_li_span);
                what_ul.appendChild(what_li);
            })
            what_div.appendChild(what_h3);
            what_div.appendChild(what_ul);
            what_box.appendChild(what_img);
            what_box.appendChild(what_div);

            what.appendChild(what_box);



        });
        
    </script>
</body>
</html>