<?php
include_once ("./header.php");
?>
<div class="container">

    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">推理案例：关于“郁怒”的问答</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">


            </ul>


            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" >返回</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>问题</strong>
        </div>
        <div class="panel-body">
            <strong>症状：</strong> &nbsp;患者有症状<a>郁怒</a>       
        </div>      
    </div>

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

    <div class="tabbable">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">推理依据</a></li>

            <li><a href="#tab2" data-toggle="tab">推理方法</a></li>                                      
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                <p></p>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>辨证:</strong>&nbsp;患者有证候<a>肝气郁结证</a>    
                        <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-comment">评论3</span></a>
                        <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-thumbs-down">反对2</span></a>
                        <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-thumbs-up">赞成1</span></a>

                    </div>
                    <div class="panel-body">

                        <p> <strong>推理依据:</strong> </p><p>
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            患者,&nbsp;<a>有症状</a>,&nbsp;<a>郁怒</a>
                            <span class="glyphicon glyphicon-chevron-right"></span>

                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <a>肝气郁结证</a>,&nbsp;<a>导致</a>,&nbsp;<a>郁怒</a>
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <a class="btn btn-link pull-right" href="case.php" target="_blank" role="button">查看详情&nbsp; &raquo;</a></p>


                    </div>

                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>辨证:</strong>&nbsp;患者有证候<a>肝气不运证</a>
                        <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-comment">评论3</span></a>
                        <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-thumbs-down">反对2</span></a>
                        <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-thumbs-up">赞成1</span></a>


                    </div>
                    <div class="panel-body">

                        <p> <strong>推理依据:</strong> </p><p>
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            患者,&nbsp;<a>有证候</a>,&nbsp;<a>肝气郁结证</a>
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <a>肝气不运证</a>,&nbsp;<a>导致</a>,&nbsp;<a>肝气郁结证</a>
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <a class="btn btn-link pull-right" href="case.php" target="_blank" role="button">查看详情&nbsp; &raquo;</a></p>


                    </div>

                </div>



                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>辨证:</strong>&nbsp;患者有证候<a>肝郁脾虚证</a>
                        <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-comment">评论3</span></a>
                        <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-thumbs-down">反对2</span></a>
                        <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-thumbs-up">赞成1</span></a>

                    </div>
                    <div class="panel-body">

                        <p> <strong>推理依据:</strong> </p><p>
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            患者,&nbsp;<a>有证候</a>,&nbsp;<a>肝气不运证</a>
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <a>肝郁脾虚证</a>,&nbsp;<a>导致</a>,&nbsp;<a>肝气不运证</a>
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <a class="btn btn-link pull-right" href="case.php" target="_blank" role="button">查看详情&nbsp; &raquo;</a></p>


                    </div>

                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>辨证:</strong>&nbsp;患者有证候<a>血瘀证</a>
                        <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-comment">评论3</span></a>
                        <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-thumbs-down">反对2</span></a>
                        <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-thumbs-up">赞成1</span></a>

                    </div>
                    <div class="panel-body">

                        <p> <strong>推理依据:</strong> </p><p>
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            患者,&nbsp;<a>有证候</a>,&nbsp;<a>肝气郁结证</a>
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <a>肝气郁结证</a>,&nbsp;<a>导致</a>,&nbsp;<a>血瘀证</a>
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <a class="btn btn-link pull-right" href="case.php" target="_blank" role="button">查看详情&nbsp; &raquo;</a></p>


                    </div>

                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>立法:</strong>&nbsp;患者的治法为<a>疏肝补脾法</a>
                        <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-comment">评论3</span></a>
                        <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-thumbs-down">反对2</span></a>
                        <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-thumbs-up">赞成1</span></a>


                    </div>
                    <div class="panel-body">

                        <p> <strong>推理依据:</strong> </p><p>
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            患者,&nbsp;<a>有证候</a>,&nbsp;<a>肝郁脾虚证</a>
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <a>疏肝补脾法</a>,&nbsp;<a>治疗</a>,&nbsp;<a>肝郁脾虚证</a>
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <a class="btn btn-link pull-right" href="case.php" target="_blank" role="button">查看详情&nbsp; &raquo;</a></p>


                    </div>

                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>处方:</strong>&nbsp;患者的处方为<a>柴胡疏肝汤</a>
                        <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-comment">评论3</span></a>
                        <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-thumbs-down">反对2</span></a>
                        <a class="btn btn-link pull-right"><span class="glyphicon glyphicon-thumbs-up">赞成1</span></a>


                    </div>
                    <div class="panel-body">

                        <p> <strong>推理依据:</strong> </p><p>
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            患者,&nbsp;<a>有治法</a>,&nbsp;<a>疏肝补脾法</a>
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <a>柴胡疏肝汤</a>,&nbsp;<a>功效</a>,&nbsp;<a>疏肝补脾法</a>
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <a class="btn btn-link pull-right" href="case.php" target="_blank" role="button">查看详情&nbsp; &raquo;</a></p>


                    </div>

                </div>
            </div>
            <div class="tab-pane" id="tab2">
                推理方法介绍
            </div>

        </div>
    </div>


</div>
<?php
include_once ("./foot.php");
?>
