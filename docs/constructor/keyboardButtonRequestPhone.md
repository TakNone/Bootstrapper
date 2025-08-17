# keyboardButtonRequestPhone

**Description** : *Button to request a user's phone number*

**Layer** : 211

```tl
keyboardButtonRequestPhone#b16a6c29 text:string = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`string`](type/string) | Button text |

---

## Type

[KeyboardButton](type/KeyboardButton)

---

## Example

```php
$keyboardButton = $client->keyboardButtonRequestPhone(
	text : 'pCgKSdLnP7MUfi6I',
);
```