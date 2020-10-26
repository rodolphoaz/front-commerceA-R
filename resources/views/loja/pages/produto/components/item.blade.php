<div class="row">
    @for ($i=0; $i<10; $i++)
    <div class="col-lg-3 col-md-6">
      <div class="single-product">
        <div class="product-img"> 
          <img class="img-fluid w-100" src="{{asset('img/product/galeria/i1.jpeg')}}" alt="" />
          <div class="p_icon">
            <a href="#">
              <i class="ti-eye"></i>
            </a>
            <a href="#">
              <i class="ti-heart"></i>
            </a>
            <a href="#">
              <i class="ti-shopping-cart"></i>
            </a>
          </div>
        </div>
        <div class="product-btm">
          <a href="#" class="d-block">
            <h4>Latest men’s sneaker</h4>
          </a>
          <div class="mt-3">
          <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="M96GHYJQKFUXU">
<table>
<tr><td><input type="hidden" name="on0" value="Personalize seu Pedido">Personalize seu Pedido</td></tr><tr><td><select name="os0">
	<option value="caneca">caneca R$25,00</option>
	<option value="quadro">quadro R$30,00</option>
	<option value="moldura A4">moldura A4 R$40,00</option>
	<option value="moldura 10x15">moldura 10x15 R$30,00</option>
	<option value="moldura 15x21">moldura 15x21 R$30,00</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="escolha o tipo">escolha o tipo</td></tr><tr><td><select name="os1">
	<option value="Busto">Busto </option>
	<option value="corpinho">corpinho </option>

</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="BRL">
<input type="image" src="https://www.paypalobjects.com/pt_BR/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
<img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
</form>

            <span class="mr-4">$25.00</span>
            <del>$35.00</del>
          </div>
        </div>
      </div>
    </div>
    @endfor
</div>