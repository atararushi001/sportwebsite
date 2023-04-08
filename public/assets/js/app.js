
jQuery('#signupform').validate({    
    rules:{
        'fname':{
            'required':true,
            'minlength':2,
        },
        'laname':{
            'required':true,
            'minlength':2,
        },
        'enroll':{
            'required':true,
            'minlength':12,
        },
        'branch':{
            'required':true,
        },
        'address':{
            'required':true,
            'minlength':6,
        },
        'country':{
            'required':true,
        },
        'statelist':{
            'required':true,
            
        },
        'city':{
            'required':true,
        },

        'email':{
            'required':true,
            'email':true
        },
        'otp':{
            'required':true,
            'minlength':4,
            'equalTo':'#otphidden'
        },

        'phone':{
            'required':true,
            'digits':true,
            'minlength':10,
            'maxlength':10,
        },
        'password':{
            'required':true,
            'minlength':8,
        },
        'cpassword':{
            'required':true,
            'minlength':8,
            'equalTo':'#password'
        },
    },
    messages:{
        'fname':{
            'required':'Please Enter Your first Name',
            'minlength':'Please Enter The Minimum 5 Characture Name'
        },
        'laname':{
            'required':'Please Enter Your last Name',
            'minlength':'Please Enter The Minimum 5 Characture Name'
        },
        'enroll':{
            'required':'Please Enter minimum 12 charchter',
            'minlength':'Please Enter The Minimum 5 Characture Name'
        },
        'address':{
            'required':'Please Enter Your Address',
            'minlength':'Please Enter The Minimum 5 Characture Name'
        },
        'email':{
            'required':'Please Enter Your Email Address',
            'email':'Please Enter The Proper Email Address'
        },
        'otp':{
            'equalTo':'Sorry! Your otp Is Not Matched please try again'
        },
        'phone':{
            'required':'Please Enter Your Mobile Number',
            'digits':'Please Enter Only Numbers',
            'minlength':'Please The Your Currect Mobile Number',
            'maxlength':'Please The Your Currect Mobile Number',
        },
        'password':{
            'required':'Please Enter Your Password',
            'minlength':'Please Enter The Minimum 8 Characture Password'
        },
        'cpassword':{
            'required':'Please Enter Your Re-Password',
            'minlength':'Please Enter The Minimum 8 Characture Password',
            'equalTo':'Sorry! Your Password Is Not Match'
        }
    },
    submitHandler:function (form) {
        form.submit();
    }
});
