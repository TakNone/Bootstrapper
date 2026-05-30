# updateChatParticipant

**Description** : *A user has joined or left a specific chat*

**Layer** : 225

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
	chat_id : 6099334978207078808,
	date : 43,
	actor_id : -7481653357515937134,
	user_id : -2831796164880394895,
	prev_participant : $client->chatParticipant(
		user_id : 5283941072054870197,
		inviter_id : 4643414026155314168,
		date : 0,
		rank : 'tQkxFBr7Pup0AcU1',
	),
	new_participant : $client->chatParticipant(
		user_id : -7110124412673647220,
		inviter_id : 7247226023541187254,
		date : 43,
		rank : 'walWJXfNT7Fz5qem',
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'Y4jC6z7O8VPLB3iJ',
		admin_id : 4891785876824477537,
		date : 32,
		start_date : 58,
		expire_date : 2,
		usage_limit : 72,
		usage : 21,
		requested : 79,
		subscription_expired : 96,
		title : '9yJHeANPgIDnm4uZ',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 25,
			amount : 2931508985835933374,
		),
	),
	qts : 93,
);
```