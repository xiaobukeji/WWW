<?php if(!class_exists("View", false)) exit("no direct access allowed");?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>留言本演示</title>
    <link href="/i/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">留言本模块</a>
                    </div>
                </div>
            </nav>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-8">
                <?php $_foreach_r_counter = 0; $_foreach_r_total = count($records);?><?php foreach( $records as $r ) : ?><?php $_foreach_r_index = $_foreach_r_counter;$_foreach_r_iteration = $_foreach_r_counter + 1;$_foreach_r_first = ($_foreach_r_counter == 0);$_foreach_r_last = ($_foreach_r_counter == $_foreach_r_total - 1);$_foreach_r_counter++;?>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="/i/img/1.gif" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="javascript:void(0);" onclick="showmsg(<?php echo htmlspecialchars($r['id'], ENT_QUOTES, "UTF-8"); ?>)"><?php echo htmlspecialchars($r['title'], ENT_QUOTES, "UTF-8"); ?></a><button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button></h4> <?php echo htmlspecialchars($r['contents'], ENT_QUOTES, "UTF-8"); ?>
                                <blockquote class="blockquote-reverse small">
                                    <ul class="list-inline text-muted">

                                        <li>by</li>
                                        <li><?php echo htmlspecialchars($r['username'], ENT_QUOTES, "UTF-8"); ?></li>
                                        <li><?php echo date("Y年m月d日 H:i:s", $r['createtime']);?></li>
                                        <li>
                                            <button type="button" class="btn btn-default btn-xs" onclick="digmsg(<?php echo htmlspecialchars($r['id'], ENT_QUOTES, "UTF-8"); ?>)"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> <span id="dig-<?php echo htmlspecialchars($r['id'], ENT_QUOTES, "UTF-8"); ?>"><?php echo htmlspecialchars($r['dig'], ENT_QUOTES, "UTF-8"); ?></span></button>
                                        </li>
                                    </ul>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <nav>
                    <ul class="pagination pull-right">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-4">
                <nav>
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation" class="active"><a href="javascript:void(0);" data-toggle="modal" data-target="#myModal">发表留言</a></li>
                        <li role="presentation"><a href="http://www.speedphp.com/" target="_blank">看看教程</a></li>
                        <!--<li role="presentation"><a href="#">...</a></li>-->
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<form method="POST" action="<?php echo url(array('c'=>"main", 'a'=>"write", ));?>">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">填写留言</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="inputTitle">标题</label>
							<input type="text" name="title" class="form-control" id="inputTitle" placeholder="请输入标题...">
						</div>
						<div class="form-group">
							<label for="inputContent">内容</label>
							<textarea name="contents" class="form-control" rows="3" id="inputContent" placeholder="请输入内容..."></textarea>
						</div>
						<div class="form-group">
							<label for="inputName">您的名字</label>
							<input type="text" name="username" class="form-control" id="inputName" placeholder="请输入名字...">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
						<button type="submit" class="btn btn-primary">提交</button>
					</div>
				</div>
			</div>
        </form>
    </div>

    <?php include $_view_obj->compile("showmsg.html"); ?>

    <script src="/i/js/jquery.min.js"></script>
    <script src="/i/js/bootstrap.min.js"></script>
</body>

</html>