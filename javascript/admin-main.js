//Vars

const signoutButton = document.getElementById('signoutBt');

// sing out 
signoutButton.addEventListener('click', e => {
    console.log("signed out");
    firebase.auth().signOut();
    window.location.replace("../admin-login.html");

});

//get the currently signed-in user

firebase.auth().onAuthStateChanged(function (user) {
    if (user) {
        console.log("user is signed in");
    } else {
        console.log("user is not signed in");
        console.log("signed out");
        firebase.auth().signOut();
        window.location.replace("../admin-login.html");
    }
});