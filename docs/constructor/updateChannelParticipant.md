# updateChannelParticipant

**Description** : *A participant has left, joined, was banned or admined in a channel or supergroup*

**Layer** : 229

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
	channel_id : -6467411626779462721,
	date : 58,
	actor_id : 7120704896822106790,
	user_id : -4079740263110127873,
	prev_participant : $client->channelParticipant(
		user_id : 8767428828483011226,
		date : 11,
		subscription_until_date : 9,
		rank : 'sFl6iqwcrWMKkVtb',
	),
	new_participant : $client->channelParticipant(
		user_id : 424523377340888141,
		date : 46,
		subscription_until_date : 89,
		rank : 'jbWyqEhQnsadH78P',
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'vg3zCnMbw2V9NGy6',
		admin_id : -1200629497680759982,
		date : 28,
		start_date : 66,
		expire_date : 0,
		usage_limit : 52,
		usage : 75,
		requested : 55,
		subscription_expired : 13,
		title : 'iSo0ILupkKczGWgV',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 94,
			amount : -1823651877824228901,
		),
	),
	qts : 18,
);
```