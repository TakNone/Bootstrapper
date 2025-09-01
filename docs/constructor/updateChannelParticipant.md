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
	channel_id : -2151913375224399041,
	date : 69,
	actor_id : -2379751439719078865,
	user_id : 6219993831846230704,
	prev_participant : $client->channelParticipant(
		user_id : -3631102060581820134,
		date : 4,
		subscription_until_date : 84,
	),
	new_participant : $client->channelParticipant(
		user_id : -7507988573752693943,
		date : 23,
		subscription_until_date : 40,
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'at9AI8HvM0CNjSbG',
		admin_id : -6356899617049123227,
		date : 68,
		start_date : 98,
		expire_date : 50,
		usage_limit : 48,
		usage : 28,
		requested : 12,
		subscription_expired : 24,
		title : 'GidT2IMzbAwsDPx0',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 77,
			amount : -3820995871973004588,
		),
	),
	qts : 10,
);
```