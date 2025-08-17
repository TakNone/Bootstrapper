# updateChatParticipant

**Description** : *A user has joined or left a specific chat*

**Layer** : 211

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
	chat_id : -2494208666673544224,
	date : 30,
	actor_id : -1350441780925746620,
	user_id : -8306542016413315052,
	prev_participant : $client->chatParticipant(
		user_id : -3327192052437712115,
		inviter_id : 6447630490350757145,
		date : 38,
	),
	new_participant : $client->chatParticipant(
		user_id : 3932031841159260188,
		inviter_id : 8207926886097879711,
		date : 45,
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'RZJ8dg3BYN1kXuWq',
		admin_id : -6002879162946430325,
		date : 26,
		start_date : 95,
		expire_date : 82,
		usage_limit : 80,
		usage : 54,
		requested : 54,
		subscription_expired : 42,
		title : 'ymYat0b4UIAezrdq',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 78,
			amount : -6054144081372718808,
		),
	),
	qts : 71,
);
```