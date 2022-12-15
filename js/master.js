window.onload=function(){
    //тут пишем код, который будет ожидать загрузки DOM    
   }
function call(i) {
    let column1 =  document.createElement("div");
    let column2 =  document.createElement("div");
        column2.classList.add("main_column2");
    let column3 =  document.createElement("div");
    let vector_close = document.createElement("div");
        vector_close.classList.add("vector_close");
    let modal_back = document.createElement("div");
        modal_back.classList.add("main_modal_back");
    let modal_window = document.createElement("div");
        modal_window.classList.add("main_modal_window");
    let nameAndText = document.createElement("div");
        nameAndText.classList.add("nameAndText");
    let empty = document.createElement("div");
    let name_arr = [
        ["Заказать звонок","../img/girl_modal_2.png"],
        ["Забронировать номер","../img/girl_modal_1.png"],
        ["Забронировать","../img/girl_modal_3.png"]
    ];
    modal_window.style.background = `url(${name_arr[i][1]})`
    let nameDiv = document.createElement("div");
        nameDiv.classList.add("main_name_div");
        nameDiv.innerText = name_arr[i][0];
    let text = document.createElement("div");
        text.classList.add("main_text_div");
        text.innerText = "Оставьте заявку и наш администратор свяжется c вами и ответит на все волнующие вопросы";
    let form = document.createElement("form");
        form.classList.add("main_form");
    let input_user_name = document.createElement("input");
        input_user_name.setAttribute("type","text");
        input_user_name.setAttribute("placeholder","Ваше имя");
    let input_user_phone = document.createElement("input");
        input_user_phone.setAttribute("type","tel");
        input_user_phone.setAttribute("placeholder","Ваш номер телефона");
    let input_submit = document.createElement("input");
        input_submit.setAttribute("type","submit");
        input_submit.setAttribute("value","Отправить");
    form.appendChild(input_user_name);
    form.appendChild(input_user_phone);
    form.appendChild(input_submit);
    nameAndText.appendChild(nameDiv)
    nameAndText.appendChild(text)
    column2.appendChild(nameAndText);
    column2.appendChild(empty);
    column2.appendChild(form);
    column3.appendChild(vector_close);
    modal_window.appendChild(column1);
    modal_window.appendChild(column2);
    modal_window.appendChild(column3);
    modal_back.appendChild(modal_window);

    vector_close.onclick = () => {
        modal_back.remove();
    }



    return modal_back;
}
