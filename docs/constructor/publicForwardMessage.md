# publicForwardMessage

**Description** : *Contains info about a forward of a story as a message*

**Layer** : 214

```tl
publicForwardMessage#1f2bf4a message:Message = PublicForward;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>message</mark> | [`Message`](type/Message) | Info about the message with the reposted story |

---

## Type

[PublicForward](type/PublicForward)

---

## Example

```php
$publicForward = $client->publicForwardMessage(
	message : $client->messageEmpty(
		id : 29,
		peer_id : $client->peerUser(
			user_id : 5467659437615944702,
		),
	),
);
```