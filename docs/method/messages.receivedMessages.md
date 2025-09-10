# messages.receivedMessages

**Description** : *Confirms receipt of messages by a client, cancels PUSH\-notification sending*

**Layer** : 214

```tl
messages.receivedMessages#5a954c0 max_id:int = Vector<ReceivedNotifyMessage>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>max_id</mark> | [`int`](type/int) | Maximum message ID available in a client |

---

## Result

[Vector<ReceivedNotifyMessage>](type/ReceivedNotifyMessage)

---

## Example

```php
$receivedNotifyMessage = $client->messages->receivedMessages(
	max_id : 85,
);
```