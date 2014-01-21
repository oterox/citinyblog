<?php $this->load->view('components/header'); ?>

				<?php 
					if(!isset($post)){
						echo '<p>error NO Post</p>';
					} else {
						
							?>
								<h2><?php echo $post['title'];?></h2>

								<article><?php echo nl2br($post['post']); ?></article>

							<?php			
						
					}
				?>
<?php $this->load->view('components/footer'); ?>