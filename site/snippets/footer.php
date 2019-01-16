


</div>
<footer class="text-muted">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <div class="float-right">
            <?php if( $page->slug() == 'contact'): ?>
                <a href="mailto:post@jonasganz.ch" class="btn-footer">Say HELLO</a>
            <?php else: ?>
                <a href="/contact" class="btn-footer">Info</a>
            <?php endif; ?>
          </div>
        </div>
    </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

<script>
    $(document).ready(function() {
        $('.grid').masonry({

        });    
    });

    if( $('.p-detail').length  ){

        $(window).scroll(function () {
            var scrollHeight = $(document).height()-60;
            var scrollPosition = $(window).height() + $(window).scrollTop();

            if (scrollHeight < scrollPosition) {
            // if ($(this).scrollTop() > 280) {
              $('#navmenu').prop('checked', true);
            } else {
              $('#navmenu').prop('checked', false);
            }
        });
    }

</script>
</body>
</html>