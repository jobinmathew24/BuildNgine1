function adminhome()
{
    document.getElementById("new-district").style.display = "none";
    document.getElementById("new-location").style.display = "none";
    document.getElementById("ascm").style.display = "none";
    document.getElementById("servicepro").style.display = "inline";
    document.getElementById("sp_table").style.display = "inline";
    // document.getElementById("sp").style.display = "none";
    document.getElementById("emp").style.display = "none";
    document.getElementById("customer").style.display = "none";
}
function admindist()
{
    // document.getElementById("alc").style.display = "inline";
    document.getElementById("new-district").style.display = "inline";
    document.getElementById("servicepro").style.display = "none";
    document.getElementById("ascm").style.display = "none";
    document.getElementById("new-location").style.display = "none";
    document.getElementById("sp_table").style.display = "none";
    document.getElementById("sp").style.display = "none";
    document.getElementById("emp").style.display = "none";
    document.getElementById("customer").style.display = "none";
}
function adminloc()
{
    // document.getElementById("alc").style.display = "inline";
    document.getElementById("new-location").style.display = "inline";
    document.getElementById("ascm").style.display = "none";
    document.getElementById("new-district").style.display = "none";
    document.getElementById("sp_table").style.display = "none";
    document.getElementById("servicepro").style.display = "none";
    document.getElementById("emp").style.display = "none";
    document.getElementById("customer").style.display = "none";
    document.getElementById("servicepro").style.display = "none";

}
function adminscmanagment()
{
    document.getElementById("ascm").style.display = "inline";
    document.getElementById("sp_table").style.display = "none";
    document.getElementById("new-district").style.display = "none";
    document.getElementById("new-location").style.display = "none";
    document.getElementById("servicepro").style.display = "none";
    document.getElementById("emp").style.display = "none";
    document.getElementById("customer").style.display = "none";


}
function serviceprovider()
{
    document.getElementById("servicepro").style.display = "inline";
    document.getElementById("ascm").style.display = "none";
    // document.getElementById("alc").style.display = "none";
    document.getElementById("sp_table").style.display = "none";
    document.getElementById("new-district").style.display = "none";
    document.getElementById("new-location").style.display = "none";
    document.getElementById("emp").style.display = "none";
    document.getElementById("customer").style.display = "none";
}
function employe()
{
    document.getElementById("emp").style.display = "inline";
    document.getElementById("servicepro").style.display = "none";
    document.getElementById("ascm").style.display = "none";
    // document.getElementById("alc").style.display = "none";
    // document.getElementById("sp_table").style.display = "none";
    document.getElementById("new-district").style.display = "none";
    document.getElementById("new-location").style.display = "none";

    document.getElementById("customer").style.display = "none";
}
function cust()
{

    document.getElementById("customer").style.display = "inline";
    document.getElementById("servicepro").style.display = "none";
    document.getElementById("ascm").style.display = "none";
    // document.getElementById("alc").style.display = "none";
    // document.getElementById("sp_table").style.display = "none";
    document.getElementById("new-district").style.display = "none";
    document.getElementById("new-location").style.display = "none";
    document.getElementById("emp").style.display = "none";
}
