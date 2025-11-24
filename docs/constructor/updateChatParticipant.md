# updateChatParticipant

**Description** : *A user has joined or left a specific chat*

**Layer** : 218

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
	chat_id : 4583844599288357574,
	date : 8,
	actor_id : -6130458829271276215,
	user_id : 246187342579237811,
	prev_participant : $client->chatParticipant(
		user_id : -8041163275342371033,
		inviter_id : 1646723611603754211,
		date : 27,
	),
	new_participant : $client->chatParticipant(
		user_id : -3614525422687762556,
		inviter_id : -5186411396553202192,
		date : 47,
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : '6cKJUrhHF2XaqlBn',
		admin_id : -8859580195547841480,
		date : 25,
		start_date : 96,
		expire_date : 89,
		usage_limit : 27,
		usage : 25,
		requested : 33,
		subscription_expired : 36,
		title : 'A3MLrPuG4o0bVwU9',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 64,
			amount : -9131328895259823537,
		),
	),
	qts : 2,
);
```