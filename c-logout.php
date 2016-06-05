<html>
    <head>
    
        <script type="text/javascript">
            function noBack(){
                window.history.forward()
            }
             
            noBack();
            window.onload = noBack;
            window.onpageshow = function(evt) { if (evt.persisted) noBack() }
            window.onunload = function() { void (0) }
        </script>
    
    
    <?php
            session_start();
            session_destroy();

            echo "ออกจากระบบเรียบร้อยแล้ว";
            echo "
 				<html>
   					<meta http-equiv=\"Refresh\" content=\"2; URL=index.php\">
 				</html>
 			"; 



    ?>
    
    </head>
</html>



 