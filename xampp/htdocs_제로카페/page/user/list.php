<table>
	<thead>
    	<tr>
            <th>No.</th>
            <th>아이디</th>
            <th>전화번호</th>
            <th>이메일</th>
            <th>승인여부</th>
		</tr>
    </thead>
    <tbody>
    	<?php
			$q = mq("select * from user where ok=0 order by no desc");
			while($d = mfa($q)){
		?>
        	<tr>
            	<td><?php echo $d['no'];?></td>
            	<td><?php echo $d['id'];?></td>
            	<td><?php echo $d['phone'];?></td>
            	<td><?php echo $d['email'];?></td>
            	<td><button onClick="user_ok('<?php echo $d['no'];?>');">승인</button></td>
            </tr>
        <?php
			}
		?>
    </tbody>
</table>