<?php $this->load->view('components/header'); ?>

				<?php 
					if(!isset($post)){
						echo '<p>error NO Post</p>';
					} else {
						
					?>
						<h2><?php echo $post['title'];?></h2>
						<?php
						
							$user_type = $this->session->userdata('user_type');
						
							if( $user_type == 'admin' || $user_type == 'author'){ ?>
								<p>
									<a href="<?php echo base_url();?>posts/edit_post/<?=$post['postID'];?>">edit</a> - 
					 				<a href="<?php echo base_url();?>posts/delete_post/<?=$post['postID'];?>">delete</a>
								</p>						
								<?php 
							}	
						
						?>
						<article><?php echo nl2br($post['post']); ?></article>

					<?php			
						
					}
				?>
<?php $this->load->view('components/footer'); ?>