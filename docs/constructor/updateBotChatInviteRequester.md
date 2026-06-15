# updateBotChatInviteRequester

**Description** : *Someone has requested to join a chat or channel \(bots only, users will receive an updatePendingJoinRequests, instead\)*

**Layer** : 227

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
		user_id : -7451544856698608188,
	),
	date : 29,
	user_id : 8523252819237905695,
	about : 'Ny6h0ilJ5FcBejx9',
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'OtzDVyWgfwMFldC7',
		admin_id : -2622605563890167121,
		date : 33,
		start_date : 44,
		expire_date : 42,
		usage_limit : 95,
		usage : 90,
		requested : 94,
		subscription_expired : 8,
		title : 'R1UlWxzJQd3gvNjh',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 28,
			amount : 6186732652033669250,
		),
	),
	qts : 28,
	query_id : 4670491961001802014,
);
```