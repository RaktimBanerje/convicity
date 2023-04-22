<!-- Banner -->
<section>
    <div class="container-fluid inner-banner d-flex justify-content-center align-items-center" style="height: 160px; background-image: url('<?php echo base_url() ?>assets/images/banners/banner.jpg');">
        <h1 style="font-size: 40px; color: white; font-weight: bold;">PROJECT</h1>
    </div>
</section>

<!-- Start Our Project -->
<section class="convicity mt-5" style="padding: 10px">
	<div class="container">
		<div class="row px-md-5">
			<div class="col-12">
				<div class="row project_details_header_container">
					<div class="col-6">
						<h4 class="text-light"><?php echo $name; ?></h4>
					</div>
					<div class="col-6 text-end">
						<div class="btn-group">
							<a target="_blank" href="<?php echo base_url() ?>assets/images/project/project/<?php echo $brochure; ?>"
								class="e-brochure btn btn-light mx-2">
								<i class="fa fa-file-text-o" aria-hidden="true"></i> E-Brochure
							</a>
							<button class="btn btn-danger convicity-button d-none d-sm-block" type="button">ENQUIRY
								NOW</button>
						</div>
					</div>
				</div>
				<div class="row">
					<img class="img-responsive p-0"
						src="https://convicity.in/demo/assets/images/project/elite_villa/3k/1_main.jpg" />
				</div>
			</div>
		</div>

		<div class="row mt-5 px-md-5">
            <!-- Computer Version -->
			<div class="project-dtl-tab-row d-md-block d-none">
				<div class="wc-menu-row">
					<ul class="nav nav-tabs justify-content-center" role="tablist"
						style="bottom: 23px; background-color: transparent;">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="tab1" data-bs-toggle="tab" data-bs-target="#overview"
								type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"
								style="border-left: 1px solid #cecece;"><i class="fa fa-eye" aria-hidden="true"></i>
								Over view</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="tab2" data-bs-toggle="tab" data-bs-target="#specification"
								type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><i
									class="fa fa-specific" aria-hidden="true"></i>Specification</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="tab2" data-bs-toggle="tab" data-bs-target="#amenities"
								type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><i
									class="fa fa-aminity" aria-hidden="true"></i>Amenities</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="tab2" data-bs-toggle="tab" data-bs-target="#locationmap"
								type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><i
									class="fa fa-location" aria-hidden="true"></i>Location Map</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="tab2" data-bs-toggle="tab" data-bs-target="#floorplan"
								type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><i
									class="fa fa-flor-plan" aria-hidden="true"></i>Floor Plan</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="tab2" data-bs-toggle="tab" data-bs-target="#status"
								type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"
								style="border-right: 1px solid #cecece;"><i class="fa fa-flor-plan"
									aria-hidden="true"></i>Status</button>
						</li>
					</ul>
				</div>
				<div class="tab-content px-0 px-md-5" id="tab-content">
					<div role="tabpanel" class="tab-pane active" id="overview">
						<p style="text-align: justify;"><?php echo $description; ?></p>

						<p></p>
						<p><strong><?php echo $land_area; ?></strong></p>
						<p><strong><?php echo $build_area; ?></strong></p>
						<p><strong><?php echo $ground_floor; ?></strong></p>
						<p><strong><?php echo $first_floor; ?></strong></p>
						<p>&nbsp;</p>
					</div>

					<div role="tabpanel" class="tab-pane" id="specification">
						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<div class="col-3 col-md-2">
										<img src="https://convicity.in/demo/assets/images/icons/12.png" />
									</div>
									<div class="col-9 col-md-10">
										<h6 style="font-weight: 700;"><?php echo $specification[0]["heading"]; ?></h6>
										<p><?php echo $specification[0]["detail"]; ?></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-3 col-md-2">
										<img src="https://convicity.in/demo/assets/images/icons/11.png" />
									</div>
									<div class="col-9 col-md-10">
										<h6 style="font-weight: 700;"><?php echo $specification[1]["heading"]; ?></h6>
										<p><?php echo $specification[1]["detail"]; ?></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-3 col-md-2">
										<img src="https://convicity.in/demo/assets/images/icons/19.png" />
									</div>
									<div class="col-9 col-md-10">
										<h6 style="font-weight: 700;"><?php echo $specification[2]["heading"]; ?></h6>
										<p><?php echo $specification[2]["detail"]; ?></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-3 col-md-2">
										<img src="https://convicity.in/demo/assets/images/icons/13.jpg" />
									</div>
									<div class="col-9 col-md-10">
										<h6 style="font-weight: 700;"><?php echo $specification[3]["heading"]; ?></h6>
										<p><?php echo $specification[3]["detail"]; ?></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-3 col-md-2">
										<img src="https://convicity.in/demo/assets/images/icons/17.png" />
									</div>
									<div class="col-9 col-md-10">
										<h6 style="font-weight: 700;"><?php echo $specification[4]["heading"]; ?></h6>
										<p><?php echo $specification[4]["detail"]; ?></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-3 col-md-2">
										<img src="https://convicity.in/demo/assets/images/icons/22.png" />
									</div>
									<div class="col-9 col-md-10">
										<h6 style="font-weight: 700;"><?php echo $specification[5]["heading"]; ?></h6>
										<p><?php echo $specification[5]["detail"]; ?></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-3 col-md-2">
										<img src="https://convicity.in/demo/assets/images/icons/1.png" />
									</div>
									<div class="col-9 col-md-10">
										<h6 style="font-weight: 700;"><?php echo $specification[6]["heading"]; ?></h6>
										<p><?php echo $specification[6]["detail"]; ?></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-3 col-md-2">
										<img src="https://convicity.in/demo/assets/images/icons/16.png" />
									</div>
									<div class="col-9 col-md-10">
										<h6 style="font-weight: 700;"><?php echo $specification[7]["heading"]; ?></h6>
										<p><?php echo $specification[7]["detail"]; ?></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-3 col-md-2">
										<img src="https://convicity.in/demo/assets/images/icons/23.png" />
									</div>
									<div class="col-9 col-md-10">
										<h6 style="font-weight: 700;"><?php echo $specification[8]["heading"]; ?></h6>
										<p><?php echo $specification[8]["detail"]; ?></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-3 col-md-2">
										<img src="https://convicity.in/demo/assets/images/icons/20.png" />
									</div>
									<div class="col-9 col-md-10">
										<h6 style="font-weight: 700;"><?php echo $specification[9]["heading"]; ?></h6>
										<p><?php echo $specification[9]["detail"]; ?></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-3 col-md-2">
										<img src="https://convicity.in/demo/assets/images/icons/18.png" />
									</div>
									<div class="col-9 col-md-10">
										<h6 style="font-weight: 700;"><?php echo $specification[10]["heading"]; ?></h6>
										<p><?php echo $specification[10]["detail"]; ?></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-3 col-md-2">
										<img src="https://convicity.in/demo/assets/images/icons/15.png" />
									</div>
									<div class="col-9 col-md-10">
										<h6 style="font-weight: 700;"><?php echo $specification[11]["heading"]; ?></h6>
										<p><?php echo $specification[11]["detail"]; ?></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-3 col-md-2">
										<img src="https://convicity.in/demo/assets/images/icons/21.png" />
									</div>
									<div class="col-9 col-md-10">
										<h6 style="font-weight: 700;"><?php echo $specification[12]["heading"]; ?></h6>
										<p><?php echo $specification[12]["detail"]; ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div role="tabpanel" class="tab-pane" id="amenities">
						<div class="row justify-content-center">
							<div class="col-6 col-md-2 text-center">
								<div style="height: 75px; width: 115px; margin: 0 auto;">
									<img class="img-responsive"
										src="https://convicity.in/demo/assets/images/icons/1.png" />
								</div>
								<p class="">PRIVATE CARPARKING</p>
							</div>
							<div class="col-6 col-md-2 text-center">
								<div style="height: 75px; width: 115px; margin: 0 auto;">
									<img class="img-responsive"
										src="https://convicity.in/demo/assets/images/icons/2.png" />
								</div>
								<p class="">PRIVATE CARPARKING</p>
							</div>
							<div class="col-6 col-md-2 text-center">
								<div style="height: 75px; width: 115px; margin: 0 auto;">
									<img class="img-responsive"
										src="https://convicity.in/demo/assets/images/icons/3.png" />
								</div>
								<p class="">PRIVATE CARPARKING</p>
							</div>
							<div class="col-6 col-md-2 text-center">
								<div style="height: 75px; width: 115px; margin: 0 auto;">
									<img class="img-responsive"
										src="https://convicity.in/demo/assets/images/icons/4.png" />
								</div>
								<p class="">PRIVATE CARPARKING</p>
							</div>
							<div class="col-6 col-md-2 text-center">
								<div style="height: 75px; width: 115px; margin: 0 auto;">
									<img class="img-responsive"
										src="https://convicity.in/demo/assets/images/icons/5.png" />
								</div>
								<p class="">PRIVATE CARPARKING</p>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-6 col-md-2 text-center">
								<div style="height: 75px; width: 115px; margin: 0 auto;">
									<img class="img-responsive"
										src="https://convicity.in/demo/assets/images/icons/6.png" />
								</div>
								<p class="">PRIVATE CARPARKING</p>
							</div>
							<div class="col-6 col-md-2 text-center">
								<div style="height: 75px; width: 115px; margin: 0 auto;">
									<img class="img-responsive"
										src="https://convicity.in/demo/assets/images/icons/7.png" />
								</div>
								<p class="">PRIVATE CARPARKING</p>
							</div>
							<div class="col-6 col-md-2 text-center">
								<div style="height: 75px; width: 115px; margin: 0 auto;">
									<img class="img-responsive"
										src="https://convicity.in/demo/assets/images/icons/8.png" />
								</div>
								<p class="">PRIVATE CARPARKING</p>
							</div>
							<div class="col-6 col-md-2 text-center">
								<div style="height: 75px; width: 115px; margin: 0 auto;">
									<img class="img-responsive"
										src="https://convicity.in/demo/assets/images/icons/9.png" />
								</div>
								<p class="">PRIVATE CARPARKING</p>
							</div>
							<div class="col-6 col-md-2 text-center">
								<div style="height: 75px; width: 115px; margin: 0 auto;">
									<img class="img-responsive"
										src="https://convicity.in/demo/assets/images/icons/10.png" />
								</div>
								<p class="">PRIVATE CARPARKING</p>
							</div>
						</div>
					</div>

					<div role="tabpanel" class="tab-pane" id="locationmap">
						<div class="row">
							<div class="col-md-4">
								<a href="https://www.convicity.in/uploads/project_plan/elite1plan.jpg"
									data-lightbox="locationmap" data-title="Location Map">
									<img class="img-responsive w-100 lightbox-img"
										src="https://www.convicity.in/uploads/project_plan/elite1plan.jpg" />
								</a>
							</div>
						</div>
					</div>

					<div role="tabpanel" class="tab-pane" id="floorplan">
						<div class="row">
							<div class="col-md-4">
								<a href="https://www.convicity.in/uploads/project_plan/3ke_ground.jpg"
									data-lightbox="floorplan" data-title="Floor Plan">
									<img class="img-responsive w-100 lightbox-img"
										src="https://www.convicity.in/uploads/project_plan/3ke_ground.jpg" />
								</a>
							</div>
							<div class="col-md-4">
								<a href="https://www.convicity.in/uploads/project_plan/3ke_first.jpg"
									data-lightbox="floorplan" data-title="Floor Plan">
									<img class="img-responsive w-100 lightbox-img"
										src="https://www.convicity.in/uploads/project_plan/3ke_first.jpg" />
								</a>
							</div>
						</div>
					</div>

					<div role="tabpanel" class="tab-pane" id="status">
						<div class="row">
							<div class="col-md-4">
								<a href="https://www.convicity.in/uploads/projects/1.jpg" data-lightbox="photo"
									data-title="Floor Plan">
									<img class="img-responsive w-100 lightbox-img"
										src="https://www.convicity.in/uploads/projects/1.jpg" />
								</a>
							</div>
							<div class="col-md-4">
								<a href="https://www.convicity.in/uploads/projects/1.jpg" data-lightbox="photo"
									data-title="Floor Plan">
									<img class="img-responsive w-100 lightbox-img"
										src="https://www.convicity.in/uploads/projects/1.jpg" />
								</a>
							</div>
							<div class="col-md-4">
								<a href="https://www.convicity.in/uploads/projects/1.jpg" data-lightbox="photo"
									data-title="Floor Plan">
									<img class="img-responsive w-100 lightbox-img"
										src="https://www.convicity.in/uploads/projects/1.jpg" />
								</a>
							</div>
							<div class="col-md-4">
								<a href="https://www.convicity.in/uploads/projects/1.jpg" data-lightbox="photo"
									data-title="Floor Plan">
									<img class="img-responsive w-100 lightbox-img"
										src="https://www.convicity.in/uploads/projects/1.jpg" />
								</a>
							</div>
							<div class="col-md-4">
								<a href="https://www.convicity.in/uploads/projects/1.jpg" data-lightbox="photo"
									data-title="Floor Plan">
									<img class="img-responsive w-100 lightbox-img"
										src="https://www.convicity.in/uploads/projects/1.jpg" />
								</a>
							</div>
							<div class="col-md-4">
								<a href="https://www.convicity.in/uploads/projects/1.jpg" data-lightbox="photo"
									data-title="Floor Plan">
									<img class="img-responsive w-100 lightbox-img"
										src="https://www.convicity.in/uploads/projects/1.jpg" />
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

            <!-- Mobile Version -->
			<div class="accordion d-block d-md-none" id="accordionExample">
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingOne">
						<button class="accordion-button" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Over view
						</button>
					</h2>
					<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
						data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<p style="text-align: justify;">Admittedly not for everyone, Villa Elite are the ultimate limited edition living
								experience.
								Each villa is unique and captures the spirit of independent living spaces with a blend
								of
								floral serenity. With meticulously designed aesthetic exteriors, they are the spaces so
								vibrant that while you enjoy the best living style, you and your family will create the
								best
								moments.</p>

							<p></p>
							<p><strong>Land Area : 2160 sq.ft. (with Landscape Garden)</strong></p>
							<p><strong>Built-up Area : 2212 sq.ft.</strong></p>
							<p><strong>Ground Floor : 1064 sq.ft.</strong></p>
							<p><strong>First Floor : 1148 sq.ft.</strong></p>
							<p>&nbsp;</p>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingOne">
						<button class="accordion-button" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
							<i class="fa fa-specific" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Specification
						</button>
					</h2>
					<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne"
						data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-3 col-md-2">
											<img src="https://convicity.in/demo/assets/images/icons/12.png" />
										</div>
										<div class="col-9 col-md-10">
											<h6 style="font-weight: 700;">DOOR FRAMES AND SHUTTERS</h6>
											<p>Frame - Shal Wood, Shutter - Flush door, Hardware - Lock, Docorative
												Handle/Knob.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-3 col-md-2">
											<img src="https://convicity.in/demo/assets/images/icons/11.png" />
										</div>
										<div class="col-9 col-md-10">
											<h6 style="font-weight: 700;">DOOR FRAMES AND SHUTTERS</h6>
											<p>Frame - Shal Wood, Shutter - Flush door, Hardware - Lock, Docorative
												Handle/Knob.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-3 col-md-2">
											<img src="https://convicity.in/demo/assets/images/icons/19.png" />
										</div>
										<div class="col-9 col-md-10">
											<h6 style="font-weight: 700;">DOOR FRAMES AND SHUTTERS</h6>
											<p>Frame - Shal Wood, Shutter - Flush door, Hardware - Lock, Docorative
												Handle/Knob.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-3 col-md-2">
											<img src="https://convicity.in/demo/assets/images/icons/13.jpg" />
										</div>
										<div class="col-9 col-md-10">
											<h6 style="font-weight: 700;">DOOR FRAMES AND SHUTTERS</h6>
											<p>Frame - Shal Wood, Shutter - Flush door, Hardware - Lock, Docorative
												Handle/Knob.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-3 col-md-2">
											<img src="https://convicity.in/demo/assets/images/icons/17.png" />
										</div>
										<div class="col-9 col-md-10">
											<h6 style="font-weight: 700;">DOOR FRAMES AND SHUTTERS</h6>
											<p>Frame - Shal Wood, Shutter - Flush door, Hardware - Lock, Docorative
												Handle/Knob.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-3 col-md-2">
											<img src="https://convicity.in/demo/assets/images/icons/22.png" />
										</div>
										<div class="col-9 col-md-10">
											<h6 style="font-weight: 700;">DOOR FRAMES AND SHUTTERS</h6>
											<p>Frame - Shal Wood, Shutter - Flush door, Hardware - Lock, Docorative
												Handle/Knob.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-3 col-md-2">
											<img src="https://convicity.in/demo/assets/images/icons/1.png" />
										</div>
										<div class="col-9 col-md-10">
											<h6 style="font-weight: 700;">DOOR FRAMES AND SHUTTERS</h6>
											<p>Frame - Shal Wood, Shutter - Flush door, Hardware - Lock, Docorative
												Handle/Knob.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-3 col-md-2">
											<img src="https://convicity.in/demo/assets/images/icons/16.png" />
										</div>
										<div class="col-9 col-md-10">
											<h6 style="font-weight: 700;">DOOR FRAMES AND SHUTTERS</h6>
											<p>Frame - Shal Wood, Shutter - Flush door, Hardware - Lock, Docorative
												Handle/Knob.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-3 col-md-2">
											<img src="https://convicity.in/demo/assets/images/icons/23.png" />
										</div>
										<div class="col-9 col-md-10">
											<h6 style="font-weight: 700;">DOOR FRAMES AND SHUTTERS</h6>
											<p>Frame - Shal Wood, Shutter - Flush door, Hardware - Lock, Docorative
												Handle/Knob.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-3 col-md-2">
											<img src="https://convicity.in/demo/assets/images/icons/20.png" />
										</div>
										<div class="col-9 col-md-10">
											<h6 style="font-weight: 700;">DOOR FRAMES AND SHUTTERS</h6>
											<p>Frame - Shal Wood, Shutter - Flush door, Hardware - Lock, Docorative
												Handle/Knob.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-3 col-md-2">
											<img src="https://convicity.in/demo/assets/images/icons/18.png" />
										</div>
										<div class="col-9 col-md-10">
											<h6 style="font-weight: 700;">DOOR FRAMES AND SHUTTERS</h6>
											<p>Frame - Shal Wood, Shutter - Flush door, Hardware - Lock, Docorative
												Handle/Knob.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-3 col-md-2">
											<img src="https://convicity.in/demo/assets/images/icons/15.png" />
										</div>
										<div class="col-9 col-md-10">
											<h6 style="font-weight: 700;">DOOR FRAMES AND SHUTTERS</h6>
											<p>Frame - Shal Wood, Shutter - Flush door, Hardware - Lock, Docorative
												Handle/Knob.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-3 col-md-2">
											<img src="https://convicity.in/demo/assets/images/icons/21.png" />
										</div>
										<div class="col-9 col-md-10">
											<h6 style="font-weight: 700;">DOOR FRAMES AND SHUTTERS</h6>
											<p>Frame - Shal Wood, Shutter - Flush door, Hardware - Lock, Docorative
												Handle/Knob.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingOne">
						<button class="accordion-button" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
							<i class="fa fa-aminity" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Amenities
						</button>
					</h2>
					<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingOne"
						data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<div class="row justify-content-center">
								<div class="col-6 col-md-2 text-center">
									<div style="height: 75px; width: 115px; margin: 0 auto;">
										<img class="img-responsive"
											src="https://convicity.in/demo/assets/images/icons/1.png" />
									</div>
									<p class="">PRIVATE CARPARKING</p>
								</div>
								<div class="col-6 col-md-2 text-center">
									<div style="height: 75px; width: 115px; margin: 0 auto;">
										<img class="img-responsive"
											src="https://convicity.in/demo/assets/images/icons/2.png" />
									</div>
									<p class="">PRIVATE CARPARKING</p>
								</div>
								<div class="col-6 col-md-2 text-center">
									<div style="height: 75px; width: 115px; margin: 0 auto;">
										<img class="img-responsive"
											src="https://convicity.in/demo/assets/images/icons/3.png" />
									</div>
									<p class="">PRIVATE CARPARKING</p>
								</div>
								<div class="col-6 col-md-2 text-center">
									<div style="height: 75px; width: 115px; margin: 0 auto;">
										<img class="img-responsive"
											src="https://convicity.in/demo/assets/images/icons/4.png" />
									</div>
									<p class="">PRIVATE CARPARKING</p>
								</div>
								<div class="col-6 col-md-2 text-center">
									<div style="height: 75px; width: 115px; margin: 0 auto;">
										<img class="img-responsive"
											src="https://convicity.in/demo/assets/images/icons/5.png" />
									</div>
									<p class="">PRIVATE CARPARKING</p>
								</div>
							</div>
							<div class="row justify-content-center">
								<div class="col-6 col-md-2 text-center">
									<div style="height: 75px; width: 115px; margin: 0 auto;">
										<img class="img-responsive"
											src="https://convicity.in/demo/assets/images/icons/6.png" />
									</div>
									<p class="">PRIVATE CARPARKING</p>
								</div>
								<div class="col-6 col-md-2 text-center">
									<div style="height: 75px; width: 115px; margin: 0 auto;">
										<img class="img-responsive"
											src="https://convicity.in/demo/assets/images/icons/7.png" />
									</div>
									<p class="">PRIVATE CARPARKING</p>
								</div>
								<div class="col-6 col-md-2 text-center">
									<div style="height: 75px; width: 115px; margin: 0 auto;">
										<img class="img-responsive"
											src="https://convicity.in/demo/assets/images/icons/8.png" />
									</div>
									<p class="">PRIVATE CARPARKING</p>
								</div>
								<div class="col-6 col-md-2 text-center">
									<div style="height: 75px; width: 115px; margin: 0 auto;">
										<img class="img-responsive"
											src="https://convicity.in/demo/assets/images/icons/9.png" />
									</div>
									<p class="">PRIVATE CARPARKING</p>
								</div>
								<div class="col-6 col-md-2 text-center">
									<div style="height: 75px; width: 115px; margin: 0 auto;">
										<img class="img-responsive"
											src="https://convicity.in/demo/assets/images/icons/10.png" />
									</div>
									<p class="">PRIVATE CARPARKING</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingOne">
						<button class="accordion-button" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
							<i class="fa fa-location" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Location Map
						</button>
					</h2>
					<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingOne"
						data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<div class="row">
								<div class="col-md-4">
									<a href="https://www.convicity.in/uploads/project_plan/elite1plan.jpg"
										data-lightbox="locationmap" data-title="Location Map">
										<img class="img-responsive w-100 lightbox-img"
											src="https://www.convicity.in/uploads/project_plan/elite1plan.jpg" />
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingOne">
						<button class="accordion-button" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseOne">
							<i class="fa fa-flor-plan" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Floor Plan
						</button>
					</h2>
					<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingOne"
						data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<div class="row">
								<div class="col-md-4">
									<a href="https://www.convicity.in/uploads/project_plan/3ke_ground.jpg"
										data-lightbox="floorplan" data-title="Floor Plan">
										<img class="img-responsive w-100 lightbox-img"
											src="https://www.convicity.in/uploads/project_plan/3ke_ground.jpg" />
									</a>
								</div>
								<div class="col-md-4">
									<a href="https://www.convicity.in/uploads/project_plan/3ke_first.jpg"
										data-lightbox="floorplan" data-title="Floor Plan">
										<img class="img-responsive w-100 lightbox-img"
											src="https://www.convicity.in/uploads/project_plan/3ke_first.jpg" />
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingOne">
						<button class="accordion-button" type="button" data-bs-toggle="collapse"
							data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseOne">
							<i class="fa fa-flor-plan" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Status
						</button>
					</h2>
					<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingOne"
						data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<div class="row">
								<div class="col-md-4">
									<a href="https://www.convicity.in/uploads/projects/1.jpg" data-lightbox="photo"
										data-title="Floor Plan">
										<img class="img-responsive w-100 lightbox-img"
											src="https://www.convicity.in/uploads/projects/1.jpg" />
									</a>
								</div>
								<div class="col-md-4">
									<a href="https://www.convicity.in/uploads/projects/1.jpg" data-lightbox="photo"
										data-title="Floor Plan">
										<img class="img-responsive w-100 lightbox-img"
											src="https://www.convicity.in/uploads/projects/1.jpg" />
									</a>
								</div>
								<div class="col-md-4">
									<a href="https://www.convicity.in/uploads/projects/1.jpg" data-lightbox="photo"
										data-title="Floor Plan">
										<img class="img-responsive w-100 lightbox-img"
											src="https://www.convicity.in/uploads/projects/1.jpg" />
									</a>
								</div>
								<div class="col-md-4">
									<a href="https://www.convicity.in/uploads/projects/1.jpg" data-lightbox="photo"
										data-title="Floor Plan">
										<img class="img-responsive w-100 lightbox-img"
											src="https://www.convicity.in/uploads/projects/1.jpg" />
									</a>
								</div>
								<div class="col-md-4">
									<a href="https://www.convicity.in/uploads/projects/1.jpg" data-lightbox="photo"
										data-title="Floor Plan">
										<img class="img-responsive w-100 lightbox-img"
											src="https://www.convicity.in/uploads/projects/1.jpg" />
									</a>
								</div>
								<div class="col-md-4">
									<a href="https://www.convicity.in/uploads/projects/1.jpg" data-lightbox="photo"
										data-title="Floor Plan">
										<img class="img-responsive w-100 lightbox-img"
											src="https://www.convicity.in/uploads/projects/1.jpg" />
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>