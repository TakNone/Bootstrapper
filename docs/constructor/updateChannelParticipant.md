# updateChannelParticipant

**Description** : *A participant has left, joined, was banned or admined in a channel or supergroup*

**Layer** : 225

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
	channel_id : 3761939208707265064,
	date : 89,
	actor_id : 4435743234727178766,
	user_id : 804401620767441608,
	prev_participant : $client->channelParticipant(
		user_id : -4183968817695571013,
		date : 93,
		subscription_until_date : 8,
		rank : 'Re5G3vTjWZaY2gUh',
	),
	new_participant : $client->channelParticipant(
		user_id : 3060154940670890483,
		date : 46,
		subscription_until_date : 74,
		rank : 'hu0AnKyTYzwcvZ8I',
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'aGPpLKrOXu3sYyN6',
		admin_id : 4840708428209313489,
		date : 91,
		start_date : 5,
		expire_date : 97,
		usage_limit : 28,
		usage : 3,
		requested : 77,
		subscription_expired : 71,
		title : 'oWqmAGgbOzCRQ64a',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 7,
			amount : 378281159675745091,
		),
	),
	qts : 61,
);
```