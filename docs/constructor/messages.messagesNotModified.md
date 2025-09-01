# messages.messagesNotModified

**Description** : *No new messages matching the query were found*

**Layer** : 214

```tl
messages.messagesNotModified#74535f21 count:int = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Number of results found server-side by the given query |

---

## Type

[messages.Messages](type/messages.Messages)

---

## Example

```php
$messagesMessages = $client->messages->messagesNotModified(
	count : 56,
);
```