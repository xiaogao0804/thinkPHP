<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		hello	
	</body>
	<script src="jquery.min.js"></script>
	<script>
function ajax(){
	return new Promise(function(reslove,reject){
		$.ajax({
			url:"Index/Index/get_POST",
			data:{'url':123},
			type:'POST',
			success(res){
				reslove(res)
			},
			error(){
				reject()
			}
		})
	})
	
}

	function* yy(){
		var c = yy();
		var a = yield ajax();
		console.log(a);
		a.then(function(res){c.next()})
		yield console.log(1);
	}
	var b = yy();
	b.next();
	</script>
</html>