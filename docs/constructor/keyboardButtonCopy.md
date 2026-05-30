# keyboardButtonCopy

**Description** : *Clipboard button: when clicked, the attached text must be copied to the clipboard*

**Layer** : 222

```tl
keyboardButtonCopy#bcc4af10 flags:# style:flags.10?KeyboardButtonStyle text:string copy_text:string = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **style** | [`flags.10?KeyboardButtonStyle`](type/KeyboardButtonStyle) | NOTHING |
| <mark>text</mark> | [`string`](type/string) | Title of the button |
| <mark>copy_text</mark> | [`string`](type/string) | The text that will be copied to the clipboard |

---

## Type

[KeyboardButton](type/KeyboardButton)

---

## Example

```php
$keyboardButton = $client->keyboardButtonCopy(
	style : $client->keyboardButtonStyle(
		bg_primary : true,
		bg_danger : true,
		bg_success : true,
		icon : 2116425420451334289,
	),
	text : 'T3axihcVlbZS0AYU',
	copy_text : 'Gdt4sjnMk9g8a76z',
);
```