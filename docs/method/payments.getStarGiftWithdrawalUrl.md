# payments.getStarGiftWithdrawalUrl

**Description** : *Convert a collectible gift &raquo; to an NFT on the TON blockchain*

**Layer** : 216

```tl
payments.getStarGiftWithdrawalUrl#d06e93a8 stargift:InputSavedStarGift password:InputCheckPasswordSRP = payments.StarGiftWithdrawalUrl;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stargift</mark> | [`InputSavedStarGift`](type/InputSavedStarGift) | The collectible gift to export |
| <mark>password</mark> | [`InputCheckPasswordSRP`](type/InputCheckPasswordSRP) | The current user's 2FA password, passed as specified here » |

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
		msg_id : 56,
	),
	password : $client->inputCheckPasswordEmpty(),
);
```