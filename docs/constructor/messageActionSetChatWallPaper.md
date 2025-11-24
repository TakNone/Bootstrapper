# messageActionSetChatWallPaper

**Description** : *The wallpaper &raquo; of the current chat was changed*

**Layer** : 218

```tl
messageActionSetChatWallPaper#5060a3f4 flags:# same:flags.0?true for_both:flags.1?true wallpaper:WallPaper = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
		id : 3643747546774935759,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 6058752943583050892,
		slug : 'BFRPe2E6vM5Vaxmu',
		document : $client->documentEmpty(
			id : 6118040153801948933,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 47,
			second_background_color : 59,
			third_background_color : 95,
			fourth_background_color : 23,
			intensity : 52,
			rotation : 33,
			emoticon : '98p4xmoXLFWkqTiV',
		),
	),
);
```