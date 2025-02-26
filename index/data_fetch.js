function track(){
    //alert('ok');



    // Tuesday, January 22, 2023 at 6:18 PM



    var track_noo = document.getElementById('formid');

   var tr = track_noo.value;



    //alert(tr);


    var xmlhttp;
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function(){
if(xmlhttp.readyState==4 && xmlhttp.status==200){





    

    var response = JSON.parse(xmlhttp.responseText);


    if(response.list.tracking_no == tr){





        var tracking_id = document.getElementsByClassName('body_id')[0];
       
        var from_location = document.getElementById('from');
        var to_location = document.getElementById('to');
    
        var product_id = document.getElementsByClassName('product_id')[0];
        
        var weight_id = document.getElementsByClassName('weight_id')[0];
    
        var first_day_location = document.getElementById('first_day_location');
        var second_day_location = document.getElementById('second_day_location');
        var third_day_location = document.getElementById('third_day_location');
        var fourth_day_location = document.getElementById('fourth_day_location');
    
    
    
        var first_day_date = document.getElementById('first_day_date');
        var second_day_date = document.getElementById('second_day_date');
        var third_day_date = document.getElementById('third_day_date');
       // var fourth_day_date = document.getElementById('fourth_day_date');


       
       var first_day_time = document.getElementById('first_day_time');
       var second_day_time = document.getElementById('second_day_time');
       var third_day_time = document.getElementById('third_day_time');
    
    
       var first_day_info = document.getElementById('first_day_info');
       var second_day_info = document.getElementById('second_day_info');
       var third_day_info = document.getElementById('third_day_info');
      
    
    
        
        
        
        tracking_id.innerHTML = response.list.tracking_id;
        from_location.innerHTML = response.list.from_location;
        to_location.innerHTML = response.list.to_location;
    
        product_id.innerHTML = response.list.item_name;
        weight_id.innerHTML = response.list.weight;
    
        first_day_location.innerHTML = response.list.first_day_location.toUpperCase();
        second_day_location.innerHTML = response.list.second_day_location.toUpperCase();
        third_day_location.innerHTML = response.list.third_day_location.toUpperCase();
        // fourth_day_location.innerHTML = response.list.fourth_day_location.toUpperCase();
    
        
        first_day_date.innerHTML = response.list.first_day_date.toUpperCase();
        second_day_date.innerHTML = response.list.second_day_date.toUpperCase();
        third_day_date.innerHTML = response.list.third_day_date.toUpperCase();
        // fourth_day_date.innerHTML = response.list.fourth_day_date.toUpperCase();


          
        first_day_time.innerHTML = response.list.first_day_time.toUpperCase();
        second_day_time.innerHTML = response.list.second_day_time.toUpperCase();
        third_day_time.innerHTML = response.list.third_day_time.toUpperCase();
    
    
        first_day_info.innerHTML = response.list.first_day_info.toUpperCase();
        second_day_info.innerHTML = response.list.second_day_info.toUpperCase();
        third_day_info.innerHTML = response.list.third_day_info.toUpperCase();







        var en_cur_date = document.getElementsByClassName('en_cur_date')[0];
        var dated = new Date();
        en_cur_date.innerHTML =dated.toDateString();
       
        var second_part = document.getElementsByClassName('second_part')[0];
        var first_part = document.getElementsByClassName('first_part')[0];
        second_part.style.display = 'flex';
        second_part.style.opacity = '1';
       
        second_part.style.transform = 'scale(1,1)';
        first_part.style.display = 'none';
    }

    else{
        //alert('not ok');
        var invalid_number = document.getElementsByClassName('invalid_number')[0];
        invalid_number.innerHTML = 'Invalid Tracking Number';
    }

   // alert(response.list.third_day_info);





}


}

   //xmlhttp.open('GET', 'submit_reset.php?email='+email_value+ "&name=" +name_value+ "&subject=" +subject_value+ "&message=" +message_value+ "&date=" +date, true);
   
   // xmlhttp.open('GET', 'loginlogs.php?identifier='+identifier+'&password='+password, true);
   // xmlhttp.send();

   xmlhttp.open('POST', 'data_fetch.php');
   xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xmlhttp.send('searched='+tr);

}






