
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="/a/assets/img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="/a/assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link
      rel="stylesheet"
      href="/a/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
    />
    <link rel="stylesheet" href="/a/assets/styles/tailwind.css" />
    <title>pdf</title>
    <link rel="shortcut icon" href="img/1.png" type="image/x-icon">
  </head>
  <body class="text-blueGray-700 antialiased">
   

        <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
          <div class="px-4 md:px-10 mx-auto w-full">
            <div>



              <div class="flex flex-wrap mt-4">
                <div class="w-full  mb-12 xl:mb-0 px-4">
                  <div
                    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
                  >
                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                      <div class="flex flex-wrap items-center">
                        <div
                          class="relative w-full px-4 max-w-full flex-grow flex-1"
                        >
                         <div class="flex gap-3">

                           <a href="/dashboard" type="submit" > <i class="bi bi-arrow-bar-left"></i> Back </a>
                          


                         </div>
                         <br>
                        </div>
                      </div>
                    </div>




                    @if(isset($data) && $data)
                    
                    <div class="flex flex-col">
                      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                          <div class="overflow-hidden">
                            <table class="min-w-full text-left text-sm font-light">
                              <thead
                                class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                                <tr>
                                  <th scope="col" class="px-6 py-4">Data</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr
                                  class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                                  
                                  <td class="whitespace-nowrap px-6 py-4">
                                    <b>Location : {{ $idsemua->location }}</b> <br>
                                    <b>Coordinate : {{ $idsemua->latitude }} , {{ $idsemua->longitude }}</b> <br>
                                    <b>Last Send : {{ $idsemua->local_time }}</b> <br>
                                    <b>Maximal Value : {{ $max }}</b> <br>
                                    <b>Minimal Value : {{ $min }}</b> <br>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>


                    {{-- ------------------------- --}}

                    <div class="flex flex-wrap">
                      <div class="w-full  mb-12 xl:mb-0 px-4">
                        <div
                          class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-blueGray-700"
                        >
                          <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                            <div class="flex flex-wrap items-center">
                              <div class="relative w-full max-w-full flex-grow flex-1">
                                <h6
                                  class="uppercase text-blueGray-100 mb-1 text-xs font-semibold"
                                >
                                  
                                </h6>
                                <h2 class="text-white text-xl font-semibold">
                                  Grafik
                                </h2>
                              </div>
                            </div>
                          </div>
                          <div class="p-4 flex-auto">
                            <!-- Chart -->
                            <div class="relative h-350-px">
                              <canvas id="line-chart"></canvas>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    {{-- ------------------------- --}}


                    <div class="flex flex-col">
                      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                          <div class="overflow-hidden">
                            <table class="min-w-full text-left text-sm font-light">
                              <thead
                                class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                                <tr>
                                  <th scope="col" class="px-6 py-4">No</th>
                                  <th scope="col" class="px-6 py-4">Local Time</th>
                                  @if ($sensor === "4001")
                                    <th scope="col" class="px-6 py-4">Rainfall (mm)</th>
                                   @elseif ($sensor === "4002")
                                    <th scope="col" class="px-6 py-4">Water Level (cm)</th>
                                    <th scope="col" class="px-6 py-4">Battery (Volt)</th>
                                   @elseif ($sensor === "4003")
                                    <th scope="col" class="px-6 py-4">Air Humidity (%)</th>
                                    <th scope="col" class="px-6 py-4">Wind Speed (m/s)</th>
                                    <th scope="col" class="px-6 py-4">Battery (Volt)</th>
                                   @endif
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($tde as $td)
                                @php
                                 $collectedData[] = $td->value;
                                 @endphp
                                @endforeach
                                @foreach ($data as $index => $d)
                                   <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-gray-200' }}">
                                  <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $index + 1 }}</td>
                                  <td class="whitespace-nowrap px-6 py-4">{{ $d->waktu }}</td>
                                  <td class="whitespace-nowrap px-6 py-4">
                                  @if (isset($collectedData[$index]))
                                  {{ $collectedData[$index] }}
                                   @endif
                                  </td>
                                   </tr>
                                  @endforeach

                                </tbody>
                              </table>
                              
                            </div>
                        </div>
                      </div>
                    </div>

                    
                   @endif

    
                    
                    
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>


        <script type="text/javascript">
          window.print();
          </script>

      
    @if(isset($data) && $data)
        
    
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      charset="utf-8"
    ></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        /* Make dynamic date appear */
        (function () {
            if (document.getElementById("get-current-year")) {
                document.getElementById("get-current-year").innerHTML =
                    new Date().getFullYear();
            }
        })();

        /* Sidebar - Side navigation menu on mobile/responsive mode */
        function toggleNavbar(collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("bg-white");
            document.getElementById(collapseID).classList.toggle("m-2");
            document.getElementById(collapseID).classList.toggle("py-3");
            document.getElementById(collapseID).classList.toggle("px-6");
        }

        /* Function for dropdowns */
        function openDropdown(event, dropdownID) {
            let element = event.target;
            while (element.nodeName !== "A") {
                element = element.parentNode;
            }
            Popper.createPopper(element, document.getElementById(dropdownID), {
                placement: "bottom-start"
            });
            document.getElementById(dropdownID).classList.toggle("hidden");
            document.getElementById(dropdownID).classList.toggle("block");
        }

        (function () {
            /* Chart initialisations */
            /* Line Chart */
            var config = {
                type: "line",
                data: {
                    labels: [
                        @foreach ($data as $d)
                        '{{$d->waktu}}',
                        @endforeach
                    ],
                    datasets: [
                        {
                            label: new Date().getFullYear(),
                            backgroundColor: "#4c51bf",
                            borderColor: "#4c51bf",
                            data: [
                                @foreach ($tde as $t)
                                '{{$t->value}}',
                                @endforeach
                            ],
                            fill: false
                        },
                    ]
                },

                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    title: {
                        display: false,
                        text: "Sales Charts",
                        fontColor: "white"
                    },
                    legend: {
                        labels: {
                            fontColor: "white"
                        },
                        align: "end",
                        position: "bottom"
                    },
                    tooltips: {
                        mode: "index",
                        intersect: false
                    },
                    hover: {
                        mode: "nearest",
                        intersect: true
                    },
                    scales: {
                        xAxes: [
                            {
                                ticks: {
                                    fontColor: "rgba(255,255,255,.7)"
                                },
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString: "Month",
                                    fontColor: "white"
                                },
                                gridLines: {
                                    display: false,
                                    borderDash: [2],
                                    borderDashOffset: [2],
                                    color: "rgba(33, 37, 41, 0.3)",
                                    zeroLineColor: "rgba(0, 0, 0, 0)",
                                    zeroLineBorderDash: [2],
                                    zeroLineBorderDashOffset: [2]
                                }
                            }
                        ],
                        yAxes: [
                            {
                                ticks: {
                                    fontColor: "rgba(255,255,255,.7)"
                                },
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString: "Value",
                                    fontColor: "white"
                                },
                                gridLines: {
                                    borderDash: [3],
                                    borderDashOffset: [3],
                                    drawBorder: false,
                                    color: "rgba(255, 255, 255, 0.15)",
                                    zeroLineColor: "rgba(33, 37, 41, 0)",
                                    zeroLineBorderDash: [2],
                                    zeroLineBorderDashOffset: [2]
                                }
                            }
                        ]
                    }
                }
            };
            var ctx = document.getElementById("line-chart").getContext("2d");
            window.myLine = new Chart(ctx, config);
        })();
    </script>
    @endif
  </body>
</html>
