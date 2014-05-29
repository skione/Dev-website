<div class="container">

	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="/"><span class="fa fa-home"></span></a></li>
				<li><a href="/index.php/takken">Takken</a></li>
        <li class="active">Kapoenen</li>
			</ol>
		</div>
			<div class="col-md-3">
				<div class="panel panel-default">
          <div class="panel-heading">Wat doen we?</div>
          <div class="panel-body">
            <ul class="list-activiteiten">
              <?php foreach($row as $a): ?>
                <li><a href=""> <?php echo $a->Title; ?> </a></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default">
  				<div class="panel-body">

    				<?php foreach($rows as $r): ?>
              <div style="margin-top: -10px;" class="page-header">
                <h3 style="margin-bottom: -2px;"> <?php echo $r->Title; ?> <small> <?php echo $r->Sub_title; ?> </small> </h3>
              </div>

              <?php echo $r->content; ?>

            <?php endforeach; ?>

  				</div>
				</div>
			</div>			
		</div>   

</div><!-- /.container -->