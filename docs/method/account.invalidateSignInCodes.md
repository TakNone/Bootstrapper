# account.invalidateSignInCodes

**Description** : *Invalidate the specified login codes, see here &raquo; for more info*

**Layer** : 225

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
	codes : array('ec6WYIEZhH5tk9C4'),
);
```