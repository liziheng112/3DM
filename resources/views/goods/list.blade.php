<html>
	<head>
		<title>商品库存管理展示</title>
	</head>
	<link rel="stylesheet" type="text/css" href="{{asset('css/page.css')}}">
	<body>
		<table border="=1">
			<tr>
				<td>ID</td>
				<td>商品名称</td>
				<td>商品logo</td>
				<td>商品价格</td>
				<td>操作</td>
			</tr>
			@if($data)
			@foreach($data as $v)
			<tr>
				<td>{{$v->goods_id}}</td>
				<td>{{$v->goods_name}}</td>
				<td><img src="{{config('app.img_url')}}{{$v->goods_big_pic}}" width="100"></td>
				<td>{{$v->goods_selfprice}}</td>
				<td>
					<a href="{{url('/goods/edit',['id'=>$v->goods_id])}}">修改</a>
					<a href="del/{{$v->goods_id}}">删除</a>
				</td>
			</tr>
			@endforeach
			@endif
		</table>
		{{$data->links()}}
	</body>
</html>