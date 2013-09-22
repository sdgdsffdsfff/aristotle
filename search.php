<?php
include_once ("./header.php");

function render_content($row) {
    $name = $row[name];
    $id = $row[id];
    $def = $row[def];
    echo "<p><a href=\"entity.php?id=$id\">$name</a></p>";

    echo $def;


    echo '<a class="btn btn-link" href="#" role="button">查看详情&nbsp; &raquo;</a>';

    echo "<hr>";
}

function render_entity($dbc, $keywords) {
    $query = "SELECT * FROM def where name = '$keywords'";
    $result = mysqli_query($dbc, $query) or die('Error querying database.');
    if ($row = mysqli_fetch_array($result)) {

        render_content($row);
    }
}

if (isset($_POST['submit'])) {
    $keywords = $_POST['keywords'];
}

if (isset($_GET['keywords'])) {
    $keywords = $_GET['keywords'];
}
?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form class="form-search" action="search.php" method="post" class="form-horizontal"
              enctype="multipart/form-data">

            <div class="container" >
                <p></p>
                <div class="row">
                    <div class="col-md-3">
                        <img width="100%" class="media-object" src="img/logo.jpg" >                    
                    </div>   
                    <div class="col-md-9">
                        <div class="input-group">
                            <input type="text" id ="keywords" name ="keywords" class="form-control input-lg" placeholder="搜索......"  value ="<?php if (isset($keywords)) echo $keywords; ?>">
                            <span class="input-group-btn">
                                <button name ="submit" type="submit" class="btn btn-primary  btn-lg"><span class="glyphicon glyphicon-search"></span></button>
                            </span> 
                            &nbsp;&nbsp;<a  href="search.php"><span class="btn btn-success  btn-lg">语义查询</span></a>
                        </div> 

                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1"> 症状
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option2"> 证候
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" value="option3"> 功效
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" value="option3"> 中药
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" value="option3"> 方剂
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" value="option3"> 医家 
                        </label>

                    </div>
                </div>
                <p></p>






                <div class="row">
                    <div class="col-md-10">
                        <div class="tabbable">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab">知识问答</a></li>

                                <li><a href="#tab2" data-toggle="tab">知识搜索</a></li>                                      
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <p></p>


                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <strong>答案（推理结果）</strong>
                                        </div>
                                        <div class="panel-body">
                                            <p><strong>辨证:</strong></p>
                                            患者有证候<a>肝气郁结证</a>、<a>肝气不运证</a>、<a>肝郁脾虚证</a>、<a>血瘀证</a>。
                                            <hr>
                                            <p><strong>立法:</strong></p>
                                            患者的治法为<a>疏肝补脾法</a>。
                                            <hr>
                                            <p><strong>处方:</strong></p>
                                            患者的处方为<a>柴胡疏肝汤</a>。
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <strong>问题</strong>
                                        </div>
                                        <div class="panel-body">
                                            <p><strong>患者还有如下症状吗？</strong></p>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox1" value="option1"> 怒
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox2" value="option2"> 燥怒
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox3" value="option3"> 失眠
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox3" value="option3"> 惊恐
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox3" value="option3"> 腹泻
                                            </label>

                                            <hr>
                                            <p><strong>您选择哪种治法？</strong></p>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox1" value="option1"> 疏肝补脾法
                                            </label>
                                            <hr>
                                            <p><strong>您选择哪种处方？</strong></p>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox1" value="option1"> 柴胡疏肝汤
                                            </label>

                                        </div>
                                    </div>
                                    <p></p>
                                    <a href="session.php"><span class="btn btn-success ">保存并查看案例</span></a>
                                    <p></p>


                                </div>     

                                <div class="tab-pane" id="tab2">

                                    <p></p>
                                    <div class="well">
                                        <strong>郁怒</strong>
                                        <hr>
                                        <p>气势盛积。《文选·傅毅<舞赋>》：“马材不同，各相倾夺……或有宛足郁怒，般桓不发。” 李善 注：“郁怒，气迟留不发也。” 唐 韩愈 《赠崔立之评事》诗：“朝为百赋犹郁怒，募作千诗转遒紧。” 钱仲联 集释引 孙汝听 曰：“言犹有馀勇也。” 宋 苏辙 《入峡》诗：“峡门石为户，郁怒水力骄。”
                                            <a class="btn btn-link pull-right" href="#" role="button">查看详情&nbsp; &raquo;</a>
                                        </p>

                                    </div>
                                    <?php
//$keywords = '四君子汤';
                                    render_entity($dbc, $keywords);




                                    $query = "SELECT * FROM def where name like '%$keywords%' or def like '%$keywords%' ORDER BY name ASC LIMIT 0,10";


                                    $result = mysqli_query($dbc, $query) or die('Error querying database.');
                                    while ($row = mysqli_fetch_array($result)) {
                                        render_content($row);
                                    }
                                    ?>





                                    <ul class="pagination">
                                        <li><a href="#">上一页</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">6</a></li>
                                        <li><a href="#">7</a></li>
                                        <li><a href="#">8</a></li>
                                        <li><a href="#">9</a></li>
                                        <li><a href="#">10</a></li>
                                        <li><a href="#">下一页</a></li>
                                    </ul>

                                    <p><font color="gray">获得约 8,710 条结果。</font></p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <?php
                        echo '<p><font color="red">' . $keywords . '</font>的相关搜索:</p>';
                        echo '<p><a  href=\"#\">怒</a></p>';
                        echo '<p><a  href=\"#\">燥怒</a></p>';
                        echo '<p><a  href=\"#\">肝</a></p>';
                        echo '<p><a  href=\"#\">肾</a></p>';
                        echo '<p><a  href=\"#\">李时珍</a></p>';
                        echo '<p><a  href=\"#\">孙思邈</a></p>';
                        echo '<p><a  href=\"#\">汤剂</a></p>';
                        echo '<p><a  href=\"#\">牛黄</a></p>';
                        ?>
                    </div>
                </div>


            </div>
        </form>   
    </div>
</div>

<!-- Example row of columns -->


<!-- /container -->
<?php
include_once ("./foot.php");
?>
