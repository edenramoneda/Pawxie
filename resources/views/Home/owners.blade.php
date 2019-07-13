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
                "url": "getOwners",
                "dataSrc": ""
            },
            columns: [
            { 
            title: "Fullname",
            data: 'fullname' 
            },
            { 
            title: "Address",
            data: 'address' 
            },
            { 
            title: "Occupation",
            data: 'occupation' 
            },
            { 
            title: "Contact Number",
            data: 'contact_number' 
            },
            {
                title:"Action",
                data: 'owner_id',
                'render': function(data){
                    return '<a href="' +data+ '">Edit</a>&ensp;<a href="' +data+ '">Drop</a>';
                }
            }
            
        ], 

        });
    } );
  
  </script>