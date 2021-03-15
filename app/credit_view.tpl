
{extends file="../templates/main.tpl"}

{block name=content}


<br>
<form action = "http://localhost/cw1/app/calc_credit.php" method="post">
   <label for="id_amount">Amount:</label>
   <input id="id_amount" type="text" placeholder="ilosc" name="amount" value="{$form['amount']}" >	<br><br>	
			<label for="id_years">Years</label>
                        <input id="id_years" type="text" placeholder="lata" name="years" value="{$form['years']}" > <br><br>
			<label for="id_percentages">Percentages:</label>
                        <input id="id_percentages" type="text" placeholder="procent" name="percentages" value="{$form['percentages']}" > <br><br>
			<button class="pure-button" type="submit">Policz</button>
    
</form>

       
  
{if isset($messages)}
	{if count($messages) > 0} 
		<h4>Wystąpiły błędy: </h4>
		
		{foreach  $messages as $msg}
		{strip}
                    <div style="margin: 30px; padding: 5px; border-radius: 5px; background-color: #f55; width:400px;">
			<li>{$msg}</li>
                    </div> 
		{/strip}
               
		{/foreach}
		
	{/if} <br>
{/if}
                                   
{if isset($result)}
    
	<h4>Wynik</h4>
   <div style="margin: 30px; padding: 5px; border-radius: 5px; background-color: #8f8; width:400px;">
	{$result}
   </div><br>
{/if}

</div>
</div>

{/block}

