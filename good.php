<?php
session_start();  // 啟用交談期
echo "<body style='background-color:#e2f0d9'>";
$number1 = "";//商品1
$number2 = "";//商品2
$number3 = "";//商品3
$number4 = "";//商品4
$number5 = "";//商品5
$number6 = "";//商品6
$number7 = "";//商品7
$number8 = "";//商品8

$name = "";
$phone = "";
$address = "";
// 取得表單欄位值
if ( isset($_POST["good1"]) )
   $number1 = $_POST["good1"];
if ( isset($_POST["good2"]) )
   $number2 = $_POST["good2"];
if ( isset($_POST["good3"]) )
   $number3 = $_POST["good3"];
if ( isset($_POST["good4"]) )
   $number4 = $_POST["good4"];
if ( isset($_POST["good5"]) )
   $number5 = $_POST["good5"];
if ( isset($_POST["good6"]) )
   $number6 = $_POST["good6"];
if ( isset($_POST["good7"]) )
   $number7 = $_POST["good7"];
if ( isset($_POST["good8"]) )
   $number8 = $_POST["good8"];


if ( isset($_POST["name"]) )
   $name = $_POST["name"]; //名稱
if ( isset($_POST["phone"]) )
   $phone = $_POST["phone"]; //電話
if ( isset($_POST["address"]) )
   $address = $_POST["address"]; //地址


// 建立MySQL的資料庫連接 
$link = mysqli_connect("localhost","root",
                       "","lucao")
        or die("無法開啟MySQL資料庫連接!");
//echo "資料庫test開啟成功!";
if($name!=""&& $phone != "" && $address!=""){
   if(($number1!= 0 && $number1!=" ")||($number2 != 0 && $number2!=" ")||($number3 != 0 && $number3!=" ")||($number4 != 0 && $number4!=" ")||($number5 != 0 && $number5!=" ")||($number6 != 0 && $number6!=" ")||($number7 != 0 && $number7!=" ")||($number8 != 0 && $number8!=" ")){
      echo "<h1 style=\"color:#423d2d;margin-top:100px;\"><center>訂購成功<br><br>";
      if ($number1 != 0) {
         $sql = "INSERT INTO `order`(`good_id`, `price`, `number`,`customer`,	`phone`,	`address`) VALUES ('1','50',$number1,\"$name\",\"$phone\",\"$address\")";
         echo "明信片 | 榕夏 共 $number1 張<br>";
         mysqli_query($link, 'SET NAMES utf8'); 
         mysqli_query($link, $sql);
      }
      if ($number2 != 0) {
         $sql2 = "INSERT INTO `order`(`good_id`, `price`, `number`,`customer`,`phone`,	`address`) VALUES ('2','50',$number2,\"$name\",\"$phone\",\"$address\")";
         echo "明信片 | 芒塘 共 $number2 張<br>";
         mysqli_query($link, 'SET NAMES utf8');
         mysqli_query($link, $sql2);
      }
      if ($number3 != 0) {
         $sql3 = "INSERT INTO `order`(`good_id`, `price`, `number`,`customer`,`phone`,	`address`) VALUES ('3','50',$number3,\"$name\",\"$phone\",\"$address\")";
         echo "明信片 | 鹿口 共 $number3 張<br>";
         mysqli_query($link, 'SET NAMES utf8');
         mysqli_query($link, $sql3);
      }
      if ($number4 != 0) {
         $sql4 = "INSERT INTO `order`(`good_id`, `price`, `number`,`customer`,`phone`,	`address`) VALUES ('4','50',$number4,\"$name\",\"$phone\",\"$address\")";
         echo "明信片 | 飽穗 共 $number4 張<br>";
         mysqli_query($link, 'SET NAMES utf8');
         mysqli_query($link, $sql4);
      }
      if ($number5 != 0) {
         $sql5 = "INSERT INTO `order`(`good_id`, `price`, `number`,`customer`,`phone`,	`address`) VALUES ('5','50',$number5,\"$name\",\"$phone\",\"$address\")";
         echo "明信片 | 涸魚 共 $number5 張<br>";
         mysqli_query($link, 'SET NAMES utf8');
         mysqli_query($link, $sql5);
      }
      if ($number6 != 0) {
         $sql6 = "INSERT INTO `order`(`good_id`, `price`, `number`,`customer`,`phone`,	`address`) VALUES ('6','50',$number6,\"$name\",\"$phone\",\"$address\")";
         echo "明信片 | 雙鹿 共 $number6 張<br>";
         mysqli_query($link, 'SET NAMES utf8');
         mysqli_query($link, $sql6);
      }
      if ($number7 != 0) {
         $sql7 = "INSERT INTO `order`(`good_id`, `price`, `number`,`customer`,`phone`,	`address`) VALUES ('7','50',$number7,\"$name\",\"$phone\",\"$address\")";
         echo "明信片 | 鹿夜 共 $number7 張<br>";
         mysqli_query($link, 'SET NAMES utf8');
         mysqli_query($link, $sql7);
      }
      if ($number8 != 0) {
         $sql8 = "INSERT INTO `order`(`good_id`, `price`, `number`,`customer`,`phone`,	`address`) VALUES ('8','50',$number8,\"$name\",\"$phone\",\"$address\")";
         echo "明信片 | 幕後 共 $number8 張<br>";
         mysqli_query($link, 'SET NAMES utf8');
         mysqli_query($link, $sql8);
      }
      echo "&emsp;&emsp;訂購人：$name&emsp;訂購人電話：$phone&emsp;<br>";
      echo "訂購人地址：$address<br/></center</h1>";
      echo "<h4 style=\"margin-top:100px;\"><center><a href='store.html'>返回商店</a></center></h4>";
   }
   else{
      echo "<script type=\"text/javascript\">
        alert(\"請務必填寫欲購買商品的數量！！否則訂單不會成立哦~\");
      </script>";
      echo "<h1 style=\"margin-top:100px;\"><center><a href='store.html'>點我回到商店哦！</a></center></h1>";
   }
}
else{
   echo "<script type=\"text/javascript\">
     alert(\"請務必完整填寫下方訂購人資訊！！避免收不到貨物哦~\");
   </script>";
   echo "<h1 style=\"margin-top:100px; color: #423d2d;\"><center><a href='store.html'>點我回到商店哦！</a></center></h1>";
}

//送出UTF8編碼的MySQL指令
mysqli_close($link);  // 關閉資料庫連接

?>
