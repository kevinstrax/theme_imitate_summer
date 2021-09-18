{* Template Name:列表页普通文章 *}
<div class="post multi">
	<h2 class="post-title"><a href="{$article.Url}">{$article.Title}</a></h2>
	<div class="post-body">{$article.Intro}</div>
	<h6 class="post-footer">
		{$lang['msg']['author']}:{$article.Author.StaticName} <small>|</small> {$lang['msg']['category']}:{$article.Category.Name} <small>|</small> 阅读:{$article.ViewNums} <small>|</small> {$lang['msg']['comment']}:{$article.CommNums}
		<span class="post-date">{$article.Time()}</span>
	</h6>
</div>