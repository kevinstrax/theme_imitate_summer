{* Template Name:单条评论 *}
<ul class="msg" id="cmt{$comment.ID}">
	<li class="msgname">
		<small>&nbsp;{$lang['default']['comment_post_on']}&nbsp;{$comment.Time()}&nbsp;&nbsp;</small>
		<span class="commentname">
			<a href="{$comment.Author.HomePage}" rel="nofollow" target="_blank">{$comment.Author.StaticName}</a>
		</span>
		<span class="revertcomment">
			<a href="#comment" onclick="zbp.comment.reply('{$comment.ID}')">回复</a>
		</span>
	</li>
	<li class="msgarticle">{$comment.Content}
{foreach $comment.Comments as $comment}
{template:comment}
{/foreach}
	</li>
</ul>