<!DOCTYPE html>
<html lang="en">

<?= @$head; ?>
<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">
		<!-- Sidebar -->
		<?= @$sidebar;  ?>
		<!-- End of Side bar -->

		<!-- Content Wraper -->
		<div id="content-wrapper" class="d-flex flex-column">
			<!-- Main Content -->
			<div id="content">
				<!-- Topbar -->
				<?= @$topbar; ?>
				<!-- End of Topbar -->

				<!-- content -->
				<?= @$content; ?>
				<!-- End of content -->
			<!-- End of Main Content -->

			<!-- footer -->
			

			<!-- End of Footer -->
		</div>
		<footer class="sticky-footer bg-white">
				<?= @$footer; ?>
			</footer>
		<!-- End of Content Wrapper -->
	</div>
	<!-- End of Content Wrapper -->


	<!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


	<!-- Bootstrap core JavaScript-->
	<!-- shdx -->
	<script src="<?= base_url()?>/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url()?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url()?>/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url()?>/ass/js/sb-admin-2.min.js"></script>
</body>

</html>