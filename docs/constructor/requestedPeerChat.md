# requestedPeerChat

**Description** : *Info about a chat, shared by a user with the currently logged in bot using messages\.sendBotRequestedPeer*

**Layer** : 218

```tl
requestedPeerChat#7307544f flags:# chat_id:long title:flags.0?string photo:flags.2?Photo = RequestedPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	chat_id : -5252059869643903117,
	title : 'i6kYWCZRT9NXMmfa',
	photo : $client->photoEmpty(
		id : 7810185933539130167,
	),
);
```