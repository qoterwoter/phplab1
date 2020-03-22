<footer>
        <p>
            <?php
            date_default_timezone_set('Europe/Moscow');
            $date = date("d.m.Y");
            $time = date("H-i:s");
            echo "Сформировано $date в $time";?>
        </p>
        <style>
            footer {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100px;
                text-align: center;
                background-color: rgb(79, 79, 79);
                color: rgb(187,187,187);
            }
        </style>
</footer>