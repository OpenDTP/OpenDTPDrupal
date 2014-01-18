<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>jsTree test</title>
		<link rel="stylesheet" href=<?php echo $module_path; ?>/jstree/dist/themes/default/style.min.css />
</head>
<body>
  <div id="jstree">
    <ul>
      <li>Root
        <ul>
          <li>Article</li>
          <ul>

          </ul>
          <li>Page</li>
          <ul>
          
          </ul>
          <li>Master</li>
          <ul>
          
          </ul>
        </ul>
      </li>
    </ul>
  </div>
  <?php
    foreach ($query as $key)
    {
      echo $key['type'] + "</br>";
      echo $key['title'];
    }
  ?>
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
