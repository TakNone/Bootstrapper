# inputBotInlineMessageID64

**Description** : *Represents a sent inline message from the perspective of a bot*

**Layer** : 216

```tl
inputBotInlineMessageID64#b6d915d7 dc_id:int owner_id:long id:int access_hash:long = InputBotInlineMessageID;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>dc_id</mark> | [`int`](type/int) | DC ID to use when working with this inline message |
| <mark>owner_id</mark> | [`long`](type/long) | ID of the owner of this message |
| <mark>id</mark> | [`int`](type/int) | ID of message |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash of message |

---

## Type

[InputBotInlineMessageID](type/InputBotInlineMessageID)

---

## Example

```php
$inputBotInlineMessageID = $client->inputBotInlineMessageID64(
	dc_id : 25,
	owner_id : 4965272862963561577,
	id : 53,
	access_hash : -2044931174196156474,
);
```