# keyboardButtonRequestGeoLocation

**Description** : *Button to request a user's geolocation*

**Layer** : 211

```tl
keyboardButtonRequestGeoLocation#fc796b3f text:string = KeyboardButton;
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
$keyboardButton = $client->keyboardButtonRequestGeoLocation(
	text : 'uKZwvIxBXEm7zGdP',
);
```