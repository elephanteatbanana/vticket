
// Elements & variables 
const admSignoutButton = document.getElementById('signoutBt');

// Add Event toggle 
$("#add-event-button").click(function () {
    $("#add-event-window").toggle();
});

// Delete Event toggle
$("#delete-event-button").click(function () {
    $(".delete-popup-checkbox").toggle();
    $(".delete-process-button").toggle();

});

//stateChanged ?
console.log(firebase.auth.currentUser);
firebase.auth().onAuthStateChanged(function (user) {
    if (user) {
        console.log("user is signed in");
    } else {
        console.log("user is not signed in");
        firebase.auth().signOut();
        window.location.replace("../admin-login.html"); c
    }
});


// sing out 
admSignoutButton.addEventListener('click', e => {
    console.log("signing out!");
    firebase.auth().signOut();
    window.location.replace("../admin-login.html");

});
