# messages.searchSentMedia

**Description** : *View and search recently sent media\.
This method does not support pagination*

**Layer** : 214

```tl
messages.searchSentMedia#107e31a0 q:string filter:MessagesFilter limit:int = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>q</mark> | [`string`](type/string) | Optional search query |
| <mark>filter</mark> | [`MessagesFilter`](type/MessagesFilter) | Message filter |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return (max 100) |

---

## Result

[messages.Messages](type/messages.Messages)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FILTER_NOT_SUPPORTED** | `400` | The specified filter cannot be used in this context |

---

## Example

```php
$messagesMessages = $client->messages->searchSentMedia(
	q : 'Rhjk9pHaX3PBUQIf',
	filter : $client->inputMessagesFilterEmpty(),
	limit : 67,
);
```