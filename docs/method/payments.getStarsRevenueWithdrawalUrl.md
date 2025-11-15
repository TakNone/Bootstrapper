# payments.getStarsRevenueWithdrawalUrl

**Description** : *Withdraw funds from a channel or bot&#039;s star balance &raquo;*

**Layer** : 218

```tl
payments.getStarsRevenueWithdrawalUrl#2433dc92 flags:# ton:flags.0?true peer:InputPeer amount:flags.1?long password:InputCheckPasswordSRP = payments.StarsRevenueWithdrawalUrl;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **ton** | [`flags.0?true`](type/true) | If set, withdraws channel/ad revenue in TON |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Channel or bot from which to withdraw funds |
| **amount** | [`flags.1?long`](type/long) | The amount of stars or nanotons to withdraw |
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
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	amount : 7407481505447396144,
	password : $client->inputCheckPasswordEmpty(),
);
```