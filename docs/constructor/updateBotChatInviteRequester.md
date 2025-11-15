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
		user_id : 3748269879706322540,
	),
	date : 14,
	user_id : 7733696897244970907,
	about : 'nlS0zwHZdoDF4YWO',
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'U4AVGjvO8SnTZqml',
		admin_id : 2615237951743812970,
		date : 16,
		start_date : 24,
		expire_date : 23,
		usage_limit : 63,
		usage : 76,
		requested : 21,
		subscription_expired : 42,
		title : '9xwpBTg5KHXNoCyI',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 77,
			amount : 8657524106301728106,
		),
	),
	qts : 70,
);
```