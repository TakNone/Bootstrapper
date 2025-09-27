# updateChannelParticipant

**Description** : *A participant has left, joined, was banned or admined in a channel or supergroup*

**Layer** : 214

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
	channel_id : 3797828681374100585,
	date : 37,
	actor_id : 3812825968942220057,
	user_id : -5110413626882595462,
	prev_participant : $client->channelParticipant(
		user_id : -6929619982023434090,
		date : 47,
		subscription_until_date : 30,
	),
	new_participant : $client->channelParticipant(
		user_id : 2422216303204354052,
		date : 63,
		subscription_until_date : 45,
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : '3Ggi5a2ZvVtAXWCQ',
		admin_id : -6071008406144104471,
		date : 80,
		start_date : 16,
		expire_date : 4,
		usage_limit : 46,
		usage : 49,
		requested : 60,
		subscription_expired : 70,
		title : 'bRNqesm2G9kcYDHw',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 24,
			amount : -400984278614741282,
		),
	),
	qts : 14,
);
```