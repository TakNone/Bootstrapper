# attachMenuBotIcon

**Description** : *Represents an attachment menu icon for bot mini apps &raquo;*

**Layer** : 222

```tl
attachMenuBotIcon#b2a7386b flags:# name:string icon:Document colors:flags.0?Vector<AttachMenuBotIconColor> = AttachMenuBotIcon;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>name</mark> | [`string`](type/string) | One of the following values: note that animated icons must be played when the user clicks on the button, activating the bot mini app. default_static - Default attachment menu icon in SVG format placeholder_static - Default placeholder for opened Web Apps in SVG format ios_static - Attachment menu icon in SVG format for the official iOS app ios_animated - Animated attachment menu icon in TGS format for the official iOS app android_animated - Animated attachment menu icon in TGS format for the official Android app macos_animated - Animated attachment menu icon in TGS format for the official native Mac OS app ios_side_menu_static - Side menu icon in PNG format for the official iOS app android_side_menu_static - Side menu icon in SVG format for the official android app macos_side_menu_static - Side menu icon in PNG format for the official native Mac OS app |
| <mark>icon</mark> | [`Document`](type/Document) | The actual icon file |
| **colors** | [`flags.0?Vector<AttachMenuBotIconColor>`](type/AttachMenuBotIconColor) | Attachment menu icon colors |

---

## Type

[AttachMenuBotIcon](type/AttachMenuBotIcon)

---

## Example

```php
$attachMenuBotIcon = $client->attachMenuBotIcon(
	name : 'Pa3TkZCD9pREI6dg',
	icon : $client->documentEmpty(
		id : -8899028085154539724,
	),
	colors : array(
		$client->attachMenuBotIconColor(
			name : 'Wpo348nv09dAEtSV',
			color : 71,
		),
	),
);
```