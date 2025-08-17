# stories.getPeerMaxIDs

**Description** : *Get the IDs of the maximum read stories for a set of peers*

**Layer** : 211

```tl
stories.getPeerMaxIDs#535983c3 id:Vector<InputPeer> = Vector<int>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`Vector<InputPeer>`](type/InputPeer) | Peers |

---

## Result

[Vector<int>](type/int)

---

## Example

```php
$int = $client->stories->getPeerMaxIDs(
	id : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -606756044828117999,
		),
		$client->inputPeerUser(
			user_id : 6755502096030279284,
			access_hash : -2056624891901647826,
		),
		$client->inputPeerChannel(
			channel_id : 2245706022819605074,
			access_hash : -5642741855263404987,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 1,
			user_id : 3300276902789540288,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 50,
			channel_id : -8366704656542314609,
		),
	),
);
```