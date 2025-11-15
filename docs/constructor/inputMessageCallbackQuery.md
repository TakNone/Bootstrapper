# inputMessageCallbackQuery

**Description** : *Used by bots for fetching information about the message that originated a callback query*

**Layer** : 218

```tl
inputMessageCallbackQuery#acfa1a7e id:int query_id:long = InputMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`int`](type/int) | Message ID |
| <mark>query_id</mark> | [`long`](type/long) | Callback query ID |

---

## Type

[InputMessage](type/InputMessage)

---

## Example

```php
$inputMessage = $client->inputMessageCallbackQuery(
	id : 89,
	query_id : -361096051114684524,
);
```