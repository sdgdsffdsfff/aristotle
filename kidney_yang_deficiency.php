<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>">主页</a></li>
        <li><a href="<?php echo $_SERVER['PHP_SELF'] . '?example=syndrome'; ?>">证候</a></li>
        <li class="active">肾阳虚证</li>
    </ol>
    <h1 class="title">以脾肾阳虚等证候为例探讨证候层次结构的表示和推理</h1>
    <h4>于彤</h4>
    <hr>

    <p>本文主要研究虚证和实证，用于分辨病程中正与邪的力量对比。
        中医学认为，疾病的发生是正邪消长的表现。中医中的“邪”大致相当于现代医学中的病原体，而“正”大致相当于现代医学中的人体免疫系统。
        实证指邪气盛实，虚证指正气虚弱。凡机体功能衰退、低下和不足，或维持生理活动的物质缺损所引起的一类证候，均称为虚证；
        凡邪气较盛而正气未明显虚弱的病证，均可称为实证。</p>

    <p>如图 1 所示，下面定义一系列的证型：</p>

    <p>阳虚是一种抽象的证型，指的是机体内某种阳的亏虚。换言之，阳虚会影响（affects）机体中的阳：
    </p>

    <pre>

Class: 阳虚 
    SubClassOf: 虚 and （影响 some 阳）
    </pre>
    <p>肾虚是位于肾的证候的统称。证候可以指定疾病的病位，即疾病的影响所发生的位置。例如，肾虚是影响肾中的正气（可以是气、血、阴和阳）的证候， 这一定义可以表示如下：</p>
    <pre>

Class: 肾虚
    SubClassOf: 虚 and （位于 some 肾） and （影响 some （part_of some 肾））
    </pre>

    <p>肾阳虚指出肾阳是亏虚的。其中，术语肾阳是肾中之阳的意思，它是机体中阳气的根源。我们可以将肾阳定义为“阳 and （part_of some 肾）”，并将肾阳虚表示如下：</p>
    <pre>
Class: 肾阳虚
    EquivalentTo: 虚 and （影响 some 肾阳）
    </pre>

    
    <div class="col-sm-12 col-md-12">
        <div class="thumbnail">
            <img src="./img/syndrome/KidneyYangDeficiency.jpg" alt="...">
            <div class="caption">
                <p><strong>图1.</strong>&nbsp;肾阳虚证的语义表示</p>
            </div>
        </div>
    </div>
<p>同理，可以将脾阳虚定义为“虚 and （位于 some 脾）and （影响 some 脾阳）”。最后，可以将脾肾阳虚定义为“脾和肾中阳气的不足所造成的疾病”：</p>
<pre>
Class: 脾肾阳虚
    EquivalentTo: 虚 and （位于 some 脾） and （位于 some 肾）
                  and （影响 some （阳 and （part_of some 脾））） 
                  and （影响 some （阳 and （part_of some 肾）））
</pre>
    <div class="col-sm-12 col-md-12">
        <div class="thumbnail">
            <img src="./img/syndrome/SpleenKidneyYangDeficiency.jpg" alt="...">
            <div class="caption">
                <p><strong>图1.</strong>&nbsp;脾肾阳虚证的语义表示</p>
            </div>
        </div>
    </div>
根据这些本体定义，一个推理机可以自动推理出脾肾阳虚、肾阳虚、脾阳虚、阳虚，肾虚和虚之间的隶属关系。另外，可以将多个证型组合起来，构成更加复杂的证型。例如，脾肾阳虚也可以被定义为脾阳虚和肾阳虚的交：<code>“肾阳虚 and 脾阳虚”</code>。


    <h2>
        参考文献
    </h2>
    <p>于彤,崔蒙,李敬华. 2013. 语义Web在中医药领域的应用研究综述[J].世界中医药,08(1):107-109.</p>
</div>