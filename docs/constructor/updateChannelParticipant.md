# updateChannelParticipant

**Description** : *A participant has left, joined, was banned or admined in a channel or supergroup*

**Layer** : 222

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
	channel_id : -6106768046707152063,
	date : 15,
	actor_id : 1672671777802622584,
	user_id : 42327301440723466,
	prev_participant : $client->channelParticipant(
		user_id : -2504764621565556598,
		date : 92,
		subscription_until_date : 53,
	),
	new_participant : $client->channelParticipant(
		user_id : 5960355144362243186,
		date : 4,
		subscription_until_date : 71,
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : '6PiHumzWe5d1QsMq',
		admin_id : -5466104948807965150,
		date : 3,
		start_date : 34,
		expire_date : 48,
		usage_limit : 55,
		usage : 97,
		requested : 7,
		subscription_expired : 60,
		title : 'Vm0QqS59zYFRxfGo',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 63,
			amount : 4637433633536559155,
		),
	),
	qts : 98,
);
```