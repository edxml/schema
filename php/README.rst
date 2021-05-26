|license| |phpversion|

.. |license| image::  https://img.shields.io/badge/License-MIT-blue.svg
.. |phpversion| image::  https://shields.io/badge/php-%5E7.4%20%7C%20%5E8.0-blue

=================================
The EDXML Schema Composer Package
=================================

This is a PHP / Composer package that provides the EDXML RelaxNG schema. It can be used to include the schema in PHP projects by adding this package as a dependency::

    composer require edxml/schema

Besides the actual schema the package also provides constants which contain the path to the various versions of the schema. These can be used like this:

.. code-block:: php

    <?php

    use Edxml\Schema;

    echo 'The schema can be found here: ' . Schema::PATH_3_0;
