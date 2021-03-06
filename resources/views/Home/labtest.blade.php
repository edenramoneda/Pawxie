@extends('layouts.sidebar')

    @section('content')
    <h3>List of Lab Tests</h3><br>
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
                    text: 'Add Lab Test',  
                    className: 'btn btn-primary',
                    action: function () {
                        alert( 'Sample' );
                    }
                },
                'copy',
                {   
                    extend:'print',
                    messageTop: 'List of LabTest',
                    title: 'Pawxie Veterinary Clinic',
                    exportOptions: {
                    columns: [ 0, 1, 2, 3]
                    }
                },
                {   
                    extend:'csv',
                    messageTop: 'List Of LabTest',
                    title: 'Pawxie Veterinary Clinic',
                    exportOptions: {
                    columns: [ 0, 1, 2, 3]
                    }
                },

            ],
            ajax: {
                "url": "labtest/getLabTest",
                "dataSrc": ""
            },
            columns: [
            { 
            title: "Lab Tests",
            data: 'lab_tests' 
            },
            { 
            title: "Description",
            data: 'description' 
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