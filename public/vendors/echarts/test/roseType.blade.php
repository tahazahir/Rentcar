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
                'echarts/chart/pie',
                'echarts/component/legend',
                'echarts/component/grid',
                'echarts/component/tooltip'
            ], function (echarts) {

                var chart = echarts.init(document.getElementById('main'), null, {
                    renderer: 'canvas'
                });

                var itemStyle = {
                    normal: {
                        // shadowBlur: 10,
                        // shadowOffsetX: 0,
                        // shadowOffsetY: 5,
                        // shadowColor: 'rgba(0, 0, 0, 0.4)'
                    }
                };

                chart.setOption({
                    legend: {
                        data:['直接访问','邮件营销','联盟广告','视频广告','搜索引擎']
                    },
                    tooltip: {

                    },
                    series: [{
                        name: 'pie',
                        type: 'pie',
                        stack: 'all',
                        symbol: 'circle',
                        symbolSize: 10,
                        selectedMode: 'single',
                        selectedOffset: 20,
                        roseType: true,
                        data:[
                            {value:335, name:'直接访问'},
                            {value:310, name:'邮件营销'},
                            {value:234, name:'联盟广告'},
                            {value:135, name:'视频广告'},
                            {value:600, name:'搜索引擎'}
                        ],
                        itemStyle: itemStyle
                    }]
                });
            })

        </script>
    </body>
</html>