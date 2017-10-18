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
                margin: 0;
            }
            #chart1, #chart2 {
                width: 50%;
                height: 100%;
                float: left;
            }
        </style>
        <div id="main">
            <div id="chart1"></div>
            <div id="chart2"></div>
        </div>
        <script>


            require([
                'echarts',
                'echarts/chart/scatter',
                'echarts/component/legend',
                'echarts/component/grid',
                'echarts/component/visualMap',
                'echarts/component/tooltip'
            ], function (echarts) {

                var chart1 = echarts.init(document.getElementById('chart1'));
                var chart2 = echarts.init(document.getElementById('chart2'));

                var data1 = [];

                var symbolCount = 6;

                for (var i = 0; i < 100; i++) {
                    data1.push([
                        Math.random() * 5,
                        Math.random() * 4,
                        Math.random() * 20,
                        Math.round(Math.random() * (symbolCount - 1))
                    ]);
                }

                chart1.setOption({
                    legend: {
                        top: 50,
                        data: ['scatter']
                    },
                    tooltip: {
                        formatter: '{c}'
                    },
                    grid: {
                        top: '26%',
                        bottom: '26%'
                    },
                    xAxis: {
                        type: 'value',
                        splitLine: {
                            show: false
                        }
                    },
                    yAxis: {
                        type: 'value',
                        splitLine: {
                            show: false
                        }
                    },
                    visualMap: [
                        {
                            realtime: false,
                            left: 'right',
                            // selectedMode: 'single',
                            selectedMode: 'multiple',
                            backgroundColor: '#eee',
                            dimension: 2,
                            selected: [],
                            min: 0,
                            max: 24,
                            precision: 0,
                            splitNumber: 0,
                            calculable: true,
                            inRange: { // visual for short cut
                                color: ['#006edd', '#e0ffff']
                            }
                        }
                    ],
                    series: [
                        {
                            name: 'scatter',
                            type: 'scatter',
                            symbolSize: 30,
                            data: data1
                        }
                    ]
                });

                chart2.setOption({
                    legend: {
                        top: 50,
                        data: ['scatter']
                    },
                    tooltip: {
                        formatter: '{c}'
                    },
                    grid: {
                        top: '26%',
                        bottom: '26%'
                    },
                    xAxis: {
                        type: 'value',
                        splitLine: {
                            show: false
                        }
                    },
                    yAxis: {
                        type: 'value',
                        splitLine: {
                            show: false
                        }
                    },
                    visualMap: [
                        {
                            left: 'right',
                            // selectedMode: 'single',
                            selectedMode: 'multiple',
                            backgroundColor: '#eee',
                            dimension: 2,
                            selected: [],
                            min: 0,
                            max: 24,
                            precision: 0,
                            splitNumber: 0,
                            calculable: true,
                            inRange: { // visual for short cut
                                color: ['#006edd', '#e0ffff']
                            }
                        }
                    ],
                    series: [
                        {
                            name: 'scatter',
                            type: 'scatter',
                            symbolSize: 30,
                            data: data1
                        }
                    ]
                });

                echarts.connect([chart1, chart2]);

            });

        </script>
    </body>
</html>