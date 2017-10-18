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
                'echarts/chart/radar',
                'echarts/component/legend',
                'echarts/component/grid',
                'echarts/component/tooltip'
            ], function (echarts) {

                var chart = echarts.init(document.getElementById('main'));

                chart.setOption({
                    tooltip : {
                        trigger: 'item'
                    },
                    legend: {
                        x : 'left',
                        data:['图一','图二','图三']
                    },
                    polar : [
                        {
                            indicator : [
                                { text : '指标一' },
                                { text : '指标二' },
                                { text : '指标三' },
                                { text : '指标四' },
                                { text : '指标五' }
                            ],
                            center : ['25%',210],
                            radius : 150,
                            startAngle: 90,
                            splitNumber: 8,
                            name : {
                                formatter:'【{value}】',
                                textStyle: {color:'red'}
                            },
                            scale: true
                        },
                        {
                            indicator : [
                                { text : '语文', max  : 150, nameTextStyle: {
                                        color:'#000000',fontSize:5
                                    }},
                                { text : '数学', max  : 150, axisLine: {
                                    lineStyle: {
                                        color: 'red'
                                    }
                                } },
                                { text : '英语', max  : 150, axisLine: {
                                    lineStyle: {
                                        color: 'red'
                                    }
                                } },
                                { text : '物理', max  : 120, axisLine: {
                                    lineStyle: {
                                        color: 'red'
                                    }
                                } },
                                { text : '化学', max  : 108, axisLine: {
                                    lineStyle: {
                                        color: 'red'
                                    }
                                } },
                                { text : '生物', max  : 72, axisLine: {
                                    lineStyle: {
                                        color: 'red'
                                    }
                                } }
                            ],
                            center : ['75%', 210],
                            radius : 150
                        }
                    ],
                    series : [
                        {
                            name: '雷达图',
                            type: 'radar',
                            itemStyle: {
                                emphasis: {
                                    // color: 各异,
                                    lineStyle: {
                                        width: 4
                                    }
                                }
                            },
                            data : [
                                {
                                    value : [100, 8, 0.40, -80, 2000],
                                    name : '图一',
                                    symbol: 'star5',
                                    symbolSize: 4,
                                    itemStyle: {
                                        normal: {
                                            lineStyle: {
                                                type: 'dashed'
                                            }
                                        }
                                    }
                                },
                                {
                                    value : [10, 3, 0.20, -100, 1000],
                                    name : '图二',
                                    itemStyle: {
                                        normal: {
                                            areaStyle: {
                                                type: 'default'
                                            }
                                        }
                                    }
                                },
                                {
                                    value : [20, 3, 0.3, -13.5, 3000],
                                    name : '图三',
                                    symbol: 'none',         // 拐点图形类型，非标准参数
                                    itemStyle: {
                                        normal: {
                                            lineStyle: {
                                                type: 'dotted'
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        {
                            name: '成绩单',
                            type: 'radar',
                            polarIndex : 1,
                            itemStyle: {
                                normal: {
                                    areaStyle: {
                                        type: 'default'
                                    }
                                }
                            },
                            data: [
                                {
                                    value: [120, 118, 130, 100, 99, 70],
                                    name: '张三',
                                    itemStyle: {
                                        normal: {
                                            label: {
                                                show: true,
                                                formatter:function(params) {
                                                    return params.value;
                                                }
                                            }
                                        }
                                    }
                                },
                                {
                                    value : [90, 113, 140, 30, 70, 60],
                                    name : '李四',
                                    itemStyle: {
                                        normal: {
                                            lineStyle: {
                                                type: 'dashed'
                                            }
                                        }
                                    }
                                }
                            ]
                        }
                    ]
                });
            });

        </script>
    </body>
</html>