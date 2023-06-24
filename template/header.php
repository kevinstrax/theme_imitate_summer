{* Template Name:公共头部 *}

<meta charset="UTF-8">
<meta name="Generator" content="EditPlus®">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
{if $type == 'index' && $zbp->CheckPlugin('ytecn_tkd')}
{template:ytecn_module/seo}
{else}
<title>{$title} - {$name}</title>
<meta name="description" content="{$article.Intro}" />
<meta name="keywords" content="{if count($article.Tags)>0}{foreach $article.Tags as $i => $tag}{$tag.Name},{/foreach}{/if}" />
{/if}
<!--<link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/css/bootstrap.min.css">-->
<link rel="stylesheet" href="https://cdn.staticfile.org/bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" rev="stylesheet" href="{$host}zb_users/theme/{$theme}/style/{$style}.css?{$themeinfo['modified']}" type="text/css" media="all" />
<link rel="apple-touch-icon" href="{$host}zb_users/theme/{$theme}/images/favicons/2wo.png" sizes="180x180">
<link rel="icon" href="{$host}zb_users/theme/{$theme}/images/favicons/2wo.png" sizes="32x32" type="image/png">
<link rel="icon" href="{$host}zb_users/theme/{$theme}/images/favicons/2wo.png" sizes="16x16" type="image/png">
<script src="{$host}zb_system/script/jquery-2.2.4.min.js?v={$version}"></script>
<script src="{$host}zb_system/script/zblogphp.js?v={$version}"></script>
<script src="{$host}zb_system/script/c_html_js_add.php?{if isset($html_js_hash)}hash={$html_js_hash}&{/if}v={$version}"></script>
<script src="{$host}zb_users/theme/{$theme}/script/custom.js"></script>
{$header}
{if $type=='index'&&$page=='1'}
<link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{$host}zb_system/xml-rpc/?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{$host}zb_system/xml-rpc/wlwmanifest.xml" />
{/if}
