<html>
    <head>
        <meta charset="utf-8">
        <script src="./esl.js"></script>
        <script src="./config.js"></script>
    </head>
    <body>
        <style>
            html,
            body,
            #main,
            #main2,
            #main3 {
                width: 90%;
                height: 200px;
                margin: 0;
                padding: 0;
            }
            #main2 {
                width: 75%;
            }
            #main3 {
                width: 50%;
            }
            #middle {
                text-align: center;
                padding: 10px;
                background: #d4e8f1;
            }
        </style>
        <div id="main"></div>
        <div id="middle">
            上面是降水量，下面是流量。这是两个echarts实例。
        </div>
        <div id="main2"></div>
        <div id="main3"></div>

        <script>

            require([
                'data/rainfall.json',
                'echarts',
                'echarts/chart/bar',
                'echarts/chart/line',
                'echarts/component/legend',
                'echarts/component/tooltip',
                'echarts/component/grid',
                'echarts/component/axis',
                'echarts/component/toolbox',
                'echarts/component/dataZoomInside'
            ], function (data, echarts) {
                var chart1 = createChart1(data, echarts);
                var chart2 = createChart2(data, echarts);
                var chart3 = createChart3(data, echarts);

                echarts.connect([chart1, chart2, chart3]);

                // chart1.on('dataZoom', function (payload) {
                //     chart2.dispatchAction({
                //         type: 'dataZoom',
                //         dataZoomIndex: 0,
                //         range: payload.range
                //     }, true);
                // });

                // chart2.on('dataZoom', function (payload) {
                //     chart1.dispatchAction({
                //         type: 'dataZoom',
                //         dataZoomIndex: 0,
                //         range: payload.range
                //     }, true);
                // });

            });


            function createChart1(data, echarts) {

                var chart = echarts.init(document.getElementById('main'), null, {
                    renderer: 'canvas'
                });

                chart.setOption({
                    tooltip: {
                        trigger: 'axis',
                    },
                    legend: {
                        data: ['降水量']
                    },
                    grid: [
                        {
                            show: true,
                            borderWidth: 0,
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    ],
                    toolbox: {
                        feature: {
                            saveAsImage: {}
                        }
                    },
                    xAxis: [
                        {
                            // data: ['类目1', '类目2', '类目3', '类目4', '类目5',]
                            // data: xAxisData,
                            type: 'category',
                            boundaryGap: true,
                            // splitLine: {show: false},
                            axisLabel: {show: true},
                            splitLine: {show: false},
                            axisLine: {
                                show: true,
                                // onZero: false
                            },
                            data: data.category
                        }
                    ],
                    yAxis: [
                        {
                            boundaryGap: false,
                            axisLabel: {
                            },
                            axisLine: {
                                lineStyle: {
                                    color: '#666'
                                }
                            }
                        }
                    ],
                    series: [
                        {
                            name: '降水量',
                            type: 'line',
                            data: data.rainfall,
                            itemStyle: {
                                normal: {
                                     areaStyle: {}
                                }
                            }
                        }
                    ],
                    dataZoom: [
                        {
                            type: 'inside',
                            start: 30,
                            end: 40
                        }
                    ]
                });

                return chart;
            }


            function createChart2(data, echarts) {

                var chart = echarts.init(document.getElementById('main2'), null, {
                    renderer: 'canvas'
                });

                chart.setOption({
                    tooltip: {
                        trigger: 'axis',
                    },
                    legend: {
                        data: ['流量']
                    },
                    grid: [
                        {
                            show: true,
                            borderWidth: 0,
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    ],
                    xAxis: [
                        {
                            type: 'category',
                            boundaryGap: true,
                            axisLabel: {show: true},
                            splitLine: {show: false},
                            axisLine: {
                                show: true,
                            },
                            data: data.category
                        }
                    ],
                    yAxis: [
                        {
                            boundaryGap: false,
                            position: 'right',
                            inverse: true,
                            axisLabel: {
                                textStyle: {
                                    color: '#666'
                                }
                            },
                            axisLine: {
                                lineStyle: {
                                    color: '#666'
                                }
                            }
                        }
                    ],
                    series: [
                        {
                            name: '流量',
                            type: 'line',
                            data: data.flow,
                            itemStyle: {
                                normal: {
                                     areaStyle: {}
                                }
                            }
                        }
                    ],
                    dataZoom: [
                        {
                            type: 'inside',
                            start: 30,
                            end: 40
                        }
                    ]
                });
                return chart;
            }

            function createChart3(data, echarts) {

                var chart = echarts.init(document.getElementById('main3'), null, {
                    renderer: 'canvas'
                });

                chart.setOption({
                    tooltip: {
                        trigger: 'axis',
                    },
                    legend: {
                        data: ['流量']
                    },
                    grid: [
                        {
                            show: true,
                            borderWidth: 0,
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    ],
                    xAxis: [
                        {
                            type: 'category',
                            boundaryGap: true,
                            axisLabel: {show: true},
                            splitLine: {show: false},
                            axisLine: {
                                show: true,
                            },
                            data: data.category
                        }
                    ],
                    yAxis: [
                        {
                            boundaryGap: false,
                            position: 'right',
                            inverse: true,
                            axisLabel: {
                                textStyle: {
                                    color: '#666'
                                }
                            },
                            axisLine: {
                                lineStyle: {
                                    color: '#666'
                                }
                            }
                        }
                    ],
                    series: [
                        {
                            name: '流量',
                            type: 'line',
                            data: data.flow,
                            itemStyle: {
                                normal: {
                                     areaStyle: {}
                                }
                            }
                        }
                    ],
                    dataZoom: [
                        {
                            type: 'inside',
                            start: 30,
                            end: 40
                        }
                    ]
                });

                return chart;
            }

        </script>
    </body>
</html>