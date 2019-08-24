<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Site de Réformes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/stylesheet.css');?>">
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
          google.charts.load("current", {packages:["corechart"]});
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Task', 'Hours per Day'],
              ['Work',     11],
              ['Eat',      2],
              ['Commute',  2],
              ['Watch TV', 2],
              ['Sleep',    7]
            ]);

            var options = {
              title: 'My Daily Activities',
              pieHole: 0.4,
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
          }
        </script>


    </head>
    <body id="wawa">
        <div class="container-fluid" style="margin-top: 50px;">
            <div class="row">
                <div class="col-md-2">
                    <div class="accordion" id="myAccordion" >
                        <div class="card">
                            <div class="card-header" id="headingOne"  style="background-color:RGBa(255,255,255,0.5);opacity:0,33;">
                                <h2 class="mb-0">
                                    <img src="<?php echo base_url ('assets/images/owner.jpg')?>" style="display:inline;"/>
                                    <p style="text-align: center;">Utilisateur 1</p>
                                </h2>
                            </div>
                            
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"><img src="<?php echo base_url('assets/images/dashboard.png');?>"></button>
                                </h2>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"><img src="<?php echo base_url('assets/images/liste.png');?>"></button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#myAccordion">
                                <div class="card-body">
                                    <p><a href="<?=site_url("BackController/getListe");?>">Liste 1</a></p>
                                    <p><a href="#">Liste 2</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"><img src="<?php echo base_url('assets/images/insertion.png');?>"></button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#myAccordion">
                               <div class="card-body">
                                    <p><a href="<?=site_url("BackController/getInsertInterface");?>">Insertion 1</a></p>
                                    <p><a>Insertion 2</a></p>
                                    <p><a>Insertion 3</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10" style="background-color:RGBa(255,255,255,0.5);opacity:0,2;" >
                    <div id="donutchart" style="width: 900px; height: 500px;"></div>                   
                </div>
            </div>
        </div>
        
    </body>
</html>