# updateChatParticipant

**Description** : *A user has joined or left a specific chat*

**Layer** : 216

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
	chat_id : 3188722891211015137,
	date : 54,
	actor_id : 8088877086797882172,
	user_id : 903982092449302466,
	prev_participant : $client->chatParticipant(
		user_id : -6344570221203527115,
		inviter_id : -8988911913041649879,
		date : 28,
	),
	new_participant : $client->chatParticipant(
		user_id : -5732628300633374160,
		inviter_id : 1187428354563019493,
		date : 7,
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'Spqow6yLe2c7sDbt',
		admin_id : 8397366870479668226,
		date : 40,
		start_date : 77,
		expire_date : 66,
		usage_limit : 89,
		usage : 93,
		requested : 48,
		subscription_expired : 52,
		title : 'UXhBN56KkSzdi18I',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 53,
			amount : -8196034988622030884,
		),
	),
	qts : 66,
);
```