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
              foreach ($query as $key) 
                if ($key === "article")
                 echo "<li>" . $query->title . "</li>";
              ?>
            </ul>
          </li>
          <li>Master
            <ul>
              <?php 
              foreach ($query as $key) 
                if ($key->type === "master")
                 echo "<li>" . $key->title . "</li>";
              ?>
            </ul>
          </li>
          <li>Page
            <ul>
              <?php 
              foreach ($query as $key) 
                if ($key->type === "page")
                 echo "<li>" . $key->title . "</li>";
              ?>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </div>
                <?php 
              foreach ($query as $key) 
                {echo "title" . $key->title;
                  echo "type" . $key->type;
                  echo "key" . $key;
                  print_r($key);
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
