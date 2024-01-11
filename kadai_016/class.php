<html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>Kadai_016</title>
 </head>

<body>
<p>

         <?php
         // クラスを定義する
         class Food {

          // プロパティを定義する                        
             private $name;
             private $price;
         

             // コンストラクタを定義する
             public function __construct(string $name, int $price) {
              $this->name = $name;
              $this->price = $price;
             }
             public function show_price(){
              echo $this->price;
             } 
            } 

         // クラスを定義する
         class Animal {
             // プロパティを定義する                        
             private $name;
             private $height; 
             private $Weight;
           

             // コンストラクタを定義する
             public function __construct(string $name,int $height,int $Weight) {
                 $this->name = $name;
                 $this-> height= $height;
                 $this-> Weight= $Weight;
             }
             public function show_height(){
              echo $this->height;
             } 
            }

          // インスタンス化する
          $food = new food('potato', 250);
            // インスタンス化する
         $Animal = new Animal('dog', 60,5000);
         

           // インスタンス$userの各プロパティの値を出力する
           print_r($food);
           echo '<br>'; 
        // インスタンス$userの各プロパティの値を出力する
         print_r($Animal);
         echo '<br>'; 
         
   $food->show_price(); 
   echo '<br>'; 
   $Animal->show_height();
         ?>
     </p>
</body>
</html>