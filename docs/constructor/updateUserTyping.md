# updateUserTyping

**Description** : *The user is preparing a message; typing, recording, uploading, etc\. This update is valid for 6 seconds\. If no further updates of this kind are received after 6 seconds, it should be considered that the user stopped doing whatever they were doing*

**Layer** : 229

```tl
updateUserTyping#2a17bf5c flags:# user_id:long top_msg_id:flags.0?int action:SendMessageAction = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>user_id</mark> | [`long`](type/long) | User id |
| **top_msg_id** | [`flags.0?int`](type/int) | If set, this notification was sent within a bot forum topic » |
| <mark>action</mark> | [`SendMessageAction`](type/SendMessageAction) | Action type |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateUserTyping(
	user_id : 3463720886361818843,
	top_msg_id : 95,
	action : $client->sendMessageTypingAction(),
);
```