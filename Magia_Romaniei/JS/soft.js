// functia de 'shrink' pentru header/navbar
const headerShrink = () => {
    const header = document.querySelector('#navbar');
    const ul = document.querySelector('#navUl');
    if (window.scrollY === 0) {
        header.classList.remove('header-shrink');
        ul.classList.remove('ul-shrink');
    } else {
        header.classList.add('header-shrink');
        ul.classList.add('ul-shrink');
    }
};
document.addEventListener('scroll', headerShrink);

// functia si butonul de "toggle"
    const toggle = document.getElementById('toggle');
    const toggP = document.getElementById('toggP');
    const navList = document.querySelector('#navMenu');
    
    toggle.addEventListener('click', () => {
        toggle.classList.toggle('active')
        toggP.classList.toggle('toggle-p')
        navList.classList.toggle('active')
    })
            
    // click in afara header pentru dezactivare
    document.addEventListener('click', (e) => {
        if (e.target.id !== 'toggle' && e.target.id !== 'navMenu' && e.target.id !== 'navUl') {
            toggP.classList.add('toggle-p')
            toggle.classList.remove('active')
            navList.classList.remove('active')
        }
    }) 


// citeste mai mult - zona Modale -
const butReadMore = document.querySelectorAll('.reg-cit-link');
const modale = document.querySelectorAll('.portfolio-modal');
const butModal = document.querySelectorAll('.but-modal');

for (let [idx, but] of butReadMore.entries()) {
    but.addEventListener("click", (e) => {
        if (idx + 1 === +e.target.id.slice(-1)) {
            document.querySelector(`.reg-modale-text-${idx+1}`).classList.remove(`reg-modale-text-${idx+1}`)
            but.classList.add(`reg-modale-text-${idx+1}`)
        }
    })
}

for (let [idx, closeBut] of butModal.entries()) {
    closeBut.addEventListener("click", () => {
        document.querySelector(`.reg-modale-text2-${idx+1}`).classList.add(`reg-modale-text-${idx+1}`)
        for (let but of butReadMore) {
            but.classList.remove(`reg-modale-text-${idx+1}`)
        }
    })
}



// verificare SignUp form
const valName = () => {
    const nume = document.querySelector('#nameSUp');
    if (nume.value.length < 7 || !nume.value) {
        nume.classList.add('is-invalid');
        document.querySelector('#nameSUpMsg').classList.add('invalid-red');
        nume.focus();
        return false;
    } else {
        nume.classList.remove('is-invalid');
        nume.classList.add('is-valid');
        document.querySelector('#nameSUpMsg').classList.remove('invalid-red');
        return true;
    }
};

const valUserN = () => {
    const userN = document.querySelector('#userNameSUp');
    if (!userN.value.match(/\d/g) && userN.value.length < 3) {
        userN.classList.add('is-invalid');
        document.querySelector('#userNameSUpMsg').classList.add('invalid-red');
        userN.focus();
        return false;
    } else {
        userN.classList.remove('is-invalid');
        userN.classList.add('is-valid');
        document.querySelector('#userNameSUpMsg').classList.remove('invalid-red');
        return true;
    }
};

const valEmail = () => {
    const email = document.querySelector('#emailSUp');
    if (!email.value.endsWith('.ro') && !email.value.endsWith('.com')) {
        email.classList.add('is-invalid');
        document.querySelector('#emailSUpMsg').classList.add('invalid-red');
        email.focus();
        return false;
    } else {
        email.classList.remove('is-invalid');
        email.classList.add('is-valid');
        document.querySelector('#emailSUpMsg').classList.remove('invalid-red');
        return true;
    }
};

const valPass = () => {
    const pass1 = document.querySelector('#parolaSUp');
    const pass2 = document.querySelector('#parolaSUp2');
    if (pass1.value.length < 5 && !pass1.value.match(/\d [,.?!]/g)) {
        pass1.classList.add('is-invalid');
        document.querySelector('#parolaSUpMsg').classList.add('invalid-red');
        pass1.focus();
        return false;
    } else {
        pass1.classList.remove('is-invalid');
        pass1.classList.add('is-valid');
        document.querySelector('#parolaSUpMsg').classList.remove('invalid-red');
        if (pass1.value !== pass2.value) {
            pass2.classList.add('is-invalid');
            document.querySelector('#parolaSUpMsg2').classList.add('invalid-red');
            pass2.focus();
            return false;
        }
        pass2.classList.remove('is-invalid');
        pass2.classList.add('is-valid');
        document.querySelector('#parolaSUpMsg2').classList.remove('invalid-red');
        return true;
    }
};

const valForm = (e) => {
    if (valName() && valUserN() && valEmail() && valPass()) return true;
    else {
        e.preventDefault();
        return false;
    }
}

const inregForm = document.getElementById('signUpForm');
if (inregForm) {
        inregForm.addEventListener('submit', valForm);
};

