{* Template Name:搜索页 *}
<!DOCTYPE html>
<html lang="{$lang['lang_bcp47']}">

<head>
  {template:header}
</head>

<body class="multi {$type}">
  <div class="container" id="divAll">
    <div id="divPage">
      <div id="divMiddle">
        <div class="header-wrap">
          <header id="divTop" class="row header">
            <h1 id="BlogTitle" class="col-sm header-logo">
 		<a href="{$host}">{$name}<img id="BlogSubTitle" alt="{$subname}" src="https://image.aquac.cc/website/aquac/2023/06/202306125294_7344.png"/></a>
	        </h1>
          </header>
          <nav id="divNavBar" class="row">
            <ul class="col-md nav">
              {module:navbar}
            </ul>
          </nav>
        </div>
        <div class="row main-content">
          <div id="divMain" class="col-lg-9 order-lg-2">
            <div class="post istop istop-post">
              <h2 class="post-title">{$article.Title}</h2>
            </div>
            {foreach $articles as $article}
            {template:post-search}
            {/foreach}
            {if count($articles)>0}
            <div class="pagebar">{template:pagebar}</div>
            {/if}
          </div>
          <aside id="divSidebar" class="col-lg-3 order-lg-1">
            {template:sidebar}
          </aside>
        </div>

        {template:footer}
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
</body>

</html>
