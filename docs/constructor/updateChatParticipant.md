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
	chat_id : 4694182731728874370,
	date : 39,
	actor_id : -8050378773488732241,
	user_id : -4534434220436988468,
	prev_participant : $client->chatParticipant(
		user_id : 5774569103746370101,
		inviter_id : -1957552280754688886,
		date : 81,
	),
	new_participant : $client->chatParticipant(
		user_id : 6877296776305626798,
		inviter_id : -4768302434240565177,
		date : 37,
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'AOxNQhB5aYJUdClo',
		admin_id : 1898575825715856089,
		date : 59,
		start_date : 46,
		expire_date : 69,
		usage_limit : 73,
		usage : 89,
		requested : 42,
		subscription_expired : 25,
		title : 'WgP3eRa7lHsxmwSq',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 41,
			amount : 220747089257427088,
		),
	),
	qts : 6,
);
```