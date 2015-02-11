<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta charset="UTF-8">
    <title>*JOSHNET*</title>
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/demo/demo.css">
   <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
	<style type="text/css">
		#fm{
			margin:0;
			padding:10px 30px;
		}
		.ftitle{
			font-size:16px;
			font-weight:bold;
			color:#666;
			padding:5px 0;
			margin-bottom:10px;
			border-bottom:1px solid #ccc;
		}
		.fitem{
			margin-bottom:5px;
		}
		.fitem label{
			display:inline-block;
			width:80px;
		}
	</style>
	<script type="text/javascript">
		var url;
		function CAMION(){
			$('#ven').dialog('open').dialog('setTitle','ARTICULOS EN EL CAMION');
			$('#ventana').form('clear');
			url= 'articulos_camion.php?id='+row.id;
					
		}
		
		
		
function mesage(){
            $.messager.show({
                title:'ASISTENCIA',
                msg:'INGRESADO',
                showType:'slide',
                style:{
                    right:'',
                    top:document.body.scrollTop+document.documentElement.scrollTop,
                    bottom:''
                }
            });
        }
</script>
		
		
	</script>
</head>
<body>
    <!------------------------eNCABEZADO-------------------------------------------------------------------->
    
    <div class="easyui-layout" style="width:1300px;height:640px;">
        <div data-options="region:'north'" style="height:100px">
		<BR></BR>
		<CENTER><h2>*ALAPER S.A. DE C.V.*</h2></CENTER>
		</div>
		
<!--------------------------------------------PIE DE PAGINA------------------------------>		
        <div data-options="region:'south',split:true" style="height:70px;">
		<CENTER><h1>TEL: 56530675 | CONTACTENOS HORARIO DE ATENCION 9:00 A.M. A 3:00 P.M | ALAPER@GMAIL.COM</h1></CENTER>
		<CENTER><h1>AV.PROLONGACION DIVICION DEL NORTE N°51</h1></CENTER>
		</div>
		
        
		
<!-------------------------SERVICIOS----------------------------------------------------------------------------------------------------------------------------->	
		
        <div data-options="region:'west',split:true" title="SERVICIOS" style="width:160px;">
            <div class="easyui-accordion" data-options="fit:true,border:false">
                
                <div title="COBROS" data-options="selected:true" style="padding:10px;">
                    ¡CUENTAS QUE SE DEBEN COBRAR HOY!
                </div>
                <div title="ATRASOS" style="padding:10px">
                  ¡CUENTAS QUE PRESENTAN ATRASOS EN SU PAGO!
                </div>
				<div title="CAMION" data-options="selected:true" style="padding:10px;">
                    ¡ARTICULOS CON LOS QUE CUENTA EL VENDEDOR!
					<br>
					<br>
				   <div style="padding:5px;background:#fafafa;width:100px;border:1px solid #ccc">
                   <a href="#" class="easyui-linkbutton" iconCls="icon-print" onclick="CAMION()">REPORTE</a>
                  </div>
					
                </div>
				
				
				<div title="SOCIALES" style="padding:10px;">
				<br></br>
                   <a href="https://www.facebook.com/"> <img src ="facebook.jpg"></a> 
				    <a href="https://twitter.com/"> <img src ="twitter.jpg"></a> 
					 <a href="https://www.google.com.mx/"> <img src ="google.jpg"></a> 
					  <a href="https://www.youtube.com/"> <img src ="youtube.png"></a> 
                </div>
				
            </div>
        </div>
		
<!-------------------------------------------- CENTER---------------------------------------------------------------------------------------------------------->		
        <div data-options="region:'center',title:'*SISTEMA DE CONTROL DE VENTAS DE CANVASEO*',iconCls:'icon-ok'">
            
	     <div class="easyui-panel" style="padding:10px; ">
         <a href="principal.php" class="easyui-linkbutton" iconCls="icon-tip" plain="true"  >INICIO</a>
         <a href="..\alaper\usuarios\usuarios.php" class="easyui-linkbutton"  iconCls="icon-tip" plain="true"  >USUARIOS</a>
         <a href="..\alaper\articulos\articulos.php" class="easyui-linkbutton"  iconCls="icon-tip" plain="true"  >ARTICULOS</a>
         <a href="..\alaper\clientes\clientes.php" class="easyui-linkbutton"  iconCls="icon-tip" plain="true"  >CLIENTES</a>
		 <a href="..\alaper\ventas\ventas.php" class="easyui-linkbutton"  iconCls="icon-tip" plain="true"  >VENTAS</a>
		 <a href="..\alaper\contratos\contratos.php" class="easyui-linkbutton"  iconCls="icon-tip" plain="true" >CONTRATOS</a>
		 <a href="..\alaper\abonos\abonos.php" class="easyui-linkbutton"  iconCls="icon-tip" plain="true"  >ABONOS</a>
		 <a href="..\alaper\nomina\nomina.php" class="easyui-linkbutton"  iconCls="icon-tip" plain="true" >NOMINA</a>
		 <a href="..\alaper\personal\personal.php" class="easyui-linkbutton"  iconCls="icon-tip" plain="true"  >PERSONAL</a>
		 <a href="salir.php" class="easyui-linkbutton"  iconCls="icon-tip" plain="true"  >SALIR</a>
		
        
    </div> 
<!--asistencia-->
      <div id="p" class="easyui-panel" style="width:1135px;height:390px;">
       <center> <embed wmode="transparent" src="http://www.poodwaddle.com/clock5" width="190" height="190" type="application/x-shockwave-flash" bgcolor="#FFFFFF" /></center>
       
	   <form action="asistencia.php" method="post">
           <br></br>
         <h2><CENTER><script type="text/javascript">
          var d = new Date();
          document.write('Fecha: '+d.getDate(),'/ '+d.getMonth(),'/ '+d.getFullYear());
          </script></CENTER></h2>
         <BR></BR>
		  <CENTER>
		  
		  <div>
           <label for="name">N° PERSONAL</label>
           <input type="text" name="asis" class="easyui-validatebox" required="true"></input>
          </div>
	
                
		<br></br>
   
       <center>
	   <div>
        <input type="submit" value="Aceptar" onclick="mesage()">
        </div> </center>
      </form>
	
    </div>
	<!-----------------------------------------ventana------------------------------------------------------------------------>
	
	<div class="demo-info" style="margin-bottom:0px">
		<div class="demo-tip icon-tip">&nbsp;</div>
		
	</div>
	
	<div id="ven" class="easyui-dialog" style="width:550px;height:340px;padding:10px 10px"
			closed="true" buttons="#ven-buttons">
		<div class="ftitle">INFORMACION</div>
		
		<form id="ventana" method="post" novalidate>
			
			
			
			<center><table id="camion" title="DETALLE DE CAMION" class="easyui-datagrid" style="width:500px;height:200px"
			url="articulos_camion.php"
			pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true" fitColumns="true">
		    <thead>
			<tr>
				
				<th field="vendedores_id_vendedor" width="5">CLAVE VENDEDOR</th>
				<th field="articulos_id_articulo" width="10">CLAVE ARTICULO</th>
				<th field="cantidad" width="10">CANTIDAD</th>
				
				
				
				
								
			</tr>
		</thead>
	</table></center>
		
			
							 
			
		</form> 
	</div>
	<div id="ven-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="javascript:$('#ven').dialog('close')">ACEPTAR</a>
	</div>
	
	
<!---------------------------------------------------------------------------------------------------------------------------------------------------------->
    </div>
</body>
</html>