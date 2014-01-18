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
      <li>Root node 1
        <ul>
          <li id="child_node_1">Child node 1</li>
          <li>Child node 2</li>
        </ul>
      </li>
      <li>Root node 2</li>
    </ul>
  </div>
  <button>demo button</button>
  <?php
    foreach ($variables as $key) 
      echo $key
  ?>
  <script src=<?php echo $module_path; ?>/jstree/dist/libs/jquery.js></script>
  <script src=<?php echo $module_path; ?>/jstree/dist/jstree.min.js></script>
  <script>
  $(function () {
    // 6 create an instance when the DOM is ready
    $('#jstree').jstree();
    // 7 bind to events triggered on the tree
    $('#jstree').on("changed.jstree", function (e, data) {
      console.log(data.selected);
    });
    // 8 interact with the tree - either way is OK
    $('button').on('click', function () {
      $('#jstree').jstree(true).select_node('child_node_1');
      $('#jstree').jstree('select_node', 'child_node_1');
      $.jstree.reference('#jstree').select_node('child_node_1');
    });
  });
  </script>
</body>
</html>
