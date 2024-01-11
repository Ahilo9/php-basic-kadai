<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
<body>
    <h2>社員情報入力フォーム</h2>
    <form action="confirm.php" method="post">
        <table>
            <tr>
                <td>社員名</td>
                <td>
                    <input type="text" name="employee_name"value="<?php echo isset($_COOKIE['name']) ? $_COOKIE['name'] : ''; ?>">
                </td>
            </tr>
            <tr>
                <td>年齢</td>
                <td>
                    <input type="text" name="employee_age"value="<?php echo isset($_COOKIE['age']) ? $_COOKIE['age'] : ''; ?>">
                </td>
            </tr>
            <tr>
                <td>所属部署</td>
                <td>
                    <input type="radio" name="department" value="開発部" checked>開発部
                    <input type="radio" name="department" value="営業部">営業部
                    <input type="radio" name="department" value="人事部">人事部
                </td>
        
                    </select>
                </td>
            </tr>
          
        </table>
        <input type="submit" value="送信">
    </form>
</body>
 
</html>