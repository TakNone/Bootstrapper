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
		user_id : -8138211645734373544,
	),
	date : 52,
	user_id : 2865642984782146684,
	about : '0DbfGqRmsgEyZ8Vi',
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'soTPNXSlMJVifLGx',
		admin_id : -1846135380087253603,
		date : 89,
		start_date : 87,
		expire_date : 76,
		usage_limit : 27,
		usage : 50,
		requested : 26,
		subscription_expired : 78,
		title : 't3yzuJfhXR2UoCL1',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 1,
			amount : 8145541748512361023,
		),
	),
	qts : 7,
	query_id : -9219798455271569351,
);
```