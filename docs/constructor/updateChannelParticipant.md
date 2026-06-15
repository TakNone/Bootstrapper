# updateChannelParticipant

**Description** : *A participant has left, joined, was banned or admined in a channel or supergroup*

**Layer** : 227

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
	channel_id : -192555003601948240,
	date : 65,
	actor_id : -7138062095246440221,
	user_id : 2158405527163446743,
	prev_participant : $client->channelParticipant(
		user_id : -1474360403909652,
		date : 83,
		subscription_until_date : 90,
		rank : 'Lhbrpx1aPu89gCvG',
	),
	new_participant : $client->channelParticipant(
		user_id : -4536843245081561504,
		date : 53,
		subscription_until_date : 43,
		rank : '0UELasSZIbdqzABo',
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'jyUXguE1OtPTdr4J',
		admin_id : -6343616456377832521,
		date : 100,
		start_date : 90,
		expire_date : 31,
		usage_limit : 15,
		usage : 62,
		requested : 71,
		subscription_expired : 71,
		title : 'ak20QJSl6KP8jdOm',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 63,
			amount : 7586773716114852278,
		),
	),
	qts : 41,
);
```