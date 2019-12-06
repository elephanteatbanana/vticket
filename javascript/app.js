// Vars

const getEmail = document.getElementById('emailId');
const getPass = document.getElementById('passwordId');
// userName -> user's name : initial value : null
var userName;
const getSignUpEmail = document.getElementById('signUpemailId');
const getSignUpName = document.getElementById('signUpnameId');
const getSignUpPass = document.getElementById('signUppassword');
const getRePass = document.getElementById('signUpRepassword');

const loginButton = document.getElementById('loginBt');
const signupButton = document.getElementById('signupBt');
const CreateAcButton = document.getElementById('createAccountBt');
const forgotpassButton = document.getElementById('forgotpassBt');
const resetPasswordButton = document.getElementById('forgotPasswordResetBt');

// Login event

loginButton.addEventListener('click', e => {
    // get email & password
    const email = getEmail.value;
    const pass = getPass.value;
    const auth = firebase.auth();

    // sign in
    const singin = auth.signInWithEmailAndPassword(email, pass);
    singin.catch(e => $("#loginMessage").text(e.message) && console.log(e.message));
    $("#loginMessage").fadeIn();
});

//Create account


CreateAcButton.addEventListener('click', function () {
    $("#signInWindow").hide();
    $("#signUpWindow").show();

    //Forgot password
});
forgotpassButton.addEventListener('click', function () {
    $("#signInWindow").hide();
    $("#forgotPassword").show();
});


// reset password

resetPasswordButton.addEventListener('click', function () {
    var auth = firebase.auth();
    var email = $("#forgotPasswordEmail").val();
    console.log(email);

    if (email != "") {
        auth.sendPasswordResetEmail(email).then(function () {
            $("#forgetPasswordMessage").text("Email has been sent to you, Please check and reset your password");
        }).catch(function (e) {
            $("#forgetPasswordMessage").text(e.message);
        });
    } else {
        $("#forgetPasswordMessage").text("Please Write Your Email !");
    }

});

//sign up
signupButton.addEventListener('click', e => {

    //get email & password for sing-up
    const email = getSignUpEmail.value;
    userName = getSignUpName.value;
    const pass = getSignUpPass.value;
    const rePass = getRePass.value;
    if (pass != rePass) {
        console.log(pass);
        console.log(rePass);
        $("#signUpMessage").text("the passwords do not match") && $("#signUpMessage").fadeIn();

    } else {
        // sign up & in --
        const auth = firebase.auth();
        const singup = auth.createUserWithEmailAndPassword(email, pass);
        singup.catch(e => $("#signUpMessage").text(e.message) && $("#signUpMessage").fadeIn());
    }

});

// authentication status

firebase.auth().onAuthStateChanged(firebaseUser => {
    var db = firebase.firestore();
    if (firebaseUser) {
        const newUserData = writeUserData(db, firebaseUser.uid, userName, firebaseUser.email)
            .then(() => {
                window.location.replace("menu.php");
            }
            )
            .catch(e => console.log(e.message));

    } else {
        console.log("not logged in");

    }
});

// write new user data 

function writeUserData(userDatabase, userId, name, email) {
    return new Promise((resolve, reject) => {
        var userRef = userDatabase.collection("userList").doc(userId);
        // check if the data exists in the array
        userRef.get().then(async (doc) => {
            if (!doc.exists) {
                // create a new doc with uid
                const userDataCreation = await userDatabase.collection("userList").doc(userId).set({
                    username: name,
                    email: email,
                    bookingList: []
                });
                console.log("resolve");
                resolve();
            } else {
                //error 
                console.log("reject");
                resolve();
            }
        });

    });
}
