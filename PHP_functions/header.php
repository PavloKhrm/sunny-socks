<?php
function insertHeaderAndFooterStyle() {
        echo '<style>
    body {
        margin: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    
    .header {
        background-color: #1E407A;
        min-height: 18dvh;
    }
    
    
    .footer {
        background-color: #FECD3E;
        min-height: 11dvh;
        margin-top: auto;
    }
</style>';
    }
    function insertHeader() {
        echo '<div class="header">header</div>';
    }


insertHeaderAndFooterStyle();

insertHeader();
?>