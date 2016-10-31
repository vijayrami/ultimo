<?php

class
MageB2B_Sublogin_Model_Acl
extends
Mage_Core_Model_Abstract
{
public
function
_construct()
{
parent::_construct();
$this->_init('sublogin/acl');
}

protected
function
_beforeSave()
{
if
(!$this->isIdentifierUnique())
{
throw
new
Exception
(Mage::helper('sublogin')->__('Identifier \'%s\' already exist.',
$this->getIdentifier()));
}
}

public
function
isIdentifierUnique($_7855514b05db1abc4d8ed98b10268b4429d64d1e
=
null)
{
if
(!$_7855514b05db1abc4d8ed98b10268b4429d64d1e)
{
if
(!($_7855514b05db1abc4d8ed98b10268b4429d64d1e
=
$this->getIdentifier()))
{
throw
new
Exception
(Mage::helper('sublogin')->__('Identifier should not be blank.',
$_7855514b05db1abc4d8ed98b10268b4429d64d1e));
}
}
$_205d95c001c842f933e3b55fa4e902d5d2fdd0af
=
$this->getCollection()
->addFieldToFilter('identifier',
$_7855514b05db1abc4d8ed98b10268b4429d64d1e);

if
($this->getId())
{
if
($_205d95c001c842f933e3b55fa4e902d5d2fdd0af->count()
>
0)
{
$_155f1b9f6203c1ddedca7295a981c920d6ca0722
=
$_205d95c001c842f933e3b55fa4e902d5d2fdd0af->getFirstItem();
if
($this->getId()
!=
$_155f1b9f6203c1ddedca7295a981c920d6ca0722->getId())
{
return
false;

}
}
}

else
{
return
($_205d95c001c842f933e3b55fa4e902d5d2fdd0af->count()
>
0)
?
false
:
true;
}
return
true;
}
}