<html>
    <head>
        <meta charset="utf-8">
        <script src="esl.js"></script>
        <script src="config.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body>
        <style>
            html, body, #main {
                margin: 0;
                padding: 0;
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
                'echarts/component/grid',
                'echarts/component/tooltip',
                'echarts/component/toolbox',
                'echarts/component/dataZoom'
            ], function (echarts) {

                chart = echarts.init(document.getElementById('main'), null, {
                    renderer: 'canvas'
                });

                var data1 = [];
                var data2 = [];
                var data3 = [];
                var xAxisData = [];
                var yAxisData = [];

                var random = function (max) {
                    return (Math.random() * max).toFixed(3);
                };

                for (var i = 0; i <= 10; i++) {
                    xAxisData.push(i + '');
                }

                for (var i = 0; i <= 30; i++) {
                    yAxisData.push(i + '');
                }

                for (var i = 0; i < 30; i++) {
                    data1.push([
                        Math.round(random(10)),
                        Math.round(random(30))//,
                        // Math.round(random(100))
                    ]);
                    data2.push([
                        Math.round(random(10)),
                        Math.round(random(30))//,
                        // Math.round(random(100))
                    ]);
                    data3.push([
                        Math.round(random(10)),
                        Math.round(random(30))//,
                        // Math.round(random(100))
                    ]);
                }

                chart.setOption({
                    legend: {
                        data: ['scatter', 'scatter2', 'scatter3']
                    },
                    toolbox: {
                        // y: 'bottom',
                        feature: {
                            dataView: {},
                            dataZoom: {
                                show: true
                                // yAxisIndex: false
                            },
                            restore: {show: true},
                            saveAsImage: {}
                        }
                    },
                    tooltip: {
                    },
                    dataZoom: [
                        {
                            show: true,
                            xAxisIndex: [0],
                            // If set to 'filter', y axis will be effected by x dataZoom
                            filterMode: 'empty',
                            start: 0,
                            end: 100
                        },
                        {
                            show: true,
                            yAxisIndex: [0],
                            filterMode: 'empty',
                            start: 0,
                            end: 20
                        },
                        {
                            type: 'inside',
                            xAxisIndex: [0],
                            filterMode: 'empty',
                            start: 0,
                            end: 100
                        },
                        {
                            type: 'inside',
                            yAxisIndex: [0],
                            filterMode: 'empty',
                            start: 0,
                            end: 20
                        }
                    ],
                    xAxis: {
                        type: 'category',
                        splitLine: {
                            show: true
                        },
                        data: xAxisData
                    },
                    yAxis: {
                        type: 'category',
                        splitLine: {
                            show: true
                        },
                        data: yAxisData
                    },
                    series: [
                        {
                            name: 'scatter',
                            type: 'scatter',
                            itemStyle: {
                                normal: {
                                    opacity: 0.8,
                                    // shadowBlur: 10,
                                    // shadowOffsetX: 0,
                                    // shadowOffsetY: 0,
                                    // shadowColor: 'rgba(0, 0, 0, 0.5)'
                                }
                            },
                            symbolSize: function (val) {
                                return val[0] * 4;
                            },
                            data: data1
                        },
                        {
                            name: 'scatter2',
                            type: 'scatter',
                            itemStyle: {
                                normal: {
                                    opacity: 0.8
                                }
                            },
                            symbolSize: function (val) {
                                return val[0] * 4;
                            },
                            data: data2
                        },
                        {
                            name: 'scatter3',
                            type: 'scatter',
                            itemStyle: {
                                normal: {
                                    opacity: 0.8,
                                }
                            },
                            symbolSize: function (val) {
                                return val[0] * 4;
                            },
                            data: data3
                        }
                    ]
                });
                // console.profileEnd('setOption');
            })

            window.onresize = function () {
                chart.resize();
            };

        </script>

        <!-- // <script src="js/memory-stats.js"></script> -->
        <!-- // <script src="js/memory.js"></script> -->
    </body>
</html>