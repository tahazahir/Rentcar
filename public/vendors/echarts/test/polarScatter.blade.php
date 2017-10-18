<html>
    <head>
        <meta charset="utf-8">
        <script src="esl.js"></script>
        <script src="config.js"></script>
    </head>
    <body>
        <style>
            html, body, #main {
                width: 100%;
                height: 100%;
            }
        </style>
        <div id="main"></div>
        <script>

            require([
                'echarts',
                'echarts/chart/scatter',
                'echarts/component/legend',
                'echarts/component/polar'
            ], function (echarts) {

                var chart = echarts.init(document.getElementById('main'), null, {
                    renderer: 'canvas'
                });

                var data1 = [];
                var data2 = [];
                var data3 = [];

                for (var i = 0; i < 100; i++) {
                    data1.push([Math.random() * 5, Math.random() * 360]);
                    data2.push([Math.random() * 5, Math.random() * 360]);
                    data3.push([Math.random() * 10, Math.random() * 360]);
                }

                chart.setOption({
                    legend: {
                        data: ['scatter', 'scatter2', 'scatter3']
                    },
                    polar: {

                    },
                    angleAxis: {
                        type: 'value'
                    },
                    radiusAxis: {
                        axisAngle: 0
                    },
                    series: [{
                        coordinateSystem: 'polar',
                        name: 'scatter',
                        type: 'scatter',
                        symbolSize: 10,
                        data: data1
                    }, {
                        coordinateSystem: 'polar',
                        name: 'scatter2',
                        type: 'scatter',
                        symbolSize: 10,
                        data: data2
                    }, {
                        coordinateSystem: 'polar',
                        name: 'scatter3',
                        type: 'scatter',
                        symbolSize: 10,
                        data: data3
                    }]
                });
            })

        </script>
    </body>
</html>