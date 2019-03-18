<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Get In Touch</button>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $Company;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6 text-left">
            <p><?php echo $Mission;?></p>
            <p><img src="images/elements/modal.jpg" class="img-fluid img-thumbnail rounded"></p>
            <p>Call Us Now: <?php echo $Phone;?></p>
            <p><?php echo $Experience;?></p>
            <p><?php echo $Schedule;?></p>
            <p><?php echo $Bilingual;?></p>
          </div>
          <div class="col-md-6">
            <?php include 'php/section/formulario.php';?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>