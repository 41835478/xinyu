<?php include($tpl.'inc.header'.PHP);?>
<div class="alq-head">
	<div class="head-top">
		<div class="head-top-main">
			<div class="head-top-left">
				<span class="alq-info fl">专注单品，极致转化！</span>
				<div id="header_login" class="fl">    <div class="login-in ">
        <span class="wel-msg">欢迎：<a href="http://www.dataoke.com/ucenter/"><b>18530915076</b></a></span>
        <span class="login-line">|</span>
        <div class="login-profile">
            <span>个人中心<i></i></span>
            <div class="login-option">
                <a href="/ucenter/favorites_quan.asp" target="_blank">我的推广</a>
                <a href="/personSetCms/index.php?r=userConfig/index" target="_blank">CMS网站设置</a>
                <a href="/logout">注销</a>
            </div>
        </div>
        <span class="login-line">|</span>
        <a href="/zs_tk/" target="_blank" class="sale-center">放单中心<span id="top_msg" class="top_msg" style="display: inline;"></span></a>
    </div><!--登陆后个人中心-->
    <script>
        $(function(){
            $.ajaxSetup({ cache: false });
            $('.top_msg').show(function(){
//                console.log('getFangdan:'+(Math.random()));
                $.ajax({
                    type: "get",
                    url: "/cdetail/msg",
                    dataType: "text",
                    success: function (date1) {
                        //date1="2,2,0";
                        var str= new Array();
                        str=date1.split(",");
                        // alert(str[0]);
                        if(str[0]>0)
                        {
                            //document.getElementById("top_msg").innerHTML=" <em style='color:#F1468D;font-family:Arial;width:40px;border-radius: 16px;background: #FFD67A;font-style: normal;padding-left: 3px;padding-right: 5px; margin-left: 2px;'>"+str[0]+"</em> ";
                            //document.getElementById("top_msg").innerHTML='('+str[0]+')';
                            document.getElementById("top_msg").innerHTML=str[0];
                            //str[0] is something like  <em style="color:#F1468D;font-family:Arial;width:40px;border-radius: 16px;background: #FFD67A;font-style: normal;padding-left: 3px;padding-right: 5px; margin-left: 2px;">3</em>
                        }

                    }
                })
            });

        });
    </script>
    </div>
				<script>
					$.ajax({
						type: "get",
						url: "/header",
						dataType: "text",
                        cache:false,
						success: function (ret) {
							$('#header_login').html(ret);
						}
					})
				</script>

			</div>
			<div class="head-top-right">
				<a href="http://www.dataoke.com/hz_tk/" target="_blank">招商合作入驻</a>|
				<a href="http://www.dataoke.com/open/sj/" target="_blank">商家合作</a>|
				<a href="http://www.dataoke.com/help/?id=1" target="_blank">使用帮助</a>|
				<a href="http://www.dataoke.com/info/?id=5" target="_blank">加入大淘客QQ群</a>
			</div>
		</div>
	</div>
	<div class="head-search">
		<div class="logo fl"><a href="http://www.dataoke.com/"><span></span></a></div>
		<div class="search fl">
			<div class="select-area">
				<span class="sear-select">
					标题					<i></i>
				</span>
				<div id="xuan" class="hide sear-option">
					<span class="cur" data-value="keyword">标题</span>
					<span data-value="keyword_miaoshu">标题和文案</span>
					<span data-value="spid">商品ID</span>
				</div>
			</div>
            <div class="search-input" style="padding-left: 63px;">
				                <input id="keywords" type="text" name="keywords" placeholder="请输入搜索内容" value="" onkeydown="FSubmit(event.keyCode||event.which);">
            </div>
				<a id="search_a_tag" href="" class="search-submit fr" onclick="if($.trim(document.getElementById('keywords').value) == ''){return false;}this.href='/search/'+'?keywords='+encodeURIComponent(document.getElementById('keywords').value)+'&amp;xuan='+$('#xuan .cur').data('value');"><span></span></a>
			</div>
		<div class="head-search-right fr"></div>
	</div>
	<div class="head-nav">
		<div class="nav-main">
			<div class="nav-list">
				<ul>
					<li class="cur"><a href="/">主页</a></li>
					<li class="">
						<a href="/qlist/">领券直播</a>
					</li>
					<li class="">
						<a href="/top_tui">实时榜单</a><!--change /bangdan into /today_popularize_list-->
					</li>
					<li class="">
						<a href="/ddq">咚咚抢<i class="sf_new"></i></a>
					</li>
					<li class="">
						<a href="/cms">CMS网站下载<i class="app_new"></i></a>
					</li>
					<li>
						<a href="/zhushou">转链助手</a>
					</li>
				</ul>
			</div>
			<div class="nav-right">
				<input type="hidden" id="get_cate_url" value="/getCate/?type=index">
				<input type="hidden" id="save_qing" value="/syncDTK">
				<input type="hidden" id="reset_url" value="/reset">
				<input type="hidden" id="jude_login_url" value="/online">
			</div>

		</div>
	</div>
</div>
<?php include($tpl.'inc.footer'.PHP);?>