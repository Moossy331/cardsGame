@extends('layouts.main')

@section('content')
<!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        @include('layouts.left_frame')
        @include('layouts.top_frame')

        <!-- 內容開始 -->
        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex flex-wrap align-items-center justify-content-between my-schedule mb-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb p-0 mb-0">
                                        <li class="breadcrumb-item"><a href="home">主頁</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">個人信息</li>
                                    </ol>
                                </nav>
                            </div>
                            <a href="home"
                                class="btn btn-primary btn-sm d-flex align-items-center justify-content-between">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" viewbox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-2">返回主頁</span>
                            </a>
                        </div>

                        <div class="card">
                            <div class="card-body p-0">
                                <div class="iq-edit-list usr-edit">
                                    <ul class="iq-edit-profile d-flex nav nav-pills">
                                        <li class="col-md-6 p-0">
                                            <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                                個人信息
                                            </a>
                                        </li>
                                        <li class="col-md-6 p-0">
                                            <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                                更改密碼
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="iq-edit-list-data">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <div class="header-title">
                                                <h4 class="card-title">個人信息</h4>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group row align-items-center">
                                                    <div class="col-md-12">
                                                        <div class="profile-img-edit">
                                                            <div class="crm-profile-img-edit">
                                                                <img class="crm-profile-pic rounded-circle avatar-100"
                                                                    src="static/picture/1.jpg" alt="profile-pic">
                                                                <div class="crm-p-image bg-primary">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        fill="none" viewbox="0 0 24 24"
                                                                        stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                                                        </path>
                                                                    </svg>
                                                                    <input class="file-upload" type="file"
                                                                        accept="image/*">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" row align-items-center">
                                                    <div class="form-group col-sm-6">
                                                        <label for="fname">名字：</label>
                                                        <input type="text" class="form-control" id="fname"
                                                            value="Barry">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="lname">姓：</label>
                                                        <input type="text" class="form-control" id="lname" value="Tech">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="uname">用戶名：</label>
                                                        <input type="text" class="form-control" id="uname"
                                                            value="Barry@01">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="cname">城市：</label>
                                                        <input type="text" class="form-control" id="cname"
                                                            value="Atlanta">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label class="d-block">性別：</label>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadio6" name="customRadio1"
                                                                class="custom-control-input" checked="">
                                                            <label class="custom-control-label" for="customRadio6"> 男性
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadio7" name="customRadio1"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio7">
                                                                女性 </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="dob">出生日期：</label>
                                                        <input class="form-control" id="dob" value="1984-01-24">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label>婚姻狀態：</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option selected="">單身</option>
                                                            <option>已婚</option>
                                                            <option>喪偶</option>
                                                            <option>離異</option>
                                                            <option>分居</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label>年齡：</label>
                                                        <select class="form-control" id="exampleFormControlSelect2">
                                                            <option selected="">--保密--</option>
                                                            <option>12-18</option>
                                                            <option>19-32</option>
                                                            <option>33-45</option>
                                                            <option>46-62</option>
                                                            <option>63 > </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label>國家：</label>
                                                        <select class="form-control" id="exampleFormControlSelect3">
                                                            <option>Caneda</option>
                                                            <option>Noida</option>
                                                            <option selected="">USA</option>
                                                            <option>India</option>
                                                            <option>Africa</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label>State:</label>
                                                        <select class="form-control" id="exampleFormControlSelect4">
                                                            <option>California</option>
                                                            <option>Florida</option>
                                                            <option selected="">Georgia</option>
                                                            <option>Connecticut</option>
                                                            <option>Louisiana</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <label>Address:</label>
                                                        <textarea class="form-control" name="address" rows="5"
                                                            style="line-height: 22px;"></textarea>
                                                    </div>
                                                </div>
                                                <button type="reset"
                                                    class="btn btn-outline-primary mr-2">重置</button>
                                                <button type="submit" class="btn btn-primary" name="submit">確認更改</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <div class="header-title">
                                                <h4 class="card-title">更改密碼</h4>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="cpass">當前密碼：</label>
                                                    <!-- <a href="javascript:;" class="float-right">Forgot Password</a> -->
                                                    <input type="Password" class="form-control" id="cpass" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="npass">新密碼：</label>
                                                    <input type="text" class="form-control" id="npass" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="vpass">驗證新密碼：</label>
                                                    <input type="Password" class="form-control" id="vpass" value="">
                                                </div>
                                                <button type="reset"
                                                    class="btn btn-outline-primary mr-2">重置</button>
                                                <button type="submit" class="btn btn-primary" name="submit">確認更改</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 內容結束 -->
    </div>
    <!-- Wrapper End-->
    @include('layouts.footer')
    
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
    <script src="static/js/app.js"></script>
@endsection