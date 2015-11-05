<?php /* @var $this Controller */ ?>		
  <nav class="navbar navbar-default">
    <div class="container nav-login">
      <a href="#" class="pull-left trans">繁簡轉換</a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
        <a href="#">Stanlie29</a>
      </button>  
      <ul class="pull-right">
	    <span class="collapse navbar-collapse login-list" id="bs-example-navbar-collapse-2">
	    <!-- unLogin -->
          <li class="hidden-xs"><a href="<?php echo CHtml::normalizeUrl(array('/user/login'));?>">登錄</a></li>
	      <li class="hidden-xs"><a href="<?php echo CHtml::normalizeUrl(array('/user/reg'));?>">註冊</a></li>
	      <!-- unLogin -->
	      
	      <!-- Logined -->
		  <li class="hidden-xs"><a href="#">Stanlie29</a></li>
	      <li class="hidden-xs"><a href="#">用戶組</a></li>
		  <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">通知 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">短消息</a></li>
              <li><a href="#">網站通知</a></li>
            </ul>
          </li>
		  <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">書架 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">最近看的</a></li>
              <li><a href="#">收藏</a></li>
            </ul>
          </li>
		  <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">個人中心 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">個人空間</a></li>
              <li><a href="#">我的評論</a></li>
            </ul>
          </li>
		  <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">上傳管理 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">上傳界面</a></li>
            </ul>
          </li>
          <!-- admin -->
		  <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">管理中心 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">管理界面</a></li>
            </ul>
          </li>
          <!-- admin -->
		</span>
	  </ul>
	</div>
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo CHtml::normalizeUrl(array('/site/index'));?>">300 Comic</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
		  <li>
            <a href="#" class="search-box" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">找漫畫 <span class="caret"></span></a>
		    <div class="search-menu">
		      <p>所有漫畫列表</p>
			  <hr />
			  <div class="search-label">
			    <label class="btn btn-sm btn-default">
			      <input type="checkbox" autocomplete="off"> 單行本
			    </label>
			    <label class="btn btn-sm btn-default">
			      <input type="checkbox" autocomplete="off"> 同人本
			    </label>
			      <label class="btn btn-sm btn-default">
			    <input type="checkbox" autocomplete="off"> 百合雜誌
			    </label>
			  </div>
            </div>
          </li>
          <li class="active"><a href="#">最近更新</span></a></li>
          <li><a href="#">熱門推薦</a></li>
		  <li><a href="#">同人漫畫</a></li>
		  <li><a href="#">已經完結</a></li>
		  <li><a href="#">精彩專輯</a></li>
		  <li><a href="#">我要上傳</a></li>
        </ul>
        <form class="navbar-form navbar-right" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="輸入作者、漫畫名、漢化組">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
      </div>
    </div>
  </nav>
<?php $this->beginContent('//layouts/main'); ?>

	<?php echo $content; ?>
	
<?php $this->endContent(); ?>