Boris VS PsySH
==============

Boris
-----

    $ php boris.php

    [1] boris> $x = ['object' => (object)['property' => 'value'], 'array' => ['key' => 'value'], 'bool' => false, 'string' => 'some'];
    // array(
    //   'object' => object(stdClass)(
    //     'property' => 'value'
    //   ),
    //   'array' => array(
    //     'key' => 'value'
    //   ),
    //   'bool' => false,
    //   'string' => 'some'
    // )

    [2] boris> $country = new Country('Germany');
    {name: // 'Germany'}

    [3] boris> $brand = new Brand('BMW', $country);
    {name: // 'BMW'; country: {name: // 'Germany'}}

    [4] boris> $model = new Model('x5');
    {name: // 'x5'}

    [5] boris> $car = new Car($model, $brand, 2014);
    {model: {name: // 'x5'}; brand: {name: // 'BMW'; country: {name: // 'Germany'}}; year: // 2014}

PsySH
-----

    $ php psysh.php

    >>> $x = ['object' => (object)['property' => 'value'], 'array' => ['key' => 'value'], 'bool' => false, 'string' => 'some']
    => [
           "object" => <stdClass #0000000068f00f7400000001465774ba> {
               property: "value"
           },
           "array"  => [
               "key" => "value"
           ],
           "bool"   => false,
           "string" => "some"
       ]

    >>> dump $x --depth 1
    [
        "object" => <stdClass #0000000068f00f7400000001465774ba>,
        "array"  => Array(1),
        "bool"   => false,
        "string" => "some"
    ]

    >>> $country = new Country('Germany')
    => <Country #0000000068f00f4100000001465774ba> {
           name: "Germany"
       }

    >>> $brand = new Brand('BMW', $country)
    => <Brand #0000000068f00f7c00000001465774ba> {
           name: "BMW",
           country: <Country #0000000068f00f4100000001465774ba> {
               name: "Germany"
           }
       }

    >>> $model = new Model('x5')
    => <Model #0000000068f00f4900000001465774ba> {
           name: "x5"
       }

    >>> $car = new Car($model, $brand, 2014)
    => <Car #0000000068f00f7900000001465774ba> {
           model: <Model #0000000068f00f4900000001465774ba> {
               name: "x5"
           },
           brand: <Brand #0000000068f00f7c00000001465774ba> {
               name: "BMW",
               country: <Country #0000000068f00f4100000001465774ba> {
                   name: "Germany"
               }
           },
           year: 2014
       }

    >>> dump $car --depth 1
    <Car #0000000068f00f7900000001465774ba> {
        model: <Model #0000000068f00f4900000001465774ba>,
        brand: <Brand #0000000068f00f7c00000001465774ba>,
        year: 2014
    }

