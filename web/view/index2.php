
<?php include 'web/layout/header.php'; ?>	
<!--banner-->
<div class="banner-w3">
	<div class="demo-1">
		<div id="example1" class="core-slider core-slider__carousel example_1">
			<div class="core-slider_viewport">
				<div class="core-slider_list">
					<!-- <div class="core-slider_item">
						<img src="web/public/images/b1.jpg" class="img-responsive" alt="">
					</div>
					<div class="core-slider_item">
						<img src="web/public/images/b2.jpg" class="img-responsive" alt="">
					</div>
					<div class="core-slider_item">
						<img src="web/public/images/b3.jpg" class="img-responsive" alt="">
					</div>
					<div class="core-slider_item">
						<img src="web/public/images/b4.jpg" class="img-responsive" alt="">
					</div> -->
				</div>
			</div>
			<div class="core-slider_nav">
				<div class="core-slider_arrow core-slider_arrow__right"></div>
				<div class="core-slider_arrow core-slider_arrow__left"></div>
			</div>
			<div class="core-slider_control-nav"></div>
		</div>
	</div>
	<link href="web/public/css/coreSlider.css" rel="stylesheet" type="text/css">
	<script src="web/public/js/coreSlider.js"></script>
	<script>
		$('#example1').coreSlider({
			pauseOnHover: false,
			interval: 3000,
			controlNavEnabled: true
		});
	</script>

</div>



<div class="content">
	<div class="new-arrivals-w3agile">
		<h2 class="tittle">Sản Phẩm Mới Nhất</h2>
		<div class="container">
			
			<div class="arrivals-grids">
				<?php foreach ($object as $key => $obj): ?>
				<div class="col-md-3 arrival-grid simpleCart_shelfItem">
					<div class="grid-arr">
						<div class="grid-arrival">
							<figure>
								<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
									<div class="grid-img">
										<img src="public/img/<?php echo $obj->image ?>" width="120px" height="120px"  class="img-responsive" alt="">
									</div>
									<div class="grid-img">
										<img src="images/p5.jpg" class="img-responsive" alt="">
									</div>
								</a>
							</figure>
						</div>
						<div class="ribben">
							<p>NEW</p>
						</div>
						<div class="ribben1">
							<p>SALE</p>
						</div>
						<div class="block">
							<div class="starbox small ghosting"> </div>
						</div>
						<div class="women">
							<h6><a href="single.php"><?php echo $obj->name ?></a></h6>
							<p><a href="#">Giá: <em class="item_price"> <?php echo number_format($obj->price) ?> VNĐ</a></em></p>
							<p><a>Số Lượng: <?php echo $obj->quantity ?></a></p>
							<!-- <del>$100.00</del> -->
							<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>	
		<div class="container">
			<h3 class="tittle1"> New Products</h3>
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides" id="slider">
						<li>
							<div class="caption">
								<div class="col-md-3 cap-left simpleCart_shelfItem">
									<div class="grid-arr">
										<div class="grid-arrival">
											<figure>
												<a href="single.php">
													<div class="grid-img">
														<img src="images/p14.jpg" class="img-responsive" alt="">
													</div>
													<div class="grid-img">
														<img src="images/p13.jpg" class="img-responsive" alt="">
													</div>
												</a>
											</figure>
										</div>
										<div class="block">
											<div class="starbox small ghosting"> </div>
										</div>
										<div class="women">
											<h6><a href="single.php">Sed ut perspiciatis unde</a></h6>
											<span class="size">XL / XXL / S </span>
											<p><del>$100.00</del><em class="item_price">$70.00</em></p>
											<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 cap-left simpleCart_shelfItem">
									<div class="grid-arr">
										<div class="grid-arrival">
											<figure>
												<a href="single.php">
													<div class="grid-img">
														<img src="images/p15.jpg" class="img-responsive" alt="">
													</div>
													<div class="grid-img">
														<img src="images/p16.jpg" class="img-responsive" alt="">
													</div>
												</a>
											</figure>
										</div>
										<div class="ribben">
											<p>NEW</p>
										</div>
										<div class="block">
											<div class="starbox small ghosting"> </div>
										</div>
										<div class="women">
											<h6><a href="single.php">Sed ut perspiciatis unde</a></h6>
											<span class="size">XL / XXL / S </span>
											<p><del>$100.00</del><em class="item_price">$70.00</em></p>
											<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 cap-left simpleCart_shelfItem">
									<div class="grid-arr">
										<div class="grid-arrival">
											<figure>
												<a href="single.php">
													<div class="grid-img">
														<img src="images/p18.jpg" class="img-responsive" alt="">
													</div>
													<div class="grid-img">
														<img src="images/p17.jpg" class="img-responsive" alt="">
													</div>
												</a>
											</figure>
										</div>
										<div class="ribben1">
											<p>SALE</p>
										</div>
										<div class="block">
											<div class="starbox small ghosting"> </div>
										</div>
										<div class="women">
											<h6><a href="single.php">Sed ut perspiciatis unde</a></h6>
											<span class="size">XL / XXL / S </span>
											<p><del>$100.00</del><em class="item_price">$70.00</em></p>
											<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 cap-left simpleCart_shelfItem">
									<div class="grid-arr">
										<div class="grid-arrival">
											<figure>
												<a href="single.php">
													<div class="grid-img">
														<img src="images/p20.jpg" class="img-responsive" alt="">
													</div>
													<div class="grid-img">
														<img src="images/p19.jpg" class="img-responsive" alt="">
													</div>
												</a>
											</figure>
										</div>
										<div class="ribben">
											<p>-20%</p>
										</div>
										<div class="block">
											<div class="starbox small ghosting"> </div>
										</div>
										<div class="women">
											<h6><a href="single.php">Sed ut perspiciatis unde</a></h6>
											<span class="size">XL / XXL / S </span>
											<p><del>$100.00</del><em class="item_price">$70.00</em></p>
											<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="caption">
								<div class="col-md-3 cap-left simpleCart_shelfItem">
									<div class="grid-arr">
										<div class="grid-arrival">
											<figure>
												<a href="single.php">
													<div class="grid-img">
														<img src="images/p21.jpg" class="img-responsive" alt="">
													</div>
													<div class="grid-img">
														<img src="images/p22.jpg" class="img-responsive" alt="">
													</div>
												</a>
											</figure>
										</div>
										<div class="block">
											<div class="starbox small ghosting"> </div>
										</div>
										<div class="women">
											<h6><a href="single.php">Sed ut perspiciatis unde</a></h6>
											<span class="size">XL / XXL / S </span>
											<p><del>$100.00</del><em class="item_price">$70.00</em></p>
											<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 cap-left simpleCart_shelfItem">
									<div class="grid-arr">
										<div class="grid-arrival">
											<figure>
												<a href="single.php">
													<div class="grid-img">
														<img src="images/p24.jpg" class="img-responsive" alt="">
													</div>
													<div class="grid-img">
														<img src="images/p23.jpg" class="img-responsive" alt="">
													</div>
												</a>
											</figure>
										</div>
										<div class="ribben">
											<p>NEW</p>
										</div>
										<div class="block">
											<div class="starbox small ghosting"> </div>
										</div>
										<div class="women">
											<h6><a href="single.php">Sed ut perspiciatis unde</a></h6>
											<span class="size">XL / XXL / S </span>
											<p><del>$100.00</del><em class="item_price">$70.00</em></p>
											<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 cap-left simpleCart_shelfItem">
									<div class="grid-arr">
										<div class="grid-arrival">
											<figure>
												<a href="single.php">
													<div class="grid-img">
														<img src="images/p26.jpg" class="img-responsive" alt="">
													</div>
													<div class="grid-img">
														<img src="images/p25.jpg" class="img-responsive" alt="">
													</div>
												</a>
											</figure>
										</div>
										<div class="ribben">
											<p>-75%</p>
										</div>
										<div class="block">
											<div class="starbox small ghosting"> </div>
										</div>
										<div class="women">
											<h6><a href="single.php">Sed ut perspiciatis unde</a></h6>
											<span class="size">XL / XXL / S </span>
											<p><del>$100.00</del><em class="item_price">$70.00</em></p>
											<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 cap-left simpleCart_shelfItem">
									<div class="grid-arr">
										<div class="grid-arrival">
											<figure>
												<a href="single.php">
													<div class="grid-img">
														<img src="images/p10.jpg" class="img-responsive" alt="">
													</div>
													<div class="grid-img">
														<img src="images/p9.jpg" class="img-responsive" alt="">
													</div>
												</a>
											</figure>
										</div>
										<div class="ribben">
											<p>NEW</p>
										</div>
										<div class="block">
											<div class="starbox small ghosting"> </div>
										</div>
										<div class="women">
											<h6><a href="single.php">Sed ut perspiciatis unde</a></h6>
											<span class="size">XL / XXL / S </span>
											<p><del>$100.00</del><em class="item_price">$70.00</em></p>
											<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div> 

	<!--Products-->
	<div class="latest-w3">
		<div class="container">
			<!-- <!-- <h3 class="tittle1">Latest Fashion Trends</h3> -->
			<div class="latest-grids">
				<div class="col-md-4 latest-grid">
					<div class="latest-top">
						<img src="images/l1.jpg" class="img-responsive" alt="">
						<div class="latest-text">
							<h4>Men</h4>
						</div>
						<div class="latest-text2 hvr-sweep-to-top">
							<h4>-50%</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 latest-grid">
					<div class="latest-top">
						<img src="images/l2.jpg" class="img-responsive" alt="">
						<div class="latest-text">
							<h4>Shoes</h4>
						</div>
						<div class="latest-text2 hvr-sweep-to-top">
							<h4>-20%</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 latest-grid">
					<div class="latest-top">
						<img src="images/l3.jpg" class="img-responsive" alt="">
						<div class="latest-text">
							<h4>Women</h4>
						</div>
						<div class="latest-text2 hvr-sweep-to-top">
							<h4>-50%</h4>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="latest-grids">
				<div class="col-md-4 latest-grid">
					<div class="latest-top">
						<img src="images/l4.jpg" class="img-responsive" alt="">
						<div class="latest-text">
							<h4>Watch</h4>
						</div>
						<div class="latest-text2 hvr-sweep-to-top">
							<h4>-45%</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 latest-grid">
					<div class="latest-top">
						<img src="images/l5.jpg" class="img-responsive" alt="">
						<div class="latest-text">
							<h4>Bag</h4>
						</div>
						<div class="latest-text2 hvr-sweep-to-top">
							<h4>-10%</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 latest-grid">
					<div class="latest-top">
						<img src="images/l6.jpg" class="img-responsive" alt="">
						<div class="latest-text">
							<h4>Cameras</h4>
						</div>
						<div class="latest-text2 hvr-sweep-to-top">
							<h4>-30%</h4>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<div class="new-arrivals-w3agile">
		<div class="container">
			<h3 class="tittle1">Best Sellers</h3>
			<div class="arrivals-grids">
				<div class="col-md-3 arrival-grid simpleCart_shelfItem">
					<div class="grid-arr">
						<div class="grid-arrival">
							<figure>
								<a href="single.php">
									<div class="grid-img">
										<img src="images/p28.jpg" class="img-responsive" alt="">
									</div>
									<div class="grid-img">
										<img src="images/p27.jpg" class="img-responsive" alt="">
									</div>
								</a>
							</figure>
						</div>
						<div class="ribben">
							<p>NEW</p>
						</div>
						<div class="ribben1">
							<p>SALE</p>
						</div>
						<div class="block">
							<div class="starbox small ghosting"> </div>
						</div>
						<div class="women">
							<h6><a href="single.php">Sed ut perspiciatis unde</a></h6>
							<span class="size">XL / XXL / S </span>
							<p><del>$100.00</del><em class="item_price">$70.00</em></p>
							<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 arrival-grid simpleCart_shelfItem">
					<div class="grid-arr">
						<div class="grid-arrival">
							<figure>
								<a href="single.php">
									<div class="grid-img">
										<img src="images/p30.jpg" class="img-responsive" alt="">
									</div>
									<div class="grid-img">
										<img src="images/p29.jpg" class="img-responsive" alt="">
									</div>
								</a>
							</figure>
						</div>
						<div class="ribben2">
							<p>OUT OF STOCK</p>
						</div>
						<div class="block">
							<div class="starbox small ghosting"> </div>
						</div>
						<div class="women">
							<h6><a href="single.php">Sed ut perspiciatis unde</a></h6>
							<span class="size">XL / XXL / S </span>
							<p><del>$100.00</del><em class="item_price">$70.00</em></p>
							<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 arrival-grid simpleCart_shelfItem">
					<div class="grid-arr">
						<div class="grid-arrival">
							<figure>
								<a href="single.php">
									<div class="grid-img">
										<img src="images/s2.jpg" class="img-responsive" alt="">
									</div>
									<div class="grid-img">
										<img src="images/s1.jpg" class="img-responsive" alt="">
									</div>
								</a>
							</figure>
						</div>
						<div class="ribben1">
							<p>SALE</p>
						</div>
						<div class="block">
							<div class="starbox small ghosting"> </div>
						</div>
						<div class="women">
							<h6><a href="single.php">Sed ut perspiciatis unde</a></h6>
							<span class="size">XL / XXL / S </span>
							<p><del>$100.00</del><em class="item_price">$70.00</em></p>
							<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 arrival-grid simpleCart_shelfItem">
					<div class="grid-arr">
						<div class="grid-arrival">
							<figure>
								<a href="single.php">
									<div class="grid-img">
										<img src="images/s4.jpg" class="img-responsive" alt="">
									</div>
									<div class="grid-img">
										<img src="images/s3.jpg" class="img-responsive" alt="">
									</div>
								</a>
							</figure>
						</div>
						<div class="ribben">
							<p>NEW</p>
						</div>
						<div class="block">
							<div class="starbox small ghosting"> </div>
						</div>
						<div class="women">
							<h6><a href="single.php">Sed ut perspiciatis unde</a></h6>
							<span class="size">XL / XXL / S </span>
							<p><del>$100.00</del><em class="item_price">$70.00</em></p>
							<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<?php include 'web/layout/footer.php'; ?>