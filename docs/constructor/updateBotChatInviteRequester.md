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
		user_id : -5769366891666280088,
	),
	date : 99,
	user_id : 804341175783064071,
	about : 'KnoEYTqGSd1gX8Bv',
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'LbMj9JTCU6cS0Ov5',
		admin_id : -4329762162765782924,
		date : 69,
		start_date : 4,
		expire_date : 89,
		usage_limit : 99,
		usage : 92,
		requested : 42,
		subscription_expired : 85,
		title : 'WAFkatDUcNxYQKZ6',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 39,
			amount : 340231029393883125,
		),
	),
	qts : 70,
);
```