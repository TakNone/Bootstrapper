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
		user_id : 684914527370613045,
	),
	date : 0,
	user_id : 852167972246895360,
	about : 'h2v3qTgzLUEANurM',
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'xBOwRa1s6cp8PF0f',
		admin_id : -4230562015379360502,
		date : 62,
		start_date : 84,
		expire_date : 18,
		usage_limit : 100,
		usage : 94,
		requested : 25,
		subscription_expired : 31,
		title : 'lmcjyM6VhDqUOJws',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 15,
			amount : -5491673885539644627,
		),
	),
	qts : 41,
);
```