# payments.getUniqueStarGift

**Description** : *Obtain info about a collectible gift &raquo; using a slug obtained from a collectible gift link &raquo;*

**Layer** : 216

```tl
payments.getUniqueStarGift#a1974d72 slug:string = payments.UniqueStarGift;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>slug</mark> | [`string`](type/string) | The slug |

---

## Result

[payments.UniqueStarGift](type/payments.UniqueStarGift)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **STARGIFT_SLUG_INVALID** | `400` | The specified gift slug is invalid |

---

## Example

```php
$paymentsUniqueStarGift = $client->payments->getUniqueStarGift(
	slug : 'pJqoSXUgMakhs5EO',
);
```