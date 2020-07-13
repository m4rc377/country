<?php
/**
 * This list base on ISO_3166-1 on https://id.wikipedia.org/wiki/ISO_3166-1
 * Images renaming using  ISO_3166-1 Alpha-2
 * File downloder using code from - https://rasupe.com/script-php-download-gambar-dengan-curl/
 * Create by Marcell Aldhi
 */

ini_set('max_execution_time', 0); // bypass max excecution dont use on share hosting or YOU DIE
// set_time_limit(300);

$svg = false; // false using PNG
/* size 16, 24,32,48,64,96,128,256,512 */
$ukuran = '256'; // its work svg false
$pixel = $ukuran.'px'; // its work svg false
$json = '[{
    "url": "upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Afghanistan.svg/'.$pixel.'-Flag_of_Afghanistan.svg.png",
    "code": "AF",
    "images": "AF.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/a/af/Flag_of_South_Africa.svg/'.$pixel.'-Flag_of_South_Africa.svg.png",
        "code": "ZA",
        "images": "ZA.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Flag_of_the_Central_African_Republic.svg/'.$pixel.'-Flag_of_the_Central_African_Republic.svg.png",
        "code": "CF",
        "images": "CF.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/5/52/Flag_of_%C3%85land.svg/'.$pixel.'-Flag_of_%C3%85land.svg.png",
        "code": "AX",
        "images": "AX.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/3/36/Flag_of_Albania.svg/'.$pixel.'-Flag_of_Albania.svg.png",
        "code": "AL",
        "images": "AL.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/'.$pixel.'-Flag_of_Algeria.svg.png",
        "code": "DZ",
        "images": "DZ.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/'.$pixel.'-Flag_of_the_United_States.svg.png",
        "code": "US",
        "images": "US.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/1/19/Flag_of_Andorra.svg/'.$pixel.'-Flag_of_Andorra.svg.png",
        "code": "AD",
        "images": "AD.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Flag_of_Angola.svg/'.$pixel.'-Flag_of_Angola.svg.png",
        "code": "AO",
        "images": "AO.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Anguilla.svg/'.$pixel.'-Flag_of_Anguilla.svg.png",
        "code": "AI",
        "images": "AI.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Proposed_flag_of_Antarctica_%28Graham_Bartram%29.svg/'.$pixel.'-Proposed_flag_of_Antarctica_%28Graham_Bartram%29.svg.png",
        "code": "AQ",
        "images": "AQ.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/8/89/Flag_of_Antigua_and_Barbuda.svg/'.$pixel.'-Flag_of_Antigua_and_Barbuda.svg.png",
        "code": "AG",
        "images": "AG.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Flag_of_the_Netherlands_Antilles_%281986%E2%80%932010%29.svg/'.$pixel.'-Flag_of_the_Netherlands_Antilles_%281986%E2%80%932010%29.svg.png",
        "code": "AN",
        "images": "AN.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/'.$pixel.'-Flag_of_Saudi_Arabia.svg.png",
        "code": "SA",
        "images": "SA.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Flag_of_Argentina.svg/'.$pixel.'-Flag_of_Argentina.svg.png",
        "code": "AR",
        "images": "AR.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Flag_of_Armenia.svg/'.$pixel.'-Flag_of_Armenia.svg.png",
        "code": "AM",
        "images": "AM.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Aruba.svg/'.$pixel.'-Flag_of_Aruba.svg.png",
        "code": "AW",
        "images": "AW.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Flag_of_Australia.svg/'.$pixel.'-Flag_of_Australia.svg.png",
        "code": "AU",
        "images": "AU.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/4/41/Flag_of_Austria.svg/'.$pixel.'-Flag_of_Austria.svg.png",
        "code": "AT",
        "images": "AT.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/'.$pixel.'-Flag_of_Azerbaijan.svg.png",
        "code": "AZ",
        "images": "AZ.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/9/93/Flag_of_the_Bahamas.svg/'.$pixel.'-Flag_of_the_Bahamas.svg.png",
        "code": "BS",
        "images": "BS.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Bahrain.svg/'.$pixel.'-Flag_of_Bahrain.svg.png",
        "code": "BH",
        "images": "BH.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Flag_of_Bangladesh.svg/'.$pixel.'-Flag_of_Bangladesh.svg.png",
        "code": "BD",
        "images": "BD.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Flag_of_Barbados.svg/'.$pixel.'-Flag_of_Barbados.svg.png",
        "code": "BB",
        "images": "BB.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/2/20/Flag_of_the_Netherlands.svg/'.$pixel.'-Flag_of_the_Netherlands.svg.png",
        "code": "NL",
        "images": "NL.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/8/85/Flag_of_Belarus.svg/'.$pixel.'-Flag_of_Belarus.svg.png",
        "code": "BY",
        "images": "BY.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/9/92/Flag_of_Belgium_%28civil%29.svg/'.$pixel.'-Flag_of_Belgium_%28civil%29.svg.png",
        "code": "BE",
        "images": "BE.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Flag_of_Belize.svg/'.$pixel.'-Flag_of_Belize.svg.png",
        "code": "BZ",
        "images": "BZ.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Flag_of_Benin.svg/'.$pixel.'-Flag_of_Benin.svg.png",
        "code": "BJ",
        "images": "BJ.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Flag_of_Bermuda.svg/'.$pixel.'-Flag_of_Bermuda.svg.png",
        "code": "BM",
        "images": "BM.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/9/91/Flag_of_Bhutan.svg/'.$pixel.'-Flag_of_Bhutan.svg.png",
        "code": "BT",
        "images": "BT.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/4/48/Flag_of_Bolivia.svg/'.$pixel.'-Flag_of_Bolivia.svg.png",
        "code": "BO",
        "images": "BO.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Flag_of_Bosnia_and_Herzegovina.svg/'.$pixel.'-Flag_of_Bosnia_and_Herzegovina.svg.png",
        "code": "BA",
        "images": "BA.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_Botswana.svg/'.$pixel.'-Flag_of_Botswana.svg.png",
        "code": "BW",
        "images": "BW.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Flag_of_Norway.svg/'.$pixel.'-Flag_of_Norway.svg.png",
        "code": "BV",
        "images": "BV.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/'.$pixel.'-Flag_of_Brazil.svg.png",
        "code": "BR",
        "images": "BR.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Flag_of_the_United_Kingdom.svg/'.$pixel.'-Flag_of_the_United_Kingdom.svg.png",
        "code": "GB",
        "images": "GB.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Flag_of_Brunei.svg/'.$pixel.'-Flag_of_Brunei.svg.png",
        "code": "BN",
        "images": "BN.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Bulgaria.svg/'.$pixel.'-Flag_of_Bulgaria.svg.png",
        "code": "BG",
        "images": "BG.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/3/31/Flag_of_Burkina_Faso.svg/'.$pixel.'-Flag_of_Burkina_Faso.svg.png",
        "code": "BF",
        "images": "BF.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/5/50/Flag_of_Burundi.svg/'.$pixel.'-Flag_of_Burundi.svg.png",
        "code": "BI",
        "images": "BI.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_the_Cayman_Islands.svg/'.$pixel.'-Flag_of_the_Cayman_Islands.svg.png",
        "code": "KY",
        "images": "KY.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/4/4b/Flag_of_Chad.svg/'.$pixel.'-Flag_of_Chad.svg.png",
        "code": "TD",
        "images": "TD.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_Czech_Republic.svg/'.$pixel.'-Flag_of_the_Czech_Republic.svg.png",
        "code": "CZ",
        "images": "CZ.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/7/78/Flag_of_Chile.svg/'.$pixel.'-Flag_of_Chile.svg.png",
        "code": "CL",
        "images": "CL.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/7/74/Flag_of_the_Cocos_%28Keeling%29_Islands.svg/'.$pixel.'-Flag_of_the_Cocos_%28Keeling%29_Islands.svg.png",
        "code": "CC",
        "images": "CC.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/3/35/Flag_of_the_Cook_Islands.svg/'.$pixel.'-Flag_of_the_Cook_Islands.svg.png",
        "code": "CK",
        "images": "CK.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Flag_of_Denmark.svg/'.$pixel.'-Flag_of_Denmark.svg.png",
        "code": "DK",
        "images": "DK.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/3/34/Flag_of_Djibouti.svg/'.$pixel.'-Flag_of_Djibouti.svg.png",
        "code": "DJ",
        "images": "DJ.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Flag_of_Dominica.svg/'.$pixel.'-Flag_of_Dominica.svg.png",
        "code": "DM",
        "images": "DM.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_the_Dominican_Republic.svg/'.$pixel.'-Flag_of_the_Dominican_Republic.svg.png",
        "code": "DO",
        "images": "DO.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Flag_of_Ecuador.svg/'.$pixel.'-Flag_of_Ecuador.svg.png",
        "code": "EC",
        "images": "EC.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/3/34/Flag_of_El_Salvador.svg/'.$pixel.'-Flag_of_El_Salvador.svg.png",
        "code": "SV",
        "images": "SV.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/2/29/Flag_of_Eritrea.svg/'.$pixel.'-Flag_of_Eritrea.svg.png",
        "code": "ER",
        "images": "ER.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Flag_of_Estonia.svg/'.$pixel.'-Flag_of_Estonia.svg.png",
        "code": "EE",
        "images": "EE.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/7/71/Flag_of_Ethiopia.svg/'.$pixel.'-Flag_of_Ethiopia.svg.png",
        "code": "ET",
        "images": "ET.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/8/83/Flag_of_the_Falkland_Islands.svg/'.$pixel.'-Flag_of_the_Falkland_Islands.svg.png",
        "code": "FK",
        "images": "FK.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Flag_of_the_Faroe_Islands.svg/'.$pixel.'-Flag_of_the_Faroe_Islands.svg.png",
        "code": "FO",
        "images": "FO.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Fiji.svg/'.$pixel.'-Flag_of_Fiji.svg.png",
        "code": "FJ",
        "images": "FJ.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/'.$pixel.'-Flag_of_the_Philippines.svg.png",
        "code": "PH",
        "images": "PH.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Flag_of_Finland.svg/'.$pixel.'-Flag_of_Finland.svg.png",
        "code": "FI",
        "images": "FI.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/04/Flag_of_Gabon.svg/'.$pixel.'-Flag_of_Gabon.svg.png",
        "code": "GA",
        "images": "GA.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_The_Gambia.svg/'.$pixel.'-Flag_of_The_Gambia.svg.png",
        "code": "GM",
        "images": "GM.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Georgia.svg/'.$pixel.'-Flag_of_Georgia.svg.png",
        "code": "GE",
        "images": "GE.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Flag_of_South_Georgia_and_the_South_Sandwich_Islands.svg/'.$pixel.'-Flag_of_South_Georgia_and_the_South_Sandwich_Islands.svg.png",
        "code": "GS",
        "images": "GS.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/1/19/Flag_of_Ghana.svg/'.$pixel.'-Flag_of_Ghana.svg.png",
        "code": "GH",
        "images": "GH.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/02/Flag_of_Gibraltar.svg/'.$pixel.'-Flag_of_Gibraltar.svg.png",
        "code": "GI",
        "images": "GI.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/09/Flag_of_Greenland.svg/'.$pixel.'-Flag_of_Greenland.svg.png",
        "code": "GL",
        "images": "GL.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Flag_of_Grenada.svg/'.$pixel.'-Flag_of_Grenada.svg.png",
        "code": "GD",
        "images": "GD.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/'.$pixel.'-Flag_of_France.svg.png",
        "code": "GP",
        "images": "GP.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/07/Flag_of_Guam.svg/'.$pixel.'-Flag_of_Guam.svg.png",
        "code": "GU",
        "images": "GU.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Flag_of_Guatemala.svg/'.$pixel.'-Flag_of_Guatemala.svg.png",
        "code": "GT",
        "images": "GT.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_Guernsey.svg/'.$pixel.'-Flag_of_Guernsey.svg.png",
        "code": "GG",
        "images": "GG.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Flag_of_Guinea.svg/'.$pixel.'-Flag_of_Guinea.svg.png",
        "code": "GN",
        "images": "GN.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/01/Flag_of_Guinea-Bissau.svg/'.$pixel.'-Flag_of_Guinea-Bissau.svg.png",
        "code": "GW",
        "images": "GW.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/3/31/Flag_of_Equatorial_Guinea.svg/'.$pixel.'-Flag_of_Equatorial_Guinea.svg.png",
        "code": "GQ",
        "images": "GQ.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_Guyana.svg/'.$pixel.'-Flag_of_Guyana.svg.png",
        "code": "GY",
        "images": "GY.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/'.$pixel.'-Flag_of_France.svg.png",
        "code": "GF",
        "images": "GF.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/5/56/Flag_of_Haiti.svg/'.$pixel.'-Flag_of_Haiti.svg.png",
        "code": "HT",
        "images": "HT.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Flag_of_Australia.svg/'.$pixel.'-Flag_of_Australia.svg.png",
        "code": "HM",
        "images": "HM.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/7/79/Flag_of_Honduras_%282008_Olympics%29.svg/'.$pixel.'-Flag_of_Honduras_%282008_Olympics%29.svg.png",
        "code": "HN",
        "images": "HN.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Flag_of_Hong_Kong.svg/'.$pixel.'-Flag_of_Hong_Kong.svg.png",
        "code": "HK",
        "images": "HK.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Flag_of_Hungary.svg/'.$pixel.'-Flag_of_Hungary.svg.png",
        "code": "HU",
        "images": "HU.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Iceland.svg/'.$pixel.'-Flag_of_Iceland.svg.png",
        "code": "IS",
        "images": "IS.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/4/41/Flag_of_India.svg/'.$pixel.'-Flag_of_India.svg.png",
        "code": "IN",
        "images": "IN.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/'.$pixel.'-Flag_of_Indonesia.svg.png",
        "code": "ID",
        "images": "ID.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/'.$pixel.'-Flag_of_Iraq.svg.png",
        "code": "IQ",
        "images": "IQ.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/'.$pixel.'-Flag_of_Iran.svg.png",
        "code": "IR",
        "images": "IR.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/4/45/Flag_of_Ireland.svg/'.$pixel.'-Flag_of_Ireland.svg.png",
        "code": "IE",
        "images": "IE.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Israel.svg/'.$pixel.'-Flag_of_Israel.svg.png",
        "code": "IL",
        "images": "IL.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/03/Flag_of_Italy.svg/'.$pixel.'-Flag_of_Italy.svg.png",
        "code": "IT",
        "images": "IT.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Flag_of_Jamaica.svg/'.$pixel.'-Flag_of_Jamaica.svg.png",
        "code": "JM",
        "images": "JM.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Flag_of_Japan.svg/'.$pixel.'-Flag_of_Japan.svg.png",
        "code": "JP",
        "images": "JP.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/'.$pixel.'-Flag_of_Germany.svg.png",
        "code": "DE",
        "images": "DE.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/1/1c/Flag_of_Jersey.svg/'.$pixel.'-Flag_of_Jersey.svg.png",
        "code": "JE",
        "images": "JE.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/2/26/Flags_of_New_Caledonia.svg/'.$pixel.'-Flags_of_New_Caledonia.svg.png",
        "code": "NC",
        "images": "NC.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/8/83/Flag_of_Cambodia.svg/'.$pixel.'-Flag_of_Cambodia.svg.png",
        "code": "KH",
        "images": "KH.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Flag_of_Cameroon.svg/'.$pixel.'-Flag_of_Cameroon.svg.png",
        "code": "CM",
        "images": "CM.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Flag_of_Canada.svg/'.$pixel.'-Flag_of_Canada.svg.png",
        "code": "CA",
        "images": "CA.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/'.$pixel.'-Flag_of_Kazakhstan.svg.png",
        "code": "KZ",
        "images": "KZ.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/4/49/Flag_of_Kenya.svg/'.$pixel.'-Flag_of_Kenya.svg.png",
        "code": "KE",
        "images": "KE.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kiribati.svg/'.$pixel.'-Flag_of_Kiribati.svg.png",
        "code": "KI",
        "images": "KI.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Flag_of_Kyrgyzstan.svg/'.$pixel.'-Flag_of_Kyrgyzstan.svg.png",
        "code": "KG",
        "images": "KG.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Colombia.svg/'.$pixel.'-Flag_of_Colombia.svg.png",
        "code": "CO",
        "images": "CO.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/9/94/Flag_of_the_Comoros.svg/'.$pixel.'-Flag_of_the_Comoros.svg.png",
        "code": "KM",
        "images": "KM.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/9/92/Flag_of_the_Republic_of_the_Congo.svg/'.$pixel.'-Flag_of_the_Republic_of_the_Congo.svg.png",
        "code": "CG",
        "images": "CG.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Flag_of_the_Democratic_Republic_of_the_Congo.svg/'.$pixel.'-Flag_of_the_Democratic_Republic_of_the_Congo.svg.png",
        "code": "CD",
        "images": "CD.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/09/Flag_of_South_Korea.svg/'.$pixel.'-Flag_of_South_Korea.svg.png",
        "code": "KR",
        "images": "KR.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/5/51/Flag_of_North_Korea.svg/'.$pixel.'-Flag_of_North_Korea.svg.png",
        "code": "KP",
        "images": "KP.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Flag_of_Costa_Rica.svg/'.$pixel.'-Flag_of_Costa_Rica.svg.png",
        "code": "CR",
        "images": "CR.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Croatia.svg/'.$pixel.'-Flag_of_Croatia.svg.png",
        "code": "HR",
        "images": "HR.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Flag_of_Cuba.svg/'.$pixel.'-Flag_of_Cuba.svg.png",
        "code": "CU",
        "images": "CU.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Flag_of_Kuwait.svg/'.$pixel.'-Flag_of_Kuwait.svg.png",
        "code": "KW",
        "images": "KW.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/5/56/Flag_of_Laos.svg/'.$pixel.'-Flag_of_Laos.svg.png",
        "code": "LA",
        "images": "LA.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Latvia.svg/'.$pixel.'-Flag_of_Latvia.svg.png",
        "code": "LV",
        "images": "LV.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/'.$pixel.'-Flag_of_Lebanon.svg.png",
        "code": "LB",
        "images": "LB.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Flag_of_Lesotho.svg/'.$pixel.'-Flag_of_Lesotho.svg.png",
        "code": "LS",
        "images": "LS.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Flag_of_Liberia.svg/'.$pixel.'-Flag_of_Liberia.svg.png",
        "code": "LR",
        "images": "LR.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Libya.svg/'.$pixel.'-Flag_of_Libya.svg.png",
        "code": "LY",
        "images": "LY.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/4/47/Flag_of_Liechtenstein.svg/'.$pixel.'-Flag_of_Liechtenstein.svg.png",
        "code": "LI",
        "images": "LI.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/1/11/Flag_of_Lithuania.svg/'.$pixel.'-Flag_of_Lithuania.svg.png",
        "code": "LT",
        "images": "LT.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/d/da/Flag_of_Luxembourg.svg/'.$pixel.'-Flag_of_Luxembourg.svg.png",
        "code": "LU",
        "images": "LU.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/6/63/Flag_of_Macau.svg/'.$pixel.'-Flag_of_Macau.svg.png",
        "code": "MO",
        "images": "MO.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/7/79/Flag_of_North_Macedonia.svg/'.$pixel.'-Flag_of_North_Macedonia.svg.png",
        "code": "MK",
        "images": "MK.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Flag_of_Madagascar.svg/'.$pixel.'-Flag_of_Madagascar.svg.png",
        "code": "MG",
        "images": "MG.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Flag_of_Malawi.svg/'.$pixel.'-Flag_of_Malawi.svg.png",
        "code": "MW",
        "images": "MW.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/6/66/Flag_of_Malaysia.svg/'.$pixel.'-Flag_of_Malaysia.svg.png",
        "code": "MY",
        "images": "MY.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_Maldives.svg/'.$pixel.'-Flag_of_Maldives.svg.png",
        "code": "MV",
        "images": "MV.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/9/92/Flag_of_Mali.svg/'.$pixel.'-Flag_of_Mali.svg.png",
        "code": "ML",
        "images": "ML.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flag_of_Malta.svg/'.$pixel.'-Flag_of_Malta.svg.png",
        "code": "MT",
        "images": "MT.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Flag_of_the_Isle_of_Mann.svg/'.$pixel.'-Flag_of_the_Isle_of_Mann.svg.png",
        "code": "IM",
        "images": "IM.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Flag_of_the_Northern_Mariana_Islands.svg/'.$pixel.'-Flag_of_the_Northern_Mariana_Islands.svg.png",
        "code": "MP",
        "images": "MP.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Morocco.svg/'.$pixel.'-Flag_of_Morocco.svg.png",
        "code": "MA",
        "images": "MA.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Flag_of_the_Marshall_Islands.svg/'.$pixel.'-Flag_of_the_Marshall_Islands.svg.png",
        "code": "MH",
        "images": "MH.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/'.$pixel.'-Flag_of_France.svg.png",
        "code": "MQ",
        "images": "MQ.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/4/43/Flag_of_Mauritania.svg/'.$pixel.'-Flag_of_Mauritania.svg.png",
        "code": "MR",
        "images": "MR.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Mauritius.svg/'.$pixel.'-Flag_of_Mauritius.svg.png",
        "code": "MU",
        "images": "MU.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/'.$pixel.'-Flag_of_France.svg.png",
        "code": "YT",
        "images": "YT.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Flag_of_Mexico.svg/'.$pixel.'-Flag_of_Mexico.svg.png",
        "code": "MX",
        "images": "MX.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Flag_of_the_Federated_States_of_Micronesia.svg/'.$pixel.'-Flag_of_the_Federated_States_of_Micronesia.svg.png",
        "code": "FM",
        "images": "FM.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/2/27/Flag_of_Moldova.svg/'.$pixel.'-Flag_of_Moldova.svg.png",
        "code": "MD",
        "images": "MD.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/'.$pixel.'-Flag_of_Egypt.svg.png",
        "code": "EG",
        "images": "EG.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Flag_of_Monaco.svg/'.$pixel.'-Flag_of_Monaco.svg.png",
        "code": "MC",
        "images": "MC.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/'.$pixel.'-Flag_of_the_United_States.svg.png",
        "code": "UM",
        "images": "UM.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Flag_of_Mongolia.svg/'.$pixel.'-Flag_of_Mongolia.svg.png",
        "code": "MN",
        "images": "MN.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Montenegro.svg/'.$pixel.'-Flag_of_Montenegro.svg.png",
        "code": "ME",
        "images": "ME.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Montserrat.svg/'.$pixel.'-Flag_of_Montserrat.svg.png",
        "code": "MS",
        "images": "MS.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Mozambique.svg/'.$pixel.'-Flag_of_Mozambique.svg.png",
        "code": "MZ",
        "images": "MZ.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Flag_of_Myanmar.svg/'.$pixel.'-Flag_of_Myanmar.svg.png",
        "code": "MM",
        "images": "MM.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Namibia.svg/'.$pixel.'-Flag_of_Namibia.svg.png",
        "code": "NA",
        "images": "NA.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/3/30/Flag_of_Nauru.svg/'.$pixel.'-Flag_of_Nauru.svg.png",
        "code": "NR",
        "images": "NR.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/6/67/Flag_of_Christmas_Island.svg/'.$pixel.'-Flag_of_Christmas_Island.svg.png",
        "code": "CX",
        "images": "CX.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Flag_of_Nepal.svg/'.$pixel.'-Flag_of_Nepal.svg.png",
        "code": "NP",
        "images": "NP.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/1/19/Flag_of_Nicaragua.svg/'.$pixel.'-Flag_of_Nicaragua.svg.png",
        "code": "NI",
        "images": "NI.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Flag_of_Niger.svg/'.$pixel.'-Flag_of_Niger.svg.png",
        "code": "NE",
        "images": "NE.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/7/79/Flag_of_Nigeria.svg/'.$pixel.'-Flag_of_Nigeria.svg.png",
        "code": "NG",
        "images": "NG.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/01/Flag_of_Niue.svg/'.$pixel.'-Flag_of_Niue.svg.png",
        "code": "NU",
        "images": "NU.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/4/48/Flag_of_Norfolk_Island.svg/'.$pixel.'-Flag_of_Norfolk_Island.svg.png",
        "code": "NF",
        "images": "NF.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Flag_of_Norway.svg/'.$pixel.'-Flag_of_Norway.svg.png",
        "code": "NO",
        "images": "NO.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Oman.svg/'.$pixel.'-Flag_of_Oman.svg.png",
        "code": "OM",
        "images": "OM.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/'.$pixel.'-Flag_of_Pakistan.svg.png",
        "code": "PK",
        "images": "PK.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/4/48/Flag_of_Palau.svg/'.$pixel.'-Flag_of_Palau.svg.png",
        "code": "PW",
        "images": "PW.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Palestine.svg/'.$pixel.'-Flag_of_Palestine.svg.png",
        "code": "PS",
        "images": "PS.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Flag_of_Panama.svg/'.$pixel.'-Flag_of_Panama.svg.png",
        "code": "PA",
        "images": "PA.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_C%C3%B4te_d%27Ivoire.svg/'.$pixel.'-Flag_of_C%C3%B4te_d%27Ivoire.svg.png",
        "code": "CI",
        "images": "CI.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Flag_of_Papua_New_Guinea.svg/'.$pixel.'-Flag_of_Papua_New_Guinea.svg.png",
        "code": "PG",
        "images": "PG.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/2/27/Flag_of_Paraguay.svg/'.$pixel.'-Flag_of_Paraguay.svg.png",
        "code": "PY",
        "images": "PY.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/'.$pixel.'-Flag_of_France.svg.png",
        "code": "FR",
        "images": "FR.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Flag_of_the_French_Southern_and_Antarctic_Lands.svg/'.$pixel.'-Flag_of_the_French_Southern_and_Antarctic_Lands.svg.png",
        "code": "TF",
        "images": "TF.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Flag_of_Peru.svg/'.$pixel.'-Flag_of_Peru.svg.png",
        "code": "PE",
        "images": "PE.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/8/88/Flag_of_the_Pitcairn_Islands.svg/'.$pixel.'-Flag_of_the_Pitcairn_Islands.svg.png",
        "code": "PN",
        "images": "PN.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/1/12/Flag_of_Poland.svg/'.$pixel.'-Flag_of_Poland.svg.png",
        "code": "PL",
        "images": "PL.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/d/db/Flag_of_French_Polynesia.svg/'.$pixel.'-Flag_of_French_Polynesia.svg.png",
        "code": "PF",
        "images": "PF.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Portugal.svg/'.$pixel.'-Flag_of_Portugal.svg.png",
        "code": "PT",
        "images": "PT.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/2/28/Flag_of_Puerto_Rico.svg/'.$pixel.'-Flag_of_Puerto_Rico.svg.png",
        "code": "PR",
        "images": "PR.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Qatar.svg/'.$pixel.'-Flag_of_Qatar.svg.png",
        "code": "QA",
        "images": "QA.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/'.$pixel.'-Flag_of_France.svg.png",
        "code": "RE",
        "images": "RE.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flag_of_Romania.svg/'.$pixel.'-Flag_of_Romania.svg.png",
        "code": "RO",
        "images": "RO.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/'.$pixel.'-Flag_of_Russia.svg.png",
        "code": "RU",
        "images": "RU.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/1/17/Flag_of_Rwanda.svg/'.$pixel.'-Flag_of_Rwanda.svg.png",
        "code": "RW",
        "images": "RW.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/2/26/Flag_of_the_Sahrawi_Arab_Democratic_Republic.svg/'.$pixel.'-Flag_of_the_Sahrawi_Arab_Democratic_Republic.svg.png",
        "code": "EH",
        "images": "EH.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/'.$pixel.'-Flag_of_France.svg.png",
        "code": "BL",
        "images": "BL.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_Saint_Helena.svg/'.$pixel.'-Flag_of_Saint_Helena.svg.png",
        "code": "SH",
        "images": "SH.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Saint_Kitts_and_Nevis.svg/'.$pixel.'-Flag_of_Saint_Kitts_and_Nevis.svg.png",
        "code": "KN",
        "images": "KN.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Saint_Lucia.svg/'.$pixel.'-Flag_of_Saint_Lucia.svg.png",
        "code": "LC",
        "images": "LC.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/'.$pixel.'-Flag_of_France.svg.png",
        "code": "MF",
        "images": "MF.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/'.$pixel.'-Flag_of_France.svg.png",
        "code": "PM",
        "images": "PM.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Flag_of_Saint_Vincent_and_the_Grenadines.svg/'.$pixel.'-Flag_of_Saint_Vincent_and_the_Grenadines.svg.png",
        "code": "VC",
        "images": "VC.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/3/31/Flag_of_Samoa.svg/'.$pixel.'-Flag_of_Samoa.svg.png",
        "code": "WS",
        "images": "WS.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/8/87/Flag_of_American_Samoa.svg/'.$pixel.'-Flag_of_American_Samoa.svg.png",
        "code": "AS",
        "images": "AS.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_the_Commissioner_of_the_British_Indian_Ocean_Territory.svg/'.$pixel.'-Flag_of_the_Commissioner_of_the_British_Indian_Ocean_Territory.svg.png",
        "code": "IO",
        "images": "IO.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Flag_of_San_Marino.svg/'.$pixel.'-Flag_of_San_Marino.svg.png",
        "code": "SM",
        "images": "SM.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Flag_of_Sao_Tome_and_Principe.svg/'.$pixel.'-Flag_of_Sao_Tome_and_Principe.svg.png",
        "code": "ST",
        "images": "ST.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Flag_of_New_Zealand.svg/'.$pixel.'-Flag_of_New_Zealand.svg.png",
        "code": "NZ",
        "images": "NZ.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/f/fd/Flag_of_Senegal.svg/'.$pixel.'-Flag_of_Senegal.svg.png",
        "code": "SN",
        "images": "SN.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Flag_of_Serbia.svg/'.$pixel.'-Flag_of_Serbia.svg.png",
        "code": "RS",
        "images": "RS.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Flag_of_Seychelles.svg/'.$pixel.'-Flag_of_Seychelles.svg.png",
        "code": "SC",
        "images": "SC.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/1/17/Flag_of_Sierra_Leone.svg/'.$pixel.'-Flag_of_Sierra_Leone.svg.png",
        "code": "SL",
        "images": "SL.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/4/48/Flag_of_Singapore.svg/'.$pixel.'-Flag_of_Singapore.svg.png",
        "code": "SG",
        "images": "SG.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Cyprus.svg/'.$pixel.'-Flag_of_Cyprus.svg.png",
        "code": "CY",
        "images": "CY.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Flag_of_Slovenia.svg/'.$pixel.'-Flag_of_Slovenia.svg.png",
        "code": "SI",
        "images": "SI.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Flag_of_Slovakia.svg/'.$pixel.'-Flag_of_Slovakia.svg.png",
        "code": "SK",
        "images": "SK.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/7/74/Flag_of_the_Solomon_Islands.svg/'.$pixel.'-Flag_of_the_Solomon_Islands.svg.png",
        "code": "SB",
        "images": "SB.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Flag_of_Somalia.svg/'.$pixel.'-Flag_of_Somalia.svg.png",
        "code": "SO",
        "images": "SO.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Spain.svg/'.$pixel.'-Flag_of_Spain.svg.png",
        "code": "ES",
        "images": "ES.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/1/11/Flag_of_Sri_Lanka.svg/'.$pixel.'-Flag_of_Sri_Lanka.svg.png",
        "code": "LK",
        "images": "LK.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/01/Flag_of_Sudan.svg/'.$pixel.'-Flag_of_Sudan.svg.png",
        "code": "SD",
        "images": "SD.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Syria.svg/'.$pixel.'-Flag_of_Syria.svg.png",
        "code": "SY",
        "images": "SY.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/6/60/Flag_of_Suriname.svg/'.$pixel.'-Flag_of_Suriname.svg.png",
        "code": "SR",
        "images": "SR.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Flag_of_Norway.svg/'.$pixel.'-Flag_of_Norway.svg.png",
        "code": "SJ",
        "images": "SJ.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Flag_of_Eswatini.svg/'.$pixel.'-Flag_of_Eswatini.svg.png",
        "code": "SZ",
        "images": "SZ.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Flag_of_Sweden.svg/'.$pixel.'-Flag_of_Sweden.svg.png",
        "code": "SE",
        "images": "SE.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Switzerland.svg/20px-Flag_of_Switzerland.svg.png",
        "code": "CH",
        "images": "CH.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/7/72/Flag_of_the_Republic_of_China.svg/'.$pixel.'-Flag_of_the_Republic_of_China.svg.png",
        "code": "TW",
        "images": "TW.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Flag_of_Tajikistan.svg/'.$pixel.'-Flag_of_Tajikistan.svg.png",
        "code": "TJ",
        "images": "TJ.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/3/38/Flag_of_Cape_Verde.svg/'.$pixel.'-Flag_of_Cape_Verde.svg.png",
        "code": "CV",
        "images": "CV.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/3/38/Flag_of_Tanzania.svg/'.$pixel.'-Flag_of_Tanzania.svg.png",
        "code": "TZ",
        "images": "TZ.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Flag_of_Thailand.svg/'.$pixel.'-Flag_of_Thailand.svg.png",
        "code": "TH",
        "images": "TH.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/2/26/Flag_of_East_Timor.svg/'.$pixel.'-Flag_of_East_Timor.svg.png",
        "code": "TL",
        "images": "TL.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/'.$pixel.'-Flag_of_the_People%27s_Republic_of_China.svg.png",
        "code": "CN",
        "images": "CN.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/6/68/Flag_of_Togo.svg/'.$pixel.'-Flag_of_Togo.svg.png",
        "code": "TG",
        "images": "TG.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Flag_of_Tokelau.svg/'.$pixel.'-Flag_of_Tokelau.svg.png",
        "code": "TK",
        "images": "TK.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Tonga.svg/'.$pixel.'-Flag_of_Tonga.svg.png",
        "code": "TO",
        "images": "TO.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Trinidad_and_Tobago.svg/'.$pixel.'-Flag_of_Trinidad_and_Tobago.svg.png",
        "code": "TT",
        "images": "TT.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Flag_of_Tunisia.svg/'.$pixel.'-Flag_of_Tunisia.svg.png",
        "code": "TN",
        "images": "TN.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/'.$pixel.'-Flag_of_Turkey.svg.png",
        "code": "TR",
        "images": "TR.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Turkmenistan.svg/'.$pixel.'-Flag_of_Turkmenistan.svg.png",
        "code": "TM",
        "images": "TM.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Flag_of_the_Turks_and_Caicos_Islands.svg/'.$pixel.'-Flag_of_the_Turks_and_Caicos_Islands.svg.png",
        "code": "TC",
        "images": "TC.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/3/38/Flag_of_Tuvalu.svg/'.$pixel.'-Flag_of_Tuvalu.svg.png",
        "code": "TV",
        "images": "TV.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Flag_of_Uganda.svg/'.$pixel.'-Flag_of_Uganda.svg.png",
        "code": "UG",
        "images": "UG.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/4/49/Flag_of_Ukraine.svg/'.$pixel.'-Flag_of_Ukraine.svg.png",
        "code": "UA",
        "images": "UA.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_United_Arab_Emirates.svg/'.$pixel.'-Flag_of_the_United_Arab_Emirates.svg.png",
        "code": "AE",
        "images": "AE.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Uruguay.svg/'.$pixel.'-Flag_of_Uruguay.svg.png",
        "code": "UY",
        "images": "UY.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/'.$pixel.'-Flag_of_Uzbekistan.svg.png",
        "code": "UZ",
        "images": "UZ.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Flag_of_Vanuatu.svg/'.$pixel.'-Flag_of_Vanuatu.svg.png",
        "code": "VU",
        "images": "VU.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/00/Flag_of_the_Vatican_City.svg/'.$pixel.'-Flag_of_the_Vatican_City.svg.png",
        "code": "VA",
        "images": "VA.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/06/Flag_of_Venezuela.svg/'.$pixel.'-Flag_of_Venezuela.svg.png",
        "code": "VE",
        "images": "VE.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Vietnam.svg/'.$pixel.'-Flag_of_Vietnam.svg.png",
        "code": "VN",
        "images": "VN.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Flag_of_the_United_States_Virgin_Islands.svg/'.$pixel.'-Flag_of_the_United_States_Virgin_Islands.svg.png",
        "code": "VI",
        "images": "VI.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/4/42/Flag_of_the_British_Virgin_Islands.svg/'.$pixel.'-Flag_of_the_British_Virgin_Islands.svg.png",
        "code": "VG",
        "images": "VG.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/'.$pixel.'-Flag_of_France.svg.png",
        "code": "WF",
        "images": "WF.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/8/89/Flag_of_Yemen.svg/'.$pixel.'-Flag_of_Yemen.svg.png",
        "code": "YE",
        "images": "YE.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/'.$pixel.'-Flag_of_Jordan.svg.png",
        "code": "JO",
        "images": "JO.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Greece.svg/'.$pixel.'-Flag_of_Greece.svg.png",
        "code": "GR",
        "images": "GR.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/0/06/Flag_of_Zambia.svg/'.$pixel.'-Flag_of_Zambia.svg.png",
        "code": "ZM",
        "images": "ZM.png"
    },

    {
        "url": "upload.wikimedia.org/wikipedia/commons/thumb/6/6a/Flag_of_Zimbabwe.svg/'.$pixel.'-Flag_of_Zimbabwe.svg.png",
        "code": "ZW",
        "images": "ZW.png"
    }

    ]';
$example = '[{
	"url": "upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Afghanistan.svg/'.$pixel.'-Flag_of_Afghanistan.svg.png",
	"code": "AF",
	"images": "AF.png"
    }]';


function downloadGambar($img_url, $dir_location='', $filename='') {
    $returns = array();
    if (!empty($dir_location) AND !is_dir($dir_location)) {
        if(!mkdir($dir_location, 0777, true)) {
            $returns['status'] = 'error';
            $returns['message'] = 'gagal membuat folder '.$dir_location;
            return $returns;
        }
    }
    $url = filter_var($img_url, FILTER_SANITIZE_URL);    
    if (filter_var($url, FILTER_VALIDATE_URL) === false) {
        $returns['status'] = 'error';
        $returns['message'] = 'URL tidak valid';
        return $returns;
    }
    $path = parse_url($img_url, PHP_URL_PATH);
    if ($filename !== ""){
        $file_name = $filename;
    }else{
        $file_name = basename($path);
    }
    
    $file_ext = pathinfo($img_url, PATHINFO_EXTENSION);//ext
    $file_ext = strtolower($file_ext);
    
    if (empty($file_name)) {
        $returns['status'] = 'error';
        $returns['message'] = 'Nama file tidak valid';
        return $returns;
    }
    if (strpos($file_ext, '?')!==false) {
        $file_ext = substr($file_ext,0,strpos($file_ext, '?'));
    }

    $ch = curl_init ();
    curl_setopt($ch, CURLOPT_URL,$img_url);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    //curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    $raw = curl_exec($ch);
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curl_error = curl_error($ch);
    curl_close ($ch);
    if (!empty($curl_error) OR $http_status!=200) {
        $returns['status'] = 'error';
        $returns['message'] = 'http status: '.$http_status.' '.$curl_error;
        return $returns;
    }
    
    if (empty($file_ext)) {
        
        $file_name_temp = str_replace('.', '', uniqid(rand(100,999),true));
        $saveto = $dir_location.$file_name_temp;
        if (file_exists($saveto)) {
            @unlink($saveto);
        }
        @file_put_contents($saveto, $raw);

    } else {
        
        $saveto = $dir_location.$file_name;
        
        if (file_exists($saveto)) {
            @unlink($saveto);
        }
        file_put_contents($saveto, $raw);
        

    }
    if (!is_file($saveto)) {
    $returns['status'] = 'error';
    $returns['message'] = 'Gagal simpan gambar';
    return $returns;
    }
    $returns['status'] = 'ok';
    $returns['message'] = 'success';
    $returns['img_url'] = $img_url;
    $returns['dir_location'] = $dir_location;    
    $returns['img_name'] = $file_name;
    $returns['saveto'] = $saveto;
    return $returns;
}
//lokasi folder

$datas = json_decode($json);
//$datas = json_decode($example);
foreach ($datas as $data) {
    
    if ($svg){
        //$url = preg_replace('/(.*)(\/*\.svg)/', '$1', $data->url);
        $url = preg_replace('/(.*)thumb\/(.*\.svg)\/.*/', '$1$2', $data->url);
        $dir = 'svg/';
        $filename = $data->code.".svg";
  
    }else{
        $url = $data->url;
        $dir = 'png'.'/'.$ukuran.'/';
        $filename = $data->code.".png";
    }
    $dir_location = 'flags/'.$dir;

    //var_dump($dir.'/'.$filename);
    $img_url = "http://".$url;
    
    $result = downloadGambar($img_url, $dir_location,$filename);
    echo $result['status'] . ' - ' . $result['message']. ' - ' . $result['img_name'] . "<br>". $result['img_url'] . "<br><br>" ;
 }
