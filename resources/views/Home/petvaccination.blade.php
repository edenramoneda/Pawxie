@extends('layouts.sidebar')

@section('content')
    <h3>Pet Vaccination</h3><br>
    <div class="table-responsive-sm">
        <table id="myTable" class="table table-striped" style="width:100%">
        </table>
    </div>

     <div class="modal fade" id="vaccinationReport">
        <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">Vaccination Report</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive-sm">
                            <table id="vaccination-table" class="table table-striped"></table>
                        </div>
                    </div>   
                </div>
        </div>
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
                    messageTop: 'List of Vaccinated Pets',
                    title: 'Pawxie Veterinary Clinic',
                    exportOptions: {
                    columns: [ 0, 1, 2]
                    }
                },
                {   
                    extend:'csv',
                    messageTop: 'List of Vaccinated Pets',
                    title: 'Pawxie Veterinary Clinic',
                    exportOptions: {
                    columns: [ 0, 1, 2]
                    }
                },

            ],
        ajax: {
            "url": "petVaccination/getPetVac",
            "dataSrc": ""
        },
        columns: [
        { 
        title: "Name of Pet",
        data: 'pet_fullname' 
        },
        { 
        title: "Type of Vaccination",
        data: 'type_of_vaccination',
        'render': function(typeofvac){
                return typeofvac;
            } 
        },
        { 
        title: "Vaccination",
        data: 'vaccination' 
        },
        {
            title:"Action",
            data: 'pet_id',
            'render': function(data){
                return '<a href="' +data+ '">Edit</a>&ensp;<a href="' +data+ '">Drop</a>';
            }
        },
        {
            title:"Vaccination Report",
            data: 'pet_id',
            'render': function(pet_id){
                return '<a href="' +pet_id+ '" data-toggle="modal" data-target="#vaccinationReport"' + 
                'data-petid="'+pet_id+'">Vaccination Report</a>';
            }
        }
    ], 

    });

    $("#vaccinationReport").on('show.bs.modal', function(e){
        var link = $(e.relatedTarget);
        var pet_id = link.data('petid');
        var modal = $(this);
        initDataTableInModal(pet_id);
    })
    function initDataTableInModal(pet_id){
        var vacTable =  $("#vaccination-table").DataTable({
            responsive: true,
            select: true,
            paging:false,
            searching:false,
            ajax: {
                "url": "petVaccination/vaccinationReportModal/" + pet_id,
                "dataSrc":"",
            },
            columns: [
                { 
                    title: "Type of Vaccination",
                    data:  "type_of_vaccination"
                },
                { 
                    title: "Vaccination",
                    data:  "vaccination"
                },
                { 
                    title: "Appointment Date",
                    data:  "appointment_date"
                },
                { 
                    title: "Duration",
                    data:  "duration"
                },
                { 
                    title: "Next Vaccination",
                    data:  "next_vaccination"
                },
                { 
                    title: "Veterinarian",
                    data:  "veterinarian"
                },
                
            ]
        });
    vacTable.destroy();
   }
} );

</script>