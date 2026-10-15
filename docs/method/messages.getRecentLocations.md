# messages.getRecentLocations

**Description** : *Get all recent live locations sent to a specific chat: returns up to 1 location message \(messageMediaGeoLive\) per chat participant*

**Layer** : 229

```tl
messages.getRecentLocations#702a40e0 peer:InputPeer limit:int hash:long = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Target group or private chat |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[messages.Messages](type/messages.Messages)

---

## Example

```php
$messagesMessages = $client->messages->getRecentLocations(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	limit : 35,
	hash : 0,
);
```