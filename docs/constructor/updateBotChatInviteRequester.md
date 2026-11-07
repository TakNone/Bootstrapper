# updateBotChatInviteRequester

**Description** : *Someone has requested to join a chat or channel \(bots only, users will receive an updatePendingJoinRequests, instead\)*

**Layer** : 229

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
		user_id : -3086832580269106270,
	),
	date : 69,
	user_id : -1134954329941602547,
	about : 'VEsFe4QlgbojG3mW',
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'aXFkpV2Os07HLudr',
		admin_id : -1371108281025391,
		date : 77,
		start_date : 86,
		expire_date : 57,
		usage_limit : 51,
		usage : 0,
		requested : 18,
		subscription_expired : 77,
		title : 'H2AQ9bNJOUz7F3cW',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 58,
			amount : 7111010690522830836,
		),
	),
	qts : 23,
	query_id : 2419976168132465300,
);
```