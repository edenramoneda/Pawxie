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
                "url": "veterinarians/getVeterinaries",
                "dataSrc": ""
            },
            columns: [
            { 
            title: "Firstname",
            data: 'firstname' 
            },
            { 
            title: "Middlename",
            data: 'middlename' 
            },
            { 
            title: "Lastname",
            data: 'lastname' 
            },
            { 
            title: "Birthday",
            data: 'birthday' 
            },
            { 
            title: "Date Hired",
            data: 'date_hired' 
            },
            {
                title:"Action",
                data: 'veterinary_id',
                'render': function(data){
                    return '<a href="' +data+ '">Edit</a>&ensp;<a href="' +data+ '">Drop</a>';
                }
            }
            
        ], 

        });
    } );
  
  </script>