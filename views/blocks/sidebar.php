<h3>Hello</h3>
<ul class="nav nav-tabs nav-stacked">
    <?php if ($logged = isLogged()): ?>
    <li><a href="#">Welcome <strong><?php echo $logged['name']; ?></strong></a></li>
    <?php else: ?>
    <li><a href="#">Khách</a></li>
    <?php endif; ?>
</ul>
