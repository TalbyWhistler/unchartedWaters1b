function testFunction0()
{
    console.log("Test Function");
}




function pageHelper()
{
    let content='Content by page helper';   
    console.log('pageHelper has arrived');
   
}

function validateText(inputString)
{
    returnValue=true;
    console.log("Validate string " + inputString.length);
    if (inputString.length==0)
    {
        returnValue=false;
    }
    return returnValue;
}

function validateNumbers(inputString)
{
    returnValue=true;
    if (isNaN(inputString))
    {
        returnValue=false;
    }
    return returnValue;
}



function handleInput()
{   
    goodInput=true;
    
    status="Ok";
    message=" ";
    city=document.getElementById("city").value;
    commodity=document.getElementById("commodity").value;
    buyingPrice=document.getElementById("buyingPrice").value;
    sellingPrice=document.getElementById("sellingPrice").value;

    if (validateText(city)==false)
    {
        status="Error";
        message=message + " City Name";
        goodInput=false;
    }
    if (validateText(commodity)==false)
    {
        status="Error";
        message=message + " Commodity";
        goodInput=false;
    }
    if (validateNumbers(buyingPrice)==false)
    {
        status="Error";
        message=message+" Buying Price";
        goodInput=false;
    }
    if (validateNumbers(sellingPrice)==false)
    {
        status="Error";
        message=message+" Selling Price";
        goodInput=false;
    }
    if (buyingPrice==="" && sellingPrice==="")
    {
        status="Error";
        message=message+" Need a Price";
        goodInput=false;
    }
    console.log("Good input = " + goodInput);
    logvalues="" + city + "," + commodity + "," + buyingPrice + "," + sellingPrice;
    
    console.log(logvalues);
    document.getElementById("statusOk").innerHTML=status;
    document.getElementById("message").innerHTML=message;
}