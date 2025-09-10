# updateBotChatInviteRequester

**Description** : *Someone has requested to join a chat or channel \(bots only, users will receive an updatePendingJoinRequests, instead\)*

**Layer** : 214

```tl
updateBotChatInviteRequester#11dfa986 peer:Peer date:int user_id:long about:string invite:ExportedChatInvite qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | The chat or channel in question |
| <mark>date</mark> | [`int`](type/int) | When was the join request » made |
| <mark>user_id</mark> | [`long`](type/long) | The user ID that is asking to join the chat or channel |
| <mark>about</mark> | [`string`](type/string) | Bio of the user |
| <mark>invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | Chat invite link that was used by the user to send the join request » |
| <mark>qts</mark> | [`int`](type/int) | QTS event sequence identifier |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotChatInviteRequester(
	peer : $client->peerUser(
		user_id : -7576341317991486028,
	),
	date : 49,
	user_id : 6488566678102768283,
	about : 'uRqEjIANXik3Pt0o',
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : '0z8dELCksrWYbe36',
		admin_id : -1769839553247388509,
		date : 91,
		start_date : 1,
		expire_date : 13,
		usage_limit : 76,
		usage : 14,
		requested : 59,
		subscription_expired : 43,
		title : '0WcGDJKE5TAMxNs1',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 75,
			amount : 7531805664521309560,
		),
	),
	qts : 7,
);
```