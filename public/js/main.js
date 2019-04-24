$(function () {
    $('#patient-search').keyup(function() {
        if($(this).val().length > 1){
            $searchTerm = $(this).val();
        }else{
            $searchTerm = "none";
        }
        $.ajax({
            method: 'get',
            url: 'patients/'+ $searchTerm,
            dataType: "json",
            success: function(data){
                $('#search-count').text(data.patients.length+" patients");
                $('.patients-details').empty();
                $("#display-count").html(data.patients.length);
                $.each(data.patients, function(index, patient) {
                    $('.patients-details').append('<div class="patient"><span class="patient-name"><a href="patients/details/'+patient.id+'">'+patient.firstname+' '+patient.lastname+'</a></span><span class="patient-address">'+patient.address+', '+patient.postcode+'</span><span class="patient-dob">'+patient.dob+'</span><span class="patient-gender">'+patient.gender+'</span><span class="patient-mobile">'+patient.mobile_number+'</span></div>');
                    //$('.patient').append('');
                });
            }
        });
    });
});

$(".patient").click(function(){
    $link = $(this).find("a").attr("href")
    console.log($link);
    window.location = $link;
})
