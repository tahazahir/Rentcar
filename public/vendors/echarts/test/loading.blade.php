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
                margin: 0;
            }
            #main {
                background: #fff;
            }
        </style>
        <div id="main"></div>
        <script>

            require([
                'echarts'
            ], function (echarts) {

                var chart = echarts.init(document.getElementById('main'));
                chart.showLoading({
                    text: '暂无数据'
                });
                window.onresize = chart.resize;
            });
        </script>
    </body>
</html>