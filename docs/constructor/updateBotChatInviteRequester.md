# updateBotChatInviteRequester

**Description** : *Someone has requested to join a chat or channel \(bots only, users will receive an updatePendingJoinRequests, instead\)*

**Layer** : 222

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
		user_id : -8329150396589947641,
	),
	date : 14,
	user_id : -3182745537154970805,
	about : 'Wcmz5OCi8ZUBb4t1',
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'AwqagzFG18ILYJWy',
		admin_id : 6211646485093646718,
		date : 8,
		start_date : 53,
		expire_date : 93,
		usage_limit : 13,
		usage : 27,
		requested : 96,
		subscription_expired : 17,
		title : 'fZxSthRXmVA2cG6D',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 77,
			amount : 2745788611567337885,
		),
	),
	qts : 92,
);
```