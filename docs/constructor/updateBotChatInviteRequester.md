# updateBotChatInviteRequester

**Description** : *Someone has requested to join a chat or channel (bots only, users will receive an updatePendingJoinRequests, instead)*

**Layer** : 211

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
		user_id : 4274687743735204733,
	),
	date : 25,
	user_id : 7589001531086082151,
	about : 'rU9diYR3LP78j0nz',
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'cxve30VZruiEWJnA',
		admin_id : -3698979074044231100,
		date : 64,
		start_date : 57,
		expire_date : 65,
		usage_limit : 72,
		usage : 36,
		requested : 44,
		subscription_expired : 53,
		title : 'q4CgFOTlb39tRzmX',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 8,
			amount : 4149155442825142862,
		),
	),
	qts : 77,
);
```