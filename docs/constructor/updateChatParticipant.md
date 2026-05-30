# updateChatParticipant

**Description** : *A user has joined or left a specific chat*

**Layer** : 222

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
	chat_id : -8553716199145126877,
	date : 2,
	actor_id : 1013845414980319509,
	user_id : 8624392150253547408,
	prev_participant : $client->chatParticipant(
		user_id : -2565843641713713760,
		inviter_id : 1781072093901918304,
		date : 72,
	),
	new_participant : $client->chatParticipant(
		user_id : 4868732420712135551,
		inviter_id : -3326853059832748770,
		date : 34,
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'mJe87Iqp0P4yg1rU',
		admin_id : 5776864447124498116,
		date : 31,
		start_date : 69,
		expire_date : 42,
		usage_limit : 79,
		usage : 9,
		requested : 60,
		subscription_expired : 65,
		title : 'j5s0aKNobx9OZQ6c',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 82,
			amount : 8345368389163714604,
		),
	),
	qts : 63,
);
```