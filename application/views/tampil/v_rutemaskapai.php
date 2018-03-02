<!DOCTYPE html>
<html>
<head>
	<title>Lihat maskapai</title>
</head>
<body>
	<div class="table-responsive">
		<table id="table_id" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Maskapai</th>
					<th>Pemberangkatan</th>
					<th>Dari</th>
					<th>Tujuan</th>
					<th>Harga</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach($show->result() as $trute)
				{?>
					<tr>
						<td><?php echo $trute->id ?></td>
						<td><?php echo $trute->transportationid ?></td>
						<td><?php echo $trute->depart_at ?></td>
						<td><?php echo $trute->rute_from ?></td>
						<td><?php echo $trute->rute_to ?></td>
						<td><?php echo $trute->price ?></td>
						<td>
							<!-- <div class="btn btn-warning"><?php echo anchor('admin/update_rute/'.$trute->id,'Edit'); ?></div> -->
							<a class="btn btn-warning" href="<?php echo base_url('admin/update_rute/'.$trute->id);?>">Edit</a> 	
							<button class="btn btn-danger" onclick="hapus_user(<?php echo $trute->id;?>)">Hapus</button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
		<script type="text/javascript">
	  		$(document).ready( function () {
	     	$('#table_id').DataTable();
	  		} );

	    	var save_method; //for save method string
	    	var table;

	    	function ngedit_user(id)
	    	{
	      		save_method = 'update';
	      		$('#form')[0].reset(); // reset form on modals

		      	//Ajax Load data from ajax
		      	$.ajax({
			        url : "<?php echo base_url('user/user/edit_profile/')?>/" + id,
			        type: "GET",
			        dataType: "JSON",
			        success: function(data)
			        {
			        	$('[name="id"]').val(data.id);
			        	$('[name="id"]').val(data.id);
			        	$('[name="username"]').val(data.username);	
			            $('[name="fullname"]').val(data.fullname);
			            $('[name="email"]').val(data.email);

			            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
			            $('.modal-title').text('Edit User'); // Set title to Bootstrap modal title

		        },
	
	    		});
	    	}

	    	function hapus_user(id)
		    {
		      var url = "<?php echo base_url(''); ?>";
		      if(confirm('Anda yakin akan menghapus user dengan id ' + id + '?'))
		      {
		      	if (true) 
		      	{
		      		window.location = url+"admin/hapus_rute/"+id;
		      	}
		      	else
		      	{
		      		return false;
		      	}
		      }
		    }

		    function save()
		    {
		    	var url;
		      	if (save_method == 'update')
		      	{
		       		url = "<?php echo base_url('admin/admin/update_user')?>";
		      	}

		       // ajax adding data to database
		          $.ajax({
		            url : url,
		            type: "POST",
		            data: $('#form').serialize(),
		            dataType: "JSON",
		            success: function(data)
		            {
		               //if success close modal and reload ajax table
		               $('#modal_form').modal('hide');
		              location.reload();// for reload a page
		            },
		            error: function (jqXHR, textStatus, errorThrown)
		            {
		                alert('Terjadi kesalahan!');
		            }
		        });
		    }
		</script>
</html>