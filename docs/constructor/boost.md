# boost

**Description** : *Info about one or more boosts applied by a specific user*

**Layer** : 227

```tl
boost#4b3e14d6 flags:# gift:flags.1?true giveaway:flags.2?true unclaimed:flags.3?true id:string user_id:flags.0?long giveaway_msg_id:flags.2?int date:int expires:int used_gift_slug:flags.4?string multiplier:flags.5?int stars:flags.6?long = Boost;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **gift** | [`flags.1?true`](type/true) | Whether this boost was applied because the channel/supergroup directly gifted a subscription to the user |
| **giveaway** | [`flags.2?true`](type/true) | Whether this boost was applied because the user was chosen in a giveaway started by the channel/supergroup |
| **unclaimed** | [`flags.3?true`](type/true) | If set, the user hasn't yet invoked payments.applyGiftCode to claim a subscription gifted directly or in a giveaway by the channel |
| <mark>id</mark> | [`string`](type/string) | Unique ID for this set of boosts |
| **user_id** | [`flags.0?long`](type/long) | ID of the user that applied the boost |
| **giveaway_msg_id** | [`flags.2?int`](type/int) | The message ID of the giveaway |
| <mark>date</mark> | [`int`](type/int) | When was the boost applied |
| <mark>expires</mark> | [`int`](type/int) | When does the boost expire |
| **used_gift_slug** | [`flags.4?string`](type/string) | The created Telegram Premium gift code, only set if either gift or giveaway are set AND it is either a gift code for the currently logged in user or if it was already claimed |
| **multiplier** | [`flags.5?int`](type/int) | If set, this boost counts as multiplier boosts, otherwise it counts as a single boost |
| **stars** | [`flags.6?long`](type/long) | Number of Telegram Stars distributed among the winners of the giveaway |

---

## Type

[Boost](type/Boost)

---

## Example

```php
$boost = $client->boost(
	gift : true,
	giveaway : true,
	unclaimed : true,
	id : 'KEbQ8mFfcH5PDrYg',
	user_id : -3684851246274138595,
	giveaway_msg_id : 54,
	date : 19,
	expires : 74,
	used_gift_slug : 'gREK8WsX6Pnxbd75',
	multiplier : 74,
	stars : 4251883678982967200,
);
```