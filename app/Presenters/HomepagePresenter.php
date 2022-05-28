<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use Nette\Database\Explorer;


final class HomepagePresenter extends Nette\Application\UI\Presenter
{
	public function __construct(
		private Explorer $explorer
	)
	{
	}

	public function actionDefault()
	{
		dump($this->explorer->fetch('select 1'));
	}
}
