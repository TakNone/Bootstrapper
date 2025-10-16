# requestedPeerChat

**Description** : *Info about a chat, shared by a user with the currently logged in bot using messages\.sendBotRequestedPeer*

**Layer** : 216

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
	chat_id : 5701560740475627022,
	title : 'Cv8aRcNKSBYqtspP',
	photo : $client->photoEmpty(
		id : 3310859938655986820,
	),
);
```