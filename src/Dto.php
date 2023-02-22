<?php

namespace Spatie\LaravelData;

use Spatie\LaravelData\Concerns\BaseData;
use Spatie\LaravelData\Concerns\ContextableData;
use Spatie\LaravelData\Concerns\DefaultableData;
use Spatie\LaravelData\Concerns\ValidateableData;
use Spatie\LaravelData\Contracts\BaseData as BaseDataContract;
use Spatie\LaravelData\Contracts\DefaultableData as DefaultDataContract;
use Spatie\LaravelData\Contracts\ValidateableData as ValidateableDataContract;

class Dto implements ValidateableDataContract, BaseDataContract, DefaultDataContract
{
    use ValidateableData;
    use BaseData;
    use ContextableData;
    use DefaultableData;
}
