<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
		<link rel="stylesheet" href=<?php echo $module_path; ?>/jstree/dist/themes/default/style.min.css />
</head>
<body>
  <div id="jstree">
    <ul>
      <li data-jstree='{"opened":true,"selected":true,"icon":<?php echo $module_path; ?>/assets/icons/root.png}'>Root
        <ul>
          <li data-jstree='{"icon":<?php echo $module_path; ?>/assets/icons/article.png}'>Article
            <ul>
              <?php 
                foreach ($query['article'] as $key)
                 echo "<li>" . $key . "</li>";
              ?>
            </ul>
          </li>
          <li data-jstree='{"icon":<?php echo $module_path; ?>/assets/icons/page.png}'>Page
            <ul>
              <?php 
                foreach ($query['page'] as $key)
                 echo "<li>" . $key . "</li>";
              ?>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  <script src=<?php echo $module_path; ?>/jstree/dist/libs/jquery.js></script>
  <script src=<?php echo $module_path; ?>/jstree/dist/jstree.min.js></script>
  <script>
  $(function ()
  {
    $('#jstree').jstree();
    $('#jstree').on("changed.jstree", function (e, data)
    {
      console.log(data.selected);
    });
  });
  </script>
</body>
</html>
