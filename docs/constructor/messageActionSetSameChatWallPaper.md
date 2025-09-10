# messageActionSetSameChatWallPaper

**Description** : *The user applied a wallpaper &raquo; previously sent by the other user in a messageActionSetChatWallPaper message*

**Layer** : 214

```tl
messageActionSetSameChatWallPaper#c0787d6d wallpaper:WallPaper = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>wallpaper</mark> | [`WallPaper`](type/WallPaper) | The wallpaper |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionSetSameChatWallPaper(
	wallpaper : $client->wallPaper(
		id : 7892460173617839926,
		creator : true,
		default : true,
		pattern : true,
		dark : true,
		access_hash : 5158439840618028856,
		slug : 'Jq0ENb3W9ik8reG1',
		document : $client->documentEmpty(
			id : -4089094292970498310,
		),
		settings : $client->wallPaperSettings(
			blur : true,
			motion : true,
			background_color : 27,
			second_background_color : 97,
			third_background_color : 60,
			fourth_background_color : 90,
			intensity : 40,
			rotation : 30,
			emoticon : '98fOTuhdlmZgxaQX',
		),
	),
);
```