# messageActionSetChatWallPaper

**Description** : *The wallpaper &raquo; of the current chat was changed*

**Layer** : 227

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
		id : 6534137611177370418,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 232688466403161323,
		slug : '2wamWqyYPc0zFS91',
		document : $client->documentEmpty(
			id : 6093046925307986993,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 53,
			second_background_color : 92,
			third_background_color : 11,
			fourth_background_color : 85,
			intensity : 16,
			rotation : 100,
			emoticon : 'BWZEt1sYuz65kpVF',
		),
	),
);
```