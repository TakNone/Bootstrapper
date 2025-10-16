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
		user_id : -3165160208557302338,
	),
	date : 30,
	user_id : 1735338632012152802,
	about : 'eY4yrqslgwPVb3AX',
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'sxw5BuJzfSvj94tT',
		admin_id : -8845045342787778620,
		date : 46,
		start_date : 87,
		expire_date : 34,
		usage_limit : 99,
		usage : 36,
		requested : 50,
		subscription_expired : 31,
		title : '1m257nE3wbSA9pFe',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 73,
			amount : 1860784574674027916,
		),
	),
	qts : 17,
);
```