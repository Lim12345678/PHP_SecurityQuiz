<?php
require_once ("Security.php");
$security = new Security();
$list = $security->getContents();


?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Security List</title>
    <style>
        * {
            padding: 0;
            margin: 0 auto;
            text-align: center;
        }
        table {
            width: 80%;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: lightgray;
        }
        a {
            text-decoration: none;
            color: black;
        }
        button {
            width: 250px;
            padding: 10px;
            font-size: 1.1rem;
        }
        footer {
            background-color: lightgray;
            margin-top: 20px;
            text-align: right;
        }
    </style>
</head>
<body>
    <br><h2>서비스 공격 유형 전체 리스트</h2><br><hr><br>
    <a href="security_view.php"><button>돌아가기</button></a>
    <br><br>
    <div>
        <table border="1">
            <tr>
                <th>NO</th>
                <th>용어 이름</th>
                <th>용어 설명</th>
            </tr>

            <?php foreach ($list as $value) {?>
            <tr>
                <td><?php echo $value['no']; ?></td>
                <td><?php echo $value['word']; ?></td>
                <td><?php echo $value['description']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <footer>Copyright &copy; 2022.02 Lim Ji Eun All right reserved.</footer>
</body>
</html>
