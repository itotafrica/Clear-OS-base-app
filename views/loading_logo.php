<style>
    .center {
        margin-top: 12px;
        margin-bottom: 12px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        border-radius: 50%;
    }
</style>

<script>

    document.addEventListener('DOMContentLoaded', function() {
        var elements = document.getElementsByClassName("ci-ClearOS");
        var logo = elements[0];
        
        console.log(logo);
    
        var chemin = "base/image";
    
        var elem = document.createElement("img");
        elem.setAttribute("src", chemin);
        elem.setAttribute("height", "80");
        elem.setAttribute("width", "80");
        elem.setAttribute("alt", "Logo");
        elem.classList.add("center");
        
        logo.replaceWith(elem);
    });
    
</script>