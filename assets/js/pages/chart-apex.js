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

//RECIBE LOS DATOS DEL GRAFICO DE ESTUDIANTES RECIBIDOS POR MES//

var month1 = document.getElementById("mon1").value;
var month2 = document.getElementById("mon2").value;
var month3 = document.getElementById("mon3").value;
var month4 = document.getElementById("mon4").value;
var month5 = document.getElementById("mon5").value;
var month6 = document.getElementById("mon6").value;
var month7 = document.getElementById("mon7").value;
var month8 = document.getElementById("mon8").value;
var month9 = document.getElementById("mon9").value;
var month10 = document.getElementById("mon10").value;
var month11 = document.getElementById("mon11").value;
var month12 = document.getElementById("mon12").value;

//RECIBE DATOS DEL GRAFICO DE INGRESADOS POR servicio//
var pro1 = document.getElementById("program1").value;
var pro2 = document.getElementById("program2").value;
var pro3 = document.getElementById("program3").value;
var pro4 = document.getElementById("program4").value;
var pro6 = document.getElementById("program6").value;
var pro7 = document.getElementById("program7").value;
var pro9 = document.getElementById("program9").value;
var pro10 = document.getElementById("program10").value;
var pro11 = document.getElementById("program11").value;
var pro12= document.getElementById("program12").value;
var pro13= document.getElementById("program13").value;
var pro14 = document.getElementById("program14").value;
var pro15 = document.getElementById("program15").value;
var pro16 = document.getElementById("program16").value;
var pro17= document.getElementById("program17").value;
var pro18= document.getElementById("program18").value;
var pro19 = document.getElementById("program19").value;
var pro20 = document.getElementById("program20").value;
var pro21 = document.getElementById("program21").value;
var pro22 = document.getElementById("program22").value;
var pro23 = document.getElementById("program23").value;
//se muestran los programas
var ps1 = document.getElementById("prog1").value;
var ps2 = document.getElementById("prog2").value;
var ps3 = document.getElementById("prog3").value;
var ps4 = document.getElementById("prog4").value;
var ps5 = document.getElementById("prog5").value;
var ps6 = document.getElementById("prog6").value;
var ps7 = document.getElementById("prog7").value;
var ps8 = document.getElementById("prog8").value;
var ps9 = document.getElementById("prog9").value;
var ps10 = document.getElementById("prog10").value;
var ps11 = document.getElementById("prog11").value;
var ps12 = document.getElementById("prog12").value;
var ps13 = document.getElementById("prog13").value;
//captura el valor del elemento
var fr1 = document.getElementById("for1").value;
var fr2 = document.getElementById("for2").value;
var fr3 = document.getElementById("for3").value;
var fr4 = document.getElementById("for4").value;




'use strict';
$(document).ready(function() {
    setTimeout(function() {
        $(function() {
            var options = {
                chart: {
                    height: 300,
                    type: 'line',
                    zoom: {
                        enabled: false
                    }
                },
                dataLabels: {
                    enabled: false,
                    width: 2,
                },
                stroke: {
                    curve: 'straight',
                },
                colors: ["#7267EF"],
                series: [{
                    name: "Desktops",
                    data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
                }],
                title: {
                    text: 'Product Trends by Month',
                    align: 'left'
                },
                grid: {
                    row: {
                        colors: ['#f3f6ff', 'transparent'], // takes an array which will be repeated on columns
                        opacity: 0.5
                    },
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                }
            }

            var chart = new ApexCharts(
                document.querySelector("#line-chart-1"),
                options
            );
            chart.render();
        });
        $(function() {
            var options = {
                chart: {
                    height: 300,
                    type: 'area',
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                },
                colors: ["#ffa21d", "#EA4D4D"],
                series: [{
                    name: 'series1',
                    data: [31, 40, 28, 51, 42, 109, 100]
                }, {
                    name: 'series2',
                    data: [11, 32, 45, 32, 34, 52, 41]
                }],

                xaxis: {
                    type: 'datetime',
                    categories: ["2018-09-19T00:00:00", "2018-09-19T01:30:00", "2018-09-19T02:30:00", "2018-09-19T03:30:00", "2018-09-19T04:30:00", "2018-09-19T05:30:00", "2018-09-19T06:30:00"],
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    },
                }
            }

            var chart = new ApexCharts(
                document.querySelector("#area-chart-1"),
                options
            );

            chart.render();
        });
        $(function() {
            var options = {
                chart: {
                    height: 330,
                    type: 'bar',
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '50%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                colors: ["#0e9e4a", "#7267EF", "#EA4D4D"],
                stroke: {
                    show: true,
                    width: 0.8,
                    colors: ['transparent']
                },
                series: [{
                    name: 'Estudiantes',
                    data: [parseInt(month1), parseInt(month2), parseInt(month3), parseInt(month4), parseInt(month5), parseInt(month6), parseInt(month7),parseInt(month8),parseInt(month9),parseInt(month10),parseInt(month11),parseInt(month12)]
                }],
                xaxis: {
                    categories: ['EN','FE','MA', 'AB', 'MA', 'JU', 'JUL','AG','SE','OC','NO','DI'],
                },
                yaxis: {
                    title: {
                        text: 'Estudiantes'
                    }
                },
                fill: {
                    opacity: 0.8

                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return "" + val + ""
                        }
                    }
                }
            }
            var chart = new ApexCharts(
                document.querySelector("#bar-chart-1"),
                options
            );
            chart.render();
        });
        $(function() {
            var options = {
                chart: {
                    height: 330,
                    type: 'bar',
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '50%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                colors: ["#176399","#0e9e4a", "#7267EF"],
                stroke: {
                    show: true,
                    width: 0.8,
                    colors: ['transparent']
                },
                series: [{
                    name: '',
                    data: [parseInt(pro1),parseInt(pro2),parseInt(pro3),parseInt(pro4),parseInt(pro6),parseInt(pro7),parseInt(pro9),parseInt(pro10),parseInt(pro11),parseInt(pro12),parseInt(pro13),parseInt(pro14),parseInt(pro15),parseInt(pro16),parseInt(pro17),parseInt(pro18),parseInt(pro19),parseInt(pro20),parseInt(pro21),parseInt(pro22),parseInt(pro23)]
                }],
                xaxis: {
                    categories: ['URG','PED','MEI','GIN','CTR','TOX','CIR','EXU','UGP','PSI','FAC','ARC','GEH','FAR','JUR','NUT','INB','UCI','SGP','LAB','SST'],
                },
                yaxis: {
                    title: {
                        text: 'SERVICIOS'
                    }
                },
                fill: {
                    opacity: 0.8

                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return "" + val + ""
                        }
                    }
                }
            }
            var chart = new ApexCharts(
                document.querySelector("#bar-chart-2"),
                options
            );
            chart.render();
        });
        $(function() {
            var options = {
                chart: {
                    height: 330,
                    type: 'bar',
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '50%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                colors: ["#176399","#0e9e4a", "#7267EF"],
                stroke: {
                    show: true,
                    width: 0.8,
                    colors: ['transparent']
                },
                series: [{
                    name: '',
                    data: [parseInt(ps1),parseInt(ps2),parseInt(ps3),parseInt(ps4),parseInt(ps5),parseInt(ps6),parseInt(ps7),parseInt(ps8),parseInt(ps9),parseInt(ps10),parseInt(ps11),parseInt(ps12),parseInt(ps13)]
                }],
                xaxis: {
                    categories: ['MED','ENF','PSI','TRS','ADS','SEF','SAP','FIT','IBI','ATP','AXE','INQ','NUT'],
                },
                yaxis: {
                    title: {
                        text: 'PROGRAMAS'
                    }
                },
                fill: {
                    opacity: 0.8

                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return "" + val + ""
                        }
                    }
                }
            }
            var chart = new ApexCharts(
                document.querySelector("#bar-chart-6"),
                options
            );
            chart.render();
        });
        $(function() {
            var options = {
                chart: {
                    height: 350,
                    type: 'bar',
                },
                plotOptions: {
                    bar: {
                        horizontal: true,
                        dataLabels: {
                            position: 'top',
                        },
                    }
                },
                colors: ["#7267EF", "#0e9e4a"],
                dataLabels: {
                    enabled: true,
                    offsetX: -6,
                    style: {
                        fontSize: '12px',
                        colors: ['#fff']
                    }
                },
                stroke: {
                    show: true,
                    width: 1,
                    colors: ['#fff']
                },
                series: [{
                    data: [44, 55, 41, 64, 22, 43, 21]
                }, {
                    data: [53, 32, 33, 52, 13, 44, 32]
                }],
                xaxis: {
                    categories: [2001, 2002, 2003, 2004, 2005, 2006, 2007],
                },

            }
            var chart = new ApexCharts(
                document.querySelector("#bar-chart-3"),
                options
            );
            chart.render();
        });
        $(function() {
            var options = {
                chart: {
                    height: 450,
                    type: 'pie',
                },
                labels: [name1, name2, name3, name4,name5,name6,name7,name8,name9,name10,name11,name12,name13],
                series: [parseInt(ins1), parseInt(ins2), parseInt(ins3), parseInt(ins4),parseInt(ins5),parseInt(ins6),parseInt(ins7),parseInt(ins8),parseInt(ins9),parseInt(ins10),parseInt(ins11),parseInt(ins12),parseInt(ins13)],
                colors: ["#7267EF", "#7993D6", "#04C8C8", "#ffa21d", "#EA4D4D",'#E3A530','#96B738','#BED679','#38B790','#389EB7','#65CAF9','#BA65F9','#F9659D'],
                legend: {
                    show: true,
                    position: 'bottom',
                },
                dataLabels: {
                    enabled: true,
                    dropShadow: {
                        enabled: false,
                    }
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            }
            var chart = new ApexCharts(
                document.querySelector("#pie-chart-1"),
                options
            );
            chart.render();
        });
        $(function() {
            var options = {
                chart: {
                    height: 377,
                    type: 'donut',
                },
                labels:['TÉCNICO','TÉCNOLOGO','PREGRADO','POSTGRADO'],
                series: [parseInt(fr1), parseInt(fr2), parseInt(fr3), parseInt(fr4)],
                colors: ["#7267EF", "#0e9e4a", "#3ec9d6", "#ffa21d", "#EA4D4D"],
                legend: {
                    show: true,
                    position: 'bottom',
                },
                plotOptions: {
                    pie: {
                        donut: {
                            labels: {
                                show: true,
                                name: {
                                    show: true
                                },
                                value: {
                                    show: true
                                }
                            }
                        }
                    }
                },
                dataLabels: {
                    enabled: true,
                    dropShadow: {
                        enabled: false,
                    }
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            }
            var chart = new ApexCharts(
                document.querySelector("#pie-chart-2"),
                options
            );
            chart.render();
        });
    }, 700);
});
