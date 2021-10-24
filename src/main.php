<?php

require_once './FirstClassCallableSyntax/FirstClassCallableSyntax.php';
require_once './NewNeverType/NewNeverTypeFunction.php';
require_once '../vendor/autoload.php';

use Claudiosilvajunior\Php\arrayUnpackingWithKeys\ArrayUnpackingWithKeysRun;
use Claudiosilvajunior\Php\constructorsWithInitializers\ConstructorsWithInitializersRun;
use Claudiosilvajunior\Php\enuns\EnumRun;
use Claudiosilvajunior\Php\fibers\RunFiber;
use Claudiosilvajunior\Php\FinalClassConstants\FinalClassConstantsRun;
use Claudiosilvajunior\Php\NewArrayIsListFunction\NewArrayIsListFunctionRun;
use Claudiosilvajunior\Php\PureIntersectionTypes\PureIntersectionTypesRun;
use Claudiosilvajunior\Php\ReadonlyProperties\ReadonlyPropertiesRun;
use Claudiosilvajunior\Php\NewFsyncFunction\NewFsyncFunctionRun;

EnumRun::run();
RunFiber::run();
ArrayUnpackingWithKeysRun::run();
ConstructorsWithInitializersRun::run();
ReadonlyPropertiesRun::run();
PureIntersectionTypesRun::run();
runFirstClassCallableSyntax();
NewArrayIsListFunctionRun::run();
FinalClassConstantsRun::run();
NewFsyncFunctionRun::run();
runNewNeverType();
