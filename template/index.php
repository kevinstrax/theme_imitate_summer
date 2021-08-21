{* Template Name:首页及列表页 *}
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
          <div id="divTop" class="row header">
            <h1 id="BlogTitle" class="col-sm header-logo"><a href="{$host}">{$name}</a></h1>
          </div>
          <div id="divNavBar" class="row">
            <ul class="col-md nav">
              {module:navbar}
            </ul>
          </div>
        </div>
        <div class="row main-content">
          <div id="divMain" class="col-md-8 order-md-2">
            {foreach $articles as $article}

            {if $article.TopType}
            {template:post-istop}
            {else}
            {template:post-multi}
            {/if}

            {/foreach}
            <div class="pagebar">{template:pagebar}</div>
          </div>
          <div id="divSidebar" class="col-md-4 order-md-1">
            {template:sidebar}
          </div>
        </div>
        
        {template:footer}
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
</body>

</html>