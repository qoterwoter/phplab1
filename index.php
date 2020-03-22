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
            <article id='history'>
                <h2> История Создания метрополитена</h2>
                <p>Самые первые предложения по созданию метро в Москве появились ещё в 1875 году, когда возникла идея проложить линию от Курского вокзала через Лубянскую и Трубную площади до Марьиной рощи[6]. Но до проекта дело так и не дошло. <br><br>В
                    1902 году инженеры П. И. Балинский и Е. К. Кнорре предложили проект, по которому метро должно было соединить Замоскворечье с Тверской заставой подземной линией. Однако городская дума отклонила его, вынеся резолюцию: «Господам Кнорре
                    и Балинскому в их домогательствах отказать…». Гласные думы усомнились в достаточной проработанности проекта, к тому же сыграло свою роль и существовавшее на тот момент трамвайное лобби (трамвай приносил тогда значительную часть прибыли
                    в казну)<br>В том же 1902 году инженерами путей сообщения А. И. Антоновичем, Н. И. Голиневичем и Н. П. Дмитриевым был разработан проект Московской городской железной дороги. В отличие от проекта Кнорре и Балинского, этот проект предусматривал
                    как подземную (в центральной части города), так и надземную прокладку линий по грунту или на эстакадах — на окраинах. Планировалось построить четыре радиальных линии и одну кольцевую по трассе Камер-Коллежского вала с пересадочными
                    станциями.
                </p>
            </article>
            <article>
                <img width='100%' src="images/history.jpg" alt="">
            </article>
            <article>
                <table>
                    <tr>
                        <?php include "include/table-header.php" ?>
                    </tr>
                    <tr>
                        <?php echo "<td>Тип А</td>"?>
                        <?php echo "<td>с 1934 по 1937</td>"?>
                        <?php echo "<td>110</td>"?>
                    </tr>
                        <tr>
                        <?php echo "<td>Тип Б</td>"?>
                        <?php echo "<td>с 1937 по 1975</td>"?>
                        <?php echo "<td>162</td>"?>
                    </tr>

                </table>
            </article>
            <article><?php include "include/photos.php" ?></article>

        </section>
        <?php include "include/footer.php" ?>
    </main>
</body>

</html>