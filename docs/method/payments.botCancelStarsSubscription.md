# payments.botCancelStarsSubscription

**Description** : *Cancel a bot subscription*

**Layer** : 214

```tl
payments.botCancelStarsSubscription#6dfa0622 flags:# restore:flags.0?true user_id:InputUser charge_id:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **restore** | [`flags.0?true`](type/true) | If not set, disables autorenewal of the subscriptions, and prevents the user from reactivating the subscription once the current period expires: a subscription cancelled by the bot will have the starsSubscription.bot_canceled flag set.  The bot can can partially undo this operation by setting this flag: this will allow the user to reactivate the subscription |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | The ID of the user whose subscription should be (un)cancelled |
| <mark>charge_id</mark> | [`string`](type/string) | The provider_charge_id from the messageActionPaymentSentMe service message sent to the bot for the first subscription payment |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$bool = $client->payments->botCancelStarsSubscription(
	restore : true,
	user_id : $client->inputUserEmpty(),
	charge_id : 'KMzVN6SlXfhPjHIO',
);
```