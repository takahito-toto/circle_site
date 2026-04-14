
<?php $info = file_get_contents("info.txt"); ?>
 <!doctype html>
 <html lang="ja">
   <head>
     <?php include('navbar.php'); ?>
     <main role="main" class="container" style="padding:60px 15px 0">
         <div>
-
-            <h1>お知らせ</h1>
-
+            <p><?php echo $info; ?></p>
         </div>
     </main>
 
