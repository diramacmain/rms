<footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="">
                  Zoab
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="" target="_blank">Zoab</a> for a better web.
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
  <script type="text/javascript">
    $('.num09').keyup(function () { 
      this.value = this.value.replace(/[^0-9\.]/g,'');
    });
</script>
<script type="text/javascript">
	var urlParams = new URLSearchParams(window.location.search);
	var success = urlParams.get('success');
  var error = urlParams.get('error');
	if(success == "customeradded"){
		alert("Customer Added");
	}
  if(error=="numnotfound"){

    
    alert("Client does not exist, please add new client below");
  }
    
</script>
</body>

</html>