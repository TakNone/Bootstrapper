# payments.giveawayInfo

**Description** : *Contains info about an ongoing giveaway*

**Layer** : 211

```tl
payments.giveawayInfo#4367daa0 flags:# participating:flags.0?true preparing_results:flags.3?true start_date:int joined_too_early_date:flags.1?int admin_disallowed_chat_id:flags.2?long disallowed_country:flags.4?string = payments.GiveawayInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **participating** | [`flags.0?true`](type/true) | The current user is participating in the giveaway |
| **preparing_results** | [`flags.3?true`](type/true) | If set, the giveaway has ended and the results are being prepared |
| <mark>start_date</mark> | [`int`](type/int) | When was the giveaway started |
| **joined_too_early_date** | [`flags.1?int`](type/int) | The current user can't participate in the giveaway, because they were already a member of the channel when the giveaway started, and the only_new_subscribers was set when starting the giveaway |
| **admin_disallowed_chat_id** | [`flags.2?long`](type/long) | If set, the current user can't participate in the giveaway, because they are an administrator in one of the channels (ID specified in this flag) that created the giveaway |
| **disallowed_country** | [`flags.4?string`](type/string) | If set, the current user can't participate in this giveaway, because their phone number is from the specified disallowed country (specified as a two-letter ISO 3166-1 alpha-2 country code) |

---

## Type

[payments.GiveawayInfo](type/payments.GiveawayInfo)

---

## Example

```php
$paymentsGiveawayInfo = $client->payments->giveawayInfo(
	participating : true,
	preparing_results : true,
	start_date : 75,
	joined_too_early_date : 98,
	admin_disallowed_chat_id : 197632905034770842,
	disallowed_country : 'IvOi1EJBCbfr30gQ',
);
```