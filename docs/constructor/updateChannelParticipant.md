# updateChannelParticipant

**Description** : *A participant has left, joined, was banned or admined in a channel or supergroup*

**Layer** : 233

```tl
updateChannelParticipant#985d3abb flags:# via_chatlist:flags.3?true channel_id:long date:int actor_id:long user_id:long prev_participant:flags.0?ChannelParticipant new_participant:flags.1?ChannelParticipant invite:flags.2?ExportedChatInvite qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **via_chatlist** | [`flags.3?true`](type/true) | Whether the participant joined using a chat folder deep link » |
| <mark>channel_id</mark> | [`long`](type/long) | Channel ID |
| <mark>date</mark> | [`int`](type/int) | Date of the event |
| <mark>actor_id</mark> | [`long`](type/long) | User that triggered the change (inviter, admin that kicked the user, or the even the user_id itself) |
| <mark>user_id</mark> | [`long`](type/long) | User that was affected by the change |
| **prev_participant** | [`flags.0?ChannelParticipant`](type/ChannelParticipant) | Previous participant status |
| **new_participant** | [`flags.1?ChannelParticipant`](type/ChannelParticipant) | New participant status |
| **invite** | [`flags.2?ExportedChatInvite`](type/ExportedChatInvite) | Chat invite used to join the channel/supergroup |
| <mark>qts</mark> | [`int`](type/int) | New qts value, see updates » for more info |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChannelParticipant(
	via_chatlist : true,
	channel_id : -1613647263062805053,
	date : 27,
	actor_id : -1848222245841104039,
	user_id : 2689758202017002728,
	prev_participant : $client->channelParticipant(
		user_id : -2005579891851514292,
		date : 28,
		subscription_until_date : 9,
		rank : 'eaSsK1rJCVolt5vA',
	),
	new_participant : $client->channelParticipant(
		user_id : -6748091124781713372,
		date : 49,
		subscription_until_date : 99,
		rank : 'F0D9OmsGfKSHTgUV',
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'XERaj32xHDGAtu6P',
		admin_id : 5657332268341916150,
		date : 37,
		start_date : 15,
		expire_date : 3,
		usage_limit : 36,
		usage : 55,
		requested : 51,
		subscription_expired : 36,
		title : 'Aub4kFpY91ICeBh8',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 78,
			amount : 298131953343608957,
		),
	),
	qts : 6,
);
```