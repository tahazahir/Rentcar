<html>
    <head>
        <meta charset="utf-8">
        <script src="esl.js"></script>
        <script src="config.js"></script>
        <link rel="stylesheet" href="reset.css" />
    </head>
    <body>
        <div id="main"></div>
        <script>

            require([
                'echarts',
                'echarts/chart/treemap',
            ], function (echarts) {

                var chart = echarts.init(document.getElementById('main'), null, {
                    renderer: 'canvas'
                });

                chart.setOption({

                    series: [
                        {
                            name:'矩形树图',
                            type:'treemap',
                            label: {
                                normal: {
                                    // show: false,
                                    position: 'insideRight'
                                    // position: ['100%', 10],
                                    // textStyle: {
                                    //     align: 'right'
                                    // }
                                },
                                emphasis: {
                                    show: true
                                }
                            },
                            breadcrumb: {
                            },
                            levels: [
                                {
                                    itemStyle: {
                                        normal: {
                                            borderWidth: 15,
                                            gapWidth: 30,
                                            borderColor: '#999'
                                        }
                                    }
                                },
                                {
                                    itemStyle: {
                                        normal: {
                                            borderWidth: 15,
                                            gapWidth: 40,
                                            borderColor: '#333'
                                        }
                                    }
                                },
                                {
                                    itemStyle: {
                                        normal: {
                                            borderWidth: 10,
                                            borderColor: '#555570'
                                        }
                                    }
                                }
                            ],
                            data:[
                                {
                                    name: '三星',
                                    value: 6,
                                },
                                {
                                    name: '小米',
                                    value: 4,
                                    children: [
                                        {
                                            name: '小米0',
                                            value: 10,
                                            children: [
                                                {
                                                    name: '小尺',
                                                    value: 400
                                                },
                                                {
                                                    name: '小寸',
                                                    value: 200
                                                },
                                                {
                                                    name: '小光年',
                                                    value: 100
                                                }
                                            ]
                                        },
                                        {
                                            name: '小米1',
                                            value: 4
                                        },
                                        {
                                            name: '小米2',
                                            value: 4
                                        }
                                    ]
                                },
                                {
                                    name: '中兴',
                                    value: 1
                                }
                            ]
                        }
                    ]
                });
            });

        </script>
    </body>
</html>