# messageActionSetChatWallPaper

**Description** : *The wallpaper &raquo; of the current chat was changed*

**Layer** : 216

```tl
messageActionSetChatWallPaper#5060a3f4 flags:# same:flags.0?true for_both:flags.1?true wallpaper:WallPaper = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **same** | [`flags.0?true`](type/true) | If set, indicates the user applied a wallpaper » previously sent by the other user in a messageActionSetChatWallPaper message |
| **for_both** | [`flags.1?true`](type/true) | If set, indicates the wallpaper was forcefully applied for both sides, without explicit confirmation from the other side. If the message is incoming, and we did not like the new wallpaper the other user has chosen for us, we can re-set our previous wallpaper just on our side, by invoking messages.setChatWallPaper, providing only the revert flag (and obviously the peer parameter) |
| <mark>wallpaper</mark> | [`WallPaper`](type/WallPaper) | New wallpaper |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionSetChatWallPaper(
	same : true,
	for_both : true,
	wallpaper : $client->wallPaper(
		id : 5078360095431587339,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : -8564358609144349761,
		slug : '0UjntySFmIbOL2B6',
		document : $client->documentEmpty(
			id : -7533502625209623831,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 32,
			second_background_color : 91,
			third_background_color : 79,
			fourth_background_color : 63,
			intensity : 98,
			rotation : 92,
			emoticon : 'S21lHwancmFVUbqg',
		),
	),
);
```