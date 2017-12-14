<script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="static/layer_mobile/layer.js"></script>
<script src="//cdn.alqwang.com/mobile/copy.js"></script>
<script src="static/js/function.js"></script>
<script src="static/js/footer.js"></script>
<?php include($tpl.INCLUDES.'inc.foot'.PHP);?>
</body>
</html>
<?php
$times_e = times();
echo "<!--页面加载用时";
echo ($times_e-$times_s)/1000;
echo "秒-->";
?>