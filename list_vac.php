<?php
/*
    filename: list_vac.php
	展示历史假期信息列表
    下面的函数都是和vac表格绑定的
*/


// 根据SQL语句，显示查询结果

	require("connect.php");

    $sql = "SELECT * FROM vac WHERE stuid = ".$stuid;
	$result = mysqli_query($conn, $sql);

	if ($result && mysqli_num_rows($result)) {
		echo '
                <div class="table-responsive">
                        <table id="sample-table-1" class="table table-striped table-bordered table-hover">
							<thead>
                                                <tr>
                                                    <th>假期类型</th>
                                                    <th>离校时间</th>
                                                    <th>返校时间</th>
                                                    <th>假期去向</th>
                                                    <th>备注</th>
                                                </tr>
                            </thead>
              ';

		while ($row = mysqli_fetch_assoc($result)) {
            $vac_type = $row['vac_type'];
            $vac_dep_time = $row['vac_dep_time'];
            $vac_Return_time = $row['vac_Return_time'];
            $vac_gos = $row['vac_gos'];
            $vac_remarks = $row['vac_remarks'];

            /*
            echo '
            <tbody id="content" class="easyui-panel" style="height:200px" data-options="href:\'\'">
					<tr class="listTr">
			';
            */
            echo '
            <tbody>
					<tr>
			';

            echo "<td>$vac_type</td>";
            echo "<td>$vac_dep_time</td>";
            echo "<td>$vac_Return_time</td>";
            echo "<td>$vac_gos</td>";
            echo "<td>$vac_remarks</td>";
            echo '
                    </tr>
            </tbody>
            ';
		}
		
		echo '
                </table>
                </div><!-- queryBox -->
                </div><!-- querylist -->
              ';
	} else {
		echo '无数据！';
	}

	mysqli_close($conn);

?>