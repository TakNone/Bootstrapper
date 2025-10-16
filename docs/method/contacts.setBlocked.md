# contacts.setBlocked

**Description** : *Replace the contents of an entire blocklist, see here for more info &raquo;*

**Layer** : 216

```tl
contacts.setBlocked#94c65c76 flags:# my_stories_from:flags.0?true id:Vector<InputPeer> limit:int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **my_stories_from** | [`flags.0?true`](type/true) | Whether to edit the story blocklist; if not set, will edit the main blocklist. See here » for differences between the two |
| <mark>id</mark> | [`Vector<InputPeer>`](type/InputPeer) | Full content of the blocklist |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->contacts->setBlocked(
	my_stories_from : true,
	id : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : 3266153241293104823,
		),
		$client->inputPeerUser(
			user_id : -3415660921258418125,
			access_hash : -1664406109113046582,
		),
		$client->inputPeerChannel(
			channel_id : 3633450528926481182,
			access_hash : 8707633374029125732,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 14,
			user_id : -5170481922556381638,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 40,
			channel_id : -6196770949270752036,
		),
	),
	limit : 87,
);
```