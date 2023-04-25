    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Quiz</h1>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manage Quiz</li>
          </ol>
        </nav>
      </div>
      <?php if (encryptids("D", $_SESSION['admin_type']) == 3) { ?>
        <div class="row">
          <div class="col-12">
            <div class="card border-top card-body">
              <div>
                <button type="button" class="btn btn-primary btn-sm mr-2" onclick="location.href='<?= base_url(); ?>Quiz/quiz_archive'">Archive</button>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      <?php
      if ($this->session->flashdata('MSG')) {
        echo $this->session->flashdata('MSG');
      }
      ?>
      <div class="row">
        <div class="col-12 mt-3">
          <div class="card border-top card-body">
            <table id="listView" class="hover table-bordered table-responsive" style="width:100%">
              <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Quiz ID</th>
                  <th>Quiz Title</th>
                  <th>Quiz Start Date</th>
                  <th>Quiz End Date</th>
                  <th>Total Questions in Quiz</th>
                  <th>Total Questions in QB</th>
                  <th>Total Marks</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if (!empty($allquize)) {
                  $i = 1;
                  foreach ($allquize as $quiz) { ?>
                    <tr>
                      <td><?= $i++ ?></td>
                      <td><?= $quiz['quiz_id'] ?></td>
                      <td><?= $quiz['title'] ?></td>

                      <td><?= date("d-m-Y", strtotime($quiz['start_date'])); ?></td>
                      <td><?= date("d-m-Y", strtotime($quiz['end_date'])); ?></td>
                      <td><?= $quiz['total_question'] ?></td>
                      <td><?= $quiz['qbquestion'] ?></td>
                      <td><?= $quiz['total_mark'] ?></td>
                      <td><?= $quiz['status_name'] ?></td>
                      <td class="d-flex border-bottom-0">
                        <?php if (encryptids("D", $_SESSION['admin_type']) == 2) {
                          if ($quiz['status'] == 2) { ?>
                            <a href="quiz_view/<?= $quiz['id'] ?>" class="btn btn-primary btn-sm mr-2">Approve/ Reject</a>
                        <?php }
                        } ?>
                        <?php if (encryptids("D", $_SESSION['admin_type']) == 2) {
                          if ($quiz['status'] == 3 || $quiz['status'] == 4 || $quiz['status'] == 5 || $quiz['status'] == 6) {
                        ?>
                            <a href="quiz_view/<?= $quiz['id'] ?>" class="btn btn-primary btn-sm mr-2">View</a>
                        <?php }
                        } ?>

                        <?php if (encryptids("D", $_SESSION['admin_type']) == 3) { ?>
                          <a href="quiz_view/<?= $quiz['id'] ?>" class="btn btn-primary btn-sm mr-2">View</a>
                        <?php } ?>

                        <?php if (encryptids("D", $_SESSION['admin_type']) == 3) { ?>
                           
                          <?php if ($quiz['status'] == 10 ) { ?>
                            <a href="sendApprove/<?= $quiz['id'] ?>" class="btn btn-success btn-sm mr-2">Send To Approve</a>

                          <?php } ?>

                          <?php if ($quiz['status'] == 3 || $quiz['status'] == 6) { ?>
                            <a href="publishQuiz/<?= $quiz['id'] ?>" class="btn btn-success btn-sm mr-2">Publish</a>

                          <?php } ?>
                          <?php if ($quiz['status'] == 5) { ?>

                            <a href="unPublishQuiz/<?= $quiz['id'] ?>" class="btn btn-info btn-sm mr-2">UnPublish</a>

                          <?php } ?>
                          <!-- 6-unpublished 7-closed-->
                          <?php if ($quiz['status'] == 6 || $quiz['status'] == 7) { ?>
                           
                            <button type="button" class="btn btn-info btn-sm mr-2" data-id="<?= $quiz['id'] ?>" id="archiveQuiz">Archive</button>
                          <?php } ?>

                          <?php if ($quiz['status'] == 1 || $quiz['status'] == 4 || $quiz['status'] == 10) { ?>
                            <a href="editquiz/<?= $quiz['id'] ?>" class="btn btn-info btn-sm mr-2 text-white">Edit</a>

                            <!-- <a href="sendApprove/<?= $quiz['id'] ?>" class="btn btn-primary btn-sm mr-2">Create</a> -->

                            <button onClick="" class="btn btn-danger btn-sm mr-2">Delete</button>

                          <?php } ?>
                        <?php } ?>
                      </td>
                    </tr>
                <?php }
                } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <!-- Modal -->
    <div class="modal fade" id="createForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to Create?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <script>
      $(document).ready(function() {
        $('#listView').DataTable({
        scrollX: true,
    });
        $('#listView').on('click', '#archiveQuiz', function(e) {
          e.preventDefault();
          const $root = $(this);
          var id = $root.data('id');
          jQuery.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>quiz/changeStatus',
            dataType: 'json',
            data: {
              "id": id,
              "status": 9
            },
            success: function(res) {
              if (res.status == 0) {
                alert(res.message);

              } else {
                alert(res.message);
                window.location.replace("<?php echo base_url(); ?>quiz/manage_quiz_list");
              }
            },
            error: function(xhr, status, error) {
              //toastr.error('Failed to add '+xData.name+' in wishlist.');
              console.log(error);
            }
          });

        });
      });
    </script>