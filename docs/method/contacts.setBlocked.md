# contacts.setBlocked

**Description** : *Replace the contents of an entire blocklist, see here for more info »*

**Layer** : 211

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
			chat_id : 5364057489307261029,
		),
		$client->inputPeerUser(
			user_id : 2950983539094367501,
			access_hash : 2207778953113495897,
		),
		$client->inputPeerChannel(
			channel_id : 3307293262232163670,
			access_hash : 3366226650850170828,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 27,
			user_id : 7036202466079846740,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 93,
			channel_id : 7515487427904956759,
		),
	),
	limit : 9,
);
```