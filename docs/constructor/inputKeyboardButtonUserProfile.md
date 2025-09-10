# inputKeyboardButtonUserProfile

**Description** : *Button that links directly to a user profile*

**Layer** : 214

```tl
inputKeyboardButtonUserProfile#e988037b text:string user_id:InputUser = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`string`](type/string) | Button text |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | User ID |

---

## Type

[KeyboardButton](type/KeyboardButton)

---

## Example

```php
$keyboardButton = $client->inputKeyboardButtonUserProfile(
	text : 'nHV6BOTmY81WLspP',
	user_id : $client->inputUserEmpty(),
);
```