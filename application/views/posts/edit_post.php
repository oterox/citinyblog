<?php $this->load->view('components/header'); ?>

				<?php if($success==1){ ?>
					<div style="color:white;background:green">Post updated</div>
				<?php } ?>

				<form action="<?=base_url()?>posts/edit_post/<?=$post['postID']?>" method="post">

				<p>Title: <input name="title" type="text" value="<?=$post['title']?>" /></p>
				<p>Post: <textarea name="post"><?=$post['post']?></textarea></p>
				<p><input type="submit" value="edit post" /></p>

				</form>

<?php $this->load->view('components/footer'); ?>