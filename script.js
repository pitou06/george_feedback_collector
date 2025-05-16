function validateForm()
{
    const message = document.getElementById("message").value.trim();
    if(message === "")
    {
        alert("Please fill in the field.");
        return false;
    }
    return true;
}