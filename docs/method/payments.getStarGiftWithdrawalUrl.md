# payments.getStarGiftWithdrawalUrl

**Description** : *Convert a collectible gift &raquo; to an NFT on the TON blockchain*

**Layer** : 233

```tl
payments.getStarGiftWithdrawalUrl#c8ca817b flags:# stargift:InputSavedStarGift tmp_password:bytes = payments.StarGiftWithdrawalUrl;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>stargift</mark> | [`InputSavedStarGift`](type/InputSavedStarGift) | The collectible gift to export |
| <mark>tmp_password</mark> | [`bytes`](type/bytes) | NOTHING |

---

## Result

[payments.StarGiftWithdrawalUrl](type/payments.StarGiftWithdrawalUrl)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PASSWORD_HASH_INVALID** | `400` | The provided password hash is invalid |
| **PASSWORD_TOO_FRESH_%d** | `400` | The password was modified less than 24 hours ago, try again in %d seconds |
| **SESSION_TOO_FRESH_%d** | `400` | This session was created less than 24 hours ago, try again in %d seconds |

---

## Example

```php
$paymentsStarGiftWithdrawalUrl = $client->payments->getStarGiftWithdrawalUrl(
	stargift : $client->inputSavedStarGiftUser(
		msg_id : 28,
	),
	tmp_password : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```