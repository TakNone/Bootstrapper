# payments.getUniqueStarGift

**Layer** : 214

```tl
payments.getUniqueStarGift#a1974d72 slug:string = payments.UniqueStarGift;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>slug</mark> | [`string`](type/string) | NOTHING |

---

## Result

[payments.UniqueStarGift](type/payments.UniqueStarGift)

---

## Example

```php
$paymentsUniqueStarGift = $client->payments->getUniqueStarGift(
	slug : 'piX3gyPoZksVFELl',
);
```