<?php if(!class_exists("View", false)) exit("no direct access allowed");?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>layout演示</title>
    <link href="/i/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <br />
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        Layout演示
                    </a>
                </div>
            </div>
        </nav>
        <?php include $_view_obj->compile($__template_file); ?>
    </div>
</body>

</html>