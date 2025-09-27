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
			chat_id : 1668890586966004594,
		),
		$client->inputPeerUser(
			user_id : 8606236733071083724,
			access_hash : 4015497078002777433,
		),
		$client->inputPeerChannel(
			channel_id : -8022292436430403986,
			access_hash : -5915785199243549776,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 50,
			user_id : -2247125550128281126,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 83,
			channel_id : 5325986573405595498,
		),
	),
	limit : 6,
);
```