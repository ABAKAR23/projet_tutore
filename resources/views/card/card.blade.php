<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="{{ asset('card/card.css') }}">

    <title>Paiement</title>

</head>
<body>
	<div class="container">
		<div class="left">
			<p>Payment methods</p>
			<hr style="border:1px solid #ccc; margin: 0 15px;">
			<div class="methods">
				<div onclick="doFun()" id="tColorA" style="color: greenyellow;"><i class="fa-solid fa-credit-card" style="color: greenyellow;"></i> Payment by card</div>
				<div onclick="doFunA()" id="tColorB"><i class="fa-solid fa-building-columns"></i> Internet banks</div>
				<div onclick="doFunB()" id="tColorC"><i class="fa-solid fa-wallet"></i> Apple/Google pay</div>
			</div>
			<hr style="border:1px solid #ccc; margin: 0 15px;">
		</div>
		<div class="center">
			<a href=""><img alt="Credit Card Logos" title="Credit Card Logos" src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" width="250" height="auto"/></a>
			<hr style="border:1px solid #ccc; margin: 0 15px;">

			<div class="card-details">
                <form action="{{ route('paiement.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="nature" value="carte banquaire">

                        <p>Card number</p>
                        <div class="c-number" id="c-number">
                            <input id="number" name="card_number" class="cc-number" placeholder="Card number" maxlength="19" required>
                            <i class="fa-solid fa-credit-card" style="margin: 0;"></i>
                        </div>

                        <div class="c-details">
                            <div>
                                <p>Expiry date</p>
                                <input id="e-date" name="expiry_date" class="cc-exp" placeholder="MM/YY" required maxlength="5">
                            </div>
                            <div>
                                <p>CVV</p>
                                <div class="cvv-box" id="cvv-box">
                                    <input id="cvv" name="cvv" class="cc-cvv" placeholder="CVV" required maxlength="3">
                                    <i class="fa-solid fa-circle-question" title="3 digits on the back of the card" style="cursor: pointer;"></i>
                                </div>
                            </div>
                        </div>
                        <div class="email">
                            <p>Email</p>
                            <input type="email" name="email" placeholder="example@email.com" id="email" required>
                        </div>
                        <div class="amount">
                            <p>Nombre de ticket</p>
                            <input type="number" name="montant" placeholder="2000F par ticket" required>
                        </div>
                        <button type="submit">PAY NOW</button>

                </form>

            </div>
		</div>


		<div class="right">
			<p>Order information</p>
			<hr style="border:1px solid #ccc; margin: 0 15px;">
			<div class="details">
				<div style="font-weight: bold; padding: 3px 0;">Order discription</div>
				<div style="padding: 3px 0;">Test payment</div>
			</div>
			<hr style="border:1px solid #ccc; margin: 0 15px;">
			<a href=""><img alt="Credit Card Logos" title="Credit Card Logos" src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" width="100%" height="auto" /></a>
		</div>

	</div>

	<script src="{{ asset('card/card.js') }}"></script>
</body>
</html>
