<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="esl.js"></script>
        <script src="config.js"></script>
        <script src="lib/jquery.min.js"></script>
        <script src="lib/facePrint.js"></script>
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
                'echarts/chart/map',
                'echarts/component/title',
                'echarts/component/legend',
                'echarts/component/visualMap',
                'echarts/component/geo'
            ], function (echarts) {

                require(['map/js/china-contour', 'map/js/china'], function (contour) {
                    var chart = echarts.init(document.getElementById('main'));

                    var itemStyle = {
                        normal:{
                            borderColor: 'rgba(0, 0, 0, 0.2)'
                        },
                        emphasis:{
                            shadowOffsetX: 0,
                            shadowOffsetY: 0,
                            shadowBlur: 20,
                            borderWidth: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }

                    chart.setOption({
                        title : {
                            text: 'iphone销量',
                            subtext: '纯属虚构',
                            left: 'center'
                        },
                        legend: {
                            orient: 'vertical',
                            left: 'left',
                            data:['iphone3','iphone4','iphone5']
                        },
                        visualMap: {
                            min: 0,
                            max: 1500,
                            left: 'left',
                            top: 'bottom',
                            text:['高','低'],           // 文本，默认为数值文本
                            calculable : true
                        },
                        selectedMode: 'single',
                        geo: [
                            {
                                name: 'detail',
                                type: 'map',
                                map: 'china',
                                data: [],
                                roam: true
                            },
                            {
                                name: 'contour',
                                type: 'map',
                                roam: true,
                                map: 'china-contour',
                                itemStyle: {
                                    normal: {
                                        borderWidth: 3,
                                        borderColor: '#000',
                                        areaColor: 'transparent',
                                    },
                                    emphasis: {
                                        areaColor: 'transparent'
                                    }
                                }
                            }
                        ],
                        series : []
                    });
                });
            });

        </script>
    </body>
</html>