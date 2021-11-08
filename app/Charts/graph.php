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

                    <!-- {{ __('Public!') }} -->
                    <div id="chart" style="height: 300px;"></div>
                    
                    <script>
                    const chart = new Chartisan({
                        el: '#chart',
                        url: "@chart('user_chart')",
                        
                        hooks: new ChartisanHooks().colors()
                        // .datasets(['line'])
                        .title("Lake Kivu weather condition")
                        
                        .beginAtZero()
                        .borderColors()
                        .legend()
                        // .legend({ position: 'bottom' })
                        .datasets([{ type: 'bar', fill: false }])
                        // .datasets('doughnut')
                        //  .pieColors(),                                            
                
                    });
            
                    </script>
      
                </div>
            </div>
        </div>
<!-- The econd graph by trial -->
        <div class="col-md-4">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard2') }}</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('Public!') }} -->
                    <div id="chart" style="height: 300px;"></div>
                    
                    
      
                </div>
            </div>
        </div>


 <!-- Third graphh by trial -->

    <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('Public!') }} -->
                    <div id="chart" style="height: 300px;"></div>
                    
                   
      
                </div>
            </div>
        </div>
    

    <!-- The fourth graph to be here -->

    <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('Public!') }} -->
                    <div id="chart" style="height: 300px;"></div>

                </div>
            </div>
        </div>


     <!-- The fith graph  -->

     
     <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('Public!') }} -->
                    <div id="chart" style="height: 300px;"></div>









    </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-8 col-8-offset-2">
     <!-- cleanup -->
    <div class="panel panel-default">
      <div class="panel-heading">Dashboard</div>

      <div clas="panel-body">

      
<div class="container">
  <div class="row">
    <div class="col-md-8 col-8-offset-2">
    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    <div class="panel panel-default">
      <div class="panel-heading">Dashboard</div>

      <div clas="panel-body">

        <!-- Graph? -->
        <script>
                    const chart1 = new Chartisan({
                        el: '#chart',
                        url: "@chart('user_chart')",
                        
                        hooks: new ChartisanHooks().colors()
                        // .datasets(['line'])
                        .title("Lake Kivu weather condition")
                        .beginAtZero()
                        .borderColors()
                        .legend()
                        // .legend({ position: 'bottom' })
                        .datasets([{ type: 'scatter', fill: false }])
                        // .datasets('doughnut')
                        //  .pieColors(),                                            
                
                    });
            
              </script>

      </div>
    </div>
  </div>  

        

      </div>
    </div>
  </div>  


  <div class="container">
    <div class="flex">
    <div class="w-1/2">
      <!-- graph1 -->
    </div>

   <div class="w-1/2">
      <!-- graph2 -->
    </div>
 </div>
</div> 