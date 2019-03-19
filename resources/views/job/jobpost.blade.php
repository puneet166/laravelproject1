<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','UDYOGTV')}}</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap-datepicker.css')}}">
        {{-- <style type="text/css">
            td{
                float:left;
                width:150px;
            }
        </style> --}}
    </head>
    <body>
        <h1 align="center">JOB POSTING FORM</h1>

            <form method="post" action="{{ route('postjobsubmit') }}">

                {{ csrf_field() }}
            
            <table align="center" >
                @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            
            <tr>
            <td>Job Title</td><td><input type="text" name="title" /></td>
            </tr>
             <tr>
            <td>Company Name</td><td><input type="text" name="companyname" /></td>
            </tr>
             <tr>
            <td>HR Name</td><td><input type="text" name="hrname" /></td>
            </tr>
            <tr>
            <td>Experience</td>
            <td>
            <select name="exp">
            <option>0 years</option> 
            <option>1 years</option>
            <option>2 years</option> 
            <option>3 years</option> 
            <option>4 years</option> 
            <option>5 years</option> 
            <option>6 years</option> 
            <option>7 years</option> 
            <option>8 years</option> 
            <option>9 years</option> 
            <option>10 years</option>  
            </select>
            <td>
            </td>
            </tr>
            <tr>
            <td>Skills</td><td><input type="text" name="skill" /></td>
            </tr>
            <tr>
            <td>Post date</td><td><input type="text" class="datetime" name="postdate" /></td>
            </tr>
            <tr>
            <td>Expiry date</td><td><input type="text" class="datetime" name="expdate" /></td>
            </tr>
            <tr>
            <td>Location</td><td><input type="text" name="location" /></td>
            </tr>
            <tr>
            <td>Package</td><td><input type="text" name="pack" /></td>
            </tr>
             <tr>
            <td>Job Description</td><td><input type="textarea" style="width:200px; height:100px;" name="desc" /></td>
            </tr>
            <br/>
            <br/>
            {{-- <tr>
            <input type="hidden" name="token" value="{{csrf_token()}}" />   
            </tr> --}}
            <tr>
            <td><input type="submit" value="Post Job" name="submit">  </input><input type="reset" value="Reset"></input></td>
            </tr>
            </table>
            </form>
            
        
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="{{URL::asset('js/bootstrap-datepicker.min.js')}}"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('.datetime').datepicker({
        format: 'yyyy-mm-dd'
    });
});

  /*  function CheckSkills(val){
     var element=document.getElementById('skill');
     if(val=='OTHERS')
       element.style.display='block';
     else  
       element.style.display='none';
    }

*/

</script>
    </body>
</html>
