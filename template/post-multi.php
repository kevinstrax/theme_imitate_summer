{* Template Name:列表页普通文章 *}
<section class="post multi border-light-subtle rounded">
	<div class="d-flex flex-column flex-md-row p-md-3">
		<a href="{$article.Url}" class="post-cover flex-grow-1 rounded border border-light me-md-3 mb-1 mb-md-0">
			<img src="images/mainvisual-2.png" class="img-fluid" alt="{$article.Title}">
		</a>
		<div class="post-desc flex-shrink-1 pb-md-5">
			<h2 class="post-title fs-4"><a href="{$article.Url}">{$article.Title}</a></h2>
			<div class="post-body">
				<p class="post-body-intro">{$article.Intro}</p>
			</div>
			<h6 class="post-footer text-muted text-uppercase p-0 m-0 border-top border-light pt-2 pt-md-3">
				{$lang['msg']['author']}: {$article.Author.StaticName} <small>|</small> {$lang['msg']['category']}: {$article.Category.Name} <small>|</small> 阅读: {$article.ViewNums} <small>|</small> {$lang['msg']['comment']}: {$article.CommNums}
				<span class="post-date d-block d-xl-inline ">{$article.Time()}</span>
			</h6>
		</div>
	</div>
</section>
