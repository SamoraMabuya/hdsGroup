<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="{{ secure_asset('css/style.css')}}" rel="stylesheet" />
    <script src="{{ secure_asset('js/javascript.js')}}" defer></script>

</head>

<body>
    <style>
        body {
    font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
    -ms-overflow-style: none;
    scrollbar-width: none;
}

body::-webkit-scrollbar {
    display: none;
}

.font-robo {
    font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
}

.row {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.row-space {
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -moz-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.col-2 {
    width: -webkit-calc((100% - 60px) / 2);
    width: -moz-calc((100% - 60px) / 2);
    width: calc((100% - 60px) / 2);
}

@media (max-width: 867px) {
    .col-2 {
        width: 100%;
    }
}

html {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

* {
    padding: 0;
    margin: 0;
}

*,
*:before,
*:after {
    -webkit-box-sizing: inherit;
    -moz-box-sizing: inherit;
    box-sizing: inherit;
}

li>ol,
li>ul {
    margin-bottom: 0;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}

fieldset {
    min-width: 0;
    /* [1] */
    border: 0;
}

button {
    outline: none;
    background: none;
    border: none;
}

#page-wrapper {
    min-height: 100vh;
}

#body {
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
    font-size: 12px;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-weight: 400;
}

h1 {
    font-size: 36px;
}

h2 {
    font-size: 30px;
}

h3 {
    font-size: 24px;
}

h4 {
    font-size: 18px;
}

h5 {
    font-size: 15px;
}

h6 {
    font-size: 13px;
}

.bg-blue {
    background: none;
}

.client-section {
    width: 100%;
    margin-bottom: 30px;
}

#client {
    font-size: 18px;
    color: rgb(65, 60, 60);
    text-decoration: underline;
    justify-content: center;
    display: flex;
}

.board-section {
    width: 100%;
    margin-bottom: 10px;
}

#Boards {
    font-size: 18px;
    color: rgb(65, 60, 60);
    text-decoration: underline;
    justify-content: center;
    display: flex;
}


/* ==========================================================================
#SPACING
========================================================================== */

#p-t-100 {
    padding-top: 100px;
}

#p-b-100 {
    padding-bottom: 100px;
}


/* ==========================================================================
#WRAPPER
========================================================================== */

#grain11 {
    width: 80px;
    text-align: center;
    justify-content: center;
    margin: 0 auto;
    height: 50px;
    border: none;
    outline: 0px;
    display: flex;
    background: transparent;
    padding-left: 20px;
}

#wrapper {
    max-width: 1080px;
    margin: 0 auto;
}

#wrap-table100 {
    width: 1000px;
    height: 250px;
    overflow-y: scroll;
    overflow-x: hidden;
    margin: 0px 40px 0px -90px;
}


/* ==========================================================================
#BUTTON
========================================================================== */

.btn {
    line-height: 40px;
    display: inline-block;
    padding: 0 25px;
    cursor: pointer;
    font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
    color: #fff;
    -webkit-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    transition: all 0.4s ease;
    font-size: 14px;
    font-weight: 700;
}

.btn--radius {
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

.btn--green {
    background: #57b846;
}

.btn--green:hover {
    background: #4dae3c;
}

=================================*/ td.active {
    background-color: #2c6ed5;
}

input[type="date"i] {
    padding: 14px;
}

.table-condensed td,
.table-condensed th {
    font-size: 14px;
    font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
    font-weight: 400;
}

#input {
    outline: none;
    margin: 0;
    border: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    width: 100%;
    font-size: 14px;
    font-family: inherit;
}

.input-group {
    position: relative;
    margin-bottom: 30px;
    border-bottom: 2px solid #ccc;
}

.input--style-1 {
    padding: 9px 0;
    color: #666;
    background: transparent;
    font-size: 16px;
    font-weight: 400;
    font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
}

.input--style-1::-webkit-input-placeholder {
    color: #555;
}

.input--style-1:-moz-placeholder {
    color: #555;
    opacity: 1;
}

.input--style-1::-moz-placeholder {
    color: #555;
    opacity: 1;
}

.input--style-1:-ms-input-placeholder {
    color: #555;
}

.input--style-1:-ms-input-placeholder {
    color: #555;
}

.select--no-search .select2-search {
    display: none !important;
}

.rs-select2 .select2-container {
    width: 100% !important;
    outline: none;
}

.rs-select2 .select2-container .select2-selection--single {
    outline: none;
    border: none;
    /* height: 34px; */
}

.rs-select2 .select2-container .select2-selection--single .select2-selection__rendered {
    /* line-height: 34px; */
    padding-left: 0;
    color: #555;
    overflow: scroll;
}

.rs-select2 .select2-container .select2-selection--single .select2-selection__rendered::-webkit-scrollbar {
    /* background: transparent; */
}

.rs-select2 .select2-container .select2-selection--single .select2-selection__arrow {
    /* height: 32px; */
    /* right: 5px; */
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -moz-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.rs-select2 .select2-container .select2-selection--single .select2-selection__arrow b {
    display: none;
}

.rs-select2 .select2-container .select2-selection--single .select2-selection__arrow:after {
    font-family: "Material-Design-Iconic-Font";
    content: '\f2f9';
    font-size: 18px;
    color: #ccc;
    -webkit-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.rs-select2 .select2-container .select2-container--open .select2-selection--single .select2-selection__arrow::after {
    -webkit-transform: rotate(-180deg);
    -moz-transform: rotate(-180deg);
    -ms-transform: rotate(-180deg);
    -o-transform: rotate(-180deg);
    transform: rotate(-180deg);
}

.select2-container--open .select2-dropdown--below {
    border: none;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
    box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
    border: 1px solid #e0e0e0;
    margin-top: 5px;
    overflow: hidden;
}

.title {
    margin-bottom: 37px;
}

.card {
    overflow-y: scroll;
    overflow-x: hidden;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    background: #fff;
    width: 980px;
}

.card::-webkit-scrollbar {
    width: 1em;
}

.card::-webkit-scrollbar-track {
    box-shadow: inset 0 0 6px rgba(145, 144, 144, 0.767);
}

.card::-webkit-scrollbar-thumb {
    background-color: rgba(153, 139, 139, 0.555);
    outline: 1px solid rgb(55, 113, 170);
}

.card-1 {
    -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
    box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
}

.card-1 .card-heading {
    padding-top: 210px;
}

.card-1 .card-body {
    padding: 0 90px;
    padding-top: 55px;
    padding-bottom: 65px;
}

@media (max-width: 767px) {
    .card-1 .card-body {
        padding: 0 40px;
        padding-top: 40px;
        padding-bottom: 0px;
    }
}

.wrap-input100 {
    position: relative;
    width: 500px;
    z-index: 1;
    margin-bottom: 40px;
    margin-top: 25px;
}

#input100 {
    display: block;
    width: 100%;
    font-size: 16px;
    line-height: 1.5;
    color: black;
    border-radius: 3px;
    outline: 0.1px solid;
    background: transparent;
    min-height: 150px;
    font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
    padding: 10px;
}

.sendbutton {
    width: 150px;
    height: 70px;
    float: left;
    border: none;
    border-radius: 5px;
    background-color: rgba(66, 68, 66, 0.993);
    margin: 20px 0px 30px 0px;
    font-size: 20px;
    font-weight: 600;
    color: white;
    text-shadow: 2px 2px 4px #000000;
}

.error {
    color: red;
    transform: translateY(-20px);
    visibility: hidden;
}

.show {
    visibility: visible;
}

.hide {
    visibility: hidden;
}

#preview {
    width: 30px;
    height: 30px;
    font-size: 20px;
    transform: translate(290px, -10px);
    position: absolute;
    z-index: 1;
}

#foilPreview {
    width: 30px;
    height: 30px;
    font-size: 20px;
    transform: translate(290px, -10px);
    position: absolute;
    z-index: 1;
}

#mbPreview {
    width: 30px;
    height: 30px;
    font-size: 20px;
    transform: translate(290px, -10px);
    position: absolute;
    z-index: 1;
}

#MRBPreview {
    width: 30px;
    height: 30px;
    font-size: 20px;
    transform: translate(290px, -10px);
    position: absolute;
    z-index: 1;
}

#VCPreview {
    width: 30px;
    height: 30px;
    font-size: 20px;
    transform: translate(290px, -10px);
    position: absolute;
    z-index: 1;
}

#LSPreview {
    width: 30px;
    height: 30px;
    font-size: 20px;
    transform: translate(290px, -10px);
    position: absolute;
    z-index: 1;
}

#measurements {
    font-size: 12px;
}

#masonite-title {
    margin-top: 30px;
}

.messageh1 {
    margin: 25px 0px 10px 0px;
    padding: 0px 0px 0px 5px;
    font-size: 16px;
    font-family: 'Roboto', sans-serif;
}

#Laminate-Sheets {
    width: 70%;
    text-overflow: ellipsis;
    size: 10;
    max-height: 30%;
    font-size: 16px;
    font-weight: 400;
    font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
    /* transform: translate(-10px, 10px); */
    background-color: transparent;
}

#MRB {
    width: 70%;
    text-overflow: ellipsis;
    size: 10;
    max-height: 30%;
    font-size: 16px;
    font-weight: 400;
    font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
    /* transform: translate(-10px, 10px); */
    background-color: transparent;
}

#foil {
    width: 70%;
    text-overflow: ellipsis;
    size: 10;
    max-height: 30%;
    font-size: 16px;
    font-weight: 400;
    font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
    /* transform: translate(-10px, 10px); */
    background-color: transparent;
}

#VC {
    width: 70%;
    text-overflow: ellipsis;
    size: 10;
    max-height: 30%;
    font-size: 16px;
    font-weight: 400;
    font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
    /* transform: translate(-10px, 10px); */
    background-color: transparent;
}

#melamine {
    width: 70%;
    text-overflow: ellipsis;
    size: 10;
    max-height: 30%;
    font-size: 16px;
    font-weight: 400;
    font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
    /* transform: translate(-10px, 10px); */
    background-color: transparent;
}

#hbs {
    width: 70%;
    text-overflow: ellipsis;
    size: 10;
    max-height: 30%;
    font-size: 16px;
    font-weight: 400;
    font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
    /* transform: translate(-10px, 10px); */
    background-color: transparent;
}

#branch {
    width: 100%;
    text-overflow: ellipsis;
    size: 10;
    max-height: 30%;
    font-size: 16px;
    font-weight: 400;
    font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
    background-color: transparent;
    /* transform: translate(-10px, 10px); */
}

#Edge-Type {
    width: 70%;
    text-overflow: ellipsis;
    size: 10;
    max-height: 30%;
    background-color: transparent;
    font-size: 16px;
    font-weight: 400;
    font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
    /* transform: translate(-10px, 10px); */
}

#board-type {
    width: 70%;
    text-overflow: ellipsis;
    size: 10;
    max-height: 30%;
    background-color: transparent;
    font-size: 16px;
    font-weight: 400;
    font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
    /* transform: translate(-10px, 10px); */
}

@font-face {
    font-family: OpenSans-Regular;
    src: url('../fonts/OpenSans/OpenSans-Regular.ttf');
}

p {
    margin: 0px;
}

ul,
li {
    margin: 0px;
    list-style-type: none;
}


/* ------------------------------------ */

input {
    display: block;
    outline: none;
    border: none !important;
}

textarea {
    display: block;
    outline: none;
}

.enter-board {
    width: 100%;
    height: 100%;
}

textarea:focus,
input:focus {
    border-color: transparent !important;
}

button {
    outline: none !important;
    border: none;
    background: transparent;
}

button:hover {
    cursor: pointer;
}

iframe {
    border: none !important;
}

.limiter {
    width: 100%;
    margin: 0 auto;
}

.container-table100 {
    width: 100%;
    min-height: 100vh;
    background: #c850c0;
    background: -webkit-linear-gradient(45deg, #4158d0, #c850c0);
    background: -o-linear-gradient(45deg, #4158d0, #c850c0);
    background: -moz-linear-gradient(45deg, #4158d0, #c850c0);
    background: linear-gradient(45deg, #4158d0, #c850c0);
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding: 33px 30px;
}

#table2 {
    margin: 50px 0px 0px 0px;
    width: 440px;
    height: 250px;
    overflow-y: scroll;
    overflow-x: hidden;
    justify-content: center;
}

table {
    border-spacing: 1;
    border-collapse: collapse;
    background: white;
    overflow: hidden;
    width: 40%;
    margin: 0 auto;
    margin: 0 auto;
}

table * {
    position: relative;
}

table thead tr {
    height: 40px;
    background: #000;
}

table tbody tr:last-child {
    border: 0;
}

table td.c,
table th.c {
    text-align: center;
}

table td.r,
table th.r {
    text-align: center;
}

.table100-head th {
    font-size: 14px;
    color: #fff;
    line-height: 1.2;
    font-weight: unset;
    text-align: center;
    padding: 5px;
    font-family: 'Roboto', sans-serif;
}

tbody tr:nth-child(even) {
    background-color: white;
}

#column {
    border: 1px solid black;
    font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
    background: none;
    font-size: 12px;
}

.column1 {
    width: 30px;
    text-align: center;
    padding-left: 10px;
    padding-right: 10px;
    justify-content: center;
    margin: 0 auto;
}

.column2 {
    padding-left: 5px;
    padding-right: 15px;
    text-align: center;
    justify-content: center;
    margin: 0 auto;
}

.column3 {
    width: 100px;
    text-align: center;
    justify-content: center;
    margin: 0 auto;
}

.column4 {
    width: 145px;
    text-align: center;
}

.column5 {
    width: 70px;
    text-align: center;
    justify-content: center;
    margin: 0 auto;
}

.column6 {
    width: 222px;
    text-align: center;
}

.column7 {
    width: 270px;
    text-align: center;
    justify-content: center;
    margin: 0 auto;
}

.column8 {
    width: 190px;
    text-align: center;
    justify-content: center;
    margin: 0 auto;
}

.column9 {
    width: 170px;
    text-align: center;
    justify-content: center;
    margin: 0 auto;
}

.column10 {
    width: 170px;
    text-align: center;
    justify-content: center;
    margin: 0 auto;
}

#column select {
    width: 90px;
    text-align: center;
    justify-content: center;
    margin: 0 auto;
    height: 50px;
    border: none;
    outline: 0px;
    padding-left: 10px;
    padding-right: 10px;
    display: flex;
    background: transparent;
}

#column .value0 {
    /*max-width: 20%;*/
    display: flex;
}

#input {
    height: 50px;
    width: 100px;
    text-align: center;
}

.row select {
    border: none;
    outline: 0px;
}

.example-row {
    height: 50px;
    width: 100px;
    text-align: center;
    font-size: 14px;
}

.table100-head #column {
    border: 1px solid #fff;
}

.available {
    font-size: 16px;
    font-weight: 400;
    color: rgb(65, 60, 60);
    margin: 0px 0px 30px 0px;
}

.row-example {
    margin: 20px 0px 20px 10px;
}

select option {
    size: 10;
    max-height: 30%;
}

@media (max-width: 576px) {
    .container-table100 {
        padding-left: 15px;
        padding-right: 15px;
    }
}
    </style>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo" id="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680" id="wrapper">
            <div class="card card-1" id="card card-1">
                <div class="card-body" id="card-body">
                    <h2 class=" title">Get In Touch</h2>
                    <div class="client-section">
                        <span class="client" id="client">Client</span>
                    </div>
                    <form name="form" class="form" id="form" method="POST" action="{{route('form.submit')}}">
                        @csrf
                        <div id="input-group" class="input-group">
                            <input id="input--style-1" class="input--style-1 name" placeholder="Company/Client Name"
                                name="name">
                        </div>
                        <p class="error">Field is required.</p>
                        <div class="row row-space">
                            <div class="col-2">
                                <div id="input-group" class="input-group">
                                    <input id="input--style-1" class="input--style-1 email" type="text"
                                        placeholder="Email Address" name="email">
                                </div>
                                <p class="error">Field is required.</p>
                            </div>

                            <div class="col-2">
                                <div id="input-group" class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <input id="input--style-1" class="input--style-1 cellphone" type="text"
                                            id="cellphone" placeholder="Cellphone" name="cellphone">
                                    </div>
                                </div>
                                <p class="error"></p>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div id="input-group" class="input-group">
                                    <input id="input--style-1" class="input--style-1 work-number" type="text"
                                        placeholder="Work Number (Optional)" id="work-number" name="work">
                                </div>
                                <p class="error"></p>
                            </div>
                            <div class="col-2">
                                <div id="input-group" class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <input id="input--style-1" class="input--style-1 home-number" type="text"
                                            id="home-number" placeholder="Home Number (Optional)" name="home">
                                    </div>
                                </div>
                                <p class="error"></p>

                            </div>
                        </div>

                        <div class="board-section" id="board-section">
                            <span class="Boards" id="Boards">Boards</span>
                        </div>


                        <div class="row row-space">
                            <div class="col-2">
                                <div id="input-group" class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select style="border: none; outline: 0px" id="branch" name="branch"
                                            class="branch">
                                            <option id="default" name="Select" value="Please Select">Select Branch
                                            </option>

                                            <optgroup label="Gauteng">
                                                <option name="Church Street" value="Church Street">Church Street
                                                </option>
                                                <option name="Hammanskraal" value="Hammanskraal">Hammanskraal</option>
                                                <option name="Krugersdorp" value="Krugersdorp">Krugersdorp</option>
                                                <option name="Kya Sands" value="Kya Sands">Kya Sands</option>
                                                <option name="Johannesburg" value="Johannesburg">Johannesburg</option>
                                                <option name="Silverton" value="Silverton">Silverton</option>
                                                <option id="Soweto" name="Soweto" value="Soweto">Soweto</option>
                                                <option name="Springs" value="Springs"> Springs</option>
                                                <option name="Sunderland" value="Sunderland">Sunderland</option>
                                                <option name="Tembisa" value="Tembisa">Tembisa</option>
                                                <option name="Vanderbijlpark" value="Vanderbijlpark">Vanderbijlpark
                                                </option>
                                                <option name="Waltloo" value="Waltloo">Waltloo</option>
                                                <option name="Wynberg" value="Wynberg">Wynberg</option>
                                            </optgroup>
                                            <optgroup label="Free State">
                                                <option value="Bloemfontein">Bloemfontein</option>
                                            </optgroup>
                                            <optgroup label="KZN">
                                                <option value="Empangeni">Empangeni</option>
                                                <option value="Ladysmith">Ladysmith</option>
                                                <option value="Newcastle">Newcastle</option>
                                                <option value="PMB">PMB</option>
                                                <option value="PMB Express">PMB Express</option>
                                                <option value="South Coast">South Coast</option>
                                            </optgroup>
                                            <optgroup label="Limpopo">
                                                <option value="Burgersfort">Burgersfort</option>
                                                <option value="Bela-Bela">Bela-Bela</option>
                                            </optgroup>
                                            <optgroup label="Mpumalanga">
                                                <option value="Ermelo">Ermelo</option>
                                                <option value="Nelspruit">Nelspruit</option>
                                                <option value="Trichardt">Trichardt</option>
                                                <option value="Witbank">Witbank</option>
                                            </optgroup>
                                            <optgroup label="North West">
                                                <option value="Brits">Brits</option>
                                                <option value="Klerksdorp">Klerksdorp</option>
                                                <option value="Mafikeng">Mafikeng</option>
                                                <option value="Marula">Marula</option>
                                            </optgroup>
                                            <optgroup label="Northern Cape">
                                                <option value="Kimberly">Kimberly</option>
                                            </optgroup>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>

                                </div>
                                <p class="error">Field is required.</p>

                            </div>
                        </div>

                        <p class="available" id="available">See available board color previews below.</p>

                        <div class=" row row-space ">
                            <div class=" col-2 ">
                                <div id="input-group" class="input-group">
                                    <div class=" rs-select2 js-select-simple select--no-search MBWrapper">
                                        <select style="border: none;" id="board-type" class="board-type"
                                            name="board-type">
                                            <option value=" Please Select ">Board Type
                                            </option>
                                            <option value="1">High Gloss Boards</option>
                                            <option value="2">Melamine Boards</option>
                                            <option value="3">Veneered Chipoard</option>
                                            <option value="4">Foil Boards</option>
                                            <option value="5">Moisture Resitant Boards</option>
                                            <option value="6">Laminate Sheets</option>

                                        </select>
                                        <div class=" select-dropdown "></div>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-2 ">
                                <div id="input-group" class="input-group">
                                    <div class=" rs-select2 js-select-simple select--no-search ">
                                        <select style="border: none;" name="Edge-Type" id="Edge-Type" class="Edge-Type">
                                            <optgroup label="Veneered Chipoard">
                                                <option value=" Please Select ">Edging Type
                                                </option>
                                                <option value="1">0.4*20mm Basalt Textured finish solid
                                                </option>
                                                <option value="2">1*20mm Basalt Textured finish solid
                                                </option>
                                                <option value="3">0.4*20mm Natural Concrete Textured finish wood
                                                </option>
                                                <option value="4">1*20mm Natural Concrete Textured finish wood
                                                </option>
                                                <option value="5">0.4*20mm Vermont Slate Textured finish solid
                                                </option>
                                                <option value="6">1*20mm Vermont Slate Textured finish solid
                                                </option>
                                                <option value="7">0.4*20mm Terra NovaTextured finish wood
                                                </option>
                                                <option value="8">1*20mm Terra NovaTextured finish wood
                                                </option>
                                                <option value="9">0.4*20mm Sahara Textured finish wood
                                                </option>
                                                <option value="10">1*20mm Sahara Textured finish wood
                                                </option>
                                                <option value="12">0.4*20mm Nordic Ice Textured finish wood
                                                </option>
                                                <option value="13">1*20mm Nordic Ice Textured finish wood
                                                </option>
                                                <option value="14">0.4*20mm Aged Stone Textured finish wood
                                                </option>
                                                <option value="15">1*20mm Aged Stone Textured finish wood
                                                </option>
                                                <option value="16">0.4*20mm Cascade Textured finish wood
                                                </option>
                                                <option value="17">1*20mm Cascade Textured finish wood
                                                </option>
                                                <option value="18">0.4*20mm Mozambique Wenge Textured finish wood
                                                </option>
                                                <option value="19">1*20mm Mozambique Wenge Textured finish wood
                                                </option>
                                                <option value="20">0.4*20mm FOLKSTONE GREY solid
                                                </option>
                                                <option value="21">1*20mm FOLKSTONE GREY solid
                                                </option>
                                                <option value="22">0.4*20mm LANZA OAK wood
                                                </option>
                                                <option value="23">1*20mm LANZA OAK wood
                                                </option>
                                                <option value="23">0.4*20mm LARACINA wood
                                                </option>
                                                <option>1*20mm LARACINA wood
                                                </option>
                                                <option>0.4*20mm WENGE wood
                                                </option>
                                                <option>1*20mm WENGE wood
                                                </option>
                                                <option>0.4*20mm CONGO solid
                                                </option>
                                                <option>1*20mm CONGO solid
                                                </option>
                                                <option>1*20mm CONGO solid high gloss
                                                </option>
                                                <option>0.4*20mm COIMBRA wood
                                                </option>
                                                <option>1*20mm COIMBRA wood
                                                </option>
                                                <option>1*20mm COIMBRA wood high gloss
                                                </option>
                                                <option>0.4*20mm CADBURY OAK wood
                                                </option>
                                                <option>1*20mm CADBURY OAK wood
                                                </option>
                                                <option>0.4*20mm NORWEGIAN BIRCH wood
                                                </option>
                                                <option>1*20mm NORWEGIAN BIRCH wood
                                                </option>
                                                <option>0.4*20mm STORM GREY solid
                                                </option>
                                                <option>1*20mm STORM GREY solid
                                                </option>
                                                <option>1*20mm STORM GREY solid high gloss
                                                </option>
                                                <option>0.4*20mm ROYAL MAHOG wood
                                                </option>
                                                <option>1*20mm ROYAL MAHOG wood
                                                </option>
                                                <option>0.4*20mm BALSA wood
                                                </option>
                                                <option>1*20mm BALSA wood
                                                </option>
                                                <option>0.4*20mm ESPERANZA OAK wood
                                                </option>
                                                <option>1*20mm ESPERANZA OAK wood
                                                </option>
                                                <option>0.4*20mm BURGANDY MOHOGANY wood
                                                </option>
                                                <option>1*20mm BURGANDY MOHOGANY wood
                                                </option>
                                                <option>0.4*20mm LUNAR ASH wood
                                                </option>
                                                <option>1*20mm LUNAR ASH wood
                                                </option>
                                                <option>1*20mm LUNAR ASH wood high gloss
                                                </option>
                                                <option>0.4*20mm GLACIER wood
                                                </option>
                                                <option>1*20mm GLACIER wood
                                                </option>
                                                <option>0.4*20mm CHERRY ROYAL wood
                                                </option>
                                                <option>1*20mm CHERRY ROYAL wood
                                                </option>
                                                <option>1*20mm CHERRY ROYAL wood high gloss
                                                </option>
                                                <option>0.4*20mm CREAM wood
                                                </option>
                                                <option>1*20mm CREAM wood
                                                </option>
                                                <option>1*20mm CREAM wood high gloss
                                                </option>
                                                <option>0.4*20mm WASHED SHALE wood
                                                </option>
                                                <option>1*20mm WASHED SHALE wood
                                                </option>
                                                <option>1*20mm WASHED SHALE wood high gloss
                                                </option>
                                                <option>0.4*20mm BLACK CHERRY wood
                                                </option>
                                                <option>1*20mm BLACK CHERRY wood
                                                </option>
                                                <option>0.4*20mm WERZASCA OAK wood
                                                </option>
                                                <option>1*20mm WERZASCA OAK wood
                                                </option>
                                                <option>0.4*20mm BLACK solid
                                                </option>
                                                <option>1*20mm BLACK solid
                                                </option>
                                                <option>1*20mm BLACK solid high gloss
                                                </option>
                                                <option>0.4*20mm SYMPHONY wood
                                                </option>
                                                <option>1*20mm SYMPHONY wood
                                                </option>
                                                <option>0.4*20mm WHITE solid
                                                </option>
                                                <option>1*20mm WHITE solid
                                                </option>
                                                <option>1*20mm WHITE solid high gloss
                                                </option>
                                                <option>0.4*20mm Aluminium solid
                                                </option>
                                                <option>1*20mm Aluminium solid
                                                </option>
                                                <option>0.4*20mm Cappuccino Linear solid
                                                </option>
                                                <option>1*20mm Cappuccino Linear solid
                                                </option>
                                                <option>0.4*20mm Espresso Linear solid
                                                </option>
                                                <option>1*20mm Espresso Linear solid
                                                </option>
                                                <option>0.4*20mm Monument Oak Wood
                                                </option>
                                                <option>1*20mm Monument Oak wood
                                                </option>
                                                <option>1*20mm Monument Oak wood high gloss
                                                </option>
                                                <option>0.4*20mm Natural Oak wood
                                                </option>
                                                <option>1*20mm Natural Oak wood
                                                </option>
                                                <option>0.4*20mm Shale Oak wood
                                                </option>
                                                <option>1*20mm Shale Oak wood
                                                </option>
                                                <option>1*20mm Vancover Maple wood
                                                </option>
                                                <option>1*20mm BEIGE LINNEN wood high gloss
                                                </option>
                                                <option>1*20mm WHITE LINNEN wood high gloss
                                                </option>
                                            </optgroup>

                                        </select>
                                        <div class=" select-dropdown "></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class=" row row-space ">
                            <div class="col-2">

                                <div id="input-group" class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search"
                                        id="rs-select2 js-select-simple select--no-search">
                                        <img class="preview" id="preview" src="" style="visibility: hidden;">
                                        <select style="border: none; outline: 0px" name="high-gloss-boards" id="hbs">
                                            <option value=" Please Select ">High Gloss Boards
                                            </option>
                                            <optgroup label=" Chrometree UB Boards ">
                                                <option value=" Beige Linen ">Beige Linen</option>
                                                <option value=" Black ">Black</option>
                                                <option value=" Charcoal Grey ">Charcoal Grey</option>
                                                <option value=" Cherry Royale ">Cherry Royale</option>
                                                <option value=" Cream ">Cream</option>
                                                <option value=" Dakota Oak ">Dakota Oak</option>
                                                <option value=" Desert Sky ">Desert Sky</option>
                                                <option value=" Hickory Oak ">Hickory Oak</option>
                                                <option value=" Iceland White ">Iceland White</option>
                                                <option value=" Italian Marble ">Italian Marble</option>
                                                <option value=" Larese ">Larese</option>
                                                <option value=" Liberty Oak ">Liberty Oak</option>
                                                <option value=" Lumber Ash ">Lumber Ash</option>
                                                <option value=" Marula ">Marula</option>
                                                <option value=" Metallic Cappuccino ">Metallic Cappuccino</option>
                                                <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                <option value=" Red ">Red</option>
                                                <option value=" Stone Grey ">Stone Grey</option>
                                                <option value=" Walnut High Gloss ">Walnut High Gloss</option>
                                                <option value=" Washed Oak ">Washed Oak</option>
                                                <option value=" White Linen ">White Linen</option>
                                            </optgroup>
                                            <optgroup label=" Clean-Touc Anti-Fingerprint ">
                                                <option value=" Anthracite Matte ">Anthracite Matte</option>
                                                <option value=" Black Matte ">Black Matte</option>
                                                <option value=" White Matte ">White Matte</option>

                                            </optgroup>
                                            <optgroup label=" Mirrorwood Acrylic Boards ">
                                                <option value="Copper">Copper</option>
                                                <option value="Gold Acrylic">Gold Acrylic</option>
                                                <option value="Mirror Board">Mirror Board</option>
                                            </optgroup>
                                            <optgroup label=" PolyGloss ">
                                                <option value=" Anthracite ">Anthracite</option>
                                                <option value=" Macchiato ">Macchiato</option>
                                                <option value=" White ">White</option>
                                                <option value=" White Metallic ">White Metallic</option>
                                                <option value=" Winery Rouge ">Winery Rouge</option>
                                                <option value=" Titan ">Titan</option>
                                            </optgroup>
                                        </select>
                                        <div class=" select-dropdown "></div>
                                    </div>
                                </div>
                            </div>
                            <div class=" row row-space ">

                            </div>

                            <div class=" col-2 ">
                                <div id="input-group" class="input-group">
                                    <div class=" rs-select2 js-select-simple select--no-search "
                                        id="rs-select2 js-select-simple select--no-search">
                                        <img class="mbPreview" id="mbPreview" src="" style="visibility: hidden;">
                                        <select style="border: none; outline: 0px" id="melamine" class="melamine"
                                            name="Melamine-Boards">
                                            <option value=" Melamine Boards ">Melamine Boards</option>
                                            <optgroup label="Plain Colours">
                                                <option value=" Black ">Black</option>
                                                <option value="Charcoal Grey">Charcoal Grey</option>
                                                <option value="Cream">Cream</option>
                                                <option value="Desert Sky">Desert Sky</option>
                                                <option value="Iceland White">Iceland White</option>
                                                <option value="Stone Grey">Stone Grey</option>
                                            </optgroup>
                                            <optgroup label="Stones & Patterns">
                                                <option value="Beige Linen">Beige Linen</option>
                                                <option value="Natural Stone">Natural Stone</option>
                                                <option value="White Linen">White Linen</option>
                                            </optgroup>
                                            <optgroup label="Woodgrains">
                                                <option value=" Alaskan Cherry ">Alaskan Cherry</option>
                                                <option value=" Balsa "> Balsa</option>
                                                <option value=" Carolina Cedar ">Carolina Cedar</option>
                                                <option value=" Cherry Royal ">Cherry Royal</option>
                                                <option value=" Dakota Oak ">Dakota Oak</option>
                                                <option value=" Espirito ">Espirito</option>
                                                <option value=" Hickory Oak ">Hickory Oak</option>
                                                <option value=" Glaston Berry ">Glaston Berry</option>
                                                <option value=" Jackson Hickory ">Jackson Hickory</option>
                                                <option value=" Lancaster Oak ">Lancaster Oak</option>
                                                <option value=" Larese ">Larese</option>
                                                <option value=" Liberty Oak ">Liberty Oak</option>
                                                <option value=" Lumber Ash ">Lumber Ash</option>
                                                <option value=" Marula ">Marula</option>
                                                <option value=" Nappa oak ">Nappa Oak</option>
                                                <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                <option value=" Royal Mahogany ">Royal Mahogany</option>
                                                <option value=" Savannah ">Savannah</option>
                                                <option value=" Washed Oak ">Washed Oak</option>
                                            </optgroup>
                                        </select>
                                        <div class=" select-dropdown "></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" row row-space ">
                            <div class=" col-2 ">
                                <div id="input-group" class="input-group">
                                    <div class=" rs-select2 js-select-simple select--no-search "
                                        id=" rs-select2 js-select-simple select--no-search ">
                                        <img class="VCPreview" id="VCPreview" src="" style="visibility: hidden;">
                                        <select style="border: none; outline: 0px" name="Veneered-Chipoard" id="VC">
                                            <option value=" Please Select ">Veneered Chipoard
                                            </option>
                                            <option value=" American Walnut ">American Walnut</option>
                                            <option value=" Cherry ">Cherry</option>
                                            <option value=" Crown Mahogany ">Crown Mahogany</option>
                                            <option value=" Kiaat ">Kiaat</option>
                                            <option value=" Maple ">Maple</option>
                                            <option value=" Okoume ">Okoume</option>
                                            <option value=" Pine ">Pine</option>
                                            <option value=" Pink beech ">Pink beech</option>
                                            <option value=" Red Oak ">Red Oak</option>
                                            <option value=" Rosewood ">Rosewood</option>
                                            <option value=" Sapele ">Sapele</option>
                                            <option value=" White Beech ">White Beech</option>
                                            <option value=" White Oak ">White Oak</option>
                                        </select>
                                        <div class=" select-dropdown "></div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-2 ">
                                <div id="input-group" class="input-group">
                                    <div class=" rs-select2 js-select-simple select--no-search "
                                        id="rs-select2 js-select-simple select--no-search">
                                        <img class="foilPreview" id="foilPreview" src="" style="visibility: hidden;">
                                        <select style="border: none; outline: 0px" id="foil" name="Foil-Boards">
                                            <option value=" Foil Boards ">Foil Boards</option>
                                            <option value=" Italian Walnut ">Italian Walnut</option>
                                            <option value=" Black Cherry ">Black Cherry</option>
                                            <option value=" Black Oak ">Black Oak</option>
                                            <option value=" Cosmos Pecan ">Cosmos Pecan</option>
                                            <option value=" July Beech ">July Beech</option>
                                            <option value=" Kiaat ">Kiaat</option>
                                            <option value=" Lake City Oak ">Lake City Oak</option>
                                            <option value=" Maluti Walnut ">Maluti Walnut</option>
                                            <option value=" Pecan / Ironwood ">Pecan / Ironwood</option>
                                            <option value=" Redwood ">Redwood</option>
                                        </select>
                                        <div class=" select-dropdown "></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" row row-space ">
                            <div class=" col-2 ">
                                <div id="input-group" class="input-group">
                                    <div class=" rs-select2 js-select-simple select--no-search MBWrapper"
                                        id=" rs-select2 js-select-simple select--no-search MBWrapper">
                                        <img class="MRBPreview" id="MRBPreview" src="" style="visibility: hidden;">
                                        <select style="border: none;" id="MRB" class="MRB"
                                            name="Moisture-Resitant-Boards">
                                            <option value=" Please Select ">Moisture Resitant Boards
                                            </option>
                                            <option value="High Moisture Resistant Melamine Chip Board (HMR)">High
                                                Moisture Resistant Melamine Chip Board (HMR)</option>
                                            <option value="High Moisture Resistant MDF (HMR-MDF)">High Moisture
                                                Resistant MDF (HMR-MDF)</option>
                                        </select>
                                        <div class=" select-dropdown "></div>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-2 ">
                                <div id="input-group" class="input-group">
                                    <div class=" rs-select2 js-select-simple select--no-search "
                                        id="rs-select2 js-select-simple select--no-search">
                                        <img class="LSPreview" id="LSPreview" src="" style="visibility: hidden;">
                                        <select style="border: none;" name=" Laminate-Sheets" id="Laminate-Sheets"
                                            class="Laminate-Sheets">
                                            <option value=" Please Select ">Laminate Sheets
                                            </option>
                                            <optgroup label="Metallic Finish">
                                                <option value="Brushed Aluminium">Brushed Aluminium</option>
                                                <option value="Rose Gold">Rose Gold</option>
                                            </optgroup>
                                            <optgroup label="Stone Finish">
                                                <option value="Almond Grey">Almond Grey</option>
                                                <option value="Bianco Frost">Bianco Frost</option>
                                                <option value="Black Forest">Black Forest</option>
                                                <option value="Brown Coffee">Brown Coffee</option>
                                                <option value="Copenhagen">Copenhagen</option>
                                                <option value="Roman Grey">Roman Grey</option>
                                                <option value="Titanium">Titanium</option>
                                                <option value="Venetian Gold">Venetian Gold</option>
                                            </optgroup>
                                        </select>
                                        <div class=" select-dropdown "></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Field Form -->
                        <center>
                            <h1 class="measurements" id="measurements"
                                style="font-size: 18px; text-decoration:underline">Chip
                            </h1>
                        </center>

                        <p class="row-example">Specify board types and measurements in the below table. See first row
                            example.
                        </p>

                        <br>
                        <div class="wrap-table100" id="wrap-table100">
                            <div class="table100">
                                <table id="tableOne" class="tableOne">
                                    <thead>
                                        <tr class="table100-head" id="table100-head">
                                            <th class="column1" id="column" name="columnHeading">Index</th>
                                            <th class="column2" id="column">Board Color</th>
                                            <th class="column3" id="column">Length<br>(mm)</th>
                                            <th class="column4" id="column">Width<br>(mm)</th>
                                            <th class="column5" id="column">Quantity</th>
                                            <th class="column11" id="column">Grain</th>
                                            <th class="column6" id="column">Edge<br>Length<br></th>
                                            <th class="column7" id="column">Edge<br>Width<br></th>
                                            <th class="column10" id="column">Potholes</th>
                                            <th class="column8" id="column">Edge Material<br>(mm)</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr class="example-row" id="example-row">
                                            <td class="column1" id="column" name="column1"><span
                                                    class="example">0</span></td>
                                            <td class="column2" id="column"><span class="example">Iceland White</span>
                                            </td>
                                            <td class="column3" id="column"><span class="example">1200</span></td>
                                            <td class="column4" id="column"><span class="example">1040</span></td>
                                            <td class="column5" id="column"><span class="example">1250</span></td>
                                            <td class="column5" id="column"><span class="example">No Grain</span></td>
                                            <td class="column6" id="column"><span class="example">2</span></td>
                                            <td class="column7" id="column"><span class="example">1</span></td>
                                            <td class="column10" id="column"><span class="example">4</span></td>
                                            <td class="column8" id="column"><span class="example">0.4</span></td>

                                        </tr>

                                        <tr id="RowOne">
                                            <td class="column1" id="column" name="index">1</td>
                                            <td class="column2" id="column">
                                                <select name="boardcolor1" id="select" class="boardcolors">
                                                    <option label="Select">Select</option>
                                                    <optgroup label="High Gloss Boards">
                                                        <option value="Mirror Board">Mirror Board</option>
                                                        <option value="Gold Acrylic">Gold Acrylic</option>
                                                        <option value="Copper">Copper</option>
                                                        <option value=" Iceland White ">Iceland White</option>
                                                        <option value=" Cream ">Cream</option>
                                                        <option value=" Desert Sky ">Desert Sky</option>
                                                        <option value=" Stone Grey ">Stone Grey</option>
                                                        <option value=" Black ">Black</option>
                                                        <option value=" Charcoal Grey ">Charcoal Grey</option>
                                                        <option value=" Red ">Red</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Cherry Royale ">Cherry Royale</option>
                                                        <option value=" Walnut High Gloss ">Walnut High Gloss
                                                        </option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" White Linen ">White Linen</option>
                                                        <option value=" Beige Linen ">Beige Linen</option>
                                                        <option value=" Metallic Cappuccino ">Metallic Cappuccino
                                                        </option>
                                                        <option value=" Italian Marble ">Italian Marble</option>
                                                        <option value=" White Matte ">White Matte</option>
                                                        <option value=" Anthracite Matte ">Anthracite Matte</option>
                                                        <option value=" Black Matte ">Black Matte</option>
                                                        <option value=" Winery Rouge ">Winery Rouge</option>
                                                        <option value=" Anthracite ">Anthracite</option>
                                                        <option value=" White Metallic ">White Metallic</option>
                                                        <option value=" White ">White</option>
                                                        <option value=" Macchiato ">Macchiato</option>
                                                        <option value=" Titan ">Titan</option>
                                                    </optgroup>

                                                    <optgroup label="Melamine Boards">
                                                        <option value=" Lancaster Oak ">Lancaster Oak</option>
                                                        <option value=" Carolina Cedar ">Carolina Cedar</option>
                                                        <option value=" Nappa oak ">Nappa Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Savannah ">Savannah</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Balsa "> Balsa</option>
                                                        <option value=" Espirito ">Espirito</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Glaston Berry ">Glaston Berry</option>
                                                        <option value=" Jackson Hickory ">Jackson Hickory</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Alaskan Cherry ">Alaskan Cherry</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Cherry Royal ">Cherry Royal</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" Royal Mahogany ">Royal Mahogany</option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Veneered Chipoard">
                                                        <option value=" American Walnut ">American Walnut</option>
                                                        <option value=" Cherry ">Cherry</option>
                                                        <option value=" Crown Mahogany ">Crown Mahogany</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maple ">Maple</option>
                                                        <option value=" Okoume ">Okoume</option>
                                                        <option value=" Pine ">Pine</option>
                                                        <option value=" Pink beech ">Pink beech</option>
                                                        <option value=" Red Oak ">Red Oak</option>
                                                        <option value=" Rosewood ">Rosewood</option>
                                                        <option value=" Sapele ">Sapele</option>
                                                        <option value=" White Beech ">White Beech</option>
                                                        <option value=" White Oak ">White Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Foil Boards">
                                                        <option value=" Foil Boards ">Foil Boards</option>
                                                        <option value=" Italian Walnut ">Italian Walnut</option>
                                                        <option value=" Black Oak ">Black Oak</option>
                                                        <option value=" Black Cherry ">Black Cherry</option>
                                                        <option value=" Cosmos Pecan ">Cosmos Pecan</option>
                                                        <option value=" Lake City Oak ">Lake City Oak</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maluti Walnut ">Maluti Walnut</option>
                                                        <option value=" Pecan / Ironwood ">Pecan / Ironwood</option>
                                                        <option value=" Redwood ">Redwood</option>
                                                        <option value=" July Beech ">July Beech</option>
                                                    </optgroup>

                                                    <optgroup label="Moisture Resitant Boards">
                                                        <option
                                                            value="High Moisture Resistant Melamine Chip Board (HMR)">
                                                            High Moisture Resistant Melamine Chip Board (HMR)
                                                        </option>
                                                        <option value="High Moisture Resistant MDF (HMR-MDF)">High
                                                            Moisture Resistant MDF (HMR-MDF)</option>
                                                    </optgroup>


                                                    <optgroup label="Laminate Sheets">
                                                        <option value="Brown Coffee">Brown Coffee</option>
                                                        <option value="Venetian Gold">Venetian Gold</option>
                                                        <option value="Bianco Frost">Bianco Frost</option>
                                                        <option value="Almond Grey">Almond Grey</option>
                                                        <option value="Roman Grey">Roman Grey</option>
                                                        <option value="Copenhagen">Copenhagen</option>
                                                        <option value="Black Forest">Black Forest</option>
                                                        <option value="Titanium">Titanium</option>
                                                        <option value="Brushed Aluminium">Brushed Aluminium</option>
                                                        <option value="Rose Gold">Rose Gold</option>
                                                    </optgroup>
                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" class="input inputLength" name="length1"
                                                    placeholder="0" maxlength="4" tabindex="1">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" class="inputWidth" name="width1" placeholder="0"
                                                    maxlength="4" tabindex="2">
                                            </td>
                                            <td class="column5" id="column">
                                                <input id="input" name="quantity1" placeholder="0" maxlength="4"
                                                    tabindex="3">
                                            </td>
                                            <td class="column11" id="column">
                                                <select name="Grain1" id="grain11">
                                                    <option value="Grain">X</option>
                                                    <option value="No Grain">No Grain</option>
                                                </select>
                                            </td>
                                            <td class="column6" id="column">
                                                <select name="edgelength1" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth1" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <th class="column10" id="column">
                                                <select name="potholes1" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </th>
                                            <th class="column8" id="column">
                                                <select name="edgematerial1" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="0.4">0.4</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                </select>
                                            </th>

                                        </tr>
                                        <tr>
                                            <td class="column1" id="column" name="index2">2</td>
                                            <td class="column2" id="column">
                                                <select name="boardcolor2" class="boardcolors">
                                                    <option label="Select">Select</option>
                                                    <optgroup label="High Gloss Boards">
                                                        <option value="Mirror Board">Mirror Board</option>
                                                        <option value="Gold Acrylic">Gold Acrylic</option>
                                                        <option value="Copper">Copper</option>
                                                        <option value=" Iceland White ">Iceland White</option>
                                                        <option value=" Cream ">Cream</option>
                                                        <option value=" Desert Sky ">Desert Sky</option>
                                                        <option value=" Stone Grey ">Stone Grey</option>
                                                        <option value=" Black ">Black</option>
                                                        <option value=" Charcoal Grey ">Charcoal Grey</option>
                                                        <option value=" Red ">Red</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Cherry Royale ">Cherry Royale</option>
                                                        <option value=" Walnut High Gloss ">Walnut High Gloss
                                                        </option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" White Linen ">White Linen</option>
                                                        <option value=" Beige Linen ">Beige Linen</option>
                                                        <option value=" Metallic Cappuccino ">Metallic Cappuccino
                                                        </option>
                                                        <option value=" Italian Marble ">Italian Marble</option>
                                                        <option value=" White Matte ">White Matte</option>
                                                        <option value=" Anthracite Matte ">Anthracite Matte</option>
                                                        <option value=" Black Matte ">Black Matte</option>
                                                        <option value=" Winery Rouge ">Winery Rouge</option>
                                                        <option value=" Anthracite ">Anthracite</option>
                                                        <option value=" White Metallic ">White Metallic</option>
                                                        <option value=" White ">White</option>
                                                        <option value=" Macchiato ">Macchiato</option>
                                                        <option value=" Titan ">Titan</option>
                                                    </optgroup>

                                                    <optgroup label="Melamine Boards">
                                                        <option value=" Lancaster Oak ">Lancaster Oak</option>
                                                        <option value=" Carolina Cedar ">Carolina Cedar</option>
                                                        <option value=" Nappa oak ">Nappa Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Savannah ">Savannah</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Balsa "> Balsa</option>
                                                        <option value=" Espirito ">Espirito</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Glaston Berry ">Glaston Berry</option>
                                                        <option value=" Jackson Hickory ">Jackson Hickory</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Alaskan Cherry ">Alaskan Cherry</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Cherry Royal ">Cherry Royal</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" Royal Mahogany ">Royal Mahogany</option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Veneered Chipoard">
                                                        <option value=" American Walnut ">American Walnut</option>
                                                        <option value=" Cherry ">Cherry</option>
                                                        <option value=" Crown Mahogany ">Crown Mahogany</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maple ">Maple</option>
                                                        <option value=" Okoume ">Okoume</option>
                                                        <option value=" Pine ">Pine</option>
                                                        <option value=" Pink beech ">Pink beech</option>
                                                        <option value=" Red Oak ">Red Oak</option>
                                                        <option value=" Rosewood ">Rosewood</option>
                                                        <option value=" Sapele ">Sapele</option>
                                                        <option value=" White Beech ">White Beech</option>
                                                        <option value=" White Oak ">White Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Foil Boards">
                                                        <option value=" Foil Boards ">Foil Boards</option>
                                                        <option value=" Italian Walnut ">Italian Walnut</option>
                                                        <option value=" Black Oak ">Black Oak</option>
                                                        <option value=" Black Cherry ">Black Cherry</option>
                                                        <option value=" Cosmos Pecan ">Cosmos Pecan</option>
                                                        <option value=" Lake City Oak ">Lake City Oak</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maluti Walnut ">Maluti Walnut</option>
                                                        <option value=" Pecan / Ironwood ">Pecan / Ironwood</option>
                                                        <option value=" Redwood ">Redwood</option>
                                                        <option value=" July Beech ">July Beech</option>
                                                    </optgroup>

                                                    <optgroup label="Moisture Resitant Boards">
                                                        <option
                                                            value="High Moisture Resistant Melamine Chip Board (HMR)">
                                                            High Moisture Resistant Melamine Chip Board (HMR)
                                                        </option>
                                                        <option value="High Moisture Resistant MDF (HMR-MDF)">High
                                                            Moisture Resistant MDF (HMR-MDF)</option>
                                                    </optgroup>


                                                    <optgroup label="Laminate Sheets">
                                                        <option value="Brown Coffee">Brown Coffee</option>
                                                        <option value="Venetian Gold">Venetian Gold</option>
                                                        <option value="Bianco Frost">Bianco Frost</option>
                                                        <option value="Almond Grey">Almond Grey</option>
                                                        <option value="Roman Grey">Roman Grey</option>
                                                        <option value="Copenhagen">Copenhagen</option>
                                                        <option value="Black Forest">Black Forest</option>
                                                        <option value="Titanium">Titanium</option>
                                                        <option value="Brushed Aluminium">Brushed Aluminium</option>
                                                        <option value="Rose Gold">Rose Gold</option>
                                                    </optgroup>
                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" class="inputLength" name="length2" placeholder="0"
                                                    maxlength="4" tabindex="4">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" class="inputWidth" name="width2" placeholder="0"
                                                    maxlength="4" tabindex="5">
                                            </td>

                                            <td class="column5" id="column"><input id="input" name="quantity2"
                                                    placeholder="0" maxlength="4" tabindex="6"></td>
                                            <td class="column11" id="column">
                                                <select name="Grain2">
                                                    <option value="Grain">X</option>
                                                    <option value="No Grain">No Grain</option>
                                                </select>
                                            </td>
                                            <td class="column6" id="column">
                                                <select name="edgelength2" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth2" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <th class="column10" id="column">
                                                <select name="potholes2" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </th>
                                            <th class="column8" id="column">
                                                <select name="edgematerial2" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="0.4">0.4</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                </select>
                                            </th>

                                        </tr>
                                        <tr>
                                            <td class="column1" id="column" name="column3">3</td>
                                            <td class="column2" id="column">
                                                <select name="boardcolor3" class="boardcolors">
                                                    <option label="Select">Select</option>
                                                    <optgroup label="High Gloss Boards">
                                                        <option value="Mirror Board">Mirror Board</option>
                                                        <option value="Gold Acrylic">Gold Acrylic</option>
                                                        <option value="Copper">Copper</option>
                                                        <option value=" Iceland White ">Iceland White</option>
                                                        <option value=" Cream ">Cream</option>
                                                        <option value=" Desert Sky ">Desert Sky</option>
                                                        <option value=" Stone Grey ">Stone Grey</option>
                                                        <option value=" Black ">Black</option>
                                                        <option value=" Charcoal Grey ">Charcoal Grey</option>
                                                        <option value=" Red ">Red</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Cherry Royale ">Cherry Royale</option>
                                                        <option value=" Walnut High Gloss ">Walnut High Gloss
                                                        </option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" White Linen ">White Linen</option>
                                                        <option value=" Beige Linen ">Beige Linen</option>
                                                        <option value=" Metallic Cappuccino ">Metallic Cappuccino
                                                        </option>
                                                        <option value=" Italian Marble ">Italian Marble</option>
                                                        <option value=" White Matte ">White Matte</option>
                                                        <option value=" Anthracite Matte ">Anthracite Matte</option>
                                                        <option value=" Black Matte ">Black Matte</option>
                                                        <option value=" Winery Rouge ">Winery Rouge</option>
                                                        <option value=" Anthracite ">Anthracite</option>
                                                        <option value=" White Metallic ">White Metallic</option>
                                                        <option value=" White ">White</option>
                                                        <option value=" Macchiato ">Macchiato</option>
                                                        <option value=" Titan ">Titan</option>
                                                    </optgroup>

                                                    <optgroup label="Melamine Boards">
                                                        <option value=" Lancaster Oak ">Lancaster Oak</option>
                                                        <option value=" Carolina Cedar ">Carolina Cedar</option>
                                                        <option value=" Nappa oak ">Nappa Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Savannah ">Savannah</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Balsa "> Balsa</option>
                                                        <option value=" Espirito ">Espirito</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Glaston Berry ">Glaston Berry</option>
                                                        <option value=" Jackson Hickory ">Jackson Hickory</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Alaskan Cherry ">Alaskan Cherry</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Cherry Royal ">Cherry Royal</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" Royal Mahogany ">Royal Mahogany</option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Veneered Chipoard">
                                                        <option value=" American Walnut ">American Walnut</option>
                                                        <option value=" Cherry ">Cherry</option>
                                                        <option value=" Crown Mahogany ">Crown Mahogany</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maple ">Maple</option>
                                                        <option value=" Okoume ">Okoume</option>
                                                        <option value=" Pine ">Pine</option>
                                                        <option value=" Pink beech ">Pink beech</option>
                                                        <option value=" Red Oak ">Red Oak</option>
                                                        <option value=" Rosewood ">Rosewood</option>
                                                        <option value=" Sapele ">Sapele</option>
                                                        <option value=" White Beech ">White Beech</option>
                                                        <option value=" White Oak ">White Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Foil Boards">
                                                        <option value=" Foil Boards ">Foil Boards</option>
                                                        <option value=" Italian Walnut ">Italian Walnut</option>
                                                        <option value=" Black Oak ">Black Oak</option>
                                                        <option value=" Black Cherry ">Black Cherry</option>
                                                        <option value=" Cosmos Pecan ">Cosmos Pecan</option>
                                                        <option value=" Lake City Oak ">Lake City Oak</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maluti Walnut ">Maluti Walnut</option>
                                                        <option value=" Pecan / Ironwood ">Pecan / Ironwood</option>
                                                        <option value=" Redwood ">Redwood</option>
                                                        <option value=" July Beech ">July Beech</option>
                                                    </optgroup>

                                                    <optgroup label="Moisture Resitant Boards">
                                                        <option
                                                            value="High Moisture Resistant Melamine Chip Board (HMR)">
                                                            High Moisture Resistant Melamine Chip Board (HMR)
                                                        </option>
                                                        <option value="High Moisture Resistant MDF (HMR-MDF)">High
                                                            Moisture Resistant MDF (HMR-MDF)</option>
                                                    </optgroup>


                                                    <optgroup label="Laminate Sheets">
                                                        <option value="Brown Coffee">Brown Coffee</option>
                                                        <option value="Venetian Gold">Venetian Gold</option>
                                                        <option value="Bianco Frost">Bianco Frost</option>
                                                        <option value="Almond Grey">Almond Grey</option>
                                                        <option value="Roman Grey">Roman Grey</option>
                                                        <option value="Copenhagen">Copenhagen</option>
                                                        <option value="Black Forest">Black Forest</option>
                                                        <option value="Titanium">Titanium</option>
                                                        <option value="Brushed Aluminium">Brushed Aluminium</option>
                                                        <option value="Rose Gold">Rose Gold</option>
                                                    </optgroup>


                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" class="inputLength" name="length3" placeholder="0"
                                                    maxlength="4" tabindex="7">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" class="inputWidth" name="width3" placeholder="0"
                                                    maxlength="4" tabindex="8">
                                            </td>

                                            <td class="column5" id="column"><input id="input" name="quantity3"
                                                    placeholder="0" maxlength="4" tabindex="9"></td>
                                            <td class="column11" id="column">
                                                <select name="Grain3">
                                                    <option value="Grain">X</option>
                                                    <option value="No Grain">No Grain</option>
                                                </select>
                                            </td>
                                            <td class="column6" id="column">
                                                <select name="edgelength3" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth3" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <th class="column10" id="column">
                                                <select name="potholes3" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </th>

                                            <th class="column8" id="column">
                                                <select name="edgematerial3" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="0.4">0.4</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                </select>
                                            </th>

                                        </tr>
                                        <tr>
                                            <td class="column1" id="column" name="column4">4</td>
                                            <td class="column2" id="column">
                                                <select name="boardcolor4" class="boardcolors">
                                                    <option label="Select">Select</option>
                                                    <optgroup label="High Gloss Boards">
                                                        <option value="Mirror Board">Mirror Board</option>
                                                        <option value="Gold Acrylic">Gold Acrylic</option>
                                                        <option value="Copper">Copper</option>
                                                        <option value=" Iceland White ">Iceland White</option>
                                                        <option value=" Cream ">Cream</option>
                                                        <option value=" Desert Sky ">Desert Sky</option>
                                                        <option value=" Stone Grey ">Stone Grey</option>
                                                        <option value=" Black ">Black</option>
                                                        <option value=" Charcoal Grey ">Charcoal Grey</option>
                                                        <option value=" Red ">Red</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Cherry Royale ">Cherry Royale</option>
                                                        <option value=" Walnut High Gloss ">Walnut High Gloss
                                                        </option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" White Linen ">White Linen</option>
                                                        <option value=" Beige Linen ">Beige Linen</option>
                                                        <option value=" Metallic Cappuccino ">Metallic Cappuccino
                                                        </option>
                                                        <option value=" Italian Marble ">Italian Marble</option>
                                                        <option value=" White Matte ">White Matte</option>
                                                        <option value=" Anthracite Matte ">Anthracite Matte</option>
                                                        <option value=" Black Matte ">Black Matte</option>
                                                        <option value=" Winery Rouge ">Winery Rouge</option>
                                                        <option value=" Anthracite ">Anthracite</option>
                                                        <option value=" White Metallic ">White Metallic</option>
                                                        <option value=" White ">White</option>
                                                        <option value=" Macchiato ">Macchiato</option>
                                                        <option value=" Titan ">Titan</option>
                                                    </optgroup>

                                                    <optgroup label="Melamine Boards">
                                                        <option value=" Lancaster Oak ">Lancaster Oak</option>
                                                        <option value=" Carolina Cedar ">Carolina Cedar</option>
                                                        <option value=" Nappa oak ">Nappa Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Savannah ">Savannah</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Balsa "> Balsa</option>
                                                        <option value=" Espirito ">Espirito</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Glaston Berry ">Glaston Berry</option>
                                                        <option value=" Jackson Hickory ">Jackson Hickory</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Alaskan Cherry ">Alaskan Cherry</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Cherry Royal ">Cherry Royal</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" Royal Mahogany ">Royal Mahogany</option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Veneered Chipoard">
                                                        <option value=" American Walnut ">American Walnut</option>
                                                        <option value=" Cherry ">Cherry</option>
                                                        <option value=" Crown Mahogany ">Crown Mahogany</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maple ">Maple</option>
                                                        <option value=" Okoume ">Okoume</option>
                                                        <option value=" Pine ">Pine</option>
                                                        <option value=" Pink beech ">Pink beech</option>
                                                        <option value=" Red Oak ">Red Oak</option>
                                                        <option value=" Rosewood ">Rosewood</option>
                                                        <option value=" Sapele ">Sapele</option>
                                                        <option value=" White Beech ">White Beech</option>
                                                        <option value=" White Oak ">White Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Foil Boards">
                                                        <option value=" Foil Boards ">Foil Boards</option>
                                                        <option value=" Italian Walnut ">Italian Walnut</option>
                                                        <option value=" Black Oak ">Black Oak</option>
                                                        <option value=" Black Cherry ">Black Cherry</option>
                                                        <option value=" Cosmos Pecan ">Cosmos Pecan</option>
                                                        <option value=" Lake City Oak ">Lake City Oak</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maluti Walnut ">Maluti Walnut</option>
                                                        <option value=" Pecan / Ironwood ">Pecan / Ironwood</option>
                                                        <option value=" Redwood ">Redwood</option>
                                                        <option value=" July Beech ">July Beech</option>
                                                    </optgroup>

                                                    <optgroup label="Moisture Resitant Boards">
                                                        <option
                                                            value="High Moisture Resistant Melamine Chip Board (HMR)">
                                                            High Moisture Resistant Melamine Chip Board (HMR)
                                                        </option>
                                                        <option value="High Moisture Resistant MDF (HMR-MDF)">High
                                                            Moisture Resistant MDF (HMR-MDF)</option>
                                                    </optgroup>


                                                    <optgroup label="Laminate Sheets">
                                                        <option value="Brown Coffee">Brown Coffee</option>
                                                        <option value="Venetian Gold">Venetian Gold</option>
                                                        <option value="Bianco Frost">Bianco Frost</option>
                                                        <option value="Almond Grey">Almond Grey</option>
                                                        <option value="Roman Grey">Roman Grey</option>
                                                        <option value="Copenhagen">Copenhagen</option>
                                                        <option value="Black Forest">Black Forest</option>
                                                        <option value="Titanium">Titanium</option>
                                                        <option value="Brushed Aluminium">Brushed Aluminium</option>
                                                        <option value="Rose Gold">Rose Gold</option>
                                                    </optgroup>


                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" class="inputLength" name="length4" placeholder="0"
                                                    maxlength="4" tabindex="10">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" class="inputWidth" name="width4" placeholder="0"
                                                    maxlength="4" tabindex="11">
                                            </td>

                                            <td class="column5" id="column"><input id="input" name="quantity4"
                                                    placeholder="0" maxlength="4" tabindex="12"></td>
                                            <td class="column11" id="column">
                                                <select name="Grain4">
                                                    <option value="Grain">X</option>
                                                    <option value="No Grain">No Grain</option>
                                                </select>
                                            </td>
                                            <td class="column6" id="column">
                                                <select name="edgelength4" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth4" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <th class="column10" id="column">
                                                <select name="potholes4" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </th>

                                            <th class="column8" id="column">
                                                <select name="edgematerial4" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="0.4">0.4</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                </select>
                                            </th>

                                        </tr>
                                        <tr>
                                            <td class="column1" id="column" name="column5">5</td>
                                            <td class="column2" id="column">
                                                <select name="boardcolor5" class="boardcolors">
                                                    <option label="Select">Select</option>
                                                    <optgroup label="High Gloss Boards">
                                                        <option value="Mirror Board">Mirror Board</option>
                                                        <option value="Gold Acrylic">Gold Acrylic</option>
                                                        <option value="Copper">Copper</option>
                                                        <option value=" Iceland White ">Iceland White</option>
                                                        <option value=" Cream ">Cream</option>
                                                        <option value=" Desert Sky ">Desert Sky</option>
                                                        <option value=" Stone Grey ">Stone Grey</option>
                                                        <option value=" Black ">Black</option>
                                                        <option value=" Charcoal Grey ">Charcoal Grey</option>
                                                        <option value=" Red ">Red</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Cherry Royale ">Cherry Royale</option>
                                                        <option value=" Walnut High Gloss ">Walnut High Gloss
                                                        </option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" White Linen ">White Linen</option>
                                                        <option value=" Beige Linen ">Beige Linen</option>
                                                        <option value=" Metallic Cappuccino ">Metallic Cappuccino
                                                        </option>
                                                        <option value=" Italian Marble ">Italian Marble</option>
                                                        <option value=" White Matte ">White Matte</option>
                                                        <option value=" Anthracite Matte ">Anthracite Matte</option>
                                                        <option value=" Black Matte ">Black Matte</option>
                                                        <option value=" Winery Rouge ">Winery Rouge</option>
                                                        <option value=" Anthracite ">Anthracite</option>
                                                        <option value=" White Metallic ">White Metallic</option>
                                                        <option value=" White ">White</option>
                                                        <option value=" Macchiato ">Macchiato</option>
                                                        <option value=" Titan ">Titan</option>
                                                    </optgroup>

                                                    <optgroup label="Melamine Boards">
                                                        <option value=" Lancaster Oak ">Lancaster Oak</option>
                                                        <option value=" Carolina Cedar ">Carolina Cedar</option>
                                                        <option value=" Nappa oak ">Nappa Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Savannah ">Savannah</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Balsa "> Balsa</option>
                                                        <option value=" Espirito ">Espirito</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Glaston Berry ">Glaston Berry</option>
                                                        <option value=" Jackson Hickory ">Jackson Hickory</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Alaskan Cherry ">Alaskan Cherry</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Cherry Royal ">Cherry Royal</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" Royal Mahogany ">Royal Mahogany</option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Veneered Chipoard">
                                                        <option value=" American Walnut ">American Walnut</option>
                                                        <option value=" Cherry ">Cherry</option>
                                                        <option value=" Crown Mahogany ">Crown Mahogany</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maple ">Maple</option>
                                                        <option value=" Okoume ">Okoume</option>
                                                        <option value=" Pine ">Pine</option>
                                                        <option value=" Pink beech ">Pink beech</option>
                                                        <option value=" Red Oak ">Red Oak</option>
                                                        <option value=" Rosewood ">Rosewood</option>
                                                        <option value=" Sapele ">Sapele</option>
                                                        <option value=" White Beech ">White Beech</option>
                                                        <option value=" White Oak ">White Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Foil Boards">
                                                        <option value=" Foil Boards ">Foil Boards</option>
                                                        <option value=" Italian Walnut ">Italian Walnut</option>
                                                        <option value=" Black Oak ">Black Oak</option>
                                                        <option value=" Black Cherry ">Black Cherry</option>
                                                        <option value=" Cosmos Pecan ">Cosmos Pecan</option>
                                                        <option value=" Lake City Oak ">Lake City Oak</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maluti Walnut ">Maluti Walnut</option>
                                                        <option value=" Pecan / Ironwood ">Pecan / Ironwood</option>
                                                        <option value=" Redwood ">Redwood</option>
                                                        <option value=" July Beech ">July Beech</option>
                                                    </optgroup>

                                                    <optgroup label="Moisture Resitant Boards">
                                                        <option
                                                            value="High Moisture Resistant Melamine Chip Board (HMR)">
                                                            High Moisture Resistant Melamine Chip Board (HMR)
                                                        </option>
                                                        <option value="High Moisture Resistant MDF (HMR-MDF)">High
                                                            Moisture Resistant MDF (HMR-MDF)</option>
                                                    </optgroup>


                                                    <optgroup label="Laminate Sheets">
                                                        <option value="Brown Coffee">Brown Coffee</option>
                                                        <option value="Venetian Gold">Venetian Gold</option>
                                                        <option value="Bianco Frost">Bianco Frost</option>
                                                        <option value="Almond Grey">Almond Grey</option>
                                                        <option value="Roman Grey">Roman Grey</option>
                                                        <option value="Copenhagen">Copenhagen</option>
                                                        <option value="Black Forest">Black Forest</option>
                                                        <option value="Titanium">Titanium</option>
                                                        <option value="Brushed Aluminium">Brushed Aluminium</option>
                                                        <option value="Rose Gold">Rose Gold</option>
                                                    </optgroup>



                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" class="inputLength" name="length5" placeholder="0"
                                                    maxlength="4" tabindex="13">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" class="inputWidth" name="width5" placeholder="0"
                                                    maxlength="4" tabindex="14">
                                            </td>

                                            <td class="column5" id="column"><input id="input" name="quantity5"
                                                    placeholder="0" maxlength="4" tabindex="15"></td>
                                            <td class="column11" id="column">
                                                <select name="Grain5">
                                                    <option value="Grain">X</option>
                                                    <option value="No Grain">No Grain</option>
                                                </select>
                                            </td>
                                            <td class="column6" id="column">
                                                <select name="edgelength5" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth5" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <th class="column10" id="column">
                                                <select name="potholes5" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </th>

                                            <th class="column8" id="column">
                                                <select name="edgematerial5" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="0.4">0.4</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                </select>
                                            </th>

                                        </tr>
                                        <tr>
                                            <td class="column1" id="column">6</td>
                                            <td class="column2" id="column">
                                                <select name="boardcolor6" class="boardcolors">
                                                    <option label="Select">Select</option>
                                                    <optgroup label="High Gloss Boards">
                                                        <option value="Mirror Board">Mirror Board</option>
                                                        <option value="Gold Acrylic">Gold Acrylic</option>
                                                        <option value="Copper">Copper</option>
                                                        <option value=" Iceland White ">Iceland White</option>
                                                        <option value=" Cream ">Cream</option>
                                                        <option value=" Desert Sky ">Desert Sky</option>
                                                        <option value=" Stone Grey ">Stone Grey</option>
                                                        <option value=" Black ">Black</option>
                                                        <option value=" Charcoal Grey ">Charcoal Grey</option>
                                                        <option value=" Red ">Red</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Cherry Royale ">Cherry Royale</option>
                                                        <option value=" Walnut High Gloss ">Walnut High Gloss
                                                        </option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" White Linen ">White Linen</option>
                                                        <option value=" Beige Linen ">Beige Linen</option>
                                                        <option value=" Metallic Cappuccino ">Metallic Cappuccino
                                                        </option>
                                                        <option value=" Italian Marble ">Italian Marble</option>
                                                        <option value=" White Matte ">White Matte</option>
                                                        <option value=" Anthracite Matte ">Anthracite Matte</option>
                                                        <option value=" Black Matte ">Black Matte</option>
                                                        <option value=" Winery Rouge ">Winery Rouge</option>
                                                        <option value=" Anthracite ">Anthracite</option>
                                                        <option value=" White Metallic ">White Metallic</option>
                                                        <option value=" White ">White</option>
                                                        <option value=" Macchiato ">Macchiato</option>
                                                        <option value=" Titan ">Titan</option>
                                                    </optgroup>

                                                    <optgroup label="Melamine Boards">
                                                        <option value=" Lancaster Oak ">Lancaster Oak</option>
                                                        <option value=" Carolina Cedar ">Carolina Cedar</option>
                                                        <option value=" Nappa oak ">Nappa Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Savannah ">Savannah</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Balsa "> Balsa</option>
                                                        <option value=" Espirito ">Espirito</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Glaston Berry ">Glaston Berry</option>
                                                        <option value=" Jackson Hickory ">Jackson Hickory</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Alaskan Cherry ">Alaskan Cherry</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Cherry Royal ">Cherry Royal</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" Royal Mahogany ">Royal Mahogany</option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Veneered Chipoard">
                                                        <option value=" American Walnut ">American Walnut</option>
                                                        <option value=" Cherry ">Cherry</option>
                                                        <option value=" Crown Mahogany ">Crown Mahogany</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maple ">Maple</option>
                                                        <option value=" Okoume ">Okoume</option>
                                                        <option value=" Pine ">Pine</option>
                                                        <option value=" Pink beech ">Pink beech</option>
                                                        <option value=" Red Oak ">Red Oak</option>
                                                        <option value=" Rosewood ">Rosewood</option>
                                                        <option value=" Sapele ">Sapele</option>
                                                        <option value=" White Beech ">White Beech</option>
                                                        <option value=" White Oak ">White Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Foil Boards">
                                                        <option value=" Foil Boards ">Foil Boards</option>
                                                        <option value=" Italian Walnut ">Italian Walnut</option>
                                                        <option value=" Black Oak ">Black Oak</option>
                                                        <option value=" Black Cherry ">Black Cherry</option>
                                                        <option value=" Cosmos Pecan ">Cosmos Pecan</option>
                                                        <option value=" Lake City Oak ">Lake City Oak</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maluti Walnut ">Maluti Walnut</option>
                                                        <option value=" Pecan / Ironwood ">Pecan / Ironwood</option>
                                                        <option value=" Redwood ">Redwood</option>
                                                        <option value=" July Beech ">July Beech</option>
                                                    </optgroup>

                                                    <optgroup label="Moisture Resitant Boards">
                                                        <option
                                                            value="High Moisture Resistant Melamine Chip Board (HMR)">
                                                            High Moisture Resistant Melamine Chip Board (HMR)
                                                        </option>
                                                        <option value="High Moisture Resistant MDF (HMR-MDF)">High
                                                            Moisture Resistant MDF (HMR-MDF)</option>
                                                    </optgroup>


                                                    <optgroup label="Laminate Sheets">
                                                        <option value="Brown Coffee">Brown Coffee</option>
                                                        <option value="Venetian Gold">Venetian Gold</option>
                                                        <option value="Bianco Frost">Bianco Frost</option>
                                                        <option value="Almond Grey">Almond Grey</option>
                                                        <option value="Roman Grey">Roman Grey</option>
                                                        <option value="Copenhagen">Copenhagen</option>
                                                        <option value="Black Forest">Black Forest</option>
                                                        <option value="Titanium">Titanium</option>
                                                        <option value="Brushed Aluminium">Brushed Aluminium</option>
                                                        <option value="Rose Gold">Rose Gold</option>
                                                    </optgroup>



                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" class="inputLength" name="length6" placeholder="0"
                                                    maxlength="4" tabindex="16">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" class="inputWidth" name="width6" placeholder="0"
                                                    maxlength="4" tabindex="17">
                                            </td>

                                            <td class="column5" id="column"><input id="input" name="quantity6"
                                                    placeholder="0" maxlength="4" tabindex="18"></td>
                                            <td class="column11" id="column">
                                                <select name="Grain6">
                                                    <option value="Grain">X</option>
                                                    <option value="No Grain">No Grain</option>
                                                </select>
                                            </td>
                                            <td class="column6" id="column">
                                                <select name="edgelength6" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth6" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <th class="column10" id="column">
                                                <select name="potholes6" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </th>

                                            <th class="column8" id="column">
                                                <select name="edgematerial6" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="0.4">0.4</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                </select>
                                            </th>

                                        </tr>
                                        <tr>
                                            <td class="column1" id="column">7</td>
                                            <td class="column2" id="column">
                                                <select name="boardcolor7" class="boardcolors">
                                                    <option label="Select">Select</option>
                                                    <optgroup label="High Gloss Boards">
                                                        <option value="Mirror Board">Mirror Board</option>
                                                        <option value="Gold Acrylic">Gold Acrylic</option>
                                                        <option value="Copper">Copper</option>
                                                        <option value=" Iceland White ">Iceland White</option>
                                                        <option value=" Cream ">Cream</option>
                                                        <option value=" Desert Sky ">Desert Sky</option>
                                                        <option value=" Stone Grey ">Stone Grey</option>
                                                        <option value=" Black ">Black</option>
                                                        <option value=" Charcoal Grey ">Charcoal Grey</option>
                                                        <option value=" Red ">Red</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Cherry Royale ">Cherry Royale</option>
                                                        <option value=" Walnut High Gloss ">Walnut High Gloss
                                                        </option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" White Linen ">White Linen</option>
                                                        <option value=" Beige Linen ">Beige Linen</option>
                                                        <option value=" Metallic Cappuccino ">Metallic Cappuccino
                                                        </option>
                                                        <option value=" Italian Marble ">Italian Marble</option>
                                                        <option value=" White Matte ">White Matte</option>
                                                        <option value=" Anthracite Matte ">Anthracite Matte</option>
                                                        <option value=" Black Matte ">Black Matte</option>
                                                        <option value=" Winery Rouge ">Winery Rouge</option>
                                                        <option value=" Anthracite ">Anthracite</option>
                                                        <option value=" White Metallic ">White Metallic</option>
                                                        <option value=" White ">White</option>
                                                        <option value=" Macchiato ">Macchiato</option>
                                                        <option value=" Titan ">Titan</option>
                                                    </optgroup>

                                                    <optgroup label="Melamine Boards">
                                                        <option value=" Lancaster Oak ">Lancaster Oak</option>
                                                        <option value=" Carolina Cedar ">Carolina Cedar</option>
                                                        <option value=" Nappa oak ">Nappa Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Savannah ">Savannah</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Balsa "> Balsa</option>
                                                        <option value=" Espirito ">Espirito</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Glaston Berry ">Glaston Berry</option>
                                                        <option value=" Jackson Hickory ">Jackson Hickory</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Alaskan Cherry ">Alaskan Cherry</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Cherry Royal ">Cherry Royal</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" Royal Mahogany ">Royal Mahogany</option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Veneered Chipoard">
                                                        <option value=" American Walnut ">American Walnut</option>
                                                        <option value=" Cherry ">Cherry</option>
                                                        <option value=" Crown Mahogany ">Crown Mahogany</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maple ">Maple</option>
                                                        <option value=" Okoume ">Okoume</option>
                                                        <option value=" Pine ">Pine</option>
                                                        <option value=" Pink beech ">Pink beech</option>
                                                        <option value=" Red Oak ">Red Oak</option>
                                                        <option value=" Rosewood ">Rosewood</option>
                                                        <option value=" Sapele ">Sapele</option>
                                                        <option value=" White Beech ">White Beech</option>
                                                        <option value=" White Oak ">White Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Foil Boards">
                                                        <option value=" Foil Boards ">Foil Boards</option>
                                                        <option value=" Italian Walnut ">Italian Walnut</option>
                                                        <option value=" Black Oak ">Black Oak</option>
                                                        <option value=" Black Cherry ">Black Cherry</option>
                                                        <option value=" Cosmos Pecan ">Cosmos Pecan</option>
                                                        <option value=" Lake City Oak ">Lake City Oak</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maluti Walnut ">Maluti Walnut</option>
                                                        <option value=" Pecan / Ironwood ">Pecan / Ironwood</option>
                                                        <option value=" Redwood ">Redwood</option>
                                                        <option value=" July Beech ">July Beech</option>
                                                    </optgroup>

                                                    <optgroup label="Moisture Resitant Boards">
                                                        <option
                                                            value="High Moisture Resistant Melamine Chip Board (HMR)">
                                                            High Moisture Resistant Melamine Chip Board (HMR)
                                                        </option>
                                                        <option value="High Moisture Resistant MDF (HMR-MDF)">High
                                                            Moisture Resistant MDF (HMR-MDF)</option>
                                                    </optgroup>


                                                    <optgroup label="Laminate Sheets">
                                                        <option value="Brown Coffee">Brown Coffee</option>
                                                        <option value="Venetian Gold">Venetian Gold</option>
                                                        <option value="Bianco Frost">Bianco Frost</option>
                                                        <option value="Almond Grey">Almond Grey</option>
                                                        <option value="Roman Grey">Roman Grey</option>
                                                        <option value="Copenhagen">Copenhagen</option>
                                                        <option value="Black Forest">Black Forest</option>
                                                        <option value="Titanium">Titanium</option>
                                                        <option value="Brushed Aluminium">Brushed Aluminium</option>
                                                        <option value="Rose Gold">Rose Gold</option>
                                                    </optgroup>



                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" class="inputLength" name="length7" placeholder="0"
                                                    maxlength="4" tabindex="19">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" class="inputWidth" name="width7" placeholder="0"
                                                    maxlength="4" tabindex="20">
                                            </td>

                                            <td class="column5" id="column"><input id="input" name="quantity7"
                                                    placeholder="0" maxlength="4" tabindex="21"></td>
                                            <td class="column11" id="column">
                                                <select name="Grain7">
                                                    <option value="Grain">X</option>
                                                    <option value="No Grain">No Grain</option>
                                                </select>
                                            </td>
                                            <td class="column6" id="column">
                                                <select name="edgelength7" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth7" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <th class="column10" id="column">
                                                <select name="potholes7" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </th>

                                            <th class="column8" id="column">
                                                <select name="edgematerial7" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="0.4">0.4</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                </select>
                                            </th>

                                        </tr>
                                        <tr>
                                            <td class="column1" id="column">8</td>
                                            <td class="column2" id="column">
                                                <select name="boardcolor8" class="boardcolors">
                                                    <option label="Select">Select</option>
                                                    <optgroup label="High Gloss Boards">
                                                        <option value="Mirror Board">Mirror Board</option>
                                                        <option value="Gold Acrylic">Gold Acrylic</option>
                                                        <option value="Copper">Copper</option>
                                                        <option value=" Iceland White ">Iceland White</option>
                                                        <option value=" Cream ">Cream</option>
                                                        <option value=" Desert Sky ">Desert Sky</option>
                                                        <option value=" Stone Grey ">Stone Grey</option>
                                                        <option value=" Black ">Black</option>
                                                        <option value=" Charcoal Grey ">Charcoal Grey</option>
                                                        <option value=" Red ">Red</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Cherry Royale ">Cherry Royale</option>
                                                        <option value=" Walnut High Gloss ">Walnut High Gloss
                                                        </option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" White Linen ">White Linen</option>
                                                        <option value=" Beige Linen ">Beige Linen</option>
                                                        <option value=" Metallic Cappuccino ">Metallic Cappuccino
                                                        </option>
                                                        <option value=" Italian Marble ">Italian Marble</option>
                                                        <option value=" White Matte ">White Matte</option>
                                                        <option value=" Anthracite Matte ">Anthracite Matte</option>
                                                        <option value=" Black Matte ">Black Matte</option>
                                                        <option value=" Winery Rouge ">Winery Rouge</option>
                                                        <option value=" Anthracite ">Anthracite</option>
                                                        <option value=" White Metallic ">White Metallic</option>
                                                        <option value=" White ">White</option>
                                                        <option value=" Macchiato ">Macchiato</option>
                                                        <option value=" Titan ">Titan</option>
                                                    </optgroup>

                                                    <optgroup label="Melamine Boards">
                                                        <option value=" Lancaster Oak ">Lancaster Oak</option>
                                                        <option value=" Carolina Cedar ">Carolina Cedar</option>
                                                        <option value=" Nappa oak ">Nappa Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Savannah ">Savannah</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Balsa "> Balsa</option>
                                                        <option value=" Espirito ">Espirito</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Glaston Berry ">Glaston Berry</option>
                                                        <option value=" Jackson Hickory ">Jackson Hickory</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Alaskan Cherry ">Alaskan Cherry</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Cherry Royal ">Cherry Royal</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" Royal Mahogany ">Royal Mahogany</option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Veneered Chipoard">
                                                        <option value=" American Walnut ">American Walnut</option>
                                                        <option value=" Cherry ">Cherry</option>
                                                        <option value=" Crown Mahogany ">Crown Mahogany</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maple ">Maple</option>
                                                        <option value=" Okoume ">Okoume</option>
                                                        <option value=" Pine ">Pine</option>
                                                        <option value=" Pink beech ">Pink beech</option>
                                                        <option value=" Red Oak ">Red Oak</option>
                                                        <option value=" Rosewood ">Rosewood</option>
                                                        <option value=" Sapele ">Sapele</option>
                                                        <option value=" White Beech ">White Beech</option>
                                                        <option value=" White Oak ">White Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Foil Boards">
                                                        <option value=" Foil Boards ">Foil Boards</option>
                                                        <option value=" Italian Walnut ">Italian Walnut</option>
                                                        <option value=" Black Oak ">Black Oak</option>
                                                        <option value=" Black Cherry ">Black Cherry</option>
                                                        <option value=" Cosmos Pecan ">Cosmos Pecan</option>
                                                        <option value=" Lake City Oak ">Lake City Oak</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maluti Walnut ">Maluti Walnut</option>
                                                        <option value=" Pecan / Ironwood ">Pecan / Ironwood</option>
                                                        <option value=" Redwood ">Redwood</option>
                                                        <option value=" July Beech ">July Beech</option>
                                                    </optgroup>

                                                    <optgroup label="Moisture Resitant Boards">
                                                        <option
                                                            value="High Moisture Resistant Melamine Chip Board (HMR)">
                                                            High Moisture Resistant Melamine Chip Board (HMR)
                                                        </option>
                                                        <option value="High Moisture Resistant MDF (HMR-MDF)">High
                                                            Moisture Resistant MDF (HMR-MDF)</option>
                                                    </optgroup>


                                                    <optgroup label="Laminate Sheets">
                                                        <option value="Brown Coffee">Brown Coffee</option>
                                                        <option value="Venetian Gold">Venetian Gold</option>
                                                        <option value="Bianco Frost">Bianco Frost</option>
                                                        <option value="Almond Grey">Almond Grey</option>
                                                        <option value="Roman Grey">Roman Grey</option>
                                                        <option value="Copenhagen">Copenhagen</option>
                                                        <option value="Black Forest">Black Forest</option>
                                                        <option value="Titanium">Titanium</option>
                                                        <option value="Brushed Aluminium">Brushed Aluminium</option>
                                                        <option value="Rose Gold">Rose Gold</option>
                                                    </optgroup>



                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" class="inputLength" name="length8" placeholder="0"
                                                    maxlength="4" tabindex="22">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" class="inputWidth" name="width8" placeholder="0"
                                                    maxlength="4" tabindex="23">
                                            </td>

                                            <td class="column5" id="column"><input id="input" name="quantity8"
                                                    placeholder="0" maxlength="4" tabindex="24"></td>
                                            <td class="column11" id="column">
                                                <select name="Grain8">
                                                    <option value="Grain">X</option>
                                                    <option value="No Grain">No Grain</option>
                                                </select>
                                            </td>
                                            <td class="column6" id="column">
                                                <select name="edgelength8" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth8" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <th class="column10" id="column">
                                                <select name="potholes8" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </th>

                                            <th class="column8" id="column">
                                                <select name="edgematerial8" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="0.4">0.4</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                </select>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td class="column1" id="column">9</td>
                                            <td class="column2" id="column">
                                                <select name="boardcolor9" class="boardcolors">
                                                    <option label="Select">Select</option>
                                                    <optgroup label="High Gloss Boards">
                                                        <option value="Mirror Board">Mirror Board</option>
                                                        <option value="Gold Acrylic">Gold Acrylic</option>
                                                        <option value="Copper">Copper</option>
                                                        <option value=" Iceland White ">Iceland White</option>
                                                        <option value=" Cream ">Cream</option>
                                                        <option value=" Desert Sky ">Desert Sky</option>
                                                        <option value=" Stone Grey ">Stone Grey</option>
                                                        <option value=" Black ">Black</option>
                                                        <option value=" Charcoal Grey ">Charcoal Grey</option>
                                                        <option value=" Red ">Red</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Cherry Royale ">Cherry Royale</option>
                                                        <option value=" Walnut High Gloss ">Walnut High Gloss
                                                        </option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" White Linen ">White Linen</option>
                                                        <option value=" Beige Linen ">Beige Linen</option>
                                                        <option value=" Metallic Cappuccino ">Metallic Cappuccino
                                                        </option>
                                                        <option value=" Italian Marble ">Italian Marble</option>
                                                        <option value=" White Matte ">White Matte</option>
                                                        <option value=" Anthracite Matte ">Anthracite Matte</option>
                                                        <option value=" Black Matte ">Black Matte</option>
                                                        <option value=" Winery Rouge ">Winery Rouge</option>
                                                        <option value=" Anthracite ">Anthracite</option>
                                                        <option value=" White Metallic ">White Metallic</option>
                                                        <option value=" White ">White</option>
                                                        <option value=" Macchiato ">Macchiato</option>
                                                        <option value=" Titan ">Titan</option>
                                                    </optgroup>

                                                    <optgroup label="Melamine Boards">
                                                        <option value=" Lancaster Oak ">Lancaster Oak</option>
                                                        <option value=" Carolina Cedar ">Carolina Cedar</option>
                                                        <option value=" Nappa oak ">Nappa Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Savannah ">Savannah</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Balsa "> Balsa</option>
                                                        <option value=" Espirito ">Espirito</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Glaston Berry ">Glaston Berry</option>
                                                        <option value=" Jackson Hickory ">Jackson Hickory</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Alaskan Cherry ">Alaskan Cherry</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Cherry Royal ">Cherry Royal</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" Royal Mahogany ">Royal Mahogany</option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Veneered Chipoard">
                                                        <option value=" American Walnut ">American Walnut</option>
                                                        <option value=" Cherry ">Cherry</option>
                                                        <option value=" Crown Mahogany ">Crown Mahogany</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maple ">Maple</option>
                                                        <option value=" Okoume ">Okoume</option>
                                                        <option value=" Pine ">Pine</option>
                                                        <option value=" Pink beech ">Pink beech</option>
                                                        <option value=" Red Oak ">Red Oak</option>
                                                        <option value=" Rosewood ">Rosewood</option>
                                                        <option value=" Sapele ">Sapele</option>
                                                        <option value=" White Beech ">White Beech</option>
                                                        <option value=" White Oak ">White Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Foil Boards">
                                                        <option value=" Foil Boards ">Foil Boards</option>
                                                        <option value=" Italian Walnut ">Italian Walnut</option>
                                                        <option value=" Black Oak ">Black Oak</option>
                                                        <option value=" Black Cherry ">Black Cherry</option>
                                                        <option value=" Cosmos Pecan ">Cosmos Pecan</option>
                                                        <option value=" Lake City Oak ">Lake City Oak</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maluti Walnut ">Maluti Walnut</option>
                                                        <option value=" Pecan / Ironwood ">Pecan / Ironwood</option>
                                                        <option value=" Redwood ">Redwood</option>
                                                        <option value=" July Beech ">July Beech</option>
                                                    </optgroup>

                                                    <optgroup label="Moisture Resitant Boards">
                                                        <option
                                                            value="High Moisture Resistant Melamine Chip Board (HMR)">
                                                            High Moisture Resistant Melamine Chip Board (HMR)
                                                        </option>
                                                        <option value="High Moisture Resistant MDF (HMR-MDF)">High
                                                            Moisture Resistant MDF (HMR-MDF)</option>
                                                    </optgroup>


                                                    <optgroup label="Laminate Sheets">
                                                        <option value="Brown Coffee">Brown Coffee</option>
                                                        <option value="Venetian Gold">Venetian Gold</option>
                                                        <option value="Bianco Frost">Bianco Frost</option>
                                                        <option value="Almond Grey">Almond Grey</option>
                                                        <option value="Roman Grey">Roman Grey</option>
                                                        <option value="Copenhagen">Copenhagen</option>
                                                        <option value="Black Forest">Black Forest</option>
                                                        <option value="Titanium">Titanium</option>
                                                        <option value="Brushed Aluminium">Brushed Aluminium</option>
                                                        <option value="Rose Gold">Rose Gold</option>
                                                    </optgroup>
                                                </select>

                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" class="inputLength" name="length9" placeholder="0"
                                                    maxlength="4" tabindex="22">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" class="inputWidth" name="width9" placeholder="0"
                                                    maxlength="4" tabindex="23">
                                            </td>

                                            <td class="column5" id="column"><input id="input" name="quantity9"
                                                    placeholder="0" maxlength="4" tabindex="24"></td>
                                            <td class="column11" id="column">
                                                <select name="Grain9">
                                                    <option value="Grain">X</option>
                                                    <option value="No Grain">No Grain</option>
                                                </select>
                                            </td>
                                            <td class="column6" id="column">
                                                <select name="edgelength9" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth9" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <th class="column10" id="column">
                                                <select name="potholes9" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </th>

                                            <th class="column8" id="column">
                                                <select name="edgematerial9" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="0.4">0.4</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                </select>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td class="column1" id="column">10</td>
                                            <td class="column2" id="column">
                                                <select name="boardcolor10" class="boardcolors">
                                                    <option label="Select">Select</option>
                                                    <optgroup label="High Gloss Boards">
                                                        <option value="Mirror Board">Mirror Board</option>
                                                        <option value="Gold Acrylic">Gold Acrylic</option>
                                                        <option value="Copper">Copper</option>
                                                        <option value=" Iceland White ">Iceland White</option>
                                                        <option value=" Cream ">Cream</option>
                                                        <option value=" Desert Sky ">Desert Sky</option>
                                                        <option value=" Stone Grey ">Stone Grey</option>
                                                        <option value=" Black ">Black</option>
                                                        <option value=" Charcoal Grey ">Charcoal Grey</option>
                                                        <option value=" Red ">Red</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Cherry Royale ">Cherry Royale</option>
                                                        <option value=" Walnut High Gloss ">Walnut High Gloss
                                                        </option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" White Linen ">White Linen</option>
                                                        <option value=" Beige Linen ">Beige Linen</option>
                                                        <option value=" Metallic Cappuccino ">Metallic Cappuccino
                                                        </option>
                                                        <option value=" Italian Marble ">Italian Marble</option>
                                                        <option value=" White Matte ">White Matte</option>
                                                        <option value=" Anthracite Matte ">Anthracite Matte</option>
                                                        <option value=" Black Matte ">Black Matte</option>
                                                        <option value=" Winery Rouge ">Winery Rouge</option>
                                                        <option value=" Anthracite ">Anthracite</option>
                                                        <option value=" White Metallic ">White Metallic</option>
                                                        <option value=" White ">White</option>
                                                        <option value=" Macchiato ">Macchiato</option>
                                                        <option value=" Titan ">Titan</option>
                                                    </optgroup>

                                                    <optgroup label="Melamine Boards">
                                                        <option value=" Lancaster Oak ">Lancaster Oak</option>
                                                        <option value=" Carolina Cedar ">Carolina Cedar</option>
                                                        <option value=" Nappa oak ">Nappa Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Savannah ">Savannah</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Balsa "> Balsa</option>
                                                        <option value=" Espirito ">Espirito</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Glaston Berry ">Glaston Berry</option>
                                                        <option value=" Jackson Hickory ">Jackson Hickory</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Alaskan Cherry ">Alaskan Cherry</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Cherry Royal ">Cherry Royal</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" Royal Mahogany ">Royal Mahogany</option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Veneered Chipoard">
                                                        <option value=" American Walnut ">American Walnut</option>
                                                        <option value=" Cherry ">Cherry</option>
                                                        <option value=" Crown Mahogany ">Crown Mahogany</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maple ">Maple</option>
                                                        <option value=" Okoume ">Okoume</option>
                                                        <option value=" Pine ">Pine</option>
                                                        <option value=" Pink beech ">Pink beech</option>
                                                        <option value=" Red Oak ">Red Oak</option>
                                                        <option value=" Rosewood ">Rosewood</option>
                                                        <option value=" Sapele ">Sapele</option>
                                                        <option value=" White Beech ">White Beech</option>
                                                        <option value=" White Oak ">White Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Foil Boards">
                                                        <option value=" Foil Boards ">Foil Boards</option>
                                                        <option value=" Italian Walnut ">Italian Walnut</option>
                                                        <option value=" Black Oak ">Black Oak</option>
                                                        <option value=" Black Cherry ">Black Cherry</option>
                                                        <option value=" Cosmos Pecan ">Cosmos Pecan</option>
                                                        <option value=" Lake City Oak ">Lake City Oak</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maluti Walnut ">Maluti Walnut</option>
                                                        <option value=" Pecan / Ironwood ">Pecan / Ironwood</option>
                                                        <option value=" Redwood ">Redwood</option>
                                                        <option value=" July Beech ">July Beech</option>
                                                    </optgroup>

                                                    <optgroup label="Moisture Resitant Boards">
                                                        <option
                                                            value="High Moisture Resistant Melamine Chip Board (HMR)">
                                                            High Moisture Resistant Melamine Chip Board (HMR)
                                                        </option>
                                                        <option value="High Moisture Resistant MDF (HMR-MDF)">High
                                                            Moisture Resistant MDF (HMR-MDF)</option>
                                                    </optgroup>


                                                    <optgroup label="Laminate Sheets">
                                                        <option value="Brown Coffee">Brown Coffee</option>
                                                        <option value="Venetian Gold">Venetian Gold</option>
                                                        <option value="Bianco Frost">Bianco Frost</option>
                                                        <option value="Almond Grey">Almond Grey</option>
                                                        <option value="Roman Grey">Roman Grey</option>
                                                        <option value="Copenhagen">Copenhagen</option>
                                                        <option value="Black Forest">Black Forest</option>
                                                        <option value="Titanium">Titanium</option>
                                                        <option value="Brushed Aluminium">Brushed Aluminium</option>
                                                        <option value="Rose Gold">Rose Gold</option>
                                                    </optgroup>
                                                </select>

                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" class="inputLength" name="length10" placeholder="0"
                                                    maxlength="4" tabindex="22">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" class="inputWidth" name="width10" placeholder="0"
                                                    maxlength="4" tabindex="23">
                                            </td>

                                            <td class="column5" id="column"><input id="input" name="quantity10"
                                                    placeholder="0" maxlength="4" tabindex="24"></td>
                                            <td class="column11" id="column">
                                                <select name="Grain10">
                                                    <option value="Grain">X</option>
                                                    <option value="No Grain">No Grain</option>
                                                </select>
                                            </td>
                                            <td class="column6" id="column">
                                                <select name="edgelength10" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth10" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <th class="column10" id="column">
                                                <select name="potholes10" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </th>

                                            <th class="column8" id="column">
                                                <select name="edgematerial10" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="0.4">0.4</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                </select>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td class="column1" id="column">11</td>
                                            <td class="column2" id="column">
                                                <select name="boardcolor11" class="boardcolors">
                                                    <option label="Select">Select</option>
                                                    <optgroup label="High Gloss Boards">
                                                        <option value="Mirror Board">Mirror Board</option>
                                                        <option value="Gold Acrylic">Gold Acrylic</option>
                                                        <option value="Copper">Copper</option>
                                                        <option value=" Iceland White ">Iceland White</option>
                                                        <option value=" Cream ">Cream</option>
                                                        <option value=" Desert Sky ">Desert Sky</option>
                                                        <option value=" Stone Grey ">Stone Grey</option>
                                                        <option value=" Black ">Black</option>
                                                        <option value=" Charcoal Grey ">Charcoal Grey</option>
                                                        <option value=" Red ">Red</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Cherry Royale ">Cherry Royale</option>
                                                        <option value=" Walnut High Gloss ">Walnut High Gloss
                                                        </option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" White Linen ">White Linen</option>
                                                        <option value=" Beige Linen ">Beige Linen</option>
                                                        <option value=" Metallic Cappuccino ">Metallic Cappuccino
                                                        </option>
                                                        <option value=" Italian Marble ">Italian Marble</option>
                                                        <option value=" White Matte ">White Matte</option>
                                                        <option value=" Anthracite Matte ">Anthracite Matte</option>
                                                        <option value=" Black Matte ">Black Matte</option>
                                                        <option value=" Winery Rouge ">Winery Rouge</option>
                                                        <option value=" Anthracite ">Anthracite</option>
                                                        <option value=" White Metallic ">White Metallic</option>
                                                        <option value=" White ">White</option>
                                                        <option value=" Macchiato ">Macchiato</option>
                                                        <option value=" Titan ">Titan</option>
                                                    </optgroup>

                                                    <optgroup label="Melamine Boards">
                                                        <option value=" Lancaster Oak ">Lancaster Oak</option>
                                                        <option value=" Carolina Cedar ">Carolina Cedar</option>
                                                        <option value=" Nappa oak ">Nappa Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Savannah ">Savannah</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Balsa "> Balsa</option>
                                                        <option value=" Espirito ">Espirito</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Glaston Berry ">Glaston Berry</option>
                                                        <option value=" Jackson Hickory ">Jackson Hickory</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Alaskan Cherry ">Alaskan Cherry</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Cherry Royal ">Cherry Royal</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" Royal Mahogany ">Royal Mahogany</option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Veneered Chipoard">
                                                        <option value=" American Walnut ">American Walnut</option>
                                                        <option value=" Cherry ">Cherry</option>
                                                        <option value=" Crown Mahogany ">Crown Mahogany</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maple ">Maple</option>
                                                        <option value=" Okoume ">Okoume</option>
                                                        <option value=" Pine ">Pine</option>
                                                        <option value=" Pink beech ">Pink beech</option>
                                                        <option value=" Red Oak ">Red Oak</option>
                                                        <option value=" Rosewood ">Rosewood</option>
                                                        <option value=" Sapele ">Sapele</option>
                                                        <option value=" White Beech ">White Beech</option>
                                                        <option value=" White Oak ">White Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Foil Boards">
                                                        <option value=" Foil Boards ">Foil Boards</option>
                                                        <option value=" Italian Walnut ">Italian Walnut</option>
                                                        <option value=" Black Oak ">Black Oak</option>
                                                        <option value=" Black Cherry ">Black Cherry</option>
                                                        <option value=" Cosmos Pecan ">Cosmos Pecan</option>
                                                        <option value=" Lake City Oak ">Lake City Oak</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maluti Walnut ">Maluti Walnut</option>
                                                        <option value=" Pecan / Ironwood ">Pecan / Ironwood</option>
                                                        <option value=" Redwood ">Redwood</option>
                                                        <option value=" July Beech ">July Beech</option>
                                                    </optgroup>

                                                    <optgroup label="Moisture Resitant Boards">
                                                        <option
                                                            value="High Moisture Resistant Melamine Chip Board (HMR)">
                                                            High Moisture Resistant Melamine Chip Board (HMR)
                                                        </option>
                                                        <option value="High Moisture Resistant MDF (HMR-MDF)">High
                                                            Moisture Resistant MDF (HMR-MDF)</option>
                                                    </optgroup>


                                                    <optgroup label="Laminate Sheets">
                                                        <option value="Brown Coffee">Brown Coffee</option>
                                                        <option value="Venetian Gold">Venetian Gold</option>
                                                        <option value="Bianco Frost">Bianco Frost</option>
                                                        <option value="Almond Grey">Almond Grey</option>
                                                        <option value="Roman Grey">Roman Grey</option>
                                                        <option value="Copenhagen">Copenhagen</option>
                                                        <option value="Black Forest">Black Forest</option>
                                                        <option value="Titanium">Titanium</option>
                                                        <option value="Brushed Aluminium">Brushed Aluminium</option>
                                                        <option value="Rose Gold">Rose Gold</option>
                                                    </optgroup>
                                                </select>

                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" class="inputLength" name="length11" placeholder="0"
                                                    maxlength="4" tabindex="22">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" class="inputWidth" name="width11" placeholder="0"
                                                    maxlength="4" tabindex="23">
                                            </td>

                                            <td class="column5" id="column"><input id="input" name="quantity11"
                                                    placeholder="0" maxlength="4" tabindex="24"></td>
                                            <td class="column11" id="column">
                                                <select name="Grain11">
                                                    <option value="Grain">X</option>
                                                    <option value="No Grain">No Grain</option>
                                                </select>
                                            </td>
                                            <td class="column6" id="column">
                                                <select name="edgelength11" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth11" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <th class="column10" id="column">
                                                <select name="potholes11" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </th>

                                            <th class="column8" id="column">
                                                <select name="edgematerial11" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="0.4">0.4</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                </select>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td class="column1" id="column">12</td>
                                            <td class="column2" id="column">
                                                <select name="boardcolor12" class="boardcolors">
                                                    <option label="Select">Select</option>
                                                    <optgroup label="High Gloss Boards">
                                                        <option value="Mirror Board">Mirror Board</option>
                                                        <option value="Gold Acrylic">Gold Acrylic</option>
                                                        <option value="Copper">Copper</option>
                                                        <option value=" Iceland White ">Iceland White</option>
                                                        <option value=" Cream ">Cream</option>
                                                        <option value=" Desert Sky ">Desert Sky</option>
                                                        <option value=" Stone Grey ">Stone Grey</option>
                                                        <option value=" Black ">Black</option>
                                                        <option value=" Charcoal Grey ">Charcoal Grey</option>
                                                        <option value=" Red ">Red</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Cherry Royale ">Cherry Royale</option>
                                                        <option value=" Walnut High Gloss ">Walnut High Gloss
                                                        </option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" White Linen ">White Linen</option>
                                                        <option value=" Beige Linen ">Beige Linen</option>
                                                        <option value=" Metallic Cappuccino ">Metallic Cappuccino
                                                        </option>
                                                        <option value=" Italian Marble ">Italian Marble</option>
                                                        <option value=" White Matte ">White Matte</option>
                                                        <option value=" Anthracite Matte ">Anthracite Matte</option>
                                                        <option value=" Black Matte ">Black Matte</option>
                                                        <option value=" Winery Rouge ">Winery Rouge</option>
                                                        <option value=" Anthracite ">Anthracite</option>
                                                        <option value=" White Metallic ">White Metallic</option>
                                                        <option value=" White ">White</option>
                                                        <option value=" Macchiato ">Macchiato</option>
                                                        <option value=" Titan ">Titan</option>
                                                    </optgroup>

                                                    <optgroup label="Melamine Boards">
                                                        <option value=" Lancaster Oak ">Lancaster Oak</option>
                                                        <option value=" Carolina Cedar ">Carolina Cedar</option>
                                                        <option value=" Nappa oak ">Nappa Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Savannah ">Savannah</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Balsa "> Balsa</option>
                                                        <option value=" Espirito ">Espirito</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Glaston Berry ">Glaston Berry</option>
                                                        <option value=" Jackson Hickory ">Jackson Hickory</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Alaskan Cherry ">Alaskan Cherry</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Cherry Royal ">Cherry Royal</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" Royal Mahogany ">Royal Mahogany</option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Veneered Chipoard">
                                                        <option value=" American Walnut ">American Walnut</option>
                                                        <option value=" Cherry ">Cherry</option>
                                                        <option value=" Crown Mahogany ">Crown Mahogany</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maple ">Maple</option>
                                                        <option value=" Okoume ">Okoume</option>
                                                        <option value=" Pine ">Pine</option>
                                                        <option value=" Pink beech ">Pink beech</option>
                                                        <option value=" Red Oak ">Red Oak</option>
                                                        <option value=" Rosewood ">Rosewood</option>
                                                        <option value=" Sapele ">Sapele</option>
                                                        <option value=" White Beech ">White Beech</option>
                                                        <option value=" White Oak ">White Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Foil Boards">
                                                        <option value=" Foil Boards ">Foil Boards</option>
                                                        <option value=" Italian Walnut ">Italian Walnut</option>
                                                        <option value=" Black Oak ">Black Oak</option>
                                                        <option value=" Black Cherry ">Black Cherry</option>
                                                        <option value=" Cosmos Pecan ">Cosmos Pecan</option>
                                                        <option value=" Lake City Oak ">Lake City Oak</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maluti Walnut ">Maluti Walnut</option>
                                                        <option value=" Pecan / Ironwood ">Pecan / Ironwood</option>
                                                        <option value=" Redwood ">Redwood</option>
                                                        <option value=" July Beech ">July Beech</option>
                                                    </optgroup>

                                                    <optgroup label="Moisture Resitant Boards">
                                                        <option
                                                            value="High Moisture Resistant Melamine Chip Board (HMR)">
                                                            High Moisture Resistant Melamine Chip Board (HMR)
                                                        </option>
                                                        <option value="High Moisture Resistant MDF (HMR-MDF)">High
                                                            Moisture Resistant MDF (HMR-MDF)</option>
                                                    </optgroup>


                                                    <optgroup label="Laminate Sheets">
                                                        <option value="Brown Coffee">Brown Coffee</option>
                                                        <option value="Venetian Gold">Venetian Gold</option>
                                                        <option value="Bianco Frost">Bianco Frost</option>
                                                        <option value="Almond Grey">Almond Grey</option>
                                                        <option value="Roman Grey">Roman Grey</option>
                                                        <option value="Copenhagen">Copenhagen</option>
                                                        <option value="Black Forest">Black Forest</option>
                                                        <option value="Titanium">Titanium</option>
                                                        <option value="Brushed Aluminium">Brushed Aluminium</option>
                                                        <option value="Rose Gold">Rose Gold</option>
                                                    </optgroup>
                                                </select>

                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" class="inputLength" name="length12" placeholder="0"
                                                    maxlength="4" tabindex="22">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" class="inputWidth" name="width12" placeholder="0"
                                                    maxlength="4" tabindex="23">
                                            </td>

                                            <td class="column5" id="column"><input id="input" name="quantity12"
                                                    placeholder="0" maxlength="4" tabindex="24"></td>
                                            <td class="column11" id="column">
                                                <select name="Grain12">
                                                    <option value="Grain">X</option>
                                                    <option value="No Grain">No Grain</option>
                                                </select>
                                            </td>
                                            <td class="column6" id="column">
                                                <select name="edgelength12" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth12" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <th class="column10" id="column">
                                                <select name="potholes12" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </th>

                                            <th class="column8" id="column">
                                                <select name="edgematerial12" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="0.4">0.4</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                </select>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td class="column1" id="column">13</td>
                                            <td class="column2" id="column">
                                                <select name="boardcolor13" class="boardcolors">
                                                    <option label="Select">Select</option>
                                                    <optgroup label="High Gloss Boards">
                                                        <option value="Mirror Board">Mirror Board</option>
                                                        <option value="Gold Acrylic">Gold Acrylic</option>
                                                        <option value="Copper">Copper</option>
                                                        <option value=" Iceland White ">Iceland White</option>
                                                        <option value=" Cream ">Cream</option>
                                                        <option value=" Desert Sky ">Desert Sky</option>
                                                        <option value=" Stone Grey ">Stone Grey</option>
                                                        <option value=" Black ">Black</option>
                                                        <option value=" Charcoal Grey ">Charcoal Grey</option>
                                                        <option value=" Red ">Red</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Cherry Royale ">Cherry Royale</option>
                                                        <option value=" Walnut High Gloss ">Walnut High Gloss
                                                        </option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" White Linen ">White Linen</option>
                                                        <option value=" Beige Linen ">Beige Linen</option>
                                                        <option value=" Metallic Cappuccino ">Metallic Cappuccino
                                                        </option>
                                                        <option value=" Italian Marble ">Italian Marble</option>
                                                        <option value=" White Matte ">White Matte</option>
                                                        <option value=" Anthracite Matte ">Anthracite Matte</option>
                                                        <option value=" Black Matte ">Black Matte</option>
                                                        <option value=" Winery Rouge ">Winery Rouge</option>
                                                        <option value=" Anthracite ">Anthracite</option>
                                                        <option value=" White Metallic ">White Metallic</option>
                                                        <option value=" White ">White</option>
                                                        <option value=" Macchiato ">Macchiato</option>
                                                        <option value=" Titan ">Titan</option>
                                                    </optgroup>

                                                    <optgroup label="Melamine Boards">
                                                        <option value=" Lancaster Oak ">Lancaster Oak</option>
                                                        <option value=" Carolina Cedar ">Carolina Cedar</option>
                                                        <option value=" Nappa oak ">Nappa Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Savannah ">Savannah</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Balsa "> Balsa</option>
                                                        <option value=" Espirito ">Espirito</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Glaston Berry ">Glaston Berry</option>
                                                        <option value=" Jackson Hickory ">Jackson Hickory</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Alaskan Cherry ">Alaskan Cherry</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Cherry Royal ">Cherry Royal</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" Royal Mahogany ">Royal Mahogany</option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Veneered Chipoard">
                                                        <option value=" American Walnut ">American Walnut</option>
                                                        <option value=" Cherry ">Cherry</option>
                                                        <option value=" Crown Mahogany ">Crown Mahogany</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maple ">Maple</option>
                                                        <option value=" Okoume ">Okoume</option>
                                                        <option value=" Pine ">Pine</option>
                                                        <option value=" Pink beech ">Pink beech</option>
                                                        <option value=" Red Oak ">Red Oak</option>
                                                        <option value=" Rosewood ">Rosewood</option>
                                                        <option value=" Sapele ">Sapele</option>
                                                        <option value=" White Beech ">White Beech</option>
                                                        <option value=" White Oak ">White Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Foil Boards">
                                                        <option value=" Foil Boards ">Foil Boards</option>
                                                        <option value=" Italian Walnut ">Italian Walnut</option>
                                                        <option value=" Black Oak ">Black Oak</option>
                                                        <option value=" Black Cherry ">Black Cherry</option>
                                                        <option value=" Cosmos Pecan ">Cosmos Pecan</option>
                                                        <option value=" Lake City Oak ">Lake City Oak</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maluti Walnut ">Maluti Walnut</option>
                                                        <option value=" Pecan / Ironwood ">Pecan / Ironwood</option>
                                                        <option value=" Redwood ">Redwood</option>
                                                        <option value=" July Beech ">July Beech</option>
                                                    </optgroup>

                                                    <optgroup label="Moisture Resitant Boards">
                                                        <option
                                                            value="High Moisture Resistant Melamine Chip Board (HMR)">
                                                            High Moisture Resistant Melamine Chip Board (HMR)
                                                        </option>
                                                        <option value="High Moisture Resistant MDF (HMR-MDF)">High
                                                            Moisture Resistant MDF (HMR-MDF)</option>
                                                    </optgroup>


                                                    <optgroup label="Laminate Sheets">
                                                        <option value="Brown Coffee">Brown Coffee</option>
                                                        <option value="Venetian Gold">Venetian Gold</option>
                                                        <option value="Bianco Frost">Bianco Frost</option>
                                                        <option value="Almond Grey">Almond Grey</option>
                                                        <option value="Roman Grey">Roman Grey</option>
                                                        <option value="Copenhagen">Copenhagen</option>
                                                        <option value="Black Forest">Black Forest</option>
                                                        <option value="Titanium">Titanium</option>
                                                        <option value="Brushed Aluminium">Brushed Aluminium</option>
                                                        <option value="Rose Gold">Rose Gold</option>
                                                    </optgroup>
                                                </select>

                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" class="inputLength" name="length13" placeholder="0"
                                                    maxlength="4" tabindex="22">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" class="inputWidth" name="width13" placeholder="0"
                                                    maxlength="4" tabindex="23">
                                            </td>

                                            <td class="column5" id="column"><input id="input" name="quantity13"
                                                    placeholder="0" maxlength="4" tabindex="24"></td>
                                            <td class="column11" id="column">
                                                <select name="Grain13">
                                                    <option value="Grain">X</option>
                                                    <option value="No Grain">No Grain</option>
                                                </select>
                                            </td>
                                            <td class="column6" id="column">
                                                <select name="edgelength13" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth13" class="value0">
                                                 <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <th class="column10" id="column">
                                                <select name="potholes13" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </th>

                                            <th class="column8" id="column">
                                                <select name="edgematerial13" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="0.4">0.4</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                </select>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td class="column1" id="column">14</td>
                                            <td class="column2" id="column">
                                                <select name="boardcolor14" class="boardcolors">
                                                    <option label="Select">Select</option>
                                                    <optgroup label="High Gloss Boards">
                                                        <option value="Mirror Board">Mirror Board</option>
                                                        <option value="Gold Acrylic">Gold Acrylic</option>
                                                        <option value="Copper">Copper</option>
                                                        <option value=" Iceland White ">Iceland White</option>
                                                        <option value=" Cream ">Cream</option>
                                                        <option value=" Desert Sky ">Desert Sky</option>
                                                        <option value=" Stone Grey ">Stone Grey</option>
                                                        <option value=" Black ">Black</option>
                                                        <option value=" Charcoal Grey ">Charcoal Grey</option>
                                                        <option value=" Red ">Red</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Cherry Royale ">Cherry Royale</option>
                                                        <option value=" Walnut High Gloss ">Walnut High Gloss
                                                        </option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" White Linen ">White Linen</option>
                                                        <option value=" Beige Linen ">Beige Linen</option>
                                                        <option value=" Metallic Cappuccino ">Metallic Cappuccino
                                                        </option>
                                                        <option value=" Italian Marble ">Italian Marble</option>
                                                        <option value=" White Matte ">White Matte</option>
                                                        <option value=" Anthracite Matte ">Anthracite Matte</option>
                                                        <option value=" Black Matte ">Black Matte</option>
                                                        <option value=" Winery Rouge ">Winery Rouge</option>
                                                        <option value=" Anthracite ">Anthracite</option>
                                                        <option value=" White Metallic ">White Metallic</option>
                                                        <option value=" White ">White</option>
                                                        <option value=" Macchiato ">Macchiato</option>
                                                        <option value=" Titan ">Titan</option>
                                                    </optgroup>

                                                    <optgroup label="Melamine Boards">
                                                        <option value=" Lancaster Oak ">Lancaster Oak</option>
                                                        <option value=" Carolina Cedar ">Carolina Cedar</option>
                                                        <option value=" Nappa oak ">Nappa Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Savannah ">Savannah</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Balsa "> Balsa</option>
                                                        <option value=" Espirito ">Espirito</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Glaston Berry ">Glaston Berry</option>
                                                        <option value=" Jackson Hickory ">Jackson Hickory</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Alaskan Cherry ">Alaskan Cherry</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Cherry Royal ">Cherry Royal</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" Royal Mahogany ">Royal Mahogany</option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Veneered Chipoard">
                                                        <option value=" American Walnut ">American Walnut</option>
                                                        <option value=" Cherry ">Cherry</option>
                                                        <option value=" Crown Mahogany ">Crown Mahogany</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maple ">Maple</option>
                                                        <option value=" Okoume ">Okoume</option>
                                                        <option value=" Pine ">Pine</option>
                                                        <option value=" Pink beech ">Pink beech</option>
                                                        <option value=" Red Oak ">Red Oak</option>
                                                        <option value=" Rosewood ">Rosewood</option>
                                                        <option value=" Sapele ">Sapele</option>
                                                        <option value=" White Beech ">White Beech</option>
                                                        <option value=" White Oak ">White Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Foil Boards">
                                                        <option value=" Foil Boards ">Foil Boards</option>
                                                        <option value=" Italian Walnut ">Italian Walnut</option>
                                                        <option value=" Black Oak ">Black Oak</option>
                                                        <option value=" Black Cherry ">Black Cherry</option>
                                                        <option value=" Cosmos Pecan ">Cosmos Pecan</option>
                                                        <option value=" Lake City Oak ">Lake City Oak</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maluti Walnut ">Maluti Walnut</option>
                                                        <option value=" Pecan / Ironwood ">Pecan / Ironwood</option>
                                                        <option value=" Redwood ">Redwood</option>
                                                        <option value=" July Beech ">July Beech</option>
                                                    </optgroup>

                                                    <optgroup label="Moisture Resitant Boards">
                                                        <option
                                                            value="High Moisture Resistant Melamine Chip Board (HMR)">
                                                            High Moisture Resistant Melamine Chip Board (HMR)
                                                        </option>
                                                        <option value="High Moisture Resistant MDF (HMR-MDF)">High
                                                            Moisture Resistant MDF (HMR-MDF)</option>
                                                    </optgroup>


                                                    <optgroup label="Laminate Sheets">
                                                        <option value="Brown Coffee">Brown Coffee</option>
                                                        <option value="Venetian Gold">Venetian Gold</option>
                                                        <option value="Bianco Frost">Bianco Frost</option>
                                                        <option value="Almond Grey">Almond Grey</option>
                                                        <option value="Roman Grey">Roman Grey</option>
                                                        <option value="Copenhagen">Copenhagen</option>
                                                        <option value="Black Forest">Black Forest</option>
                                                        <option value="Titanium">Titanium</option>
                                                        <option value="Brushed Aluminium">Brushed Aluminium</option>
                                                        <option value="Rose Gold">Rose Gold</option>
                                                    </optgroup>
                                                </select>

                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" class="inputLength" name="length14" placeholder="0"
                                                    maxlength="4" tabindex="22">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" class="inputWidth" name="width14" placeholder="0"
                                                    maxlength="4" tabindex="23">
                                            </td>

                                            <td class="column5" id="column"><input id="input" name="quantity14"
                                                    placeholder="0" maxlength="4" tabindex="24"></td>
                                            <td class="column11" id="column">
                                                <select name="Grain14">
                                                    <option value="Grain">X</option>
                                                    <option value="No Grain">No Grain</option>
                                                </select>
                                            </td>
                                            <td class="column6" id="column">
                                                <select name="edgelength14" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth14" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <th class="column10" id="column">
                                                <select name="potholes14" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </th>

                                            <th class="column8" id="column">
                                                <select name="edgematerial14" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="0.4">0.4</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                </select>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td class="column1" id="column">15</td>
                                            <td class="column2" id="column">
                                                <select name="boardcolor15" class="boardcolors">
                                                    <option label="Select">Select</option>
                                                    <optgroup label="High Gloss Boards">
                                                        <option value="Mirror Board">Mirror Board</option>
                                                        <option value="Gold Acrylic">Gold Acrylic</option>
                                                        <option value="Copper">Copper</option>
                                                        <option value=" Iceland White ">Iceland White</option>
                                                        <option value=" Cream ">Cream</option>
                                                        <option value=" Desert Sky ">Desert Sky</option>
                                                        <option value=" Stone Grey ">Stone Grey</option>
                                                        <option value=" Black ">Black</option>
                                                        <option value=" Charcoal Grey ">Charcoal Grey</option>
                                                        <option value=" Red ">Red</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Cherry Royale ">Cherry Royale</option>
                                                        <option value=" Walnut High Gloss ">Walnut High Gloss
                                                        </option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" White Linen ">White Linen</option>
                                                        <option value=" Beige Linen ">Beige Linen</option>
                                                        <option value=" Metallic Cappuccino ">Metallic Cappuccino
                                                        </option>
                                                        <option value=" Italian Marble ">Italian Marble</option>
                                                        <option value=" White Matte ">White Matte</option>
                                                        <option value=" Anthracite Matte ">Anthracite Matte</option>
                                                        <option value=" Black Matte ">Black Matte</option>
                                                        <option value=" Winery Rouge ">Winery Rouge</option>
                                                        <option value=" Anthracite ">Anthracite</option>
                                                        <option value=" White Metallic ">White Metallic</option>
                                                        <option value=" White ">White</option>
                                                        <option value=" Macchiato ">Macchiato</option>
                                                        <option value=" Titan ">Titan</option>
                                                    </optgroup>

                                                    <optgroup label="Melamine Boards">
                                                        <option value=" Lancaster Oak ">Lancaster Oak</option>
                                                        <option value=" Carolina Cedar ">Carolina Cedar</option>
                                                        <option value=" Nappa oak ">Nappa Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Savannah ">Savannah</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Balsa "> Balsa</option>
                                                        <option value=" Espirito ">Espirito</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Glaston Berry ">Glaston Berry</option>
                                                        <option value=" Jackson Hickory ">Jackson Hickory</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Alaskan Cherry ">Alaskan Cherry</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Cherry Royal ">Cherry Royal</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" Royal Mahogany ">Royal Mahogany</option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Veneered Chipoard">
                                                        <option value=" American Walnut ">American Walnut</option>
                                                        <option value=" Cherry ">Cherry</option>
                                                        <option value=" Crown Mahogany ">Crown Mahogany</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maple ">Maple</option>
                                                        <option value=" Okoume ">Okoume</option>
                                                        <option value=" Pine ">Pine</option>
                                                        <option value=" Pink beech ">Pink beech</option>
                                                        <option value=" Red Oak ">Red Oak</option>
                                                        <option value=" Rosewood ">Rosewood</option>
                                                        <option value=" Sapele ">Sapele</option>
                                                        <option value=" White Beech ">White Beech</option>
                                                        <option value=" White Oak ">White Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Foil Boards">
                                                        <option value=" Foil Boards ">Foil Boards</option>
                                                        <option value=" Italian Walnut ">Italian Walnut</option>
                                                        <option value=" Black Oak ">Black Oak</option>
                                                        <option value=" Black Cherry ">Black Cherry</option>
                                                        <option value=" Cosmos Pecan ">Cosmos Pecan</option>
                                                        <option value=" Lake City Oak ">Lake City Oak</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maluti Walnut ">Maluti Walnut</option>
                                                        <option value=" Pecan / Ironwood ">Pecan / Ironwood</option>
                                                        <option value=" Redwood ">Redwood</option>
                                                        <option value=" July Beech ">July Beech</option>
                                                    </optgroup>

                                                    <optgroup label="Moisture Resitant Boards">
                                                        <option
                                                            value="High Moisture Resistant Melamine Chip Board (HMR)">
                                                            High Moisture Resistant Melamine Chip Board (HMR)
                                                        </option>
                                                        <option value="High Moisture Resistant MDF (HMR-MDF)">High
                                                            Moisture Resistant MDF (HMR-MDF)</option>
                                                    </optgroup>


                                                    <optgroup label="Laminate Sheets">
                                                        <option value="Brown Coffee">Brown Coffee</option>
                                                        <option value="Venetian Gold">Venetian Gold</option>
                                                        <option value="Bianco Frost">Bianco Frost</option>
                                                        <option value="Almond Grey">Almond Grey</option>
                                                        <option value="Roman Grey">Roman Grey</option>
                                                        <option value="Copenhagen">Copenhagen</option>
                                                        <option value="Black Forest">Black Forest</option>
                                                        <option value="Titanium">Titanium</option>
                                                        <option value="Brushed Aluminium">Brushed Aluminium</option>
                                                        <option value="Rose Gold">Rose Gold</option>
                                                    </optgroup>
                                                </select>

                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" class="inputLength" name="length15" placeholder="0"
                                                    maxlength="4" tabindex="22">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" class="inputWidth" name="width15" placeholder="0"
                                                    maxlength="4" tabindex="23">
                                            </td>

                                            <td class="column5" id="column"><input id="input" name="quantity15"
                                                    placeholder="0" maxlength="4" tabindex="24"></td>
                                            <td class="column11" id="column">
                                                <select name="Grain15">
                                                    <option value="Grain">X</option>
                                                    <option value="No Grain">No Grain</option>
                                                </select>
                                            </td>
                                            <td class="column6" id="column">
                                                <select name="edgelength15" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth15" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <th class="column10" id="column">
                                                <select name="potholes15" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                            </th>

                                            <th class="column8" id="column">
                                                <select name="edgematerial15" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="0.4">0.4</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                </select>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td class="column1" id="column">16</td>
                                            <td class="column2" id="column">
                                                <select name="boardcolor16" class="boardcolors">
                                                    <option label="Select">Select</option>
                                                    <optgroup label="High Gloss Boards">
                                                        <option value="Mirror Board">Mirror Board</option>
                                                        <option value="Gold Acrylic">Gold Acrylic</option>
                                                        <option value="Copper">Copper</option>
                                                        <option value=" Iceland White ">Iceland White</option>
                                                        <option value=" Cream ">Cream</option>
                                                        <option value=" Desert Sky ">Desert Sky</option>
                                                        <option value=" Stone Grey ">Stone Grey</option>
                                                        <option value=" Black ">Black</option>
                                                        <option value=" Charcoal Grey ">Charcoal Grey</option>
                                                        <option value=" Red ">Red</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Cherry Royale ">Cherry Royale</option>
                                                        <option value=" Walnut High Gloss ">Walnut High Gloss
                                                        </option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" White Linen ">White Linen</option>
                                                        <option value=" Beige Linen ">Beige Linen</option>
                                                        <option value=" Metallic Cappuccino ">Metallic Cappuccino
                                                        </option>
                                                        <option value=" Italian Marble ">Italian Marble</option>
                                                        <option value=" White Matte ">White Matte</option>
                                                        <option value=" Anthracite Matte ">Anthracite Matte</option>
                                                        <option value=" Black Matte ">Black Matte</option>
                                                        <option value=" Winery Rouge ">Winery Rouge</option>
                                                        <option value=" Anthracite ">Anthracite</option>
                                                        <option value=" White Metallic ">White Metallic</option>
                                                        <option value=" White ">White</option>
                                                        <option value=" Macchiato ">Macchiato</option>
                                                        <option value=" Titan ">Titan</option>
                                                    </optgroup>

                                                    <optgroup label="Melamine Boards">
                                                        <option value=" Lancaster Oak ">Lancaster Oak</option>
                                                        <option value=" Carolina Cedar ">Carolina Cedar</option>
                                                        <option value=" Nappa oak ">Nappa Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Savannah ">Savannah</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Balsa "> Balsa</option>
                                                        <option value=" Espirito ">Espirito</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Glaston Berry ">Glaston Berry</option>
                                                        <option value=" Jackson Hickory ">Jackson Hickory</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Alaskan Cherry ">Alaskan Cherry</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Cherry Royal ">Cherry Royal</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" Royal Mahogany ">Royal Mahogany</option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Veneered Chipoard">
                                                        <option value=" American Walnut ">American Walnut</option>
                                                        <option value=" Cherry ">Cherry</option>
                                                        <option value=" Crown Mahogany ">Crown Mahogany</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maple ">Maple</option>
                                                        <option value=" Okoume ">Okoume</option>
                                                        <option value=" Pine ">Pine</option>
                                                        <option value=" Pink beech ">Pink beech</option>
                                                        <option value=" Red Oak ">Red Oak</option>
                                                        <option value=" Rosewood ">Rosewood</option>
                                                        <option value=" Sapele ">Sapele</option>
                                                        <option value=" White Beech ">White Beech</option>
                                                        <option value=" White Oak ">White Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Foil Boards">
                                                        <option value=" Foil Boards ">Foil Boards</option>
                                                        <option value=" Italian Walnut ">Italian Walnut</option>
                                                        <option value=" Black Oak ">Black Oak</option>
                                                        <option value=" Black Cherry ">Black Cherry</option>
                                                        <option value=" Cosmos Pecan ">Cosmos Pecan</option>
                                                        <option value=" Lake City Oak ">Lake City Oak</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maluti Walnut ">Maluti Walnut</option>
                                                        <option value=" Pecan / Ironwood ">Pecan / Ironwood</option>
                                                        <option value=" Redwood ">Redwood</option>
                                                        <option value=" July Beech ">July Beech</option>
                                                    </optgroup>

                                                    <optgroup label="Moisture Resitant Boards">
                                                        <option
                                                            value="High Moisture Resistant Melamine Chip Board (HMR)">
                                                            High Moisture Resistant Melamine Chip Board (HMR)
                                                        </option>
                                                        <option value="High Moisture Resistant MDF (HMR-MDF)">High
                                                            Moisture Resistant MDF (HMR-MDF)</option>
                                                    </optgroup>


                                                    <optgroup label="Laminate Sheets">
                                                        <option value="Brown Coffee">Brown Coffee</option>
                                                        <option value="Venetian Gold">Venetian Gold</option>
                                                        <option value="Bianco Frost">Bianco Frost</option>
                                                        <option value="Almond Grey">Almond Grey</option>
                                                        <option value="Roman Grey">Roman Grey</option>
                                                        <option value="Copenhagen">Copenhagen</option>
                                                        <option value="Black Forest">Black Forest</option>
                                                        <option value="Titanium">Titanium</option>
                                                        <option value="Brushed Aluminium">Brushed Aluminium</option>
                                                        <option value="Rose Gold">Rose Gold</option>
                                                    </optgroup>
                                                </select>

                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" class="inputLength" name="length16" placeholder="0"
                                                    maxlength="4" tabindex="22">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" class="inputWidth" name="width16" placeholder="0"
                                                    maxlength="4" tabindex="23">
                                            </td>

                                            <td class="column5" id="column"><input id="input" name="quantity16"
                                                    placeholder="0" maxlength="4" tabindex="24"></td>
                                            <td class="column11" id="column">
                                                <select name="Grain16">
                                                    <option value="Grain">X</option>
                                                    <option value="No Grain">No Grain</option>
                                                </select>
                                            </td>
                                            <td class="column6" id="column">
                                                <select name="edgelength16" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth16" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <th class="column10" id="column">
                                                <select name="potholes16" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </th>

                                            <th class="column8" id="column">
                                                <select name="edgematerial16" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="0.4">0.4</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                </select>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td class="column1" id="column">17</td>
                                            <td class="column2" id="column">
                                                <select name="boardcolor17" class="boardcolors">
                                                    <option label="Select">Select</option>
                                                    <optgroup label="High Gloss Boards">
                                                        <option value="Mirror Board">Mirror Board</option>
                                                        <option value="Gold Acrylic">Gold Acrylic</option>
                                                        <option value="Copper">Copper</option>
                                                        <option value=" Iceland White ">Iceland White</option>
                                                        <option value=" Cream ">Cream</option>
                                                        <option value=" Desert Sky ">Desert Sky</option>
                                                        <option value=" Stone Grey ">Stone Grey</option>
                                                        <option value=" Black ">Black</option>
                                                        <option value=" Charcoal Grey ">Charcoal Grey</option>
                                                        <option value=" Red ">Red</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Cherry Royale ">Cherry Royale</option>
                                                        <option value=" Walnut High Gloss ">Walnut High Gloss
                                                        </option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" White Linen ">White Linen</option>
                                                        <option value=" Beige Linen ">Beige Linen</option>
                                                        <option value=" Metallic Cappuccino ">Metallic Cappuccino
                                                        </option>
                                                        <option value=" Italian Marble ">Italian Marble</option>
                                                        <option value=" White Matte ">White Matte</option>
                                                        <option value=" Anthracite Matte ">Anthracite Matte</option>
                                                        <option value=" Black Matte ">Black Matte</option>
                                                        <option value=" Winery Rouge ">Winery Rouge</option>
                                                        <option value=" Anthracite ">Anthracite</option>
                                                        <option value=" White Metallic ">White Metallic</option>
                                                        <option value=" White ">White</option>
                                                        <option value=" Macchiato ">Macchiato</option>
                                                        <option value=" Titan ">Titan</option>
                                                    </optgroup>

                                                    <optgroup label="Melamine Boards">
                                                        <option value=" Lancaster Oak ">Lancaster Oak</option>
                                                        <option value=" Carolina Cedar ">Carolina Cedar</option>
                                                        <option value=" Nappa oak ">Nappa Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Savannah ">Savannah</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Balsa "> Balsa</option>
                                                        <option value=" Espirito ">Espirito</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Glaston Berry ">Glaston Berry</option>
                                                        <option value=" Jackson Hickory ">Jackson Hickory</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Alaskan Cherry ">Alaskan Cherry</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Cherry Royal ">Cherry Royal</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" Royal Mahogany ">Royal Mahogany</option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Veneered Chipoard">
                                                        <option value=" American Walnut ">American Walnut</option>
                                                        <option value=" Cherry ">Cherry</option>
                                                        <option value=" Crown Mahogany ">Crown Mahogany</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maple ">Maple</option>
                                                        <option value=" Okoume ">Okoume</option>
                                                        <option value=" Pine ">Pine</option>
                                                        <option value=" Pink beech ">Pink beech</option>
                                                        <option value=" Red Oak ">Red Oak</option>
                                                        <option value=" Rosewood ">Rosewood</option>
                                                        <option value=" Sapele ">Sapele</option>
                                                        <option value=" White Beech ">White Beech</option>
                                                        <option value=" White Oak ">White Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Foil Boards">
                                                        <option value=" Foil Boards ">Foil Boards</option>
                                                        <option value=" Italian Walnut ">Italian Walnut</option>
                                                        <option value=" Black Oak ">Black Oak</option>
                                                        <option value=" Black Cherry ">Black Cherry</option>
                                                        <option value=" Cosmos Pecan ">Cosmos Pecan</option>
                                                        <option value=" Lake City Oak ">Lake City Oak</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maluti Walnut ">Maluti Walnut</option>
                                                        <option value=" Pecan / Ironwood ">Pecan / Ironwood</option>
                                                        <option value=" Redwood ">Redwood</option>
                                                        <option value=" July Beech ">July Beech</option>
                                                    </optgroup>

                                                    <optgroup label="Moisture Resitant Boards">
                                                        <option
                                                            value="High Moisture Resistant Melamine Chip Board (HMR)">
                                                            High Moisture Resistant Melamine Chip Board (HMR)
                                                        </option>
                                                        <option value="High Moisture Resistant MDF (HMR-MDF)">High
                                                            Moisture Resistant MDF (HMR-MDF)</option>
                                                    </optgroup>


                                                    <optgroup label="Laminate Sheets">
                                                        <option value="Brown Coffee">Brown Coffee</option>
                                                        <option value="Venetian Gold">Venetian Gold</option>
                                                        <option value="Bianco Frost">Bianco Frost</option>
                                                        <option value="Almond Grey">Almond Grey</option>
                                                        <option value="Roman Grey">Roman Grey</option>
                                                        <option value="Copenhagen">Copenhagen</option>
                                                        <option value="Black Forest">Black Forest</option>
                                                        <option value="Titanium">Titanium</option>
                                                        <option value="Brushed Aluminium">Brushed Aluminium</option>
                                                        <option value="Rose Gold">Rose Gold</option>
                                                    </optgroup>
                                                </select>

                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" class="inputLength" name="length17" placeholder="0"
                                                    maxlength="4" tabindex="22">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" class="inputWidth" name="width17" placeholder="0"
                                                    maxlength="4" tabindex="23">
                                            </td>

                                            <td class="column5" id="column"><input id="input" name="quantity17"
                                                    placeholder="0" maxlength="4" tabindex="24"></td>
                                            <td class="column11" id="column">
                                                <select name="Grain17">
                                                    <option value="Grain">X</option>
                                                    <option value="No Grain">No Grain</option>
                                                </select>
                                            </td>
                                            <td class="column6" id="column">
                                                <select name="edgelength17" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth17" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <th class="column10" id="column">
                                                <select name="potholes17" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </th>

                                            <th class="column8" id="column">
                                                <select name="edgematerial17" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="0.4">0.4</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                </select>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td class="column1" id="column">18</td>
                                            <td class="column2" id="column">
                                                <select name="boardcolor18" class="boardcolors">
                                                    <option label="Select">Select</option>
                                                    <optgroup label="High Gloss Boards">
                                                        <option value="Mirror Board">Mirror Board</option>
                                                        <option value="Gold Acrylic">Gold Acrylic</option>
                                                        <option value="Copper">Copper</option>
                                                        <option value=" Iceland White ">Iceland White</option>
                                                        <option value=" Cream ">Cream</option>
                                                        <option value=" Desert Sky ">Desert Sky</option>
                                                        <option value=" Stone Grey ">Stone Grey</option>
                                                        <option value=" Black ">Black</option>
                                                        <option value=" Charcoal Grey ">Charcoal Grey</option>
                                                        <option value=" Red ">Red</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Cherry Royale ">Cherry Royale</option>
                                                        <option value=" Walnut High Gloss ">Walnut High Gloss
                                                        </option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" White Linen ">White Linen</option>
                                                        <option value=" Beige Linen ">Beige Linen</option>
                                                        <option value=" Metallic Cappuccino ">Metallic Cappuccino
                                                        </option>
                                                        <option value=" Italian Marble ">Italian Marble</option>
                                                        <option value=" White Matte ">White Matte</option>
                                                        <option value=" Anthracite Matte ">Anthracite Matte</option>
                                                        <option value=" Black Matte ">Black Matte</option>
                                                        <option value=" Winery Rouge ">Winery Rouge</option>
                                                        <option value=" Anthracite ">Anthracite</option>
                                                        <option value=" White Metallic ">White Metallic</option>
                                                        <option value=" White ">White</option>
                                                        <option value=" Macchiato ">Macchiato</option>
                                                        <option value=" Titan ">Titan</option>
                                                    </optgroup>

                                                    <optgroup label="Melamine Boards">
                                                        <option value=" Lancaster Oak ">Lancaster Oak</option>
                                                        <option value=" Carolina Cedar ">Carolina Cedar</option>
                                                        <option value=" Nappa oak ">Nappa Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Savannah ">Savannah</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Balsa "> Balsa</option>
                                                        <option value=" Espirito ">Espirito</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Glaston Berry ">Glaston Berry</option>
                                                        <option value=" Jackson Hickory ">Jackson Hickory</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Alaskan Cherry ">Alaskan Cherry</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Cherry Royal ">Cherry Royal</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" Royal Mahogany ">Royal Mahogany</option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Veneered Chipoard">
                                                        <option value=" American Walnut ">American Walnut</option>
                                                        <option value=" Cherry ">Cherry</option>
                                                        <option value=" Crown Mahogany ">Crown Mahogany</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maple ">Maple</option>
                                                        <option value=" Okoume ">Okoume</option>
                                                        <option value=" Pine ">Pine</option>
                                                        <option value=" Pink beech ">Pink beech</option>
                                                        <option value=" Red Oak ">Red Oak</option>
                                                        <option value=" Rosewood ">Rosewood</option>
                                                        <option value=" Sapele ">Sapele</option>
                                                        <option value=" White Beech ">White Beech</option>
                                                        <option value=" White Oak ">White Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Foil Boards">
                                                        <option value=" Foil Boards ">Foil Boards</option>
                                                        <option value=" Italian Walnut ">Italian Walnut</option>
                                                        <option value=" Black Oak ">Black Oak</option>
                                                        <option value=" Black Cherry ">Black Cherry</option>
                                                        <option value=" Cosmos Pecan ">Cosmos Pecan</option>
                                                        <option value=" Lake City Oak ">Lake City Oak</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maluti Walnut ">Maluti Walnut</option>
                                                        <option value=" Pecan / Ironwood ">Pecan / Ironwood</option>
                                                        <option value=" Redwood ">Redwood</option>
                                                        <option value=" July Beech ">July Beech</option>
                                                    </optgroup>

                                                    <optgroup label="Moisture Resitant Boards">
                                                        <option
                                                            value="High Moisture Resistant Melamine Chip Board (HMR)">
                                                            High Moisture Resistant Melamine Chip Board (HMR)
                                                        </option>
                                                        <option value="High Moisture Resistant MDF (HMR-MDF)">High
                                                            Moisture Resistant MDF (HMR-MDF)</option>
                                                    </optgroup>


                                                    <optgroup label="Laminate Sheets">
                                                        <option value="Brown Coffee">Brown Coffee</option>
                                                        <option value="Venetian Gold">Venetian Gold</option>
                                                        <option value="Bianco Frost">Bianco Frost</option>
                                                        <option value="Almond Grey">Almond Grey</option>
                                                        <option value="Roman Grey">Roman Grey</option>
                                                        <option value="Copenhagen">Copenhagen</option>
                                                        <option value="Black Forest">Black Forest</option>
                                                        <option value="Titanium">Titanium</option>
                                                        <option value="Brushed Aluminium">Brushed Aluminium</option>
                                                        <option value="Rose Gold">Rose Gold</option>
                                                    </optgroup>
                                                </select>

                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" class="inputLength" name="length18" placeholder="0"
                                                    maxlength="4" tabindex="22">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" class="inputWidth" name="width18" placeholder="0"
                                                    maxlength="4" tabindex="23">
                                            </td>

                                            <td class="column5" id="column"><input id="input" name="quantity18"
                                                    placeholder="0" maxlength="4" tabindex="24"></td>
                                            <td class="column11" id="column">
                                                <select name="Grain18">
                                                    <option value="Grain">X</option>
                                                    <option value="No Grain">No Grain</option>
                                                </select>
                                            </td>
                                            <td class="column6" id="column">
                                                <select name="edgelength18" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth18" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <th class="column10" id="column">
                                                <select name="potholes18" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </th>

                                            <th class="column8" id="column">
                                                <select name="edgematerial18" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="0.4">0.4</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                </select>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td class="column1" id="column">19</td>
                                            <td class="column2" id="column">
                                                <select name="boardcolor19" class="boardcolors">
                                                    <option label="Select">Select</option>
                                                    <optgroup label="High Gloss Boards">
                                                        <option value="Mirror Board">Mirror Board</option>
                                                        <option value="Gold Acrylic">Gold Acrylic</option>
                                                        <option value="Copper">Copper</option>
                                                        <option value=" Iceland White ">Iceland White</option>
                                                        <option value=" Cream ">Cream</option>
                                                        <option value=" Desert Sky ">Desert Sky</option>
                                                        <option value=" Stone Grey ">Stone Grey</option>
                                                        <option value=" Black ">Black</option>
                                                        <option value=" Charcoal Grey ">Charcoal Grey</option>
                                                        <option value=" Red ">Red</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Cherry Royale ">Cherry Royale</option>
                                                        <option value=" Walnut High Gloss ">Walnut High Gloss
                                                        </option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" White Linen ">White Linen</option>
                                                        <option value=" Beige Linen ">Beige Linen</option>
                                                        <option value=" Metallic Cappuccino ">Metallic Cappuccino
                                                        </option>
                                                        <option value=" Italian Marble ">Italian Marble</option>
                                                        <option value=" White Matte ">White Matte</option>
                                                        <option value=" Anthracite Matte ">Anthracite Matte</option>
                                                        <option value=" Black Matte ">Black Matte</option>
                                                        <option value=" Winery Rouge ">Winery Rouge</option>
                                                        <option value=" Anthracite ">Anthracite</option>
                                                        <option value=" White Metallic ">White Metallic</option>
                                                        <option value=" White ">White</option>
                                                        <option value=" Macchiato ">Macchiato</option>
                                                        <option value=" Titan ">Titan</option>
                                                    </optgroup>

                                                    <optgroup label="Melamine Boards">
                                                        <option value=" Lancaster Oak ">Lancaster Oak</option>
                                                        <option value=" Carolina Cedar ">Carolina Cedar</option>
                                                        <option value=" Nappa oak ">Nappa Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Savannah ">Savannah</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Balsa "> Balsa</option>
                                                        <option value=" Espirito ">Espirito</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Glaston Berry ">Glaston Berry</option>
                                                        <option value=" Jackson Hickory ">Jackson Hickory</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Alaskan Cherry ">Alaskan Cherry</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Cherry Royal ">Cherry Royal</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" Royal Mahogany ">Royal Mahogany</option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Veneered Chipoard">
                                                        <option value=" American Walnut ">American Walnut</option>
                                                        <option value=" Cherry ">Cherry</option>
                                                        <option value=" Crown Mahogany ">Crown Mahogany</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maple ">Maple</option>
                                                        <option value=" Okoume ">Okoume</option>
                                                        <option value=" Pine ">Pine</option>
                                                        <option value=" Pink beech ">Pink beech</option>
                                                        <option value=" Red Oak ">Red Oak</option>
                                                        <option value=" Rosewood ">Rosewood</option>
                                                        <option value=" Sapele ">Sapele</option>
                                                        <option value=" White Beech ">White Beech</option>
                                                        <option value=" White Oak ">White Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Foil Boards">
                                                        <option value=" Foil Boards ">Foil Boards</option>
                                                        <option value=" Italian Walnut ">Italian Walnut</option>
                                                        <option value=" Black Oak ">Black Oak</option>
                                                        <option value=" Black Cherry ">Black Cherry</option>
                                                        <option value=" Cosmos Pecan ">Cosmos Pecan</option>
                                                        <option value=" Lake City Oak ">Lake City Oak</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maluti Walnut ">Maluti Walnut</option>
                                                        <option value=" Pecan / Ironwood ">Pecan / Ironwood</option>
                                                        <option value=" Redwood ">Redwood</option>
                                                        <option value=" July Beech ">July Beech</option>
                                                    </optgroup>

                                                    <optgroup label="Moisture Resitant Boards">
                                                        <option
                                                            value="High Moisture Resistant Melamine Chip Board (HMR)">
                                                            High Moisture Resistant Melamine Chip Board (HMR)
                                                        </option>
                                                        <option value="High Moisture Resistant MDF (HMR-MDF)">High
                                                            Moisture Resistant MDF (HMR-MDF)</option>
                                                    </optgroup>


                                                    <optgroup label="Laminate Sheets">
                                                        <option value="Brown Coffee">Brown Coffee</option>
                                                        <option value="Venetian Gold">Venetian Gold</option>
                                                        <option value="Bianco Frost">Bianco Frost</option>
                                                        <option value="Almond Grey">Almond Grey</option>
                                                        <option value="Roman Grey">Roman Grey</option>
                                                        <option value="Copenhagen">Copenhagen</option>
                                                        <option value="Black Forest">Black Forest</option>
                                                        <option value="Titanium">Titanium</option>
                                                        <option value="Brushed Aluminium">Brushed Aluminium</option>
                                                        <option value="Rose Gold">Rose Gold</option>
                                                    </optgroup>
                                                </select>

                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" class="inputLength" name="length19" placeholder="0"
                                                    maxlength="4" tabindex="22">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" class="inputWidth" name="width19" placeholder="0"
                                                    maxlength="4" tabindex="23">
                                            </td>

                                            <td class="column5" id="column"><input id="input" name="quantity19"
                                                    placeholder="0" maxlength="4" tabindex="24"></td>
                                            <td class="column11" id="column">
                                                <select name="Grain19">
                                                    <option value="Grain">X</option>
                                                    <option value="No Grain">No Grain</option>
                                                </select>
                                            </td>
                                            <td class="column6" id="column">
                                                <select name="edgelength19" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth19" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <th class="column10" id="column">
                                                <select name="potholes19" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </th>

                                            <th class="column8" id="column">
                                                <select name="edgematerial19" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="0.4">0.4</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                </select>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td class="column1" id="column">20</td>
                                            <td class="column2" id="column">
                                                <select name="boardcolor20" class="boardcolors">
                                                    <option label="Select">Select</option>
                                                    <optgroup label="High Gloss Boards">
                                                        <option value="Mirror Board">Mirror Board</option>
                                                        <option value="Gold Acrylic">Gold Acrylic</option>
                                                        <option value="Copper">Copper</option>
                                                        <option value=" Iceland White ">Iceland White</option>
                                                        <option value=" Cream ">Cream</option>
                                                        <option value=" Desert Sky ">Desert Sky</option>
                                                        <option value=" Stone Grey ">Stone Grey</option>
                                                        <option value=" Black ">Black</option>
                                                        <option value=" Charcoal Grey ">Charcoal Grey</option>
                                                        <option value=" Red ">Red</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Cherry Royale ">Cherry Royale</option>
                                                        <option value=" Walnut High Gloss ">Walnut High Gloss
                                                        </option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" White Linen ">White Linen</option>
                                                        <option value=" Beige Linen ">Beige Linen</option>
                                                        <option value=" Metallic Cappuccino ">Metallic Cappuccino
                                                        </option>
                                                        <option value=" Italian Marble ">Italian Marble</option>
                                                        <option value=" White Matte ">White Matte</option>
                                                        <option value=" Anthracite Matte ">Anthracite Matte</option>
                                                        <option value=" Black Matte ">Black Matte</option>
                                                        <option value=" Winery Rouge ">Winery Rouge</option>
                                                        <option value=" Anthracite ">Anthracite</option>
                                                        <option value=" White Metallic ">White Metallic</option>
                                                        <option value=" White ">White</option>
                                                        <option value=" Macchiato ">Macchiato</option>
                                                        <option value=" Titan ">Titan</option>
                                                    </optgroup>

                                                    <optgroup label="Melamine Boards">
                                                        <option value=" Lancaster Oak ">Lancaster Oak</option>
                                                        <option value=" Carolina Cedar ">Carolina Cedar</option>
                                                        <option value=" Nappa oak ">Nappa Oak</option>
                                                        <option value=" Dakota Oak ">Dakota Oak</option>
                                                        <option value=" Savannah ">Savannah</option>
                                                        <option value=" Norwegian Birch ">Norwegian Birch</option>
                                                        <option value=" Balsa "> Balsa</option>
                                                        <option value=" Espirito ">Espirito</option>
                                                        <option value=" Washed Oak ">Washed Oak</option>
                                                        <option value=" Glaston Berry ">Glaston Berry</option>
                                                        <option value=" Jackson Hickory ">Jackson Hickory</option>
                                                        <option value=" Lumber Ash ">Lumber Ash</option>
                                                        <option value=" Larese ">Larese</option>
                                                        <option value=" Alaskan Cherry ">Alaskan Cherry</option>
                                                        <option value=" Marula ">Marula</option>
                                                        <option value=" Cherry Royal ">Cherry Royal</option>
                                                        <option value=" Hickory Oak ">Hickory Oak</option>
                                                        <option value=" Royal Mahogany ">Royal Mahogany</option>
                                                        <option value=" Liberty Oak ">Liberty Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Veneered Chipoard">
                                                        <option value=" American Walnut ">American Walnut</option>
                                                        <option value=" Cherry ">Cherry</option>
                                                        <option value=" Crown Mahogany ">Crown Mahogany</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maple ">Maple</option>
                                                        <option value=" Okoume ">Okoume</option>
                                                        <option value=" Pine ">Pine</option>
                                                        <option value=" Pink beech ">Pink beech</option>
                                                        <option value=" Red Oak ">Red Oak</option>
                                                        <option value=" Rosewood ">Rosewood</option>
                                                        <option value=" Sapele ">Sapele</option>
                                                        <option value=" White Beech ">White Beech</option>
                                                        <option value=" White Oak ">White Oak</option>
                                                    </optgroup>

                                                    <optgroup label="Foil Boards">
                                                        <option value=" Foil Boards ">Foil Boards</option>
                                                        <option value=" Italian Walnut ">Italian Walnut</option>
                                                        <option value=" Black Oak ">Black Oak</option>
                                                        <option value=" Black Cherry ">Black Cherry</option>
                                                        <option value=" Cosmos Pecan ">Cosmos Pecan</option>
                                                        <option value=" Lake City Oak ">Lake City Oak</option>
                                                        <option value=" Kiaat ">Kiaat</option>
                                                        <option value=" Maluti Walnut ">Maluti Walnut</option>
                                                        <option value=" Pecan / Ironwood ">Pecan / Ironwood</option>
                                                        <option value=" Redwood ">Redwood</option>
                                                        <option value=" July Beech ">July Beech</option>
                                                    </optgroup>

                                                    <optgroup label="Moisture Resitant Boards">
                                                        <option
                                                            value="High Moisture Resistant Melamine Chip Board (HMR)">
                                                            High Moisture Resistant Melamine Chip Board (HMR)
                                                        </option>
                                                        <option value="High Moisture Resistant MDF (HMR-MDF)">High
                                                            Moisture Resistant MDF (HMR-MDF)</option>
                                                    </optgroup>


                                                    <optgroup label="Laminate Sheets">
                                                        <option value="Brown Coffee">Brown Coffee</option>
                                                        <option value="Venetian Gold">Venetian Gold</option>
                                                        <option value="Bianco Frost">Bianco Frost</option>
                                                        <option value="Almond Grey">Almond Grey</option>
                                                        <option value="Roman Grey">Roman Grey</option>
                                                        <option value="Copenhagen">Copenhagen</option>
                                                        <option value="Black Forest">Black Forest</option>
                                                        <option value="Titanium">Titanium</option>
                                                        <option value="Brushed Aluminium">Brushed Aluminium</option>
                                                        <option value="Rose Gold">Rose Gold</option>
                                                    </optgroup>
                                                </select>

                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" class="inputLength" name="length20" placeholder="0"
                                                    maxlength="4" tabindex="22">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" class="inputWidth" name="width20" placeholder="0"
                                                    maxlength="4" tabindex="23">
                                            </td>

                                            <td class="column5" id="column"><input id="input" name="quantity20"
                                                    placeholder="0" maxlength="4" tabindex="24"></td>
                                            <td class="column11" id="column">
                                                <select name="Grain20">
                                                    <option value="Grain">X</option>
                                                    <option value="No Grain">No Grain</option>
                                                </select>
                                            </td>
                                            <td class="column6" id="column">
                                                <select name="edgelength20" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth20" class="value0">
                                                <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <th class="column10" id="column">
                                                <select name="potholes20" class="value0">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </th>

                                            <th class="column8" id="column">
                                                <select name="edgematerial20" class="value0">
                                                    <option value="0">0</option>
                                                    <option value="0.4">0.4</option>
                                                    <option value="1">1</option>
                                                    <option value="1.5">1.5</option>
                                                </select>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <center>
                            <h1 class="masonite-title" id="masonite-title"
                                style="font-size: 18px; text-decoration:underline">Masonite
                            </h1>
                        </center>

                        <p class="row-example">Specify masonite color and measurements in the below table. See first row
                            example.
                        </p>

                        <div class="wrap-table200" id="table2">
                            <div class="table100">
                                <table>
                                    <thead>
                                        <tr class="table100-head">
                                            <th class="column1" id="column" name="columnHeading">Index</th>
                                            <th class="column11" id="column">Board Color</th>
                                            <th class="column3" id="column">Length<br>(mm)</th>
                                            <th class="column4" id="column">Width<br>(mm)</th>
                                            <th class="column5" id="column">Quantity</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="example-row">
                                            <td class="column1" id="column" name="column1"><span
                                                    class="example">0</span></td>

                                            <td class="column11" id="column">Plain</td>

                                            <td class="column3" id="column"><span class="example">1280</span></td>
                                            <td class="column4" id="column"><span class="example">1460</span></td>
                                            <td class="column5" id="column"><span class="example">6</span></td>


                                        </tr>

                                        <tr>
                                            <td class="column1" id="column" name="column1">1</td>

                                            <td class="column11" id="column">
                                                <select name="masonite-colour21" class="masonite-select" id="masonite-select">
                                                    <option value="Plain">Plain</option>
                                                    <option value="White">White</option>
                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" name="length21" placeholder="0" maxlength="4"
                                                    tabindex="61">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" name="width21" placeholder="0" maxlength="4"
                                                    tabindex="62">
                                            </td>
                                            <td class="column5" id="column"><input id="input" name="quantity21"
                                                    placeholder="0" maxlength="4" tabindex="63"></td>


                                        </tr>
                                        <tr>
                                            <td class="column1" id="column" name="column1">2</td>

                                            <td class="column11" id="column">
                                                <select name="masonite-colour22" class="masonite-select" id="masonite-select">
                                                    <option value="Plain">Plain</option>
                                                    <option value="White">White</option>
                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" name="length22" placeholder="0" maxlength="4"
                                                    tabindex="64">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" name="width22" placeholder="0" maxlength="4"
                                                    tabindex="65">
                                            </td>
                                            <td class="column5" id="column"><input id="input" name="quantity22"
                                                    placeholder="0" maxlength="4" tabindex="66"></td>

                                        </tr>

                                        <tr>
                                            <td class="column1" id="column" name="column1">3</td>

                                            <td class="column11" id="column">
                                                <select name="masonite-colour23" class="masonite-select" id="masonite-select">
                                                    <option value="Plain">Plain</option>
                                                    <option value="White">White</option>
                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" name="length23" placeholder="0" maxlength="4"
                                                    tabindex="67">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" name="width23" placeholder="0" maxlength="4"
                                                    tabindex="68">
                                            </td>
                                            <td class="column5" id="column"><input id="input" name="quantity23"
                                                    placeholder="0" maxlength="4" tabindex="69">
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="column1" id="column" name="column1">4</td>

                                            <td class="column11" id="column">
                                                <select name="masonite-colour24" class="masonite-select" id="masonite-select">
                                                    <option value="Plain">Plain</option>
                                                    <option value="White">White</option>
                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" name="length24" placeholder="0" maxlength="4"
                                                    tabindex="70">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" name="width24" placeholder="0" maxlength="4"
                                                    tabindex="71">
                                            </td>
                                            <td class="column5" id="column"><input id="input" name="quantity24"
                                                    placeholder="0" maxlength="4" tabindex="72"></td>


                                        </tr>
                                        <tr>
                                            <td class="column1" id="column" name="column1">5</td>

                                            <td class="column11" id="column">
                                                <select name="masonite-colour25" class="masonite-select" id="masonite-select">
                                                    <option value="Plain">Plain</option>
                                                    <option value="White">White</option>
                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" name="length25" placeholder="0" maxlength="4"
                                                    tabindex="73">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" name="width25" placeholder="0" maxlength="4"
                                                    tabindex="74">
                                            </td>
                                            <td class="column5" id="column"><input id="input" name="quantity25"
                                                    placeholder="0" maxlength="4" tabindex="75"></td>


                                        </tr>
                                        <tr>
                                            <td class="column1" id="column" name="column1">6</td>

                                            <td class="column11" id="column">
                                                <select name="masonite-colour26" class="masonite-select" id="masonite-select">
                                                    <option value="Plain">Plain</option>
                                                    <option value="White">White</option>
                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" name="length26" placeholder="0" maxlength="4"
                                                    tabindex="76">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" name="width26" placeholder="0" maxlength="4"
                                                    tabindex="77">
                                            </td>
                                            <td class="column5" id="column"><input id="input" name="quantity26"
                                                    placeholder="0" maxlength="4" tabindex="78"></td>

                                        </tr>
                                        <tr>
                                            <td class="column1" id="column" name="column1">7</td>

                                            <td class="column11" id="column">
                                                <select name="masonite-colour27" class="masonite-select" id="masonite-select">
                                                    <option value="Plain">Plain</option>
                                                    <option value="White">White</option>
                                                </select>
                                            </td>

                                            <td class="column3" id="column">
                                                <input id="input" name="length27" placeholder="0" maxlength="4"
                                                    tabindex="79">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" name="width27" placeholder="0" maxlength="4"
                                                    tabindex="80">
                                            </td>
                                            <td class="column5" id="column"><input id="input" name="quantity27"
                                                    placeholder="0" maxlength="4" tabindex="81"></td>

                                        </tr>

                                        <tr>
                                            <td class="column1" id="column" name="column1">8</td>

                                            <td class="column11" id="column">
                                                <select name="masonite-colour28" class="masonite-select">
                                                    <option value="Plain">Plain</option>
                                                    <option value="White">White</option>
                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" name="length28" placeholder="0" maxlength="4"
                                                    tabindex="82">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" name="width28" placeholder="0" maxlength="4"
                                                    tabindex="83">
                                            </td>
                                            <td class="column5" id="column"><input id="input" name="quantity28"
                                                    placeholder="0" maxlength="4" tabindex="84"></td>


                                        </tr>
                                        <tr>
                                            <td class="column1" id="column" name="column1">9</td>

                                            <td class="column11" id="column">
                                                <select name="masonite-colour29" class="masonite-select">
                                                    <option value="Plain">Plain</option>
                                                    <option value="White">White</option>
                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" name="length29" placeholder="0" maxlength="4"
                                                    tabindex="85">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" name="width29" placeholder="0" maxlength="4"
                                                    tabindex="86">
                                            </td>
                                            <td class="column5" id="column"><input id="input" name="quantity29"
                                                    placeholder="0" maxlength="4" tabindex="87"></td>


                                        </tr>
                                        <tr>
                                            <td class="column1" id="column" name="column1">10</td>

                                            <td class="column11" id="column">
                                                <select name="masonite-colour30" class="masonite-select">
                                                    <option value="Plain">Plain</option>
                                                    <option value="White">White</option>
                                                </select>

                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" name="length30" placeholder="0" maxlength="4"
                                                    tabindex="88">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" name="width30" placeholder="0" maxlength="4"
                                                    tabindex="89">
                                            </td>
                                            <td class="column5" id="column"><input id="input" name="quantity30"
                                                    placeholder="0" maxlength="4" tabindex="90">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="column1" id="column" name="column1">11</td>

                                            <td class="column11" id="column">
                                                <select name="masonite-colour31" class="masonite-select">
                                                    <option value="Plain">Plain</option>
                                                    <option value="White">White</option>
                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" name="length31" placeholder="0" maxlength="4"
                                                    tabindex="91">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" name="width31" placeholder="0" maxlength="4"
                                                    tabindex="92">
                                            </td>
                                            <td class="column5" id="column"><input id="input" name="quantity31"
                                                    placeholder="0" maxlength="4" tabindex="93"></td>

                                        </tr>
                                        <tr>
                                            <td class="column1" id="column" name="column1">12</td>

                                            <td class="column11" id="column">
                                                <select name="masonite-colour32" class="masonite-select">
                                                    <option value="Plain">Plain</option>
                                                    <option value="White">White</option>
                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" name="length32" placeholder="0" maxlength="4"
                                                    tabindex="94">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" name="width32" placeholder="0" maxlength="4"
                                                    tabindex="95">
                                            </td>
                                            <td class="column5" id="column"><input id="input" name="quantity32"
                                                    placeholder="0" maxlength="4" tabindex="96"></td>


                                        </tr>
                                        <tr>
                                            <td class="column1" id="column" name="column1">13</td>

                                            <td class="column11" id="column">
                                                <select name="masonite-colour33" class="masonite-select">
                                                    <option value="Plain">Plain</option>
                                                    <option value="White">White</option>
                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" name="length33" placeholder="0" maxlength="4"
                                                    tabindex="97">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" name="width33" placeholder="0" maxlength="4"
                                                    tabindex="98">
                                            </td>
                                            <td class="column5" id="column"><input id="input" name="quantity33"
                                                    placeholder="0" maxlength="4" tabindex="99"></td>

                                        </tr>

                                        <tr>
                                            <td class="column1" id="column" name="column1">14</td>

                                            <td class="column11" id="column">
                                                <select name="masonite-colour34" class="masonite-select">
                                                    <option value="Plain">Plain</option>
                                                    <option value="White">White</option>
                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" name="length34" placeholder="0" maxlength="4"
                                                    tabindex="100">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" name="width34" placeholder="0" maxlength="4"
                                                    tabindex="101">
                                            </td>
                                            <td class="column5" id="column"><input id="input" name="quantity34"
                                                    placeholder="0" maxlength="4" tabindex="102"></td>

                                        </tr>

                                        <tr>
                                            <td class="column1" id="column" name="column1">15</td>

                                            <td class="column11" id="column">
                                                <select name="masonite-colour35" class="masonite-select">
                                                    <option value="Plain">Plain</option>
                                                    <option value="White">White</option>
                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" name="length35" placeholder="0" maxlength="4"
                                                    tabindex="103">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" name="width35" placeholder="0" maxlength="4"
                                                    tabindex="104">
                                            </td>
                                            <td class="column5" id="column"><input id="input" name="quantity35"
                                                    placeholder="0" maxlength="4" tabindex="105"></td>

                                        </tr>

                                        <tr>
                                            <td class="column1" id="column" name="column1">16</td>

                                            <td class="column11" id="column">
                                                <select name="masonite-colour36" class="masonite-select">
                                                    <option value="Plain">Plain</option>
                                                    <option value="White">White</option>
                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" name="length36" placeholder="0" maxlength="4"
                                                    tabindex="106">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" name="width36" placeholder="0" maxlength="4"
                                                    tabindex="107">
                                            </td>
                                            <td class="column5" id="column"><input id="input" name="quantity36"
                                                    placeholder="0" maxlength="4" tabindex="108"></td>

                                        </tr>

                                        <tr>
                                            <td class="column1" id="column" name="column1">17</td>

                                            <td class="column11" id="column">
                                                <select name="masonite-colour37" class="masonite-select">
                                                    <option value="Plain">Plain</option>
                                                    <option value="White">White</option>
                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" name="length37" placeholder="0" maxlength="4"
                                                    tabindex="109">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" name="width37" placeholder="0" maxlength="4"
                                                    tabindex="110">
                                            </td>
                                            <td class="column5" id="column"><input id="input" name="quantity37"
                                                    placeholder="0" maxlength="4" tabindex="111"></td>

                                        </tr>

                                        <tr>
                                            <td class="column1" id="column" name="column1">18</td>

                                            <td class="column11" id="column">
                                                <select name="masonite-colour38" class="masonite-select">
                                                    <option value="Plain">Plain</option>
                                                    <option value="White">White</option>
                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" name="length38" placeholder="0" maxlength="4"
                                                    tabindex="112">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" name="width38" placeholder="0" maxlength="4"
                                                    tabindex="113">
                                            </td>
                                            <td class="column5" id="column"><input id="input" name="quantity38"
                                                    placeholder="0" maxlength="4" tabindex="114"></td>

                                        </tr>

                                        <tr>
                                            <td class="column1" id="column" name="column1">19</td>

                                            <td class="column11" id="column">
                                                <select name="masonite-colour39" class="masonite-select">
                                                    <option value="Plain">Plain</option>
                                                    <option value="White">White</option>
                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" name="length39" placeholder="0" maxlength="4"
                                                    tabindex="115">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" name="width39" placeholder="0" maxlength="4"
                                                    tabindex="116">
                                            </td>
                                            <td class="column5" id="column"><input id="input" name="quantity39"
                                                    placeholder="0" maxlength="4" tabindex="117"></td>

                                        </tr>

                                        <tr>
                                            <td class="column1" id="column" name="column1">20</td>

                                            <td class="column11" id="column" style="background-color: white;">
                                                <select name="masonite-colour40" class="masonite-select">
                                                    <option value="Plain">Plain</option>
                                                    <option value="White">White</option>
                                                </select>
                                            </td>
                                            <td class="column3" id="column">
                                                <input id="input" name="length41" placeholder="0" maxlength="4"
                                                    tabindex="118">
                                            </td>
                                            <td class="column4" id="column">
                                                <input id="input" name="width41" placeholder="0" maxlength="4"
                                                    tabindex="119">
                                            </td>
                                            <td class="column5" id="column"><input id="input" name="quantity41"
                                                    placeholder="0" maxlength="4" tabindex="120"></td>

                                        </tr>

                                </table>
                            </div>
                        </div>


                        <div class="wrap-input100 validate-input" id="wrap-input100"
                            data-validate="Message is required">
                            <p class="messageh1" id="messageh1">Send a message</p>
                            <textarea class="input100" name="msg" id="input100"
                                placeholder="Send a message (Optional)."></textarea>
                            <span class="focus-input100"></span>
                        </div>

                        <p>
                            Please note that by submitting this form, you confirm that all information provided by you
                            is correct.

                        </p>

                        <button type="submit" id="sendbutton" class="sendbutton" value="submit">Send</button>


                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const select = document.querySelectorAll('select');

const error = document.querySelectorAll('.error')


maxNum();
foil();
hbs();
melamine();
VC();
MRB();
LaminateSheets();
next();
sendbutton();
sendForm();
sort1();
changeRowSelection();

function sendbutton() {
    document.querySelector('#sendbutton').addEventListener('click', function(e) {
        nameValidate(e);
        emailValidate(e);
        numberValidate(e);
        workNumber(e);
        homeNumber(e);
        checkBranch(e);

    });
}

function sendForm() {
    document.querySelector('#form').addEventListener('submit', function(e) {
        nameValidate(e);
        emailValidate(e);
        numberValidate(e);
        workNumber(e);
        homeNumber(e);
        checkBranch(e);
    });
}




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
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Beige+Linen.JPG";
        } else if (hbs.selectedIndex === 2) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Black.JPG";
        } else if (hbs.selectedIndex === 3) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/2b1bcac4/dms3rep/multi/Charcoal+Grey.JPG";
        } else if (hbs.selectedIndex === 4) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/import/clib/hdsgroup_co_za/dms3rep/multi/HDS_Cherry-Royale-300x300-300x300.jpg";
        } else if (hbs.selectedIndex === 5) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Cream.jpg";
        } else if (hbs.selectedIndex === 6) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/2b1bcac4/dms3rep/multi/Dakota+Oak.JPG";
        } else if (hbs.selectedIndex === 7) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Desert+Sky.jpg";
        } else if (hbs.selectedIndex === 8) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Hickory+Oak.JPG";
        } else if (hbs.selectedIndex === 9) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/f2aba0bd/dms3rep/multi/Iceland+White.JPG";
        } else if (hbs.selectedIndex === 10) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Italian+Marble.JPG";
        } else if (hbs.selectedIndex === 11) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Larese.JPG";
        } else if (hbs.selectedIndex === 12) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Liberty%2BOak.JPG";

        } else if (hbs.selectedIndex === 13) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Lumber+Ash.JPG";
        } else if (hbs.selectedIndex === 14) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Marula.jpg";
        } else if (hbs.selectedIndex === 15) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
            "https://irp-cdn.multiscreensite.com/f2aba0bd/dms3rep/multi/Metallic+Cappucino.JPG";
        } else if (hbs.selectedIndex === 16) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
            "https://irp-cdn.multiscreensite.com/f2aba0bd/dms3rep/multi/Norwegian+Birch.JPG";
        } else if (hbs.selectedIndex === 17) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Red.jpg";
        } else if (hbs.selectedIndex === 18) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Stone+Grey.JPG";
        } else if (hbs.selectedIndex === 19) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Walnut+High+Gloss.JPG";
        } else if (hbs.selectedIndex === 20) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Washed+Oak.jpg";
        } else if (hbs.selectedIndex === 21) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/White+Linen.JPG";
        } else if (hbs.selectedIndex === 22) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Anthracite+Matte.JPG";
        } else if (hbs.selectedIndex === 23) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Black+Matte.JPG";
        } else if (hbs.selectedIndex === 24) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/White+Matte.JPG";
        } else if (hbs.selectedIndex === 25) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/f2aba0bd/dms3rep/multi/Copper.JPG"
        } else if (hbs.selectedIndex === 26) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/f2aba0bd/dms3rep/multi/gold-acryl.jpg";
        } else if (hbs.selectedIndex === 27) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/f2aba0bd/dms3rep/multi/Mirror-Board.jpg";
        } else if (hbs.selectedIndex === 28) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Anthracite.JPG";
        } else if (hbs.selectedIndex === 29) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/f2aba0bd/dms3rep/multi/Macchiato.jpg";
        } else if (hbs.selectedIndex === 30) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/White.JPG";
        } else if (hbs.selectedIndex === 31) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/White+Metallic.JPG";
        } else if (hbs.selectedIndex === 32) {
            document.querySelector('.preview').style.visibility = "visible";
            document.querySelector('.preview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Winery+Rouge.JPG";
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
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Black.JPG";
        } else if (melamine.selectedIndex === 2) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/2b1bcac4/dms3rep/multi/Charcoal+Grey.JPG";
        } else if (melamine.selectedIndex === 3) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Cream.jpg";
        } else if (melamine.selectedIndex === 4) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Desert+Sky.jpg";
        } else if (melamine.selectedIndex === 5) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Iceland+White.JPG";
        } else if (melamine.selectedIndex === 6) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/f2aba0bd/import/clib/hdsgroup_co_za/dms3rep/multi/HDS_Stone_Grey_UltraMatt-700x700.jpg";
            "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Norwegian+Birch.JPG";
        } else if (melamine.selectedIndex === 7) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Beige+Linen.JPG";
        } else if (melamine.selectedIndex === 8) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Natural+Stone.JPG";
        } else if (melamine.selectedIndex === 9) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/White+Linen.JPG";
        } else if (melamine.selectedIndex === 10) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Alaskan+Cherry.JPG";
        } else if (melamine.selectedIndex === 11) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Balsa.jpg";
        } else if (melamine.selectedIndex === 12) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Carolina+Cedar.JPG";
        } else if (melamine.selectedIndex === 13) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Cherry+Royale+-+melanine.JPG";
        } else if (melamine.selectedIndex === 14) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Dakota+Oak.JPG";
        } else if (melamine.selectedIndex === 15) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Espirito.JPG";
        } else if (melamine.selectedIndex === 16) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Hickory+Oak.JPG";

        } else if (melamine.selectedIndex === 17) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Glaston+Berry.JPG";
        } else if (melamine.selectedIndex === 18) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Jackson+Hickory.JPG";
        } else if (melamine.selectedIndex === 19) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/2b1bcac4/dms3rep/multi/Lancaster+Oak.JPG";
        } else if (melamine.selectedIndex === 20) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Larese+-+Melanine.JPG";
        } else if (melamine.selectedIndex === 21) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Liberty+Oak-3036d7ee.JPG";
        } else if (melamine.selectedIndex === 22) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Lumber+Ash+-+Melamine.JPG";
        } else if (melamine.selectedIndex === 23) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Marula.jpg";
        } else if (melamine.selectedIndex === 24) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Nappa+Oak.jpg";
        } else if (melamine.selectedIndex === 25) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/2b1bcac4/dms3rep/multi/Norwegian+Birch.JPG";
        } else if (melamine.selectedIndex === 26) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Royal-Mahogany.jpg";
        } else if (melamine.selectedIndex === 27) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Savannah.JPG";
        } else if (melamine.selectedIndex === 28) {
            document.querySelector('.mbPreview').style.visibility = "visible";
            document.querySelector('.mbPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Washed+Oak+-+Melamine.JPG";
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
                "https://irp-cdn.multiscreensite.com/2b1bcac4/import/clib/hdsgroup_co_za/dms3rep/multi/Cherry-Royal-700x700.jpg";
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
            document.querySelector('.foilPreview').style.visibility = "hidden";
        } else if (foil.selectedIndex === 1) {
            document.querySelector('.foilPreview').style.visibility = "visible";
            document.querySelector('.foilPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Italian+Walnut.JPG";
        } else if (foil.selectedIndex === 2) {
            document.querySelector('.foilPreview').style.visibility = "visible";
            document.querySelector('.foilPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Black-Cherry.jpg";
        } else if (foil.selectedIndex === 3) {
            document.querySelector('.foilPreview').style.visibility = "visible";
            document.querySelector('.foilPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Black+Oak.JPG";
        } else if (foil.selectedIndex === 4) {
            document.querySelector('.foilPreview').style.visibility = "visible";
            document.querySelector('.foilPreview').src =
                "https://irp-cdn.multiscreensite.com/2b1bcac4/dms3rep/multi/Cosmos+Pecan.JPG";
        } else if (foil.selectedIndex === 5) {
            document.querySelector('.foilPreview').style.visibility = "visible";
            document.querySelector('.foilPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/July+Beech.JPG";
        } else if (foil.selectedIndex === 6) {
            document.querySelector('.foilPreview').style.visibility = "visible";
            document.querySelector('.foilPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Kiaat+-+Foil+Boards.JPG";
        } else if (foil.selectedIndex === 7) {
            document.querySelector('.foilPreview').style.visibility = "visible";
            document.querySelector('.foilPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Lake+City+Oak.JPG";
        } else if (foil.selectedIndex === 8) {
            document.querySelector('.foilPreview').style.visibility = "visible";
            document.querySelector('.foilPreview').src =
                "https://irp-cdn.multiscreensite.com/2b1bcac4/dms3rep/multi/Maluti+Walnut.JPG";
        } else if (foil.selectedIndex === 9) {
            document.querySelector('.foilPreview').style.visibility = "visible";
            document.querySelector('.foilPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Pecan+ironwood.JPG";
        } else if (foil.selectedIndex === 10) {
            document.querySelector('.foilPreview').style.visibility = "visible";
            document.querySelector('.foilPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Redwood.JPG";

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
                "https://irp-cdn.multiscreensite.com/2b1bcac4/dms3rep/multi/HMR.JPG";
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
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Brushed+Aluminium.JPG";
        } else if (LS.selectedIndex === 2) {
            document.querySelector('.LSPreview').style.visibility = "visible";
            document.querySelector('.LSPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Rose+Gold.JPG";
        } else if (LS.selectedIndex === 3) {
            document.querySelector('.LSPreview').style.visibility = "visible";
            document.querySelector('.LSPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Almond+Grey.JPG";
        } else if (LS.selectedIndex === 4) {
            document.querySelector('.LSPreview').style.visibility = "visible";
            document.querySelector('.LSPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Bianco+Frost.JPG";
        } else if (LS.selectedIndex === 5) {
            document.querySelector('.LSPreview').style.visibility = "visible";
            document.querySelector('.LSPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Black+Forest.JPG";
        } else if (LS.selectedIndex === 6) {
            document.querySelector('.LSPreview').style.visibility = "visible";
            document.querySelector('.LSPreview').src =
                "https://irp-cdn.multiscreensite.com/2b1bcac4/dms3rep/multi/Brown+Coffee.JPG";
        } else if (LS.selectedIndex === 7) {
            document.querySelector('.LSPreview').style.visibility = "visible";
            document.querySelector('.LSPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Copenhagen.JPG";
        } else if (LS.selectedIndex === 8) {
            document.querySelector('.LSPreview').style.visibility = "visible";
            document.querySelector('.LSPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Roman+Grey.JPG";
        } else if (LS.selectedIndex === 9) {
            document.querySelector('.LSPreview').style.visibility = "visible";
            document.querySelector('.LSPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Titanium.JPG";
        } else if (LS.selectedIndex === 10) {
            document.querySelector('.LSPreview').style.visibility = "visible";
            document.querySelector('.LSPreview').src =
                "https://irp-cdn.multiscreensite.com/3fe38a6c/dms3rep/multi/Venetian+Gold.JPG";

        }
    })
}


function next() {
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


function sort1() {
    var thisOption = document.querySelectorAll('boardcolors');
    var order = new Array();

    for (i = 2; i < thisOption.length; i++) {
        order[i - 2] =
            thisOption.options[i].text.toUpperCase() + "," +
            thisOption.options[i].text + "," +
            thisOption.options[i].value;
    }

    order.sort();

    for (i = 2; i < thisOption.length; i++) {
        var parts = order[i - 2].split(',');

        thisOption.options[i].text = parts[1];
        thisOption.options[i].value = parts[2];
    }
}

function changeRowSelection () {
    const selectoptions = document.querySelectorAll('#masonite-select');
    selectoptions[1].addEventListener('change', function() {
        if(selectoptions[1].selectedIndex === 1) {
            selectoptions[0].selectedIndex = 1;
        } else {
            selectoptions[0].selectedIndex = 0;
        }
    selectoptions[2].addEventListener('change', function() {
        if(selectoptions[2].selectedIndex === 1) {
            selectoptions[1].selectedIndex = 1;
        } else {
            selectoptions[1].selectedIndex = 0;
        }
    }
}


    </script>


</body>

</html>