<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="esl.js"></script>
        <script src="config.js"></script>
        <script src="lib/facePrint.js"></script>
    </head>
    <body>
        <style>
            html, body, #main {
                width: 100%;
                height: 100%;
            }
        </style>
        <div id="info"></div>
        <div id="main"></div>
        <script>

            require([
                'echarts',
                'echarts/chart/line',
                'echarts/component/legend',
                'echarts/component/grid',
                'echarts/component/tooltip',
                'echarts/component/dataZoomInside'
            ], function (echarts) {

                var chart = echarts.init(document.getElementById('main'), null, {
                    renderer: 'canvas'
                });

                var xAxisData = [];
                var data1 = [];
                var data2 = [];
                var data3 = [];

                for (var i = 0; i < 100; i++) {
                    xAxisData.push('类目' + i);
                    if (i < 5 && i > 1) {
                        data1.push(0);
                    }
                    else {
                        data1.push(+(Math.random() + 0.5).toFixed(3));
                    }
                    data2.push(+(Math.random() + 0.5).toFixed(3));
                    data3.push(+(Math.random() + 0.5).toFixed(3));
                }

                var itemStyle = {
                    normal: {
                        borderColor: 'white',
                        borderWidth: 3,
                        // shadowBlur: 10,
                        // shadowOffsetX: 0,
                        // shadowOffsetY: 5,
                        // shadowColor: 'rgba(0, 0, 0, 0.4)',
                        lineStyle: {
                            width: 1
                            // shadowBlur: 10,
                            // shadowOffsetX: 0,
                            // shadowOffsetY: 5,
                            // shadowColor: 'rgba(0, 0, 0, 0.4)'
                        }
                    }
                };

                chart.setOption({
                    legend: {
                        data: ['line', 'line2', 'line3']
                    },
                    visualMap: null, // 用于测试 option 中含有null的情况。
                    tooltip: {
                        trigger: 'axis',
                        axisPointer: {
                            type: 'line'
                        }
                    },
                    xAxis: {
                        // data: ['类目1', '类目2', '类目3', '类目4', '类目5',]
                        data: xAxisData,
                        boundaryGap: false,
                        // inverse: true,
                        splitArea: {
                            show: false
                        },
                        splitLine: {
                            show: false
                        }
                    },
                    grid: {
                        left: '10%',
                        right: '10%'
                    },
                    yAxis: {
                        splitArea: {
                            show: true
                        }
                    },
                    dataZoom: {
                        type: 'inside',
                        start: 10,
                        end: 30
                    },
                    animation: false,
                    series: [null,  // 用于测试 option 中含有null的情况。
                    {
                        name: 'line',
                        type: 'line',
                        stack: 'all',
                        symbol: 'circle',
                        symbolSize: 10,
                        data: data1,
                        itemStyle: itemStyle
                    }, {
                        name: 'line2',
                        type: 'line',
                        stack: 'all',
                        symbol: 'circle',
                        symbolSize: 10,
                        data: data2,
                        itemStyle: itemStyle
                    }, {
                        name: 'line3',
                        type: 'line',
                        stack: 'all',
                        symbol: 'triangle',
                        symbolSize: 10,
                        data: data3,
                        itemStyle: itemStyle
                    }]
                });
            })

        </script>
    </body>
</html>