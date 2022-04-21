// Import the functions you need from the SDKs you need
import { getFirestore, collection, addDoc, setDoc, doc, getDocs, deleteDoc } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-firestore.js";
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-analytics.js";
import { getAuth, signInWithEmailAndPassword, signInWithPopup, GoogleAuthProvider, FacebookAuthProvider, 
            sendPasswordResetEmail, onAuthStateChanged, setPersistence, browserSessionPersistence,
            createUserWithEmailAndPassword, updateProfile, signOut } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-auth.js";


const firebaseConfig = {
    apiKey: "AIzaSyDHNwlY7FiIHTM4Pm6oaNBg1odghq-i7K4",
    authDomain: "croquetnow-web.firebaseapp.com",
    projectId: "croquetnow-web",
    storageBucket: "croquetnow-web.appspot.com",
    messagingSenderId: "850000830422",
    appId: "1:850000830422:web:f267f80223ffd60f7f0e77",
    measurementId: "G-B8H507WXNR"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const auth = getAuth();
const providerGoogle = new GoogleAuthProvider();
const providerFacebook = new FacebookAuthProvider();
const db = getFirestore(app);
let userId = null;

let actualUrl = window.location.pathname;
const ingresarForm = document.querySelector("#iniciar-sesion-form");
const forgotForm = document.querySelector("#forgot-form");
const registrarForm = document.querySelector("#registrar-form");
const google = document.querySelector("#google");
const facebook = document.querySelector("#facebook");
const logOut = document.querySelector("#salir");
const editName = document.getElementById("edit-name");
const editEmail = document.getElementById("edit-email");
const editPhone = document.getElementById("edit-phone");
const editPassword = document.getElementById("edit-password");
let bigName = document.getElementById("name");
let bigEmail = document.getElementById("user");
let userName = document.getElementById("profile-name");
let userEmail = document.getElementById("profile-email");
let userPhone = document.getElementById("profile-phone");
let userPassword = document.getElementById("profile-password");
const addpetForm = document.querySelector("#addpet-form");
let crearMascota = document.getElementById("crear");
let petNAme = document.getElementById("petname");
let petWeight = document.getElementById("petweight");
let petAge = document.getElementById("petage");
let petStart = document.getElementById("petstart");
let petDelay = document.getElementById("petdelay");
let petTimes = document.getElementById("pettimes");
let petFood = document.getElementById("petfood");
let table = document.getElementById("table");

onAuthStateChanged(auth, (user) => {

    if (user) {
        // User is signed in, see docs for a list of available properties
        // https://firebase.google.com/docs/reference/js/firebase.User
        const uid = user.uid;
        userId = uid;
        console.log("user logged in");
        console.log(uid);
        console.log(actualUrl); 
        
        const displayName = user.displayName;
        const email = user.email;
        const photoURL = user.photoURL;
        const emailVerified = user.emailVerified;

        if (actualUrl == "/index.php") {
            location ="home.php";
        } else {
            //
        }

        if (actualUrl == "/profile.php") {
            bigName.innerHTML = displayName;
            bigEmail.innerHTML = email;
            userName.value = displayName;
            userEmail.value = email;
        } else {
            //
        }

        listPets(uid);
    } else {
        console.log("user logged out")
    }
});

async function addCollection(id) {
    console.log("start");

    const docRef = await addDoc(collection(db, id), {
    }) 
    .then(() => {
        console.log("collection created", "user id attached");
    })
    .catch((error) => {
        const errorCode = error.code;
        const errorMessage = error.message;
    });
}

async function listPets(id) {
    console.log("cargando...");
    let length = 0; 

    const querySnapshot = await getDocs(collection(db, id));
    querySnapshot.forEach((doc) => {
        // doc.data() is never undefined for query doc snapshots
        console.log(doc.id, " => ", doc.data());
        length += 1;;

        console.log(length);
    });
} 
if (ingresarForm !== null) {
    ingresarForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const email = document.querySelector("#email").value;
        const contraseña = document.querySelector("#contraseña").value;
        
        signInWithEmailAndPassword(auth, email, contraseña).then((userCredential) => {
            const user = userCredential.user;
            location ="home.php";
        })
        .catch((error) => {
            const errorCode = error.code;
            const errorMessage = error.message;
        });
    })
} else {
    //
}

if (google !== null) {
    google.addEventListener('click', (e) => {
        e.preventDefault();

        signInWithPopup(auth, providerGoogle)
        .then((result) => {
            // This gives you a Google Access Token. You can use it to access the Google API.
            const credential = GoogleAuthProvider.credentialFromResult(result);
            const token = credential.accessToken;
            // The signed-in user info.
            const user = result.user;
            location.href ="home.php";
            // ...
        }).catch((error) => {
            // Handle Errors here.
            const errorCode = error.code;
            const errorMessage = error.message;
            // The email of the user's account used.
            const email = error.email;
            // The AuthCredential type that was used.
            const credential = GoogleAuthProvider.credentialFromError(error);
            // ...
        });
    });
}


if (facebook !== null) {
    facebook.addEventListener('click', (e) => {
        e.preventDefault();

        signInWithPopup(auth, providerFacebook)
        .then((result) => {
            // The signed-in user info.
            const user = result.user;
            
            // This gives you a Facebook Access Token. You can use it to access the Facebook API.
            const credential = FacebookAuthProvider.credentialFromResult(result);
            const accessToken = credential.accessToken;
            // ...
            location.href="home.php";
        })
        .catch((error) => {
            // Handle Errors here.
            const errorCode = error.code;
            const errorMessage = error.message;
            // The email of the user's account used.
            const email = error.email;
            // The AuthCredential type that was used.
            const credential = FacebookAuthProvider.credentialFromError(error);

            // ...
        });
    });
}


if (forgotForm !== null) {
    forgotForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const recuperaEmail = document.querySelector("#recuperaEmail").value;
        console.log(recuperaEmail);
        
        sendPasswordResetEmail(auth, recuperaEmail)
        .then(() => {
            // Password reset email sent!
            // ..
            recuperar();
            window.alert("El email ha sido enviado.");
        })
        .catch((error) => {
            const errorCode = error.code;
            const errorMessage = error.message;
            // ...
        });
    })
} else {
    //
}

if (addpetForm !== null) {
    addpetForm.addEventListener('submit', (e) => {
        e.preventDefault();
        setDoc(doc(db, userId, petNAme.value), {
            name: petNAme.value,
            weight: petWeight.value,
            age: petAge.value,
            start: petStart.value,
            delay: petDelay.value,
            times: petTimes.value,
            quantity: petFood.value,
            });

        window.alert("La mascota ha sido añadida.");
    })
} else {
    //
}

if (registrarForm !== null) {
    registrarForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const registrarNombre = document.querySelector("#registrar-nombre").value;
        const registrarEmail = document.querySelector("#registrar-email").value;
        const registrarContraseña = document.querySelector("#registrar-contraseña").value;
        
        createUserWithEmailAndPassword(auth, registrarEmail, registrarContraseña).then((userCredential) => {
            const user = userCredential.user;
            const uid = user.uid;
            console.log("registrado")

            updateProfile(auth.currentUser, {
                displayName: registrarNombre,
                email: registrarEmail
            }).then(() => {
            // Profile updated!
            // ...
            console.log("Nombre registrado");
            console.log (user.displayName);
            }).catch((error) => {
            // An error occurred
            // ...
            });

            addCollection(uid);
            window.alert("User has been registered.");
        })
        .catch((error) => {
            const errorCode = error.code;
            const errorMessage = error.message;
            // ..   
            console.log("no se registró")
        });
    })
} else {
    //
}

if (logOut !== null) {
    logOut.addEventListener('click', (e) => {
        e.preventDefault();

        signOut(auth).then(() => {
        console.log("sesion cerrada");
        location.href ="index.php";
        }).catch((error) => {
        // An error happened.
        });
    })
}

if (editName !== null) {
    editName.addEventListener('click', (e) => {
        e.preventDefault();
        const guardarName = document.getElementById("guardar-name");
        const enable = document.getElementById("profile-name");

        guardarName.classList.toggle("show-btn");
        if (enable.disabled) {
            // If disabled, do this 
            enable.disabled = false;
        } else {
            // Enter code here
            enable.disabled = true;
        }

        guardarName.addEventListener('click', (e) => {
            e.preventDefault();
            location = "profile.php";
        })
    });
}

if (editEmail !== null) {
    editEmail.addEventListener('click', (e) => {
        e.preventDefault();
        const guardarEmail = document.getElementById("guardar-email");
        const enable = document.getElementById("profile-email");

        guardarEmail.classList.toggle("show-btn");
        if (enable.disabled) {
            // If disabled, do this 
            enable.disabled = false;
        } else {
            // Enter code here
            enable.disabled = true;
        }

        guardarEmail.addEventListener('click', (e) => {
            e.preventDefault();
            location = "profile.php";
            })
    });
}

if (editPhone !== null) {
    editPhone.addEventListener('click', (e) => {
        e.preventDefault();
        const guardarPhone = document.getElementById("guardar-phone");
        const enable = document.getElementById("profile-phone");

        guardarPhone.classList.toggle("show-btn");
        if (enable.disabled) {
            // If disabled, do this 
            enable.disabled = false;
        } else {
            // Enter code here
            enable.disabled = true;
        }
        
        guardarPhone.addEventListener('click', (e) => {
            e.preventDefault();
            location = "profile.php";
            })
    });
}

if (editPassword !== null) {
    editPassword.addEventListener('click', (e) => {
        e.preventDefault();   
    });
}

if (crearMascota !== null) {
    crearMascota.addEventListener('click', (e) => {
        e.preventDefault(); 
    });
}
/*
*/

//mensaje de contraseña incorrecta
//cuando inicie sesion con facebook o google, los datos de estos providers deben ponerse en los datos de perfil de la persona