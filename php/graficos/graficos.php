<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script type="text/javascript">
    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(cargar);
    function cargar(){
        $.ajax({
            url:"graficos/total_reparaciones_km.php",
            dataType:"JSON",
            success: dibujar
        });
    } 
    
    function dibujar(jsonData){
        var pieData=new google.visualization.arrayToDataTable(jsonData);
        
        var chart=new google.visualization.PieChart(document.getElementById('chart'));
        chart.draw(pieData,{title:'Kilometros por cantidad de reparaciones',height:320,pieHole: 0.4,});

    } 
/*--------------------------------------------------------------------------------------*/     
    google.charts.setOnLoadCallback(cargarDos);
    function cargarDos(){
        $.ajax({
            url:"graficos/dias_fuera_servicio.php",
            dataType:"JSON",
            success: dibujar2
        });
    } 
    
    function dibujar2(jsonData){
        var pieData=new google.visualization.arrayToDataTable(jsonData);
        
        var chart2=new google.visualization.BarChart(document.getElementById('chart2'));
        chart2.draw(pieData,{title:'Dias fuera de servicio',height:320,colors: ['#703593'],});
    }  
/*--------------------------------------------------------------------------------------*/     
    google.charts.setOnLoadCallback(cargarTres);
    function cargarTres(){
        $.ajax({
            url:"graficos/total_km_vehiculo.php",
            dataType:"JSON",
            success: dibujar3
        });
    } 
    
    function dibujar3(jsonData){
        var pieData=new google.visualization.arrayToDataTable(jsonData);
        
        var chart3=new google.visualization.ColumnChart(document.getElementById('chart3'));
        chart3.draw(pieData,{title:'Km por vehiculo',height:320,colors: ['red'],});
    }   
   
/*--------------------------------------------------------------------------------------*/        
    google.charts.setOnLoadCallback(cargarCuatro);
    function cargarCuatro(){
        $.ajax({
            url:"graficos/costo_reparacion.php",
            dataType:"JSON",
            success: dibujar4
        });
    } 
    
    function dibujar4(jsonData){
        var pieData=new google.visualization.arrayToDataTable(jsonData);
        
        var chart4=new google.visualization.ColumnChart(document.getElementById('chart4'));
        chart4.draw(pieData,{title:'Costos reparacion',height:320,});
    }   
     
</script>
     
    <div class="row">
        <div class="col-lg-12">
           <div class="col-lg-6">
                <div id="chart"></div>   
           </div>
            <div class="col-lg-6">
                <div id="chart2"></div>  
           </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <div class="col-lg-6">
                <div id="chart3"></div>   
           </div>
            <div class="col-lg-6">
                <div id="chart4"></div>  
           </div>
        </div>
    </div>  

