<html>
    <head>
        <meta charset="utf-8">
        <script src="./esl.js"></script>
        <script src="./config.js"></script>
        <link rel="stylesheet" href="./reset.css">
    </head>
    <body>
        <style>
            body {
                /*background: #000;*/
            }
        </style>
        <div id="main"></div>

        <script>

            // Schema:
            // date,AQIindex,PM2.5,PM10,CO,NO2,SO2
            var schema = [
                {name: 'date', index: 0, text: '日期'},
                {name: 'AQIindex', index: 1, text: 'AQI指数'},
                {name: 'PM25', index: 2, text: 'PM2.5'},
                {name: 'PM10', index: 3, text: 'PM10'},
                {name: 'CO', index: 4, text: '一氧化碳 (CO)'},
                {name: 'NO2', index: 5, text: '二氧化氮 (NO2)'},
                {name: 'SO2', index: 6, text: '二氧化硫 (SO2)'},
                {name: '等级', index: 7, text: '等级'}
            ];

            require([
                'data/aqi/BJdata',
                'data/aqi/GZdata',
                'data/aqi/SHdata',
                'zrender/core/util',
                'echarts',
                'echarts/chart/parallel',
                'echarts/component/legend',
                'echarts/component/visualMap',
                'echarts/component/parallel',
            ], function (dataBJ, dataGZ, dataSH, zrUtil, echarts) {

                var chart = echarts.init(document.getElementById('main'));

                var lineStyle = {
                    normal: {
                        width: 1
                        // opacity: 0.5,
                        // shadowBlur: 10,
                        // shadowOffsetX: 0,
                        // shadowOffsetY: 0,
                        // shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                };

                chart.setOption({
                    legend: {
                        bottom: 30,
                        data: ['北京', '上海', '广州'],
                        itemGap: 20,
                        textStyle: {
                            // color: '#fff',
                            fontSize: 16
                        }
                    },
                    tooltip: {
                        padding: 10,
                        backgroundColor: '#222',
                        borderColor: '#777',
                        borderWidth: 1,
                        formatter: function (obj) {
                            var value = obj[0].value;
                            return '<div style="border-bottom: 1px solid rgba(255,255,255,.3); font-size: 18px;padding-bottom: 7px;margin-bottom: 7px">'
                                + obj[0].seriesName + ' ' + value[0] + '日期：'
                                + value[7]
                                + '</div>'
                                + schema[1].text + '：' + value[1] + '<br>'
                                + schema[2].text + '：' + value[2] + '<br>'
                                + schema[3].text + '：' + value[3] + '<br>'
                                + schema[4].text + '：' + value[4] + '<br>'
                                + schema[5].text + '：' + value[5] + '<br>'
                                + schema[6].text + '：' + value[6] + '<br>';
                        }
                    },
                    visualMap: {
                        show: true,
                        min: 0,
                        max: 150,
                        dimension: 2,
                        inRange: {
                            color: ['#d94e5d','#eac736','#50a3ba'].reverse(),
                            // colorAlpha: [0, 1]
                        }
                    },
                    // dataZoom: {
                    //     show: true,
                    //     orient: 'vertical',
                    //     parallelAxisIndex: [0]
                    // },
                    parallelAxis: [
                        {dim: 0, name: schema[0].text, inverse: true, max: 31, nameLocation: 'start'},
                        {dim: 1, name: schema[1].text},
                        {dim: 2, name: schema[2].text},
                        {dim: 3, name: schema[3].text},
                        {dim: 4, name: schema[4].text},
                        {dim: 5, name: schema[5].text},
                        {dim: 6, name: schema[6].text},
                        {dim: 7, name: schema[7].text,
                        type: 'category', data: ['优', '良', '轻度污染', '中度污染', '重度污染', '严重污染']}
                    ],
                    parallel: {
                        bottom: 100,
                        parallelAxisDefault: {
                            type: 'value',
                            name: 'AQI指数',
                            nameLocation: 'end',
                            nameGap: 20,
                            nameTextStyle: {
                                // color: '#fff',
                                fontSize: 14
                            },
                            axisLine: {
                                lineStyle: {
                                    // color: '#aaa'
                                }
                            },
                            axisTick: {
                                lineStyle: {
                                    // color: '#777'
                                }
                            },
                            splitLine: {
                                show: false
                            },
                            axisLabel: {
                                textStyle: {
                                    // color: '#fff'
                                }
                            }
                        }
                    },
                    series: [
                        {
                            name: '北京',
                            type: 'parallel',
                            lineStyle: lineStyle,
                            data: dataBJ
                            // data: [
                            //     [ 1, 32,12 , 19, 28,1.39,24, 8,"优"],
                            // ]
                        },
                        {
                            name: '上海',
                            type: 'parallel',
                            lineStyle: lineStyle,
                            data: dataSH
                            // data: [
                            //     [ 1, 332,212 , 119, 128,12.39,124, 18,"良"],
                            // ]
                        },
                        {
                            name: '广州',
                            type: 'parallel',
                            lineStyle: lineStyle,
                            data: dataGZ
                        }
                    ]
                });


                chart.on('axisAreaSelected', function (event) {

                    var indices = chart.getModel().getSeries()[0].getRawIndicesByActiveState('active');
                    console.log('北京: ', indices);

                });
            });

        </script>
    </body>
</html>