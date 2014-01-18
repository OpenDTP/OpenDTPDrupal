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
          <li>Article
            <ul>
              <?php
                if ($query->type === "article")
                 echo "<li>" + $query->title + "</li>";
              ?>
            </ul>
          </li>
          <li>Page
            <ul>
              <?php
                if ($query->type === "page")
                  echo "<li>" + $query->title + "</li>";
               ?>
            </ul>
          </li>
          <li>Master
            <ul>
              <?php
                if ($query->type === "master")
                  echo "<li>" + $query->title + "</li>";
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
