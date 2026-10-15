# premium.boostsStatus

**Description** : *Contains info about the current boost status of a peer*

**Layer** : 229

```tl
premium.boostsStatus#4959427a flags:# my_boost:flags.2?true level:int current_level_boosts:int boosts:int gift_boosts:flags.4?int next_level_boosts:flags.0?int premium_audience:flags.1?StatsPercentValue boost_url:string prepaid_giveaways:flags.3?Vector<PrepaidGiveaway> my_boost_slots:flags.2?Vector<int> = premium.BoostsStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **my_boost** | [`flags.2?true`](type/true) | Whether we're currently boosting this channel/supergroup, my_boost_slots will also be set |
| <mark>level</mark> | [`int`](type/int) | The current boost level of the channel/supergroup |
| <mark>current_level_boosts</mark> | [`int`](type/int) | The number of boosts acquired so far in the current level |
| <mark>boosts</mark> | [`int`](type/int) | Total number of boosts acquired so far |
| **gift_boosts** | [`flags.4?int`](type/int) | The number of boosts acquired from created Telegram Premium gift codes and giveaways; only returned to channel/supergroup admins |
| **next_level_boosts** | [`flags.0?int`](type/int) | Total number of boosts needed to reach the next level; if absent, the next level isn't available |
| **premium_audience** | [`flags.1?StatsPercentValue`](type/StatsPercentValue) | Only returned to channel/supergroup admins: contains the approximated number of Premium users subscribed to the channel/supergroup, related to the total number of subscribers |
| <mark>boost_url</mark> | [`string`](type/string) | Boost deep link » that can be used to boost the chat |
| **prepaid_giveaways** | [`flags.3?Vector<PrepaidGiveaway>`](type/PrepaidGiveaway) | A list of prepaid giveaways available for the chat; only returned to channel/supergroup admins |
| **my_boost_slots** | [`flags.2?Vector<int>`](type/int) | Indicates which of our boost slots we've assigned to this peer (populated if my_boost is set) |

---

## Type

[premium.BoostsStatus](type/premium.BoostsStatus)

---

## Example

```php
$premiumBoostsStatus = $client->premium->boostsStatus(
	my_boost : true,
	level : 4,
	current_level_boosts : 32,
	boosts : 31,
	gift_boosts : 8,
	next_level_boosts : 61,
	premium_audience : $client->statsPercentValue(
		part : -1185887.8701171875,
		total : 1463846.271484375,
	),
	boost_url : 'https://docs.liveproto.dev',
	prepaid_giveaways : array(
		$client->prepaidGiveaway(
			id : -5286178926054219282,
			months : 23,
			quantity : 48,
			date : 43,
		),
		$client->prepaidStarsGiveaway(
			id : -3105037469162625024,
			stars : -8742391850063898314,
			quantity : 90,
			boosts : 36,
			date : 66,
		),
	),
	my_boost_slots : array(36),
);
```