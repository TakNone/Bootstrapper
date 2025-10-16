# updateBotChatInviteRequester

**Description** : *Someone has requested to join a chat or channel \(bots only, users will receive an updatePendingJoinRequests, instead\)*

**Layer** : 216

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
		user_id : 7820354673444590165,
	),
	date : 36,
	user_id : -179684235145317961,
	about : 'sBdFUwOZI2DRg5tz',
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'UrdeosLp0TKVfW48',
		admin_id : -2085861966567767715,
		date : 32,
		start_date : 32,
		expire_date : 33,
		usage_limit : 91,
		usage : 76,
		requested : 16,
		subscription_expired : 75,
		title : 'DzQJoWA2SmyEejut',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 1,
			amount : 3349228345502401802,
		),
	),
	qts : 29,
);
```