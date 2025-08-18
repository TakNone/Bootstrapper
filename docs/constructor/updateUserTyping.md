# updateUserTyping

**Description** : *The user is preparing a message; typing, recording, uploading, etc\. This update is valid for 6 seconds\. If no further updates of this kind are received after 6 seconds, it should be considered that the user stopped doing whatever they were doing*

**Layer** : 211

```tl
updateUserTyping#c01e857f user_id:long action:SendMessageAction = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | User id |
| <mark>action</mark> | [`SendMessageAction`](type/SendMessageAction) | Action type |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateUserTyping(
	user_id : 851703221043587547,
	action : $client->sendMessageTypingAction(),
);
```