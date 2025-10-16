# payments.getUniqueStarGiftValueInfo

**Layer** : 216

```tl
payments.getUniqueStarGiftValueInfo#4365af6b slug:string = payments.UniqueStarGiftValueInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>slug</mark> | [`string`](type/string) | NOTHING |

---

## Result

[payments.UniqueStarGiftValueInfo](type/payments.UniqueStarGiftValueInfo)

---

## Example

```php
$paymentsUniqueStarGiftValueInfo = $client->payments->getUniqueStarGiftValueInfo(
	slug : 'yKzu4grFU5jtwMVp',
);
```