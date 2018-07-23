<?php
//为了方便阅读，这里仅仅是一个图片文件上传的最简单的示例，实际使用请另行编写相关代码

move_uploaded_file($_FILES["file"]["tmp_name"], $_FILES["file"]["name"]);

//输出图片文件所在的地址，这里假设存放在“php”目录下面，图片文件的地址最好输出的是完整路径，如：echo "http://localhost/php/" . $_FILES["file"]["name"];
echo "php/" . $_FILES["file"]["name"];
?>
