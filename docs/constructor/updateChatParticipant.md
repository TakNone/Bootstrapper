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
	chat_id : -3111007180416954263,
	date : 52,
	actor_id : 4855142027117813367,
	user_id : 3972729143373751577,
	prev_participant : $client->chatParticipant(
		user_id : 2520178192368417523,
		inviter_id : 1100721114078068917,
		date : 50,
	),
	new_participant : $client->chatParticipant(
		user_id : -7465669677741195380,
		inviter_id : -6134430756560478510,
		date : 18,
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : '25anT40vgIDVSjhb',
		admin_id : 1503846486803413989,
		date : 64,
		start_date : 86,
		expire_date : 48,
		usage_limit : 50,
		usage : 63,
		requested : 38,
		subscription_expired : 25,
		title : 'gqe2ivIhsM9SQ84a',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 2,
			amount : -8754618530341534588,
		),
	),
	qts : 4,
);
```