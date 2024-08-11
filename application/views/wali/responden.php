<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIPTIK SekolahOtak Kanan</title>

    <link rel="stylesheet" href="<?= base_url('assets/');?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/style.css">
    <script type="text/javascript" src="<?= base_url('assets/');?>chart.js/dist/chart.js"></script>
    
        <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
        </style>
</head>

<body>

<div class="container-fluid">
    <div class="text-center mb-5 mt-5">
      <img src="<?= base_url('assets/img/');?>EMAS.png" width="100px" height="100px">
      <h2 class="text-center">SMP Otak Kanan Indonesia Pusat Palu</h2>
      <h3 class="text-center">LAPORAN RESPONDEN HASIL KUISIONER </h3>
    </div>

     <?= $this->session->flashdata('message'); ?>
     <section class="abuabu" id="blog">
          <div class="layar-dalam">
            <h3 class="text-center">Responden Orang Tua</h3><br>
            <?= $this->session->flashdata('message'); ?>
            <div>

     <div class="row">
               
               <div class="col-md-4">
                   <div class="card">
                       
                       <div class="card-body">
                           <p>1. Seberapa puas ayah bunda melihat pelaksanaan Shalat Fardhu ananda di rumah ?</p>
                       
                           <div class="table-responsive">
                           <div style="width: 300px; margin: 0px auto;">
                              <canvas id="chart" width="400"></canvas>
                           </div>
                       </div>
                   </div>
                   
               </div>
            
               
           </div> 
           <div class="col-md-4">
                   <div class="card">
                       
                       <div class="card-body">
                           <p>2. Seberapa puas ayah bunda melihat perubahan sikap positif ananda saat berada di rumah ?</p>
                       <div class="table-responsive">
                           <div style="width: 300px; margin: 0px auto;">
                            <canvas id="chart2" width="400"></canvas>
                           </div>
                       </div>
                   </div>
                   
               </div>
          </div> 
          
          <div class="col-md-4">
                   <div class="card">
                       
                       <div class="card-body">
                           <p>3. Seberapa puas ayah bunda melihat melihat pelaksanaan ibadah sunnah ananda di rumah ?</p>
                       <div class="table-responsive">
                           <div style="width: 300px; margin: 0px auto;">
                            <canvas id="chart3" width="400"></canvas>
                           </div>
                       </div>
                   </div>
                   
               </div>
          </div>   

          <div class="col-md-4">
                   <div class="card">
                       
                       <div class="card-body">
                           <p>4. Seberapa puas ayah bunda melihat sikap ananda terhadap orang-orang di sekitarnya ?</p>
                       <div class="table-responsive">
                           <div style="width: 300px; margin: 0px auto;">
                            <canvas id="chart4" width="400"></canvas>
                           </div>
                       </div>
                   </div>
                   
               </div>
          </div>   

          <div class="col-md-4">
                   <div class="card">
                       
                       <div class="card-body">
                           <p>5. Seberapa puas ayah bunda melihat interaksi ananda dengan Al-Qur'an selama berada di lingkungan rumah ?</p>
                       <div class="table-responsive">
                           <div style="width: 300px; margin: 0px auto;">
                            <canvas id="chart5" width="400"></canvas>
                           </div>
                       </div>
                   </div>
                   
               </div>
          </div>   

          <div class="col-md-4">
                   <div class="card">
                       
                       <div class="card-body">
                           <p>6. Seberapa puas ayah bunda melihat rasa ingin tahu ananda ketika berada di rumah ataupun lingkungan sekitarnya ?</p>
                       <div class="table-responsive">
                           <div style="width: 300px; margin: 0px auto;">
                            <canvas id="chart6" width="400"></canvas>
                           </div>
                       </div>
                   </div>
                   
               </div>
          </div>   

          <div class="col-md-4">
                   <div class="card">
                       
                       <div class="card-body">
                           <p>7. Seberapa puas ayah bunda melihat proses belajar mandiri ananda selama berada di rumah ?</p>
                       <div class="table-responsive">
                           <div style="width: 300px; margin: 0px auto;">
                            <canvas id="chart7" width="400"></canvas>
                           </div>
                       </div>
                   </div>
                   
               </div>
          </div>   

          <div class="col-md-4">
                   <div class="card">
                       
                       <div class="card-body">
                           <p>8. Seberapa puas ayah bunda melihat motivasi belajar ananda selama berada di rumah ?</p>
                       <div class="table-responsive">
                           <div style="width: 300px; margin: 0px auto;">
                            <canvas id="chart8" width="400"></canvas>
                           </div>
                       </div>
                   </div>
                   
               </div>
          </div>   

          <div class="col-md-4">
                   <div class="card">
                       
                       <div class="card-body">
                           <p>9. Seberapa puas ayah bunda melihat usaha ananda dalam mengerjakan tugas-tugas yang diberikan ?</p>
                       <div class="table-responsive">
                           <div style="width: 300px; margin: 0px auto;">
                            <canvas id="chart9" width="400"></canvas>
                           </div>
                       </div>
                   </div>
                   
               </div>
          </div>   

          <div class="col-md-4">
                   <div class="card">
                       
                       <div class="card-body">
                           <p>10. Bagaimana pendapat ayah bunda melihat cara ananda memperlakukan ayah bunda sebagai orang tuanya ?</p>
                       <div class="table-responsive">
                           <div style="width: 300px; margin: 0px auto;">
                            <canvas id="chart10" width="400"></canvas>
                           </div>
                       </div>
                   </div>
                   
               </div>
          </div>   
          </section>  
 
<br><br><br>

<script>
    // Data untuk lima kategori
    var dataLabels = ["Sangat Puas", "Puas", "Cukup Puas", "Kurang Puas", "Sangat Tidak Puas"];
    var dataValues = [20, 60, 20, 0, 0]; // Data untuk semua kategori
    var dataValues2 = [13, 67, 13, 7, 0];
    var dataValues3 = [13, 53, 33, 0, 0];
    var dataValues4 = [20, 60, 20, 0, 0];
    var dataValues5 = [7, 80, 13, 0, 0];
    var dataValues6 = [27, 53, 13, 7, 0];
    var dataValues7 = [33, 33, 33, 0, 0];
    var dataValues8 = [33, 33, 27, 7, 0];
    var dataValues9 = [33, 47, 20, 0, 0];
    var dataValues10 = [7, 53, 33, 7, 0];

    var backgroundColors = [
    'rgba(255, 99, 132, 0.2)',
    'rgba(54, 162, 235, 0.2)',
    'rgba(255, 206, 86, 0.2)',
    'rgba(75, 192, 192, 0.2)',
    'rgba(153, 102, 255, 0.2)'
    ];

    var ctx = document.getElementById("chart").getContext('2d');
    var ctx2 = document.getElementById("chart2").getContext('2d');
    var ctx3 = document.getElementById("chart3").getContext('2d');
    var ctx4 = document.getElementById("chart4").getContext('2d');
    var ctx5 = document.getElementById("chart5").getContext('2d');
    var ctx6 = document.getElementById("chart6").getContext('2d');
    var ctx7 = document.getElementById("chart7").getContext('2d');
    var ctx8 = document.getElementById("chart8").getContext('2d');
    var ctx9 = document.getElementById("chart9").getContext('2d');
    var ctx10 = document.getElementById("chart10").getContext('2d');

    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: dataLabels,
            datasets: [{
                label: 'Responden',
                data: dataValues,
                borderColor: 'rgba(0, 0, 0)',
                backgroundColor: backgroundColors, // Menggunakan warna latar belakang yang berbeda
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var chart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: dataLabels,
            datasets: [{
                label: 'Responden',
                data: dataValues2,
                borderColor: 'rgba(0, 0, 0)',
                backgroundColor: backgroundColors, // Menggunakan warna latar belakang yang berbeda
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var chart3 = new Chart(ctx3, {
        type: 'bar',
        data: {
            labels: dataLabels,
            datasets: [{
                label: 'Responden',
                data: dataValues3,
                borderColor: 'rgba(0, 0, 0)',
                backgroundColor: backgroundColors, // Menggunakan warna latar belakang yang berbeda
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var chart4 = new Chart(ctx4, {
        type: 'bar',
        data: {
            labels: dataLabels,
            datasets: [{
                label: 'Responden',
                data: dataValues4,
                borderColor: 'rgba(0, 0, 0)',
                backgroundColor: backgroundColors, // Menggunakan warna latar belakang yang berbeda
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var chart5 = new Chart(ctx5, {
        type: 'bar',
        data: {
            labels: dataLabels,
            datasets: [{
                label: 'Responden',
                data: dataValues5,
                borderColor: 'rgba(0, 0, 0)',
                backgroundColor: backgroundColors, // Menggunakan warna latar belakang yang berbeda
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var chart6 = new Chart(ctx6, {
        type: 'bar',
        data: {
            labels: dataLabels,
            datasets: [{
                label: 'Responden',
                data: dataValues6,
                borderColor: 'rgba(0, 0, 0)',
                backgroundColor: backgroundColors, // Menggunakan warna latar belakang yang berbeda
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var chart7 = new Chart(ctx7, {
        type: 'bar',
        data: {
            labels: dataLabels,
            datasets: [{
                label: 'Responden',
                data: dataValues7,
                borderColor: 'rgba(0, 0, 0)',
                backgroundColor: backgroundColors, // Menggunakan warna latar belakang yang berbeda
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var chart8 = new Chart(ctx8, {
        type: 'bar',
        data: {
            labels: dataLabels,
            datasets: [{
                label: 'Responden',
                data: dataValues8,
                borderColor: 'rgba(0, 0, 0)',
                backgroundColor: backgroundColors, // Menggunakan warna latar belakang yang berbeda
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var chart9 = new Chart(ctx9, {
        type: 'bar',
        data: {
            labels: dataLabels,
            datasets: [{
                label: 'Responden',
                data: dataValues9,
                borderColor: 'rgba(0, 0, 0)',
                backgroundColor: backgroundColors, // Menggunakan warna latar belakang yang berbeda
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var chart10 = new Chart(ctx10, {
        type: 'bar',
        data: {
            labels: dataLabels,
            datasets: [{
                label: 'Responden',
                data: dataValues10,
                borderColor: 'rgba(0, 0, 0)',
                backgroundColor: backgroundColors, // Menggunakan warna latar belakang yang berbeda
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    </script>
    
    <nav class="navbar fixed-bottom navbar-light bg-light mt-5">
      <a class="btn btn-success mr-5" href="<?= base_url('wali/lhb');?>">Sebelumnya</a>
        <a class="btn btn-success ml-5" href="<?= base_url('wali/terima_kasih');?>">Selanjutnya</a>
    </nav>
  </div>
      
        
    
 
      <script src="<?= base_url('assets/');?>js/bootstrap.bundle.js"></script>
   
    
    
  


</body>
</html>