<?php  

isset($_SESSION['admin']) ? $admin = $_SESSION['admin'] : [];
// echo '<pre>';
// print_r($_SESSION['admin']);                 
// die();
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>LinhShopAdmin</title>

	<!-- Custom fonts for this template-->
	<link href="public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="public/css/sb-admin-2.min.css" rel="stylesheet">
<style>
i.fas.fa-shopping-bag {
	margin: 15px 62px 0px 20px;
    font-size: 60px;
}
i.fas.fa-user-alt{
	margin: 15px 62px 0px 20px;
    font-size: 60px;
}
i.fas.fa-sort-amount-down-alt{
	margin: 15px 62px 0px 20px;
    font-size: 60px;
}
i.far.fa-calendar-alt{
	margin: 15px 62px 0px 20px;
    font-size: 60px;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 0rem;
}
.h2, h2 {
    font-size: 3rem;
    text-align: center;
    display: block;
}
</style>
</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php?controllers=home&action=indexhome">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-3">LINHSHOP Admin <sup></sup></div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="#">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Xin Ch??o ADMIN</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<!-- <div class="sidebar-heading">
                Qu???n L?? B??n H??ng
            </div> -->

			<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="index.php?controllers=home&action=indexhome" data-toggle="" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
					<i class="fas fa-home"></i>
					<span>HOME</span>
				</a>
				<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link collapsed" href="index.php?controllers=catagory&action=catagoryproduct" data-toggle="" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
					<i class="fas fa-list"></i>
					<span>Danh M???c</span>
				</a>
				<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
				</div>
			</li>



			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
					<i class="fas fa-edit"></i>
					<span>Qu???n L??</span>
				</a>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<h6 class="collapse-header"></h6>
						<a class="collapse-item" href="index.php?controllers=manage&action=product">Qu???n L?? S???n Ph???m</a>
						<a class="collapse-item" href="index.php?controllers=managecustomer&action=customer">Qu???n L?? Kh??ch H??ng</a>
						<a class="collapse-item" href="#">Qu???n L?? ????n H??ng</a>
					</div>
				</div>
			</li>


			<!-- Nav Item - Utilities Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
					<i class="fas fa-fw fa-chart-area"></i>
					<span>B??o C??o</span>
				</a>
				<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<h6 class="collapse-header"></h6>
						<a class="collapse-item" href="#"> B??o C??o ????n H??ng</a>
						<a class="collapse-item" href="#">B??o C??o S???n Ph???m</a>
						
					</div>
				</div>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Search -->
					<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
						<div class="input-group">
							<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<button class="btn btn-primary" type="button">
									<i class="fas fa-search fa-sm"></i>
								</button>
							</div>
						</div>
					</form>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
								<form class="form-inline mr-auto w-100 navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button class="btn btn-primary" type="button">
												<i class="fas fa-search fa-sm"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</li>

						<!-- Nav Item - Alerts -->
						<li class="nav-item dropdown no-arrow mx-1">
                     <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class="badge badge-danger badge-counter">3+</span>
                     </a>
                     <!-- Dropdown - Alerts -->
                     <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                      
                  </li>
                  <!-- Nav Item - Messages -->
                  <li class="nav-item dropdown no-arrow mx-1">
                     <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-envelope fa-fw"></i>
                        <!-- Counter - Messages -->
                        <span class="badge badge-danger badge-counter">7</span>
                     </a>
                     <!-- Dropdown - Messages -->
                     <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                     
                  </li>

						<div class="topbar-divider d-none d-sm-block"></div>
		

						
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?php if (isset($_SESSION['admin'])){ ?>
							<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $admin->email ?></span>
							<img class="img-profile rounded-circle" src="public/img/269720876_983176715604935_2757886406170865130_n.jpg">
							<?php }else { ?>
								<span class="mr-2 d-none d-lg-inline text-gray-600 small">T??i Kho???n</span>
								<img class="img-profile rounded-circle" src="">
								<?php }?>
								
							</a>
							
							 <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="index.php?controllers=profile&action=personal">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									H??? S??
								</a>
								<!-- <a class="dropdown-item" href="#">
									<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
									Settings
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
									Activity Log
								</a> -->
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									????ng Xu???t
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800"></h1>
					</div>

					<!-- Content Row -->
					<div class="row">



					<div class="container-fluid px-4">
                        <h1 class="mt-4">Th???ng K??</h1>
                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><i class="fas fa-shopping-bag"></i>T???ng S??? S???n Ph???m</div>
												<h2><?= COUNT($object) ?></h2>
                                    <!-- <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-black stretched-link" href="index.php?controllers=manage&action=product"></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div> -->
                                </div>	
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><i class="fas fa-user-alt"></i>T???ng S??? Kh??ch H??ng</div>
												<h2><?= COUNT($objects) ?></h2>
                                    <!-- <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-blue stretched-link" href="index.php?controllers=managecustomer&action=customer"> <?= COUNT($objects) ?> </a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div> -->
                                </div>
                            </div>
                           
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><i class="far fa-calendar-alt"></i>T???ng S??? Danh M???c</div>
												<h2><?= COUNT($objs) ?></h2>
                                    <!-- <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-blue stretched-link" href="index.php?controllers=catagory&action=catagoryproduct"><?= COUNT($objs) ?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div> -->
                                </div>
                            </div>

									 <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><i class="fas fa-sort-amount-down-alt"></i>T???ng S??? ????n H??ng</div>
												<h2><?= 0 ?></h2>
													<!-- <div class="card-footer d-flex align-items-center justify-content-between">
														<a class="small text-white stretched-link" href="#">View Details</a>
														<div class="small text-white"><i class="fas fa-angle-right"></i></div>
													</div> -->
                                </div>
                            </div>
                        </div>





					

					</div>
					<!-- End of Content Wrapper -->

				</div>
				<!-- End of Page Wrapper -->

				<!-- Scroll to Top Button-->
				<a class="scroll-to-top rounded" href="#page-top">
					<i class="fas fa-angle-up"></i>
				</a>

				<!-- Logout Modal-->
				<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
								<button class="close" type="button" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">??</span>
								</button>
							</div>
							<div class="modal-body">B???n c?? mu???n ????ng xu???t.</div>
							<div class="modal-footer">
								<button class="btn btn-secondary" type="button" data-dismiss="modal">H???y</button>
								<a class="btn btn-primary" href="index.php">????ng Xu???t</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Bootstrap core JavaScript-->
				<script src="public/vendor/jquery/jquery.min.js"></script>
				<script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

				<!-- Core plugin JavaScript-->
				<script src="public/vendor/jquery-easing/jquery.easing.min.js"></script>

				<!-- Custom scripts for all pages-->
				<script src="public/js/sb-admin-2.min.js"></script>

				<!-- Page level plugins -->
				<script src="public/vendor/chart.js/Chart.min.js"></script>

				<!-- Page level custom scripts -->
				<script src="public/js/demo/chart-area-demo.js"></script>
				<script src="public/js/demo/chart-pie-demo.js"></script>

</body>

</html>