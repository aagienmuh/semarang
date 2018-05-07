<?php require 'header.php'; ?>


  <div class="vendor row">

      <div style="height:100px;width:250px;background:red;float:left">
          <div class="left">

            <div class="profilebox">
                  <div class="centerY">
                      <div class="circle" style="border:4px solid rgb(61, 214, 151);position:relative">
                          <div class="centerY" align='center'>
                              <i class="fa fa-user" style="font-size:24pt;color:rgb(34, 42, 43);"></i>
                          </div>
                      </div>
                      <h6 style="padding:5px">Hi, Budi</h6>
                      <h6 style="padding:0px;"><span style="color:white;background:rgb(61, 214, 151);padding:2.5px;border-radius:5px">Online</span></h6>
                  </div>
            </div>

            <div class="navigasi">
                <ul>
                  <li><a href="index.php">Dashboard</a><span class="icon"><i class="fa fa-dashboard"></i></span></li>
                  <li><a href="member.php">Artikel</a><span class="icon"><i class="fa fa-pencil"></i></span></li>
                  <li><a href="javascript:alert('Maaf Menu Belum Tersedia')">Contact</a><span class="icon"><i class="fa fa-address-book"></i></span></li>
                </ul>
            </div>

          </div>
      </div>
      <div style="width:calc(100% - 250px);float:left;">
        <div style="padding:5px 25px">
          <div class="row">
            
            

            </div>
          </div>
          <div class="box">
            <h2 style="padding:10px;display:block;border-bottom:1px solid rgba(0, 0, 0, 0.03)">Dashboard</h2>
            <div style="position:relative;height:300px;">
              <div class="centerY" align="center">
                <h2>DESA SEMARANG</h2>
                <p style="padding:5px;"><br> dari Aagien Muhammad F P</p>
              </div>
            </div>
          </div>
          <p style="font-size:8pt;opacity:0.3;margin:10px 0;">&copy; Hafidz Ihza Pratama - <?php echo Date('Y') ?> All Rights Reserved</p>
        </div>
      </div>
  </div>



<?php require 'footer.php'; ?>
