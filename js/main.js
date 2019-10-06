function displayStudent(){
	$('#page-content').html(" ");
	display('page-content','php/displayStudent.php', true);
};

function displayEvaluationList(){
	$('#page-content').html(" ");
	display('page-content','php/displayEvaluationList.php',true);
};

function displayResults(){
	$('#page-content').html(" ");
	display('page-content','php/displayResults.php', true);
};

jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});
 
});


const loginBtn = document.getElementById('login');
const signBtn = document.getElementById('signup');

signBtn.addEventListener('click', (e) => {
	let parent = e.target.parentNode.parentNode;
	Array.from(e.target.parentNode.parentNode.classList).find((element) => {
		if(element !== "slide-up") {
			parent.classList.add('slide-up')
		}else{
			loginBtn.parentNode.classList.add('slide-up')
			parent.classList.remove('slide-up')
		}
	});
});

loginBtn.addEventListener('click', (e) => {
	let parent = e.target.parentNode;
	Array.from(e.target.parentNode.classList).find((element) => {
		if(element !== "slide-up") {
			parent.classList.add('slide-up')
		}else{
			signBtn.parentNode.parentNode.classList.add('slide-up')
			parent.classList.remove('slide-up')
		}
	});
});


$(document).ready(function() {
	$('#butsave').on('click', function() {
		var fname = $('#fname').val();
		var lname = $('#lname').val();
		var email = $('#email').val();
		var pass = $('#pass').val();
		if(fname!="" && lname!="" && email!="" && pass!=""){
			$.ajax({
				url: "php/signup.php",
				type: "POST",
				data: {
					fname: fname,
					lname: lname,
					email: email,
					pass: pass
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						alert("Successfully Sign Up!!")
						$('#fupform').find('input:text').val('');
						$('#email').val('');
						$('#pass').val('');
						
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});

function retrieveUser(userFname){
    var dataString = 'userFname=' + userFname;
//    alert(insUName);
    
    $.ajax({
      type: "POST",
      url: "php/retrieveUser.php",
      data: dataString,
      cache: false,
      success: function (result) {
		 var text = JSON.parse(result);
         $(".userId").val(text.userId);
         $(".userFname").val(text.userFname);
         $(".userLname").val(text.userLname);
         $(".userEmail").val(text.userEmail);
         $(".userPass").val(text.userPass);
      },
      error: function (result) {
         alert("error: " + result);
      }
   });
   return false;
}

function updateUser(){
	var userId = $(".userId").val();
	var userFname = $("input[name=newFname]").val();
	var userLname = $("input[name=newLname]").val();
	var userEmail = $("input[name=newEmail]").val();
	var userPass = $("input[name=newPass]").val();
	// alert(userId +userFname+userLname+userEmail+userPass);

	if(userFname == "" || userLname == "" || userEmail == "" || userPass == ""){
		alert("Incomplete User details. Please make sure to fill up all the inputs");
	}else{
		var dataString = '&userId=' + userId +
						'&userFname=' + userFname +
						'&userLname=' + userLname +
						'&userEmail=' + userEmail +
						'&userPass=' + userPass;
	$.ajax({
		type: "POST",
		url: "php/updateUser.php",
		data: dataString,
		cache: false,
		success: function (result){
			alert(result);
			$('#updateUserModal').modal('hide');
			display('page-content','php/displayStudent.php',true);
		},
		error: function (result){
			console.debug(xhr);
			console.debug(error);
		}
	});
	return false;
	}
}



