<?php
require_once ("Security.php");
$security = new Security();

$list = $security->getMemberList();
$count = 1;

?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <style>
        * {
            padding: 0;
            margin: 0 auto;
            text-align: center;
        }
        .boxsize {
            height: 30px;
        }
        .buttonsize {
            width: 200px;
            height: 50px;
            font-size: 15px;
        }
        a {
            text-decoration: none;
            color: black;
        }
        th, td {
            padding: 10px;
        }

    </style>
</head>
<body>
    <h2>시스템 보안 구축</h2>
    <h2>서비스 공격 유형 파악 프로그램</h2>
    <br><hr><br>

    <div>
        <form action="security_view.php" method="post">
            <label for="name">게임 참가자 닉네임 : <input type="text" name="name" class="boxsize"></label><br><br>
            <label for="pw">비밀번호 : <input type="text" name="pw" class="boxsize"></label><br><br>
            <label for="start"><input type="submit" value="시작하기" class="buttonsize"></label><br><br>
            <button class="buttonsize"><a href="">기록 없이 시작하기</a></button><br><br>
        </form>
    </div>


    <div>
        <h3>점수 기록표(상위 10위)</h3>
        <table border="1">
            <tr>
                <th>등수</th>
                <th>참가자 닉네임</th>
                <th>점수</th>
                <th>시간(초)</th>
                <th>기록삭제</th>
            </tr>
            <tr>
                <?php
                foreach ($list as $value) {
                ?>
                <td><?php echo $count ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['score'] ?></td>
                <td><?php echo $value['time'] ?></td>
                <td><a href="">삭제하기</a></td>
            </tr>
            <?php  $count = $count + 1; } ?>
        </table>
    </div>






</body>
</html>
