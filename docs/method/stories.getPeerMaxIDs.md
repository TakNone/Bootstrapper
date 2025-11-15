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
			chat_id : -4748605814489470906,
		),
		$client->inputPeerUser(
			user_id : 7311290959474030611,
			access_hash : 4982179619635474736,
		),
		$client->inputPeerChannel(
			channel_id : -2164127756347675158,
			access_hash : -2497172969581325074,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 53,
			user_id : -8258577714526800434,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 42,
			channel_id : -6986496300987913184,
		),
	),
);
```