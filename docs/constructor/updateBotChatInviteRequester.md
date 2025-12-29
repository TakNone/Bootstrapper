# updateBotChatInviteRequester

**Description** : *Someone has requested to join a chat or channel \(bots only, users will receive an updatePendingJoinRequests, instead\)*

**Layer** : 218

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
		user_id : -7974515758710926478,
	),
	date : 59,
	user_id : 6764235628019357691,
	about : '94WleYsEPfuwa7UI',
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'kWJHYBS7Alz2q8bM',
		admin_id : -3381333258724474107,
		date : 24,
		start_date : 87,
		expire_date : 88,
		usage_limit : 90,
		usage : 2,
		requested : 42,
		subscription_expired : 2,
		title : 'lGi4bRcMaetySH2g',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 26,
			amount : 6977495858184310635,
		),
	),
	qts : 38,
);
```