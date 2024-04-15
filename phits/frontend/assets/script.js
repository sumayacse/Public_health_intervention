
$(function(){

	$('.area-combo').change(function(){
        var areaCombo = $(this);
        areaCombo.attr('disabled','disabled');
        var areaType = $(this).attr('data-areatype'); //fetch attribute 
        var thanaCombo = $('#' + areaType + 'Center');
        thanaCombo.empty();
        var selectedarea = areaCombo.val();
      
       //allows to fetch a list of centre based on selected area 
       $.ajax({
        url: '/phits/frontend/areas.php?center=' + selectedarea,
        type: "GET",
        success:function(response){
            var $response = $.parseJSON(response);
            var thanas = $response.data;
            thanaCombo.append('<option value="" selected>select Center</option>');
            $.each(thanas, function(){
                thanaCombo.append('<option value="' + this.centerID + '">' + this.centreName + '</option>');
            })
        },
        complete:function(){
            areaCombo.removeAttr('disabled');
        }
    });
});
}); //Document.ready//