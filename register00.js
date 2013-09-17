 $().ready(function() {
  $("#form1").validate({
    rules: {
     account: {
      required: true,
      email: true
      },   
     password: {
      required: true,
      minlength: 5
      },
	 password2: {
      required: true,
      minlength: 5,
      equalTo: "#password"
      },
     name: {
      required: true,
	  minlength: 2
      },
     phone: {
      required: true,
      minlength: 8
      }
    },
    account: {
     loginname: {
      required:"請輸入資料",
      email:"請輸入正確電子郵件信箱"
      },  
     password: {
      required:"請輸入資料",
      minlength:"最少輸入5個字"
      },
     password2: {
      required:"請輸入資料"
      },
     name: {
      required:"請輸入資料",
      minlength:"最少輸2個字"
      },
    phone: {
     required:"請輸入資料",
     minlength:"最少輸入五個字",
     equalTo: "最少8個字"
      }
    }
    });
  $("#form1").submit(function()
   {
	if (!isCheckedById("colors"))
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