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
                padding: 0;
            }
            .controller {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                background: #fff;
                border-bottom: 1px solid #ccc;
                line-height: 30px;
                z-index: 100;
            }
            .controller label {
                margin-right: 10px;
            }
            .item-title {
                font-weight: bold;
            }
            .controller .item {
                margin-right: 20px;
                padding-right: 10px;
                border-right: 1px solid #ccc;
            }
            .tooltip-title {
                color: yellow;
                font-size: 16px;
                margin-bottom: 5px;
            }
        </style>
        <div class="controller">
            <span class="item">
                <span class="item-title">childrenVisibleMin:</span>
                <input type="radio" id="childrenVisibleMin-0" name="childrenVisibleMin" onclick="childrenVisibleMinChange(0);" checked="checked"/>
                <label for="childrenVisibleMin-0">0</label>
                <input type="radio" id="childrenVisibleMin-1" name="childrenVisibleMin" onclick="childrenVisibleMinChange(1000000);"/>
                <label for="childrenVisibleMin-1">1000000</label>
            </span>
            <span class="item">
                <span class="item-title">colorMapping:</span>
                <input type="radio" id="colorMapping-0" name="colorMapping" onclick="colorMappingChange('index');" checked="checked"/>
                <label for="colorMapping-0">byIndex</label>
                <input type="radio" id="colorMapping-1" name="colorMapping" onclick="colorMappingChange('value');"/>
                <label for="colorMapping-1">byValue</label>
            </span>
            <span class="item">
                <span class="item-title">leafDepth:</span>
                <input type="radio" id="leafDepth-0" name="leafDepth" onclick="leafDepthChange(null);" checked="checked"/>
                <label for="leafDepth-0">Not set</label>
                <input type="radio" id="leafDepth-1" name="leafDepth" onclick="leafDepthChange(1);"/>
                <label for="leafDepth-1">Set to 1</label>
                <input type="radio" id="leafDepth-2" name="leafDepth" onclick="leafDepthChange(2);"/>
                <label for="leafDepth-1">Set to 2</label>
            </span>
        </div>

        <div id="main"></div>

        <script src="data/disk.tree.js"></script>

        <script>

            var chart;
            var formatUtil;

            require([
                'echarts',
                'echarts/util/format',
                'echarts/component/tooltip',
                'echarts/component/legend',
                'echarts/chart/treemap'
            ], function (echarts, format) {
                formatUtil = format;
                initEcharts(echarts);
            });

            function childrenVisibleMinChange(value) {
                chart.setOption({
                    series: [{
                        childrenVisibleMin: value
                    }]
                });
            }

            function colorMappingChange(value) {
                var levelOption = getLevelOption(value);
                chart.setOption({
                    series: [{
                        levels: levelOption
                    }]
                });
            }

            function leafDepthChange(value) {
                chart.setOption({
                    series: [{
                        leafDepth: value
                    }]
                });
            }

            function getLevelOption(colorMapping) {
                return [
                    {
                        color: ['#d14a61'], // default color
                        itemStyle: {
                            normal: {
                                borderWidth: 0,
                                gapWidth: 5
                            }
                        }
                    },
                    {
                        color: [
                            '#d14a61', '#fd9c35',
                            '#675bba', '#fec42c', '#dd4444',
                            '#d4df5a', '#cd4870'
                        ],
                        colorMappingBy: colorMapping,
                        itemStyle: {
                            normal: {
                                gapWidth: 1
                            }
                        }
                    },
                    {
                        colorSaturation: [0.35, 0.5],
                        itemStyle: {
                            normal: {
                                gapWidth: 1,
                                borderColorSaturation: 0.6
                            }
                        }
                    }
                ];
            }

            function initEcharts(echarts) {
                chart = echarts.init(document.getElementById('main'), null, {
                    renderer: 'canvas'
                });

                chart.setOption({

                    tooltip: {
                        formatter: function (info) {
                            var value = info.value;
                            var treePathInfo = info.treePathInfo;
                            var treePath = [];

                            for (var i = 1; i < treePathInfo.length; i++) {
                                treePath.push(treePathInfo[i].name);
                            }

                            return [
                                '<div class="tooltip-title">' + formatUtil.encodeHTML(treePath.join('/')) + '</div>',
                                'Disk Usage: ' + formatUtil.addCommas(value) + ' KB',
                            ].join('');
                        }
                    },

                    series: [
                        {
                            name:'Disk Usage',
                            type:'treemap',
                            visibleMin: 300,
                            // childrenVisibleMin: 500000,
                            label: {
                                show: true,
                                formatter: '{b}'
                                // normal: {
                                //     textStyle: {
                                //         color: 'black'
                                //     }
                                // }
                            },
                            itemStyle: {
                                normal: {
                                    borderColor: '#fff'
                                },
                                emphasis: {
                                }
                            },
                            levels: getLevelOption('index'),
                            data: window.disk_usage_tree
                        }
                    ]
                });

                chart.on('click', function (params) {
                    console.log(params);
                });
            }

        </script>
    </body>
</html>