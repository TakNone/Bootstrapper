# payments.getStarGiftWithdrawalUrl

**Layer** : 216

```tl
payments.getStarGiftWithdrawalUrl#d06e93a8 stargift:InputSavedStarGift password:InputCheckPasswordSRP = payments.StarGiftWithdrawalUrl;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stargift</mark> | [`InputSavedStarGift`](type/InputSavedStarGift) | NOTHING |
| <mark>password</mark> | [`InputCheckPasswordSRP`](type/InputCheckPasswordSRP) | NOTHING |

---

## Result

[payments.StarGiftWithdrawalUrl](type/payments.StarGiftWithdrawalUrl)

---

## Example

```php
$paymentsStarGiftWithdrawalUrl = $client->payments->getStarGiftWithdrawalUrl(
	stargift : $client->inputSavedStarGiftUser(
		msg_id : 29,
	),
	password : $client->inputCheckPasswordEmpty(),
);
```