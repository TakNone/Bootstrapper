# payments.checkGiftCode

**Description** : *Obtain information about a Telegram Premium giftcode &raquo;*

**Layer** : 214

```tl
payments.checkGiftCode#8e51b4c1 slug:string = payments.CheckedGiftCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>slug</mark> | [`string`](type/string) | The giftcode to check |

---

## Result

[payments.CheckedGiftCode](type/payments.CheckedGiftCode)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GIFT_SLUG_EXPIRED** | `400` | The specified gift slug has expired |
| **GIFT_SLUG_INVALID** | `400` | The specified slug is invalid |

---

## Example

```php
$paymentsCheckedGiftCode = $client->payments->checkGiftCode(
	slug : '5bQfUNlyIhRzs4Eq',
);
```