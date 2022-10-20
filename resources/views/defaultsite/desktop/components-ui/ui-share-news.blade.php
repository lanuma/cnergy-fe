<div class="share-news-container">
    <h4>Share</h4>
    <div class="icons mt-3">
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current() . '?utm_source=Desktop&utm_medium=facebook&utm_campaign=Share_Bottom') }}"
            target="_blank"><i class="fa-brands fa-facebook fa-2xl" style="color: #4A6DB4"></i></a>
        <a href="https://twitter.com/intent/tweet?text={{ urlencode(url()->current() . '?utm_source=Desktop&utm_medium=twitter&utm_campaign=Share_Bottom') }}"
            target="_blank"><i class="fa-brands fa-twitter fa-2xl" style="color: #1DADEB"></i></a>
        <a href="https://wa.me/?text={{ urlencode(url()->current()) . '?utm_source=Desktop&utm_medium=whatsapp&utm_campaign=Share_Bottom' }}"
            target="_blank"><i class="fa-brands fa-whatsapp fa-2xl " style="color: #6ECF2F"></i></a>
        <a href="#"><i class="fa-brands fa-google-plus fa-2xl" style="color: #CA0000"></i></a>
        <a href="#"><i class="fa-solid fa-envelope fa-2xl" style="color: #424242"></i></a>
        <div class="copy-link">
            <button onclick="myFunction()" id="btnCopy" value="{{ url()->current() }}">
                <i class="fa-solid fa-link"></i>
                <span class="ms-2" id="textCopy">Copy</span>
            </button>
        </div>
    </div>
</div>

<script>
    function myFunction() {
        const btnCopy = document.getElementById("btnCopy").value;
        const TempText = document.createElement("input");
        const textCopy = document.getElementById("textCopy");

        TempText.value = btnCopy;
        document.body.appendChild(TempText);
        TempText.select();

        document.execCommand("copy");
        document.body.removeChild(TempText);

        textCopy.innerHTML = "Copied";

        setTimeout(() => {
            textCopy.innerHTML = "Copy";
        }, 2000);

    }
</script>
