<?php
  include("weatherService.php");
 ?>

<section id="generator" class="generator">
   <div class="container">
      <div class="row">
         <div class="col-lg-10 col-lg-offset-1 text-center">
            <h2>Outfit Generator
            </h2>
            <p>That's your random outfit below. If you're a member, you can collect an item by clicking the
               little heart icon near the top right of its card. Or start a post about your new creation in the
               forum.
               Create more outfits easily and quickly. Just click the reroll button below and Bob's your
               uncle.
            </p>
            <hr class="small">
            <div class="row">
               <table class="tg">
                  <tr>
                     <th class="tg-cxi2">
                        <div class="col-md-6">
                           <div class="generator-item">
                              <div class="img">
                                 <a href="#">
                                    <?php
                                       $cat_sql = "SELECT thumbnail, name FROM tbl_clothes WHERE categoryIDFS = 5 ORDER BY rand() LIMIT 1;";
                                       $result = mysqli_query($dbconnect, $cat_sql);
                                       $row = mysqli_fetch_row($result);
                                       ?>
                                    <div class="opacity">
                                       <img class="img-generator img-responsive"src="/YouLookGood/img/<?= $row[0];?>" alt="Clothes" />
                                       <div class="middle">
                                          <div class="text">
                                             <p><?= $row[1];?></p>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </th>
                     <th class="tg-aby7">
                        <div class="col-md-6">
                           <div class="generator-item">
                              <div class="img">
                                 <a href="#">
                                    <?php
                                       $cat_sql = "SELECT thumbnail, name FROM tbl_clothes WHERE categoryIDFS = 4 ORDER BY rand() LIMIT 1;";
                                       $result = mysqli_query($dbconnect, $cat_sql);
                                       $row = mysqli_fetch_row($result);
                                       ?>
                                    <div class="opacity">
                                       <img class="img-generator img-responsive"src="/YouLookGood/img/<?= $row[0];?>" alt="Clothes" />
                                       <div class="middle">
                                          <div class="text">
                                             <p><?= $row[1];?></p>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </th>
                     <th class="tg-aby7">
                        <div class="col-md-6">
                           <div class="generator-item">
                              <div class="img">
                                <a href="#">
                                <img class="img-generator img-responsive" src="">
                                </a>
                              </div>
                           </div>
                        </div>
                     </th>
                  </tr>
                  <tr>
                     <td class="tg-aby7">
                        <div class="col-md-6">
                           <div class="generator-item">
                              <div class="img">
                                 <a href="#">
                                    <?php
                                       $cat_sql = "SELECT thumbnail, name FROM tbl_clothes WHERE categoryIDFS = 1 ORDER BY rand() LIMIT 1;";
                                       $result = mysqli_query($dbconnect, $cat_sql);
                                       $row = mysqli_fetch_row($result);
                                       ?>
                                    <div class="opacity">
                                       <img class="img-generator img-responsive"src="/YouLookGood/img/<?= $row[0];?>" alt="Clothes" />
                                       <div class="middle">
                                          <div class="text">
                                             <p><?= $row[1];?></p>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </td>
                     <td class="tg-aby7">
                        <div class="col-md-6">
                           <div class="generator-item">
                              <div class="img">
                                 <a href="#">
                                    <?php
                                       $cat_sql = "SELECT thumbnail, name FROM tbl_clothes WHERE categoryIDFS = 3 ORDER BY rand() LIMIT 1;";
                                       $result = mysqli_query($dbconnect, $cat_sql);
                                       $row = mysqli_fetch_row($result);
                                       ?>
                                    <div class="opacity">
                                       <img class="img-generator img-responsive"src="/YouLookGood/img/<?= $row[0];?>" alt="Clothes" />
                                       <div class="middle">
                                          <div class="text">
                                             <p><?= $row[1];?></p>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </td>
                     <td class="tg-aby7">
                        <div class="col-md-6">
                           <div class="generator-item">
                              <div class="img">
                                <a href="#">
                                   <?php
                                      $cat_sql = "SELECT thumbnail, name FROM tbl_clothes WHERE categoryIDFS = 2 ORDER BY rand() LIMIT 1;";
                                      $result = mysqli_query($dbconnect, $cat_sql);
                                      $row = mysqli_fetch_row($result);
                                      ?>
                                   <div class="opacity">
                                      <img class="img-generator img-responsive"src="/YouLookGood/img/<?= $row[0];?>" alt="Clothes" />
                                      <div class="middle">
                                         <div class="text">
                                            <p><?= $row[1];?></p>
                                         </div>
                                      </div>
                                   </div>
                                </a>
                              </div>
                           </div>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td class="tg-aby7">
                        <div class="col-md-6">
                           <div class="generator-item">
                              <div class="img">
                                 <a href="#">
                                 <img class="img-generator img-responsive" src="">
                                 </a>
                              </div>
                           </div>
                        </div>
                     </td>
                     <td class="tg-aby7">
                        <div class="col-md-6">
                           <div class="generator-item">
                              <div class="img">
                                 <a href="#">
                                    <?php
                                       $cat_sql = "SELECT thumbnail, name FROM tbl_clothes WHERE categoryIDFS = 6 ORDER BY rand() LIMIT 1;";
                                       $result = mysqli_query($dbconnect, $cat_sql);
                                       $row = mysqli_fetch_row($result);
                                       ?>
                                    <div class="opacity">
                                       <img class="img-generator img-responsive"src="/YouLookGood/img/<?= $row[0];?>" alt="Clothes" />
                                       <div class="middle">
                                          <div class="text">
                                             <p><?= $row[1];?></p>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </td>
                     <td class="tg-aby7">
                        <div class="col-md-6">
                           <div class="generator-item">
                              <div class="img">
                                <a href="#">
                                   <?php
                                      $result = mysqli_query($dbconnect, $query);
                                      $row = mysqli_fetch_row($result)
                                   ?>
                                   <div class="opacity">
                                      <img class="img-generator img-responsive"src="/YouLookGood/img/<?= $row[1];?>" alt="Clothes" />
                                      <div class="middle">
                                         <div class="text">
                                            <p><?= $row[0];?></p>
                                         </div>
                                      </div>
                                   </div>
                                </a>
                              </div>
                           </div>
                        </div>
                     </td>
                  </tr>
               </table>
            </div>
            <!-- /.row (nested) -->
            <input class="btn btn-lg btn-dark" type="button" value="Reroll!" onClick="window.location.reload()">
         </div>
         <!-- /.col-lg-10 -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
