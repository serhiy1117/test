
        <?php
        class Pablication 
        {
            public $id;
            public $title;
            public $date;
            public $short_content;
            public $content;
            public $author_name;
            public $preview;
            public $type;
            
            function __construct($row)
            {
                $this->id = $row['id'];
                $this->title = $row['title'];        
                $this->date = $row['date'];
                $this->shot_content = $row['shot_content'];       
                $this->content = $row['content'];
                $this->author_name = $row['author_name'];
                $this->preview = $row['preview'];
                $this->type = $row['type'];        
            }
            
       
        }
 class NewsPablication extends Pablication
        {
     public function printItem()
             {
      echo '<br> Новость: ',  $this->title;
      
         echo '<br> дата :'.$this->date;
         echo '<hr>';
         
     }
 }
 class ArticlePablication extends Pablication
 {
     public function printItem()
             {
      
         echo '<br>  стаття' .$this->title;
         echo '<br> Автор: '.$this->author_name;
         echo '<hr>';
         
         
     }
 }
 class PhotoReportPablication extends Pablication
 {
     public function printItem() 
             {
         echo '<br> ето фотоочет: ' .$this->title;
         echo '<br><img src="http://localhost/test3/'.$this->preview.'">';
       
         echo '<hr>';
             
         
     }    
 }

        ?>

