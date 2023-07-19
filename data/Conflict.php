<?php

namespace Data\One {
    class Conflict
    {
        function conflict()
        {
            echo "Ini Conflict" . PHP_EOL;
        }
    }

    class Sample
    {
        public function sample()
        {
            echo "Ini Sample" . PHP_EOL;
        }
    }
}

namespace Data\Two {
    class Conflict
    {
        var ?string $name;
    }
}