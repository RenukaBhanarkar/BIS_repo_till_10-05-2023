<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Latest News</h1>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/';?>" >Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url().'admin/exchange_forum';?>" >Exchange Forum</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url().'admin/cmsManagenent_dashboard';?>" >CMS</a></li>
                <li class="breadcrumb-item active" aria-current="page">Latest News</li>
            </ol>
        </nav>

    </div>
<div class="row">
            <div class="col-12 mt-3">
                <div class="card border-top card-body">
                <table id="hpListTable" class="table table-bordered scroll">
              	<thead>
              		<tr>    <!-- <th>Master</th> -->
              				<th>Module</th>
            				<th>Sub-Module</th>
            		 		<th>View</th>
            		 		<th>Add</th>
            		 		<th>Update</th>
            		 		<th>Delete</th>
              		</tr> 
              			
              		 
              	</thead>
              	<tbody> 
              	
                        <tr> 
							<td rowspan="3">
                                    <div class="custom-control custom-checkbox mr-3">
                                        <input type="checkbox" class="custom-control-input" id="163_mainModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="163_mainModuleChk">
                                        <label class="custom-control-label" for="163_mainModuleChk">Competitions</label>
                                    </div>
                            </td>
                            <td>
                                    <div class="custom-control custom-checkbox mr-3">
                                        <input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="173_subModuleChk" id="173_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="173_subModuleChk">
                                        <label class="custom-control-label" for="173_subModuleChk">Quiz Competition</label>
                                    </div>
                            </td>
                            <td>
                                    <div class="custom-control custom-checkbox mr-3">
                                        <input type="checkbox" class="custom-control-input 163_mainModuleChk 173_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="173_subModuleChk" id="173_viewChk" onclick="checkAccess(this);" value="173#View" data-parsley-multiple="173_viewChk">
                                        <label class="custom-control-label" for="173_viewChk"></label>
                                    </div>
                            </td>
                            <td></td> 
                            <td></td> 
                            <td></td> 
                        </tr>
					<tr>
                        <td>
                                <div class="custom-control custom-checkbox mr-3">
                                    <input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="174_subModuleChk" id="174_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="174_subModuleChk">
                                    <label class="custom-control-label" for="174_subModuleChk">Poster Making Competition</label>
                                </div>
                        </td>
                        <td>
                                <div class="custom-control custom-checkbox mr-3">
                                    <input type="checkbox" class="custom-control-input 163_mainModuleChk 174_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="174_subModuleChk" id="174_viewChk" onclick="checkAccess(this);" value="174#View" data-parsley-multiple="174_viewChk">
                                    <label class="custom-control-label" for="174_viewChk"></label>
                                </div>
                        </td>
                        <td>
                                <div class="custom-control custom-checkbox mr-3">
                                    <input type="checkbox" class="custom-control-input 163_mainModuleChk 174_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="174_subModuleChk" id="174_addChk" onclick="checkAccess(this);" value="174#Add" data-parsley-multiple="174_addChk">
                                    <label class="custom-control-label" for="174_addChk"></label>
                                </div>
                        </td>
                        <td>
                                <div class="custom-control custom-checkbox mr-3">
                                    <input type="checkbox" class="custom-control-input 163_mainModuleChk 174_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="174_subModuleChk" id="174_updateChk" onclick="checkAccess(this);" value="174#Update" data-parsley-multiple="174_updateChk">
                                    <label class="custom-control-label" for="174_updateChk"></label>
                                </div>
                        </td>
                        <td>
                                <div class="custom-control custom-checkbox mr-3">
                                    <input type="checkbox" class="custom-control-input 163_mainModuleChk 174_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="174_subModuleChk" id="174_deleteChk" onclick="checkAccess(this);" value="174#Delete" data-parsley-multiple="174_deleteChk">
                                    <label class="custom-control-label" for="174_deleteChk"></label>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                                <div class="custom-control custom-checkbox mr-3">
                                    <input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="175_subModuleChk" id="175_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="175_subModuleChk">
                                    <label class="custom-control-label" for="175_subModuleChk">Standard Writting Competition</label>
                                </div>
                        </td>
                        <td>
                                <div class="custom-control custom-checkbox mr-3">
                                    <input type="checkbox" class="custom-control-input 163_mainModuleChk 174_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="174_subModuleChk" id="174_viewChk" onclick="checkAccess(this);" value="174#View" data-parsley-multiple="174_viewChk">
                                    <label class="custom-control-label" for="174_viewChk"></label>
                                </div>
                        </td>
                        <td>
                                <div class="custom-control custom-checkbox mr-3">
                                    <input type="checkbox" class="custom-control-input 163_mainModuleChk 174_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="174_subModuleChk" id="174_addChk" onclick="checkAccess(this);" value="174#Add" data-parsley-multiple="174_addChk">
                                    <label class="custom-control-label" for="174_addChk"></label>
                                </div>
                        </td>
                        <td>
                                <div class="custom-control custom-checkbox mr-3">
                                    <input type="checkbox" class="custom-control-input 163_mainModuleChk 174_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="174_subModuleChk" id="174_updateChk" onclick="checkAccess(this);" value="174#Update" data-parsley-multiple="174_updateChk">
                                    <label class="custom-control-label" for="174_updateChk"></label>
                                </div>
                        </td>
                        <td>
                                <div class="custom-control custom-checkbox mr-3">
                                    <input type="checkbox" class="custom-control-input 163_mainModuleChk 174_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="174_subModuleChk" id="174_deleteChk" onclick="checkAccess(this);" value="174#Delete" data-parsley-multiple="174_deleteChk">
                                    <label class="custom-control-label" for="174_deleteChk"></label>
                                </div>
                        </td>
                    </tr>
					<tr>
                        <td>
                                <div class="custom-control custom-checkbox mr-3">
                                    <input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="177_subModuleChk" id="177_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="177_subModuleChk">
                                    <label class="custom-control-label" for="177_subModuleChk">Wall of Wisdom</label>
                                </div>
                        </td>


								 	<td>
											<!-- <div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 177_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="177_subModuleChk" id="177_viewChk" onclick="checkAccess(this);" value="177#View" data-parsley-multiple="177_viewChk">
												<label class="custom-control-label" for="177_viewChk"></label>
											</div> -->
									</td>
                                   <td>
                                        <div class="custom-control custom-checkbox mr-3">
                                            <input type="checkbox" class="custom-control-input 163_mainModuleChk 177_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="177_subModuleChk" id="177_viewChk" onclick="checkAccess(this);" value="177#View" data-parsley-multiple="177_viewChk">
                                            <label class="custom-control-label" for="177_viewChk"></label>
                                        </div> 
                                   </td> 
                                   <td>
                                        <div class="custom-control custom-checkbox mr-3">
                                            <input type="checkbox" class="custom-control-input 163_mainModuleChk 177_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="178_subModuleChk" id="178_viewChk" onclick="checkAccess(this);" value="178#View" data-parsley-multiple="178_viewChk">
                                            <label class="custom-control-label" for="178_viewChk"></label>
                                        </div> 
                                   </td> 
                                   <td>
                                        <div class="custom-control custom-checkbox mr-3">
                                            <input type="checkbox" class="custom-control-input 163_mainModuleChk 177_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="179_subModuleChk" id="179_viewChk" onclick="checkAccess(this);" value="179#View" data-parsley-multiple="179_viewChk">
                                            <label class="custom-control-label" for="179_viewChk"></label>
                                        </div> 
                                   </td> 
                                   <td>
                                        <div class="custom-control custom-checkbox mr-3">
                                            <input type="checkbox" class="custom-control-input 163_mainModuleChk 177_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="180_subModuleChk" id="177_viewChk" onclick="checkAccess(this);" value="180#View" data-parsley-multiple="180_viewChk">
                                            <label class="custom-control-label" for="180_viewChk"></label>
                                        </div> 
                                   </td> 
                    </tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="178_subModuleChk" id="178_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="178_subModuleChk">
												<label class="custom-control-label" for="178_subModuleChk">TA/DA BILLS</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 178_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="178_subModuleChk" id="178_viewChk" onclick="checkAccess(this);" value="178#View" data-parsley-multiple="178_viewChk">
												<label class="custom-control-label" for="178_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="179_subModuleChk" id="179_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="179_subModuleChk">
												<label class="custom-control-label" for="179_subModuleChk">COMPLETED INSPECTION</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 179_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="179_subModuleChk" id="179_viewChk" onclick="checkAccess(this);" value="179#View" data-parsley-multiple="179_viewChk">
												<label class="custom-control-label" for="179_viewChk"></label>
											</div>
									</td>



									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 179_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="179_subModuleChk" id="179_addChk" onclick="checkAccess(this);" value="179#Add" data-parsley-multiple="179_addChk">
												<label class="custom-control-label" for="179_addChk"></label>
											</div>
									</td>



									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 179_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="179_subModuleChk" id="179_updateChk" onclick="checkAccess(this);" value="179#Update" data-parsley-multiple="179_updateChk">
												<label class="custom-control-label" for="179_updateChk"></label>
											</div>
									</td>



									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 179_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="179_subModuleChk" id="179_deleteChk" onclick="checkAccess(this);" value="179#Delete" data-parsley-multiple="179_deleteChk">
												<label class="custom-control-label" for="179_deleteChk"></label>
											</div>
									</td>
 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="180_subModuleChk" id="180_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="180_subModuleChk">
												<label class="custom-control-label" for="180_subModuleChk">FINANCE DETAILS</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 180_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="180_subModuleChk" id="180_viewChk" onclick="checkAccess(this);" value="180#View" data-parsley-multiple="180_viewChk">
												<label class="custom-control-label" for="180_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="181_subModuleChk" id="181_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="181_subModuleChk">
												<label class="custom-control-label" for="181_subModuleChk">INFRASTRUCTURE</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 181_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="181_subModuleChk" id="181_viewChk" onclick="checkAccess(this);" value="181#View" data-parsley-multiple="181_viewChk">
												<label class="custom-control-label" for="181_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="182_subModuleChk" id="182_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="182_subModuleChk">
												<label class="custom-control-label" for="182_subModuleChk">FACILITY</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 182_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="182_subModuleChk" id="182_viewChk" onclick="checkAccess(this);" value="182#View" data-parsley-multiple="182_viewChk">
												<label class="custom-control-label" for="182_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="183_subModuleChk" id="183_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="183_subModuleChk">
												<label class="custom-control-label" for="183_subModuleChk">RESEARCH AND PROJECT</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 183_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="183_subModuleChk" id="183_viewChk" onclick="checkAccess(this);" value="183#View" data-parsley-multiple="183_viewChk">
												<label class="custom-control-label" for="183_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="188_subModuleChk" id="188_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="188_subModuleChk">
												<label class="custom-control-label" for="188_subModuleChk">COMMITTEE AND MEETING</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 188_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="188_subModuleChk" id="188_viewChk" onclick="checkAccess(this);" value="188#View" data-parsley-multiple="188_viewChk">
												<label class="custom-control-label" for="188_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="189_subModuleChk" id="189_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="189_subModuleChk">
												<label class="custom-control-label" for="189_subModuleChk">PLACEMENT</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 189_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="189_subModuleChk" id="189_viewChk" onclick="checkAccess(this);" value="189#View" data-parsley-multiple="189_viewChk">
												<label class="custom-control-label" for="189_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="191_subModuleChk" id="191_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="191_subModuleChk">
												<label class="custom-control-label" for="191_subModuleChk">LIBRARY DETAILS</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 191_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="191_subModuleChk" id="191_viewChk" onclick="checkAccess(this);" value="191#View" data-parsley-multiple="191_viewChk">
												<label class="custom-control-label" for="191_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="192_subModuleChk" id="192_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="192_subModuleChk">
												<label class="custom-control-label" for="192_subModuleChk">LIBRARY COLLECTION </label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 192_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="192_subModuleChk" id="192_viewChk" onclick="checkAccess(this);" value="192#View" data-parsley-multiple="192_viewChk">
												<label class="custom-control-label" for="192_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="164_subModuleChk" id="164_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="164_subModuleChk">
												<label class="custom-control-label" for="164_subModuleChk">UNIVERSITY DETAILS</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 164_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="164_subModuleChk" id="164_viewChk" onclick="checkAccess(this);" value="164#View" data-parsley-multiple="164_viewChk">
												<label class="custom-control-label" for="164_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="165_subModuleChk" id="165_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="165_subModuleChk">
												<label class="custom-control-label" for="165_subModuleChk">UNIVERSITY REGULATION</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 165_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="165_subModuleChk" id="165_viewChk" onclick="checkAccess(this);" value="165#View" data-parsley-multiple="165_viewChk">
												<label class="custom-control-label" for="165_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="166_subModuleChk" id="166_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="166_subModuleChk">
												<label class="custom-control-label" for="166_subModuleChk">UNIVERSITY LEADERSHIP</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 166_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="166_subModuleChk" id="166_viewChk" onclick="checkAccess(this);" value="166#View" data-parsley-multiple="166_viewChk">
												<label class="custom-control-label" for="166_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="170_subModuleChk" id="170_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="170_subModuleChk">
												<label class="custom-control-label" for="170_subModuleChk">APPROVED COURSES </label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 170_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="170_subModuleChk" id="170_viewChk" onclick="checkAccess(this);" value="170#View" data-parsley-multiple="170_viewChk">
												<label class="custom-control-label" for="170_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="171_subModuleChk" id="171_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="171_subModuleChk">
												<label class="custom-control-label" for="171_subModuleChk">NEW COURSE APPROVAL REQUEST</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 171_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="171_subModuleChk" id="171_viewChk" onclick="checkAccess(this);" value="171#View" data-parsley-multiple="171_viewChk">
												<label class="custom-control-label" for="171_viewChk"></label>
											</div>
									</td>


									<td></td> 




									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 171_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="171_subModuleChk" id="171_updateChk" onclick="checkAccess(this);" value="171#Update" data-parsley-multiple="171_updateChk">
												<label class="custom-control-label" for="171_updateChk"></label>
											</div>
									</td>


									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="185_subModuleChk" id="185_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="185_subModuleChk">
												<label class="custom-control-label" for="185_subModuleChk">EXAMINATION_DETAILS</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 185_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="185_subModuleChk" id="185_viewChk" onclick="checkAccess(this);" value="185#View" data-parsley-multiple="185_viewChk">
												<label class="custom-control-label" for="185_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="186_subModuleChk" id="186_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="186_subModuleChk">
												<label class="custom-control-label" for="186_subModuleChk">ELIGIBLE STUDENT</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 186_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="186_subModuleChk" id="186_viewChk" onclick="checkAccess(this);" value="186#View" data-parsley-multiple="186_viewChk">
												<label class="custom-control-label" for="186_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk" data-moduleid="163_mainModuleChk" data-submoduleid="187_subModuleChk" id="187_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="187_subModuleChk">
												<label class="custom-control-label" for="187_subModuleChk">STUDENT RESULT</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 163_mainModuleChk 187_subModuleChk accessSelected" data-moduleid="163_mainModuleChk" data-submoduleid="187_subModuleChk" id="187_viewChk" onclick="checkAccess(this);" value="187#View" data-parsley-multiple="187_viewChk">
												<label class="custom-control-label" for="187_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

											


							

									<tr> 
									
									<td rowspan="4">
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input" id="193_mainModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="193_mainModuleChk">
												<label class="custom-control-label" for="193_mainModuleChk">STUDENT</label>
											</div>
									</td>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 193_mainModuleChk" data-moduleid="193_mainModuleChk" data-submoduleid="194_subModuleChk" id="194_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="194_subModuleChk">
												<label class="custom-control-label" for="194_subModuleChk">STUDENT MASTER</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 193_mainModuleChk 194_subModuleChk accessSelected" data-moduleid="193_mainModuleChk" data-submoduleid="194_subModuleChk" id="194_viewChk" onclick="checkAccess(this);" value="194#View" data-parsley-multiple="194_viewChk">
												<label class="custom-control-label" for="194_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 193_mainModuleChk" data-moduleid="193_mainModuleChk" data-submoduleid="195_subModuleChk" id="195_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="195_subModuleChk">
												<label class="custom-control-label" for="195_subModuleChk">SCHOLARSHIP</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 193_mainModuleChk 195_subModuleChk accessSelected" data-moduleid="193_mainModuleChk" data-submoduleid="195_subModuleChk" id="195_viewChk" onclick="checkAccess(this);" value="195#View" data-parsley-multiple="195_viewChk">
												<label class="custom-control-label" for="195_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 193_mainModuleChk" data-moduleid="193_mainModuleChk" data-submoduleid="196_subModuleChk" id="196_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="196_subModuleChk">
												<label class="custom-control-label" for="196_subModuleChk">STUDENT ATTENDANCE</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 193_mainModuleChk 196_subModuleChk accessSelected" data-moduleid="193_mainModuleChk" data-submoduleid="196_subModuleChk" id="196_viewChk" onclick="checkAccess(this);" value="196#View" data-parsley-multiple="196_viewChk">
												<label class="custom-control-label" for="196_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 193_mainModuleChk" data-moduleid="193_mainModuleChk" data-submoduleid="197_subModuleChk" id="197_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="197_subModuleChk">
												<label class="custom-control-label" for="197_subModuleChk">DEGREE</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 193_mainModuleChk 197_subModuleChk accessSelected" data-moduleid="193_mainModuleChk" data-submoduleid="197_subModuleChk" id="197_viewChk" onclick="checkAccess(this);" value="197#View" data-parsley-multiple="197_viewChk">
												<label class="custom-control-label" for="197_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

											


							

									<tr> 
									
									<td rowspan="3">
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input" id="198_mainModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="198_mainModuleChk">
												<label class="custom-control-label" for="198_mainModuleChk">EMPLOYEE</label>
											</div>
									</td>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 198_mainModuleChk" data-moduleid="198_mainModuleChk" data-submoduleid="199_subModuleChk" id="199_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="199_subModuleChk">
												<label class="custom-control-label" for="199_subModuleChk">EMPLOYEE</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 198_mainModuleChk 199_subModuleChk accessSelected" data-moduleid="198_mainModuleChk" data-submoduleid="199_subModuleChk" id="199_viewChk" onclick="checkAccess(this);" value="199#View" data-parsley-multiple="199_viewChk">
												<label class="custom-control-label" for="199_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 198_mainModuleChk" data-moduleid="198_mainModuleChk" data-submoduleid="200_subModuleChk" id="200_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="200_subModuleChk">
												<label class="custom-control-label" for="200_subModuleChk">CURRICULUM</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 198_mainModuleChk 200_subModuleChk accessSelected" data-moduleid="198_mainModuleChk" data-submoduleid="200_subModuleChk" id="200_viewChk" onclick="checkAccess(this);" value="200#View" data-parsley-multiple="200_viewChk">
												<label class="custom-control-label" for="200_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 198_mainModuleChk" data-moduleid="198_mainModuleChk" data-submoduleid="201_subModuleChk" id="201_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="201_subModuleChk">
												<label class="custom-control-label" for="201_subModuleChk">ATTENDANCE</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 198_mainModuleChk 201_subModuleChk accessSelected" data-moduleid="198_mainModuleChk" data-submoduleid="201_subModuleChk" id="201_viewChk" onclick="checkAccess(this);" value="201#View" data-parsley-multiple="201_viewChk">
												<label class="custom-control-label" for="201_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

											


							

									<tr> 
									
									<td rowspan="6">
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input" id="202_mainModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="202_mainModuleChk">
												<label class="custom-control-label" for="202_mainModuleChk">RTI AND GRIEVENCE</label>
											</div>
									</td>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 202_mainModuleChk" data-moduleid="202_mainModuleChk" data-submoduleid="203_subModuleChk" id="203_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="203_subModuleChk">
												<label class="custom-control-label" for="203_subModuleChk">AUTHORITY</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 202_mainModuleChk 203_subModuleChk accessSelected" data-moduleid="202_mainModuleChk" data-submoduleid="203_subModuleChk" id="203_viewChk" onclick="checkAccess(this);" value="203#View" data-parsley-multiple="203_viewChk">
												<label class="custom-control-label" for="203_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 202_mainModuleChk" data-moduleid="202_mainModuleChk" data-submoduleid="204_subModuleChk" id="204_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="204_subModuleChk">
												<label class="custom-control-label" for="204_subModuleChk">PIO</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 202_mainModuleChk 204_subModuleChk accessSelected" data-moduleid="202_mainModuleChk" data-submoduleid="204_subModuleChk" id="204_viewChk" onclick="checkAccess(this);" value="204#View" data-parsley-multiple="204_viewChk">
												<label class="custom-control-label" for="204_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 202_mainModuleChk" data-moduleid="202_mainModuleChk" data-submoduleid="205_subModuleChk" id="205_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="205_subModuleChk">
												<label class="custom-control-label" for="205_subModuleChk">TRANSFER TO UNIVERSITY</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 202_mainModuleChk 205_subModuleChk accessSelected" data-moduleid="202_mainModuleChk" data-submoduleid="205_subModuleChk" id="205_viewChk" onclick="checkAccess(this);" value="205#View" data-parsley-multiple="205_viewChk">
												<label class="custom-control-label" for="205_viewChk"></label>
											</div>
									</td>



									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 202_mainModuleChk 205_subModuleChk accessSelected" data-moduleid="202_mainModuleChk" data-submoduleid="205_subModuleChk" id="205_addChk" onclick="checkAccess(this);" value="205#Add" data-parsley-multiple="205_addChk">
												<label class="custom-control-label" for="205_addChk"></label>
											</div>
									</td>



									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 202_mainModuleChk 205_subModuleChk accessSelected" data-moduleid="202_mainModuleChk" data-submoduleid="205_subModuleChk" id="205_updateChk" onclick="checkAccess(this);" value="205#Update" data-parsley-multiple="205_updateChk">
												<label class="custom-control-label" for="205_updateChk"></label>
											</div>
									</td>



									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 202_mainModuleChk 205_subModuleChk accessSelected" data-moduleid="202_mainModuleChk" data-submoduleid="205_subModuleChk" id="205_deleteChk" onclick="checkAccess(this);" value="205#Delete" data-parsley-multiple="205_deleteChk">
												<label class="custom-control-label" for="205_deleteChk"></label>
											</div>
									</td>
 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 202_mainModuleChk" data-moduleid="202_mainModuleChk" data-submoduleid="206_subModuleChk" id="206_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="206_subModuleChk">
												<label class="custom-control-label" for="206_subModuleChk">GRIEVENCE REQUEST</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 202_mainModuleChk 206_subModuleChk accessSelected" data-moduleid="202_mainModuleChk" data-submoduleid="206_subModuleChk" id="206_viewChk" onclick="checkAccess(this);" value="206#View" data-parsley-multiple="206_viewChk">
												<label class="custom-control-label" for="206_viewChk"></label>
											</div>
									</td>


									<td></td> 




									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 202_mainModuleChk 206_subModuleChk accessSelected" data-moduleid="202_mainModuleChk" data-submoduleid="206_subModuleChk" id="206_updateChk" onclick="checkAccess(this);" value="206#Update" data-parsley-multiple="206_updateChk">
												<label class="custom-control-label" for="206_updateChk"></label>
											</div>
									</td>


									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 202_mainModuleChk" data-moduleid="202_mainModuleChk" data-submoduleid="207_subModuleChk" id="207_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="207_subModuleChk">
												<label class="custom-control-label" for="207_subModuleChk">RESOLVED GRIEVENCE </label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 202_mainModuleChk 207_subModuleChk accessSelected" data-moduleid="202_mainModuleChk" data-submoduleid="207_subModuleChk" id="207_viewChk" onclick="checkAccess(this);" value="207#View" data-parsley-multiple="207_viewChk">
												<label class="custom-control-label" for="207_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 202_mainModuleChk" data-moduleid="202_mainModuleChk" data-submoduleid="208_subModuleChk" id="208_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="208_subModuleChk">
												<label class="custom-control-label" for="208_subModuleChk">CREATE GRIEVENCE </label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 202_mainModuleChk 208_subModuleChk accessSelected" data-moduleid="202_mainModuleChk" data-submoduleid="208_subModuleChk" id="208_viewChk" onclick="checkAccess(this);" value="208#View" data-parsley-multiple="208_viewChk">
												<label class="custom-control-label" for="208_viewChk"></label>
											</div>
									</td>



									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 202_mainModuleChk 208_subModuleChk accessSelected" data-moduleid="202_mainModuleChk" data-submoduleid="208_subModuleChk" id="208_addChk" onclick="checkAccess(this);" value="208#Add" data-parsley-multiple="208_addChk">
												<label class="custom-control-label" for="208_addChk"></label>
											</div>
									</td>



									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 202_mainModuleChk 208_subModuleChk accessSelected" data-moduleid="202_mainModuleChk" data-submoduleid="208_subModuleChk" id="208_updateChk" onclick="checkAccess(this);" value="208#Update" data-parsley-multiple="208_updateChk">
												<label class="custom-control-label" for="208_updateChk"></label>
											</div>
									</td>



									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 202_mainModuleChk 208_subModuleChk accessSelected" data-moduleid="202_mainModuleChk" data-submoduleid="208_subModuleChk" id="208_deleteChk" onclick="checkAccess(this);" value="208#Delete" data-parsley-multiple="208_deleteChk">
												<label class="custom-control-label" for="208_deleteChk"></label>
											</div>
									</td>
 

									
 

 							
									 
									</tr>
									

											


							

									<tr> 
									
									<td rowspan="6">
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input" id="209_mainModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="209_mainModuleChk">
												<label class="custom-control-label" for="209_mainModuleChk">KNOWLEDGE HUB </label>
											</div>
									</td>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 209_mainModuleChk" data-moduleid="209_mainModuleChk" data-submoduleid="210_subModuleChk" id="210_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="210_subModuleChk">
												<label class="custom-control-label" for="210_subModuleChk">CENTER OF EXCELLENCE</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 209_mainModuleChk 210_subModuleChk accessSelected" data-moduleid="209_mainModuleChk" data-submoduleid="210_subModuleChk" id="210_viewChk" onclick="checkAccess(this);" value="210#View" data-parsley-multiple="210_viewChk">
												<label class="custom-control-label" for="210_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 209_mainModuleChk" data-moduleid="209_mainModuleChk" data-submoduleid="211_subModuleChk" id="211_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="211_subModuleChk">
												<label class="custom-control-label" for="211_subModuleChk">TECHNOLOGY INNOVATION</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 209_mainModuleChk 211_subModuleChk accessSelected" data-moduleid="209_mainModuleChk" data-submoduleid="211_subModuleChk" id="211_viewChk" onclick="checkAccess(this);" value="211#View" data-parsley-multiple="211_viewChk">
												<label class="custom-control-label" for="211_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 209_mainModuleChk" data-moduleid="209_mainModuleChk" data-submoduleid="212_subModuleChk" id="212_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="212_subModuleChk">
												<label class="custom-control-label" for="212_subModuleChk">STARTUP DETAILS</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 209_mainModuleChk 212_subModuleChk accessSelected" data-moduleid="209_mainModuleChk" data-submoduleid="212_subModuleChk" id="212_viewChk" onclick="checkAccess(this);" value="212#View" data-parsley-multiple="212_viewChk">
												<label class="custom-control-label" for="212_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 209_mainModuleChk" data-moduleid="209_mainModuleChk" data-submoduleid="213_subModuleChk" id="213_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="213_subModuleChk">
												<label class="custom-control-label" for="213_subModuleChk">PUBLICATION DETAILS</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 209_mainModuleChk 213_subModuleChk accessSelected" data-moduleid="209_mainModuleChk" data-submoduleid="213_subModuleChk" id="213_viewChk" onclick="checkAccess(this);" value="213#View" data-parsley-multiple="213_viewChk">
												<label class="custom-control-label" for="213_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 209_mainModuleChk" data-moduleid="209_mainModuleChk" data-submoduleid="214_subModuleChk" id="214_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="214_subModuleChk">
												<label class="custom-control-label" for="214_subModuleChk">NEW INITIATIVE</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 209_mainModuleChk 214_subModuleChk accessSelected" data-moduleid="209_mainModuleChk" data-submoduleid="214_subModuleChk" id="214_viewChk" onclick="checkAccess(this);" value="214#View" data-parsley-multiple="214_viewChk">
												<label class="custom-control-label" for="214_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 209_mainModuleChk" data-moduleid="209_mainModuleChk" data-submoduleid="215_subModuleChk" id="215_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="215_subModuleChk">
												<label class="custom-control-label" for="215_subModuleChk">SOCIAL RESPONSIBILTIES</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 209_mainModuleChk 215_subModuleChk accessSelected" data-moduleid="209_mainModuleChk" data-submoduleid="215_subModuleChk" id="215_viewChk" onclick="checkAccess(this);" value="215#View" data-parsley-multiple="215_viewChk">
												<label class="custom-control-label" for="215_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

											


							

									<tr> 
									
									<td rowspan="4">
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input" id="216_mainModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="216_mainModuleChk">
												<label class="custom-control-label" for="216_mainModuleChk">REPORT</label>
											</div>
									</td>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 216_mainModuleChk" data-moduleid="216_mainModuleChk" data-submoduleid="217_subModuleChk" id="217_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="217_subModuleChk">
												<label class="custom-control-label" for="217_subModuleChk">SUMMARY REPORT</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 216_mainModuleChk 217_subModuleChk accessSelected" data-moduleid="216_mainModuleChk" data-submoduleid="217_subModuleChk" id="217_viewChk" onclick="checkAccess(this);" value="217#View" data-parsley-multiple="217_viewChk">
												<label class="custom-control-label" for="217_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 216_mainModuleChk" data-moduleid="216_mainModuleChk" data-submoduleid="218_subModuleChk" id="218_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="218_subModuleChk">
												<label class="custom-control-label" for="218_subModuleChk">FINANCIAL REPORT</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 216_mainModuleChk 218_subModuleChk accessSelected" data-moduleid="216_mainModuleChk" data-submoduleid="218_subModuleChk" id="218_viewChk" onclick="checkAccess(this);" value="218#View" data-parsley-multiple="218_viewChk">
												<label class="custom-control-label" for="218_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 216_mainModuleChk" data-moduleid="216_mainModuleChk" data-submoduleid="219_subModuleChk" id="219_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="219_subModuleChk">
												<label class="custom-control-label" for="219_subModuleChk">CUSTOM ON DEMAND REPORT</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 216_mainModuleChk 219_subModuleChk accessSelected" data-moduleid="216_mainModuleChk" data-submoduleid="219_subModuleChk" id="219_viewChk" onclick="checkAccess(this);" value="219#View" data-parsley-multiple="219_viewChk">
												<label class="custom-control-label" for="219_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

										<tr>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 216_mainModuleChk" data-moduleid="216_mainModuleChk" data-submoduleid="220_subModuleChk" id="220_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="220_subModuleChk">
												<label class="custom-control-label" for="220_subModuleChk">BI REPORT</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 216_mainModuleChk 220_subModuleChk accessSelected" data-moduleid="216_mainModuleChk" data-submoduleid="220_subModuleChk" id="220_viewChk" onclick="checkAccess(this);" value="220#View" data-parsley-multiple="220_viewChk">
												<label class="custom-control-label" for="220_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

											


							

									<tr> 
									
									<td rowspan="1">
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input" id="221_mainModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="221_mainModuleChk">
												<label class="custom-control-label" for="221_mainModuleChk">LEGAL CASE</label>
											</div>
									</td>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 221_mainModuleChk" data-moduleid="221_mainModuleChk" data-submoduleid="222_subModuleChk" id="222_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="222_subModuleChk">
												<label class="custom-control-label" for="222_subModuleChk">LEGAL CASE</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 221_mainModuleChk 222_subModuleChk accessSelected" data-moduleid="221_mainModuleChk" data-submoduleid="222_subModuleChk" id="222_viewChk" onclick="checkAccess(this);" value="222#View" data-parsley-multiple="222_viewChk">
												<label class="custom-control-label" for="222_viewChk"></label>
											</div>
									</td>



									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 221_mainModuleChk 222_subModuleChk accessSelected" data-moduleid="221_mainModuleChk" data-submoduleid="222_subModuleChk" id="222_addChk" onclick="checkAccess(this);" value="222#Add" data-parsley-multiple="222_addChk">
												<label class="custom-control-label" for="222_addChk"></label>
											</div>
									</td>



									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 221_mainModuleChk 222_subModuleChk accessSelected" data-moduleid="221_mainModuleChk" data-submoduleid="222_subModuleChk" id="222_updateChk" onclick="checkAccess(this);" value="222#Update" data-parsley-multiple="222_updateChk">
												<label class="custom-control-label" for="222_updateChk"></label>
											</div>
									</td>



									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 221_mainModuleChk 222_subModuleChk accessSelected" data-moduleid="221_mainModuleChk" data-submoduleid="222_subModuleChk" id="222_deleteChk" onclick="checkAccess(this);" value="222#Delete" data-parsley-multiple="222_deleteChk">
												<label class="custom-control-label" for="222_deleteChk"></label>
											</div>
									</td>
 

									
 

 							
									 
									</tr>
									

											


							

									<tr> 
									
									<td rowspan="1">
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input" id="223_mainModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="223_mainModuleChk">
												<label class="custom-control-label" for="223_mainModuleChk">CORRESPONDANCE</label>
											</div>
									</td>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 223_mainModuleChk" data-moduleid="223_mainModuleChk" data-submoduleid="224_subModuleChk" id="224_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="224_subModuleChk">
												<label class="custom-control-label" for="224_subModuleChk">CORRESPONDANCE</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 223_mainModuleChk 224_subModuleChk accessSelected" data-moduleid="223_mainModuleChk" data-submoduleid="224_subModuleChk" id="224_viewChk" onclick="checkAccess(this);" value="224#View" data-parsley-multiple="224_viewChk">
												<label class="custom-control-label" for="224_viewChk"></label>
											</div>
									</td>



									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 223_mainModuleChk 224_subModuleChk accessSelected" data-moduleid="223_mainModuleChk" data-submoduleid="224_subModuleChk" id="224_addChk" onclick="checkAccess(this);" value="224#Add" data-parsley-multiple="224_addChk">
												<label class="custom-control-label" for="224_addChk"></label>
											</div>
									</td>



									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 223_mainModuleChk 224_subModuleChk accessSelected" data-moduleid="223_mainModuleChk" data-submoduleid="224_subModuleChk" id="224_updateChk" onclick="checkAccess(this);" value="224#Update" data-parsley-multiple="224_updateChk">
												<label class="custom-control-label" for="224_updateChk"></label>
											</div>
									</td>



									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 223_mainModuleChk 224_subModuleChk accessSelected" data-moduleid="223_mainModuleChk" data-submoduleid="224_subModuleChk" id="224_deleteChk" onclick="checkAccess(this);" value="224#Delete" data-parsley-multiple="224_deleteChk">
												<label class="custom-control-label" for="224_deleteChk"></label>
											</div>
									</td>
 

									
 

 							
									 
									</tr>
									

											


							

									<tr> 
									
									<td rowspan="1">
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input" id="225_mainModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="225_mainModuleChk">
												<label class="custom-control-label" for="225_mainModuleChk">CALENDER</label>
											</div>
									</td>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 225_mainModuleChk" data-moduleid="225_mainModuleChk" data-submoduleid="226_subModuleChk" id="226_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="226_subModuleChk">
												<label class="custom-control-label" for="226_subModuleChk">CALENDER</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 225_mainModuleChk 226_subModuleChk accessSelected" data-moduleid="225_mainModuleChk" data-submoduleid="226_subModuleChk" id="226_viewChk" onclick="checkAccess(this);" value="226#View" data-parsley-multiple="226_viewChk">
												<label class="custom-control-label" for="226_viewChk"></label>
											</div>
									</td>


									<td></td> 



									<td></td> 



									<td></td> 

 

									
 

 							
									 
									</tr>
									

											


							

									<tr> 
									
									<td rowspan="1">
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input" id="227_mainModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="227_mainModuleChk">
												<label class="custom-control-label" for="227_mainModuleChk">SETTINGS</label>
											</div>
									</td>

									 
									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 227_mainModuleChk" data-moduleid="227_mainModuleChk" data-submoduleid="228_subModuleChk" id="228_subModuleChk" onclick="checkSubmodules(this);" data-parsley-multiple="228_subModuleChk">
												<label class="custom-control-label" for="228_subModuleChk">WEBSITE CMS</label>
											</div>
									</td>


									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 227_mainModuleChk 228_subModuleChk accessSelected" data-moduleid="227_mainModuleChk" data-submoduleid="228_subModuleChk" id="228_viewChk" onclick="checkAccess(this);" value="228#View" data-parsley-multiple="228_viewChk">
												<label class="custom-control-label" for="228_viewChk"></label>
											</div>
									</td>



									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 227_mainModuleChk 228_subModuleChk accessSelected" data-moduleid="227_mainModuleChk" data-submoduleid="228_subModuleChk" id="228_addChk" onclick="checkAccess(this);" value="228#Add" data-parsley-multiple="228_addChk">
												<label class="custom-control-label" for="228_addChk"></label>
											</div>
									</td>



									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 227_mainModuleChk 228_subModuleChk accessSelected" data-moduleid="227_mainModuleChk" data-submoduleid="228_subModuleChk" id="228_updateChk" onclick="checkAccess(this);" value="228#Update" data-parsley-multiple="228_updateChk">
												<label class="custom-control-label" for="228_updateChk"></label>
											</div>
									</td>



									<td>
											<div class="custom-control custom-checkbox mr-3">
												<input type="checkbox" class="custom-control-input 227_mainModuleChk 228_subModuleChk accessSelected" data-moduleid="227_mainModuleChk" data-submoduleid="228_subModuleChk" id="228_deleteChk" onclick="checkAccess(this);" value="228#Delete" data-parsley-multiple="228_deleteChk">
												<label class="custom-control-label" for="228_deleteChk"></label>
											</div>
									</td>
 

									
 

 							
									 
									</tr>
									

											

							  						  			
						 
		  			   		 	
              	</tbody>
              </table>
                </div>
            </div>
        </div>
        </div>
        
        <!-- /.container-fluid -->
        <div class="col-md-12 submit_btn p-3">
    <a class="btn btn-primary btn-sm text-white" onclick="location.href='<?php echo base_url();?>admin/cmsManagenent_dashboard'">Back</a>
</div>
</div>


