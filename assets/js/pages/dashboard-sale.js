var num1 = document.getElementById("num_institution").value;

var name1 = document.getElementById("name_institution").value;
var ins1 = document.getElementById("num_institution1").value;

var name2 = document.getElementById("name_institution2").value;
var ins2 = document.getElementById("num_institution2").value;

var name3 = document.getElementById("name_institution3").value;
var ins3 = document.getElementById("num_institution3").value;

var name4 = document.getElementById("name_institution4").value;
var ins4 = document.getElementById("num_institution4").value;

var name5 = document.getElementById("name_institution5").value;
var ins5 = document.getElementById("num_institution5").value;

var name6 = document.getElementById("name_institution6").value;
var ins6 = document.getElementById("num_institution6").value;

var name7 = document.getElementById("name_institution7").value;
var ins7 = document.getElementById("num_institution7").value;

var name8 = document.getElementById("name_institution8").value;
var ins8 = document.getElementById("num_institution8").value;

var name9 = document.getElementById("name_institution9").value;
var ins9 = document.getElementById("num_institution9").value;

var name10 = document.getElementById("name_institution10").value;
var ins10 = document.getElementById("num_institution10").value;

var name11 = document.getElementById("name_institution11").value;
var ins11 = document.getElementById("num_institution11").value;

var name12 = document.getElementById("name_institution12").value;
var ins12 = document.getElementById("num_institution12").value;

var name13 = document.getElementById("name_institution13").value;
var ins13 = document.getElementById("num_institution13").value;



'use strict';
$(document).ready(function() {
    setTimeout(function() {
        floatchart()
    }, 700);
    // [ campaign-scroll ] start
    var px = new PerfectScrollbar('.feed-scroll', {
        wheelSpeed: .5,
        swipeEasing: 0,
        wheelPropagation: 1,
        minScrollbarLength: 40,
    });
    var px = new PerfectScrollbar('.pro-scroll', {
        wheelSpeed: .5,
        swipeEasing: 0,
        wheelPropagation: 1,
        minScrollbarLength: 40,
    });
    // [ campaign-scroll ] end
});

function floatchart() {
    // [ support-chart ] start
    $(function() {
        var options1 = {
            chart: {
                type: 'area',
                height: 85,
                sparkline: {
                    enabled: true
                }
            },
            colors: ["#7267EF"],
            stroke: {
                curve: 'smooth',
                width: 2,
            },
            series: [{
                data: [0, 20, 10, 45, 30, 55, 20, 30, 0]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Ticket '
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        }
        new ApexCharts(document.querySelector("#support-chart"), options1).render();
        var options2 = {
            chart: {
                type: 'bar',
                height: 85,
                sparkline: {
                    enabled: true
                }
            },
            colors: ["#7267EF"],
            plotOptions: {
                bar: {
                    columnWidth: '70%'
                }
            },
            series: [{
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54, 44, 12, 36, 9, 54, 25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 25, 44, 12, 36, 9, 54]
            }],
            xaxis: {
                crosshairs: {
                    width: 1
                },
            },
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return ''
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        }
        new ApexCharts(document.querySelector("#support-chart1"), options2).render();
    });
    // [ support-chart ] end
    // [ account-chart ] start
    $(function() {
        $(function() {
            var options = {
                chart: {
                    height: 350,
                    type: 'line',
                    stacked: false,
                },
                stroke: {
                    width: [0, 3],
                    curve: 'smooth'
                },
                plotOptions: {
                    bar: {
                        columnWidth: '50%'
                    }
                },
                colors: ['#7267EF', '#c7d9ff'],
                series: [{
                    name: 'Total Sales',
                    type: 'column',
                    data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
                }, {
                    name: 'Average',
                    type: 'line',
                    data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39]
                }],
                fill: {
                    opacity: [0.85, 1],
                },
                labels: ['01/01/2003', '02/01/2003', '03/01/2003', '04/01/2003', '05/01/2003', '06/01/2003', '07/01/2003', '08/01/2003', '09/01/2003', '10/01/2003', '11/01/2003'],
                markers: {
                    size: 0
                },
                xaxis: {
                    type: 'datetime'
                },
                yaxis: {
                    min: 0
                },
                tooltip: {
                    shared: true,
                    intersect: false,
                    y: {
                        formatter: function(y) {
                            if (typeof y !== "undefined") {
                                return "$ " +y.toFixed(0);
                            }
                            return y;

                        }
                    }
                },
                legend: {
                    labels: {
                        useSeriesColors: true
                    },
                    markers: {
                        customHTML: [
                            function() {
                                return ''
                            },
                            function() {
                                return ''
                            }
                        ]
                    }
                }
            }
            var chart = new ApexCharts(
                document.querySelector("#account-chart"),
                options
            );
            chart.render();
        });
    });
    // [ account-chart ] end
    // [ satisfaction-chart ] start
    $(function() {
        var options = {
            chart: {
                height: 260,
                type: 'pie',
            },
            series: [parseInt(ins1), parseInt(ins2), parseInt(ins3), parseInt(ins4),parseInt(ins5),parseInt(ins6),parseInt(ins7),parseInt(ins8),parseInt(ins9),parseInt(ins10),parseInt(ins11),parseInt(ins12),parseInt(ins13)],
            labels: [name1, name2, name3, name4,name5,name6,name7,name8,name9,name10,name11,name12,name13],
            legend: {
                show: true,
                offsetY: 50,
            },
            dataLabels: {
                enabled: true,
                dropShadow: {
                    enabled: false,
                }
            },
            theme: {
                monochrome: {
                    enabled: true,
                    color: '#008f80',
                }
            },
            responsive: [{
                breakpoint: 768,
                options: {
                    chart: {
                        height: 320,

                    },
                    legend: {
                        position: 'bottom',
                        offsetY: 0,
                    }
                }
            }]
        }
        var chart = new ApexCharts(document.querySelector("#satisfaction-chart"), options);
        chart.render();
    });
    // [ satisfaction-chart ] end
}
