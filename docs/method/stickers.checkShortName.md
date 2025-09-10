# stickers.checkShortName

**Description** : *Check whether the given short name is available*

**Layer** : 214

```tl
stickers.checkShortName#284b3639 short_name:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>short_name</mark> | [`string`](type/string) | Short name |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **SHORT_NAME_INVALID** | `400` | The specified short name is invalid |
| **SHORT_NAME_OCCUPIED** | `400` | The specified short name is already in use |

---

## Example

```php
$bool = $client->stickers->checkShortName(
	short_name : '39VCbjBxiHqmOyJw',
);
```