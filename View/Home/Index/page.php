  <?php foreach ($data as $val) { ?>
   <section class="list">
       <span class="titleimg"> <a href="?c=Index&a=show&&id=<?php echo $val['dz_id'];?>" target="_blank">
  <img width="1000" height="556" src="./Public/Home/index_file/lo-1000x556.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="http://www.yzipi.com/wp-content/uploads/2018/02/ji.jpg 3000w, http://www.yzipi.com/wp-content/uploads/2018/02/ji-1000x556.jpg 1000w, http://www.yzipi.com/wp-content/uploads/2018/02/ji-768x427.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px">  </a> </span>
  <div class="mecc">
    <h2 class="mecctitle">
    <a href="?c=Index&a=show&&id=<?php echo $val['dz_id'];?>" target="_blank" id="<?php echo $val ['dz_id']?>"><?php echo $val['dz_title']; ?></a>
    </h2>
    <time><?php echo $val['fb_time']; ?></time>
  </div>
  <div class="zaiyao">
    <p><?php echo $val['dz_text']; ?></p>
  </div>
</section>
  <?php } ?>
<?php	echo $page->getPageList(); //输出分页列表 ?>