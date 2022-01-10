@extends('layouts.main')

@section('content')
<!-- <?php
   if(isset($_GET['login'])){
      if($_GET['memberID'] != 'admin' || $_GET['memberPWD'] != '123456'){
         echo "<script language='JavaScript'>alert('賬號不存在');</script>";
      }
      else{
         echo "<script language='JavaScript'>alert('登入成功');</script>";
         $url = "home";
         $time = 0;
         header("refresh:{$time};url={$url}");
      }
   }
?> -->

<!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->

   <div class="wrapper">
      <section class="login-content">
         <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
               <div class="col-md-5">
                  <div class="card">
                     <div class="card-body">
                        <div class="auth-logo">
                           <!-- <img src="static/picture/logo.png" class="img-fluid rounded-normal" alt="logo"> -->
                        </div>
                        <ul class="nav nav-pills mb-3 nav-fill" id="pills-tab-1" role="tablist">
                           <li class="nav-item">
                              <a class="nav-link active" id="pills-home-tab-fill" data-toggle="pill"
                                 href="#pills-home-fill" role="tab" aria-controls="pills-home"
                                 aria-selected="true">會員登入</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="pills-profile-tab-fill" data-toggle="pill"
                                 href="#pills-profile-fill" role="tab" aria-controls="pills-profile"
                                 aria-selected="false">一般用戶</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="pills-contact-tab-fill" data-toggle="pill"
                                 href="#pills-contact-fill" role="tab" aria-controls="pills-contact"
                                 aria-selected="false">註冊會員</a>
                           </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent-1">
                           <div class="tab-pane fade show active" id="pills-home-fill" role="tabpanel"
                              aria-labelledby="pills-home-tab-fill">
                              <h2 class="mb-2 text-center">會員登入</h2>
                              <p class="text-center">請輸入（賬號密碼）</p>
                              <form>
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                          <label>賬號</label>
                                          <input class="form-control" type="text" placeholder="請輸入賬號" name="memberID">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                          <label>密碼</label>
                                          <input class="form-control" type="password" placeholder="請輸入密碼" name="memberPWD">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="d-flex justify-content-between align-items-center">
                                    <span></span>
                                    <button type="submit" class="btn btn-primary" name="login">登入</button>
                                 </div>
                              </form>
                                 </div>
                           <div class="tab-pane fade" id="pills-profile-fill" role="tabpanel"
                              aria-labelledby="pills-profile-tab-fill">
                              <h2 class="mb-2 text-center">用戶登入</h2>
                              <p class="text-center">請輸入（賬號密碼）</p>
                              <form>
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                          <label>設置登入密碼</label>
                                          <input class="form-control" type="text" placeholder="請設置登入密碼" name="nMemberPWD">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                          <label>確認登入密碼</label>
                                          <input class="form-control" type="password" placeholder="請確認登入密碼" name="checkPWD">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="d-flex justify-content-between align-items-center">
                                    <span></span>
                                    <button type="submit" class="btn btn-primary">登入</button>
                                 </div>
                              </form>
      
                           </div>
                           <div class="tab-pane fade" id="pills-contact-fill" role="tabpanel"
                              aria-labelledby="pills-contact-tab-fill">
                              <h2 class="mb-2 text-center">會員註冊</h2>
                              <p class="text-center">請輸入（賬號密碼）</p>
                              <form>
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                          <label>賬號</label>
                                          <input class="form-control" type="text" placeholder="請設置賬號" name="registerID">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                          <label>密碼</label>
                                          <input class="form-control" type="password" placeholder="請設置密碼" name="registerPWD">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="d-flex justify-content-between align-items-center">
                                    <span></span>
                                    <button type="submit" class="btn btn-primary">註冊</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>

   <!-- Backend Bundle JavaScript -->
   <script src="static/js/backend-bundle.min.js"></script>
   <!-- Chart Custom JavaScript -->
   <script src="static/js/customizer.js"></script>

   <script src="static/js/sidebar.js"></script>

   <!-- Flextree Javascript-->
   <script src="static/js/flex-tree.min.js"></script>
   <script src="static/js/tree.js"></script>

   <!-- Table Treeview JavaScript -->
   <script src="static/js/table-treeview.js"></script>

   <!-- SweetAlert JavaScript -->
   <script src="static/js/sweetalert.js"></script>

   <!-- Vectoe Map JavaScript -->
   <script src="static/js/vector-map-custom.js"></script>

   <!-- Chart Custom JavaScript -->
   <script src="static/js/chart-custom.js"></script>
   <script src="static/js/01.js"></script>
   <script src="static/js/02.js"></script>

   <!-- slider JavaScript -->
   <script src="static/js/slider.js"></script>

   <!-- Emoji picker -->
   <script src="static/js/index.js" type="module"></script>


   <!-- app JavaScript -->
   <script src="../static/js/app.js"></script>
   @endsection