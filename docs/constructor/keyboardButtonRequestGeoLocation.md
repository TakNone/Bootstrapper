# keyboardButtonRequestGeoLocation

**Description** : *Button to request a user&#039;s geolocation*

**Layer** : 216

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
	text : 'FNzvZ3csDQxXj9GJ',
);
```