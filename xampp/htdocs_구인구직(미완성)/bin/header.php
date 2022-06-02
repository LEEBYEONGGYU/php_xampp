<header>
	<div class="header">
		<div class="logo">
			<a href="/"><?php img("/img/logo.png","logo"); ?></a>
		</div>
		<div class="menu">
			<ul>
			<?php
				$sql = mq("select * from menu where lv='1'");
				while($main = $sql->fetch_array()){
		
					$sql3 = mq("select * from menu where lv='2' && main='".$main['main']."'");
				$sub2 = $sql3->fetch_array()
			?>
			<li><a href="/<?php echo $main['main']; ?>/<?php echo $sub2['sub'] ?>"><?php echo $main['title']; ?></a>
				<ul>
					<?php
				$sql2 = mq("select * from menu where lv='2' && main='".$main['main']."'");
				while($sub = $sql2->fetch_array()){		
			?>
					<li>
						<a href="/<?php echo $main['main']; ?>/<?php echo $sub['sub'] ?>"><?php echo $sub['title']; ?>	</a>
					</li>
				<?php
				}
					?>
				</ul>
			</li>
			<?php
				}
			?>
			</ul>
		</div>
	</div>
</header>