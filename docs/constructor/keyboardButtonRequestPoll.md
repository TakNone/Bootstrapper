# keyboardButtonRequestPoll

**Description** : *A button that allows the user to create and send a poll when pressed; available only in private*

**Layer** : 222

```tl
keyboardButtonRequestPoll#7a11d782 flags:# style:flags.10?KeyboardButtonStyle quiz:flags.0?Bool text:string = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **style** | [`flags.10?KeyboardButtonStyle`](type/KeyboardButtonStyle) | NOTHING |
| **quiz** | [`flags.0?Bool`](type/Bool) | If set, only quiz polls can be sent |
| <mark>text</mark> | [`string`](type/string) | Button text |

---

## Type

[KeyboardButton](type/KeyboardButton)

---

## Example

```php
$keyboardButton = $client->keyboardButtonRequestPoll(
	style : $client->keyboardButtonStyle(
		bg_primary : true,
		bg_danger : true,
		bg_success : true,
		icon : -7421173567107597236,
	),
	quiz : true,
	text : 'mCXWrO1ia0HFvML7',
);
```