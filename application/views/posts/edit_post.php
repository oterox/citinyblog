<?php $this->load->view('components/header'); ?>

				<?php if($success==1){ ?>
					<div class="alert alert-success">Post updated. Return to <a href="<?=base_url()?>">posts list</a></div>
				<?php } ?>


				<?php echo form_open(base_url() . 'posts/edit_post/' . $post['slug'] ); ?>

				<p>Title: <input name="title" class="form-control" type="text" value="<?=$post['title']?>" /></p>
				<p>Post: <textarea class="form-control" name="post" rows="20"><?=$post['post']?></textarea></p>
				<p><input class="btn btn-primary" type="submit" value="edit post" /></p>

				<?php echo form_close();?>

<?php $this->load->view('components/footer'); ?>