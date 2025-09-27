# starRefProgram

**Description** : *Indo about an affiliate program offered by a bot*

**Layer** : 214

```tl
starRefProgram#dd0c66f2 flags:# bot_id:long commission_permille:int duration_months:flags.0?int end_date:flags.1?int daily_revenue_per_user:flags.2?StarsAmount = StarRefProgram;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>bot_id</mark> | [`long`](type/long) | ID of the bot that offers the program |
| <mark>commission_permille</mark> | [`int`](type/int) | An affiliate gets a commission of starRefProgram.commission_permille‰ Telegram Stars for every mini app transaction made by users they refer |
| **duration_months** | [`flags.0?int`](type/int) | An affiliate gets a commission for every mini app transaction made by users they refer, for duration_months months after a referral link is imported, starting the bot for the first time |
| **end_date** | [`flags.1?int`](type/int) | Point in time (Unix timestamp) when the affiliate program will be closed (optional, if not set the affiliate program isn't scheduled to be closed) |
| **daily_revenue_per_user** | [`flags.2?StarsAmount`](type/StarsAmount) | The amount of daily revenue per user in Telegram Stars of the bot that created the affiliate program. To obtain the approximated revenue per referred user, multiply this value by commission_permille and divide by 1000 |

---

## Type

[StarRefProgram](type/StarRefProgram)

---

## Example

```php
$starRefProgram = $client->starRefProgram(
	bot_id : -8238530817803154000,
	commission_permille : 7,
	duration_months : 27,
	end_date : 13,
	daily_revenue_per_user : $client->starsAmount(
		amount : 2312059196136871739,
		nanos : 13,
	),
);
```