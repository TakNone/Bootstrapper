# messageActionSetChatWallPaper

**Description** : *The wallpaper » of the current chat was changed*

**Layer** : 211

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
		id : -2898338962503251899,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 448966416666841746,
		slug : 'LFqgWQ387GH9AkPi',
		document : $client->documentEmpty(
			id : -5005308862949088130,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 11,
			second_background_color : 4,
			third_background_color : 47,
			fourth_background_color : 76,
			intensity : 17,
			rotation : 41,
			emoticon : 'gbTqudRO3x8UDLYC',
		),
	),
);
```