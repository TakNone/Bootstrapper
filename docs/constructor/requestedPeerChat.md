# requestedPeerChat

**Description** : *Info about a chat, shared by a user with the currently logged in bot using messages\.sendBotRequestedPeer*

**Layer** : 211

```tl
requestedPeerChat#7307544f flags:# chat_id:long title:flags.0?string photo:flags.2?Photo = RequestedPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>chat_id</mark> | [`long`](type/long) | Chat ID |
| **title** | [`flags.0?string`](type/string) | Chat title |
| **photo** | [`flags.2?Photo`](type/Photo) | Chat photo |

---

## Type

[RequestedPeer](type/RequestedPeer)

---

## Example

```php
$requestedPeer = $client->requestedPeerChat(
	chat_id : 3508411118707208147,
	title : '6jSYqioRFUZXdJhg',
	photo : $client->photoEmpty(
		id : 6287869020158873866,
	),
);
```