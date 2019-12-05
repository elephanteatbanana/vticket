// Vars

const signoutButton = document.getElementById('signoutBt');


// sing out 
signoutButton.addEventListener('click', e => {
    console.log("signed out");
    firebase.auth().signOut();
    window.location.replace("../home.html");
});

//get the currently signed-in user

firebase.auth().onAuthStateChanged(function (user) {
    if (user) {
        console.log("user is signed in");
    } else {
        console.log("user is not signed in");
        firebase.auth().signOut();
        window.location.replace("../home.html"); c
    }
});

