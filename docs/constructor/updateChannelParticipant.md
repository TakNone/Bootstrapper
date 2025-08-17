# updateChannelParticipant

**Description** : *A participant has left, joined, was banned or admined in a channel or supergroup*

**Layer** : 211

```tl
updateChannelParticipant#985d3abb flags:# via_chatlist:flags.3?true channel_id:long date:int actor_id:long user_id:long prev_participant:flags.0?ChannelParticipant new_participant:flags.1?ChannelParticipant invite:flags.2?ExportedChatInvite qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	channel_id : -1355074108386839289,
	date : 48,
	actor_id : 5996017325815855567,
	user_id : 5635345891414428679,
	prev_participant : $client->channelParticipant(
		user_id : -5189845102855564363,
		date : 45,
		subscription_until_date : 80,
	),
	new_participant : $client->channelParticipant(
		user_id : 6159313254858739248,
		date : 44,
		subscription_until_date : 44,
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'qSC0wbu3plyI5RzZ',
		admin_id : -2297013291775959590,
		date : 3,
		start_date : 19,
		expire_date : 10,
		usage_limit : 98,
		usage : 10,
		requested : 6,
		subscription_expired : 64,
		title : '6cSnkY8T12ZRtPLs',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 45,
			amount : -7027056246471709472,
		),
	),
	qts : 42,
);
```