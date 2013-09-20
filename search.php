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
                                <li class="active"><a href="#tab1" data-toggle="tab">答案总结</a></li>
                                <li><a href="#tab2" data-toggle="tab">推理结果</a></li>
                                <li><a href="#tab3" data-toggle="tab">知识搜索</a></li>                                      
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <p></p>
                                    <div class="well">
                                        <strong>郁怒</strong>
                                        <hr>
                                        <p>气势盛积。《文选·傅毅<舞赋>》：“马材不同，各相倾夺……或有宛足郁怒，般桓不发。” 李善 注：“郁怒，气迟留不发也。” 唐 韩愈 《赠崔立之评事》诗：“朝为百赋犹郁怒，募作千诗转遒紧。” 钱仲联 集释引 孙汝听 曰：“言犹有馀勇也。” 宋 苏辙 《入峡》诗：“峡门石为户，郁怒水力骄。”
                                            <a class="btn btn-link pull-right" href="#" role="button">查看详情&nbsp; &raquo;</a>
                                        </p>

                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <strong>推理结果总结</strong>
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


                                </div>     
                                <div class="tab-pane" id="tab2">
                                    <p></p>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <strong>辨证:</strong>&nbsp;患者有证候<a>肝气郁结证</a>
                                        
                                            <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-comment">发表评议</span></a>
                                      
                                        </div>
                                        <div class="panel-body">

                                            <p> <strong>推理依据:</strong> </p><p>
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                患者,&nbsp;<a>有症状</a>,&nbsp;<a>郁怒</a>
                                                <span class="glyphicon glyphicon-chevron-right"></span>

                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                <a>肝气郁结证</a>,&nbsp;<a>导致</a>,&nbsp;<a>郁怒</a>
                                                <span class="glyphicon glyphicon-chevron-right"></span>

                                                <a class="btn btn-link pull-right" href="#" role="button">查看推理过程&nbsp; &raquo;</a></p>
                                        </div>
                                        <div class="panel-footer">
                                            <strong>专家评议:</strong>


                                            <p> <a class="btn btn-link" href="#" role="button"><span class="glyphicon glyphicon-user"></span>于彤</a>&nbsp;:“肝气郁结证的症状为郁怒”可以通过五行学说中的“怒伤肝”加以解释。 <a class="btn btn-link  pull-right" href="#" role="button">查看详情&nbsp; &raquo;</a></p>

                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <strong>辨证:</strong>&nbsp;患者有证候<a>肝气不运证</a>
                                        
                                            <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-comment">发表评论</span></a>
                                        </div>
                                        <div class="panel-body">

                                            <p> <strong>推理依据:</strong> </p><p>
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                患者,&nbsp;<a>有证候</a>,&nbsp;<a>肝气郁结证</a>
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                <a>肝气不运证</a>,&nbsp;<a>导致</a>,&nbsp;<a>肝气郁结证</a>
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <a class="btn btn-link pull-right" href="#" role="button">查看推理过程&nbsp; &raquo;</a></p>


                                        </div>
                                        <div class="panel-footer">
                                            <strong>专家评议:</strong> 

                                            <p><a class="btn btn-link" href="#" role="button"><span class="glyphicon glyphicon-user"></span>于彤</a>&nbsp;: “肝气不运”导致“肝气郁结”可以被理解为：位于肝的气无法正常流动导致气的郁结。<a class="btn btn-link  pull-right" href="#" role="button">查看详情&nbsp; &raquo;</a></p>

                                        </div>
                                    </div>

                                  

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <strong>辨证:</strong>&nbsp;患者有证候<a>肝郁脾虚证</a>
                                   
                                            <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-comment">发表评论</span></a>
                                        </div>
                                        <div class="panel-body">

                                            <p> <strong>推理依据:</strong> </p><p>
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                患者,&nbsp;<a>有证候</a>,&nbsp;<a>肝气不运证</a>
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                <a>肝郁脾虚证</a>,&nbsp;<a>导致</a>,&nbsp;<a>肝气不运证</a>
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <a class="btn btn-link pull-right" href="#" role="button">查看推理过程&nbsp; &raquo;</a></p>


                                        </div>
                                        <div class="panel-footer">
                                            <strong>专家评议:</strong>

                                            <p><a class="btn btn-link" href="#" role="button"><span class="glyphicon glyphicon-user"></span>于彤</a>&nbsp;:“肝郁脾虚”导致“肝气不运”可以被理解为：“肝郁”导致位于肝的气无法正常流动。 <a class="btn btn-link  pull-right" href="#" role="button">查看详情&nbsp; &raquo;</a></p>

                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <strong>辨证:</strong>&nbsp;患者有证候<a>血瘀证</a>
                                      
                                            <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-comment">发表评论</span></a>
                                        </div>
                                        <div class="panel-body">

                                            <p> <strong>推理依据:</strong> </p><p>
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                患者,&nbsp;<a>有证候</a>,&nbsp;<a>肝气郁结证</a>
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                <a>肝气郁结证</a>,&nbsp;<a>导致</a>,&nbsp;<a>血瘀证</a>
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <a class="btn btn-link pull-right" href="#" role="button">查看推理过程&nbsp; &raquo;</a></p>


                                        </div>
                                        <div class="panel-footer">
                                            <strong>专家评议:</strong> 


                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <strong>立法:</strong>&nbsp;患者的治法为<a>疏肝补脾法</a>
                                      
                                            <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-comment">发表评论</span></a>
                                        </div>
                                        <div class="panel-body">

                                            <p> <strong>推理依据:</strong> </p><p>
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                患者,&nbsp;<a>有证候</a>,&nbsp;<a>肝郁脾虚证</a>
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                <a>疏肝补脾法</a>,&nbsp;<a>治疗</a>,&nbsp;<a>肝郁脾虚证</a>
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <a class="btn btn-link pull-right" href="#" role="button">查看推理过程&nbsp; &raquo;</a></p>


                                        </div>
                                        <div class="panel-footer">
                                            <strong>专家评议:</strong>

                                            <p><a class="btn btn-link" href="#" role="button"><span class="glyphicon glyphicon-user"></span>于彤</a>&nbsp;:根据“郁则疏之”和“虚则补之”等治则，得到“疏肝补脾治疗肝郁脾虚”这一结论。<a class="btn btn-link  pull-right" href="#" role="button">查看详情&nbsp; &raquo;</a></p>


                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <strong>处方:</strong>&nbsp;患者的处方为<a>柴胡疏肝汤</a>
                                       
                                            <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-comment">发表评论</span></a>
                                        </div>
                                        <div class="panel-body">

                                            <p> <strong>推理依据:</strong> </p><p>
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                患者,&nbsp;<a>有治法</a>,&nbsp;<a>疏肝补脾法</a>
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                <a>柴胡疏肝汤</a>,&nbsp;<a>功效</a>,&nbsp;<a>疏肝补脾法</a>
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <a class="btn btn-link pull-right" href="#" role="button">查看推理过程&nbsp; &raquo;</a></p>


                                        </div>
                                        <div class="panel-footer">
                                            <strong>专家评议:</strong> 


                                            <p><a class="btn btn-link" href="#" role="button"><span class="glyphicon glyphicon-user"></span>于彤</a>&nbsp;:方剂“柴胡疏肝汤”具有疏肝和理气的功效。<a class="btn btn-link  pull-right" href="#" role="button">查看详情&nbsp; &raquo;</a></p>


                                        </div>
                                    </div>
                                </div> 
                                <div class="tab-pane" id="tab3">
                                    <p></p>
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