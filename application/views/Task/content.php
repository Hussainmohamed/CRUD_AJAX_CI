<div class="content mt-3">
    <div class="col-sm-12">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Insert Records</strong>
                        </div>
                        <form method="post" enctype="multipart/form-data" id="emp-form"></form>
                        <div class="col-md-12">
                            <div class="col-md-4">
                                   <div class="form-group">
                                       <label>Employee Name</label>
                                       <input type="text" id="name" name="emp-name" class="form-control"  placeholder="Enter Name"" />
                                   </div> 
                            </div>

                            <div class="col-md-4">
                                   <div class="form-group">
                                       <label>Employee Email</label>
                                       <input type="email" id="email" name="emp-email" class="form-control"  placeholder="Enter Email"/>
                                   </div> 
                            </div>
                            <div class="col-md-4">
                                   <div class="form-group">
                                       <label>Employee DOB</label>
                                       <input type="date" id="dob" name="emp-dob" class="form-control"  placeholder="Enter Name"/>
                                   </div> 
                            </div>
                            <div class="col-md-4">
                                   <div class="form-group">
                                       <label>Employee Salary</label>
                                       <input type="text" id="sal" name="emp-sal" class="form-control"  placeholder="Enter Name"/>
                                   </div> 
                            </div>
                            <div class="col-md-4">
                                   <div class="form-group">
                                       <label>Employee Qualification</label>
                                       <select class="form-control" id="qual" name="emp-qua">
                                           <option value="">Select Qualification</option>
                                           <option value="Diploma cs">Diploma cs</option>
                                           <option value="BE">BE</option>
                                       </select>
                                   </div> 
                            </div>

                            <div class="col-md-4">
                                   <div class="form-group">
                                       <label>Employee Experience</label>
                                       <select id="exp" class="form-control" name="emp-ex">
                                           <option value="">Select Experience</option>
                                           <option value="1">1</option>
                                           <option value="2">2</option>
                                           <option value="3">3</option>
                                           <option value="4">4</option>
                                           <option value="5">5</option>
                                           <option value="6">6</option>
                                           <option value="7">7</option>
                                       </select>
                                   </div> 
                            </div>
                            <div class="col-md-4">
                                   <div class="form-group">
                                       <label>Employee Certificate</label>
                                       <input type="file" multiple id="file" name="file[]" class="form-control"  />
                                   </div> 
                            </div>
                           
                            <div class="col-md-4">
                                   <div class="form-group">
                                      <input style="margin-top:27px" type="submit" class="btn btn-primary" id="insert-records" value="Insert Record" />
                                   </div> 
                            </div>
                            

                        </div>

                    </div>

                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Employee Records</strong>
                    </div>
                    <div class="card-body">
                       
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                              
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Edit Records</strong>
                        </div>
                        <form method="post" enctype="multipart/form-data" id="edit-emp-form"></form>
                        <div class="col-md-12">
                            <div class="col-md-4">
                                   <div class="form-group">
                                       <label>Employee Name</label>
                                       <input type="text" id="edit-name" name="edit-emp-name" class="form-control"  placeholder="Enter Name"" />
                                       <input type="hidden" id="eid"  name="eid"/>
                                       <input type="hidden" id="emp-imgs"  name="emp-imgs"/>
                                   </div> 
                            </div>

                            <div class="col-md-4">
                                   <div class="form-group">
                                       <label>Employee Email</label>
                                       <input type="email" id="edit-email" name="edit-emp-email" class="form-control"  placeholder="Enter Email"/>
                                   </div> 
                            </div>
                            <div class="col-md-4">
                                   <div class="form-group">
                                       <label>Employee DOB</label>
                                       <input type="date" id="edit-dob" name="edit-emp-dob" class="form-control"  placeholder="Enter Name"/>
                                   </div> 
                            </div>
                            <div class="col-md-4">
                                   <div class="form-group">
                                       <label>Employee Salary</label>
                                       <input type="text" id="edit-sal" name="edit-emp-sal" class="form-control"  placeholder="Enter Name"/>
                                   </div> 
                            </div>
                            <div class="col-md-4">
                                   <div class="form-group">
                                       <label>Employee Qualification</label>
                                       <select class="form-control" id="edit-qual" name="edit-emp-qua">
                                           <option value="">Select Qualification</option>
                                           <option value="Diploma cs">Diploma cs</option>
                                           <option value="BE">BE</option>
                                       </select>
                                   </div> 
                            </div>

                            <div class="col-md-4">
                                   <div class="form-group">
                                       <label>Employee Experience</label>
                                       <select id="edit-exp" class="form-control" name="edit-emp-ex">
                                           <option value="">Select Experience</option>
                                           <option value="1">1</option>
                                           <option value="2">2</option>
                                           <option value="3">3</option>
                                           <option value="4">4</option>
                                           <option value="5">5</option>
                                           <option value="6">6</option>
                                           <option value="7">7</option>
                                       </select>
                                   </div> 
                            </div>
                            <div class="col-md-4">
                                   <div class="form-group">
                                       <label>Employee Certificate</label>
                                       <input type="file" multiple id="edit-file" name="edit-file[]" class="form-control"  />
                                   </div> 
                            </div>
                            <div id="img">

                            </div>
                            <!-- <div class="col-md-4">
                                   <div class="form-group">
                                      <input type="submit" class="btn btn-primary" id="edit-records" value="Edit Record" />
                                   </div> 
                            </div> -->
                            

                        </div>

                    </div>

                </div>
                               
                            </div>
                            <div class="modal-footer">
                                <button type="button" id='close-form' class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" id="edit-records" value="Edit Record" data-dismiss="modal" class="btn btn-primary">Edit Records</button>
                            </div>
                        </div>
                    </div>
                </div>


              