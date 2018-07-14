<div class="left">
    <div class="sidebar-block">
        <div class="sidebar-block-title">
            <?php
            $top_title = mysqli_query($con, "SELECT * FROM blocks_ttitles where url='zakonodatelsttvo'");
            $top_title_assoc = mysqli_fetch_assoc($top_title);
            ?>
            <a href="<?php echo $base_url ?>cat/<?php echo $top_title_assoc['url']; ?>">
                <?php
                echo $top_title_assoc['title'];
                ?>
                (<?php echo count_child(1); ?>)

            </a>
        </div>
        <div class="sidebar-block-nav">
            <ul class="sidebar-block-menu">
                <?php
                $top = mysqli_query($con, "SELECT * FROM sudebnaya_praktika where parent = 1");
                while($top_assoc = mysqli_fetch_assoc($top)){
                    ?>
                    <li><a href="<?php echo $base_url ?>page/<?php echo $top_assoc['url']; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $top_assoc['title']; ?> <span class="number"></span></a></li>
                <?php }
                ?>
            </ul>
        </div>
    </div>
    <div class="sidebar-block">
        <div class="sidebar-block-title">
            <?php
            $center_title = mysqli_query($con, "SELECT * FROM blocks_ttitles where url='sudebnaya_praktika'");
            $center_title_assoc = mysqli_fetch_assoc($center_title);
            ?>
            <a href="<?php echo $base_url ?>cat/<?php echo $center_title_assoc['url']; ?>">
                <?php
                echo $center_title_assoc['title'];
                ?>
                (<?php echo count_child(2); ?>)
            </a>
        </div>
        <div class="sidebar-block-nav">
            <ul class="sidebar-block-menu">
                <?php
                $center = mysqli_query($con, "SELECT * FROM sudebnaya_praktika where parent = 2");
                while($center_assoc = mysqli_fetch_assoc($center)){
                    ?>
                    <li><a href="<?php echo $base_url ?>page/<?php echo $center_assoc['url']; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $center_assoc['title']; ?> <span class="number"></span></a></li>
                <?php }
                ?>
            </ul>
        </div>
    </div>
    <div class="sidebar-block">
        <div class="sidebar-block-title">
            <?php
            $bottom_title = mysqli_query($con, "SELECT * FROM blocks_ttitles where url='dogovori'");
            $bottom_title_assoc = mysqli_fetch_assoc($bottom_title);
            ?>
            <a href="<?php echo $base_url ?>cat/<?php echo $bottom_title_assoc['url']; ?>">
                <?php
                echo $bottom_title_assoc['title'];
                ?>
                (<?php echo count_child(3); ?>)
            </a>
        </div>
        <div class="sidebar-block-nav">
            <ul class="sidebar-block-menu">
                <?php
                $botttom = mysqli_query($con, "SELECT * FROM sudebnaya_praktika where parent = 3");
                while($bottom_assoc = mysqli_fetch_assoc($botttom)){
                    ?>
                    <li><a href="<?php echo $base_url ?>page/<?php echo $bottom_assoc['url']; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $bottom_assoc['title']; ?> <span class="number"></span></a></li>
                <?php }
                ?>
            </ul>
        </div>
    </div>
</div>