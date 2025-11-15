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
	channel_id : -952905862037164724,
	date : 31,
	actor_id : 4147996203394563684,
	user_id : 3658078213978500244,
	prev_participant : $client->channelParticipant(
		user_id : 4145992964683050750,
		date : 94,
		subscription_until_date : 5,
	),
	new_participant : $client->channelParticipant(
		user_id : 1696578752676719356,
		date : 19,
		subscription_until_date : 68,
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'LpAxg1OuoZ2I4vlB',
		admin_id : 6558073144934481014,
		date : 77,
		start_date : 24,
		expire_date : 69,
		usage_limit : 88,
		usage : 90,
		requested : 97,
		subscription_expired : 19,
		title : '2Di3bBR7QaLHzEs4',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 47,
			amount : 8737058043304381050,
		),
	),
	qts : 63,
);
```