# inputKeyboardButtonUserProfile

**Description** : *Button that links directly to a user profile*

**Layer** : 218

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
	text : 'cwoCD4SXUy13aW6L',
	user_id : $client->get_input_user(user : '@TakNone'),
);
```