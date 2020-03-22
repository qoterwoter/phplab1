<!DOCTYPE html>
<html lang="en">

<head><?php $title="Цалапов А.М. 191-322";?>
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
            <article id='safety'>
                <h2>Безопасность</h2>
                <p>Московский метрополитен относится к транспортным предприятиям повышенной опасности. Это обусловлено большим пассажиропотоком и сложной системой инженерных сооружений. Для обеспечения технической безопасности существуют специализированные
                    подразделения метро, численностью около 1000 человек[184]. Они занимаются ликвидацией последствий чрезвычайных ситуаций, устранением технических неисправностей и содержанием технических средств метро. Периодически проводятся учения
                    по координации взаимодействия работников метрополитена и экстренных служб города[185]. Охраной правопорядка занимается Управление внутренних дел на Московском метрополитене. Его штат составляет более 5 тысяч человек. Основные направления
                    деятельности управления: борьба с вандализмом, хулиганством, кражами и грабежами. Большое внимание уделяется противодействию терроризму.</p>
            </article>
            <article>
                <img width="100%" src="images/safety.jpg" alt="">
            </article>
            <article>
                <table>
                    <tr>
                        <?php include "include/table-header.php"?>
                    </tr>
                    <tr>
                        <?php echo "<td>Тип Г</td>"?>
                        <?php echo "<td>с 1939 по 1955</td>"?>
                        <?php echo "<td>385</td>"?>
                    </tr>
                    <tr>
                        <?php echo "<td>Тип Д</td>"?>
                        <?php echo "<td>с 1949 по 1963</td>"?>
                        <?php echo "<td>489</td>"?>
                    </tr>
                </table>
            </article>
        <article><?php include "include/photos.php" ?></article>
        </section>

        <?php include "include/footer.php" ?>

    </main>
</body>

</html>