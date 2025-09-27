# stories.getPeerMaxIDs

**Description** : *Get the IDs of the maximum read stories for a set of peers*

**Layer** : 214

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
			chat_id : -2444110872043194232,
		),
		$client->inputPeerUser(
			user_id : -1685577621238138899,
			access_hash : 594398257804431985,
		),
		$client->inputPeerChannel(
			channel_id : -8057156971810355210,
			access_hash : 900205430454995578,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 82,
			user_id : -1562520345562352280,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 47,
			channel_id : -2740673146956978648,
		),
	),
);
```