# payments.applyGiftCode

**Description** : *Apply a Telegram Premium giftcode &raquo;*

**Layer** : 216

```tl
payments.applyGiftCode#f6e26854 slug:string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>slug</mark> | [`string`](type/string) | The code to apply |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GIFT_SLUG_EXPIRED** | `400` | The specified gift slug has expired |
| **GIFT_SLUG_INVALID** | `400` | The specified slug is invalid |
| **PREMIUM_SUB_ACTIVE_UNTIL_%d** | `420` | You already have a premium subscription active until unixtime %d  |

---

## Example

```php
$updates = $client->payments->applyGiftCode(
	slug : 'Rr36aWKTAgiysO7Z',
);
```