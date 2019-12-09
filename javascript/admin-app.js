//Vars

const getEmail = document.getElementById('emailId');
const getPass = document.getElementById('passwordId');
const loginButton = document.getElementById('login-button');

//Login Events

loginButton.addEventListener('click', e => {
    // get email & password
    const email = getEmail.value;
    const pass = getPass.value;
    const auth = firebase.auth();

    // sign in
    const singin = auth.signInWithEmailAndPassword(email, pass);
    singin.catch(e => $("#loginMessage").text(e.message) && console.log(e.message));
    var errorMessage = e.message;
    $("#loginMessage").fadeIn();

});

//Autehntication status
firebase.auth().onAuthStateChanged(firebaseUser => {

    var db = firebase.firestore();
    if (firebaseUser) {
        var docRef = db.collection("userList").doc(firebaseUser.uid);
        docRef.get().then(function (doc) {
            if (doc.exists) {
                if (doc.data().admin) {
                    console.log("admin");
                    window.location.replace("admin/main.php");
                } else {
                    console.log("not admin");
                    $("#loginMessage").text("Invalid Admin User");
                    $("#loginMessage").fadeIn();
                    firebase.auth().signOut();
                }
            }
        })
    } else {
        console.log("not logged in");
    }


});
