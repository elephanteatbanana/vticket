//Vars
const signoutButton = document.getElementById('signoutBt');
const db = firebase.firestore();

//signout
signoutButton.addEventListener('click', e => {
    console.log("signed out");
    firebase.auth().signOut();
    window.location.replace("home.html");

});

//fetching user's booking list
window.onload = function () {
    //check whether the user is in or not 
    firebase.auth().onAuthStateChanged(function (user) {
        if (user) {
            // User is signed in.
            var uid = user.uid;
            var docRef = db.collection("userList").doc(uid);
            docRef.get().then(function (doc) {
                //check if the user data exists on Firebase
                if (doc.exists) {
                    //fethcing the user's booking list from Firebase
                    doc.data().bookingList.forEach(function (element) {
                        var idData = "";
                        docRef.collection(element).get().then(function (querySnapshot) {
                            querySnapshot.forEach(function (subDoc) {
                                idData = subDoc.data().title + " " + subDoc.data().location;
                                //create an anchor with booking data
                                var bookingUnorederList = document.createElement("li");
                                var bookingListLink = document.createElement("a");
                                var att = document.createAttribute("href");
                                var fetchedCat = subDoc.data().category;
                                var substrCat = fetchedCat.substring(0, 3);
                                console.log("fetched" + substrCat);
                                // link to the content
                                var hrefValue = "category/detail.php?cat=" + substrCat + "&id=" + subDoc.data().id;
                                att.value = hrefValue;
                                bookingListLink.setAttributeNode(att);
                                bookingUnorederList.appendChild(bookingListLink);
                                // append in the booking list container
                                document.getElementById("bookList").appendChild(bookingUnorederList)
                                var innerTextOfLink = document.createTextNode(idData);
                                bookingListLink.appendChild(innerTextOfLink);
                            });
                        })
                    });
                } else {
                    // doc.data() will be undefined in this case
                    console.log("No such document!");
                }
            }).catch(function (error) {
                console.log("Error getting document:", error);
            });
        } else {
            // User is signed out.
            firebase.auth().signOut();
            window.location.replace("home.html");
        }
    });










}