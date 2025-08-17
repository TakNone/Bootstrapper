# account.invalidateSignInCodes

**Description** : *Invalidate the specified login codes, see here » for more info*

**Layer** : 211

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
	codes : array('BQMcTbKxWF2n1rIv'),
);
```