<html>
    <head>
        <meta charset="utf-8">
        <script src="esl.js"></script>
        <script src="config.js"></script>
        <script src="lib/jquery.min.js"></script>
    </head>
    <body>
        <style>
            html, body, #main {
                width: 100%;
                height: 100%;
                margin: 0;
            }
        </style>
        <div id="main"></div>
        <script>

            require([
                'echarts',
                'echarts/chart/scatter',
                'echarts/component/title',
                'echarts/component/grid',
                'echarts/component/tooltip'
            ], function (echarts) {

                var chart = echarts.init(document.getElementById('main'));
                $.get('data/masterPainterColorChoice.json', function (json) {

                    var data = json[0].x.map(function (x, idx) {
                        return [+x, +json[0].y[idx]];
                    });

                    chart.setOption({
                        title: {
                            text: 'Master Painter Color Choices Throughout History',
                            subtext: 'Data From Plot.ly',
                            x: 'right'
                        },
                        tooltip: {
                            trigger: 'axis',
                            axisPointer: {
                                type: 'cross'
                            },
                            zlevel: 1
                        },
                        xAxis: {
                            type: 'value',
                            splitLine: {
                                show: false
                            },
                            scale: true,
                            splitNumber: 5,
                            axisLabel: {
                                formatter: function (val) {
                                    return val + 's';
                                }
                            }
                        },
                        yAxis: {
                            type: 'value',
                            min: 0,
                            max: 360,
                            splitNumber: 6,
                            name: 'Hue',
                            splitLine: {
                                show: false
                            }
                        },
                        series: [{
                            name: 'scatter',
                            type: 'scatter',
                            symbolSize: function (val, param) {
                                return json[0].marker.size[param.dataIndex] / json[0].marker.sizeref;
                            },
                            itemStyle: {
                                normal: {
                                    color: function (param) {
                                        return json[0].marker.color[param.dataIndex];
                                    }
                                }
                            },
                            data: data
                        }]
                    });
                });
            });

        </script>
    </body>
</html>