<?php $this->load->view('components/header'); ?>
	
				<?php 
					if(!isset($posts)){
						echo '<p>NO Posts</p>';
					} else {
						foreach ($posts as $row) {	?>
							<h2><a href="<?php echo base_url();?>post/<?php echo $row['slug'];?>"><?php echo $row['title'];?></a></h2>
							
							<?php
							
							
								$user_type = $this->session->userdata('user_type');
							
								if( $user_type == 'admin' || $user_type == 'author'){ ?>
									<p>
										<a href="<?php echo base_url();?>posts/edit_post/<?=$row['slug'];?>">edit</a> - 
						 				<a href="<?php echo base_url();?>posts/delete_post/<?=$row['slug'];?>">delete</a>
									</p>						
									<?php 
								}	
							
							?>

							<p><?php echo substr(nl2br($row['post']),0,400) . '...' ?></p>

							<p><a href="<?php echo base_url();?>post/<?php echo $row['slug'];?>">Read More</a></p>

							<p>
								<a href="#" class="label label-default"><span>Wordpress</span></a>
								<a href="#" class="label label-default"><span>JQuery</span></a>
								<a href="#" class="label label-default"><span>CodeIgniter</span></a>
							</p>
							<hr>
							<?php			
						}
					}
				?>
				
				<?php echo $pages; ?>

<?php $this->load->view('components/footer'); ?>
