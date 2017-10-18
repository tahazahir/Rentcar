<html>
    <head>
        <meta charset='utf-8'>
        <script src='esl.js'></script>
        <script src='config.js'></script>
    </head>
    <body>
        <style>
            html, body, #main {
                width: 100%;
                height: 100%;
            }
        </style>
        <div id='main'></div>
        <script>

            require([
                'echarts',
                'echarts/chart/line',
                'echarts/component/legend',
                'echarts/component/grid',
                'echarts/component/tooltip',
                'echarts/component/title',
                'echarts/component/dataZoom',

                'echarts/scale/Log'
            ], function (echarts) {
            var chart = echarts.init(document.getElementById('main'));
                chart.setOption({
                    title: {
                        text: '对数轴示例',
                        x: 'center'
                    },
                    tooltip: {
                        trigger: 'item',
                        formatter: '{a} <br/>{b} : {c}'
                    },
                    legend: {
                        left: 'left',
                        data: ['2的指数', '3的指数']
                        },
                        xAxis: [{
                        type: 'category',
                        name: 'x',
                        splitLine: {show: false},
                        data: ['一', '二', '三', '四', '五', '六', '七', '八', '九']
                    }],
                    yAxis: [{
                        type: 'log',
                        name: 'y'
                    }],
                    series: [
                    {
                        name: '3的指数',
                        type: 'line',
                        data: [1, 3, 9, 27, 81, 247, 741, 2223, 6669]
                    },
                    {
                        name: '2的指数',
                        type: 'line',
                        data: [1, 2, 4, 8, 16, 32, 64, 128, 256]
                    },
                    {
                        name: '0.1 的指数',
                        type: 'line',
                        data: [1, 0.1, 0.01, 1e-3, 1e-4, 1e-5, 1e-6, 1e-7, 1e-8]
                    }]
                });
            });

        </script>
    </body>
</html>