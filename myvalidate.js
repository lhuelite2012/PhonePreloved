 $().ready(function() {
  $("#form1").validate({
    rules: {
     loginname: {
      required: true,
      minlength: 3
      },   
     username: {
      required: true,
      minlength: 2
      },
     email: {
      required: true,
      email: true
      },
     password1: {
      required: true,
      minlength: 5
      },
     password2: {
      required: true,
      minlength: 5,
      equalTo: "#password1"
      },
	 name:{
	  required: true
	 }
    },
    messages: {
     loginname: {
      required:"請輸入資料",
      minlength:"最少輸入三個字"
      },  
     username: {
      required:"請輸入資料",
      minlength:"最少輸入兩個字"
      },
     email: {
      required:"請輸入資料",
      email:"請輸入正確電子郵件信箱"
      },
     password1: {
      required:"請輸入資料",
      minlength:"最少輸入五個字"
      },
    password2: {
     required:"請輸入資料",
     minlength:"最少輸入五個字",
     equalTo: "密碼必須相同"
      },
	name:{
	 required:"請輸入資料"	
	}
    }
    });
  $("#form1").submit(function()
   {
	if (!isCheckedById("choicemethod"))
	 {
	  alert ("請至少選擇一項");
	  return false;
	 }				
	else
	 {
	   return true; 
     }	
   });				
  function isCheckedById(id)
    {
	 var checked = $("input[@id="+id+"]:checked").length;
	 if (checked == 0)
	 {
		return false;
	 }
	 else
	 {
		return true;	 
	 }
	}		
  }
 );			