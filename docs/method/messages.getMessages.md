# messages.getMessages

**Description** : *Returns the list of messages by their IDs*

**Layer** : 218

```tl
messages.getMessages#63c66506 id:Vector<InputMessage> = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`Vector<InputMessage>`](type/InputMessage) | Message ID list |

---

## Result

[messages.Messages](type/messages.Messages)

---

## Example

```php
$messagesMessages = $client->messages->getMessages(
	id : array(
		$client->inputMessageID(
			id : 92,
		),
		$client->inputMessageReplyTo(
			id : 37,
		),
		$client->inputMessagePinned(),
		$client->inputMessageCallbackQuery(
			id : 39,
			query_id : -6950387034510516675,
		),
	),
);
```