# stories.getPeerMaxIDs

**Description** : *Get the IDs of the maximum read stories for a set of peers*

**Layer** : 216

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
			chat_id : 665180529586156492,
		),
		$client->inputPeerUser(
			user_id : -6236515139684977642,
			access_hash : -857383503346597726,
		),
		$client->inputPeerChannel(
			channel_id : 7241083988124461468,
			access_hash : 4314773310150189920,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 73,
			user_id : 5914922196542896949,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 75,
			channel_id : 1375915694064230333,
		),
	),
);
```