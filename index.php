<!DOCTYPE html>
<html lang="ja">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="styles.css">
</head>

<body>
        <header>
                <h2><a href="index.php">Youtube 検索ツール</a></h2>
                <form action="index.php" method="POST">
                        <p>filter: <input type="text" name="filter" value="
                                <?php
                                // error_reporting(E_ALL & E_NOTICE);
                                // echo $_POST['filter'];
                                ?>
                        "></p>
                </form>
                <hr>
        </header>
        <br>

        <div class="list">
                <?php
                $filter = $_POST['filter'];
                // $output = shell_exec();
                // $output1 = preg_split('\n');
                // $output2 = preg_grep('sto', $output1);
                // $output3 = preg_grep($filter, $output2);
                // $count = count($output3);
                echo "[count:" . "$count" . "]<br></br>";



                ?>
        </div>
        <div class="wrapper">
                <div></div>
                <div><a href="https://www.youtube.com/channel/UCaminwG9MTO4sLYeC3s6udA">ヒカル（Hikaru）</a></div>
                <!-- <div><a href="https://www.youtube.com/c/HikaruGames">Hikaru Games</a></div> -->
                <div><a href="https://www.youtube.com/c/MeijinGames">Next Stage（ネクステ）</a></div>
                <div>コラボ</div>
                <div><a href=""></a></div>
        </div>

        <div class="wrapper">
                <div>2022/03/01</div>

                <div><iframe width="320" height="180" src="https://www.youtube.com/embed/Wu-wku1mAtc?showinfo=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div><iframe width="400" height="225" src="https://www.youtube.com/embed/Wu-wku1mAtc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div><iframe width="400" height="225" src="https://www.youtube.com/embed/Wu-wku1mAtc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        </div>


</body>

</html>