<script>
    var thList = document.querySelectorAll(".responsiveTable th");
    var tdList = document.querySelectorAll(".responsiveTable td");
    for(var j =0;j<tdList.length;j++)
    {
        for(var k =0;k<thList.length;k++)
        {
            tdList[(thList.length*j)+k].setAttribute("data-tab",thList[k].innerHTML);
        }
    }
</script> 