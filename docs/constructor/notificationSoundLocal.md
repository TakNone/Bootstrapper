# notificationSoundLocal

**Description** : *Indicates a specific local notification sound should be used*

**Layer** : 218

```tl
notificationSoundLocal#830b9ae4 title:string data:string = NotificationSound;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>title</mark> | [`string`](type/string) | Notification sound title |
| <mark>data</mark> | [`string`](type/string) | Notification sound identifier (arbitrary data used by the client to identify a specific local notification sound) |

---

## Type

[NotificationSound](type/NotificationSound)

---

## Example

```php
$notificationSound = $client->notificationSoundLocal(
	title : 'utAKaUHcvYT06goy',
	data : 'MLIGw3XknVl5uyYN',
);
```