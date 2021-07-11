
function adminhome()
{
    document.getElementById("delete_state").style.display = "none";
    document.getElementById("orders").style.display = "none";
    document.getElementById("retailer").style.display = "none";
    document.getElementById("retailer_att").style.display = "none";
    // document.getElementById("sp").style.display = "none";
    document.getElementById("customer").style.display = "none";
    document.getElementById("prebulit").style.display = "none";
    document.getElementById("complaints").style.display = "none";
    document.getElementById("stats").style.display = "inline";

}
function del_state()
{
    // document.getElementById("alc").style.display = "inline";
    document.getElementById("delete_state").style.display = "inline";
    document.getElementById("retailer_att").style.display = "none";
    document.getElementById("retailer").style.display = "none";
    document.getElementById("stats").style.display = "none";
    // document.getElementById("sp").style.display = "none";
    document.getElementById("orders").style.display = "none";
    document.getElementById("customer").style.display = "none";
    document.getElementById("prebulit").style.display = "none";
    document.getElementById("complaints").style.display = "none";

}

function retailer()
{
    document.getElementById("retailer").style.display = "inline";
    document.getElementById("stats").style.display = "none";
    document.getElementById("delete_state").style.display = "none";
    document.getElementById("orders").style.display = "none";
    document.getElementById("customer").style.display = "none";
    document.getElementById("retailer_att").style.display = "none";
    document.getElementById("prebulit").style.display = "none";
    document.getElementById("complaints").style.display = "none";


}
function retailer_att()
{
    document.getElementById("customer").style.display = "none";
    document.getElementById("retailer_att").style.display = "inline";
    document.getElementById("retailer").style.display = "none";
    document.getElementById("stats").style.display = "none";
    document.getElementById("delete_state").style.display = "none";
    document.getElementById("orders").style.display = "none";
    document.getElementById("customer").style.display = "none";
    document.getElementById("prebulit").style.display = "none";
    document.getElementById("complaints").style.display = "none";

}
function order()
{
    document.getElementById("orders").style.display = "inline";
    document.getElementById("retailer_att").style.display = "none";
    document.getElementById("retailer").style.display = "none";
    document.getElementById("stats").style.display = "none";
    document.getElementById("delete_state").style.display = "none";
    document.getElementById("customer").style.display = "none";
    document.getElementById("prebulit").style.display = "none";
    document.getElementById("complaints").style.display = "none";

}
function cust()
{

    document.getElementById("customer").style.display = "inline";
    document.getElementById("retailer_att").style.display = "none";
    document.getElementById("retailer").style.display = "none";
    // document.getElementById("alc").style.display = "none";
    document.getElementById("stats").style.display = "none";
    document.getElementById("delete_state").style.display = "none";
    document.getElementById("orders").style.display = "none";
    document.getElementById("prebulit").style.display = "none";
    document.getElementById("complaints").style.display = "none";

}
function prebulit()
{

    document.getElementById("prebulit").style.display = "inline";
    document.getElementById("complaints").style.display = "none";
    document.getElementById("customer").style.display = "none";
    document.getElementById("retailer_att").style.display = "none";
    document.getElementById("retailer").style.display = "none";
    // document.getElementById("alc").style.display = "none";
    document.getElementById("stats").style.display = "none";
    document.getElementById("delete_state").style.display = "none";
    document.getElementById("orders").style.display = "none";
}

function complaints()
{

    document.getElementById("complaints").style.display = "inline";
    document.getElementById("prebulit").style.display = "none";
    document.getElementById("customer").style.display = "none";
    document.getElementById("retailer_att").style.display = "none";
    document.getElementById("retailer").style.display = "none";
    // document.getElementById("alc").style.display = "none";
    document.getElementById("stats").style.display = "none";
    document.getElementById("delete_state").style.display = "none";
    document.getElementById("orders").style.display = "none";
}
