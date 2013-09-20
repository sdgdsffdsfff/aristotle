<?php
include_once ("./header.php");
?>

<form class="form-search" action="search.php" method="post" class="form-horizontal"
      enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" align="center" >
            <img width="60%" class="media-object" src="img/logo_wide.jpg" >
            <p></p> 
            <div class="input-group">
                <input type="text" id ="keywords" name ="keywords" class="form-control input-lg" placeholder="关于......">
                <span class="input-group-btn">
                    <button class="btn btn-primary btn-lg" name ="submit" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                </span> 
            </div> 
            <br>
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
            <br><br>
            <p><a  href="search.php">语义查询</a>&nbsp;<span class="label label-danger">新功能!</span>&nbsp;-&nbsp;<a href="search.php">举例</a>&nbsp;-&nbsp;<a href="search.php">帮助</a></p>
        </div>
    </div>
</form>
<br>
<br>
<br>
<?php
include_once ("./foot.php");
?>
