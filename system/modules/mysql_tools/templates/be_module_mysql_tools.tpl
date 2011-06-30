
<div id="tl_buttons">
<a href="<?php echo $this->href; ?>" class="header_back" title="<?php echo $this->title; ?>"><?php echo $this->button; ?></a>
</div>

<div id="tl_mysql_tools">

<h2 class="sub_headline sub_headline_mysql_tools"><?php echo $this->headline; ?></h2>
<p><?php echo $this->description; ?></p>
<p class="warning"><?php echo $this->warning; ?></p>

<form method="POST" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="FORM_SUBMIT" value="mysql_tools">
<input type="hidden" name="REQUEST_TOKEN" value="<?php echo REQUEST_TOKEN; ?>">
<select id="mysql_tools_select" name="mode" />
<option value="check"><?php echo $this->check; ?></option>
<option value="analyze"><?php echo $this->analyze; ?></option>
<option value="checksum"><?php echo $this->checksum; ?></option>
<option value="optimize"><?php echo $this->optimize; ?></option>
<option value="repair"><?php echo $this->repair; ?></option>
</select>

<div id="mysql_tools_options"></div>

<input type="submit" value="<?php echo $this->submit; ?>" />
</form>

<?php if($this->table != ''): ?>
<?php echo $this->table; ?>
<?php endif; ?>

</div>
