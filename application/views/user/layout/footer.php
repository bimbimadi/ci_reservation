 <!-- Footer -->
 <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Your Website 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="poliklinikModal1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Poliklinik Anak</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
         <?php echo form_open('umum/add/');?>
         <div class="form-group">
          <label>Pasien</label>
           <select name="id_pasien" class="form-control">
            <?php foreach ($pasien as $row) {
             echo "<option value='$row->id_pasien'>$row->nama_pasien</option>";
            }?>
          </select>
         </div>
         <div class="form-group">
          <label>Poli</label>
           <select name="id_poli" class="form-control">
            <option>--- Pilih Poli ---</option>
            <?php foreach ($poli as $row) {
             echo "<option value='$row->id_poli'>$row->nama_poli</option>";
            }?>
          </select>
         </div>
         <div class="form-group">
          <label>Dokter</label>
           <select name="id_dokter" class="form-control">
            <option>--- Pilih Dokter ---</option>
            <?php foreach ($dokter as $row) {
             echo "<option value='$row->id_dokter'>$row->nama_dokter</option>";
            }?>
          </select>
         </div>
         <div class="form-group">
                <label>Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" placeholder="Pilih Tanggal">
        </div>
        <div class="form-group">
          <label>Waktu</label>
                <a class="btn btn-primary form-control" data-toggle="collapse" href="#waktuanak" role="button" aria-expanded="false" aria-controls="collapseExample">
                  Pilih Waktu
                </a>
              <div class="collapse" id="waktuanak">
                <div class="card card-body">

                  <div class="btn-group-toggle" data-toggle="buttons">
                   <?php foreach ($waktu as $row) :?>
                    <label class="btn btn-outline-primary">
                      <input type="radio" name="id_waktu" autocomplete="off" value="<?php echo $row->id_waktu; ?>"><?php echo $row->waktu;?>  
                    </label>
                  <?php endforeach;?>
                </div>
                </div>
              </div>
         </div>
          </div>
          <div class="modal-footer">
             <button type="submit" class="btn btn-success btn-wd">Simpan</button>
              <a href="<?php echo base_url('/'); ?>" class="btn btn-danger btn-wd">Batal</a>
            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="btn-pesan" class="btn btn-primary" data-toggle="modal" data-target="#booking-confirmation-modal">Reserve</button>-->
          </div>
          <?php echo form_close(); ?>

        </div>
      </div>
    </div>


    <div class="modal" tabindex="-1" role="dialog" id="poliklinikModal2">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Poliklinik Bedah</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="doctor">List Doctor</label>
            <select class="form-control">
              <option>-- Choos Doctor --</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
            <label>Hari dan Waktu Praktek</label>
            <div class="row">
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Day --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Time --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
            </div>
            <label for="doctor">Tanggal</label>
            <select class="form-control">
              <option>-- Choos Date --</option>
              <option>11/04/2018</option>
              <option>12/04/2018</option>
              <option>13/04/2018</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#booking-confirmation-modal">Reserve</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="poliklinikModal3">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Poliklinik Gigi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="doctor">List Doctor</label>
            <select class="form-control">
              <option>-- Choos Doctor --</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
            <label>Hari dan Waktu Praktek</label>
            <div class="row">
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Day --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Time --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
            </div>
            <label for="doctor">Tanggal</label>
            <select class="form-control">
              <option>-- Choos Date --</option>
              <option>11/04/2018</option>
              <option>12/04/2018</option>
              <option>13/04/2018</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#booking-confirmation-modal">Reserve</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="poliklinikModal4">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Poliklinik Jantung</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="doctor">List Doctor</label>
            <select class="form-control">
              <option>-- Choos Doctor --</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
            <label>Hari dan Waktu Praktek</label>
            <div class="row">
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Day --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Time --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
            </div>
            <label for="doctor">Tanggal</label>
            <select class="form-control">
              <option>-- Choos Date --</option>
              <option>11/04/2018</option>
              <option>12/04/2018</option>
              <option>13/04/2018</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#booking-confirmation-modal">Reserve</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="poliklinikModal5">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Poliklinik Kulit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="doctor">List Doctor</label>
            <select class="form-control">
              <option>-- Choos Doctor --</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
            <label>Hari dan Waktu Praktek</label>
            <div class="row">
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Day --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Time --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
            </div>
            <label for="doctor">Tanggal</label>
            <select class="form-control">
              <option>-- Choos Date --</option>
              <option>11/04/2018</option>
              <option>12/04/2018</option>
              <option>13/04/2018</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#booking-confirmation-modal">Reserve</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="poliklinikModal6">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Poliklinik Mata</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="doctor">List Doctor</label>
            <select class="form-control">
              <option>-- Choos Doctor --</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
            <label>Hari dan Waktu Praktek</label>
            <div class="row">
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Day --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="col-sm-6">
                <select class="form-control">
                  <option>-- Choos Time --</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
            </div>
            <label for="doctor">Tanggal</label>
            <select class="form-control">
              <option>-- Choos Date --</option>
              <option>11/04/2018</option>
              <option>12/04/2018</option>
              <option>13/04/2018</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#booking-confirmation-modal">Reserve</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="booking-confirmation-modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Booking Confirmation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <?php echo form_open('umum/add/'.$pemesanan['id_pemesanan']);?>
            <p>ID Reservasi : <?php echo $umum->id_pemesanan; ?> </p>
            <p>Poliklinik   : </p>
            <p>Dokter       : </p>
            <p>ID Pasien    : </p>
            <p>Nama Pasien  : </p>
            <p>Tanggal      : </p>
            <p>Hari         : </p>
            <p>Jam          : </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="button" class="btn btn-primary">Yes</button>
          </div>
          <?php echo form_close();?>
        </div>
      </div>
    </div>
    

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url(); ?>assets/js/freelancer.min.js"></script>

  </body>

</html>
