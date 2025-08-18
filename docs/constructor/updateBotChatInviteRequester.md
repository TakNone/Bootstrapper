# updateBotChatInviteRequester

**Description** : *Someone has requested to join a chat or channel \(bots only, users will receive an updatePendingJoinRequests, instead\)*

**Layer** : 211

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
		user_id : 653600140337207430,
	),
	date : 93,
	user_id : -3422100300128666335,
	about : 'qJM01BpYQrI3bahs',
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'nctV9hzAEYrkDbwa',
		admin_id : -8642092997237548347,
		date : 46,
		start_date : 0,
		expire_date : 50,
		usage_limit : 29,
		usage : 69,
		requested : 31,
		subscription_expired : 61,
		title : 'gAZHvmCF0bkd5G4i',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 53,
			amount : -7598253894966149706,
		),
	),
	qts : 11,
);
```