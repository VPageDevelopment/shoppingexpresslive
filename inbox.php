<?php/
    session_start();
    //print_r($_SESSION); die;
	include_once ('header.php');
	// old query: SELECT * FROM fms_email  WHERE touserid ='".$_SESSION['SESS_USER_ID']."' AND status='0' AND inboxstatus='0' AND trash = 0 ORDER BY createdtime DESC
	$result = mysql_query("SELECT * FROM fms_email  WHERE touserid ='".$_SESSION['SESS_USER_ID']."' AND trash ='0' ORDER BY createdtime DESC") or die(mysql_error());
	$numrows = mysql_num_rows($result);
?>

	<div class="right_col" role="main">
        <div class="">
			<div class="page-title">
				<div class="title_left">
					<h3>Inbox</h3>
				</div>

				<div class="title_right">
					<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search for...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">Go!</button>
							</span>
						</div>
					</div>
				</div>
            </div>
            <div class="clearfix"></div>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2> Inbox</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        
                                        <li><a href="#"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

								<?php if($numrows > 0){ ?>
                                    <div class="row">

                                        <div class="col-sm-3 mail_list_column">
											<?php while($row = mysql_fetch_assoc($result)){ 
												$string = $row['description'];
												$string = (strlen($string) > 100) ? substr($string,0,100).'...' : $string;
												$time = $row['createdtime'];
												$time = date("h:i",strtotime($time));
											?>
											<div class="mail_list">
                                                <div class="left">
                                                    <i class="fa fa-circle"></i> <?php if($row['isread'] == 1){  ?><i class="fa fa-edit"><?php } ?></i>
                                                </div>
                                                <div class="right">
                                                    <h3><a href="inbox.php?mailid=<?php echo $row['id']; ?>"> <?php echo $row['subject']; ?> </a> <small><?php echo $time; ?></small></h3>
                                                    <p><?php echo $string; ?></p>
                                                </div>
                                            </div>
											<?php } ?>    
                                        </div>
                                        <!-- /MAIL LIST -->

											<?php  
												if(isset($_REQUEST['mailid'])){
													$results = mysql_query("SELECT * FROM fms_email  WHERE touserid ='".$_SESSION['SESS_USER_ID']."' AND status='0' AND trash='0' AND id='".$_REQUEST['mailid']."' ");
													$rows = mysql_fetch_assoc($results);
													$updateread = mysql_query("UPDATE `fms_email` SET `isread` = '1' WHERE `id` = '".$_REQUEST['mailid']."'");
												}else{
													$results = mysql_query("SELECT * FROM fms_email  WHERE touserid ='".$_SESSION['SESS_USER_ID']."' AND status='0' AND trash='0' ORDER BY createdtime DESC LIMIT 0,1 ");
													$rows = mysql_fetch_assoc($results);
												}
												$times = $rows['createdtime'];
												$times = date("h:i A d M Y",strtotime($times));
											?>
                                        <!-- CONTENT MAIL -->
                                        <div class="col-sm-9 mail_view">
                                            <div class="inbox-body">
                                                <div class="mail_heading row">
                                                    <div class="col-md-8">
                                                        <div class="compose-btn">
                                                            <a class="btn btn-sm btn-primary" onclick="DeleteFunction('ReplyEmail.php?mailid=<?php echo$rows['id']; ?>&mode=Reply');"><i class="fa fa-reply"></i> Reply</a>
                                                            <button title="" data-placement="top" data-toggle="tooltip" type="button" data-original-title="Print" class="btn  btn-sm tooltips"><i class="fa fa-print"></i> </button>
															<button title="" data-placement="top" data-toggle="tooltip" onclick="DeleteFunction('Delete.php?mailid=<?php echo$rows['id']; ?>&mode=MailBox');" data-original-title="Trash" class="btn btn-sm tooltips"><i class="fa fa-trash-o"></i>
                                                            </button>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4 text-right">
                                                        <p class="date"> <?php echo $times; ?></p>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h4> <?php echo $rows['subject']; ?></h4>
                                                    </div>
                                                </div>
                                                <div class="sender-info">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <strong><?php echo $rows['fromname']; ?></strong>
                                                            <span>(<?php echo $rows['fromemail']; ?>)</span> to
                                                            <strong>me</strong>
                                                            <a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="view-mail">
													<?php echo $rows['description']; ?>
                                                </div>
												<?php if($rows['attachmentpath'] != ''){ ?>
                                                <div class="attachment">
                                                    <p>
                                                        <span><i class="fa fa-paperclip"></i> 1 attachments - </span>
                                                        <a href="<?php echo $rows['attachmentpath']; ?>">Download attachments</a> <!-- |
                                                        <a href="#">View all images</a> -->
                                                    </p>
                                                    <ul>
                                                        <li>
                                                            <a href="#" class="atch-thumb">
                                                                <img src="<?php echo $rows['attachmentpath']; ?>" alt="img" />
                                                            </a>
                                                            <div class="file-name">
                                                                <?php echo $rows['attachment']; ?>
                                                            </div> 
                                                            <span> <?php echo formatSizeUnits(filesize($rows['attachmentpath'])); ?></span>
                                                            <div class="links">
                                                                <a href="<?php echo $rows['attachmentpath']; ?>" target="_blank">View</a> -
                                                                <a href="<?php echo $rows['attachmentpath']; ?>">Download</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
												<?php } ?>
                                                <div class="compose-btn pull-left">
                                                    <a class="btn btn-sm btn-primary" onclick="DeleteFunction('ReplyEmail.php?mailid=<?php echo$rows['id']; ?>&mode=Reply');"><i class="fa fa-reply"></i> Reply</a>
                                                    <button class="btn btn-sm " onclick="DeleteFunction('ForwardEmail.php?mailid=<?php echo$rows['id']; ?>&mode=Forward');"><i class="fa fa-arrow-right" ></i> Forward</button>
                                                    <button title="" data-placement="top" data-toggle="tooltip" type="button" data-original-title="Print" class="btn  btn-sm tooltips"><i class="fa fa-print"></i> </button>
                                                    <button title="" data-placement="top" onclick="DeleteFunction('Delete.php?mailid=<?php echo$rows['id']; ?>&mode=MailBox');" data-toggle="tooltip" data-original-title="Trash" class="btn btn-sm tooltips"><i class="fa fa-trash-o"></i>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /CONTENT MAIL -->
                                    </div>
									<?php }else{ ?>
									 <div class="row">
										No Emails To Show
									 </div>
									<?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
	  
<?php
	include_once ('footer.php');
    function formatSizeUnits($bytes)
    {
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;
	}
?>