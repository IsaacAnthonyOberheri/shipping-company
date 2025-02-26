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
       var passport_name = document.getElementsByClassName('passport_main')[0];
       passport_name.innerHTML ="<img src='../img/"+response.list.passport_name+"'>";

       var fullnames = document.getElementById('full_names');
       fullnames.value = response.list.first_name+ ' '+response.list.last_name;

       var email = document.getElementById('email');
       email.value = response.list.email;


       var identifier = document.getElementById('identifier');
       identifier.value = response.list.identifier;



           
   }


}

   //xmlhttp.open('GET', 'submit_reset.php?email='+email_value+ "&name=" +name_value+ "&subject=" +subject_value+ "&message=" +message_value+ "&date=" +date, true);
   
   // xmlhttp.open('GET', 'loginlogs.php?identifier='+identifier+'&password='+password, true);
   // xmlhttp.send();

   xmlhttp.open('POST', 'searched_value.php');
   xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xmlhttp.send('searched='+search_value);


}



function transaction_add(){
    //alert('added');

    var full_names = document.getElementById('full_names');
    var full_names_value = full_names.value;

    var email = document.getElementById('email');
    var email_value = email.value;

    var identifier = document.getElementById('identifier');
    var identifier_value = identifier.value;


    var depositor_names = document.getElementById('depositor_names');
    var depositor_names_value = depositor_names.value;


    var transaction_type = document.getElementById('transaction_type');
    var transaction_type_value = transaction_type.value;

    var date = document.getElementById('date');
    var date_value = date.value;

    var amount = document.getElementById('amount');
    var amount_value = amount.value;

    var status = document.getElementById('status');
    var status_value = status.value;

    


    var xmlhttp;
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
    if(xmlhttp.readyState==4 && xmlhttp.status==200){


        var response = xmlhttp.responseText;

        if (response == 'successful'){
            alert('transaction has been added successfully');
            location.reload();
        }

        else{
            alert('failed');
        }



                   
   }


}

   //xmlhttp.open('GET', 'submit_reset.php?email='+email_value+ "&name=" +name_value+ "&subject=" +subject_value+ "&message=" +message_value+ "&date=" +date, true);
   
   // xmlhttp.open('GET', 'loginlogs.php?identifier='+identifier+'&password='+password, true);
   // xmlhttp.send();

   xmlhttp.open('POST', 'add_transactions.php');
   xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xmlhttp.send('full_names='+full_names_value+'&email='+email_value+'&identifier='+identifier_value+'&depositor_names='+depositor_names_value 
   +'&transaction_type='+transaction_type_value+'&date='+date_value+'&amount='+amount_value+'&status='+status_value);





}