<script>
        window.onload = function() {
        
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            exportEnabled: true,
            theme: "light1",
            title:{
                text: "Najprodavaniji Proizvodi"
            },
            axisY: {
                title: "Broj poručivanja (u komadima)"
            },
            data: [{
                type: "column",
                yValueFormatString: "#,##0.## kom",
                dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();
        
        }
</script>



<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



</body>
</html>