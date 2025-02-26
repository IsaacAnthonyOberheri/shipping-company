function search(){
    //alert('ok');
    var search_btn = document.getElementsByClassName('search_f')[0];
    var search_value = search_btn.value;

    //alert(search_value);






     
   var xmlhttp;
   xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function(){
   if(xmlhttp.readyState==4 && xmlhttp.status==200){
   

       var response = JSON.parse(xmlhttp.responseText);
      // var response = xmlhttp.responseText;

      var tracking_id = document.getElementById('tracking_id');
     tracking_id.value = response.list.tracking_id;

     var tracking_no = document.getElementById('tracking_no');
     tracking_no.value = response.list.tracking_no;

   //   var passport_name = document.getElementsByClassName('passport_main')[0];
   //   passport_name.innerHTML ="<img src='../img/"+response.list.passport_name+"'>";

     var from_location = document.getElementById('from_location');
     from_location.value = response.list.from_location;


     var to_location = document.getElementById('to_location');
     to_location.value = response.list.to_location;

     var item_name = document.getElementById('item_name');
     item_name.value = response.list.item_name;

     var weight = document.getElementById('weight');
     weight.value = response.list.weight;


     var first_date = document.getElementById('first_date');
     first_date.value = response.list.first_day_date;


     var second_date = document.getElementById('second_date');
     second_date.value = response.list.second_day_date;

     var third_date = document.getElementById('third_date');
     third_date.value = response.list.third_day_date;

     var fourth_date = document.getElementById('fourth_date');
     fourth_date.value = response.list.fourth_day_date;



     var first_time = document.getElementById('first_time');
     first_time.value = response.list.first_day_time;


     var second_time = document.getElementById('second_time');
     second_time.value = response.list.second_day_time;

     var third_time = document.getElementById('third_time');
     third_time.value = response.list.third_day_time;

     var fourth_time = document.getElementById('fourth_time');
     fourth_time.value = response.list.fourth_day_time;





     var first_day_info = document.getElementById('first_day_info');
     first_day_info.value = response.list.first_day_info;


     var second_day_info = document.getElementById('second_day_info');
     second_day_info.value = response.list.second_day_info;

     var third_day_info = document.getElementById('third_day_info');
     third_day_info.value = response.list.third_day_info;

   //   var fourth_day_info = document.getElementById('fourth_day_info');
   //   fourth_day_info.value = response.list.fourth_day_info;
   

     var first_day_location = document.getElementById('first_day_location');
     first_day_location.value = response.list.first_day_location;


     var second_day_location = document.getElementById('second_day_location');
     second_day_location.value = response.list.second_day_location;

     var third_day_location = document.getElementById('third_day_location');
     third_day_location.value = response.list.third_day_location;


     


    
   }


}

   //xmlhttp.open('GET', 'submit_reset.php?email='+email_value+ "&name=" +name_value+ "&subject=" +subject_value+ "&message=" +message_value+ "&date=" +date, true);
   
   // xmlhttp.open('GET', 'loginlogs.php?from_location='+from_location+'&to_location='+to_location, true);
   // xmlhttp.send();

   xmlhttp.open('POST', 'searched_value.php');
   xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xmlhttp.send('searched='+search_value);




}













function update_all(main_value, table_value ){
   //alert('ok');

 

   var main = document.getElementById(main_value);
   var main_value =  main.value;

      // spliting the string to arrays


      // alert(last_name);

      var tracking_no = document.getElementById('tracking_no');
      var tracking_value = tracking_no.value;

   // alert('ok');

   var xmlhttp;
   xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function(){
   if(xmlhttp.readyState==4 && xmlhttp.status==200){
   

       //var response = JSON.parse(xmlhttp.responseText);
       var response = xmlhttp.responseText;

      if(response == 'updated'){
        alert('Updated successfully');
      }

      else{
         alert('failed '+response);
         console.log('main value = '+main_value+" tracking value = "+tracking_value+" table value = "+table_value);
      }




    }


}



   xmlhttp.open('POST', 'dataupdate2.php');
   xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xmlhttp.send('main_value='+main_value+'&tracking_value='+tracking_value+'&table_value='+table_value);







}

//the first parameter is the id in the html file, while the second parameter is the database table name


function tracking_id_update(){
   update_all('tracking_id', 'tracking_id');
}

function tracking_no_update(){
   update_all('tracking_no', 'tracking_no');
}

function from_location_update(){
   update_all('from_location', 'from_location');
}

function to_location_update(){
   update_all('to_location', 'to_location');
}

function item_name_update(){
   update_all('item_name', 'item_name');
}

function item_name_update(){
   update_all('item_name', 'item_name');
}


function weight_update(){
   update_all('weight', 'weight');
}


function first_date_update(){
   update_all('first_date', 'first_day_date');
}



function second_date_update(){
   update_all('second_date', 'second_day_date');
}

function third_date_update(){
   update_all('third_date', 'third_day_date');
}

function fourth_date_update(){
   update_all('fourth_date', 'fourth_day_date');
}






function first_time_update(){
   update_all('first_time', 'first_day_time');
}



function second_time_update(){
   update_all('second_time', 'second_day_time');
}

function third_time_update(){
   update_all('third_time', 'third_day_time');
}

function fourth_time_update(){
   update_all('fourth_time', 'fourth_day_time');
}







function first_day_info_update(){
   update_all('first_day_info', 'first_day_info');
}


function second_day_info_update(){
   update_all('second_day_info', 'second_day_info');
}



function third_day_info_update(){
   update_all('third_day_info', 'third_day_info');
}



function first_day_location_update(){
   update_all('first_day_location', 'first_day_location');
}

function second_day_location_update(){
   update_all('second_day_location', 'second_day_location');
}


function third_day_location_update(){
   update_all('third_day_location', 'third_day_location');
}









function passport_update(){
   //alert('get_started');


   var from_location = document.getElementById('from_location');
   var from_location_value = from_location.value;
   
   var image_file = document.getElementById('image_file');
   var attri = image_file.getAttribute('name');

   //alert(attri);


   var xmlhttp;
   xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function(){
   if(xmlhttp.readyState==4 && xmlhttp.status==200){
   

       //var response = JSON.parse(xmlhttp.responseText);
       var response = xmlhttp.responseText;

      if(response == 'updated'){
        alert('Updated successfully');
      }




    }


}



   xmlhttp.open('POST', 'image_upload.php');
   xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xmlhttp.send('from_location='+from_location_value);











}