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
	chat_id : -3977462121065707992,
	date : 76,
	actor_id : 3230069631378478486,
	user_id : -1494835026162620129,
	prev_participant : $client->chatParticipant(
		user_id : -981653167963129553,
		inviter_id : 2130294404793901191,
		date : 64,
	),
	new_participant : $client->chatParticipant(
		user_id : 101685268542753896,
		inviter_id : 692712244355952377,
		date : 2,
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'DI2Ec5JR70orPB3u',
		admin_id : -5971513986720416341,
		date : 37,
		start_date : 100,
		expire_date : 63,
		usage_limit : 5,
		usage : 80,
		requested : 6,
		subscription_expired : 16,
		title : 'hCbBViQdxfXK3DAw',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 41,
			amount : -2804437492535919880,
		),
	),
	qts : 55,
);
```