<html>
    <head>
        <meta charset="utf-8">
        <script src="esl.js"></script>
        <script src="config.js"></script>
    </head>
    <body>
        <style>
            #main {
                position: relative;
                text-align: center;
            }
            .title {
                display: block;
                cursor: pointer;
                text-decoration: none;
                clear: both;
                text-align: center;
                margin: 0;
                background: #eef;
                line-height: 22px;
            }
            .block {
                display: inline-block;
                *display: inline;
                *zoom: 1;
                vertical-align: top;
                margin: 30px 0 30px 50px;
            }
            .block .ec {
                width: 800px;
                height: 240px;
            }
            .block .info {
                display: block;
                text-align: left;
                background: #eee;
                border-radius: 3px;
                font-size: 12px;
                line-height: 18px;
                padding: 0 5px;
            }
            .block .info td {
                font-size: 12px;
                border: 1px solid #bbb;
                padding: 1px 3px;
            }
            strong {
                color: red;
                font-weight: bold;
                font-size: 18px;
                padding: 0 3px;
            }
        </style>
        <div id="main"></div>




        <script>

            var echarts;
            var zrUtil;
            var charts = [];
            var els = [];

            require([
                'echarts',
                'zrender/core/util',
                'echarts/chart/line',
                'echarts/chart/scatter',
                'echarts/component/legend',
                'echarts/component/grid',
                'echarts/component/tooltip',
                'echarts/component/toolbox',
                'echarts/component/dataZoom'
            ], function (ec, zu) {
                echarts = ec;
                zrUtil = zu;


                renderTitle('Order sensitive in processing: no min/max on y (<strong>Try zooming y slider to check if normal</strong>)');
                makeChart(getOption(
                    makeSpecialTrendData(),
                    {
                        xAxisType: 'value',
                        xStart: 15,
                        xEnd: 80,
                        yScale: true,
                        symbolSize: 5
                    }
                ), 500);


                renderTitle('Order sensitive in processing: min/max set on y (<strong>Try zooming y slider to check if normal</strong>)');
                makeChart(getOption(
                    makeSpecialTrendData(),
                    {
                        xAxisType: 'value',
                        xStart: 15,
                        xEnd: 80,
                        yScale: true,
                        symbolSize: 5,
                        yMin: 500,
                        yMax: 3000
                    }
                ), 500);


                renderTitle('Order sensitive in processing: only max set on y and scale (<strong>Try zooming y slider to check if normal</strong>)');
                makeChart(getOption(
                    makeSpecialTrendData(),
                    {
                        xAxisType: 'value',
                        xStart: 15,
                        xEnd: 80,
                        yScale: true,
                        symbolSize: 5,
                        yMax: 3000
                    }
                ), 500);


                renderTitle('Order sensitive in processing: only max set on y and no scale (<strong>Try zooming y slider to check if normal</strong>)');
                makeChart(getOption(
                    makeSpecialTrendData(),
                    {
                        xAxisType: 'value',
                        xStart: 15,
                        xEnd: 80,
                        yScale: false,
                        symbolSize: 5,
                        yMax: 3000
                    }
                ), 500);
            });



            function makeSpecialTrendData() {
                var data = {data1: []};
                var base = -100;
                for (var i = 0; i < 50; i++) {
                    if (i < 10) {
                        data.data1.push([i * 10, base += 197 + random(3)]);
                    }
                    else if (i < 20) {
                        data.data1.push([i * 10, base -= 17 + random(3)]);
                    }
                    else if (i < 30) {
                        data.data1.push([i * 10, base += 3 + random(3)]);
                    }
                    else if (i < 40) {
                        data.data1.push([i * 10, base -= 5 + random(3)]);
                    }
                    else {
                        data.data1.push([i * 10, base += 157 + random(3)]);
                    }
                }
                return data;
            }


            function renderTitle(label) {
                var containerEl = document.getElementById('main');
                var el = document.createElement('a');
                el.className = 'title';
                var html = label; // label is html
                el.innerHTML = html;
                el.href = '#' + html.replace(/\s/g, '_');
                el.name = html.replace(/\s/g, '_');
                containerEl.appendChild(el);
            }

            function makeChart(opt, height) {
                var heightStyle = height ? ' style="height:' + height + 'px;" ' : '';

                var containerEl = document.getElementById('main');
                var el = document.createElement('div');
                el.className = 'block';
                el.innerHTML = '<div ' + heightStyle + ' class="ec"></div><div class="info"></div>';
                containerEl.appendChild(el);

                var chart = echarts.init(el.firstChild, null, {renderer: 'canvas'});
                chart.setOption(opt);

                charts.push(chart);
                els.push(el);

                chart.on('dataZoom', zrUtil.curry(renderProp, chart, el, false));
                renderProp(chart, el, true);
            }

            function renderProp(chart, el, isInit) {
                var resultOpt = chart.getOption();
                var dataZoomOpt = zrUtil.map(resultOpt.dataZoom, function (rawOpt) {
                    return ''
                        + '<tr>'
                        + '<td>name:</td><td>' + encodeHTML(rawOpt.name) + '</td>'
                        + '<td>start:</td><td>' + encodeHTML(rawOpt.start) + '</td>'
                        + '<td>end:</td><td>' + encodeHTML(rawOpt.end) + '</td>'
                        + '<td>startValue:</td><td>' + encodeHTML(rawOpt.startValue) + '</td>'
                        + '<td>endValue:</td><td>' + encodeHTML(rawOpt.endValue) + '</td>'
                        + '</tr>';
                });

                el.lastChild.innerHTML = ''
                    + (isInit ? 'ON_INIT: ' : 'ON_EVENT: ') + '<br>'
                    + '<table><tbody>' + dataZoomOpt.join('') + '</tbody></table>';
            }

            function encodeHTML(source) {
                return source == null
                    ? ''
                    : String(source)
                        .replace(/&/g, '&amp;')
                        .replace(/</g, '&lt;')
                        .replace(/>/g, '&gt;')
                        .replace(/"/g, '&quot;')
                        .replace(/'/g, '&#39;');
            }

            function random(max) {
                return +(Math.random() * max).toFixed(3);
            };

            function getOption(data, args) {
                args = zrUtil.defaults(
                    args || {},
                    {
                        symbol: null,
                        xStart: 1,
                        xEnd: 5,
                        yStart: 0,
                        yEnd: 100,
                        yFitlerMode: 'empty',
                        symbolSize: 10
                    }
                );

                var option = {
                    animation: false,
                    legend: {
                        data: ['n1', 'n2']
                    },
                    toolbox: {
                        feature: {
                            dataView: {},
                            dataZoom: {show: true},
                            restore: {show: true},
                            saveAsImage: {}
                        }
                    },
                    tooltip: {
                        trigger: 'axis'
                    },
                    xAxis: {
                        type: args.xAxisType,
                        splitLine: {
                            show: true
                        },
                        data: args.xAxisData
                    },
                    yAxis: {
                        scale: args.yScale,
                        type: 'value',
                        min: args.yMin,
                        max: args.yMax,
                        splitLine: {
                            show: true
                        }
                    },
                    dataZoom: [
                        {
                            id: 'xSlider',
                            name: 'xSlider',
                            show: true,
                            filterMode: args.xFilterMode,
                            xAxisIndex: [0],
                            start: args.xStart,
                            end: args.xEnd
                        },
                        {
                            name: 'ySlider',
                            show: true,
                            filterMode: args.yFitlerMode,
                            yAxisIndex: [0],
                            start: args.yStart,
                            end: args.yEnd
                        },
                        {
                            name: 'xInside',
                            type: 'inside',
                            filterMode: args.xFilterMode,
                            xAxisIndex: [0],
                            start: args.xStart,
                            end: args.xEnd
                        },
                        {
                            name: 'yInside',
                            type: 'inside',
                            filterMode: args.yFilterMode,
                            yAxisIndex: [0],
                            start: args.yStart,
                            end: args.yEnd
                        }
                    ],
                    series: [
                        {
                            name: 'n1',
                            type: 'line',
                            symbolSize: args.symbolSize,
                            symbol: args.symbol,
                            data: data.data1
                        },
                        {
                            name: 'n2',
                            type: 'line',
                            symbol: args.symbol,
                            symbolSize: args.symbolSize,
                            data: data.data2
                        }
                    ]
                };

                if (!data.data2) {
                    option.series.splice(1, 1);
                }

                return option;
            }


        </script>

    </body>
</html>