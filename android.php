<html>
  <head>
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <meta name="mobile-web-app-capable" content="yes">
    <!-- Обрати внимание на эти три тега! Они нужны, чтобы страница адекватно выглядела на мобильном устройстве -->
    <meta charset="UTF-8">
    <style>
      /*Стили позаимствованы у Fries, фреймворка для создания интерфейсов мобильных приложений на HTML5*/
      body
      {
        /* Для Android-дизайна часто применяются специальные шрифты: Roboto, Droid Sans и подобные */
        font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 16px;
        line-height: 1.67em;
        color: white;
        background-color: #111111; 
      }
      h1
      {  
        /* Тестировать верстку для мобильных приложений стоит в браузерах на движке WebKit (к примеру, Safari) */
        -webkit-box-sizing: border-box;         
        box-sizing: border-box;
        display: block;
        padding: 7px 7px 5px;
        margin-top: 10px;
        width: 100%;
        border-bottom: 4px solid #33B5E5;
        font-size: 17px;
        font-weight: bold;
        line-height: 18px;
        text-transform: uppercase;
        color: #FFFFFF; 
      }
      .itemname
      {
        display:block;
        font-weight:700;
        line-height: 38px;
        padding-left:5px;
      }
      .itemphone
      {
        color: #CCCCCC;
        font-size: 15px;
        line-height: 12px;
        text-overflow: ellipsis;
        padding-left:8px;
      }
    </style>
  </head>
  <body>
    <h1>Бобровый жир корпорейшен</h1>
    <p class='itemname'>Бобромордов Евсей Севьянович (генеральный директор)</p>
    <a href='tel:74957288980' class='itemphone'>7(495) 728-89-80</a>
    <!-- Интересная фишка в HTML5 — при нажатии на эту ссылку юзер сразу переходит в программу для совершения звонков-->
    <p class='itemname'>Бобромордова Карина Евсеевна (финансовый директор)</p>
    <a href='tel:74957288980' class='itemphone'>7(495) 728-89-80</a>
    <p class='itemname'>Бобромордов Карен Евсеевич (курьер)</p>
    <a href='tel:74957288980' class='itemphone'>7(495) 728-89-80</a>
  </body>
</html>