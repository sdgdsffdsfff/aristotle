<?php
include_once ("./header.php");

if (isset($_GET['example'])) {
    include_once ($_GET['example'].".php");  
} else {
    ?>
    <div class="container">



        <!-- Jumbotron -->
        <div class="jumbotron">
            <h1>中医药推理案例</h1>
            <p class="lead">通过一些相对简单但较为完整的中医临床案例，分析中医辨证论治的思维过程，探讨基于本体推理和问答系统来支持中医临床决策的方法。</p>
            <p><a class="btn btn-lg btn-success" href="http://v3.bootcss.com/examples/justified-nav/#" role="button">查看详情 »</a></p>
        </div>

        <!-- Example row of columns -->
        <div class="row">
            <div class="col-lg-4">
                <h2><a>关于“郁怒”的问答</a></h2>

                <p>“中医通过望神，发现病人处于‘郁怒’的状态；进一步辨认出病人具有‘肝气郁结’等的证候，据此确定‘疏肝理气’等治法；最后开出‘柴胡疏肝散’用于治疗”。这一推理案例虽然简单，但涉及了诊断、辨证、立法和组方等中医临床推理的基本环节。</p>
                <p><a class="btn btn-primary" href="session.php" role="button">查看详情 »</a></p>
            </div>
            <div class="col-lg-4">
                <h2><a href="<?php echo $_SERVER['PHP_SELF'] . '?example=syndrome'; ?>">证候</a></h2>
                <p> 证型是具有标准名称的证候类型，它是由包括阴阳、五行、脏腑和精微物质在内的中医术语所构成的复合概念。
                    证型之间通过层次关系构成一个层次结构；尽管不同病人的病理变化以及临床表现纷繁复杂，但运用证候层次结构可以对病情进行统一的分门别类。结合具体案例对中医证候知识和层次结构进行建模... </p>
                <p><a class="btn btn-primary" href="<?php echo $_SERVER['PHP_SELF'] . '?example=syndrome'; ?>" role="button">查看详情 »</a></p>
            </div>
            <div class="col-lg-4">
                <h2>方剂</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                <p><a class="btn btn-primary" href="http://v3.bootcss.com/examples/justified-nav/#" role="button">查看详情 »</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <h2><a>症状</a></h2>

                <p>“中医通过望神，发现病人处于‘郁怒’的状态；进一步辨认出病人具有‘肝气郁结’等的证候，据此确定‘疏肝理气’等治法；最后开出‘柴胡疏肝散’用于治疗”。这一推理案例虽然简单，但涉及了诊断、辨证、立法和组方等中医临床推理的基本环节。</p>
                <p><a class="btn btn-primary" href="http://v3.bootcss.com/examples/justified-nav/#" role="button">查看详情 »</a></p>
            </div>
            <div class="col-lg-4">
                <h2>证候</h2>
                <p> 证型是具有标准名称的证候类型，它是由包括阴阳、五行、脏腑和精微物质在内的中医术语所构成的复合概念。
                    证型之间通过层次关系构成一个层次结构；尽管不同病人的病理变化以及临床表现纷繁复杂，但运用证候层次结构可以对病情进行统一的分门别类。结合具体案例对中医证候知识和层次结构进行建模... </p>
                <p><a class="btn btn-primary" href="http://v3.bootcss.com/examples/justified-nav/#" role="button">查看详情 »</a></p>
            </div>
            <div class="col-lg-4">
                <h2>方剂</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                <p><a class="btn btn-primary" href="<?php echo $_SERVER['PHP_SELF'] . '?example=formula'; ?>" role="button">查看详情 »</a></p>
            </div>
        </div>
        <hr>
    </div> <!-- /container -->
    
    <?php
}
include_once ("./foot.php");
?>