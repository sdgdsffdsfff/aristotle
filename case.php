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
            <a class="navbar-brand" href="#">推理案例</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">

                <li><a href="#"><span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;赞成&nbsp;2</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-thumbs-down"></span>&nbsp;反对&nbsp;3</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-comment"></span>&nbsp;评论&nbsp;5</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-edit"></span>&nbsp;解读&nbsp;5</a></li>

            </ul>


            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" >返回关于“郁怒”的问答</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

    <div class="panel panel-default">
        <div class="panel-heading">
            推理前提
        </div>
        <div class="panel-body">
            <strong>症状：</strong> &nbsp;患者有症状<a>郁怒</a>       
        </div>      
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            推理结论
        </div>
        <div class="panel-body">
            <strong>辨证:</strong>&nbsp;患者有证候<a>肝气不运证</a>       
        </div>      
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            推理依据
        </div>
        <div class="panel-body">

            <span class="glyphicon glyphicon-chevron-left"></span>
            患者,&nbsp;<a>有证候</a>,&nbsp;<a>肝气郁结证</a>
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="glyphicon glyphicon-chevron-left"></span>
            <a>肝气不运证</a>,&nbsp;<a>导致</a>,&nbsp;<a>肝气郁结证</a>
            <span class="glyphicon glyphicon-chevron-right"></span>


        </div>

    </div>

    <div class="tabbable">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">专家解读</a></li>
            <li><a href="#tab2" data-toggle="tab">专家评论</a></li>                                             
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                <p></p>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <span class="glyphicon glyphicon-user"></span>&nbsp; <strong>于彤</strong>:&nbsp; “肝气不运”导致“肝气郁结”可以被理解为：位于肝的气无法正常流动导致气的郁结。
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                除了证候—症状关系，辨证过程中常涉及到证候之间的因果关系：“肝气郁结”导致“肝气不运”，后者导致“肝郁脾虚”；“肝气郁结”还导致“血瘀”。如图4所示，“肝郁脾虚”导致“肝气不运”可以被理解为：“肝郁”导致位于肝的气无法正常流动；“肝气不运”导致“肝气郁结”可以被理解为：位于肝的气无法正常流动导致气的郁结。
                                证候之间的因果关系属于复杂的隐形知识，但少数具有较为明显的理论解释。例如，“肝郁”导致“脾虚”可以被解释为“木乘土”。

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <span class="glyphicon glyphicon-user"></span>&nbsp; <strong>于彤</strong>:&nbsp; “肝气郁结”还导致“血瘀”。
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                无。
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <span class="glyphicon glyphicon-user"></span>&nbsp; <strong>于彤</strong>:&nbsp; “肝郁”导致“脾虚”可以被解释为“木乘土”。
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                无。
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
include_once ("./foot.php");
?>
