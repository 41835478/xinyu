<div class="head_wrap">
	<div class="hw_imgl"></div>
	<div class="head_top">
		<img src="static/images/common/logo.jpg" alt="" class="ht_logo">
		<div class="ht_right">
			<div class="ht_rtop">
				<span>设为首页</span>
				<span>加入收藏</span>
				<span class="br_none">联系我们</span>
			</div>
			<p class="clear"></p>
			<div class="ht_rsearch">
				<form action="">
					<input type="text" class="ht_txt">
					<input type="submit" class="ht_sub" value="搜索">
					<p class="clear"></p>
				</form>
			</div>
		</div>
	</div>
	<div class="hw_imgr"></div>
</div>
<div class="nav_wrap">
	<img src="static/images/common/tu_04.jpg" alt="" class="nav_imgl">
	<div class="nav_box">
		<div class="nw_time">今天是2017年12月15日 星期五</div>
		<ul class="nav">
			<a href="">
				<li>首页</li>
			</a>
			<a href="">
				<li>关于我们</li>
			</a>
			<a href="">
				<li>新闻动态</li>
			</a>
			<a href="">
				<li>产品展示</li>
			</a>
			<a href="">
				<li>在线留言</li>
			</a>
			<a href="">
				<li class="bg_none">联系我们</li>
			</a>
		</ul>
	</div>
	<img src="static/images/common/tu_06.jpg" alt="" class="nav_imgl">
</div>
<div class="scroll_wrap">
	<div class="hw_imgl"></div>
	<div class="scroll_box">
		<div class="swiper-container">
		  <div class="swiper-wrapper">
		    <div class="swiper-slide">
		    	<img src="static/images/common/1.jpg" alt="">
		    </div>
		    <div class="swiper-slide">
		    	<img src="static/images/common/2.jpg" alt="">
		    </div>
		    <div class="swiper-slide">
		    	<img src="static/images/common/3.jpg" alt="">
		    </div>
		    <div class="swiper-slide">
		    	<img src="static/images/common/4.jpg" alt="">
		    </div>
		  </div>
		  <div class="swiper-pagination swiper-pagination-clickable"><span class="swiper-pagination-fraction"></span><span class="swiper-pagination-fraction"></span><span class="swiper-pagination-fraction swiper-pagination-fraction-active"></span></div>
		</div>
	</div>
	<div class="hw_imgr"></div>
	<p class="clear"></p>
</div>
<script>
	var mySwiper = new Swiper('.swiper-container', {
			autoplay:2000,
            direction:"horizontal",
            loop:true,
            pagination:".swiper-pagination",
            autoplayDisableOnInteraction:false,
            pagination : '.swiper-pagination',
			prevButton:'.swiper-button-prev',
			nextButton:'.swiper-button-next',
			pagination : '.swiper-pagination',
			paginationType : 'fraction',
			paginationClickable :true
		})
</script>