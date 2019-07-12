<body>
  <div class="content">
      <h3>商品管理</h3>
     <!--  @if ($errors->any())
      <div class="alert alert-danger">
      <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
      </ul>
      </div>
      @endif -->
      <form action="/goods/update" method="post" enctype="multipart/form-data">
      <input type="hidden" name="goods_id" value="{{$data->goods_id}}">
          @csrf
          <div>
            商品名称：<input type="text" name="goods_name" value="{{$data->goods_name}}">
          </div>
          <div>
            商品logo：<input type="file" name="goods_big_pic" value="{{$data->goods_big_pic}}">
          </div>
          <div>
            价格：<input type="text" name="goods_selfprice" value="{{$data->goods_selfprice}}">
          </div>
          <p><button>提交</button></p>
      </form>
  </div>
</body>