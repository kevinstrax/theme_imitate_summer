{* Template Name:文章页单页 *}
<!DOCTYPE html>
<html lang="{$lang['lang_bcp47']}">

<head>
  {template:header}
</head>

<body class="single {$type}">
  <div class="container" id="divAll">
    <div id="divPage">
      <div id="divMiddle">
        <div class="header-wrap">
          <div id="divTop" class="row header">
            <h1 id="BlogTitle" class="col-sm header-logo"><a href="{$host}">{$name}</a></h1>
          </div>
          <div id="divNavBar" class="row">
            <ul class="col-md nav">
              {$modules['navbar'].Content}
            </ul>
          </div>
        </div>
        <div class="row main-content">
          <div id="divMain" class="col-lg-9 order-lg-2">
            {if $article.Type==ZC_POST_TYPE_ARTICLE}
            {template:post-single}
            {else}
            {template:post-page}
            {/if}
          </div>
          <div id="divSidebar" class="col-lg-3 order-lg-1">
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