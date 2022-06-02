<table class="w100 fl">
	<colgroup>
    	<col width="50px">
        <col width="*">
        <col width="150px">
        <col width="150px">
    </colgroup>
	<thead>
        <tr>
            <th>No.</th>
            <th>제목</th>
            <th>작성자</th>
            <th>작성일</th>
        </tr>
    </thead>
    <tbody id="listbox">
	<?php
        $q = mq("select * from board order by no desc");
        while($d = mfa($q)){
    ?>
        <tr>
            <td><?php echo $d['no'];?></td>
            <td style="text-indent:15px; text-align:left;"><a href="/board/replyboard/view/<?php echo $d['no'];?>" title="<?php echo $d['title'];?>"><?php echo ut($d['title']);?></a></td>
            <td><?php echo $d['writer'];?></td>
            <td><?php echo $d['date'];?></td>
        </tr>
    <?php
        }
    ?>
    </tbody>
</table>
