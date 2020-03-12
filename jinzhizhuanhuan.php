<?php
$data1 = $_POST['n1'];
$xuanxiang = $_POST['selection'];
switch ($xuanxiang) {
    case "2to10":
        $flag = 0;
        for ($i=0;$i<strlen($data1);$i++){
            if($data1[$i]>=2){
                // $result= "请输入2进制数";
                $flag = 1;
            }
        }
        if ($flag == 1) {
            $result= "请输入2进制数";

        } else {
            $result = bindec($data1);

        }
        // $result = bindec($data1);
        break;
    case "8to10":
        $result = octdec($data1);
        break;
    case "10to2":
        $result = decbin($data1);
        break;
    case "10to8":
        $result = decoct($data1);
        break;
    case "10to16":
        $result = dechex($data1);
        break;
    case "16to10":
        $result = hexdec("".$data1);
        break;
    case "16to2":
        $result = base_convert("".$data1, 16, 2);
        break;
}
// echo "结果为$result";
// echo json_encode($_POST);
// var_dump($_POST);
// echo json_encode($_POST);

?>
<form action="" method="post">
    <input type="text" name="n1" value="<?php echo $data1 ?>" />
    <select name="selection">
        <option value="2to10" <?php if ($xuanxiang == "2to10") {
                                    echo "selected";
                                } ?>>2to10</option>
        <option value="8to10" <?php if ($xuanxiang == "8to10") {
                                    echo "selected";
                                } ?>>8to10</option>
        <option value="10to2" <?php if ($xuanxiang == "10to2") {
                                    echo "selected";
                                } ?>>10to2</option>
        <option value="10to8" <?php if ($xuanxiang == "10to8") {
                                    echo "selected";
                                } ?>>10to8</option>
        <option value="10to16" <?php if ($xuanxiang == "10to16") {
                                    echo "selected";
                                } ?>>10to16</option>
        <option value="16to10" <?php if ($xuanxiang == "16to10") {
                                    echo "selected";
                                } ?>>16to10</option>
        <option value="16to2"  <?php if ($xuanxiang == "16to2") {
                                    echo "selected";
                                } ?>>16to2</option>
    </select>
    <input type="submit" name="转换" value="计算"/>
    <input type="text" name="n3" value="<?php echo $result ?>" />
</form>