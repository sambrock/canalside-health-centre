$(function () {
    $('#patient-search').keyup(function() {
        if($(this).val().length){
            $searchTerm = $(this).val();
        }else{
            $searchTerm = "none";
        }
        $.ajax({
            method: 'get',
            url: 'name/'+ $searchTerm,
            dataType: "json",
            success: function(data){
                $('.patients-details').empty();
                $.each(data.patients, function(index, patient) {
                    console.log(patient.firstname+' '+patient.lastname);
                    $('.patients-details').append('<div class="patient"><span class="patient-name"><a href="patients/details/'+patient.id+'">'+patient.lastname+', '+patient.firstname+'</a></span><span class="patient-address">'+patient.address+', '+patient.postcode+'</span><span class="patient-mobile">'+patient.mobile_number+'</span></div>');
                    //$('.patient').append('');
                });
            }
        });
    });
});

