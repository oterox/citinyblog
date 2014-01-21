<?php $this->load->view('components/header'); ?>



				<form action="<?=base_url()?>posts/new_post" method="post">

				<p>Title: <input class="form-control" name="title" type="text" /></p>
				<p>Post: <textarea class="form-control" name="post" rows="20"></textarea></p>
				<p><input class="btn btn-primary" type="submit" value="add post" /></p>

				</form>

<?php $this->load->view('components/footer'); ?>