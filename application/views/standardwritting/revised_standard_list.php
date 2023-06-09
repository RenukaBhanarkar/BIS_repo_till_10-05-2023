    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Review Management</h1>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url().'Admin/dashboard';?>" >Sub Admin Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/exchange_forum';?>" >Exchange Forum</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url().'quiz/organizing_quiz';?>" >Competition</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url().'Standardswritting/standard_writting_dashboard';?>" >Standard Writting</a></li>
                <li class="breadcrumb-item active" aria-current="page">Review Management</li>
                
                </ol>
            </nav>
        </div>

        <!-- Content Row -->
       <div class="row">
            <div class="col-12 mt-3">
                <div class="card border-top card-body table-responsive">
                    <table id="example" class="table-bordered nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Competition ID</th>
                                <th>Name of Competition</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Banner</th>
                                <th>Status</th>
                                <th>Submitted Task</th>
                                <th>Task Under Review</th>
                                <th>Reviewed Task</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>12345</td>
                              <td>Miscellaneous Competition</td>
                              <td>12/03/2023</td>
                              <td>12/03/2023</td>
                              <td><img src="#" alt="#" class="" width="10%"></td>
                              <td>Pending</td>
                              <td>task</td>
                              <td>task</td>
                              <td>task</td>
                              <td class="d-flex">
                                 <a href="<?php echo base_url(); ?>Standardswritting/assign_review/" class="btn btn-success btn-sm mr-2" >Assign For Review</a>
                                 <a href="<?php echo base_url(); ?>Standardswritting/task_under_review/" class="btn btn-info btn-sm mr-2" >Task Under Review</a>
                                 <a href="<?php echo base_url(); ?>Standardswritting/submission_view/" class="btn btn-primary btn-sm mr-2" >View Details</a>
                                 <a href="<?php echo base_url(); ?>Standardswritting/task_reviewed" class="btn btn-warning btn-sm mr-2" >Task Reviewed</a>
                              </td>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    