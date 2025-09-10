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
	chat_id : 4895169705692121858,
	date : 38,
	actor_id : 6958500208326896858,
	user_id : -6350487783822781057,
	prev_participant : $client->chatParticipant(
		user_id : -8552798744722462617,
		inviter_id : -5015658515223737297,
		date : 27,
	),
	new_participant : $client->chatParticipant(
		user_id : -893702709800733002,
		inviter_id : -4757077406424641628,
		date : 95,
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : '0YVlHhfRnZzKj8Xm',
		admin_id : -8952303851877893763,
		date : 21,
		start_date : 76,
		expire_date : 48,
		usage_limit : 33,
		usage : 53,
		requested : 57,
		subscription_expired : 27,
		title : 'D9r1yM6OK5NjB2xq',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 86,
			amount : 1334811619188071185,
		),
	),
	qts : 11,
);
```