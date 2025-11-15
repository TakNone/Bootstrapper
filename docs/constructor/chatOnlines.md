# chatOnlines

**Description** : *Number of online users in a chat*

**Layer** : 216

```tl
chatOnlines#f041e250 onlines:int = ChatOnlines;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>onlines</mark> | [`int`](type/int) | Number of online users |

---

## Type

[ChatOnlines](type/ChatOnlines)

---

## Example

```php
$chatOnlines = $client->chatOnlines(
	onlines : 74,
);
```