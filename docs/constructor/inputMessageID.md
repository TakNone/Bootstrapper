# inputMessageID

**Description** : *Message by ID*

**Layer** : 216

```tl
inputMessageID#a676a322 id:int = InputMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`int`](type/int) | Message ID |

---

## Type

[InputMessage](type/InputMessage)

---

## Example

```php
$inputMessage = $client->inputMessageID(
	id : 64,
);
```