<!DOCTYPE html>
<html>
 
  <body>
    
<style>
  #navigator {
    position: sticky;
    top: 0;
    z-index: 1000;
  }

  #navigator .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  }

  @media (max-width: 720px) {
    #navigator {
      border-bottom: 1px solid #ccc;
    }
  }

  #navigator a {
    font-size: 14px;
  }

  #navigator+section {
    padding: 250px 0;
  }

</style>



<script>
  var page = window.location.pathname.split('/')
  page = page[page.length - 1]

  var nav = document.querySelector('a[href="' + page + '"]')
  if (nav) {
    nav.classList.add('active')
  }

</script>

 <!-- Footers 4 -->
 <footer class="fdb-block footer-small">
      <div class="container">
        <div class="row text-center align-items-center">
          <div class="col-12 col-sm-6 col-md-4 text-sm-left">
            <img alt="image" src="./imgs/logo.png" height="40">
          </div>
    
          <div class="col-12 col-sm-6 col-md-4 mt-4 mt-sm-0 text-center text-sm-right text-md-center">
            © 2013-2018 Froala
          </div>
    
          <div class="col-12 col-md-4 mt-4 mt-md-0 text-center text-md-right">
            <a href="https://www.froala.com" class="mx-2"><i class="fab fa-twitter" aria-hidden="true"></i></a>
            <a href="https://www.froala.com" class="mx-2"><i class="fab fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.froala.com" class="mx-2"><i class="fab fa-instagram" aria-hidden="true"></i></a>
            <a href="https://www.froala.com" class="mx-2"><i class="fab fa-pinterest" aria-hidden="true"></i></a>
            <a href="https://www.froala.com" class="mx-2"><i class="fab fa-google" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </footer>
    
    
   
    
    
   
   
    
    
   
   
   
    
  </body>
</html>