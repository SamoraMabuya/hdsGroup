<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="{{ secure_asset('css/style.css')}}" rel="stylesheet"/>
    <script src="{{ secure_asset('js/javascript.js')}}" defer></script>

</head>

<body>
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
                                                <select name="boardcolor1" id="select">
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
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth1" class="value0">
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
                                                <select name="boardcolor2">
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
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth2" class="value0">
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
                                                <select name="boardcolor3">
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
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth3" class="value0">
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
                                                <select name="boardcolor4">
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
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth4" class="value0">
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
                                                <select name="boardcolor5">
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
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth5" class="value0">
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
                                                <select name="boardcolor6">
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
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth6" class="value0">
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
                                                <select name="boardcolor7">
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
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth7" class="value0">
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
                                                <select name="boardcolor8">
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
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth8" class="value0">
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
                                                <select name="boardcolor9">
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
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth9" class="value0">
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
                                                <select name="boardcolor10">
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
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth10" class="value0">
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
                                                <select name="boardcolor11">
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
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth11" class="value0">
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
                                                <select name="boardcolor12">
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
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth12" class="value0">
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
                                                <select name="boardcolor13">
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
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth13" class="value0">
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
                                                <select name="boardcolor14">
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
                                                <select name="boardcolor15">
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
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth15" class="value0">
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
                                                <select name="boardcolor16">
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
                                                <select name="boardcolor17">
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
                                                <select name="boardcolor18">
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
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth18" class="value0">
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
                                                <select name="boardcolor19">
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
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth19" class="value0">
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
                                                <select name="boardcolor20">
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
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="column7" id="column">
                                                <select name="edgewidth20" class="value0">
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
                                                <select name="masonite-colour21" class="masonite-select">
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
                                                <select name="masonite-colour22" class="masonite-select">
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
                                                <select name="masonite-colour23" class="masonite-select">
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
                                                <select name="masonite-colour24" class="masonite-select">
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
                                                <select name="masonite-colour25" class="masonite-select">
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
                                                <select name="masonite-colour26" class="masonite-select">
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
                                                <select name="masonite-colour27" class="masonite-select">
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
                            Please note that by subumitting this form, you confirm that all information provided by you
                            is correct.

                        </p>

                        <button type="submit" id="sendbutton" class="sendbutton" value="submit">Send</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

</script>
    


</body>

</html>
