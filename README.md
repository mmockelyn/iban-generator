IBAN Generator
==============

[![Build Status](https://travis-ci.org/bmatzner/iban-generator.png?branch=master)](https://travis-ci.org/bmatzner/iban-generator)

With this class you can generate simply a IBAN from Bankcode, Bank Account Number and
locale.

Currently only for Germany...

Further description for other languages http://www.pruefziffernberechnung.de/I/IBAN.shtml

Work in progress

Example
-------

    $IBANGenerator = new IbanGenerator\Generator($bankCode, $bankAccountNr, $locale);
    $IBANGenerator->generate();

Check
-----

To check if a IBAN correct use follow Project

    http://code.google.com/p/php-iban/

Todo
----

Use of Regex for check

    ([A-Z]{2})([0-9]{2})([0-9]{8})([0-9]{10}) // Example for Germany DE581234567812345678910
