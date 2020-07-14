<?php

echo "    <footer>
    
    <div class='w3-row'>

    <div class='w3-third w3-center'>
        <p>
            Powered by <a href='https://www.w3schools.com/w3css/default.asp' target='_blank'>wandika</a>
        </p>
    </div>

    <div class='w3-third w3-center'>
        <p class='w3-center'> Copy right 2020</p>
    </div>

    <div class='w3-third w3-center'>
        <p>Contact Us</p>
        <button onclick='document.getElementById('id01').style.display='block'' class='w3-button w3-black'>Feedback</button>
        <div id='id01' class='w3-modal'>
        <div class='w3-modal-content'>
          <div class='w3-container'>
            <span onclick='document.getElementById('id01').style.display='none'' class='w3-button w3-display-topright'>&times;</span>
            <p>Some text. Some text. Some text.</p>
            <p>Some text. Some text. Some text.</p>
          </div>
        </div>
      </div>
    </div>

</div>


</footer> ";
?>