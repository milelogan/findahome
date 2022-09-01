$(document).ready(function(){
$("#submit_country").click(function(){
var country_name= $("#country").val();
var state_name = $("#state").val();

// Returns successful data submission message when the entered information is stored in database.
var dataString = '&country='+ country_name + '&state='+ state_name ;
if(country_name==''||state_name=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "ajaxsubmit.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});
});