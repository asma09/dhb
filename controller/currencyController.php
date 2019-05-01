<?php
//Controller
class CurrencyConverterController {
	private $model;
	
	public function __construct($model) {
		$this->model = $model;
	}
	
	public function convert($request) {
		if (isset($request['currency']) && isset($request['amount'])) {
			$this->model->set($request['amount'], $request['currency']);
		}
	}
}


//Application initialisation/entry point. In Java, this would be the static main method.
$model = new CurrencyConverter();
$controller = new CurrencyConverterController($model);

//If one of the forms has been submitted, call the relevant controller action
if (isset($_GET['action'])) $controller->{$_GET['action']}($_POST);

$gbpView = new CurrencyConverterView($model, 'GBP');
echo $gbpView->output();

$usdView = new CurrencyConverterView($model, 'USD');
echo $usdView->output();

$eurView = new CurrencyConverterView($model, 'EUR');
echo $eurView->output();

$yenView = new CurrencyConverterView($model, 'YEN');
echo $yenView->output();

?>