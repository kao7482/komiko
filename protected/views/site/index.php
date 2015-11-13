<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

  <div class="container">
    <div class="row">
	  <div class="col-md-8 text-center comic-list">
	    <div class="row">
		  <h2><?php echo Yii::t('main','new_comic');?></h2>
	  	  <div class="col-md-3 col-sm-4 col-xs-6">
		    <div class="col-md-12 col-sm-12 comic-list-pic comic-list-pic-auto" style="background-image:url('pic/01.jpg')"></div>
			<p>漫畫名：魔炮
			  <br/>作者
			  <br/>更新話數
		    </p>
		  </div>
		  <div class="col-md-3 col-sm-4 col-xs-6">
		    <div class="col-md-12 col-sm-12 comic-list-pic comic-list-pic-auto" style="background-image:url('pic/02.jpg')"></div>
			<p>漫畫名：魔炮SS
			  <br/>作者
			  <br/>更新話數
		    </p>
		  </div>
		  <div class="col-md-3 col-sm-4 col-xs-6">
			<div class="col-md-12 col-sm-12 comic-list-pic comic-list-pic-auto" style="background-image:url('pic/03.jpg')"></div>
			<p>漫畫名：少女革命
			  <br/>作者
			  <br/>更新話數
		    </p>
		  </div>
		  <div class="col-md-3 col-sm-4 col-xs-6">
			<div class="col-md-12 col-sm-12 comic-list-pic comic-list-pic-auto" style="background-image:url('pic/04.jpg')"></div>
			<p>漫畫名：神無月的巫女
			  <br/>作者
			  <br/>更新話數
		    </p>
		  </div>
		</div>
		<button type="button" class="btn btn-default">查看更多</button>
		<div class="row">
		  <h2><?php echo Yii::t('main','hot_comic');?></h2>
	  	  <div class="col-md-3 col-sm-4 col-xs-6">
		    <div class="col-md-12 col-sm-12 comic-list-pic comic-list-pic-auto" style="background-image:url('pic/01.jpg')"></div>
			<p>漫畫名：魔炮
			  <br/>作者
			  <br/>最新話
		    </p>
		  </div>
		  <div class="col-md-3 col-sm-4 col-xs-6">
		    <div class="col-md-12 col-sm-12 comic-list-pic comic-list-pic-auto" style="background-image:url('pic/02.jpg')"></div>
			<p>漫畫名：SS
			  <br/>作者
			  <br/>最新話
		    </p>
		  </div>
		  <div class="col-md-3 col-sm-4 col-xs-6">
		    <div class="col-md-12 col-sm-12 comic-list-pic comic-list-pic-auto" style="background-image:url('pic/03.jpg')"></div>
			<p>漫畫名：少女革命
			  <br/>作者
			  <br/>最新話
		    </p>
		  </div>
		  <div class="col-md-3 col-sm-4 col-xs-6">
		    <div class="col-md-12 col-sm-12 comic-list-pic comic-list-pic-auto" style="background-image:url('pic/04.jpg')"></div>
			<p>漫畫名：神無月的巫女
			  <br/>作者
			  <br/>最新話
		    </p>
		  </div>
		</div>
		<button type="button" class="btn btn-default">查看更多</button>
		<div class="row">
		  <h2>熱門專輯推薦</h2>
	  	  <div class="col-md-3 col-sm-4 col-xs-6">
		    <div class="col-md-12 col-sm-12 comic-list-pic comic-list-pic-auto" style="background-image:url('pic/01.jpg')"></div>
			<p>專輯名稱：魔炮
			  <br/>整理者
			  <br/>更新日期
		    </p>
		  </div>
		  <div class="col-md-3 col-sm-4 col-xs-6">
		    <div class="col-md-12 col-sm-12 comic-list-pic comic-list-pic-auto" style="background-image:url('pic/02.jpg')"></div>
			<p>專輯名稱：魔炮SS
			  <br/>整理者
			  <br/>更新日期
		    </p>
		  </div>
		  <div class="col-md-3 col-sm-4 col-xs-6">
		    <div class="col-md-12 col-sm-12 comic-list-pic comic-list-pic-auto" style="background-image:url('pic/03.jpg')"></div>
			<p>專輯名稱：少女革命
			  <br/>整理者
			  <br/>更新日期
		    </p>
		  </div>
		  <div class="col-md-3 col-sm-4 col-xs-6">
		    <div class="col-md-12 col-sm-12 comic-list-pic comic-list-pic-auto" style="background-image:url('pic/04.jpg')"></div>
			<p>專輯名稱：神無月的巫女
			  <br/>整理者
			  <br/>更新日期
		    </p>
		  </div>
		</div>
		<button type="button" class="btn btn-default">查看更多</button>
	  </div>
	  <div class="col-md-4">
	    <ul class="nav nav-tabs">
	      <li style="padding:10px 15px;">漫畫排行</li>
		  <li role="presentation" class="active"><a href="#woche" aria-controls="settings" role="tab" data-toggle="tab">週</a></li>
	      <li role="presentation"><a href="#monat" aria-controls="settings" role="tab" data-toggle="tab">月</a></li>
	      <li role="presentation"><a href="#alles" aria-controls="settings" role="tab" data-toggle="tab">總</a></li>
	    </ul>
		<div class="tab-content">
		  <div role="tabpanel" class="tab-pane active" id="woche">
		    <table class="table table-striped">
			  <tr><td>1 Cirtus第38話</td></tr>
			  <tr><td>2 魔法人妻奈葉第50話</td></tr>
			</table>
		  </div>
          <div role="tabpanel" class="tab-pane" id="monat">1 聖母在上</div>
          <div role="tabpanel" class="tab-pane" id="alles">1 少女革命</div>
		</div>
	  </div>
    </div>
  </div>
