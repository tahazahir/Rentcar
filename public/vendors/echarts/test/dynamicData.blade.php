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
                width: 100%;
                height: 100%;
            }
        </style>
        <div id="main"></div>
        <script>

            require([
                'echarts',
                'echarts/chart/line',
                'echarts/component/legend',
                'echarts/component/grid'
            ], function (echarts) {

                function randomData() {
                    return (Math.random() + 3).toFixed(3);
                }

                var chart = echarts.init(document.getElementById('main'), null, {
                    renderer: 'canvas'
                });

                var xAxisData = [];
                var data1 = [];
                var data2 = [];
                var count = 0;
                for (; count < 500; count++) {
                    xAxisData.push('类目' + count);
                    data1.push(randomData());
                    // data2.push(-randomData());
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
                            width: 2
                            // shadowBlur: 10,
                            // shadowOffsetX: 0,
                            // shadowOffsetY: 5,
                            // shadowColor: 'rgba(0, 0, 0, 0.4)'
                        },
                        areaStyle: {

                        }
                    }
                };

                chart.setOption({
                    legend: {
                        data: ['line', 'line2']
                    },
                    tooltip: {
                        trigger: 'axis',
                        axisPointer: {
                            type: 'line'
                        }
                    },
                    // animation: false,
                    xAxis: {
                        axisLabel: {
                            interval: 40
                        },
                        data: xAxisData,
                        boundaryGap: false
                    },
                    yAxis: {
                        scale: true,
                        splitLine: {
                            // show: false
                        }
                    },
                    series: [{
                        name: 'line',
                        type: 'line',
                        stack: 'all',
                        symbol: 'none',
                        symbolSize: 10,
                        data: data1,
                        itemStyle: itemStyle
                    }]
                });

                setInterval(function () {
                    for (var i = 0; i < 5; i++) {
                        xAxisData.shift();
                        xAxisData.push('类目' + count);
                        data1.shift();
                        data1.push(randomData());
                        count++;
                    }
                    chart.setOption({
                        xAxis: {
                            data: xAxisData
                        },
                        series: [{
                            name: 'line',
                            data: data1
                        }]
                    });
                }, 500);
            })

        </script>
    </body>
</html>