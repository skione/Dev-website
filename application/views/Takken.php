<div class="container">

	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="/"><span class="fa fa-home"></span></a></li>
				<li class="active">Takken</li>
			</ol>
		</div>
			<div class="col-md-3">
				<div class="panel panel-default">
          <div class="panel-heading">Takken:</div>
          <div class="list-group">
            <a class="list-group-item" href="/index.php/takken/Kapoenen"><span class="fa fa-asterisk"></span> De kapoenen</a>
            <a class="list-group-item" href="/index.php/takken/Welpen"><span class="fa fa-asterisk"></span> De welpen</a>
            <a class="list-group-item" href="/index.php/takken/Jonggivers"><span class="fa fa-asterisk"></span> De jong-givers</a>
            <a class="list-group-item" href="/index.php/takken/Givers"><span class="fa fa-asterisk"></span> De givers</a>
            <a class="list-group-item" href="/index.php/takken/Jins"><span class="fa fa-asterisk"></span> De jins</a>
            <a class="list-group-item" href="/index.php/takken/Leiding"><span class="fa fa-asterisk"></span> De leiding</a>
          </div>
        </div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default">
  				<div class="panel-body">

    				<div style="margin-top: -10px;" class="page-header">
    					<h3 style="margin-bottom: -2px;">Takken</h3>
    				</div>

    				<?php

    					foreach ($rows as $r) {
    						echo '<h1> ' . $r->Tak . '</h1>';
    					}

    				?>

  				</div>
				</div>
			</div>			
		</div>   

</div><!-- /.container -->