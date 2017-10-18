<html>
    <head>
        <meta charset="utf-8">
        <script src="esl.js"></script>
        <script src="config.js"></script>
        <script src=""></script>
        <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body>
        <style>
            html, body, #main {
                width: 100%;
                height: 100%;
                margin: 0;
            }
            #main {
                background: #fff;
            }
        </style>
        <div id="main"></div>
        <script>

            require([
                'echarts',
                'echarts/chart/bar',
                'echarts/chart/line',
                'echarts/component/legend',
                'echarts/component/grid',
                'echarts/component/tooltip',
                'echarts/component/toolbox',
                'zrender/vml/vml'
            ], function (echarts) {

                var chart = echarts.init(document.getElementById('main'));

                var xAxisData = [];
                var data1 = [];
                var data2 = [];
                var data3 = [];
                var data4 = [];

                for (var i = 0; i < 10; i++) {
                    xAxisData.push('类目' + i);
                    data1.push((Math.random() * 5).toFixed(2));
                    data2.push(-Math.random().toFixed(2));
                    data3.push((Math.random() + 0.5).toFixed(2));
                    data4.push((Math.random() + 0.3).toFixed(2));
                }

                chart.setOption({
                    toolbox: {
                        // y: 'bottom',
                        feature: {
                            dataView: {
                                optionToContent: function(opt) {
                                    var axisData = opt.xAxis[0].data;
                                    var series = opt.series;
                                    var table = '<table style="width:100%;text-align:center"><tbody><tr>'
                                                 + '<td>时间</td>'
                                                 + '<td>' + series[0].name + '</td>'
                                                 + '<td>' + series[1].name + '</td>'
                                                 + '</tr>';
                                    for (var i = 0, l = axisData.length; i < l; i++) {
                                        table += '<tr>'
                                                 + '<td>' + axisData[i] + '</td>'
                                                 + '<td>' + series[0].data[i] + '</td>'
                                                 + '<td>' + series[1].data[i] + '</td>'
                                                 + '</tr>';
                                    }
                                    table += '</tbody></table>';
                                    return table;
                                },
                                contentToOption: function () {
                                  console.log(arguments);
                                }
                            },
                            saveAsImage: {
                                pixelRatio: 2
                            }
                        }
                    },
                    tooltip: {},
                    xAxis: {
                        data: xAxisData,
                        axisLine: {
                            onZero: true
                        },
                        splitLine: {
                            show: false
                        },
                        splitArea: {
                            show: false
                        }
                    },
                    yAxis: {
                        inverse: true,
                        splitArea: {
                            show: false
                        }
                    },
                    series: [{
                        name: 'bar',
                        type: 'bar',
                        stack: 'one',
                        data: data1
                    }, {
                        name: 'bar2',
                        type: 'bar',
                        stack: 'one',
                        data: data2
                    }, {
                        name: 'bar3',
                        type: 'bar',
                        stack: 'two',
                        data: data3
                    }, {
                        name: 'bar4',
                        type: 'bar',
                        stack: 'two',
                        data: data4
                    }]
                });

                window.onresize = chart.resize;
            });
        </script>
    </body>
</html>