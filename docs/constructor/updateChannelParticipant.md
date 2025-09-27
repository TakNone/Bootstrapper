# updateChannelParticipant

**Description** : *A participant has left, joined, was banned or admined in a channel or supergroup*

**Layer** : 216

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
	channel_id : 1500582087218772664,
	date : 16,
	actor_id : -5142457042423494356,
	user_id : 3763832199750539802,
	prev_participant : $client->channelParticipant(
		user_id : 4570098922377152906,
		date : 57,
		subscription_until_date : 41,
	),
	new_participant : $client->channelParticipant(
		user_id : 5675604179958194647,
		date : 85,
		subscription_until_date : 33,
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'O9FdIVhsjoKAmekB',
		admin_id : -6918286345415683547,
		date : 37,
		start_date : 0,
		expire_date : 33,
		usage_limit : 11,
		usage : 93,
		requested : 74,
		subscription_expired : 11,
		title : 'jkPHlSxGtzqnFJRB',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 32,
			amount : 7794174686245203125,
		),
	),
	qts : 26,
);
```