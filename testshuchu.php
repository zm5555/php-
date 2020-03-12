<form action="" method="post">
    <input type="text" name="n1" value="123" />
    <select name="yunsuanfu">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="n2" value="123"/>
    <input type="submit" name="提交" />
</form>
<?php
$data1 = $_POST['n1'];
$data2 = $_POST['n2'];
$fuhao = $_POST['yunsuanfu'];
if (is_numeric($data1) && is_numeric($data2)) {
    switch ($fuhao) {

        case "+":
            $result = $data1 + $data2;
            break;
        case "-":
            $result = $data1 - $data2;
            break;
        case "*":
            $result = $data1 * $data2;
            break;
        case "/":
            if ($data2 == 0) {
                $result = "除数不能为0";
            } else {
                $result = $data1 / $data2;
            }
            break;
    }
     echo "结果为$result";
    //echo json_encode($_POST);
    // var_dump($_POST);
} else {
    echo "请输入数字";
    // echo json_encode($_POST);
}