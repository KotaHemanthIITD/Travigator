 @include('up')
    <title>Transport Corporations</title>

     <div id="section" style="margin-left:40px;"> 	
    
 <style>
p {
    text-transform: uppercase;
}
</style>
<?php

$result = $data[0];
$source = $data[1];
$city = $data[2];

echo '<h1><p> Select the Transport Corporation in '.$city.' </p></h1></br></br>';
if(sizeof($result)==0){
	echo "No Results Found.\n";
}
else{
	echo Form::open(array('url'=> $source,'method' => 'POST')) ;
	echo Form::hidden('source', $source);
	foreach($result as $row){
		echo Form::hidden('type', 'trans');
		echo '<label>'.Form::radio('selec', $row->transport_corp).' <p style="font-size:24px;display: inline;">'.$row->transport_corp.'</p></label><br>';
		//echo '<p style="font-size:24px;display: inline;">  '.Form::label($row->transport_corp). '</p></br>';
	
	}
	echo  '</br>'.'</br>' ;
	echo Form::submit('select',['class' =>'btn btn-primary btn-lg']);
	echo Form::close();
}

?>

      </div>

