# updateBotChatInviteRequester

**Description** : *Someone has requested to join a chat or channel \(bots only, users will receive an updatePendingJoinRequests, instead\)*

**Layer** : 233

```tl
updateBotChatInviteRequester#7cb34d79 flags:# peer:Peer date:int user_id:long about:string invite:ExportedChatInvite qts:int query_id:flags.0?long = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>peer</mark> | [`Peer`](type/Peer) | The chat or channel in question |
| <mark>date</mark> | [`int`](type/int) | When was the join request » made |
| <mark>user_id</mark> | [`long`](type/long) | The user ID that is asking to join the chat or channel |
| <mark>about</mark> | [`string`](type/string) | Bio of the user |
| <mark>invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | Chat invite link that was used by the user to send the join request » |
| <mark>qts</mark> | [`int`](type/int) | QTS event sequence identifier |
| **query_id** | [`flags.0?long`](type/long) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotChatInviteRequester(
	peer : $client->peerUser(
		user_id : 5191251058424579448,
	),
	date : 76,
	user_id : -1994489674673207221,
	about : '24Mdh5PawcVyokrW',
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'b9CDd6XaHpu5tYf8',
		admin_id : -8050466196809065949,
		date : 57,
		start_date : 22,
		expire_date : 99,
		usage_limit : 9,
		usage : 17,
		requested : 88,
		subscription_expired : 7,
		title : 'V9bXvqRQpIM0BOK6',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 42,
			amount : -4205630050277421503,
		),
	),
	qts : 96,
	query_id : -687383619039688225,
);
```