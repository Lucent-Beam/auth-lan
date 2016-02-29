<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Change</title>
  </head>
  <body>

    <form class="" action="postchange" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for=""><?php echo trans('example.newlang'); ?></label>
        <select class="" name="lang">
            <option>es</option>
            <option>en</option>
        </select>


    </form>

    <?php echo $lang; ?>

  </body>
</html>
