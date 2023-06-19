{* Template Name:页面页页面内容 *}
<article class="post page">
	<h2 class="post-title">{$article.Title}</h2>
	<div class="post-body">{$article.Content}</div>
</article>

{if !$article.IsLock}
{template:comments}
{/if}
