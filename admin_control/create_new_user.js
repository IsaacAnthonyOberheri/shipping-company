function create_new_user(){
    //alert('ok');



    
    var tracking_id = document.getElementById('tracking_id');
    var tracking_id_value =  tracking_id.value;

    var tracking_no = document.getElementById('tracking_no');
    var tracking_no_value = tracking_no.value;

  //   var passport_name = document.getElementsByClassName('passport_main')[0];
  //   passport_name.innerHTML ="<img src='../img/"+response.list.passport_name+"'>";

    var from_location = document.getElementById('from_location');
    var from_location_value = from_location.value;


    var to_location = document.getElementById('to_location');
    var to_location_value = to_location.value;

    var item_name = document.getElementById('item_name');
    var item_name_value = item_name.value;

    var weight = document.getElementById('weight');
    var weight_value = weight.value;


    var first_date = document.getElementById('first_date');
    var first_date_value = first_date.value;


    var second_date = document.getElementById('second_date');
    var second_date_value = second_date.value;

    var third_date = document.getElementById('third_date');
    var third_date_value = third_date.value;

    var fourth_date = document.getElementById('fourth_date');
    var fourth_date_value = fourth_date.value;



    var first_time = document.getElementById('first_time');
    var first_time_value = first_time.value;

    var second_time = document.getElementById('second_time');
    var second_time_value = second_time.value;

    var third_time = document.getElementById('third_time');
    var third_time_value = third_time.value;

    var fourth_time = document.getElementById('fourth_time');
    var fourth_time_value = fourth_time.value;




    var first_day_info = document.getElementById('first_day_info');
    var first_day_info_value =  first_day_info.value;


    var second_day_info = document.getElementById('second_day_info');
    var second_day_info_value = second_day_info.value;

    var third_day_info = document.getElementById('third_day_info');
    var third_day_info_value = third_day_info.value;

  //   var fourth_day_info = document.getElementById('fourth_day_info');
  //   fourth_day_info.value = response.list.fourth_day_info;
  

    var first_day_location = document.getElementById('first_day_location');
    var first_day_location_value = first_day_location.value;


    var second_day_location = document.getElementById('second_day_location');
    var second_day_location_value = second_day_location.value;

    var third_day_location = document.getElementById('third_day_location');
    var third_day_location_value = third_day_location.value;



        
   var xmlhttp;
   xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function(){
   if(xmlhttp.readyState==4 && xmlhttp.status==200){
   

       var response = xmlhttp.responseText;

       if(response == 'upload successful'){
        alert('Updated successfully');
      }

      else{
         alert(response);
         console.log(response);
         
      }




      // var response = xmlhttp.responseText;


     


    
   }


}

   //xmlhttp.open('GET', 'submit_reset.php?email='+email_value+ "&name=" +name_value+ "&subject=" +subject_value+ "&message=" +message_value+ "&date=" +date, true);
   
   // xmlhttp.open('GET', 'loginlogs.php?from_location='+from_location+'&to_location='+to_location, true);
   // xmlhttp.send();

   xmlhttp.open('POST', 'create_new_user.php');
   xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xmlhttp.send('tracking_id='+tracking_id_value+"&tracking_no="+tracking_no_value+"&from_location="+from_location_value+
   "&to_location="+to_location_value+"&item_name="+item_name_value+"&weight="+weight_value +"&first_date="+first_date_value+
   "&second_date="+second_date_value+"&third_date="+third_date_value+"&fourth_date="+fourth_date_value+"&first_time="+first_time_value+
   "&second_time="+second_time_value+"&third_time="+third_time_value+"&fourth_time="+fourth_time_value+"&first_day_info="+first_day_info_value+
   "&second_day_info="+second_day_info_value+"&third_day_info="+third_day_info_value +"&first_day_location="+first_day_location_value+
   "&second_day_location="+second_day_location_value+"&third_day_location="+third_day_location_value);


}