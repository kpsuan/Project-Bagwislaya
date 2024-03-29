var nameError = document.getElementById('name-error');
var emailError = document.getElementById('email-error');
var subjectError = document.getElementById('subj-error');
var msgError = document.getElementById('msg-error');
var submitError = document.getElementById('submit-error');

function checkName(){
    var fullname = document.getElementById('name').value;

    if(fullname.length == 0){
        nameError.innerHTML='Write full name please';
    }
    if(!fullname.match(/^[a-zA-Z]+ [a-zA-Z]+$/)){
        nameError.innerHTML = 'Write full name please';
        return false;
    }
    nameError.innerHTML='  ';
    return true;
}

function checkEmail(){
    var email = document.getElementById('email').value;

    if(email == 0){
        emailError.innerHTML='enter valid email please';
    }
    if (!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
        emailError.innerHTML ='enter valid email please';
        return false;
    }
    emailError.innerHTML='';
    return true;
}

function checkSubject(){
    var subject = document.getElementById('subject').value;

    if(subject == 0){
        subjectError.innerHTML='enter a subject please';
        setTimeout(function(){nameError.style.display = 'none';}, 3000);
    }
    subjectError.innerHTML='';
    return true;
}

function validateForm(){
    if(!checkName()|| !checkEmail() || !checkSubject()){
        submitError.style.display = 'inline';
        submitError.innerHTML = 'Complete the form please';
        setTimeout(function(){submitError.style.display = 'none';}, 3000);
        return false;
    }
}