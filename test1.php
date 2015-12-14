myFunction(){
   ob_start();
   include('test.php');
   $page = ob_get_clean();
   return $page;
}
