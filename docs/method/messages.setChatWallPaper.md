# messages.setChatWallPaper

**Description** : *Set a custom wallpaper &raquo; in a specific private chat with another user*

**Layer** : 216

```tl
messages.setChatWallPaper#8ffacae1 flags:# for_both:flags.3?true revert:flags.4?true peer:InputPeer wallpaper:flags.0?InputWallPaper settings:flags.2?WallPaperSettings id:flags.1?int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **for_both** | [`flags.3?true`](type/true) | Only for Premium users, sets the specified wallpaper for both users of the chat, without requiring confirmation from the other user |
| **revert** | [`flags.4?true`](type/true) | If we don't like the new wallpaper the other user of the chat has chosen for us using the for_both flag, we can re-set our previous wallpaper just on our side using this flag |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The private chat where the wallpaper will be set |
| **wallpaper** | [`flags.0?InputWallPaper`](type/InputWallPaper) | The wallpaper », obtained as described in the wallpaper documentation »; must not be provided when installing a wallpaper obtained from a messageActionSetChatWallPaper service message (id must be provided, instead) |
| **settings** | [`flags.2?WallPaperSettings`](type/WallPaperSettings) | Wallpaper settings, obtained as described in the wallpaper documentation » or from messageActionSetChatWallPaper.wallpaper.settings |
| **id** | [`flags.1?int`](type/int) | If the wallpaper was obtained from a messageActionSetChatWallPaper service message, must contain the ID of that message |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **WALLPAPER_INVALID** | `400` | The specified wallpaper is invalid |
| **WALLPAPER_NOT_FOUND** | `400` | The specified wallpaper could not be found |

---

## Example

```php
$updates = $client->messages->setChatWallPaper(
	for_both : true,
	revert : true,
	peer : $client->inputPeerEmpty(),
	wallpaper : $client->inputWallPaper(
		id : -4778280696126476204,
		access_hash : 3077229505282414235,
	),
	settings : $client->wallPaperSettings(
		blur : true,
		motion : true,
		background_color : 88,
		second_background_color : 56,
		third_background_color : 22,
		fourth_background_color : 30,
		intensity : 33,
		rotation : 13,
		emoticon : 'SZWD1AIOnv5dfs7B',
	),
	id : 77,
);
```