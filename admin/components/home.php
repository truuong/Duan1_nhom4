<section class="content">
      <div class="container-fluid">
        <div class="row mt-3">
          <div class="col-lg-4 col-md-6">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title">Tổng Số Danh Mục</h5>
                      <?php
                        echo '<p class="card-text">'.count($listthongke).'</p>';
                        // count($listthongke)
                      ?>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title">Số Lượng Sản Phẩm</h5>
                      <?php
                        echo '<p class="card-text">'.count($countsluongsp).'</p>';
                        // count($listthongke)
                      ?>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title">Số lượng đơn hàng</h5>
                      <?php
                        echo '<p class="card-text">'.count($countorder).'</p>';
                        // count($listthongke)
                      ?>
                  </div>
              </div>
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <div id="piechart" style="width: 1300px; height: 500px;"></div>
  </div>
