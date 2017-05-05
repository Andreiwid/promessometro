@extends ('navbar')

<!DOCTYPE html>
<html>
<head>
<title>Promessômetro</title>
<script>
window.onload = function () {
        CanvasJS.addColorSet("colors",
                [//colorSet Array

                "#009900",
                "#cc0000",
                "#ffff00"              
                ]);

        var chart = new CanvasJS.Chart("circlechart",
        {
            colorSet: "colors",

            title:{
                text: "Custom Color Set"
            },
                        animationEnabled: true,
            theme: "theme2",
            data: [
            {        
                type: "doughnut",
                indexLabelFontFamily: "Agency FB",       
                indexLabelFontSize: 25,
                indexLabelFontColor: "dimgray",       
                indexLabelLineColor: "dimgray", 
                toolTipContent: "{y} %",                    
                color1: "rgba(0, 102, 204, 0.8)",
                color2: "red",
                color3: "yellow",
                dataPoints: [
                {  y: 30,  indexLabel: "Concluídas"},
                {  y: 30, indexLabel: "Fora do Prazo" },
                {  y: 30,  indexLabel: "Dentro do Prazo"}

                ]
            }
            ]
        });

        chart.render();
    }


    </script>
    <script src="js/canvasjs.min.js"></script>
</head>
<body><div class="middlecenter-cadastra">
      <div class="row">
    <div class="row" id="circlechart" style="margin: 2%; display: inline-block; width:40em; height: 30em;"></div>
    </div></div>
</body>
</html>
