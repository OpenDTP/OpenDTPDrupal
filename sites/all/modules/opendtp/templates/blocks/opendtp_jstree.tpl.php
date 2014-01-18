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
            <?php
              if ($query->type == "article")
                echo "<ul>" + $query->title + "</ul>";
             ?>
          <li>Page</li>
            <?php
              if ($query->type == "page")
                echo "<ul>" + $query->title + "</ul>";
             ?>
          <li>Master</li>
            <?php
              if ($query->type == "master")
                echo "<ul>" + $query->title + "</ul>";
             ?>
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
