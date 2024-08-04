<script src="filter.js"></script>
<pre id=param></pre>
<script>
    var param_elem = document.getElementById("param");
    var url = new URL(window.location.href);
    var param = url.searchParams.get("param");
    if (typeof filter === 'undefined') {
        param = "Not flag";
    }
    else {
        for (var i = 0; i < filter.length; i++) {
            if (param.toLowerCase().includes(filter[i])) {
                param = "Not flag";
                break;
            }
        }
    }

    param_elem.innerHTML = param;
</script>
