$(function(){
	// url dashboard/xhrGetInserting make orders in that function
	$.get('dashboard/xhrGetInserting',function(o){
   
    for(var i=0;i<o.length;i++){

    	$('#listInserts').append('<div>'+o[i].text+'<a class="del" rel="'+o[i].id+'" href="#">Delete</a></div>');
    }

    	$('.del').click(function(){
        var id =$(this).attr('rel');
        // item that i choose to delete
        var delItem =$(this);
        $.post('dashboard/xhrDeleteListing',{'id': id },function(e){
         	delItem.parent().remove();
         });
        return false;
      });
     
	},'json');

 $('#randomInsert').submit(function(){
	// put action of the form in url 
	// to use it again
var url=$(this).attr('action');
var data =$(this).serialize();
 $.post(url,data,function(o){
 //receive data from function  xhrInsert
$('#listInserts').append('<div>'+  o.text  +'<a class="del" rel="'+o.id+'" href="#">Delete</a></div>');
// json to formate data that come 
//from function xhrInsert in dashboard_model.php
 },'json');

return false;
});

});
  


