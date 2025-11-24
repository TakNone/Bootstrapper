# updateChannelParticipant

**Description** : *A participant has left, joined, was banned or admined in a channel or supergroup*

**Layer** : 218

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
	channel_id : 3617992235948262613,
	date : 59,
	actor_id : -6192815020675012680,
	user_id : -6988642769010991855,
	prev_participant : $client->channelParticipant(
		user_id : 6940688566669941493,
		date : 55,
		subscription_until_date : 31,
	),
	new_participant : $client->channelParticipant(
		user_id : 6776617357566224154,
		date : 47,
		subscription_until_date : 1,
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'd1PEFScKlqZAWIjX',
		admin_id : 8869739392714712438,
		date : 36,
		start_date : 63,
		expire_date : 77,
		usage_limit : 59,
		usage : 4,
		requested : 34,
		subscription_expired : 51,
		title : 'zp6kLmEK9UyP7bQO',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 92,
			amount : 2377340354373851452,
		),
	),
	qts : 67,
);
```