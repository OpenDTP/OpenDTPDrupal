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
            <?php
              if ($query->type === "article")
                echo $query->title;
             ?>
          </ul>
          <li>Page</li>
          <ul>
            <?php
              if ($query->type === "page")
                echo $query->title;
             ?>
          </ul>
          <li>Master</li>
          <ul>
            <?php
              if ($query->type === "master")
                echo $query->title;
             ?>
          </ul>
        </ul>
      </li>
    </ul>
  </div>
              <?php
              echo $query->type;
                echo $query->title;
             ?>
 <!-- <script src=<?php echo $module_path; ?>/jstree/dist/libs/jquery.js></script>
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
  </script> -->
</body>
</html>
