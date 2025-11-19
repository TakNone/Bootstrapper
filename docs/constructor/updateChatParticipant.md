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
	chat_id : -6624806030287308907,
	date : 2,
	actor_id : 6543582416380251959,
	user_id : 5889644653268542922,
	prev_participant : $client->chatParticipant(
		user_id : -979651207094118744,
		inviter_id : -5370415373897227597,
		date : 44,
	),
	new_participant : $client->chatParticipant(
		user_id : -6828694756320553622,
		inviter_id : 4883452464864336952,
		date : 19,
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'ip4OUTqSKLxmtZ6R',
		admin_id : -9110799148261299901,
		date : 93,
		start_date : 71,
		expire_date : 81,
		usage_limit : 91,
		usage : 84,
		requested : 68,
		subscription_expired : 54,
		title : 'tOu2k3c6jK5SE9ri',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 75,
			amount : 879231392838278765,
		),
	),
	qts : 71,
);
```