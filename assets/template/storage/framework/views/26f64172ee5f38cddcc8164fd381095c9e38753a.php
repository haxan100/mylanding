
<?php $__env->startSection('content'); ?>
	<!-- Page Wrapper -->
    <div class="page-wrapper">
			
            <!-- Page Content -->
            <div class="content container-fluid">
            
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Job Details</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                <li class="breadcrumb-item active">Job Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                
                <div class="row">
                    <div class="col-md-8">
                        <div class="job-info job-widget">
                            <h3 class="job-title">Android Developer</h3>
                            <span class="job-dept">App Development</span>
                            <ul class="job-post-det">
                                <li><i class="fa fa-calendar"></i> Post Date: <span class="text-blue">Feb 18, 2019</span></li>
                                <li><i class="fa fa-calendar"></i> Last Date: <span class="text-blue">May 31, 2019</span></li>
                                <li><i class="fa fa-user-o"></i> Applications: <span class="text-blue">4</span></li>
                                <li><i class="fa fa-eye"></i> Views: <span class="text-blue">3806</span></li>
                            </ul>
                        </div>
                        <div class="job-content job-widget">
                            <div class="job-desc-title"><h4>Job Description</h4></div>
                            <div class="job-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                            </div>
                            <div class="job-desc-title"><h4>Job Description</h4></div>
                            <div class="job-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                <ul class="square-list">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="job-det-info job-widget">
                            <a class="btn job-btn" href="#" data-toggle="modal" data-target="#edit_job">Edit</a>
                            <div class="info-list">
                                <span><i class="fa fa-bar-chart"></i></span>
                                <h5>Job Type</h5>
                                <p> Full Time</p>
                            </div>
                            <div class="info-list">
                                <span><i class="fa fa-money"></i></span>
                                <h5>Salary</h5>
                                <p>$32k - $38k</p>
                            </div>
                            <div class="info-list">
                                <span><i class="fa fa-suitcase"></i></span>
                                <h5>Experience</h5>
                                <p>2 Years</p>
                            </div>
                            <div class="info-list">
                                <span><i class="fa fa-ticket"></i></span>
                                <h5>Vacancy</h5>
                                <p>5</p>
                            </div>
                            <div class="info-list">
                                <span><i class="fa fa-map-signs"></i></span>
                                <h5>Location</h5>
                                <p> Dreamguy's Technologies
                                <br> 3864 Quiet Valley Lane,
                                <br> Sherman Oaks,
                                <br> California, 91403</p>
                            </div>
                            <div class="info-list">
                                <p class="text-truncate"> 818-978-7102
                                <br> <a href="mailto:danielporter@example.com" title="danielporter@example.com">danielporter@example.com</a>
                                <br> <a href="https://www.example.com" target="_blank" title="https://www.example.com">https://www.example.com</a>
                                </p>
                            </div>
                            <div class="info-list text-center">
                                <a class="app-ends" href="#">Application ends in 2d 7h 6m</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Content -->
            
            <!-- Edit Job Modal -->
            <div id="edit_job" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Job</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Job Title</label>
                                            <input class="form-control" type="text" value="Web Developer">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Department</label>
                                            <select class="select">
                                                <option>-</option>
                                                <option selected>Web Development</option>
                                                <option>Application Development</option>
                                                <option>IT Management</option>
                                                <option>Accounts Management</option>
                                                <option>Support Management</option>
                                                <option>Marketing</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Job Location</label>
                                            <input class="form-control" type="text" value="California">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>No of Vacancies</label>
                                            <input class="form-control" type="text" value="5">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Experience</label>
                                            <input class="form-control" type="text" value="2 Years">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Age</label>
                                            <input class="form-control" type="text" value="-">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Salary From</label>
                                            <input type="text" class="form-control" value="32k">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Salary To</label>
                                            <input type="text" class="form-control" value="38k">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Job Type</label>
                                            <select class="select">
                                                <option selected>Full Time</option>
                                                <option>Part Time</option>
                                                <option>Internship</option>
                                                <option>Temporary</option>
                                                <option>Remote</option>
                                                <option>Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="select">
                                                <option selected>Open</option>
                                                <option>Closed</option>
                                                <option>Cancelled</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Start Date</label>
                                            <input type="text" class="form-control datetimepicker" value="3 Mar 2019">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Expired Date</label>
                                            <input type="text" class="form-control datetimepicker" value="31 May 2019">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Edit Job Modal -->
            
        </div>
        <!-- /Page Wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\smarthr_laravel\resources\views/job-details.blade.php ENDPATH**/ ?>