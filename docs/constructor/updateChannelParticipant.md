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
	channel_id : -3549722516317222764,
	date : 99,
	actor_id : -5870434097843580215,
	user_id : -9198512637289630816,
	prev_participant : $client->channelParticipant(
		user_id : -4286017203338113368,
		date : 51,
		subscription_until_date : 60,
	),
	new_participant : $client->channelParticipant(
		user_id : 6623347136068308207,
		date : 72,
		subscription_until_date : 33,
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'VZz8dAjh4qaDBMtP',
		admin_id : 6931584785723557681,
		date : 57,
		start_date : 56,
		expire_date : 20,
		usage_limit : 45,
		usage : 41,
		requested : 24,
		subscription_expired : 18,
		title : 'AFZURuxHnCv38hPk',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 81,
			amount : -2042357384640650243,
		),
	),
	qts : 67,
);
```