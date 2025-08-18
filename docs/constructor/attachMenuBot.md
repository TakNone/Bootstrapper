# attachMenuBot

**Description** : *Represents a bot mini app that can be launched from the attachment/side menu &raquo;*

**Layer** : 211

```tl
attachMenuBot#d90d8dfe flags:# inactive:flags.0?true has_settings:flags.1?true request_write_access:flags.2?true show_in_attach_menu:flags.3?true show_in_side_menu:flags.4?true side_menu_disclaimer_needed:flags.5?true bot_id:long short_name:string peer_types:flags.3?Vector<AttachMenuPeerType> icons:Vector<AttachMenuBotIcon> = AttachMenuBot;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **inactive** | [`flags.0?true`](type/true) | If set, before launching the mini app the client should ask the user to add the mini app to the attachment/side menu, and only if the user accepts, after invoking messages.toggleBotInAttachMenu the app should be opened |
| **has_settings** | [`flags.1?true`](type/true) | Deprecated flag, can be ignored |
| **request_write_access** | [`flags.2?true`](type/true) | Whether the bot would like to send messages to the user |
| **show_in_attach_menu** | [`flags.3?true`](type/true) | Whether, when installed, an attachment menu entry should be shown for the Mini App |
| **show_in_side_menu** | [`flags.4?true`](type/true) | Whether, when installed, an entry in the main view side menu should be shown for the Mini App |
| **side_menu_disclaimer_needed** | [`flags.5?true`](type/true) | If inactive if set and the user hasn't previously accepted the third-party mini apps Terms of Service for this bot, when showing the mini app installation prompt, an additional mandatory checkbox to accept the mini apps TOS and a disclaimer indicating that this Mini App is not affiliated to Telegram should be shown |
| <mark>bot_id</mark> | [`long`](type/long) | Bot ID |
| <mark>short_name</mark> | [`string`](type/string) | Attachment menu item name |
| **peer_types** | [`flags.3?Vector<AttachMenuPeerType>`](type/AttachMenuPeerType) | List of dialog types where this attachment menu entry should be shown |
| <mark>icons</mark> | [`Vector<AttachMenuBotIcon>`](type/AttachMenuBotIcon) | List of platform-specific static icons and animations to use for the attachment menu button |

---

## Type

[AttachMenuBot](type/AttachMenuBot)

---

## Example

```php
$attachMenuBot = $client->attachMenuBot(
	inactive : true,
	has_settings : true,
	request_write_access : true,
	show_in_attach_menu : true,
	show_in_side_menu : true,
	side_menu_disclaimer_needed : true,
	bot_id : 5142399176518465011,
	short_name : 'gI8Jm3rHC4ebfu76',
	peer_types : array(
		$client->attachMenuPeerTypeSameBotPM(),
		$client->attachMenuPeerTypeBotPM(),
		$client->attachMenuPeerTypePM(),
		$client->attachMenuPeerTypeChat(),
		$client->attachMenuPeerTypeBroadcast(),
	),
	icons : array(
		$client->attachMenuBotIcon(
			name : 'AVpvfrOZRhiN46Kq',
			icon : $client->documentEmpty(
				id : -5615293895402548731,
			),
			colors : array(
				$client->attachMenuBotIconColor(
					name : 'pmrsWLbFKf4Mzg9k',
					color : 35,
				),
			),
		),
	),
);
```