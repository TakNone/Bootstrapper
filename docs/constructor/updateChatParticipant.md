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
	chat_id : -6987831417228941169,
	date : 89,
	actor_id : 779756980308975424,
	user_id : -8992088579837600727,
	prev_participant : $client->chatParticipant(
		user_id : -2675317295987910993,
		inviter_id : 1656903058765953286,
		date : 65,
		rank : 'FxwvtE0nyZk5G3ph',
	),
	new_participant : $client->chatParticipant(
		user_id : -4762299192527946039,
		inviter_id : 8987418989694617012,
		date : 93,
		rank : '6BN5u4HYkglR1bKj',
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'XhqSTByZQM6vsR9A',
		admin_id : 5483510051718249690,
		date : 37,
		start_date : 50,
		expire_date : 89,
		usage_limit : 34,
		usage : 13,
		requested : 17,
		subscription_expired : 25,
		title : 'nFNbcf7oQaJ3xt4U',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 79,
			amount : 4142587632264052443,
		),
	),
	qts : 27,
);
```