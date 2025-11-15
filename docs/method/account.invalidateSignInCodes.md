# account.invalidateSignInCodes

**Description** : *Invalidate the specified login codes, see here &raquo; for more info*

**Layer** : 216

```tl
account.invalidateSignInCodes#ca8ae8ba codes:Vector<string> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>codes</mark> | [`Vector<string>`](type/string) | The login codes to invalidate |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->account->invalidateSignInCodes(
	codes : array('B15bwYetRfE9X7pH'),
);
```