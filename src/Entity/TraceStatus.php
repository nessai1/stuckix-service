<?php

namespace App\Entity;

enum TraceStatus: string
{
	case NEW = 'new';
	case COMPLETE = 'complete';
}
