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
      <form action="/goods/add_do" method="post" enctype="multipart/form-data">
          @csrf
          <div>
            商品名称：<input type="text" name="goods_name">
          </div>
          <div>
            商品logo：<input type="file" name="goods_big_pic">
          </div>
          <div>
            价格：<input type="text" name="goods_selfprice">
          </div>
          <p><button>提交</button></p>
      </form>
  </div>
</body>