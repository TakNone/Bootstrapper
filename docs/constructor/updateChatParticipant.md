# updateChatParticipant

**Description** : *A user has joined or left a specific basic group &raquo;: this update can only be received by bots, see here &raquo; for the user version of this update*

**Layer** : 229

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
	chat_id : -7779725869429901285,
	date : 80,
	actor_id : 7715090192558284890,
	user_id : 5506207720645273901,
	prev_participant : $client->chatParticipant(
		user_id : 1385734588448325932,
		inviter_id : 3833760038868632075,
		date : 23,
		rank : 'sgtO9ZVnJByivN0Y',
	),
	new_participant : $client->chatParticipant(
		user_id : 1028443483061738256,
		inviter_id : -5484691866234835002,
		date : 76,
		rank : 'KFch2CeHgqQzPlnR',
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'HjqIiyv1kg06TBpX',
		admin_id : 3827246322995313220,
		date : 62,
		start_date : 16,
		expire_date : 45,
		usage_limit : 60,
		usage : 79,
		requested : 80,
		subscription_expired : 12,
		title : 'huTvlXekNLzB9O3s',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 77,
			amount : 7986485567991442376,
		),
	),
	qts : 14,
);
```