{* Template Name:列表页单条置顶文章 *}
<section class="post istop-post">
	<h2 class="post-title"><!--[{$lang['msg']['top']}]--><a href="{$article.Url}">{$article.Title}</a></h2>
		<div class="post-body">
		<p class="post-body-intro">{$article.Intro}</p>
	</div>
	<a class="more-link float-end" href="{$article.Url}" alt="{$article.Title}">阅读全文>></a>
	<h6 class="post-footer">
		{$lang['msg']['author']}:{$article.Author.StaticName} <small>|</small> {$lang['msg']['category']}:{$article.Category.Name} <small>|</small> 阅读:{$article.ViewNums} <small>|</small> {$lang['msg']['comment']}:{$article.CommNums}
		<span class="post-date">{$article.Time()}</span>
	</h6>
</section>
