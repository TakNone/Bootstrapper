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
		user_id : -1957071682099165753,
	),
	date : 15,
	user_id : -3469346276317608456,
	about : 's2gHDA97ZreI1cxS',
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : '4IPHg7UcOZkDAeLa',
		admin_id : -3873624955618257716,
		date : 20,
		start_date : 21,
		expire_date : 94,
		usage_limit : 68,
		usage : 51,
		requested : 20,
		subscription_expired : 32,
		title : 'i4AVp7jWldhSeqGu',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 76,
			amount : 3632447493662699837,
		),
	),
	qts : 75,
);
```