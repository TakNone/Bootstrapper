# updateBotChatInviteRequester

**Description** : *Someone has requested to join a chat or channel \(bots only, users will receive an updatePendingJoinRequests, instead\)*

**Layer** : 225

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
		user_id : -6306308694735663804,
	),
	date : 97,
	user_id : 2813422061102068967,
	about : '1uZjJMfNvqI4xn6m',
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : '6RwbYTG8zKOWVriy',
		admin_id : -2033566473256986479,
		date : 41,
		start_date : 38,
		expire_date : 59,
		usage_limit : 25,
		usage : 62,
		requested : 38,
		subscription_expired : 94,
		title : 'tQkMZSqpyJsVTUbE',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 41,
			amount : -2284195246790886329,
		),
	),
	qts : 12,
);
```