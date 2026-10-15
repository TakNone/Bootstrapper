# messageActionSetChatWallPaper

**Description** : *The wallpaper &raquo; of the current chat was changed*

**Layer** : 229

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
		id : 6327418979157942323,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 2837470687469958304,
		slug : 'GtlrNLFVKXBbupcz',
		document : $client->documentEmpty(
			id : 4002176754283325880,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 85,
			second_background_color : 55,
			third_background_color : 69,
			fourth_background_color : 74,
			intensity : 7,
			rotation : 31,
			emoticon : 'K1gPF8WtMIkSEXdr',
		),
	),
);
```