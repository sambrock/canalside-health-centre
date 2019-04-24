$(function () {
    $('#patient-search').keyup(function() {
        if($(this).val().length > 1){
            $searchTerm = $(this).val();
            $(".patient").hide();
            $(".pagination").hide();
        }else{
            $searchTerm = "none";
            $(".patient").show();
            $(".pagination").show();
        }
        $.ajax({
            method: 'get',
            url: 'patients/'+ $searchTerm,
            dataType: "json",
            success: function(data){
                $('.patient-result').remove();
                if($searchTerm != "none"){
                    $("#display-count").html(data.patients.length);
                }else{
                    $("#display-count").html("55");
                }
                if(data.patients.length != 0){
                    $.each(data.patients, function(index, patient) {
                        $('.patients-details').prepend('<div class="patient-result"><span class="patient-name"><a href="details/'+patient.id+'">'+patient.firstname+' '+patient.lastname+'</a></span><span class="patient-address">'+patient.address+', '+patient.postcode+'</span><span class="patient-dob">'+patient.dob+'</span><span class="patient-gender">'+patient.gender+'</span><span class="patient-mobile">'+patient.mobile_number+'</span></div>');
                    });
                }else{
                    if($('#patient-search').val().length > 1){
                        $('.patients-details').prepend('<div class="patient-result"><span class="patient-error">No patients found</span>');
                    }
                }
            }
        });
    });
});

$(document).on('click', '.patient',(function(){
    $link = $(this).find("a").attr("href")
    console.log($link);
    window.location = $link;
}))
