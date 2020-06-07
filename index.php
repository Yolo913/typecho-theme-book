<?php
/**
 * just for you
 * 
 * @package Typecho Theme Book
 * @author Yolo913
 * @version 1.0.1
 * @link https://github.com/Yolo913/typecho-theme-book
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<div class="col-12" id="main" role="main">
	<?php /* $access = new Access_Core(); echo $access->overview['pv']['all']['total']; */?>
	<?php while($this->next()): ?>
		<article class="post post-atmain" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<ul class="post-meta">
				<li><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
				<li><?php $this->category(','); ?></li>
				<li itemprop="interactionCount"><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('0 comment', '1 comment', '%d comments'); ?></a></li>
			</ul>
            <div class="post-content" itemprop="articleBody">
				<?php $this->content('READ MORE'); ?>
            </div>
		</article>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo;', '&raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('footer.php'); ?>