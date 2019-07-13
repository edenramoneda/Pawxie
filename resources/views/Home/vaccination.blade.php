@extends('layouts.sidebar')

    @section('content')
        <div class="table-responsive-sm">
            <table id="myTable" class="table table-striped" style="width:100%">
            </table>
        </div>
    @endsection

<script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable({
            responsive: true,
            select: true,
            ajax: {
                "url": "vaccination/getVaccinations",
                "dataSrc": ""
            },
            columns: [
            { 
            title: "type of Vaccination",
            data: 'type_of_vaccination' 
            },
            { 
            title: "Vaccination",
            data: 'vaccination' 
            },
            {
                title:"Action",
                data: 'vac_id',
                'render': function(data){
                    return '<a href="' +data+ '">Edit</a>&ensp;<a href="' +data+ '">Drop</a>';
                }
            }
            
        ], 

        });
    } );
  
  </script>