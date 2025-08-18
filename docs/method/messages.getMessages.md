# messages.getMessages

**Description** : *Returns the list of messages by their IDs*

**Layer** : 211

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
			id : 59,
		),
		$client->inputMessageReplyTo(
			id : 90,
		),
		$client->inputMessagePinned(),
		$client->inputMessageCallbackQuery(
			id : 81,
			query_id : 3090374558845132404,
		),
	),
);
```