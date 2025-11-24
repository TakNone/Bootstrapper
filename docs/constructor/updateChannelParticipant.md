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
	channel_id : 8170053971446715232,
	date : 1,
	actor_id : 1094562433346020171,
	user_id : 4662552896427593824,
	prev_participant : $client->channelParticipant(
		user_id : -5040334285029885893,
		date : 21,
		subscription_until_date : 95,
	),
	new_participant : $client->channelParticipant(
		user_id : -4074101470385809798,
		date : 23,
		subscription_until_date : 35,
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'Yoc30fTqUbXjrPH7',
		admin_id : -5191385119754833294,
		date : 84,
		start_date : 76,
		expire_date : 48,
		usage_limit : 31,
		usage : 73,
		requested : 34,
		subscription_expired : 21,
		title : 'EdcSpUJxzA7FNeP0',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 20,
			amount : 6849321266214854755,
		),
	),
	qts : 13,
);
```