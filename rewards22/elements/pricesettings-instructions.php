
<script type="text/javascript" src="js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
   tinyMCE.init({
      mode : "textareas",
      theme : "simple",
      height : "300",
      editor_selector : "mceEditor"
   });
</script>


<div id="instructions" class="reveal-modal large">
  <h2>Instructions</h2>
   <form method="post" action="">
      <textarea id="content-instructions" class="mceEditor" name="instructions" cols="80" rows="80" style="width: 100%">

      </textarea>
      <br><br>
      <input type="submit" class="button radius right" value="Save Instructions">
   </form>
  <a class="close-reveal-modal">&#215;</a>
</div>