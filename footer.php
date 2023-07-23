<footer>
  <div class="container">
      <div class="footer-box">
	  <?php 
	        date_default_timezone_set('Asia/Kolkata');
	           $date = date("Y-m-d");
               $newDate = date("d-m-Y", strtotime($date));
      ?>			   
               
        <b><p>ATMAS <?php echo date("Y"); ?></p></b>
		</div>
  </div>
</footer>
</body>
</html>