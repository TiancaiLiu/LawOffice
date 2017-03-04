// JavaScript Document
function check(str)
{
	var x = document.getElementById(str);
	var y = document.getElementById(str+"Check");
//alert("check!");
	if(str=="name")
	{  if(x.value==""||x.value.length<4||x.value.length>16)
	     {y.hidden = false;}
	   else             
	     y.hidden = true;
	}
	else if(str=="realname"){
		if(x.value==""){y.hidden=false;}
		else{y.hidden=true;}
	}
	else if(str=="visa"){
		if(x.value=="")
		   y.hidden=false;
		else y.hidden=true;
	}
	else if(str=="password")
	{  x = x.value.length;
	   if(x < 6||x>16){
	        y.hidden = false;
	//alert("check!");
	   }
	   else
	      y.hidden = true;
	}
	
	else if(str=="cpassword")
    {
       var z = document.getElementById("password").value;
       x = x.value;
       if(x != z)
           y.hidden = false;
       else
           y.hidden = true;
    }
	else if(str=="phonenum")
	{   var id=document.getElementById("phonenum");
        var phone = id.value;    
        //匹配到一个非数字字符，则返回false
        var expr =  /\D/i;
	    if(expr.test(phone))
        {  return false;
           y.hidden=false;
        }
		else y.hidden=true;	
	}
	else if(str=="Idnumber"){
		var id=document.getElementById("Idnumber");
        var IDNumber =id.value;
        if(IDNumber.length<18||IDNumber.length>19)
        {   return false;
		    y.hidden=false;
        }
        var expr=/([0]{18}[x|y]?)|([1]{18}[x|y]?)/i;
        if(expr.test(IDNumber))
        { return false;
		  y.hidden=fasle;
        }
        return true;
		y.hidden=true;
		}
	else if(str=="email")
	{
	x = x.value.indexOf("@")
	if(x == -1)
	y.hidden = false;
	else
	y.hidden = true;
	}
	return y.hidden;
	}
    
function validate()
{
var arr=["name","realname","visa","password","cpassword","phonenum", "Idnumber","email"];
var i = 0;
submitOK = true;
while(i <= 7)
{
if(!check(arr[i]))
{
	switch(arr[i]){
		case "name": arr[i]="用户名";break;
		case "realname": arr[i]="真实姓名";break;
		case "password": arr[i]="密码";break;
		case "cpassword": arr[i]="确认密码";break;
		case "phonenum": arr[i]="联系方式";break;
		case "Idnumber": arr[i]="身份证号";break;
		case "email": arr[i]="邮箱";break;
		case "visa": arr[i]="证件号";break;

	}
alert("您填入的 "+arr[i]+" 有误！");
submitOK = false;
break;
}
i++;
}
if(submitOK)
{
alert("提交成功！");
return true;
}
else
{
alert("提交失败");
return false;
}
}

/*function load_greeting()
{
//alert("visit \n");
} */