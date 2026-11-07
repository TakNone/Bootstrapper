# updateChatParticipant

**Description** : *A user has joined or left a specific basic group &raquo;: this update can only be received by bots, see here &raquo; for the user version of this update*

**Layer** : 233

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
	chat_id : 5183734272283347064,
	date : 85,
	actor_id : -8807418972672999229,
	user_id : -2071325970579058102,
	prev_participant : $client->chatParticipant(
		user_id : 3631054672972638532,
		inviter_id : 1825344351759146959,
		date : 51,
		rank : 'SF6MnovX7PrhmEsL',
	),
	new_participant : $client->chatParticipant(
		user_id : -7555958426344177552,
		inviter_id : -975876811121112873,
		date : 5,
		rank : 'W4SdfPVTKRbMHtya',
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'vWs71e0cwzD84ApC',
		admin_id : -6398478521654669378,
		date : 14,
		start_date : 20,
		expire_date : 30,
		usage_limit : 99,
		usage : 51,
		requested : 92,
		subscription_expired : 43,
		title : 'r5MU7eH4aRQ8wc9O',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 22,
			amount : 8184020108422912337,
		),
	),
	qts : 29,
);
```