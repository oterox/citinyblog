<?php $this->load->view('components/header'); ?>



				<form action="<?=base_url()?>posts/new_post" method="post">

				<p>Title: <input name="title" type="text" /></p>
				<p>Post: <textarea name="post"></textarea></p>
				<p><input type="submit" value="add post" /></p>

				</form>

<?php $this->load->view('components/footer'); ?>