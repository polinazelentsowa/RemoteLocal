public function RemoteLocal($obj)
	{

		switch ($obj) {
			case 'sections':
				$this->sections();
				break;
			case 'products':
				$this->products();
				break;
			case 'properties':
				$this->properties();
				break;
			case 'PropDef':
				$this->PropDef();
				break;
			case 'providers':
				$this->providers();
				break;
			case 'measure':
				$this->measure();
				break;
			case 'productsTP':
				//$this->productsTP();
				break;
			case 'propertiesTP':
				$this->propertiesTP();
				break;
			case 'PropDefTP':
				$this->PropDefTP();
				break;
			default:
				echo('выбрано не правильное свойство!');
				break;
		}

	}
