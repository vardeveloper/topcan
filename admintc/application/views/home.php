<div class="row">
    <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?php echo $products_total; ?></h3>
                <p>Productos</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios-cart"></i>
            </div>
            <a href="<?php echo base_url('Productos') ?>" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?php echo $categories_total; ?></h3>
                <p>Categorías</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios-briefcase-outline"></i>
            </div>
            <a href="<?php echo base_url('Categorias') ?>" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?php echo $categoryType_total; ?></h3>
                <p>Tipo Categoría</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios-briefcase-outline"></i>
            </div>
            <a href="<?php echo base_url('Tipocategoria') ?>" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- <div class="col-lg-6 col-xs-12">
      <div class="box box-info">
        <div class="box-header with-border">
          <i class="fa fa-briefcase"></i>
          <h3 class="box-title">Estadisticas <small>Datos Profesión</small></h3>
  
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <canvas id="data-posisi" style="height:250px"></canvas>
        </div>
      </div>
    </div>
  
    <div class="col-lg-6 col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <i class="fa fa-briefcase"></i>
          <h3 class="box-title">Estadisticas <small>Datos de Ciudad</small></h3>
  
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <canvas id="data-kota" style="height:250px"></canvas>
        </div>
      </div>
    </div> -->
</div>

<script src="<?php echo base_url(); ?>assets/plugins/chartjs/Chart.min.js"></script>
<script>
    // //datos profesión
    // var pieChartCanvas = $("#data-posisi").get(0).getContext("2d");
    // var pieChart = new Chart(pieChartCanvas);
    // var PieData = <?php //echo $data_posisi; ?>;

    // var pieOptions = {
    //   segmentShowStroke: true,
    //   segmentStrokeColor: "#fff",
    //   segmentStrokeWidth: 2,
    //   percentageInnerCutout: 50,
    //   animationSteps: 100,
    //   animationEasing: "easeOutBounce",
    //   animateRotate: true,
    //   animateScale: false,
    //   responsive: true,
    //   maintainAspectRatio: true,
    //   legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
    // };

    // pieChart.Doughnut(PieData, pieOptions);

    // //datos de ciudad
    // var pieChartCanvas = $("#data-kota").get(0).getContext("2d");
    // var pieChart = new Chart(pieChartCanvas);
    // var PieData = <?php //echo $data_kota; ?>;

    // var pieOptions = {
    //   segmentShowStroke: true,
    //   segmentStrokeColor: "#fff",
    //   segmentStrokeWidth: 2,
    //   percentageInnerCutout: 50,
    //   animationSteps: 100,
    //   animationEasing: "easeOutBounce",
    //   animateRotate: true,
    //   animateScale: false,
    //   responsive: true,
    //   maintainAspectRatio: true,
    //   legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
    // };

    // pieChart.Doughnut(PieData, pieOptions);
</script>