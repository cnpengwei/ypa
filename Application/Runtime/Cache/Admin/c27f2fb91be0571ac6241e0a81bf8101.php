<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>
        标题位置
    </title>
    <link href="/Public/css/style.css" rel="stylesheet" />
    <link href="/Public/img/100du.ico" rel="shortcut icon" />
    <script src="/Public/js/jquery-1.11.0.min.js"></script>
    <style type="text/css">
        .box{border:3px solid #FF00AA; background:#888; width:200px; height:300px; }
        .admin_search{ border: 1px solid #ccc; width: 100%; }
        .perf_list{width: 100%; border: 1px solid red; background: #000; } 
            td{ height: 20px;border: 1px solid #000; background: #FFF;}
            th{border: 1px solid #000; height: 22px;}
    </style>
</head
<body>
    <form id='form1' method='post'>
        <div class="admin_search">
            <label class="screen-reader-text" for="s">搜索：</label>
            <input onfocus="if(this.value=='搜索神马的最有爱了'){this.value='';}" onblur="if(this.value==''){this.value='搜索神马的最有爱了';}" type="text" value="搜索神马的最有爱了" name="keywords" id="s" style="color:#aaa;"/>
            <input type="submit" id="searchsubmit" value="搜索" />
        </div>
        <br />
        <div>         
            <table class="perf_list" cellpadding="0" cellspacing="0" >
                <tr>
                    <th width="3%" height="22" background="/Public/img/admin/bg2.gif" bgcolor="#FFFFFF">
                        <div align="center">
                            <input type="checkbox" name="checkbox" value="checkbox" />
                        </div>
                    </th>
                    <th width="3%" height="22" background="/Public/img/admin/bg2.gif" bgcolor="#FFFFFF">
                        <div align="center"><span class="STYLE1">ID</span></div>
                    </th>
                    <th width="22%" height="22" background="/Public/img/admin/bg2.gif" bgcolor="#FFFFFF">
                        <div align="center"><span class="STYLE1">文档标题</span></div>
                    </th>
                    <th width="14%" height="22" background="/Public/img/admin/bg2.gif" bgcolor="#FFFFFF">
                        <div align="center"><span class="STYLE1">更新时间</span></div>
                    </th>
                    <th width="10%" background="/Public/img/admin/bg2.gif" bgcolor="#FFFFFF">
                        <div align="center"><span class="STYLE1">关键字</span></div>
                    </th>
                    <th width="10%" height="22" background="/Public/img/admin/bg2.gif" bgcolor="#FFFFFF">
                        <div align="center"><span class="STYLE1">点击</span></div>
                    </th>
                    <th width="10%" height="22" background="/Public/img/admin/bg2.gif" bgcolor="#FFFFFF" class="STYLE1">
                        <div align="center">发布人</div>
                    </th>
                    <th width="15%" height="22" background="/Public/img/admin/bg2.gif" bgcolor="#FFFFFF" class="STYLE1">
                        <div align="center">操作</div>
                    </th>
               </tr>    
               <?php if(is_array($performanceList)): $i = 0; $__LIST__ = $performanceList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td>
                        <div align="center"><input type="checkbox" name="checkbox2" value="checkbox" /></div>
                    </td>
                    <td>
                        <div align="center" class="STYLE1"> <div align="center"><?php echo ($vo["id"]); ?></div></div>
                    </td>
                    <td>
                        <div align="center"><span class="STYLE1"><?php echo \Org\Util\String::msubstr($vo['title'], 0, 10);?></span></div>
                    </td>
                    <td height="20" bgcolor="#FFFFFF">
                        <div align="center"><span class="STYLE1"><?php echo (date("Y-m-d H:i:s",$vo["post_time"])); ?></span></div>
                    </td>
                    <td bgcolor="#FFFFFF">
                        <div align="center"><span class="STYLE1"><?php echo (msubstr($vo["keywords"],0,20)); ?></span></div>
                    </td>
                    <td height="20" bgcolor="#FFFFFF">
                        <div align="center"><span class="STYLE1"><?php echo ($vo["hits"]); ?></span></div>
                    </td>
                    <td height="20" bgcolor="#FFFFFF">
                        <div align="center"><span class="STYLE1"><?php echo ($vo["username"]); ?></span></div>
                    </td>
                    <td height="20" bgcolor="#FFFFFF">
                        <div align="center">
                            <span class="STYLE4">
                                <a href="/test/Performance/show/id/<?php echo ($vo["id"]); ?>"><img src="/Public/img/admin/edt.gif" width="16" height="16" />编辑</a>&nbsp; &nbsp;
                                <a href="/test/Performance/delete/id/<?php echo ($vo["id"]); ?>"><img src="/Public/img/admin/del.gif" width="16" height="16" />删除</a>
                            </span>
                        </div>
                    </td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
       </table>
   </div>
    <div class="page"><?php echo ($page); ?></div>
</form>
    <script type='text/javascript'>
        $(document).ready(function(){
           //alert('here'); 
        });
    </script>
</body>
</html>