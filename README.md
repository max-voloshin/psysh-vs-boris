Boris VS PsySH
==============

Boris
-----

    $ php boris.php

    [1] boris> $x = (object)['property' => 'value'];
    // object(stdClass)(
    //   'property' => 'value'
    // )

    [2] boris> $country = new Country('Ukraine');
    {name: // 'Ukraine'}

    [3] boris> $brand = new Brand('OWOX', $country);
    {name: // 'OWOX'; country: {name: // 'Ukraine'}}

PsySH
-----

    $ php psysh.php

    >>> $x = (object)['property' => 'value']
    => <stdClass #000000002bc8b4ca0000000154eaed21> {
           property: "value"
       }

    >>> $country = new Country('Ukraine')
    => <Country #000000002bc8b4c50000000154eaed21> {
           name: "Ukraine"
       }

    >>> $brand = new Brand('OWOX', $country)
    => <Brand #000000002bc8b4c00000000154eaed21> {
           name: "OWOX",
           country: <Country #000000002bc8b4c50000000154eaed21> {
               name: "Ukraine"
           }
       }

    >>> dump $brand --depth 1
    <Brand #000000002bc8b4c00000000154eaed21> {
        name: "OWOX",
        country: <Country #000000002bc8b4c50000000154eaed21>
    }

