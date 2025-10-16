# keyboardButtonRequestPoll

**Description** : *A button that allows the user to create and send a poll when pressed; available only in private*

**Layer** : 216

```tl
keyboardButtonRequestPoll#bbc7515d flags:# quiz:flags.0?Bool text:string = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **quiz** | [`flags.0?Bool`](type/Bool) | If set, only quiz polls can be sent |
| <mark>text</mark> | [`string`](type/string) | Button text |

---

## Type

[KeyboardButton](type/KeyboardButton)

---

## Example

```php
$keyboardButton = $client->keyboardButtonRequestPoll(
	quiz : true,
	text : 'HabtywM1pEv9ujFT',
);
```