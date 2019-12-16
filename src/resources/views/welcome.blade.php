<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>電卓</title>
</head>

<?php
$first=$_POST['first'];
$second=$_POST['second'];
$operator=$_POST['operator'];
$result=" ";

if(is_numeric($first)&&is_numeric($second)){
    switch($operator){
        case "足し算":
        $result=$first+$second;
        break;
        case "引き算":
        $result=$first-$second;
        break;
        case "掛け算":
        $result=$first*$second;
        break;
        case "割り算":
        $result=$first/$second;
    }
}
?>

<body>
    <h1>電卓</h1>
    <form method="post">
     <p> <input type="number" name="first"  value="<?php echo $first;?>">
     <label >1つ目の数</label></p>
     <p><input type="number" name="second"  value="<?php echo $second;?>">
     <label>2つ目の数</label></p>
     <p>
    <p>
        <input readonly="readonly" name="result" value="<?php echo $result?>">
        <label>答え</label></p>
    </p>
    
     <input type="submit" value="足し算" name="operator">
     <input type="submit" value="引き算" name="operator">
     <input type="submit" value="掛け算" name="operator">
     <input type="submit" value="割り算" name="operator">

</form>
</body>
</html>
