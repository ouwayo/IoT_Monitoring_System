@extends('layouts.app')

@section('content')

<!-- Chart.js  -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.1.0/dist/chart.min.js"></script>

<!-- Canvas -->

<!-- Charting library -->
<script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
<!-- Chartisan -->
<script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                    <div id="chart" style="height: 300px;"></div>
                    
                    <script>
                    const chart = new Chartisan({
                        el: '#chart',
                        url: "@chart('user_chart')",
                        
                        hooks: new ChartisanHooks().colors()
                        .title("Lake Kivu weather condition")
                        .beginAtZero()
                        .borderColors()
                        .legend()
                        .datasets([{ type: 'line', fill: false }])                                       
                    });
            
                    </script>

                    <!-- Methane Chart -->
                    <div id="chart" style="height: 300px;"></div>
                     <script>                      
                    const chart1 = new Chartisan({
                        el: '#chart',
                        url: "@chart('methane_gas')",
                                              
                        hooks: new ChartisanHooks().colors()
                        // .datasets(['line'])
                        .title("Methane Level")
                        
                        .beginAtZero()
                        .borderColors()
                        .legend()
                        // .legend({ position: 'bottom' })
                        // .datasets([{ type: 'line', fill: false }])
                        .datasets('doughnut')
                         .pieColors(), 
                        });
                    </script>

        <!-- Temperature chart -->
        <div id="chart" style="height: 300px;"></div>
                     <script>                      
                    const chart2 = new Chartisan({
                        el: '#chart',
                        url: "@chart('temperature')",
                                              
                        hooks: new ChartisanHooks().colors()
                        // .datasets(['line'])
                        .title("Lacal Temperature Level")
                        
                        .beginAtZero()
                        .borderColors()
                        .legend()
                        // .legend({ position: 'bottom' })
                        .datasets([{ type: 'bar', fill: false }])
                        // .datasets('doughnut')
                         .pieColors(), 
                        });
                    </script>
       <!-- Humidity chart -->

              <div id="chart" style="height: 300px;"></div>
                     <script>                      
                    const chart3 = new Chartisan({
                        el: '#chart',
                        url: "@chart('humidity')",
                                              
                        hooks: new ChartisanHooks().colors()
                        // .datasets(['line'])
                        .title("Lacal Humidity Level")
                        
                        .beginAtZero()
                        .borderColors()
                        .legend()
                        // .legend({ position: 'bottom' })
                        .datasets([{ type: 'line', fill: false }])
                        // .datasets('scatter')
                        //  .pieColors(), 
                        });
                    </script>




      
      </div>
    </div>
</div>

@endsection
