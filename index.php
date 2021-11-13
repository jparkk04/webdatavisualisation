<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.0/lodash.min.js"></script>
        <script src="https://unpkg.com/webcola@3.3.8/WebCola/cola.min.js"></script>
        <script src="https://unpkg.com/popper.js@1.14.4/dist/umd/popper.js"></script>
        <script src="https://unpkg.com/tippy.js@2.6.0/dist/tippy.all.js"></script>

          <!-- cy libs -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cytoscape/3.20.0/cytoscape.min.js"></script>
        <script src="https://unpkg.com/cytoscape-cola@2.2.3/cytoscape-cola.js"></script>
        <script src="https://unpkg.com/cytoscape-popper@1.0.2/cytoscape-popper.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
        <style>
            #cy {
                height: 500px;
            }
        </style>
    </head>
    <body>
        <canvas class = "my-4 w-100" id = "sampleChart" width = "900" height = "380"></canvas>
        <canvas class = "my-4 w-100" id = "sampleChart2" width = "900" height = "380"></canvas>
        <canvas class = "my-4 w-100" id = "sampleChart3" width = "900" height = "380"></canvas>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        
        <div id="cy"></div>
        <script>

            var cy = cytoscape({
                container: document.getElementById('cy'),
                style: [{
                    selector: "node",
                    css: {
                        "label": "data(name)",
                        "text-valign": "center",
                        "text-halign": "center",
                        "height": "data(freq)",
                        "width": "data(freq)"
                    }
                }],
                elements: [
                    {
                        'group': 'nodes',
                        'data': {
                            'id': 'node1',
                            'name': 'node1',
                            'freq': 50
                        }
                    },
                    {
                        'group': 'nodes',
                        'data': {
                            'id': 'node2',
                            'name': 'node2',
                            'freq': 100
                        }
                    },
                    {
                        'group': 'edges',
                        'data': {
                            'id': 'edge1',
                            'source': 'node1',
                            'target': 'node2'
                        }
                    },
                ]
            })

            var ctx = document.getElementById('sampleChart');
            var cty = document.getElementById('sampleChart2');
            var ctz = document.getElementById('sampleChart3');

            var chart1 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['data1','data2','data3'],
                    datasets: [{
                        data: [1,2,3],
                        lineTension: 0,
                        borderWidth: 1,
                        backgroundColor: '#563bff',
                        borderColor: '#563bff',
                        borderRadius: 15,
                        pointBackgroundColor: '#563bff'
                    },
                    {
                        type: 'line',
                        data: [1,2,3],
                        fill: false,
                        borderColor: "#78DEC7",
                        order: 1
                    }
                    ]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            ticks: {
                                beginAtZero: true
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: true
                        },
                        title: {
                            display: true,
                            text: "Sample Chart",
                            font: {
                                size: 20
                            }
                        }
                    }
                }
            })

            var chart2 = new Chart(cty, {
                type: 'line',
                data: {
                    labels: ['data1','data2','data3'],
                    datasets: [{
                        data: [1,2,3],
                        lineTension: 0,
                        borderWidth: 1,
                        backgroundColor: '#563bff',
                        borderColor: '#563bff',
                        borderRadius: 15,
                        pointBackgroundColor: '#563bff'
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            ticks: {
                                beginAtZero: true
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: true
                        },
                        title: {
                            display: true,
                            text: "Sample Chart",
                            font: {
                                size: 20
                            }
                        }
                    }
                }
            })

            var chart3 = new Chart(ctz, {
                type: 'doughnut',
                data: {
                    labels: ['data1','data2','data3'],
                    datasets: [{
                        label: 'pieChart',
                        data: [50,30,10],
                        backgroundColor: ['black', 'red', 'green'],
                        hoverOffset: 30
                    }]
                }
            })
        </script>
    </body>
</html>