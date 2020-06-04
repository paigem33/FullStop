function Num ()
{
    this.value = arguments[0];
    this.val = this.valueOf = function () 
    {
       return parseInt(this.value);
    }
    this.toString = function()
    {
       return this.value;
    }
}

jQuery('#date').change(function(){
    var date = jQuery('#date').val().split(",");
    var month = new Num(date[0]);
    month = month.toString();
    var year = parseInt(date[1]);
    
    var url = window.location.href.split('?')[0]+"?month=" + month + "&year=" + year;
    document.location = url;  
});

