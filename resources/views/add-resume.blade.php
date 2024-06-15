<!-- Start Breadcrumbs -->
<div class="breadcrumbs overlay">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumbs-content">
					<h1 class="page-title">Add Resume</h1>
					<p>
						Business plan draws on a wide range of knowledge from different business<br />
						disciplines. Business draws on a wide range of different business .
					</p>
				</div>
				<ul class="breadcrumb-nav">
					<li><a href="index.html">Home</a></li>
					<li>Add Resume</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Add Resume Section -->
<section class="add-resume section">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 col-12">
				<div class="add-resume-inner box">
					<div class="post-header align-items-center justify-content-center">
						<h3>Basic information</h3>
						<p>Already have an account? <a href="javacript:" data-toggle="modal" data-target="#login" class="login"> Click here to login</a></p>
					</div>
					<form class="form-ad">
						<div class="row">
							<div class="col-lg-6 col-12">
								<div class="form-group">
									<label class="control-label">Name</label>
									<input type="text" class="form-control" placeholder="Name" />
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<div class="form-group">
									<label class="control-label">Email</label>
									<input type="text" class="form-control" placeholder="Your@domain.com" />
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<div class="form-group">
									<label class="control-label">Profession Title</label>
									<input type="text" class="form-control" placeholder="Headline (e.g. Front-end developer)" />
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<div class="form-group">
									<label class="control-label">Location</label>
									<input type="text" class="form-control" placeholder="Location, e.g" />
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<div class="form-group">
									<label class="control-label">Web</label>
									<input type="text" class="form-control" placeholder="Website address" />
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<div class="form-group">
									<label class="control-label">Pre Hour</label>
									<input type="text" class="form-control" placeholder="Salary, e.g. 85" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label">Age</label>
							<input type="text" class="form-control" placeholder="Years old" />
						</div>
						<div class="form-group">
							<div class="button-group">
								<div class="action-buttons">
									<div class="upload-button button">
										<button class="btn">Choose a cover image</button>
										<input id="cover_img_file_2" type="file" />
									</div>
								</div>
							</div>
						</div>
						<h3 class="single-section-title">Education</h3>
						<div class="row">
							<div class="col-lg-6 col-12">
								<div class="form-group">
									<label class="control-label">Degree</label>
									<input type="text" class="form-control" placeholder="Degree, e.g. Bachelor" />
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<div class="form-group">
									<label class="control-label">Field of Study</label>
									<input type="text" class="form-control" placeholder="Major, e.g Computer Science" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label class="control-label">From</label>
									<input type="text" class="form-control" placeholder="e.g 2014" />
								</div>
								<div class="col-md-6">
									<label class="control-label">To</label>
									<input type="text" class="form-control" placeholder="e.g 2020" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label">School</label>
							<input type="text" class="form-control" placeholder="School name, e.g. Massachusetts Institute of Technology" />
						</div>
						<div class="form-group">
							<label class="control-label">Description</label>
							<textarea class="form-control" rows="7"></textarea>
						</div>
						<div class="row align-items-center justify-content-center">
							<div class="col-lg-6 col-md-5 col-12">
								<div class="form-group">
									<div class="button-group">
										<div class="action-buttons">
											<div class="upload-button button">
												<button class="btn">Choose a cover Logo</button>
												<input id="cover_img_file_3" type="file" />
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-7 col-12">
								<div class="add-post-btn float-right">
									<ul>
										<li>
											<a href="#" class="btn-added"><i class="lni lni-add-files"></i> Add New Education</a>
										</li>
										<li>
											<a href="#" class="btn-delete"><i class="lni lni-remove-file"></i> Delete This</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<h3 class="single-section-title">Work Experience</h3>
						<div class="form-group">
							<label class="control-label">Company Name</label>
							<input type="text" class="form-control" placeholder="Company name" />
						</div>
						<div class="form-group">
							<label class="control-label">Title</label>
							<input type="text" class="form-control" placeholder="e.g UI/UX Researcher" />
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label class="control-label">Date Form</label>
									<input type="text" class="form-control" placeholder="e.g 2014" />
								</div>
								<div class="col-md-6">
									<label class="control-label">Date To</label>
									<input type="text" class="form-control" placeholder="e.g 2020" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label">Description</label>
						</div>
						<div id="editor" style="margin-bottom: 30px">
							<div id="summernote">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quia aut modi fugit, ratione saepe perferendis odio optio repellat dolorum voluptas excepturi possimus similique veritatis nobis. Provident cupiditate delectus, optio?</p>
							</div>
						</div>
						<div class="row align-items-center justify-content-center">
							<div class="col-lg-6 col-md-5 col-12">
								<div class="form-group">
									<div class="button-group">
										<div class="action-buttons">
											<div class="upload-button button">
												<button class="btn">Choose a cover Logo</button>
												<input id="#" type="file" />
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-7 col-12">
								<div class="add-post-btn float-right">
									<ul>
										<li>
											<a href="#" class="btn-added"><i class="lni lni-add-files"></i> Add New Experience</a>
										</li>
										<li>
											<a href="#" class="btn-delete"><i class="lni lni-remove-file"></i> Delete This</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<h3 class="single-section-title">Skills</h3>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label class="control-label">Skill Name</label>
									<input class="form-control" placeholder="Skill name, e.g. HTML" type="text" />
								</div>
								<div class="col-md-6">
									<label class="control-label">% (1-100)</label>
									<input class="form-control" placeholder="Skill proficiency, e.g. 90" type="text" />
								</div>
							</div>
						</div>
						<div class="row align-items-center justify-content-center">
							<div class="col-lg-6 col-md-5 col-12">
								<div class="button">
									<a href="resume.html" class="btn">Save</a>
								</div>
							</div>
							<div class="col-lg-6 col-md-7 col-12">
								<div class="add-post-btn float-right">
									<ul>
										<li>
											<a href="#" class="btn-added"><i class="lni lni-add-files"></i> Add New Skills</a>
										</li>
										<li>
											<a href="#" class="btn-delete"><i class="lni lni-remove-file"></i> Delete This</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Add Resume Section -->