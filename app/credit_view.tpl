
{extends file="../templates/main.tpl"}

{block name=content}


<br>
<form action = "{$conf->app_url}/app/calc_credit.php"  method="post">
    
                        <label for="id_amount">Amount:</label>
                        <input id="id_amount" type="text" placeholder="ilosc" name="amount" value="{$form->amount}">	<br><br>	
			<label for="id_years">Years</label>
                        <input id="id_years" type="text" placeholder="lata" name="years" value="{$form->years}" > <br><br>
			<label for="id_percentages">Percentages:</label>
                        <input id="id_percentages" type="text" placeholder="procent" name="percentages" value="{$form->percentages}" > <br><br>
			<button class="pure-button" type="submit">Policz</button>
    
</form>

      
  

	{if $messages->isError()} 
		<h4>Wystąpiły błędy: </h4>
		
		{foreach  $messages->getErrors() as $err}
		{strip}
                    <div style="margin: 30px; padding: 5px; border-radius: 5px; background-color: #f55; width:400px;">
			<li>{$err}</li>
                    </div> 
		{/strip}
               
		{/foreach}
		
	{/if} <br>

               {if $messages->isInfo()} 
			<h4>Informacje:</h4>

		
		{foreach $messages->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
		
	{/if} <br>
        
{if isset($result->result)}
    
	<h4>Wynik</h4>
   <div style="margin: 30px; padding: 5px; border-radius: 5px; background-color: #8f8; width:400px;">
	{$result->result}
   </div><br>
{/if}



{/block}

