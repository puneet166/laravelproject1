<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name','UDYOGTV')}}</title>
        	<style>
		        	table 
		        	{
						  display: table;
						  border-collapse: separate;

					}
					table, th, td 
					{
						border: 1px solid black;
						padding:6px;
						width: 50px;
					}				  
      		</style>  
    </head>
    
    <body>

    	<div>
    		<div>
    			<br/>
        <h1 align="center">JOBS</h1>
          

          <form method="get" action="{{ route('index') }}">  
             {{ csrf_field() }}
        <br/>
        <table align="center" border-spacing= "2px" bgcolor="" order-color= "gray">
        	<tr>
        		<th>job_id</th>
        		<th>job_title</th>
                <th>company_name</th>
                <th>hr_name</th>
                <th>experience</th>
        		<th>Skills</th>
        		<th>postdate</th>
        		<th>expirydate</th>
        		<th>location</th>
        		<th>package</th>
        		<th>Details</th>
        	</tr>
        	@foreach($jobs as $job_opening)
		        <tr>
		        	<td>{{$job_opening->job_id}}</td>
		        	<td>{{$job_opening->job_title}}</td>
                    <td>{{$job_opening->company_name}}</td>
                    <td>{{$job_opening->hr_name}}</td>
		        	<td>{{$job_opening->experience}}</td>
		        	<td>{{$job_opening->skills}}</td>
		        	<td>{{$job_opening->postdate}}</td>
		        	<td>{{$job_opening->expdate}}</td>
		        	<td>{{$job_opening->location}}</td>
		        	<td>{{$job_opening->package}}</td>
		        	{{-- <td><a href="{{url('/post/alljobs/details'.$job_opening->job_id)}}" >View details</a></td>   --}}
		        	<td><a href="{{ route('getdisplay',['job_id'=>$job_opening->job_id])}}">View details</a></td>  
		        </tr>
		    @endforeach
    	</table>
    	</form>
	</div>
	</div>
    
    </body>
</html>
