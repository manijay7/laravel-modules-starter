<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-semibold">Dashboard</h1>
        <div class="flex justify-between items-center space-x-4">


            <x-button color="primary">
                <i class="bx bx-plus mr-2 text-base"></i>
                Home
            </x-button>
            <x-button color="secondary">
                <i class="bx bx-plus mr-2 text-base"></i>
                Home
            </x-button>
            <x-button color="warning" outline>
                <i class="bx bx-plus mr-2 text-base"></i>
                Home
            </x-button>
            <x-button color="danger">
                <i class="bx bx-plus mr-2 text-base"></i>
                Home
            </x-button>
            <x-button color="info">
                <i class="bx bx-plus mr-2 text-base"></i>
                Home
            </x-button>
            <x-button color="success">
                <i class="bx bx-plus mr-2 text-base"></i>
                Home
            </x-button>
        </div>
    </x-slot>



    <div class="mt-2">
        <!-- State cards -->
        <div class="grid grid-cols-1 gap-8 p-4 lg:grid-cols-2 xl:grid-cols-4">
            <!-- Value card -->
            <x-state-card name="Item" value="500" class="bg-success-light text-white" percentage="5%"
                percentColor="red">
                <x-slot name="icon">
                    <svg class="w-12 h-12 text-white dark:text-primary-dark" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </x-slot>

            </x-state-card>

            <x-state-card name="Item" value="500" class="bg-info-light text-white" percentage="5%" percentColor="red">
                <x-slot name="icon">
                    <svg class="w-12 h-12 text-white dark:text-primary-dark" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </x-slot>

            </x-state-card>

            <x-state-card name="Item" value="500" class="bg-secondary-light text-white" percentage="15%"
                percentColor="green">
                <x-slot name="icon">
                    <svg class="w-12 h-12 text-white dark:text-primary-dark" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </x-slot>

            </x-state-card>

            <x-state-card name="Item" value="500" class="bg-warning-light text-white" percentage="5%"
                percentColor="red">
                <x-slot name="icon">
                    <svg class="w-12 h-12 text-white dark:text-primary-dark" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </x-slot>

            </x-state-card>
        </div>

        <div class="grid grid-cols-1 gap-4 p-2 lg:grid-cols-2 xl:grid-cols-4">

            <x-state-link-card class="h-400" name="Booked Rooms" value="500" percentage="40" positive>
                <div id="chart-sparkline-1"></div>
            </x-state-link-card>

            <x-state-link-card class="h-400" name="Available Rooms" value="500" percentage="40" positive>
                <div id="chart-sparkline-2"></div>
            </x-state-link-card>
            <x-state-link-card class=" h-400" name="Rooms in Housekeeping" value="500" percentage="40" positive>
                <div id="chart-sparkline-3"></div>
            </x-state-link-card>
            <x-state-link-card class=" h-400" name="Rooms in Housekeeping" value="500" percentage="40" positive>
                <div class="px-4 pb-6">
                    <div class="flex justify-between mb-2">
                        <div class="text-gray-700 text-sm">
                            <b>83%</b> Good Feedback
                        </div>
                        <div>
                            <span class="text-sm text-green-500">2.75% <i class="bx bx-up-arrow-alt"></i></span>
                        </div>
                    </div>
                    <div class="px-auto bg-gray-200">
                        <div class="bg-green-500 py-1" style="width: 83%"></div>
                    </div>
                </div>
            </x-state-link-card>
        </div>
    </div>

    @push('scripts')

    <script>
        var options = {
            chart: {
              type: "area",
              fontFamily: "inherit",
              height: 50,
              sparkline: {
                enabled: true,
              },
            },
            dataLabels: {
              enabled: false,
            },
    
            fill: {
              opacity: 0.16,
              type: "solid",
            },
            stroke: {
              width: 2,
              lineCap: "round",
              curve: "smooth",
            },
    
            series: [
              {
                name: "Revenue",
                data: [
                  31,
                  37,
                  39,
                  62,
                  51,
                  35,
                  41,
                  35,
                  27,
                  27,
                  53,
                  61,
                  27,
                  54,
                  43,
                  19,
                  46,
                  39,
                  62,
                  51,
                  66,
                  70,
                  82,
                ],
              },
            ],
    
            grid: {
              strokeDashArray: 4,
            },
            xaxis: {
              labels: {
                padding: 0,
              },
              tooltip: {
                enabled: false,
              },
              axisBorder: {
                show: false,
              },
              type: "datetime",
            },
            yaxis: {
              labels: {
                padding: 4,
              },
            },
            labels: [
              "2020-06-28",
              "2020-06-29",
              "2020-06-30",
              "2020-07-01",
              "2020-07-02",
              "2020-07-03",
              "2020-07-04",
              "2020-07-05",
              "2020-07-06",
              "2020-07-07",
              "2020-07-08",
              "2020-07-09",
              "2020-07-10",
              "2020-07-11",
              "2020-07-12",
              "2020-07-13",
              "2020-07-14",
              "2020-07-15",
              "2020-07-16",
              "2020-07-17",
              "2020-07-18",
              "2020-07-19",
              "2020-07-20",
            ],
            colors: ["#48bb78"],
            legend: {
              show: false,
            },
          };
          var chart1 = new ApexCharts(
            document.querySelector("#chart-sparkline-1"),
            options
          );
          chart1.render();
    
          var options2 = {
            chart: {
              type: "bar",
              fontFamily: "inherit",
              height: 50,
              sparkline: {
                enabled: true,
              },
            },
            dataLabels: {
              enabled: false,
            },
            fill: {
              opacity: 0.7,
              type: "solid",
            },
            stroke: {
              width: 1,
              lineCap: "round",
              curve: "smooth",
            },
    
            series: [
              {
                name: "Sales",
                data: [
                  38,
                  31,
                  89,
                  37,
                  39,
                  62,
                  51,
                  35,
                  41,
                  35,
                  27,
                  27,
                  53,
                  61,
                  27,
                  54,
                  43,
                  120,
                  46,
                  50,
                  62,
                  51,
                  90,
                  70,
                  82,
                ],
              },
            ],
    
            grid: {
              strokeDashArray: 4,
            },
            xaxis: {
              labels: {
                padding: 0,
              },
              tooltip: {
                enabled: false,
              },
              axisBorder: {
                show: false,
              },
              type: "datetime",
            },
            yaxis: {
              labels: {
                padding: 4,
              },
            },
            labels: [
              "2020-06-28",
              "2020-06-29",
              "2020-06-30",
              "2020-07-01",
              "2020-07-02",
              "2020-07-03",
              "2020-07-04",
              "2020-07-05",
              "2020-07-06",
              "2020-07-07",
              "2020-07-08",
              "2020-07-09",
              "2020-07-10",
              "2020-07-11",
              "2020-07-12",
              "2020-07-13",
              "2020-07-14",
              "2020-07-15",
              "2020-07-16",
              "2020-07-17",
              "2020-07-18",
              "2020-07-19",
              "2020-07-20",
            ],
            colors: ["#48bb78"],
            legend: {
              show: false,
            },
          };
          var chart2 = new ApexCharts(
            document.querySelector("#chart-sparkline-2"),
            options2
          );
          chart2.render();
    
          var options3 = {
            chart: {
              type: "line",
              fontFamily: "inherit",
              height: 50,
              sparkline: {
                enabled: true,
              },
            },
            dataLabels: {
              enabled: false,
            },
    
            fill: {
              opacity: 0.7,
              type: "solid",
            },
            stroke: {
              width: [2, 1],
              dashArray: [0, 3],
              lineCap: "round",
              curve: "smooth",
            },
    
            series: [
              {
                name: "Last month",
                data: [
                  31,
                  37,
                  39,
                  62,
                  51,
                  35,
                  14,
                  35,
                  27,
                  27,
                  21,
                  61,
                  27,
                  54,
                  43,
                  120,
                  46,
                  50,
                  62,
                  121,
                  90,
                  70,
                  82,
                ],
              },
    
              {
                name: "This month",
                data: [
                  91,
                  58,
                  90,
                  79,
                  83,
                  119,
                  78,
                  88,
                  129,
                  71,
                  90,
                  116,
                  94,
                  110,
                  103,
                  111,
                  119,
                  79,
                  94,
                  124,
                  81,
                  85,
                  82,
                ],
              },
            ],
    
            grid: {
              strokeDashArray: 4,
            },
            xaxis: {
              labels: {
                padding: 0,
              },
              tooltip: {
                enabled: false,
              },
              axisBorder: {
                show: false,
              },
              type: "datetime",
            },
            yaxis: {
              labels: {
                padding: 4,
              },
            },
            labels: [
              "2020-06-28",
              "2020-06-29",
              "2020-06-30",
              "2020-07-01",
              "2020-07-02",
              "2020-07-03",
              "2020-07-04",
              "2020-07-05",
              "2020-07-06",
              "2020-07-07",
              "2020-07-08",
              "2020-07-09",
              "2020-07-10",
              "2020-07-11",
              "2020-07-12",
              "2020-07-13",
              "2020-07-14",
              "2020-07-15",
              "2020-07-16",
              "2020-07-17",
              "2020-07-18",
              "2020-07-19",
              "2020-07-20",
            ],
            colors: ["#48bb78"],
            legend: {
              show: false,
            },
          };
          var chart3 = new ApexCharts(
            document.querySelector("#chart-sparkline-3"),
            options3
          );
          chart3.render();
    
          // chart
          var options_bar = {
            series: [
              {
                name: "Admin Template",
                data: [
                  91,
                  58,
                  90,
                  79,
                  83,
                  119,
                  78,
                  88,
                  129,
                  71,
                  90,
                  116,
                  94,
                  110,
                  103,
                  111,
                  119,
                  79,
                  94,
                  124,
                  81,
                  85,
                  82,
                  79,
                  94,
                  124,
                  119,
                  79,
                  94,
                  124,
                  81,
                  90,
                  116,
                ],
              },
              {
                name: "Themes Tailwindcss",
                data: [
                  31,
                  37,
                  39,
                  62,
                  51,
                  35,
                  14,
                  35,
                  27,
                  27,
                  21,
                  61,
                  27,
                  54,
                  43,
                  120,
                  46,
                  50,
                  62,
                  121,
                  90,
                  70,
                  82,
                  61,
                  27,
                  54,
                  39,
                  62,
                  51,
                  35,
                  14,
                  27,
                  21,
                  61,
                ],
              },
              {
                name: "Wordpress Themes",
                data: [
                  31,
                  37,
                  39,
                  62,
                  51,
                  35,
                  41,
                  35,
                  27,
                  27,
                  53,
                  61,
                  27,
                  54,
                  43,
                  120,
                  46,
                  50,
                  62,
                  51,
                  90,
                  70,
                  82,
                  90,
                  70,
                  82,
                  35,
                  27,
                  27,
                  53,
                  61,
                  53,
                  61,
                  27,
                ],
              },
            ],
            chart: {
              type: "bar",
              height: 350,
              stacked: true,
              toolbar: {
                show: false,
              },
              zoom: {
                enabled: false,
              },
            },
            responsive: [
              {
                breakpoint: 480,
                options: {
                  legend: {
                    position: "bottom",
                    offsetX: -10,
                    offsetY: 0,
                  },
                },
              },
            ],
            plotOptions: {
              bar: {
                horizontal: false,
                columnWidth: "50%",
              },
            },
    
            dataLabels: {
              enabled: false,
            },
            xaxis: {
              type: "datetime",
              categories: [
                "2020-06-28",
                "2020-06-29",
                "2020-06-30",
                "2020-07-01",
                "2020-07-02",
                "2020-07-03",
                "2020-07-04",
                "2020-07-05",
                "2020-07-06",
                "2020-07-07",
                "2020-07-08",
                "2020-07-09",
                "2020-07-10",
                "2020-07-11",
                "2020-07-12",
                "2020-07-13",
                "2020-07-14",
                "2020-07-15",
                "2020-07-16",
                "2020-07-17",
                "2020-07-18",
                "2020-07-19",
                "2020-07-20",
                "2020-07-21",
                "2020-07-22",
                "2020-07-23",
                "2020-07-24",
                "2020-07-25",
                "2020-07-26",
                "2020-07-27",
                "2020-07-28",
                "2020-07-29",
                "2020-07-30",
              ],
            },
            stroke: {
              show: true,
              width: 2,
              colors: ["transparent"],
            },
            fill: {
              opacity: 1,
            },
            legend: {
              position: "bottom",
            },
            // colors: ["#f6ad55","#4299e1","#48bb78"],
            colors: ["#48bb78", "#4299e1", "#fbd38d"],
          };
    
          var chart1 = new ApexCharts(
            document.querySelector("#chart-bar"),
            options_bar
          );
          chart1.render();
    
          var options_chart_2 = {
            series: [332, 185, 151, 87],
            chart: {
              type: "donut",
              width: "100%",
              height: 400,
            },
            plotOptions: {
              pie: {
                customScale: 0.85,
                donut: {
                  size: "67%",
                },
              },
              stroke: {
                colors: undefined,
              },
            },
            colors: ["#2f855a", "#38a169", "#48bb78", "#68d391"],
    
            labels: ["USA", "India", "Japan", "Indonesia"],
    
            responsive: [
              {
                breakpoint: 480,
                options: {
                  chart: {
                    width: 200,
                  },
                  legend: {
                    position: "bottom",
                  },
                },
              },
            ],
          };
    
          var chart = new ApexCharts(
            document.querySelector("#chart-pie-1"),
            options_chart_2
          );
          chart.render();
    </script>


    @endpush
</x-app-layout>