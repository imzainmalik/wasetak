/*
Give the service worker access to Firebase Messaging.
Note that you can only use Firebase Messaging here, other Firebase libraries are not available in the service worker.
*/
importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-messaging.js');
   
/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
* New configuration for app@pulseservice.com
*/
firebase.initializeApp({
        // apiKey: "XXXX",
        // authDomain: "XXXX.firebaseapp.com",
        // databaseURL: "https://XXXX.firebaseio.com",
        // projectId: "XXXX",
        // storageBucket: "XXXX",
        // messagingSenderId: "XXXX",
        // appId: "XXXX",
        // measurementId: "XXX"

        apiKey: "AIzaSyCCOF82t3Jbmr9ZzYQJ0JzkhjSJRa8LGoM",
        authDomain: "wasetak-104d1.firebaseapp.com",
        projectId: "wasetak-104d1",
        storageBucket: "wasetak-104d1.appspot.com",
        messagingSenderId: "730519712816",
        appId: "1:730519712816:web:025a8227863fdfe8de29f5",
        measurementId: "G-LX1EV3969R"
    });
  
/*
Retrieve an instance of Firebase Messaging so that it can handle background messages.
*/
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function(payload) {
    console.log(
        "[firebase-messaging-sw.js] Received background message ",
        payload,
    );
    /* Customize notification here */
    const notificationTitle = "Background Message Title";
    const notificationOptions = {
        body: "Background Message body.",
        icon: "/itwonders-web-logo.png",
    };
  
    return self.registration.showNotification(
        notificationTitle,
        notificationOptions,
    );
});