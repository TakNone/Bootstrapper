# contacts.setBlocked

**Description** : *Replace the contents of an entire blocklist, see here for more info &raquo;*

**Layer** : 214

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
			chat_id : 1631165833807546750,
		),
		$client->inputPeerUser(
			user_id : 344685452146121982,
			access_hash : 2268354060656747480,
		),
		$client->inputPeerChannel(
			channel_id : -4934425907790857537,
			access_hash : -7366939001544174387,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 86,
			user_id : -4347261089445077912,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 21,
			channel_id : 6710384148028333042,
		),
	),
	limit : 83,
);
```