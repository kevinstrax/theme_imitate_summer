{* Template Name:首页及列表页 *}
<!DOCTYPE html>
<html lang="{$lang['lang_bcp47']}">

<head>
  {template:header}
</head>

<body class="multi {$type}">
    <nav class="navbar navbar-expand-lg brand-bar">
        <div class="container-fluid">
          <a class="navbar-brand text-uppercase font-monospace" href="{$host}" alt="{$name}">Aqua</a>
          <button class="navbar-toggler rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#divNavBar" aria-controls="divNavBar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="divNavBar">
            <ul class="col-md nav navbar-nav justify-content-end fw-bold text-center">
              {module:navbar}
            </ul>
          </div>
        </div>
      </nav>
      
      <div class="header-wrap container-fluid">
        <div class="header-wrap-box row">
          <ul id="bubble-anime">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <header id="divTop" class="header">
                <h1 id="BlogTitle" class="col-sm header-logo text-center fw-bold">
                    <a href="{$host}">{$name}<i id="BlogSubTitle" alt="{$subname}"
                            style="background-image: url(https://image.aquac.cc/website/aquac/2023/06/202306125294_7344.png);"></i></a>
                </h1>
            </header>
            <span class="header-wave wave1"></span>
            <span class="header-wave wave2"></span>
        </div>
    </div>
  <div id="divPage">
    <div class="container pt-5" id="divAll">
    
      <div id="divMiddle">
        <div class="row main-content">
          <div id="divMain" class="col-lg-9 order-lg-2">
            {foreach $articles as $article}

            {if $article.TopType}
            {template:post-istop}
            {else}
            {template:post-multi}
            {/if}

            {/foreach}
            <div class="pagebar">{template:pagebar}</div>
          </div>
          <aside id="divSidebar" class="col-lg-3 order-lg-1">
            {template:sidebar}
          </aside>
        </div>
        
        {template:footer}
      </div>
      <!-- <div class="clear"></div> -->
    </div>
    <!-- <div class="clear"></div> -->
  </div>
</body>

</html>
