<html>
    <head>
        <meta charset="utf-8">
        <script src="esl.js"></script>
        <script src="config.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="reset.css">
    </head>
    <body>
        <style>
        </style>
        <div>
            <input type="button" value="exchangeXY" onclick="go.exchangeXY();">
            <input type="button" value="illegal use getModel.option" onclick="go.illegal();">
            <input type="button" value="dataZoom restore (error if view changed)" onclick="go.dataZoomRestore();">
        </div>
        <div id="main"></div>
        <script>

            var chart;
            var myChart;
            var go;

            require([
                'echarts',
                'echarts/chart/bar',
                'echarts/chart/line',
                'echarts/component/legend',
                'echarts/component/grid',
                'echarts/component/tooltip',
                'echarts/component/markLine',

                // dataZoom and toolbox is required for reproduct bug.
                'echarts/component/dataZoom',
                'echarts/component/toolbox'

            ], function (echarts) {

                chart = myChart = echarts.init(document.getElementById('main'), null, {
                    renderer: 'canvas'
                });


                option = {
                    toolbox: {
                        feature: {
                            dataZoom: {}
                        }
                    },
                    dataZoom: [{
                        show: true,
                        end: 80
                    }, {
                        type: 'inside',
                        end: 80
                    }],
                    legend: {
                        data:['邮件营销','联盟广告','视频广告','直接访问','搜索引擎']
                    },
                    xAxis : [
                        {
                            type : 'category',
                            boundaryGap : false,
                            data : ['周一','周二','周三','周四','周五','周六','周日']
                        }
                    ],
                    yAxis : [
                        {
                            type : 'value'
                        }
                    ],
                    series : [
                        {
                            name:'邮件营销',
                            type:'line',
                            stack: '总量',
                            data:[120, 132, 101, 134, 90, 230, 210]
                        },
                        {
                            name:'联盟广告',
                            type:'line',
                            stack: '总量',
                            data:[220, 182, 191, 234, 290, 330, 310]
                        },
                        {
                            name:'视频广告',
                            type:'line',
                            stack: '总量',
                            data:[150, 232, 201, 154, 190, 330, 410]
                        },
                        {
                            name:'直接访问',
                            type:'line',
                            stack: '总量',
                            data:[320, 332, 301, 334, 390, 330, 320]
                        },
                        {
                            name:'搜索引擎',
                            type:'line',
                            stack: '总量',
                            data:[820, 932, 901, 934, 1290, 1330, 1320]
                        }
                    ]
                };


                go = {
                    exchangeXY: function () {
                        var option = myChart.getOption();
                        var temp;
                        temp = option.xAxis;
                        option.xAxis = option.yAxis;
                        option.yAxis = temp;
                        myChart.setOption(option);
                    },

                    illegal: function () {
                        try {
                            var option = myChart.getModel.option;
                            var temp;
                            temp = option.xAxis;
                            option.xAxis = option.yAxis;
                            option.yAxis = temp;
                            myChart.setOption(option);
                            alert('error');
                        }
                        catch (e) {
                            alert('ok');
                        }
                    },

                    dataZoomRestore: function () {
                        var option = myChart.getOption();
                        myChart.setOption(option);
                    }
                };



                chart.setOption(option);
            });

        </script>
    </body>
</html>