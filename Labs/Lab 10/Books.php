<!DOCTYPE html>
<?php
$xml = file_get_contents("http://www.rejaul.com/CST8238/Lab10/Books.xml");
$catalog = new DOMDocument();
$catalog->loadXML($xml);
$books = $catalog->getElementsByTagName('book');
?>

<html>
  <body>
   <?php
include("Header.php");
include("Menu.php");
?>
    
      <div class="center">
        <?php
        echo '<table>';
        echo '<tr>';
        echo '<th>Author</th>';
        echo '<th>Title</th>';
        echo '<th>Genre</th>';
        echo '<th>Price</th>';
        echo '<th>Publish Date</th>';
        echo '<th>Description</th>';
        echo '</tr>';
        foreach($books as $book)
        {
          echo '<tr>';
          foreach($book->childNodes as $book_info)
          {
            if ($book_info->nodeName == "author")
            {
              echo "<td>$book_info->nodeValue</td>";
            }
            if ($book_info->nodeName == "title")
            {
                echo "<td>$book_info->nodeValue</td>";
            }
            if ($book_info->nodeName == "genre")
            {
                echo "<td>$book_info->nodeValue</td>";
            }
            if ($book_info->nodeName == "price")
            {
                echo "<td>$book_info->nodeValue</td>";
            }
            if ($book_info->nodeName == "publish_date")
            {
                echo "<td>$book_info->nodeValue</td>";
            }
            if ($book_info->nodeName == "description")
            {
                echo "<td>$book_info->nodeValue</td>";
            }
          }
          echo '</tr>';
        }
        echo '</table>';
        ?>
    </div>
  
  </body>
    <?php    
  include("Footer.php");
  ?>
</html>