# payments.getStarsRevenueWithdrawalUrl

**Description** : *Withdraw funds from a channel or bot&#039;s star balance &raquo;*

**Layer** : 214

```tl
payments.getStarsRevenueWithdrawalUrl#2433dc92 flags:# ton:flags.0?true peer:InputPeer amount:flags.1?long password:InputCheckPasswordSRP = payments.StarsRevenueWithdrawalUrl;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **ton** | [`flags.0?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Channel or bot from which to withdraw funds |
| **amount** | [`flags.1?long`](type/long) | NOTHING |
| <mark>password</mark> | [`InputCheckPasswordSRP`](type/InputCheckPasswordSRP) | 2FA password, see here » for more info |

---

## Result

[payments.StarsRevenueWithdrawalUrl](type/payments.StarsRevenueWithdrawalUrl)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PASSWORD_HASH_INVALID** | `400` | The provided password hash is invalid |
| **PASSWORD_MISSING** | `400` | You must enable 2FA before executing this operation |
| **PASSWORD_TOO_FRESH_%d** | `400` | The password was modified less than 24 hours ago, try again in %d seconds |
| **SESSION_TOO_FRESH_%d** | `400` | This session was created less than 24 hours ago, try again in %d seconds |

---

## Example

```php
$paymentsStarsRevenueWithdrawalUrl = $client->payments->getStarsRevenueWithdrawalUrl(
	ton : true,
	peer : $client->inputPeerEmpty(),
	amount : 6695239258023019892,
	password : $client->inputCheckPasswordEmpty(),
);
```