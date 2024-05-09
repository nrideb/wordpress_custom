<?php
    // Template Name:add news
    get_header();
    if(isset($_POST['savenews'])){
        $id=wp_insert_post(array(
            "post_type"=>"news",
            "post_status"=>"draft",
            "post_title"=>$_POST["title"],
            "post_content"=>$_POST["desc"],
        ));//it is used for  adding new post in the database.

        wp_set_object_terms($id,$_POST['sl_cat'],'news_category');// it is used to  set category of the added post.
    }
?>

<form method="post">
  <div class="form-group">
    <label for="title">News title:</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label for="desc">Description:</label>
    <textarea name="desc"  cols="30" rows="10"></textarea>
  </div>
  <div class="form-group">
    <select name="sl_cat">
        <option value="0">Select Category</option>
        <?php  
        $cat=get_terms(['taxonomy'=>'news_category','hide_empty'=>false,'orderby'=>'name','order'=>'DESC','parent'=>0]);
        foreach ($cat as $c){
            ?>
            <option value="<?=$c->name;?>"><?=$c->name;?></option>
            <?php
        }
        ?>
    </select>
  </div>
  
  <button type="submit" class="btn btn-default" name="savenews">Submit</button>
</form>

<?php
   
    get_footer();
?>