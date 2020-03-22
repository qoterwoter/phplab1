<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title="Цалапов А.М. 191-322";?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$title";?></title>
    <!-- Roboto Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                    <li>
                        <a href='
                            <?php
                                $page='История';
                                $link='index.php';
                                echo "$link";
                            ?>'<?php
                                if (basename(__FILE__)==$link)
                                    echo "class='active'";
                            ?>><?php echo $page;?>
                        </a>
                    </li>
                    <li>
                        <a href='
                            <?php
                                $page='Линии';
                                $link='lines.php';
                                echo "$link";
                            ?>'<?php
                                if (basename(__FILE__)==$link)
                                    echo "class='active'";
                            ?>><?php echo $page;?>
                        </a>
                    </li>
                    <li>
                        <a href='
                            <?php
                                $page='Безопасность';
                                $link='safety.php';
                                echo "$link";
                            ?>'<?php
                                if (basename(__FILE__)==$link)
                                    echo "class='active'";
                            ?>><?php echo $page;?>
                        </a>
                    </li>
                </ul>
        </nav>
        <h1>Московский метрополитен</h1>

    </header>
    <main>
        <section>
            <article>
                <h2>Линии метро</h2>
                <p>Всем линиям даны названия и краткие обозначения, а также порядковые номера. Дополнительным устоявшимся обозначением линий служат их цвета, традиционно используемые на схемах (в том числе на приведённой выше; теми же цветами линии обозначены
                    и в таблице) — например, немалому числу людей выражение «красная ветка метро» скажет едва ли не больше, чем «Сокольническая линия», а говорить «серая ветка» можно быстрее и легче, чем запомнить и проговаривать официальное название
                    «Серпуховско-Тимирязевская». Иногда используются и аббревиатуры названий линий, например, АПЛ — Арбатско-Покровская линия, ГЗЛ — Замоскворецкая (историческое название — Горьковско-Замоскворецкая). На каждой из линий установлена нумерация
                    главных путей в зависимости от направления, применяемая в технических документах метрополитена, а с 1999 года — и на указателях, при этом примечательно то, что до 2003 года нумерация главных путей в залах кросс-платформенных пересадок
                    не повторялась (на «Каширской» пути Каховской линии получили номера 3 и 4). На 2019 год из шести кросс-платформенных пересадочных узлов два («Кунцевская» и «Парк Победы») имеют одинаковые номера главных путей в каждом из залов</p>
            </article>
            <article>
                <img width="100%" src="images/history.jpg" alt="">
            </article>
            <article>
                <table>
                    <tr>
                        <?php include "include/table-header.php"?>
                    </tr>
                    <tr>
                        <?php echo "<td>Тип Е</td>"?>
                        <?php echo "<td>с 1959 по 1969</td>"?>
                        <?php echo "<td>>596</td>"?>
                    </tr>
                    <tr>
                        <?php echo "<td>Тип И</td>"?>
                        <?php echo "<td>с 1973 по 1985</td>"?>
                        <?php echo "<td>84</td>"?>
                    </tr>
                </table>
            </article>
            <article><?php include "include/photos.php" ?></article>
        </section>
        
        <?php include "include/footer.php" ?>
    </main>
</body>

</html>