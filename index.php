<h2>Recharge Mobile</h2>
//pay2all recharge api example
<form action="submit.php" method="post">

<label>Choose Operator:</label><br/>
<select name="provider_id">
              <option value="1">Airtel</option>
               <option value="9">Aircel</option>
               <option value="8">BSNL</option>
               <option value="42">BSNL Special/Validity</option>
               <option value="3">Idea</option>
               <option value="2">Vodafone</option>
               <option value="5">Docomo GSM</option>
               <option value="43">Docomo Special GSM</option>
               <option value="4">Docomo CDMA</option>
                <option value="39">Reliance GSM</option>
               <option value="40">Reliance CDMA</option>
	      <option value="11">MTS</option>
              <option value="6">Uninor</option>
               <option value="44">Uninor Special</option>
               <option value="LM">Loop Mobile</option>
              <option value="10">Videocon</option>
               <option value="15">Videocon Special</option>
               <option value="7">MTNL Delhi</option>
               <option value="47">MTNL Delhi Special</option>
               <option value="7">MTNL Mumbai</option>
                <option value="47">MTNL Mumbai Special</option>
               
</select>
<br/>

<label>Enter Mobile Number:</label><br/>
<input type="text" name="number" maxlength="10"/></span>
<br/>

<label>Enter Amount:</label><br/>
<input type="text" name="amount"/></span>
<br/>
<br/>
<input type="submit" value="Recharge">

</form>
