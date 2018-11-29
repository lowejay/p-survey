<?php require('../controllers/session_controller.php');if(!$_SESSION['student_ID']){header('Location: ../index.php');}
require('../controllers/disorder_controller.php');
require('../views/header.php');require('../views/category_sidebar.php');
$result = disorderList(); 
$counter=1;?>
<body>
	<div id="colorlib-main">
		<div class="colorlib-work">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-md-pull-3">
						<h4 class="animate-box">Psychological Disorder Test</h4>
						<h1 class="animate-box" data-animate-effect="fadeInLeft">Questions</h1>
					</div>
				</div>
				<form action="../controllers/disorder_controller.php" method="post">
					<input type="hidden" name="student_id" value="<?php echo $_SESSION['student_ID'];?>">
					<div class="row">
						<div class="col-md-8 image-content">
							<table class="table table-striped table-hover animate-box" data-animate-effect="fadeInRight" id="disorder">
	                    	<tbody>
	                    		<?php while ($row = mysqli_fetch_array($result)) {?>
                    				<tr style="font-size: 15px">
                    					<td>
                    						<b><?php echo $counter++.'.'; ?>
                    						<?php echo $row['psych_question']; ?>
                    						</b>
                    					</td>
                					</tr>
            						<tr>
            							<td style="padding-bottom: 30px;">
            								<label class="radio-inline">
                								<input type="radio" name="answer_<?php echo $row['psych_id']?>" id="nv_<?php echo $row['psych_id']?>" value="0" required> Never
                							</label>
            								<label class="radio-inline">
                								<input type="radio" name="answer_<?php echo $row['psych_id']?>" id="rl_<?php echo $row['psych_id']?>" value="1" required> Rarely
                							</label>
            								<label class="radio-inline">
                								<input type="radio" name="answer_<?php echo $row['psych_id']?>" id="st_<?php echo $row['psych_id']?>" value="2" required> Sometimes
                							</label>   
            								<label class="radio-inline">
                								<input type="radio" name="answer_<?php echo $row['psych_id']?>" id="ot_<?php echo $row['psych_id']?>" value="3" required> Often
                							</label>   
            								<label class="radio-inline">
                								<input type="radio" name="answer_<?php echo $row['psych_id']?>" id="et_<?php echo $row['psych_id']?>" value="4" required> Everytime
                							</label>               								
            							</td>
            						</tr>	
                    			<?php } ?>
	                    	</tbody>
                        	</table>
						</div>
						<div class="col-md-4 sticky-parent">
							<div id="sticky_item">
								<div class="project-desc">
									<p><strong>PSYCHCARE</strong> is a free test that allows you to distinguish if you're experiencing such issues and through the system you can ask guidance to our reliable counselor here in the Univeristy. It is very important to reach out with the people you can trust with because this issues need attention and guidance.</p>
									<p><button type="submit" name="disorderAnswerPost" class="btn btn-primary">Submit and See Results </button>
									</p>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
    <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md m-t-100" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">Please keep in mind</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>PSYCHCARE</strong> is a free test that allows you to distinguish if you're experiencing issues such any psychological health related problems.
                     It is very important to open up with the people you can trust. Issues that are related to mental health needs attention and guidance as soon as possible. 
                     Through this system you can seek guidance on our reliable counselors here inside the University.
                    <br><h4> For the best experience and accurate result, please answer the questions honestly.</h4></p>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-primary">I agree and understand</button>
                </div>
            </div>
        </div>
    </div>
</body>
<?php require('../views/footer.php');?>