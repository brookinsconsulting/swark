json_encode
-----------

Summary
~~~~~~~
Returns the JSON representation of input.

Usage
~~~~~
::

    input|json_encode

Parameters
~~~~~~~~~~
None.

Examples
~~~~~~~~
::

    {array( hash( 'a', 1, 'b', 2 ), 'Test', false(), 1.2345 )|json_encode}

Returns [{"a":1,"b":2},"Test",false,1.234500].
