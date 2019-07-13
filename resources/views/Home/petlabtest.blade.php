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
            dom: 'Bfrtip',
            buttons: [
                {
                    text: 'Add Pet',  
                    className: 'btn btn-primary',
                    action: function () {
                        alert( 'Sample' );
                    }
                },
                'copy',
                {   
                    extend:'print',
                    messageTop: 'List of Pets Labtest taken',
                    title: 'Pawxie Veterinary Clinic',
                    exportOptions: {
                    columns: [ 0, 1, 2, 3]
                    }
                },
                {   
                    extend:'csv',
                    messageTop: 'List of Pets Labtest taken',
                    title: 'Pawxie Veterinary Clinic',
                    exportOptions: {
                    columns: [ 0, 1, 2, 3]
                    }
                },

            ],
            ajax: {
                "url": "petLabTests/getpetLabTests",
                "dataSrc": ""
            },
            columns: [
            { 
            title: "Pet Fullname",
            data: 'pet_fullname' 
            },
            { 
            title: "Lab Tests",
            data: 'lab_test' 
            },
            { 
            title: "Result",
            data: 'result' 
            },
            {
                title:"Action",
                data: 'pet_id',
                'render': function(data){
                    return '<a href="' +data+ '">Edit</a>&ensp;<a href="' +data+ '">Drop</a>';
                }
            },
            {
                title:"Lab Test Report",
                data: 'pet_id',
                'render': function(data){
                    return  '<a href="' +data+ '">View</a>';
                }
            }
            
        ], 

        });
    } );
  
  </script>