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
                "url": "getPets",
                "dataSrc": ""
            },
            columns: [
            { 
            title: "Name of Pet",
            data: 'pet_fullname' 
            },
            { 
            title: "Name of Owner",
            data: 'fullname' 
            },
            { 
            title: "Date of Birth",
            data: 'date_of_birth' 
            },
            { 
            title: "Gender",
            data: 'gender' 
            },
            { 
            title: "Breed",
            data: 'breed' 
            },
            { 
            title: "Color",
            data: 'color' 
            },
            { 
            title: "Type",
            data: 'type' 
            },
            {
                title:"Action",
                data: 'pet_id',
                'render': function(data){
                    return '<a href="' +data+ '">Edit</a>&ensp;<a href="' +data+ '">Drop</a>';
                }
            }
            
        ], 

        });
    } );
  
  </script>