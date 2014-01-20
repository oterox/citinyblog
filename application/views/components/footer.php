			</div>

			<div class="col-md-3">
				
				<?php if (isset($sidebar)) $this->load->view('components/' . $sidebar); ?> 

			</div>

		</div>

		<!-- FOOTER -->
		<footer>
			<p class="pull-right"><a href="#">Back to top</a></p>
			<p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a> {elapsed_time} seconds | {memory_usage} mem</p>
		</footer>

	</div><!-- /.container -->


    <!-- JavaScript
    ================================================== -->
    <script src="<?= base_url();?>assets/js/jquery.js"></script>
    <script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
   
</body>
</html>