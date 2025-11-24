# payments.giveawayInfoResults

**Description** : *A giveaway has ended*

**Layer** : 218

```tl
payments.giveawayInfoResults#e175e66f flags:# winner:flags.0?true refunded:flags.1?true start_date:int gift_code_slug:flags.3?string stars_prize:flags.4?long finish_date:int winners_count:int activated_count:flags.2?int = payments.GiveawayInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **winner** | [`flags.0?true`](type/true) | Whether we're one of the winners of this giveaway |
| **refunded** | [`flags.1?true`](type/true) | Whether the giveaway was canceled and was fully refunded |
| <mark>start_date</mark> | [`int`](type/int) | Start date of the giveaway |
| **gift_code_slug** | [`flags.3?string`](type/string) | If we're one of the winners of this giveaway, contains the Premium gift code, see here » for more info on the full giveaway flow |
| **stars_prize** | [`flags.4?long`](type/long) | If we're one of the winners of this Telegram Star giveaway, the number Telegram Stars we won |
| <mark>finish_date</mark> | [`int`](type/int) | End date of the giveaway. May be bigger than the end date specified in parameters of the giveaway |
| <mark>winners_count</mark> | [`int`](type/int) | Number of winners in the giveaway |
| **activated_count** | [`flags.2?int`](type/int) | Number of winners, which activated their gift codes |

---

## Type

[payments.GiveawayInfo](type/payments.GiveawayInfo)

---

## Example

```php
$paymentsGiveawayInfo = $client->payments->giveawayInfoResults(
	winner : true,
	refunded : true,
	start_date : 23,
	gift_code_slug : 'MQ7w9HbWNC6rJado',
	stars_prize : 5703971189882149077,
	finish_date : 41,
	winners_count : 44,
	activated_count : 85,
);
```