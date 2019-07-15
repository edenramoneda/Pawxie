@extends('layouts.sidebar')

    @section('content')
    <h3>List of Veterinarians</h3><br>
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
            dom: 'Bfrtip',
            buttons: [
                {
                    text: 'Add Veterinarian',  
                    className: 'btn btn-primary',
                    action: function () {
                        alert( 'Sample' );
                    }
                },
                'copy',
                {   
                    extend:'print',
                    messageTop: 'List of Veterinarians',
                    title: 'Pawxie Veterinary Clinic',
                    exportOptions: {
                    columns: [ 0, 1, 2, 3]
                    }
                },
                {   
                    extend:'csv',
                    messageTop: 'List Of Veterinarians',
                    title: 'Pawxie Veterinary Clinic',
                    exportOptions: {
                    columns: [ 0, 1, 2, 3]
                    }
                },

            ],
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