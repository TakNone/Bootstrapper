# payments.getUniqueStarGiftValueInfo

**Description** : *Get information about the value of a collectible gift &raquo;*

**Layer** : 218

```tl
payments.getUniqueStarGiftValueInfo#4365af6b slug:string = payments.UniqueStarGiftValueInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>slug</mark> | [`string`](type/string) | slug from a starGiftUnique |

---

## Result

[payments.UniqueStarGiftValueInfo](type/payments.UniqueStarGiftValueInfo)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **STARGIFT_SLUG_INVALID** | `400` | The specified gift slug is invalid |

---

## Example

```php
$paymentsUniqueStarGiftValueInfo = $client->payments->getUniqueStarGiftValueInfo(
	slug : 'G8psPlFcja3mHBIK',
);
```