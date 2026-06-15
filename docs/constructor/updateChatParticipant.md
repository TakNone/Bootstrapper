# updateChatParticipant

**Description** : *A user has joined or left a specific chat*

**Layer** : 227

```tl
updateChatParticipant#d087663a flags:# chat_id:long date:int actor_id:long user_id:long prev_participant:flags.0?ChatParticipant new_participant:flags.1?ChatParticipant invite:flags.2?ExportedChatInvite qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>chat_id</mark> | [`long`](type/long) | Chat ID |
| <mark>date</mark> | [`int`](type/int) | When did this event occur |
| <mark>actor_id</mark> | [`long`](type/long) | User that triggered the change (inviter, admin that kicked the user, or the even the user_id itself) |
| <mark>user_id</mark> | [`long`](type/long) | User that was affected by the change |
| **prev_participant** | [`flags.0?ChatParticipant`](type/ChatParticipant) | Previous participant info (empty if this participant just joined) |
| **new_participant** | [`flags.1?ChatParticipant`](type/ChatParticipant) | New participant info (empty if this participant just left) |
| **invite** | [`flags.2?ExportedChatInvite`](type/ExportedChatInvite) | The invite that was used to join the group |
| <mark>qts</mark> | [`int`](type/int) | New qts value, see updates » for more info |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChatParticipant(
	chat_id : 1876647891556051986,
	date : 22,
	actor_id : 3543045854092843090,
	user_id : -8961235139034646250,
	prev_participant : $client->chatParticipant(
		user_id : -6033330057129771278,
		inviter_id : -4143000382685523756,
		date : 26,
		rank : 'EZ7FjIfBHk3Y6uo8',
	),
	new_participant : $client->chatParticipant(
		user_id : -4031667597372830913,
		inviter_id : 505948553637253452,
		date : 44,
		rank : 'nreCDmAbThUQqK8y',
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : '3KUAEBzl0i2Cev5H',
		admin_id : 1105756197148624677,
		date : 14,
		start_date : 99,
		expire_date : 91,
		usage_limit : 17,
		usage : 6,
		requested : 82,
		subscription_expired : 54,
		title : '5KPGp4CRoBwdTvlY',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 78,
			amount : -5790598190360699442,
		),
	),
	qts : 86,
);
```