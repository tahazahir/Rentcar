<html>
    <head>
        <meta charset="utf-8">
        <script src="esl.js"></script>
        <script src="config.js"></script>
        <script src="lib/jquery.min.js"></script>
        <script src="lib/draggable.js"></script>
        <link rel="stylesheet" href="reset.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body>
        <style>
            body {
                position: absolute;
                left: 0;
                top: 0;
            }
            #main {
                position: absolute;
                top: 10px;
                left: 10px;
                width: 700px;
                height: 650px;
                background: #fff;
            }
        </style>
        <div id="main"></div>

        <script src="data/timelineGDP.js"></script>

        <script>


            require([
                'echarts',
                'echarts/chart/scatter',
                'echarts/component/title',
                'echarts/component/legend',
                'echarts/component/tooltip',
                'echarts/component/dataZoom'
            ], function (echarts) {

                chart = echarts.init(document.getElementById('main'), null, {
                    renderer: 'canvas'
                });

                draggable.init(
                    document.getElementById('main'),
                    chart,
                    {throttle: 70}
                );

                var data1 = [];

                var random = function (max) {
                    return (Math.random() * max).toFixed(3);
                };

                for (var i = 0; i < 100; i++) {
                    data1.push([random(15), random(10), random(1)]);
                }

    option = {
        baseOption: {
            animation: false,
            legend: {
                data: ['scatter', 'scatter2', 'scatter3']
            },
            toolbox: {
                // y: 'bottom',
                feature: {
                    dataView: {},
                    dataZoom: {show: true},
                    restore: {show: true},
                    saveAsImage: {}
                }
            },
            tooltip: {
            },
            xAxis: {
                type: 'value',
                min: 'dataMin',
                max: 'dataMax',
                splitLine: {
                    show: true
                }
            },
            yAxis: {
                type: 'value',
                min: 'dataMin',
                max: 'dataMax',
                splitLine: {
                    show: true
                }
            },
            dataZoom: [
                {
                    id: 'sliderX',
                    show: true,
                    xAxisIndex: [0],
                    start: 10,
                    end: 70
                },
                {
                    id: 'sliderY',
                    show: true,
                    yAxisIndex: [0],
                    start: 0,
                    end: 20
                },
                {
                    type: 'inside',
                    xAxisIndex: [0],
                    start: 10,
                    end: 70
                },
                {
                    type: 'inside',
                    yAxisIndex: [0],
                    start: 0,
                    end: 20
                }
            ],
            series: [
                {
                    name: 'scatter',
                    type: 'scatter',
                    itemStyle: {
                        normal: {
                            opacity: 0.8
                            // shadowBlur: 10,
                            // shadowOffsetX: 0,
                            // shadowOffsetY: 0,
                            // shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    },
                    symbolSize: function (val) {
                        return val[2] * 40;
                    },
                    data: data1
                }
            ]
        },
        media: [
            {
                query: {maxWidth: 450},
                option: {
                    dataZoom: [
                        {id: 'sliderY', width: 10}
                    ]
                }
            },
            {
                query: {minWidth: 450},
                option: {
                    dataZoom: [
                        {id: 'sliderY', width: 40}
                    ]
                }
            },
            {
                query: {maxHeight: 450},
                option: {
                    dataZoom: [
                        {id: 'sliderX', height: 10}
                    ]
                }
            },
            {
                query: {minHeight: 450},
                option: {
                    dataZoom: [
                        {id: 'sliderX', height: 40}
                    ]
                }
            }
        ]
    };








                chart.setOption(option);

                chart.on('legendSelected', function () {
                });

                window.onresize = chart.resize;
            });
        </script>
    </body>
</html>