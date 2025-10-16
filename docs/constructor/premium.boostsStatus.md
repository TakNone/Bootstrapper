# premium.boostsStatus

**Description** : *Contains info about the current boost status of a peer*

**Layer** : 216

```tl
premium.boostsStatus#4959427a flags:# my_boost:flags.2?true level:int current_level_boosts:int boosts:int gift_boosts:flags.4?int next_level_boosts:flags.0?int premium_audience:flags.1?StatsPercentValue boost_url:string prepaid_giveaways:flags.3?Vector<PrepaidGiveaway> my_boost_slots:flags.2?Vector<int> = premium.BoostsStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	level : 14,
	current_level_boosts : 91,
	boosts : 2,
	gift_boosts : 41,
	next_level_boosts : 53,
	premium_audience : $client->statsPercentValue(
		part : -286189.091796875,
		total : -1832339.115234375,
	),
	boost_url : 'https://docs.liveproto.dev',
	prepaid_giveaways : array(
		$client->prepaidGiveaway(
			id : -1884378656903906761,
			months : 67,
			quantity : 54,
			date : 4,
		),
		$client->prepaidStarsGiveaway(
			id : 1658966145876235174,
			stars : 3319740587598239262,
			quantity : 87,
			boosts : 14,
			date : 69,
		),
	),
	my_boost_slots : array(59),
);
```