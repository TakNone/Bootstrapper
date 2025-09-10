# messages.getRecentLocations

**Description** : *Get live location history of a certain user*

**Layer** : 214

```tl
messages.getRecentLocations#702a40e0 peer:InputPeer limit:int hash:long = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | User |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[messages.Messages](type/messages.Messages)

---

## Example

```php
$messagesMessages = $client->messages->getRecentLocations(
	peer : $client->inputPeerEmpty(),
	limit : 99,
	hash : 0,
);
```