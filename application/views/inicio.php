    
                <?php 
                if($this->session->flashdata('error') ){
                    echo "<div id=\"mensaje\" class=\"tag warning\">ERROR: ".$this->session->flashdata('error')."</div>";
                } 
                if($this->session->flashdata('info') ){
                    echo "<div id=\"mensaje\" class=\"tag info\"> ".$this->session->flashdata('info')."</div>";
                }
            ?>
    <div class="login-form padding20 block-shadow">
        <form action="<?php echo base_url().'Principal/validar_ingreso';?>" method="post">
            <h1 class="text-light">IDENTIFICA&Oacute;N</h1>

            <hr class="thin"/>
            <br />
            <div class="input-control text full-size" data-role="input">
                <label for="user_login">USUARIO:</label>
                <input type="text" name="user_login" id="user_login">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
            <br />
            <br />
            <div class="input-control password full-size" data-role="input">
                <label for="user_password">CONTRASE&Ntilde;A:</label>
                <input type="password" name="user_password" id="user_password">
                <button class="button helper-button reveal"><span class="mif-looks"></span></button>
            </div>
            <br />
            <br />
            <div class="form-actions">
                <button type="submit" class="button primary">Igresar...</button>
                <button type="button" class="button link">Cancelar</button>
            </div>
        </form>
    </div>
<script>
	$('body').attr('class','bg-darkTeal');
</script>

 <!-- hit.ua -->
    <a href='http://hit.ua/?x=136046' target='_blank'>
        <script language="javascript" type="text/javascript"><!--
        Cd=document;Cr="&"+Math.random();Cp="&s=1";
        Cd.cookie="b=b";if(Cd.cookie)Cp+="&c=1";
        Cp+="&t="+(new Date()).getTimezoneOffset();
        if(self!=top)Cp+="&f=1";
        //--></script>
        <script language="javascript1.1" type="text/javascript"><!--
        if(navigator.javaEnabled())Cp+="&j=1";
        //--></script>
        <script language="javascript1.2" type="text/javascript"><!--
        if(typeof(screen)!='undefined')Cp+="&w="+screen.width+"&h="+
        screen.height+"&d="+(screen.colorDepth?screen.colorDepth:screen.pixelDepth);
        //--></script>
        <script language="javascript" type="text/javascript"><!--
        Cd.write("<img src='http://c.hit.ua/hit?i=136046&g=0&x=2"+Cp+Cr+
        "&r="+escape(Cd.referrer)+"&u="+escape(window.location.href)+
        "' border='0' wi"+"dth='1' he"+"ight='1'/>");
        //--></script></a>
    <!-- / hit.ua -->
<!-- <div id="container">

	<h1>Bienvenido al Control de Inventario!</h1>

	<div id="body">

		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</div> -->
