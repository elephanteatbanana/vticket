//Vars

const signoutButton = document.getElementById('signoutBt');

//Sign out

signoutButton.addEventListener('click', e => {
    console.log("Signed out");
    firebase.auth().signOut();
    window.location.replace("home.html");
})


//status change

firebase.auth().onAuthStateChanged(function (user) {
    if (user) {
        console.log("User is in");
    } else {
        console.log("User is not in");
        console.log("Signed out");
        firebase.auth().signOut();
        window.location.replace("home.html");
    }
})