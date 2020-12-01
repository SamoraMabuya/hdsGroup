const select = document.querySelectorAll('select');

const error = document.querySelectorAll('.error')


maxNum();
foil();

document.querySelector('#sendbutton').addEventListener('click', function(e) {
    nameValidate(e);
    emailValidate(e);
    numberValidate(e);
    workNumber(e);
    homeNumber(e);
    checkBranch(e);

});


document.querySelector('#form').addEventListener('submit', function(e) {
    nameValidate(e);
    emailValidate(e);
    numberValidate(e);
    workNumber(e);
    homeNumber(e);
    checkBranch(e);



});

const form = document.queryselector('#form')

function nameValidate(e) {
    const name = document.querySelector('.name');
    if (name.value.length == 0) {
        error[0].classList.add('show');
        error[0].classList.remove('hide');
        error[0].textContent = "Field is empty";
        console.log('go');
        e.preventDefault();
    } else {
        error[0].classList.add('hide');
        error[0].classList.remove('show');
        console.log('do');



    }
}

function emailValidate(e) {
    let emailReg =
        /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    const email = document.querySelector('.email');

    if (email.value.length == 0) {
        error[1].classList.add('show');
        error[1].classList.remove('hide');
        error[1].textContent = "Field is empty";
        e.preventDefault();
    } else if (!email.value.match(emailReg)) {
        error[1].classList.add('show');
        error[1].classList.remove('hide');
        error[1].textContent = "Email is not valid";
        e.preventDefault();
    } else if (email.value.match(emailReg)) {
        error[1].classList.add('hide');
        error[1].classList.remove('show');


    }
}

function numberValidate(e) {
    var phone = /^[0-9]{10}$/;
    const cellphone = document.querySelector('.cellphone');


    if (cellphone.value.match(phone)) {
        error[2].classList.add('hide');
        error[2].classList.remove('show');
        return true;
    } else if (cellphone.value.length == 0) {
        error[2].classList.add('show');
        error[2].classList.remove('hide');
        error[2].textContent = 'Field is empty';
        e.preventDefault();
    } else if (!cellphone.value.match(phone)) {
        error[2].classList.add('show');
        error[2].classList.remove('hide');
        error[2].textContent = 'Enter a 10 digit number. No spaces or special characters allowed.';
        e.preventDefault();


    }

}


function workNumber(e) {
    var phone = /^[0-9]{10}$/;
    const worknumber = document.querySelector('.work-number');

    if (worknumber.value.match(phone)) {
        error[3].classList.add('hide');
        error[3].classList.remove('show');
        return true;
    } else if (worknumber.value == 0) {
        error[3].classList.remove('show');
        error[3].classList.add('hide');
    } else if (!worknumber.value.match(phone)) {
        error[3].classList.add('show');
        error[3].classList.remove('hide');
        error[3].textContent = 'Enter a 10 digit number. No spaces or special characters allowed.';
        e.preventDefault();

    }
}

function homeNumber(e) {
    var phone = /^[0-9]{10}$/;
    const homenumber = document.querySelector('.home-number');

    if (homenumber.value.match(phone)) {
        error[4].classList.add('hide');
        error[4].classList.remove('show');
        return true;
    } else if (homenumber.value == 0) {
        error[4].classList.remove('show');
        error[4].classList.add('hide');
    } else if (!homenumber.value.match(phone)) {
        error[4].classList.add('show');
        error[4].classList.remove('hide');
        error[4].textContent = 'Enter a 10 digit number. No spaces or special characters allowed.';
        e.preventDefault();

    }
}

function checkBranch(e) {
    var branch = document.querySelector('#branch');
    if (branch.selectedIndex <= 0) {
        error[5].classList.add('show');
        error[5].classList.remove('hide');
        error[5].textContent = 'Please select a branch';
        e.preventDefault();
    } else {
        error[5].classList.add('hide');
        error[5].classList.remove('show');

    }
}

function hbs() {
    var hbs = document.querySelector('#hbs');
    hbs.addEventListener('change', function() {
        if (hbs.selectedIndex === 0) {
            document.querySelector('.preview').style.visibility = "hidden";
        } else if (hbs.selectedIndex === 1) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/485d4c3e/dms3rep/multi/white-linen-hds.JPG";
        } else if (hbs.selectedIndex === 2) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/2b1bcac4/import/clib/hdsgroup_co_za/dms3rep/multi/gold-acryl-900x900.jpg";
        } else if (hbs.selectedIndex === 3) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Copper.JPG";
        } else if (hbs.selectedIndex === 4) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Iceland+White.JPG";
        } else if (hbs.selectedIndex === 5) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Cream.jpg";
        } else if (hbs.selectedIndex === 6) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Desert+Sky.jpg";
        } else if (hbs.selectedIndex === 7) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Stone+Grey.JPG";
        } else if (hbs.selectedIndex === 8) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Black.JPG";
        } else if (hbs.selectedIndex === 9) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/485d4c3e/dms3rep/multi/CHARCOAL+GREY-3ab0d332.jpeg";
        } else if (hbs.selectedIndex === 10) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Red.jpg";
        } else if (hbs.selectedIndex === 11) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Larese.JPG";
        } else if (hbs.selectedIndex === 12) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Marula.jpg";
        } else if (hbs.selectedIndex === 13) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Lumber+Ash.JPG";
        } else if (hbs.selectedIndex === 14) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/485d4c3e/dms3rep/multi/Norwegian+Birch.JPG";
        } else if (hbs.selectedIndex === 15) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Washed+Oak.jpg";
        } else if (hbs.selectedIndex === 16) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/485d4c3e/dms3rep/multi/Dakota+Oak.JPG";
        } else if (hbs.selectedIndex === 17) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/import/clib/hdsgroup_co_za/dms3rep/multi/HDS_Cherry-Royale-300x300-300x300.jpg";
        } else if (hbs.selectedIndex === 18) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Walnut+High+Gloss.JPG";
        } else if (hbs.selectedIndex === 19) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Liberty%2BOak.JPG";
        } else if (hbs.selectedIndex === 20) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Hickory+Oak.JPG";
        } else if (hbs.selectedIndex === 21) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/White+Linen.JPG";
        } else if (hbs.selectedIndex === 22) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Beige+Linen.JPG";
        } else if (hbs.selectedIndex === 23) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Metallic+Cappucino.JPG";
        } else if (hbs.selectedIndex === 24) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Italian+Marble.JPG";
        } else if (hbs.selectedIndex === 25) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/White+Matte.JPG";
        } else if (hbs.selectedIndex === 26) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Anthracite+Matte.JPG";
        } else if (hbs.selectedIndex === 27) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Black+Matte.JPG";
        } else if (hbs.selectedIndex === 28) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Winery+Rouge.JPG";
        } else if (hbs.selectedIndex === 29) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Anthracite.JPG";
        } else if (hbs.selectedIndex === 30) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/White+Metallic.JPG";
        } else if (hbs.selectedIndex === 31) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/White.JPG";
        } else if (hbs.selectedIndex === 32) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Macchiato.JPG";
        } else if (hbs.selectedIndex === 33) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Titan.JPG";
        }
    });
}


function melamine() {
    // // Melamine-Boards
    var melamine = document.querySelector('.melamine');
    melamine.addEventListener('change', function() {
        if (melamine.selectedIndex === 0) {
            document.querySelector('.mbPreview').style.visibility = "hidden";
        } else if (melamine.selectedIndex === 1) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/485d4c3e/dms3rep/multi/Lancaster+Oak.JPG";
        } else if (melamine.selectedIndex === 2) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Carolina+Cedar.JPG";
        } else if (melamine.selectedIndex === 3) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Nappa+Oak.jpg";
        } else if (melamine.selectedIndex === 4) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Dakota+Oak.JPG";
        } else if (melamine.selectedIndex === 5) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Savannah.JPG";
        } else if (melamine.selectedIndex === 6) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Norwegian+Birch.JPG";
        } else if (melamine.selectedIndex === 7) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Balsa.jpg";
        } else if (melamine.selectedIndex === 8) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Espirito.JPG";
        } else if (melamine.selectedIndex === 9) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Washed+Oak+-+Melamine.JPG";
        } else if (melamine.selectedIndex === 10) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Glaston+Berry.JPG";
        } else if (melamine.selectedIndex === 11) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Jackson+Hickory.JPG";
        } else if (melamine.selectedIndex === 12) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Lumber+Ash+-+Melamine.JPG";
        } else if (melamine.selectedIndex === 13) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Larese+-+Melanine.JPG";
        } else if (melamine.selectedIndex === 14) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Alaskan+Cherry.JPG";
        } else if (melamine.selectedIndex === 15) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Marula.jpg";
        } else if (melamine.selectedIndex === 16) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Cherry+Royale+-+melanine.JPG";
        } else if (melamine.selectedIndex === 17) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Hickory+Oak.JPG";
        } else if (melamine.selectedIndex === 18) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Royal-Mahogany.jpg";
        } else if (melamine.selectedIndex === 19) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Liberty+Oak-3036d7ee.JPG";
        } else if (melamine.selectedIndex === 20) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Black.JPG";
        } else if (melamine.selectedIndex === 21) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/485d4c3e/dms3rep/multi/CHARCOAL+GREY-3ab0d332.jpeg";
        } else if (melamine.selectedIndex === 22) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Stone+Grey.JPG";
        } else if (melamine.selectedIndex === 23) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Cream.jpg";
        } else if (melamine.selectedIndex === 24) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Iceland+White.JPG";
        } else if (melamine.selectedIndex === 25) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Desert+Sky.jpg";
        } else if (melamine.selectedIndex === 26) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Natural+Stone.JPG";
        } else if (melamine.selectedIndex === 27) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/White+Linen.JPG";
        } else if (melamine.selectedIndex === 28) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Beige+Linen.JPG";
        }
    })
}


// Veneered-Chipboard

function VC() {
    var VC = document.querySelector('#VC');
    VC.addEventListener('change', function() {
        if (VC.selectedIndex === 0) {
            document.querySelector('.VCPreview').style.visibility = "hidden";
        } else if (VC.selectedIndex === 1) {
            document.querySelector('.VCPreview').style.visibility = "visible";
            document.querySelector('.VCPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/american_walnut__1.jpg";
        } else if (VC.selectedIndex === 2) {
            document.querySelector('.VCPreview').style.visibility = "visible";
            document.querySelector('.VCPreview').src =
                "https://irp-cdn.multiscreensite.com/485d4c3e/dms3rep/multi/Cherry.JPG";
        } else if (VC.selectedIndex === 3) {
            document.querySelector('.VCPreview').style.visibility = "visible";
            document.querySelector('.VCPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Crown+Mahogany.JPG";
        } else if (VC.selectedIndex === 4) {
            document.querySelector('.VCPreview').style.visibility = "visible";
            document.querySelector('.VCPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Kiaat.JPG";
        } else if (VC.selectedIndex === 5) {
            document.querySelector('.VCPreview').style.visibility = "visible";
            document.querySelector('.VCPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Maple.JPG";
        } else if (VC.selectedIndex === 6) {
            document.querySelector('.VCPreview').style.visibility = "visible";
            document.querySelector('.VCPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Okoume.JPG";
        } else if (VC.selectedIndex === 7) {
            document.querySelector('.VCPreview').style.visibility = "visible";
            document.querySelector('.VCPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Pine.JPG";
        } else if (VC.selectedIndex === 8) {
            document.querySelector('.VCPreview').style.visibility = "visible";
            document.querySelector('.VCPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Pink+beech.JPG";
        } else if (VC.selectedIndex === 9) {
            document.querySelector('.VCPreview').style.visibility = "visible";
            document.querySelector('.VCPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Red+Oak.JPG";
        } else if (VC.selectedIndex === 10) {
            document.querySelector('.VCPreview').style.visibility = "visible";
            document.querySelector('.VCPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Rosewood.JPG";
        } else if (VC.selectedIndex === 11) {
            document.querySelector('.VCPreview').style.visibility = "visible";
            document.querySelector('.VCPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Sapele.JPG";
        } else if (VC.selectedIndex === 12) {
            document.querySelector('.VCPreview').style.visibility = "visible";
            document.querySelector('.VCPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/White+Beech.JPG";
        } else if (VC.selectedIndex === 13) {
            document.querySelector('.VCPreview').style.visibility = "visible";
            document.querySelector('.VCPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/White+Oak.JPG";
        }
    })

}

// Foil Boards

function foil() {
    var foil = document.querySelector('#foil');
    foil.addEventListener('change', function() {
        if (foil.selectedIndex === 0) {
            console.log('working');
            document.querySelector('.foilPreview').style.visibility = "hidden";
        } else if (foil.selectedIndex === 1) {
            document.querySelector('.foilPreview').style.visibility = "visible";
            document.querySelector('.foilPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Italian+Walnut.JPG";
        } else if (foil.selectedIndex === 2) {
            console.log('working');
            document.querySelector('.foilPreview').style.visibility = "visible";
            document.querySelector('.foilPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Black+Oak.JPG";
        } else if (foil.selectedIndex === 3) {
            console.log('working');
            document.querySelector('.foilPreview').style.visibility = "visible";
            document.querySelector('.foilPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Black-Cherry.jpg";
        } else if (foil.selectedIndex === 4) {
            console.log('working');
            document.querySelector('.foilPreview').style.visibility = "visible";
            document.querySelector('.foilPreview').src =
                "https://irp-cdn.multiscreensite.com/485d4c3e/dms3rep/multi/Cosmos+Pecan.JPG";
        } else if (foil.selectedIndex === 5) {
            console.log('working');
            document.querySelector('.foilPreview').style.visibility = "visible";
            document.querySelector('.foilPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Lake+City+Oak.JPG";
        } else if (foil.selectedIndex === 6) {
            document.querySelector('.foilPreview').style.visibility = "visible";
            document.querySelector('.foilPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Kiaat+-+Foil+Boards.JPG";
        } else if (foil.selectedIndex === 7) {
            document.querySelector('.foilPreview').style.visibility = "visible";
            document.querySelector('.foilPreview').src =
                "https://irp-cdn.multiscreensite.com/485d4c3e/dms3rep/multi/Maluti+Walnut.JPG";
        } else if (foil.selectedIndex === 8) {
            document.querySelector('.foilPreview').style.visibility = "visible";
            document.querySelector('.foilPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Pecan+ironwood.JPG";
        } else if (foil.selectedIndex === 9) {
            document.querySelector('.foilPreview').style.visibility = "visible";
            document.querySelector('.foilPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Redwood.JPG";
        } else if (foil.selectedIndex === 10) {
            document.querySelector('.foilPreview').style.visibility = "visible";
            document.querySelector('.foilPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/July+Beech.JPG";
        }
    })
}



function MRB() {
    // Moisture-Resitant-Boards
    var MRB = document.querySelector('#MRB');
    MRB.addEventListener('change', function() {
        if (MRB.selectedIndex === 0) {
            document.querySelector('.MRBPreview').style.visibility = "hidden";
        } else if (MRB.selectedIndex === 1) {
            document.querySelector('.MRBPreview').style.visibility = "visible";
            document.querySelector('.MRBPreview').src =
                "https://irp-cdn.multiscreensite.com/485d4c3e/dms3rep/multi/HMR.JPG";
        } else if (MRB.selectedIndex === 2) {
            document.querySelector('.MRBPreview').style.visibility = "visible";
            document.querySelector('.MRBPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/HMR+-+MDF.JPG";
        }
    })
}

function LaminateSheets() {
    var LS = document.querySelector('#Laminate-Sheets');
    LS.addEventListener('change', function() {
        if (LS.selectedIndex === 0) {
            document.querySelector('.LSPreview').style.visibility = "hidden";
        } else if (LS.selectedIndex === 1) {
            document.querySelector('.LSPreview').style.visibility = "visible";
            document.querySelector('.LSPreview').src =
                "https://irp-cdn.multiscreensite.com/485d4c3e/dms3rep/multi/Brown+Coffee.JPG";
        } else if (LS.selectedIndex === 2) {
            document.querySelector('.LSPreview').style.visibility = "visible";
            document.querySelector('.LSPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Venetian+Gold.JPG";
        } else if (LS.selectedIndex === 3) {
            document.querySelector('.LSPreview').style.visibility = "visible";
            document.querySelector('.LSPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Bianco+Frost.JPG";
        } else if (LS.selectedIndex === 4) {
            document.querySelector('.LSPreview').style.visibility = "visible";
            document.querySelector('.LSPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Almond+Grey.JPG";
        } else if (LS.selectedIndex === 5) {
            document.querySelector('.LSPreview').style.visibility = "visible";
            document.querySelector('.LSPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Roman+Grey.JPG";
        } else if (LS.selectedIndex === 6) {
            document.querySelector('.LSPreview').style.visibility = "visible";
            document.querySelector('.LSPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Copenhagen.JPG";
        } else if (LS.selectedIndex === 7) {
            document.querySelector('.LSPreview').style.visibility = "visible";
            document.querySelector('.LSPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Black+Forest.JPG";
        } else if (LS.selectedIndex === 8) {
            document.querySelector('.LSPreview').style.visibility = "visible";
            document.querySelector('.LSPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Titanium.JPG";
        } else if (LS.selectedIndex === 9) {
            document.querySelector('.LSPreview').style.visibility = "visible";
            document.querySelector('.LSPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Brushed+Aluminium.JPG";
        } else if (LS.selectedIndex === 10) {
            document.querySelector('.LSPreview').style.visibility = "visible";
            document.querySelector('.LSPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Rose+Gold.JPG";
        }
    })
}



const input = document.querySelectorAll('#input');
for (var i = 0; i < input.length; i++) {
    input[i].addEventListener("keypress", function(e) {
        if (e.which == 13) {
            e.preventDefault();
            var next = document.querySelectorAll('[tabIndex="' + (this.tabIndex + 1) + '"]');
            if (next.length === 0) {
                next = document.querySelectorAll('[tabIndex="1"]');
            }
            next[0].focus();
        }
    })
}

function maxNum() {
    const valueLength = document.querySelectorAll('.inputLength');
    const valueWidth = document.querySelectorAll('.inputWidth');

    for (var i = 0; i < valueLength.length; i++) {
        valueLength[i].addEventListener('input', function(e) {
            if (this.value > 2750) {
                alert('Length cannot be more than 2750');
                this.value = 2750;
            }
        })
    }
    for (var i = 0; i < valueWidth.length; i++) {
        valueWidth[i].addEventListener('input', function(e) {
            if (this.value > 1830) {
                alert('Width cannot be more than 1830');
                this.value = 1830;
            }
        })

    }
}