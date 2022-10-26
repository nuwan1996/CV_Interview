<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield("content-head")
    <script src="<?php echo asset('https://kit.fontawesome.com/42d5adcbca.js')?>" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/material-dashboard.css?v=3.0.4.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/common.css')?>" type="text/css" id="pagestyle">
    <link rel="stylesheet" href="<?php echo asset('https://fonts.googleapis.com/icon?family=Material+Icons+Round')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700')?>" type="text/css">
</head>

<body>
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
       <br>
        <div class="" id="sidenav-collapse-main">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="/">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fa fa-tachometer" aria-hidden="true"></i>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
              </a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white" href="/product">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                  </div>
                  <span class="nav-link-text ms-1">Register Product</span>
                </a>
              </li>



            <li class="nav-item">
              <a class="nav-link text-white " href="/customer">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fa fa-user-plus" aria-hidden="true"></i>
                </div>
                <span class="nav-link-text ms-1">Register Customer</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white " href="/free_issue">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                </div>
                <span class="nav-link-text ms-1">Define Free Issues</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white " href="/order">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                </div>
                <span class="nav-link-text ms-1">Place Order</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white " href="/view_order">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </div>
                <span class="nav-link-text ms-1">View Order</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>

    @yield("content-body")

    <script src="<?php echo asset('js/core/popper.min.js')?>"></script>
    <script src="<?php echo asset('js/core/bootstrap.min.js')?>"></script>
    <script src="<?php echo asset('js/plugins/perfect-scrollbar.min.js')?>"></script>
    <script src="<?php echo asset('js/plugins/smooth-scrollbar.min.js')?>"></script>
    <script src="<?php echo asset('js/plugins/chartjs.min.js')?>"></script>
    <script>
        var ctx = document.getElementById("chart-bars").getContext("2d");

        new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["M", "T", "W", "T", "F", "S", "S"],
            datasets: [{
            label: "Sales",
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 4,
            borderSkipped: false,
            backgroundColor: "rgba(255, 255, 255, .8)",
            data: [50, 20, 10, 22, 50, 10, 40],
            maxBarThickness: 6
            }, ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
            legend: {
                display: false,
            }
            },
            interaction: {
            intersect: false,
            mode: 'index',
            },
            scales: {
            y: {
                grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
                },
                ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 10,
                font: {
                    size: 14,
                    weight: 300,
                    family: "Roboto",
                    style: 'normal',
                    lineHeight: 2
                },
                color: "#fff"
                },
            },
            x: {
                grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
                },
                ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                    size: 14,
                    weight: 300,
                    family: "Roboto",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            },
        },
        });


        var ctx2 = document.getElementById("chart-line").getContext("2d");

        new Chart(ctx2, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
            label: "Mobile apps",
            tension: 0,
            borderWidth: 0,
            pointRadius: 5,
            pointBackgroundColor: "rgba(255, 255, 255, .8)",
            pointBorderColor: "transparent",
            borderColor: "rgba(255, 255, 255, .8)",
            borderColor: "rgba(255, 255, 255, .8)",
            borderWidth: 4,
            backgroundColor: "transparent",
            fill: true,
            data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
            maxBarThickness: 6

            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
            legend: {
                display: false,
            }
            },
            interaction: {
            intersect: false,
            mode: 'index',
            },
            scales: {
            y: {
                grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
                },
                ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                    size: 14,
                    weight: 300,
                    family: "Roboto",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            x: {
                grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
                },
                ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                    size: 14,
                    weight: 300,
                    family: "Roboto",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            },
        },
        });

        var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

        new Chart(ctx3, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
            label: "Mobile apps",
            tension: 0,
            borderWidth: 0,
            pointRadius: 5,
            pointBackgroundColor: "rgba(255, 255, 255, .8)",
            pointBorderColor: "transparent",
            borderColor: "rgba(255, 255, 255, .8)",
            borderWidth: 4,
            backgroundColor: "transparent",
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
            legend: {
                display: false,
            }
            },
            interaction: {
            intersect: false,
            mode: 'index',
            },
            scales: {
            y: {
                grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
                },
                ticks: {
                display: true,
                padding: 10,
                color: '#f8f9fa',
                font: {
                    size: 14,
                    weight: 300,
                    family: "Roboto",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            x: {
                grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
                },
                ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                    size: 14,
                    weight: 300,
                    family: "Roboto",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            },
        },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    

      const theSelect = document.getElementById('purchase')
      theSelect.addEventListener('input', function() {
        let selectedOptText = theSelect.options[theSelect.selectedIndex].text
        document.querySelector('free').value = selectedOptText;
    })
    </script>
    <script async defer src="<?php echo asset('https://buttons.github.io/buttons.js')?>"></script>
    <script src="<?php echo asset('js/material-dashboard.min.js?v=3.0.4')?>"></script>
</body>
</html>