# bitrix_greenatom_project
Внедрение html шаблона с header и footer в битрикс, создание слайдера с использованием компонента news.list

index.php - главная страница сайта

по пути local/templates/main прописаны header.php и footer.php 

далее в папке assets находятся файлы стилей, скриптов и картинок

в папке local/templates/main/components/bitrix/news.list/my_slider находится файл template.php, в котором прописана структура слайдера 

в папке local/templates/main/components/bitrix/menu в файлах прописаны пункты меню для header и footer 

в папках tovar1, tovar2, tovar3 находятся файлы с описаниями товаров, на которые ведут ссылки из слайдера

в папке local/templates/main/components/bitrix/voting.form/opros_shablon1/ в файле template.php находится шаблон опроса в виде слайдера сделанного с помощью компонента опросы
в папке opros находятся страницы опроса, страница вывода результатов опроса и модальное окно, выводящееся после прохождения опроса
