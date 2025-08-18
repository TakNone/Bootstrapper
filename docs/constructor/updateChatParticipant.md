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
	chat_id : 5421549902215419225,
	date : 41,
	actor_id : 6223414990569140230,
	user_id : -1917274911615736811,
	prev_participant : $client->chatParticipant(
		user_id : 8893828176772699343,
		inviter_id : -3437818811185697954,
		date : 2,
	),
	new_participant : $client->chatParticipant(
		user_id : 7504347082922579581,
		inviter_id : 6070617258219499184,
		date : 74,
	),
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : '0fPlFHJynIOijW7k',
		admin_id : -6263441641347618883,
		date : 44,
		start_date : 27,
		expire_date : 11,
		usage_limit : 21,
		usage : 96,
		requested : 41,
		subscription_expired : 39,
		title : 'KR9qkte8SnTzhHNl',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 45,
			amount : -6208624875093918149,
		),
	),
	qts : 38,
);
```