<?php
/**
 * 组成多少个互不相同且无重复数字的三位数
 * 文档说明：确定数组个数，利用for循环,而for循环的条件，是小于等于这个数，然后确定组成数字的个数，那麽这就是几层循环，
 *           进行判断不能重复，然后进行数据输出。
 */

//    for ( $i = 1; $i <= 4; $i++) {
//        for ($j = 1; $j <= 4; $j++) {
//            for ($k = 1; $k  <= 4; $k ++) {
//                if ($i!=$j && $i != $k && $j !=$k) {
//                    $count++;
//                    echo $i*100+$j*10 +$k.'<br/>';
//                }
//            }
//        }
//    }
/**
 * 编写一个单例模式类
 */
//class Singleton{
//    //存放实例
//    private static $_instance = null;
//
//    //私有化构造方法、
//    private function __construct(){
//        echo "单例模式的实例被构造了";
//    }
//    //私有化克隆方法
//    private function __clone(){
//    }
//    //公有化获取实例方法
//    public static function getInstance(){
//        if (!(self::$_instance instanceof Singleton)){
//            self::$_instance = new Singleton();
//        }
//        return self::$_instance;
//    }
//}
//$singleton=Singleton::getInstance();
/**
 *编写php函数，实现遍历指定文件夹下的所有文件和子文件夹
 *
 */
//function my_scandir($dir)
//{
//     $files = array();
//     if ( $handle = opendir($dir) ) {
//         while ( ($file = readdir($handle)) !== false ) {
//             if ( $file != ".." && $file != "." ) {
//                 if ( is_dir($dir . "/" . $file) ) {
//                     $files[$file] = scandir($dir . "/" . $file);
//                 }else {
//                     $files[] = $file;
//                 }
//             }
//         }
//         closedir($handle);
//         return $files;
//     }
//}

/**
 * php编写代码实现求出两个路径的公共部分
 * 求$b相对于$a的相对路径
 * @param string $a
 * @param string $b
 * @return string
 */
//function getRelativePath ($a, $b)
//{
//    $patha = explode('/', $a);
//    $pathb = explode('/', $b);
//    $counta = count($patha) - 1;
//    $countb = count($pathb) - 1;
//    $path = "../";
//    if ($countb > $counta) {
//        while ($countb > $counta) {
//            $path .= "../";
//            $countb --;
//        }
//    }
//    // 寻找第一个公共结点
//    for ($i = $countb - 1; $i >= 0;) {
//        if ($patha[$i] != $pathb[$i]) {
//            $path .= "../";
//            $i --;
//        } else {
////判断是否为真正的第一个公共结点，防止出现子目录重名情况
//            for ($j = $i - 1, $flag = 1; $j >= 0; $j --) {
//                if ($patha[$j] == $pathb[$j]) {
//                    continue;
//                } else {
//                    $flag = 0;
//                    break;
//                }
//            }
//            if ($flag)
//                break;
//            else
//                $i ++;
//        }
//    }
//    for ($i += 1; $i <= $counta; $i ++) {
//        $path .= $patha[$i] . "/";
//    }
//    return $path;
//}
//$a = "/a/c/d/e.php";
//$b = "/a/c.php";
//$path = getRelativePath($a, $b);
//echo $path;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <p>距离2019年1月1日还有 小时 分钟 秒</p>
    </center>
</body>
</html>
<script src="jq.js"></script>
<script>
    var show  =  document.getElementsByTagName('p')[0];
    function getTime(){
        //创建时间（现在）
        var nowDate = new Date();
        //2018年时间对象
        var nextDate = new Date(2019,1,1);
        //获取两个时间点 距离1970.0.1的时间（毫秒数）
        var nowTime = nowDate.getTime();
        var nextTime = nextDate.getTime();
        //根据差值可以计算出 现在距离2019年的毫秒数 进而计算出秒数（毫秒数/1000）
        var dSecond= parseInt((nextTime - nowTime) / 1000);
        //通过现在距离2019年的秒数求出天数（秒数/24*60*60）
        var dDay = parseInt(dSecond/(24*60*60));
        //通过现在距离2019年的秒数取余 求出 去掉天数剩下的秒数
        var reSecond = dSecond % (24*60*60);
        //通过计算完剩下的秒数  求出小时数
        var dHour = parseInt(reSecond / 3600);
        console.log(dHour);
        //通过计算小时 剩下的秒数 求分钟数
        var reSecond1 = reSecond % 3600;
        var dMinute = parseInt(reSecond1 / 60);
        console.log(dMinute);
        //通过计算分钟数 剩下的秒数  就是我们想要的描述
        var nowSecond = reSecond1 % 60;
        show.innerHTML = '距离2019年1月1日还有' +dDay+ '天' +dHour+ '小时' +dMinute+ '分钟' +nowSecond+ '秒';
    }
    getTime();
    setInterval(function () {
        getTime();
    },1000)
</script>


