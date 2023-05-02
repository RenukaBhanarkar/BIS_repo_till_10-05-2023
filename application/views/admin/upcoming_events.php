<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Upcoming Events</h1>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/';?>" >Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url().'admin/exchange_forum';?>" >Exchange Forum</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url().'admin/cmsManagenent_dashboard';?>" >CMS</a></li>
                <li class="breadcrumb-item active" aria-current="page">Upcoming Events</li>
            </ol>
        </nav>

    </div>


    <!-- Content Row -->
  <div class="row">
        <div class="col-12">
            <div class="card border-top card-body">
                <div>
                    <button type="button" class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#latestform">Add Events</button>
                    <button type="button" class="btn btn-primary btn-sm mr-2" >Archived Events</button>
                    <div class="modal fade" id="latestform" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add New Events</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                   <div class="row">
                                                        <div class="mb-2 col-md-4">
                                                            <label class="d-block text-font">Event Title</label>
                                                            <input type="text" class="form-control input-font" name="banner_caption" id="banner_caption" placeholder="Enter event Title" value="" required>
                                                        </div>
                                                   <div class="mb-2 col-md-4">
                                                            <label class="d-block">Upload Thumbnail<sup class="text-danger">*</sup></label>
                                                            <div class="d-flex">
                                                            <div>
                                                                <input type="file" id="thumbnail" name="thumbnail" class="form-control-file" accept="image/png, image/jpeg,image/jpg" onchange="loadThumbnail(event)">
                                                                <span class="error_text"></span>
                                                            </div>
                                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ThumbnailModal" fdprocessedid="3a6f0r">
                                                                Preview 
                                                            </button>
                                                            </div>
                                                   </div>
                                                   </div>
                                                   <div class="row">
                                                        <div class="mb-2 col-md-4">
                                                            <label class="d-block text-font">Link (if any)</label>
                                                            <input type="text" class="form-control input-font" name="banner_caption" id="banner_caption" value="" required>
                                                        </div>
                                                   </div>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-warning" data-dismiss="modal" id="saveQueBank">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                   
                </div>

            </div>
            </div>
  </div>
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card border-top card-body">
                    <table id="example" class="table-bordered">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Posted on</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                               <tr>
                                        <td>1</td>
                                        <td>News Title</td>
                                        <td><img src="#" alt="#" class="" width="50%"></td>
                                        <td>12/03/2023</td>
                                        <td class="d-flex border-bottom-0">
                                            <button  onclick="location.href='letest_news_view'" class="btn btn-primary btn-sm mr-2 text-white">View</button>
                                            <button  class="btn btn-info btn-sm mr-2 text-white" data-toggle="modal" data-target="#editform">Edit</button>
                                            <button  class="btn btn-danger btn-sm mr-2 text-white" data-toggle="modal" data-target="#">Delete</button>
                                            <button  class="btn btn-success btn-sm mr-2 text-white" data-toggle="modal" data-target="#">Publish</button>
                                            <button  class="btn btn-warning btn-sm mr-2 text-white" data-toggle="modal" data-target="#">Unpublish</button>
                                            <button  class="btn btn-primary btn-sm mr-2 text-white" data-toggle="modal" data-target="#">Archive</button>
                                        </td>
                                    

                                        
                                    </tr>
                           

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        <div class="modal fade" id="editform" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add New Events</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                   <div class="row">
                                                        <div class="mb-2 col-md-4">
                                                            <label class="d-block text-font">Event Title</label>
                                                            <input type="text" class="form-control input-font" name="banner_caption" id="banner_caption" placeholder="Enter event Title" value="" required>
                                                        </div>
                                                   <div class="mb-2 col-md-4">
                                                            <label class="d-block">Upload Thumbnail<sup class="text-danger">*</sup></label>
                                                            <div class="d-flex">
                                                            <div>
                                                                <input type="file" id="thumbnail" name="thumbnail" class="form-control-file" accept="image/png, image/jpeg,image/jpg" onchange="loadThumbnail(event)">
                                                                <span class="error_text"></span>
                                                            </div>
                                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ThumbnailModal" fdprocessedid="3a6f0r">
                                                                Preview 
                                                            </button>
                                                            </div>
                                                   </div>
                                                   </div>
                                                   <div class="row">
                                                        <div class="mb-2 col-md-4">
                                                            <label class="d-block text-font">Link (if any)</label>
                                                            <input type="text" class="form-control input-font" name="banner_caption" id="banner_caption" value="" required>
                                                        </div>
                                                   </div>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-warning" data-dismiss="modal" id="saveQueBank">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        <!-- /.container-fluid -->
        <div class="col-md-12 submit_btn p-3">
    <a class="btn btn-primary btn-sm text-white" onclick="location.href='<?php echo base_url();?>admin/cmsManagenent_dashboard'">Back</a>
</div>
</div>

<script>
                        CKEDITOR.replace( 'description' );
                        CKEDITOR.replace( 'description_1' );

</script>

