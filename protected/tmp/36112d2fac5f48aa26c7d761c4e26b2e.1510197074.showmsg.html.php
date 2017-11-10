<?php if(!class_exists("View", false)) exit("no direct access allowed");?>    <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="show_title"></h4>
				</div>
				<div class="modal-body">
					<p id="show_contents"></p>
					<blockquote class="blockquote-reverse small">
						<ul class="list-inline text-muted">

							<li>by</li>
							<li id="show_username"></li>
							<li id="show_createtime"></li>
							<li>
								<button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span><span id="show_dig"></span></button>
							</li>
						</ul>
					</blockquote>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
				</div>
			</div>
		</div>
	</div>
	<script>
		function showmsg(id){
				// 由于需要JSON数据，所以使用$.getJSON
				$.getJSON("<?php echo url(array('c'=>"view", 'a'=>"show", ));?>", { 'upid': id }, function(json){
						// 这里是返回的数据，json变量就是json格式的数据，可以直接使用
						// 给各个位置复制上去
						$("#show_title").html(json.title);
						$("#show_contents").html(json.contents);
						$("#show_username").html(json.username);
						$("#show_createtime").html(json.createtime);
						$("#show_dig").html(json.dig);
						// 显示对话框
						$('#showModal').modal('show');
				});
		}
		function digmsg(id){
		    // 这里不需要json返回，所以直接使用$.get即可
		    $.get("<?php echo url(array('c'=>"view", 'a'=>"dig", ));?>", {"upid" : id}, function(dig){
		        $("#dig-" + id).html(dig);
		    });
		}
		function delmsg(id){
		    // 这里不需要json返回，所以直接使用$.get即可
		    $.get("<?php echo url(array('c'=>"view", 'a'=>"del", ));?>", {"upid" : id}, function(){
		        $("#panel-" + id).fadeOut();
		    });
		}
	</script>