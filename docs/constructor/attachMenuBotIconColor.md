# attachMenuBotIconColor

**Description** : *Represents an attachment menu icon color for bot mini apps &raquo;*

**Layer** : 216

```tl
attachMenuBotIconColor#4576f3f0 name:string color:int = AttachMenuBotIconColor;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>name</mark> | [`string`](type/string) | One of the following values: light_icon - Color of the attachment menu icon (light mode) light_text - Color of the attachment menu label, once selected (light mode) dark_icon - Color of the attachment menu icon (dark mode) dark_text - Color of the attachment menu label, once selected (dark mode) |
| <mark>color</mark> | [`int`](type/int) | Color in RGB24 format |

---

## Type

[AttachMenuBotIconColor](type/AttachMenuBotIconColor)

---

## Example

```php
$attachMenuBotIconColor = $client->attachMenuBotIconColor(
	name : 'aHJpAgkMrsOz1y93',
	color : 71,
);
```