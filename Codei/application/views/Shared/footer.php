<?php 

$list_scripts = array();
    
if(isset($scripts))
{
	$list_scripts = $scripts;
}
?>
<footer>
    <div class="container text-center">
        <p>mfnunez36 &copy; Futbolistas 2016</p>
    </div>
</footer>


<script src="<?= site_url('js/jquery.min.js') ?>"></script>
<script src="<?= site_url('js/bootstrap.min.js') ?>"></script>
<?php foreach ($list_scripts as $script) { ?>
	<script src="<?= site_url("js/".$script); ?>"></script>
<?php } ?>
</body>
</html>