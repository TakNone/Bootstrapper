# updateChatParticipant

**Description** : *A user has joined or left a specific chat*

**Layer** : 214

```tl
updateChatParticipant#d087663a flags:# chat_id:long date:int actor_id:long user_id:long prev_participant:flags.0?ChatParticipant new_participant:flags.1?ChatParticipant invite:flags.2?ExportedChatInvite qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	chat_id : -6465923833520988234,
	date : 3,
	actor_id : -3636088865097774911,
	user_id : -8777975137045024255,
	prev_participant : $client->chatParticipant(
		user_id : 8257839162550713225,
		inviter_id : 8628596655274381471,
		date : 36,
	),
	new_participant : $client->chatParticipant(
		user_id : 1512794984650839910,
		inviter_id : -7466379248335902587,
		date : 13,
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'RDtmIQiOr5qAeCyS',
		admin_id : -1710055265089988812,
		date : 27,
		start_date : 100,
		expire_date : 55,
		usage_limit : 15,
		usage : 27,
		requested : 80,
		subscription_expired : 50,
		title : 'EJz5yKSrFpPoahAj',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 62,
			amount : 8144489636225823548,
		),
	),
	qts : 11,
);
```