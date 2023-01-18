<?php
$this->title = 'Sign in';
$this->registerCssFile('@web/css/loginHome.css');
?>


<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/loginHome.css">

	</head>
    <body id="page-top">
<!-- test -->
    <!-- Page Wrapper -->
    <div id="wrapper">

       <?
        include('_sidebar.php');
       ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                        <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h5 mb-0 text-gray-800">Smart Hospital</h1>                       <
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">

                                <!-- <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2"><br>
                                            <div class="h6 mb-0 font-weight-bold text-primary text-uppercase mb-1">
                                                ผู้รับบริการวันนี้</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">36</div>
                                            <div class="h7 mb-0 font-weight-bold text-gray-800">(เดือนนี้ 161 คน / 263 ครั้ง)</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-stethoscope fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div> -->

                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2"><br>
                                            <div class="h6 mb-0 font-weight-bold text-warning text-uppercase mb-1">
                                            Admit วันนี้</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                                            <div class="h7 mb-0 font-weight-bold text-gray-800">(เดือนนี้ 43 คน / 43 ครั้ง)</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-heartbeat fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2"><br>
                                            <div class="h6 mb-0 font-weight-bold text-info text-uppercase mb-1">
                                            แพทย์แผนไทย วันนี้</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                                            <div class="h7 mb-0 font-weight-bold text-gray-800">(เดือนนี้ 3 คน / 3 ครั้ง)</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-cannabis fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-3">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2"><br>
                                            <div class="h6 mb-0 font-weight-bold text-success text-uppercase mb-1">
                                            ทันตกรรม วันนี้</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                                            <div class="h7 mb-0 font-weight-bold text-gray-800">(เดือนนี้ 10 คน / 10 ครั้ง)</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-tooth fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Content Row 2 -->
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bg-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h6 mb-0 font-weight-bold text-gray-800 text-uppercase mb-1">
                                            วันนี้</div>
                                            <div class="h7 mb-0 font-weight-bold text-gray-800">X-Ray</div>
                                            <div class="text-xs font-weight-bold text-gray-800">เดือนนี้ 7 คน / 7 ครั้ง</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-radiation-alt fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bg-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h6 mb-0 font-weight-bold text-gray-800 text-uppercase mb-1">
                                            วันนี้</div>
                                            <div class="h7 mb-0 font-weight-bold text-gray-800">อุบัติเหตุ</div>
                                            <div class="text-xs font-weight-bold text-gray-800">เดือนนี้ 6 คน / 6 ครั้ง</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-exclamation-triangle fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bg-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h6 mb-0 font-weight-bold text-gray-800 text-uppercase mb-1">
                                            วันนี้</div>
                                            <div class="h7 mb-0 font-weight-bold text-gray-800">กายภาพบำบัด</div>
                                            <div class="text-xs font-weight-bold text-gray-800">เดือนนี้ 12 คน / 12 ครั้ง</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-md fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bg-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h6 mb-0 font-weight-bold text-gray-800 text-uppercase mb-1">
                                            วันนี้</div>
                                            <div class="h7 mb-0 font-weight-bold text-gray-800">ผู้ป่วยผ่าตัด</div>
                                            <div class="text-xs font-weight-bold text-gray-800">เดือนนี้ 3 คน / 3 ครั้ง</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-syringe fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h5 mb-0 text-gray-800">ข้อมูลเตียงผู้ป่วย</h1>
                    </div>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-12">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                 <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">สถิติผู้ป่วยในวันนี้</h6>
                                    จำนวนเตียงทั้งหมด 24 เตียง
                                </div>
                                
                                <div class="card-body">
                                <div class="table-responsive">
                                <table class="table" id="dataTable" width="100%">
                                    <thead>
    
                                        <tr >
                                            <th ><a href="">รับใหม่วันนี้</a></th>
                                            <th align="left"><a href=""><button type="button" class="btn btn-outline-success btn-sm">1 เตียง</button></a></th>
                                            <th ><a href="">สิทธิ์ชำระเงินและเบิกได้</a></th>
                                            <th align="left"><a href=""><button type="button" class="btn btn-outline-success btn-sm">2 เตียง</button></a></th>
                                        </tr>
                                        <tr>
                                            <th ><a href="">จำหน่ายวันนี้ </a></th>
                                            <th align="left"><a href=""><button type="button" class="btn btn-outline-success btn-sm">4 เตียง</button></a></th>
                                            <th ><a href="">สิทธิ์ UC</a></th>
                                            <th align="left"><a href=""><button type="button" class="btn btn-outline-success btn-sm">1 เตียง</button></a></th>
                                        </tr>
                                        <tr>
                                            <th ><a href="">Admit อยู่ </a></th>
                                            <th align="left"><a href=""><button type="button" class="btn btn-outline-success btn-sm">3 เตียง</button></a></th>
                                            <th ><a href="">สิทธิอื่นๆ </a></th>
                                            <th align="left"><a href=""><button type="button" class="btn btn-outline-success btn-sm">1 เตียง</button></a></th>
                                        </tr>
                                        <tr>
                                            <th ><a href="">เตียงว่าง </a></th>
                                            <th align="left"><a href=""><button type="button" class="btn btn-outline-success btn-sm">8 เตียง</button></a></th>
                                            <th ><a href="">อัตราการครองเตียง </a></th>
                                            <th align="left"><a href=""><button type="button" class="btn btn-outline-success btn-sm">4 เตียง</button></a></th>
                                        </tr>
                                    </thead>
                                    </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                    </div>
                    

                    <div class="row">
                    
                    <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-bottom-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <div class="h7 mb-0 font-weight-bold text-primary text-uppercase mb-1">ศูนย์รับผู้ป่วยใน</div>
                                            <div class="h5 mb-0 font-weight-bold text-primary text-uppercase mb-1">Admit 24 / 40 เตียง (ว่าง 16)
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-xs mr-3 font-weight-bold text-gray-800">ครองเตียง</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 80%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bed fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-bottom-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <div class="h7 mb-0 font-weight-bold text-danger text-uppercase mb-1">ห้องผู้ป่วย ICU</div>
                                            <div class="h5 mb-0 font-weight-bold text-danger text-uppercase mb-1">Admit 24 / 40 เตียง (ว่าง 16)
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-xs mr-3 font-weight-bold text-gray-800">ครองเตียง</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 80%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bed fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-bottom-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <div class="h7 mb-0 font-weight-bold text-warning text-uppercase mb-1">หอผู้ป่วยสามัญชาย</div>
                                            <div class="h5 mb-0 font-weight-bold text-warning text-uppercase mb-1">Admit 24 / 40 เตียง (ว่าง 16)
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-xs mr-3 font-weight-bold text-gray-800">ครองเตียง</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 80%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bed fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-bottom-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <div class="h7 mb-0 font-weight-bold text-secondary text-uppercase mb-1">ห้องผู้ป่วยพิเศษ 1</div>
                                            <div class="h5 mb-0 font-weight-bold text-secondary text-uppercase mb-1">Admit 10 / 40 เตียง (ว่าง 20)
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-xs mr-3 font-weight-bold text-gray-800">ครองเตียง</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-secondary" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bed fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-bottom-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <div class="h7 mb-0 font-weight-bold text-info text-uppercase mb-1">หอผู้ป่วยสามัญหญิง</div>
                                            <div class="h5 mb-0 font-weight-bold text-info text-uppercase mb-1">Admit 20 / 40 เตียง (ว่าง 20)
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-xs mr-3 font-weight-bold text-gray-800">ครองเตียง</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 90%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bed fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-bottom-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <div class="h7 mb-0 font-weight-bold text-success text-uppercase mb-1">ห้องผู้ป่วยสูติรีเวช</div>
                                            <div class="h5 mb-0 font-weight-bold text-success text-uppercase mb-1">Admit 12 / 40 เตียง (ว่าง 38)
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-xs mr-3 font-weight-bold text-gray-800">ครองเตียง</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 90%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bed fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h5 mb-0 text-gray-800">ข้อมูลผู้ป่วยใน</h1>
                    </div>

                    <div class="row">

                        <div class="col-xl-6 col-lg-5">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">จำนวนผู้ป่วยใน ปีงบประมาณ 2566</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="myBarChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-5">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">อัตราการครองเตียง ปีงบประมาณ 2566</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="myBarChart1"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">แสดงสัดส่วนเพศชาย-หญิงที่นอนโรงพยาบาล</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> หญิง
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> ชาย
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-8 col-lg-5">
                                            <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">5 อันดับโรคผู้ป่วยใน</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr align="center">
                                            <th>ICD10</th>
                                            <th>Diag</th>
                                            <th>ชื่อโรค</th>
                                            <th>ชาย</th>
                                            <th>หญิง</th>
                                            <th>รวม (ราย)</th>
                                        </tr>
                                        <tr>
                                            <td>F1550</td>
                                            <td>Other stimulants including caffeine, Psychotic disorder, Schizophrenia-like</td>
                                            <td></td>
                                            <td>74</td>
                                            <td>10</td>
                                            <td>84</td>
                                        </tr>
                                        <tr>
                                            <td>F1525</td>
                                            <td>Other stimulants including caffeine, Dependence sydrome, Continuous use</td>
                                            <td></td>
                                            <td>65</td>
                                            <td>10</td>
                                            <td>75</td>
                                        </tr>
                                        <tr>
                                            <td>F155</td>
                                            <td>Caffeine psychotic disorder</td>
                                            <td>กลุ่มอาการผิดปกติแบบโรคจิต</td>
                                            <td>29</td>
                                            <td>0</td>
                                            <td>29</td>
                                        </tr>
                                        <tr>
                                            <td>F1025</td>
                                            <td>Alcohol, Dependence sydrome, Continuous use</td>
                                            <td></td>
                                            <td>23</td>
                                            <td>1</td>
                                            <td>24</td>
                                        </tr>
                                        <tr>
                                            <td>F1950</td>
                                            <td>Multiple drug use and use of other psychoactive substances, Psychotic disorder, Schizophrenia-like</td>
                                            <td></td>
                                            <td>15</td>
                                            <td>1</td>
                                            <td>16</td>
                                        </tr>

                                    </thead>
</table>
                            </div>
                        </div>
                        
                    </div>

                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
    <script src="js/demo/chart-bar-demo1.js"></script>

</body>

</html>